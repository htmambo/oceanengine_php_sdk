<?php

declare(strict_types=1);

namespace Oceanengine\Token;

/**
 * token 持久化存储抽象，调用方实现本接口即可接入自己的 DB。
 *
 * 约定：
 * - key 由调用方给出（不要把 token 放进 key）；
 * - get() 返回的记录若 refresh_token 仍在有效期内，实现不应丢弃该记录，
 *   否则 access token 过期后将无法续期。
 */
interface TokenStoreInterface
{
    /**
     * 读取一条记录。
     *
     * @param string $key 存储键
     * @return array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int}|null 不存在时返回 null
     */
    public function get(string $key): ?array;

    /**
     * 写入一条记录。
     *
     * @param string $key 存储键
     * @param array{token:string, expires_at:int, refresh_token?:string, refresh_expires_at?:int} $value 记录内容
     * @return void
     */
    public function set(string $key, array $value): void;

    /**
     * 删除一条记录。
     *
     * @param string $key 存储键
     * @return void
     */
    public function delete(string $key): void;
}
