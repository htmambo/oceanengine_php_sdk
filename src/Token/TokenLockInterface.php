<?php

declare(strict_types=1);

namespace Oceanengine\Token;

/**
 * 可选的分布式锁能力：用于避免多 worker 同时刷新 token。
 *
 * 背景：refresh_token 是**一次性**的——刷新后旧值立即失效。若两个 worker
 * 同时用同一个 refresh_token 刷新，后到的那个拿到的是已作废的凭证，
 * 会话就此永久失效。因此共享存储的实现方应同时实现本接口。
 *
 * 不实现本接口时 SDK 仍可用，只是并发刷新没有保护（单进程/单 worker 场景无碍）。
 */
interface TokenLockInterface
{
    /**
     * 尝试获取某个键的锁。
     *
     * @param string $key 存储键
     * @param int $ttlSeconds 锁的自动过期时间（秒），避免持锁进程崩溃后死锁
     * @return bool true 表示获取成功；false 表示锁被他人持有
     */
    public function acquire(string $key, int $ttlSeconds = 10): bool;

    /**
     * 释放锁。
     *
     * 实现方**必须校验持有者**再释放（owner token 比对 / 按持有进程标识删除）：
     * 持锁进程若因 GC 停顿或慢请求超过锁 TTL 被判超时，后继者已拿到锁，
     * 此时前者的无条件释放会误删后继者的锁。
     *
     * @param string $key
     * @return void
     */
    public function release(string $key): void;
}
