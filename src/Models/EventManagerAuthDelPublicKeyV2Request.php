<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAuthDelPublicKeyV2Request implements \JsonSerializable
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
        return $obj;
    }
}
