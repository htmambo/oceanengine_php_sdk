<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkg
     */
    protected ?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkg $deliveryPkg = null;

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkg
     */
    public function getDeliveryPkg(): ?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkg
    {
        return $this->deliveryPkg;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkg $deliveryPkg
     * @return self
     */
    public function setDeliveryPkg(?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkg $deliveryPkg): self
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
        if ($this->deliveryPkg !== null) {
            $result['delivery_pkg'] = $this->deliveryPkg;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['delivery_pkg'] ?? null) !== null && is_array($v)) {
            $obj->deliveryPkg = \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkg::fromArray($v);
        }
        return $obj;
    }
}
