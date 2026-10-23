<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderCreateV30RequestBookingQuantityInfo implements \JsonSerializable
{
    /**
     * 预订日期及预订量
     * @var \Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfoDailyQuantityInner[]
     */
    protected ?array $dailyQuantity = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType
     */
    protected ?string $stockIncreasePackageType = null;

    /**
     * 预订日期及预订量
     * @return \Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfoDailyQuantityInner[]
     */
    public function getDailyQuantity(): ?array
    {
        return $this->dailyQuantity;
    }

    /**
     * 预订日期及预订量
     * @param \Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfoDailyQuantityInner[] $dailyQuantity
     * @return self
     */
    public function setDailyQuantity(?array $dailyQuantity): self
    {
        $this->dailyQuantity = $dailyQuantity;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType
     */
    public function getStockIncreasePackageType(): ?string
    {
        return $this->stockIncreasePackageType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType $stockIncreasePackageType
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
            $obj->dailyQuantity = array_map(fn ($vv) => \Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfoDailyQuantityInner::fromArray($vv), $v);
        }
        if (($v = $data['stock_increase_package_type'] ?? null) !== null) {
            $obj->stockIncreasePackageType = (string) $v;
        }
        return $obj;
    }
}
