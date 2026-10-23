<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Oauth2AppAccessTokenResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $accessToken = null;

    /**
     * @var int
     */
    protected ?int $expiresIn = null;

    /**
     * @return string
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return self
     */
    public function setAccessToken(?string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

    /**
     * @param int $expiresIn
     * @return self
     */
    public function setExpiresIn(?int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accessToken !== null) {
            $result['access_token'] = $this->accessToken;
        }
        if ($this->expiresIn !== null) {
            $result['expires_in'] = $this->expiresIn;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['access_token'] ?? null) !== null) {
            $obj->accessToken = (string) $v;
        }
        if (($v = $data['expires_in'] ?? null) !== null) {
            $obj->expiresIn = (int) $v;
        }
        return $obj;
    }
}
