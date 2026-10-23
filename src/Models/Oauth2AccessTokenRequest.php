<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Oauth2AccessTokenRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $appId = null;

    /**
     * @var string
     */
    protected ?string $authCode = null;

    /**
     * @var string
     */
    protected ?string $secret = null;

    /**
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return self
     */
    public function setAuthCode(?string $authCode): self
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }

    /**
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
        if ($this->authCode !== null) {
            $result['auth_code'] = $this->authCode;
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
        if (($v = $data['auth_code'] ?? null) !== null) {
            $obj->authCode = (string) $v;
        }
        if (($v = $data['secret'] ?? null) !== null) {
            $obj->secret = (string) $v;
        }
        return $obj;
    }
}
