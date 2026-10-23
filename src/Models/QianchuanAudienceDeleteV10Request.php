<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceDeleteV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $audienceId = null;

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
     * @return int
     */
    public function getAudienceId(): ?int
    {
        return $this->audienceId;
    }

    /**
     * @param int $audienceId
     * @return self
     */
    public function setAudienceId(?int $audienceId): self
    {
        $this->audienceId = $audienceId;
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
        if ($this->audienceId !== null) {
            $result['audience_id'] = $this->audienceId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience_id'] ?? null) !== null) {
            $obj->audienceId = (int) $v;
        }
        return $obj;
    }
}
