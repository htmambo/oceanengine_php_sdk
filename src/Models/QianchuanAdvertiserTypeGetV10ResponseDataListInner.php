<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdvertiserTypeGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdvertiserTypeGetV10DataListEcpType
     */
    protected ?string $ecpType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdvertiserTypeGetV10DataListShopBusinessType
     */
    protected ?string $shopBusinessType = null;

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
     * @return \Oceanengine\Models\QianchuanAdvertiserTypeGetV10DataListEcpType
     */
    public function getEcpType(): ?string
    {
        return $this->ecpType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdvertiserTypeGetV10DataListEcpType $ecpType
     * @return self
     */
    public function setEcpType(?string $ecpType): self
    {
        $this->ecpType = $ecpType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdvertiserTypeGetV10DataListShopBusinessType
     */
    public function getShopBusinessType(): ?string
    {
        return $this->shopBusinessType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdvertiserTypeGetV10DataListShopBusinessType $shopBusinessType
     * @return self
     */
    public function setShopBusinessType(?string $shopBusinessType): self
    {
        $this->shopBusinessType = $shopBusinessType;
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
        if ($this->ecpType !== null) {
            $result['ecp_type'] = $this->ecpType;
        }
        if ($this->shopBusinessType !== null) {
            $result['shop_business_type'] = $this->shopBusinessType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['ecp_type'] ?? null) !== null) {
            $obj->ecpType = (string) $v;
        }
        if (($v = $data['shop_business_type'] ?? null) !== null) {
            $obj->shopBusinessType = (string) $v;
        }
        return $obj;
    }
}
