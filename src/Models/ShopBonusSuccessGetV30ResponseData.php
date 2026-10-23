<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ShopBonusSuccessGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ShopBonusSuccessGetV30ResponseDataCouponInfosInner[]
     */
    protected ?array $couponInfos = null;

    /**
     * @var string[]
     */
    protected ?array $couponType = null;

    /**
     * @var bool
     */
    protected ?bool $enableCoupon = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @return \Oceanengine\Models\ShopBonusSuccessGetV30ResponseDataCouponInfosInner[]
     */
    public function getCouponInfos(): ?array
    {
        return $this->couponInfos;
    }

    /**
     * @param \Oceanengine\Models\ShopBonusSuccessGetV30ResponseDataCouponInfosInner[] $couponInfos
     * @return self
     */
    public function setCouponInfos(?array $couponInfos): self
    {
        $this->couponInfos = $couponInfos;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCouponType(): ?array
    {
        return $this->couponType;
    }

    /**
     * @param string[] $couponType
     * @return self
     */
    public function setCouponType(?array $couponType): self
    {
        $this->couponType = $couponType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableCoupon(): ?bool
    {
        return $this->enableCoupon;
    }

    /**
     * @param bool $enableCoupon
     * @return self
     */
    public function setEnableCoupon(?bool $enableCoupon): self
    {
        $this->enableCoupon = $enableCoupon;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->couponInfos !== null) {
            $result['coupon_infos'] = $this->couponInfos;
        }
        if ($this->couponType !== null) {
            $result['coupon_type'] = $this->couponType;
        }
        if ($this->enableCoupon !== null) {
            $result['enable_coupon'] = $this->enableCoupon;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['coupon_infos'] ?? null) !== null && is_array($v)) {
            $obj->couponInfos = array_map(fn ($vv) => \Oceanengine\Models\ShopBonusSuccessGetV30ResponseDataCouponInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['coupon_type'] ?? null) !== null && is_array($v)) {
            $obj->couponType = $v;
        }
        if (($v = $data['enable_coupon'] ?? null) !== null) {
            $obj->enableCoupon = (bool) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
