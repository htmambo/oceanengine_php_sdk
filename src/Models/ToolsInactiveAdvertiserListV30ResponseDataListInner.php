<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsInactiveAdvertiserListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $lastRequestDate = null;

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
    public function getLastRequestDate(): ?string
    {
        return $this->lastRequestDate;
    }

    /**
     * @param string $lastRequestDate
     * @return self
     */
    public function setLastRequestDate(?string $lastRequestDate): self
    {
        $this->lastRequestDate = $lastRequestDate;
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
        if ($this->lastRequestDate !== null) {
            $result['last_request_date'] = $this->lastRequestDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['last_request_date'] ?? null) !== null) {
            $obj->lastRequestDate = (string) $v;
        }
        return $obj;
    }
}
