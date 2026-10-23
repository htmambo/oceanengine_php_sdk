<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgSubmitV30Request implements \JsonSerializable
{
    /**
     * 广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkg
     */
    protected ?\Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkg $deliveryPkg = null;

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
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkg
     */
    public function getDeliveryPkg(): ?\Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkg
    {
        return $this->deliveryPkg;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkg $deliveryPkg
     * @return self
     */
    public function setDeliveryPkg(?\Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkg $deliveryPkg): self
    {
        $this->deliveryPkg = $deliveryPkg;
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
        if ($this->deliveryPkg !== null) {
            $result['delivery_pkg'] = $this->deliveryPkg;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['delivery_pkg'] ?? null) !== null && is_array($v)) {
            $obj->deliveryPkg = \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkg::fromArray($v);
        }
        return $obj;
    }
}
