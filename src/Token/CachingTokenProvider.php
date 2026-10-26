<?php

declare(strict_types=1);

namespace Oceanengine\Token;

/**
 * 带缓存的 token 提供者：把真正的取 token 逻辑委托给 delegate，
 * 并用 TokenStoreInterface 落地缓存，避免重复换取与重复鉴权。
 */
class CachingTokenProvider implements TokenProviderInterface
{
    /** delegate 未提供有效期信息时使用的默认存活时间（秒） */
    public const DEFAULT_TTL_SECONDS = 3600;

    /** @var TokenProviderInterface 真正的 token 来源 */
    private TokenProviderInterface $delegate;

    /** @var TokenStoreInterface|null */
    private ?TokenStoreInterface $store;

    /** @var string 存储键 */
    private string $key;

    /** @var int 提前刷新的秒数 */
    private int $refreshSkewSeconds;

    /**
     * @param TokenProviderInterface $delegate 真正的 token 来源
     * @param TokenStoreInterface|null $store 缓存存储（null 表示仅进程内缓存）
     * @param string $key 存储键
     * @param int $refreshSkewSeconds 提前刷新时间，剩余有效期小于该值即重新获取
     */
    public function __construct(
        TokenProviderInterface $delegate,
        ?TokenStoreInterface $store = null,
        string $key = 'default',
        int $refreshSkewSeconds = 60
    ) {
        $this->delegate = $delegate;
        $this->store = $store;
        $this->key = $key;
        $this->refreshSkewSeconds = $refreshSkewSeconds;
    }

    /**
     * 命中缓存直接返回，否则向 delegate 取一次并写入存储。
     *
     * @return string
     */
    public function getToken(): string
    {
        $cached = $this->readCache();
        if ($cached !== null) {
            return $cached;
        }

        $token = $this->delegate->getToken();
        if ($token === '') {
            return '';
        }
        $this->writeCache($token);
        return $token;
    }

    /**
     * 删除缓存记录并通知 delegate 失效。
     *
     * @param string|null $token
     * @return void
     */
    public function invalidate(?string $token = null): void
    {
        if ($this->store !== null) {
            $this->store->delete($this->key);
        }
        $this->delegate->invalidate($token);
    }

    /**
     * @return string|null 命中缓存返回 token，未命中返回 null
     */
    private function readCache(): ?string
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
        return $token;
    }

    /**
     * 写回缓存。delegate 若已写入同 token 的完整记录则不再覆盖，
     * 避免丢掉其中的 refresh_token。
     *
     * @param string $token
     * @return void
     */
    private function writeCache(string $token): void
    {
        if ($this->store === null) {
            return;
        }
        $existing = $this->store->get($this->key);
        if ($existing !== null && (string)($existing['token'] ?? '') === $token) {
            return;
        }
        $record = [
            'token' => $token,
            'expires_at' => $this->resolveExpiresAt(),
        ];
        if ($existing !== null && (string)($existing['refresh_token'] ?? '') !== '') {
            $record['refresh_token'] = (string)$existing['refresh_token'];
            $record['refresh_expires_at'] = (int)($existing['refresh_expires_at'] ?? 0);
        }
        $this->store->set($this->key, $record);
    }

    /**
     * 计算缓存记录的过期时间戳。delegate 若实现了 getExpiresAt()/getExpiresIn() 则以其为准。
     *
     * @return int
     */
    private function resolveExpiresAt(): int
    {
        if (method_exists($this->delegate, 'getExpiresAt')) {
            $expiresAt = (int)$this->delegate->getExpiresAt();
            if ($expiresAt > 0) {
                return $expiresAt;
            }
        }
        if (method_exists($this->delegate, 'getExpiresIn')) {
            $ttl = (int)$this->delegate->getExpiresIn();
            if ($ttl > 0) {
                return time() + $ttl;
            }
        }
        return time() + self::DEFAULT_TTL_SECONDS;
    }
}
