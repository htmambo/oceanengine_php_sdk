<?php

declare(strict_types=1);

namespace Oceanengine\Token;

use Oceanengine\Api\Oauth2AccessTokenApiService;
use Oceanengine\Api\Oauth2AppAccessTokenApiService;
use Oceanengine\Api\Oauth2RefreshTokenApiService;
use Oceanengine\Api\Oauth2RenewTokenApiService;
use Oceanengine\ApiClient;
use Oceanengine\Models\Oauth2AccessTokenRequest;
use Oceanengine\Models\Oauth2AppAccessTokenRequest;
use Oceanengine\Models\Oauth2RefreshTokenRequest;
use Oceanengine\Models\Oauth2RenewTokenRequest;

/**
 * 基于 SDK 自身 oauth2 接口的 token 提供者，负责换取、续期与 refresh 轮换。
 *
 * 支持的 mode：
 * - app_access_token：app_id + secret 换取应用级 access token；
 * - access_token：app_id + secret + auth_code 换取 access token（含 refresh_token）；
 * - renew_token：app_id + secret + refresh_token 重置 token 有效期；
 * - refresh_token：app_id + secret + refresh_token 换取新的 access token。
 *
 * 注意：$apiClient 必须是用于鉴权请求的独立客户端，不要挂载 TokenMiddleware，
 * 否则刷新请求会再次进入取 token 的流程造成递归。
 */
class OAuthTokenProvider implements TokenProviderInterface
{
    public const MODE_APP_ACCESS_TOKEN = 'app_access_token';
    public const MODE_ACCESS_TOKEN = 'access_token';
    public const MODE_RENEW_TOKEN = 'renew_token';
    public const MODE_REFRESH_TOKEN = 'refresh_token';

    /** @var ApiClient */
    private ApiClient $apiClient;

    /** @var string */
    private string $mode;

    /** @var array<string, mixed> app_id / secret / auth_code / refresh_token */
    private array $credentials;

    /** @var TokenStoreInterface|null */
    private ?TokenStoreInterface $store;

    /** @var string */
    private string $key;

    /** @var int */
    /** @var int 等待刷新锁的最长时间（毫秒） */
    private int $lockWaitMs;

    /** @var int 刷新锁的自动过期时间（秒） */
    private int $lockTtlSeconds;

    private int $refreshSkewSeconds;

    /** @var string|null 当前 access token（内存副本） */
    private ?string $token = null;

    /** @var int|null 当前 access token 的过期时间戳 */
    private ?int $expiresAt = null;

    /** @var int|null 当前 access token 的有效期秒数 */
    private ?int $expiresIn = null;

    /** @var string|null 当前 refresh token（内存副本，轮换后更新） */
    private ?string $refreshToken = null;

    /** @var int|null 当前 refresh token 的过期时间戳 */
    private ?int $refreshExpiresAt = null;

    /**
     * @param ApiClient $apiClient 用于换取/续期的独立客户端（不要挂 TokenMiddleware）
     * @param string $mode app_access_token | access_token | renew_token | refresh_token
     * @param array<string, mixed> $credentials 按 mode 需要的凭证
     * @param TokenStoreInterface|null $store token 持久化存储
     * @param string $key 存储键
     * @param int $refreshSkewSeconds 提前刷新时间
     */
    public function __construct(
        ApiClient $apiClient,
        string $mode,
        array $credentials,
        ?TokenStoreInterface $store = null,
        string $key = 'default',
        int $refreshSkewSeconds = 60,
        int $lockWaitMs = 5000,
        int $lockTtlSeconds = 30
    ) {
        $this->apiClient = $apiClient;
        $this->mode = $mode;
        $this->credentials = $credentials;
        $this->store = $store;
        $this->key = $key;
        $this->refreshSkewSeconds = $refreshSkewSeconds;
        $this->lockWaitMs = max(0, $lockWaitMs);
        $this->lockTtlSeconds = max(1, $lockTtlSeconds);
    }

    /**
     * 缓存命中直接返回，否则按 mode 调用对应的 oauth2 接口换取。
     *
     * @return string
     */
    public function getToken(): string
    {
        $record = $this->store !== null ? $this->store->get($this->key) : null;
        if ($record !== null) {
            $this->syncRefreshToken($record);
            $cachedToken = (string)($record['token'] ?? '');
            $cachedExpiresAt = (int)($record['expires_at'] ?? 0);
            if ($cachedToken !== '' && ($cachedExpiresAt - time()) > $this->refreshSkewSeconds) {
                $this->token = $cachedToken;
                $this->expiresAt = $cachedExpiresAt;
                return $cachedToken;
            }
        } elseif ($this->token !== null && $this->expiresAt !== null
            && ($this->expiresAt - time()) > $this->refreshSkewSeconds
        ) {
            return $this->token;
        }

        // 共享存储下必须串行刷新：refresh_token 是一次性的，
        // 并发刷新会让后到的 worker 拿到已作废的凭证，会话就此失效。
        $lock = $this->store instanceof TokenLockInterface ? $this->store : null;
        if ($lock === null) {
            return $this->requestToken();
        }

        $waited = 0;
        $acquired = false;
        while (true) {
            $acquired = $lock->acquire($this->key, $this->lockTtlSeconds);
            if ($acquired) {
                break;
            }
            // 等锁期间别的 worker 可能已经刷新完，先看缓存
            $fresh = $this->readFreshTokenFromStore();
            if ($fresh !== null) {
                return $fresh;
            }
            if ($waited >= $this->lockWaitMs) {
                // 拿不到锁就不刷新：绕过锁去刷新会与持锁者并发轮换 refresh_token，
                // 后到的一方会拿到已作废的凭证。宁可失败，让调用方退避重试。
                throw new TokenLockTimeoutException($this->key, $waited);
            }
            usleep(50000);
            $waited += 50;
        }
        try {
            // 拿到锁后二次检查：可能已有 worker 刷新过
            $fresh = $this->readFreshTokenFromStore();
            if ($fresh !== null) {
                return $fresh;
            }
            return $this->requestToken();
        } finally {
            // 只释放自己持有的锁
            if ($acquired) {
                $lock->release($this->key);
            }
        }
    }

    /**
     * 从共享存储读取尚未过期的 token。
     *
     * @return string|null
     */
    private function readFreshTokenFromStore(): ?string
    {
        if ($this->store === null) {
            return null;
        }
        $record = $this->store->get($this->key);
        if ($record === null) {
            return null;
        }
        $token = (string)($record['token'] ?? '');
        $expiresAt = (int)($record['expires_at'] ?? 0);
        if ($token === '' || ($expiresAt - time()) <= $this->refreshSkewSeconds) {
            return null;
        }
        $this->token = $token;
        $this->expiresAt = $expiresAt;
        return $token;
    }

    /**
     * 清空缓存。续期模式下保留 refresh token，避免失去续期能力。
     *
     * @param string|null $token
     * @return void
     */
    public function invalidate(?string $token = null): void
    {
        $this->token = null;
        $this->expiresAt = null;
        $this->expiresIn = null;

        if ($this->store === null) {
            return;
        }
        if ($this->keepsRefreshToken() && $this->refreshToken !== null && $this->refreshToken !== '') {
            // 保留 refresh token，只让 access token 失效
            $this->store->set($this->key, [
                'token' => '',
                'expires_at' => 0,
                'refresh_token' => $this->refreshToken,
                'refresh_expires_at' => (int)$this->refreshExpiresAt,
            ]);
            return;
        }
        $this->store->delete($this->key);
    }

    /**
     * 当前 access token 的过期时间戳（0 表示未知）。
     *
     * @return int
     */
    public function getExpiresAt(): int
    {
        return (int)$this->expiresAt;
    }

    /**
     * 当前 access token 的有效期秒数（0 表示未知）。
     *
     * @return int
     */
    public function getExpiresIn(): int
    {
        return (int)$this->expiresIn;
    }

    /**
     * 当前 refresh token（内存副本）。
     *
     * @return string|null
     */
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    /**
     * 按 mode 调用对应的 oauth2 接口。
     *
     * @return string
     */
    private function requestToken(): string
    {
        switch ($this->mode) {
            case self::MODE_APP_ACCESS_TOKEN:
                $response = $this->requestAppAccessToken();
                break;
            case self::MODE_ACCESS_TOKEN:
                $response = $this->requestAccessToken();
                break;
            case self::MODE_RENEW_TOKEN:
                $response = $this->requestRenewToken();
                break;
            case self::MODE_REFRESH_TOKEN:
                $response = $this->requestRefreshToken();
                break;
            default:
                throw new \InvalidArgumentException(sprintf(
                    '未知的 token mode: %s（可选 app_access_token / access_token / renew_token / refresh_token）',
                    $this->mode
                ));
        }

        $result = $this->normalizeResponse($response);
        $token = (string)$result['access_token'];
        if ($token === '') {
            throw new \RuntimeException(sprintf('获取 token 失败 (mode=%s): 响应中没有 access_token', $this->mode));
        }
        $this->persist($token, (int)$result['expires_in'], (string)$result['refresh_token'], (int)$result['refresh_token_expires_in']);
        return $token;
    }

    /**
     * @return object
     */
    private function requestAppAccessToken(): object
    {
        $request = new Oauth2AppAccessTokenRequest();
        $request->setAppId($this->requireAppId())
            ->setSecret($this->requireSecret());
        $service = new Oauth2AppAccessTokenApiService($this->apiClient);
        return $service->post()->oauth2AppAccessTokenRequest($request)->execute();
    }

    /**
     * @return object
     */
    private function requestAccessToken(): object
    {
        $authCode = (string)($this->credentials['auth_code'] ?? '');
        if ($authCode === '') {
            throw new \InvalidArgumentException('缺少 auth_code：access_token 模式需要授权码');
        }
        $request = new Oauth2AccessTokenRequest();
        $request->setAppId($this->requireAppId())
            ->setSecret($this->requireSecret())
            ->setAuthCode($authCode);
        $service = new Oauth2AccessTokenApiService($this->apiClient);
        return $service->post()->oauth2AccessTokenRequest($request)->execute();
    }

    /**
     * @return object
     */
    private function requestRenewToken(): object
    {
        $request = new Oauth2RenewTokenRequest();
        $request->setAppId($this->requireAppId())
            ->setSecret($this->requireSecret())
            ->setRefreshToken($this->resolveRefreshToken());
        $service = new Oauth2RenewTokenApiService($this->apiClient);
        return $service->post()->oauth2RenewTokenRequest($request)->execute();
    }

    /**
     * @return object
     */
    private function requestRefreshToken(): object
    {
        $request = new Oauth2RefreshTokenRequest();
        $request->setAppId($this->requireAppId())
            ->setSecret($this->requireSecret())
            ->setRefreshToken($this->resolveRefreshToken());
        $service = new Oauth2RefreshTokenApiService($this->apiClient);
        return $service->post()->oauth2RefreshTokenRequest($request)->execute();
    }

    /**
     * 统一各响应结构的字段。异常信息只带业务码与 request_id，不含 token。
     *
     * @param object $response
     * @return array{access_token:string, expires_in:int, refresh_token:string, refresh_token_expires_in:int}
     */
    private function normalizeResponse(object $response): array
    {
        $code = (int)$response->getCode();
        $message = (string)($response->getMessage() ?? '');
        $requestId = (string)($response->getRequestId() ?? '');
        if ($code !== 0) {
            throw new \RuntimeException(sprintf(
                '获取 token 失败 (mode=%s, code=%d): %s [request_id=%s]',
                $this->mode,
                $code,
                $message,
                $requestId
            ));
        }

        $data = $response->getData();
        $accessToken = '';
        $expiresIn = 0;
        $refreshToken = '';
        $refreshExpiresIn = 0;
        if ($data !== null) {
            $accessToken = (string)($data->getAccessToken() ?? '');
            $expiresIn = (int)($data->getExpiresIn() ?? 0);
            if (method_exists($data, 'getRefreshToken')) {
                $refreshToken = (string)($data->getRefreshToken() ?? '');
            }
            if (method_exists($data, 'getRefreshTokenExpiresIn')) {
                $refreshExpiresIn = (int)($data->getRefreshTokenExpiresIn() ?? 0);
            }
        }

        return [
            'access_token' => $accessToken,
            'expires_in' => $expiresIn,
            'refresh_token' => $refreshToken,
            'refresh_token_expires_in' => $refreshExpiresIn,
        ];
    }

    /**
     * 写回内存与存储。响应带出新 refresh token 时完成轮换。
     *
     * @param string $token
     * @param int $expiresIn
     * @param string $refreshToken
     * @param int $refreshExpiresIn
     * @return void
     */
    private function persist(string $token, int $expiresIn, string $refreshToken, int $refreshExpiresIn): void
    {
        $now = time();
        $ttl = $expiresIn > 0 ? $expiresIn : CachingTokenProvider::DEFAULT_TTL_SECONDS;
        $this->token = $token;
        $this->expiresIn = $ttl;
        $this->expiresAt = $now + $ttl;
        if ($refreshToken !== '') {
            $this->refreshToken = $refreshToken;
            $this->refreshExpiresAt = $refreshExpiresIn > 0 ? $now + $refreshExpiresIn : 0;
        }

        if ($this->store === null) {
            return;
        }
        $record = [
            'token' => $token,
            'expires_at' => $this->expiresAt,
        ];
        if ($this->refreshToken !== null && $this->refreshToken !== '') {
            $record['refresh_token'] = $this->refreshToken;
            $record['refresh_expires_at'] = (int)$this->refreshExpiresAt;
        }

        // 直接落库：refresh_token 是一次性的，服务端只承认最后一次成功轮换，
        // 所以"刷新成功"就意味着本次的 refresh_token 才是有效的——任何客户端
        // 侧的"较新者优先"判断都可能因为时钟偏差或 TTL 相等而把唯一有效的
        // refresh_token 丢掉，导致会话永久失效。
        try {
            $this->store->set($this->key, $record);
        } catch (\Throwable $e) {
            // 轮换已成功但落库失败：旧的 refresh_token 已被服务端作废，
            // 新的只在本次响应里——把记录带出去让调用方补偿写入
            throw new TokenPersistenceException($record, $e);
        }
    }

    /**
     * @param array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int} $record
     * @return void
     */
    private function syncRefreshToken(array $record): void
    {
        $refreshToken = (string)($record['refresh_token'] ?? '');
        if ($refreshToken !== '') {
            $this->refreshToken = $refreshToken;
            $this->refreshExpiresAt = (int)($record['refresh_expires_at'] ?? 0);
        }
    }

    /**
     * 取续期所需的 refresh token：存储/内存副本优先，凭证作为初始值。
     *
     * @return string
     */
    private function resolveRefreshToken(): string
    {
        $token = $this->refreshToken ?? '';
        if ($token === '') {
            $token = (string)($this->credentials['refresh_token'] ?? '');
        }
        if ($token === '') {
            throw new \InvalidArgumentException('缺少 refresh_token：续期模式需要 refresh_token');
        }
        if ($this->refreshExpiresAt !== null && $this->refreshExpiresAt > 0 && $this->refreshExpiresAt <= time()) {
            throw new \RuntimeException('refresh_token 已过期，需要重新授权');
        }
        return $token;
    }

    /**
     * @return bool
     */
    private function keepsRefreshToken(): bool
    {
        return $this->mode === self::MODE_RENEW_TOKEN || $this->mode === self::MODE_REFRESH_TOKEN;
    }

    /**
     * @return int
     */
    private function requireAppId(): int
    {
        $appId = (int)($this->credentials['app_id'] ?? 0);
        if ($appId <= 0) {
            throw new \InvalidArgumentException('缺少 app_id');
        }
        return $appId;
    }

    /**
     * @return string
     */
    private function requireSecret(): string
    {
        $secret = (string)($this->credentials['secret'] ?? '');
        if ($secret === '') {
            throw new \InvalidArgumentException('缺少 secret');
        }
        return $secret;
    }
}
