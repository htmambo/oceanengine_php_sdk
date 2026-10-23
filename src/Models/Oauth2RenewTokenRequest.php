<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Oauth2RenewTokenRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $appId = null;

    /**
     * @var string
     */
    protected ?string $refreshToken = null;

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
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     * @return self
     */
    public function setRefreshToken(?string $refreshToken): self
    {
        $this->refreshToken = $refreshToken;
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
        if ($this->refreshToken !== null) {
            $result['refresh_token'] = $this->refreshToken;
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
        if (($v = $data['refresh_token'] ?? null) !== null) {
            $obj->refreshToken = (string) $v;
        }
        if (($v = $data['secret'] ?? null) !== null) {
            $obj->secret = (string) $v;
        }
        return $obj;
    }
}
