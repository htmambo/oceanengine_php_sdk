<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfo implements \JsonSerializable
{
    /**
     * 预定量信息
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfoDailyQuantityInner[]
     */
    protected ?array $dailyQuantity = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType
     */
    protected ?string $stockIncreasePackageType = null;

    /**
     * 预定量信息
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfoDailyQuantityInner[]
     */
    public function getDailyQuantity(): ?array
    {
        return $this->dailyQuantity;
    }

    /**
     * 预定量信息
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfoDailyQuantityInner[] $dailyQuantity
     * @return self
     */
    public function setDailyQuantity(?array $dailyQuantity): self
    {
        $this->dailyQuantity = $dailyQuantity;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType
     */
    public function getStockIncreasePackageType(): ?string
    {
        return $this->stockIncreasePackageType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType $stockIncreasePackageType
     * @return self
     */
    public function setStockIncreasePackageType(?string $stockIncreasePackageType): self
    {
        $this->stockIncreasePackageType = $stockIncreasePackageType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dailyQuantity !== null) {
            $result['daily_quantity'] = $this->dailyQuantity;
        }
        if ($this->stockIncreasePackageType !== null) {
            $result['stock_increase_package_type'] = $this->stockIncreasePackageType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['daily_quantity'] ?? null) !== null && is_array($v)) {
            $obj->dailyQuantity = array_map(fn ($vv) => \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfoDailyQuantityInner::fromArray($vv), $v);
        }
        if (($v = $data['stock_increase_package_type'] ?? null) !== null) {
            $obj->stockIncreasePackageType = (string) $v;
        }
        return $obj;
    }
}
