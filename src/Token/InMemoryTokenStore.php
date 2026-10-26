<?php

declare(strict_types=1);

namespace Oceanengine\Token;

/**
 * 进程内 token 存储，适合单机或测试场景；生产环境建议实现 TokenStoreInterface 接 DB。
 */
class InMemoryTokenStore implements TokenStoreInterface, TokenLockInterface
{
    /** @var array<string, array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int}> */
    private array $items = [];

    /** @var array<string, resource> 已持有的锁句柄 */
    private array $locks = [];

    /** @var array<string, bool> 本进程已持有的键（避免同进程重复加锁自锁） */
    private static array $held = [];

    /**
     * @param string $key
     * @return array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int}|null
     */
    public function get(string $key): ?array
    {
        if (!isset($this->items[$key])) {
            return null;
        }
        $item = $this->items[$key];
        if ($this->isExpired($item)) {
            unset($this->items[$key]);
            return null;
        }
        return $item;
    }

    /**
     * @param string $key
     * @param array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int} $value
     * @return void
     */
    public function set(string $key, array $value): void
    {
        $item = [
            'token' => (string)($value['token'] ?? ''),
            'expires_at' => (int)($value['expires_at'] ?? time()),
        ];
        $refreshToken = (string)($value['refresh_token'] ?? '');
        if ($refreshToken !== '') {
            $item['refresh_token'] = $refreshToken;
            $item['refresh_expires_at'] = (int)($value['refresh_expires_at'] ?? 0);
        }
        $this->items[$key] = $item;
    }

    /**
     * @param string $key
     * @return void
     */
    public function delete(string $key): void
    {
        unset($this->items[$key]);
    }

    /**
     * @param string $key
     * @param int $ttlSeconds
     * @return bool
     */
    public function acquire(string $key, int $ttlSeconds = 10): bool
    {
        if (isset(self::$held[$key])) {
            // 同进程已持有：视为获取成功（重入），避免自锁
            return true;
        }
        $path = sys_get_temp_dir() . '/oceanengine_token_lock_' . sha1($key);
        $handle = fopen($path, 'c');
        if ($handle === false) {
            return false;
        }
        if (!flock($handle, LOCK_EX | LOCK_NB)) {
            fclose($handle);
            return false;
        }
        $this->locks[$key] = $handle;
        self::$held[$key] = true;
        return true;
    }

    /**
     * @param string $key
     * @return void
     */
    public function release(string $key): void
    {
        if (!isset($this->locks[$key])) {
            return;
        }
        $handle = $this->locks[$key];
        unset($this->locks[$key]);
        unset(self::$held[$key]);
        flock($handle, LOCK_UN);
        fclose($handle);
    }

    /**
     * access token 与 refresh token 都不可用时，记录才过期。
     *
     * @param array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int} $item
     * @return bool
     */
    private function isExpired(array $item): bool
    {
        $now = time();
        if ((int)($item['expires_at'] ?? 0) > $now) {
            return false;
        }
        $refreshExpiresAt = (int)($item['refresh_expires_at'] ?? 0);
        if ($refreshExpiresAt > 0) {
            return $refreshExpiresAt <= $now;
        }
        // refresh 有效期未知时，只要还带 refresh_token 就保留记录，供续期使用
        return (string)($item['refresh_token'] ?? '') === '';
    }
}
