<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAuthAddPublicKeyV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $credential = null;

    /**
     * @var string
     */
    protected ?string $pubkey = null;

    /**
     * @var string
     */
    protected ?string $signature = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCredential(): ?string
    {
        return $this->credential;
    }

    /**
     * @param string $credential
     * @return self
     */
    public function setCredential(?string $credential): self
    {
        $this->credential = $credential;
        return $this;
    }

    /**
     * @return string
     */
    public function getPubkey(): ?string
    {
        return $this->pubkey;
    }

    /**
     * @param string $pubkey
     * @return self
     */
    public function setPubkey(?string $pubkey): self
    {
        $this->pubkey = $pubkey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->credential !== null) {
            $result['credential'] = $this->credential;
        }
        if ($this->pubkey !== null) {
            $result['pubkey'] = $this->pubkey;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['credential'] ?? null) !== null) {
            $obj->credential = (string) $v;
        }
        if (($v = $data['pubkey'] ?? null) !== null) {
            $obj->pubkey = (string) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        return $obj;
    }
}
