<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Oauth2RefreshTokenResponseData implements \JsonSerializable
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
     * @var string
     */
    protected ?string $refreshToken = null;

    /**
     * @var int
     */
    protected ?int $refreshTokenExpiresIn = null;

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
     * @return int
     */
    public function getRefreshTokenExpiresIn(): ?int
    {
        return $this->refreshTokenExpiresIn;
    }

    /**
     * @param int $refreshTokenExpiresIn
     * @return self
     */
    public function setRefreshTokenExpiresIn(?int $refreshTokenExpiresIn): self
    {
        $this->refreshTokenExpiresIn = $refreshTokenExpiresIn;
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
        if ($this->refreshToken !== null) {
            $result['refresh_token'] = $this->refreshToken;
        }
        if ($this->refreshTokenExpiresIn !== null) {
            $result['refresh_token_expires_in'] = $this->refreshTokenExpiresIn;
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
        if (($v = $data['refresh_token'] ?? null) !== null) {
            $obj->refreshToken = (string) $v;
        }
        if (($v = $data['refresh_token_expires_in'] ?? null) !== null) {
            $obj->refreshTokenExpiresIn = (int) $v;
        }
        return $obj;
    }
}
