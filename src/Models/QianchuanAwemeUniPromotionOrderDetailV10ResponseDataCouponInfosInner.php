<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderDetailV10ResponseDataCouponInfosInner implements \JsonSerializable
{
    /**
     * 单位元。多张券券，就是券的总金额
     * @var float
     */
    protected ?float $couponTotalAmount = null;

    /**
     * 优惠券类型
     * @var int
     */
    protected ?int $couponType = null;

    /**
     * 单位元。多张券券，就是券的总金额
     * @return float
     */
    public function getCouponTotalAmount(): ?float
    {
        return $this->couponTotalAmount;
    }

    /**
     * 单位元。多张券券，就是券的总金额
     * @param float $couponTotalAmount
     * @return self
     */
    public function setCouponTotalAmount(?float $couponTotalAmount): self
    {
        $this->couponTotalAmount = $couponTotalAmount;
        return $this;
    }

    /**
     * 优惠券类型
     * @return int
     */
    public function getCouponType(): ?int
    {
        return $this->couponType;
    }

    /**
     * 优惠券类型
     * @param int $couponType
     * @return self
     */
    public function setCouponType(?int $couponType): self
    {
        $this->couponType = $couponType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->couponTotalAmount !== null) {
            $result['coupon_total_amount'] = $this->couponTotalAmount;
        }
        if ($this->couponType !== null) {
            $result['coupon_type'] = $this->couponType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['coupon_total_amount'] ?? null) !== null) {
            $obj->couponTotalAmount = (float) $v;
        }
        if (($v = $data['coupon_type'] ?? null) !== null) {
            $obj->couponType = (int) $v;
        }
        return $obj;
    }
}
