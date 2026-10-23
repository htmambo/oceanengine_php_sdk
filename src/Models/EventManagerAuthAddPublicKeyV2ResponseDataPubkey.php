<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAuthAddPublicKeyV2ResponseDataPubkey implements \JsonSerializable
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
     * @var int
     */
    protected ?int $keyId = null;

    /**
     * @var string
     */
    protected ?string $pubkey = null;

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
     * @return int
     */
    public function getKeyId(): ?int
    {
        return $this->keyId;
    }

    /**
     * @param int $keyId
     * @return self
     */
    public function setKeyId(?int $keyId): self
    {
        $this->keyId = $keyId;
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
        if ($this->keyId !== null) {
            $result['key_id'] = $this->keyId;
        }
        if ($this->pubkey !== null) {
            $result['pubkey'] = $this->pubkey;
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
        if (($v = $data['key_id'] ?? null) !== null) {
            $obj->keyId = (int) $v;
        }
        if (($v = $data['pubkey'] ?? null) !== null) {
            $obj->pubkey = (string) $v;
        }
        return $obj;
    }
}
