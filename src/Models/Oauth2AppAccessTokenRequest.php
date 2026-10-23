<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Oauth2AppAccessTokenRequest implements \JsonSerializable
{
    /**
     * 应用ID
     * @var int
     */
    protected ?int $appId = null;

    /**
     * 应用秘钥
     * @var string
     */
    protected ?string $secret = null;

    /**
     * 应用ID
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * 应用ID
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 应用秘钥
     * @return string
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }

    /**
     * 应用秘钥
     * @param string $secret
     * @return self
     */
    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->secret !== null) {
            $result['secret'] = $this->secret;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['secret'] ?? null) !== null) {
            $obj->secret = (string) $v;
        }
        return $obj;
    }
}
