<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ShopBonusCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ShopBonusCreateV30RequestCouponInfosInner[]
     */
    protected ?array $couponInfos = null;

    /**
     * @var \Oceanengine\Models\ShopBonusCreateV30CouponShopPlatform
     */
    protected ?string $couponShopPlatform = null;

    /**
     * @var \Oceanengine\Models\ShopBonusCreateV30CouponType[]
     */
    protected ?array $couponType = null;

    /**
     * @var bool
     */
    protected ?bool $enableCoupon = null;

    /**
     * 广告id
     * @var int
     */
    protected ?int $promotionId = null;

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
     * @return \Oceanengine\Models\ShopBonusCreateV30RequestCouponInfosInner[]
     */
    public function getCouponInfos(): ?array
    {
        return $this->couponInfos;
    }

    /**
     * @param \Oceanengine\Models\ShopBonusCreateV30RequestCouponInfosInner[] $couponInfos
     * @return self
     */
    public function setCouponInfos(?array $couponInfos): self
    {
        $this->couponInfos = $couponInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ShopBonusCreateV30CouponShopPlatform
     */
    public function getCouponShopPlatform(): ?string
    {
        return $this->couponShopPlatform;
    }

    /**
     * @param \Oceanengine\Models\ShopBonusCreateV30CouponShopPlatform $couponShopPlatform
     * @return self
     */
    public function setCouponShopPlatform(?string $couponShopPlatform): self
    {
        $this->couponShopPlatform = $couponShopPlatform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ShopBonusCreateV30CouponType[]
     */
    public function getCouponType(): ?array
    {
        return $this->couponType;
    }

    /**
     * @param \Oceanengine\Models\ShopBonusCreateV30CouponType[] $couponType
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
     * 广告id
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告id
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->couponInfos !== null) {
            $result['coupon_infos'] = $this->couponInfos;
        }
        if ($this->couponShopPlatform !== null) {
            $result['coupon_shop_platform'] = $this->couponShopPlatform;
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
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['coupon_infos'] ?? null) !== null && is_array($v)) {
            $obj->couponInfos = array_map(fn ($vv) => \Oceanengine\Models\ShopBonusCreateV30RequestCouponInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['coupon_shop_platform'] ?? null) !== null) {
            $obj->couponShopPlatform = (string) $v;
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
