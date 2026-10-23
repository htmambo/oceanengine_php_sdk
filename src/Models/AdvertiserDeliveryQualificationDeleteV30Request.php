<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryQualificationDeleteV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 资质id列表，支持传入多个批量删除，list长度1~50
     * @var int[]
     */
    protected ?array $qualificationIds = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 资质id列表，支持传入多个批量删除，list长度1~50
     * @return int[]
     */
    public function getQualificationIds(): ?array
    {
        return $this->qualificationIds;
    }

    /**
     * 资质id列表，支持传入多个批量删除，list长度1~50
     * @param int[] $qualificationIds
     * @return self
     */
    public function setQualificationIds(?array $qualificationIds): self
    {
        $this->qualificationIds = $qualificationIds;
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
        if ($this->qualificationIds !== null) {
            $result['qualification_ids'] = $this->qualificationIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['qualification_ids'] ?? null) !== null && is_array($v)) {
            $obj->qualificationIds = $v;
        }
        return $obj;
    }
}
