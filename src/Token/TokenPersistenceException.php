<?php

declare(strict_types=1);

namespace Oceanengine\Token;

/**
 * token 已轮换成功、但落库失败。
 *
 * refresh_token 是一次性的：服务端已经作废旧值，而新的 refresh_token 只存在
 * 于本次响应里。若此时落库失败（DB 抖动、进程崩溃等），旧值已不可用，会话随即
 * 失效。因此本异常携带**未落库的记录**，供调用方立即补偿写入（重试落库或人工处理）。
 *
 * 异常消息里不含 token / refresh_token，只有调用方显式取记录时才能拿到。
 */
class TokenPersistenceException extends \RuntimeException
{
    /** @var array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int} */
    private array $unpersistedRecord;

    /**
     * @param array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int} $record
     * @param \Throwable|null $previous
     */
    public function __construct(array $record, ?\Throwable $previous = null)
    {
        $this->unpersistedRecord = $record;
        parent::__construct(
            'token 已轮换成功但落库失败：新的 refresh_token 只存在于本次响应中，请立即补偿写入',
            0,
            $previous
        );
    }

    /**
     * 未落库的记录（含 token 与 refresh_token，调用方需自行保密）。
     *
     * @return array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int}
     */
    public function getUnpersistedRecord(): array
    {
        return $this->unpersistedRecord;
    }
}
