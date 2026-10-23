<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ShopBonusSuccessGetV30ResponseDataCouponInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $couponValue = null;

    /**
     * @var float
     */
    protected ?float $discountRangeMax = null;

    /**
     * @var float
     */
    protected ?float $discountRangeMin = null;

    /**
     * @return int
     */
    public function getCouponValue(): ?int
    {
        return $this->couponValue;
    }

    /**
     * @param int $couponValue
     * @return self
     */
    public function setCouponValue(?int $couponValue): self
    {
        $this->couponValue = $couponValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountRangeMax(): ?float
    {
        return $this->discountRangeMax;
    }

    /**
     * @param float $discountRangeMax
     * @return self
     */
    public function setDiscountRangeMax(?float $discountRangeMax): self
    {
        $this->discountRangeMax = $discountRangeMax;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountRangeMin(): ?float
    {
        return $this->discountRangeMin;
    }

    /**
     * @param float $discountRangeMin
     * @return self
     */
    public function setDiscountRangeMin(?float $discountRangeMin): self
    {
        $this->discountRangeMin = $discountRangeMin;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->couponValue !== null) {
            $result['coupon_value'] = $this->couponValue;
        }
        if ($this->discountRangeMax !== null) {
            $result['discount_range_max'] = $this->discountRangeMax;
        }
        if ($this->discountRangeMin !== null) {
            $result['discount_range_min'] = $this->discountRangeMin;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['coupon_value'] ?? null) !== null) {
            $obj->couponValue = (int) $v;
        }
        if (($v = $data['discount_range_max'] ?? null) !== null) {
            $obj->discountRangeMax = (float) $v;
        }
        if (($v = $data['discount_range_min'] ?? null) !== null) {
            $obj->discountRangeMin = (float) $v;
        }
        return $obj;
    }
}
