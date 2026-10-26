<?php

declare(strict_types=1);

namespace Oceanengine\Token;

/**
 * access token 来源抽象：负责提供当前有效的 token，并支持主动失效。
 */
interface TokenProviderInterface
{
    /**
     * 返回有效的 access token。
     *
     * @return string 有效的 access token（空字符串表示无可用 token）
     */
    public function getToken(): string;

    /**
     * 使缓存失效，下次 getToken() 重新获取。
     *
     * @param string|null $token 触发失效的 token（可为 null）
     * @return void
     */
    public function invalidate(?string $token = null): void;
}
