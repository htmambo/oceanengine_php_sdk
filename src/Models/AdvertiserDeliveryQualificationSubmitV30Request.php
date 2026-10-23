<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryQualificationSubmitV30Request implements \JsonSerializable
{
    /**
     * 广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 投放资质信息
     * @var \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30RequestQualificationsInner[]
     */
    protected ?array $qualifications = null;

    /**
     * 广告主账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 投放资质信息
     * @return \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30RequestQualificationsInner[]
     */
    public function getQualifications(): ?array
    {
        return $this->qualifications;
    }

    /**
     * 投放资质信息
     * @param \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30RequestQualificationsInner[] $qualifications
     * @return self
     */
    public function setQualifications(?array $qualifications): self
    {
        $this->qualifications = $qualifications;
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
        if ($this->qualifications !== null) {
            $result['qualifications'] = $this->qualifications;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['qualifications'] ?? null) !== null && is_array($v)) {
            $obj->qualifications = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30RequestQualificationsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
