<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInner implements \JsonSerializable
{
    /**
     * 上传商圈Id
     * @var int
     */
    protected ?int $businessId = null;

    /**
     * 城市
     * @var int
     */
    protected ?int $city = null;

    /**
     * 日期,格式\"2020-01-01\"
     * @var string
     */
    protected ?string $date = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInnerGeolocation
     */
    protected ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInnerGeolocation $geolocation = null;

    /**
     * 预定量
     * @var int
     */
    protected ?int $quantity = null;

    /**
     * 预定类型
     * @var int
     */
    protected ?int $quantityType = null;

    /**
     * 上传商圈Id
     * @return int
     */
    public function getBusinessId(): ?int
    {
        return $this->businessId;
    }

    /**
     * 上传商圈Id
     * @param int $businessId
     * @return self
     */
    public function setBusinessId(?int $businessId): self
    {
        $this->businessId = $businessId;
        return $this;
    }

    /**
     * 城市
     * @return int
     */
    public function getCity(): ?int
    {
        return $this->city;
    }

    /**
     * 城市
     * @param int $city
     * @return self
     */
    public function setCity(?int $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * 日期,格式\"2020-01-01\"
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 日期,格式\"2020-01-01\"
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInnerGeolocation
     */
    public function getGeolocation(): ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInnerGeolocation
    {
        return $this->geolocation;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInnerGeolocation $geolocation
     * @return self
     */
    public function setGeolocation(?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInnerGeolocation $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * 预定量
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * 预定量
     * @param int $quantity
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * 预定类型
     * @return int
     */
    public function getQuantityType(): ?int
    {
        return $this->quantityType;
    }

    /**
     * 预定类型
     * @param int $quantityType
     * @return self
     */
    public function setQuantityType(?int $quantityType): self
    {
        $this->quantityType = $quantityType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->businessId !== null) {
            $result['business_id'] = $this->businessId;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->geolocation !== null) {
            $result['geolocation'] = $this->geolocation;
        }
        if ($this->quantity !== null) {
            $result['quantity'] = $this->quantity;
        }
        if ($this->quantityType !== null) {
            $result['quantity_type'] = $this->quantityType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['business_id'] ?? null) !== null) {
            $obj->businessId = (int) $v;
        }
        if (($v = $data['city'] ?? null) !== null) {
            $obj->city = (int) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['geolocation'] ?? null) !== null && is_array($v)) {
            $obj->geolocation = \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInnerGeolocation::fromArray($v);
        }
        if (($v = $data['quantity'] ?? null) !== null) {
            $obj->quantity = (int) $v;
        }
        if (($v = $data['quantity_type'] ?? null) !== null) {
            $obj->quantityType = (int) $v;
        }
        return $obj;
    }
}
