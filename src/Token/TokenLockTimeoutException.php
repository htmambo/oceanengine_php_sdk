<?php

declare(strict_types=1);

namespace Oceanengine\Token;

/**
 * 等待刷新锁超时。
 *
 * 共享存储下刷新必须串行（refresh_token 一次性），拿不到锁时宁可失败也不能
 * 绕过锁去刷新——那会造成两个 worker 同时轮换 refresh_token，其中一个拿到
 * 已作废的凭证，会话就此失效。调用方应退避后重试。
 */
class TokenLockTimeoutException extends \RuntimeException
{
    /** @var string 存储键 */
    private string $key;

    /**
     * @param string $key
     * @param int $waitedMs 已等待毫秒数
     */
    public function __construct(string $key, int $waitedMs)
    {
        $this->key = $key;
        parent::__construct(sprintf(
            '等待 token 刷新锁超时（key=%s，已等待 %dms）：可能有其它进程正在刷新 token，请退避后重试',
            $key,
            $waitedMs
        ));
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
}
