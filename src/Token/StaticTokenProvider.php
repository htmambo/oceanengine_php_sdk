<?php

declare(strict_types=1);

namespace Oceanengine\Token;

/**
 * 固定 token 提供者：用于最简接入与测试。
 */
class StaticTokenProvider implements TokenProviderInterface
{
    /** @var string */
    private string $token;

    /** @var callable|null 失效回调 */
    private $onInvalidate;

    /**
     * @param string $token 固定的 access token
     * @param callable|null $onInvalidate 失效回调，签名 fn(?string $token): void
     */
    public function __construct(string $token, ?callable $onInvalidate = null)
    {
        $this->token = $token;
        $this->onInvalidate = $onInvalidate;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * 未配置失效回调时为空操作。
     *
     * @param string|null $token
     * @return void
     */
    public function invalidate(?string $token = null): void
    {
        if ($this->onInvalidate !== null) {
            ($this->onInvalidate)($token);
        }
    }
}
