<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsAllowCouponV10ResponseData implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $advAllowCoupon = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsAllowCouponV10ResponseDataAwemeAllowCouponInner[]
     */
    protected ?array $awemeAllowCoupon = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsAllowCouponV10ResponseDataProductAllowCouponInner[]
     */
    protected ?array $productAllowCoupon = null;

    /**
     * @return bool
     */
    public function getAdvAllowCoupon(): ?bool
    {
        return $this->advAllowCoupon;
    }

    /**
     * @param bool $advAllowCoupon
     * @return self
     */
    public function setAdvAllowCoupon(?bool $advAllowCoupon): self
    {
        $this->advAllowCoupon = $advAllowCoupon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsAllowCouponV10ResponseDataAwemeAllowCouponInner[]
     */
    public function getAwemeAllowCoupon(): ?array
    {
        return $this->awemeAllowCoupon;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsAllowCouponV10ResponseDataAwemeAllowCouponInner[] $awemeAllowCoupon
     * @return self
     */
    public function setAwemeAllowCoupon(?array $awemeAllowCoupon): self
    {
        $this->awemeAllowCoupon = $awemeAllowCoupon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsAllowCouponV10ResponseDataProductAllowCouponInner[]
     */
    public function getProductAllowCoupon(): ?array
    {
        return $this->productAllowCoupon;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsAllowCouponV10ResponseDataProductAllowCouponInner[] $productAllowCoupon
     * @return self
     */
    public function setProductAllowCoupon(?array $productAllowCoupon): self
    {
        $this->productAllowCoupon = $productAllowCoupon;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advAllowCoupon !== null) {
            $result['adv_allow_coupon'] = $this->advAllowCoupon;
        }
        if ($this->awemeAllowCoupon !== null) {
            $result['aweme_allow_coupon'] = $this->awemeAllowCoupon;
        }
        if ($this->productAllowCoupon !== null) {
            $result['product_allow_coupon'] = $this->productAllowCoupon;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_allow_coupon'] ?? null) !== null) {
            $obj->advAllowCoupon = (bool) $v;
        }
        if (($v = $data['aweme_allow_coupon'] ?? null) !== null && is_array($v)) {
            $obj->awemeAllowCoupon = array_map(fn ($vv) => \Oceanengine\Models\QianchuanToolsAllowCouponV10ResponseDataAwemeAllowCouponInner::fromArray($vv), $v);
        }
        if (($v = $data['product_allow_coupon'] ?? null) !== null && is_array($v)) {
            $obj->productAllowCoupon = array_map(fn ($vv) => \Oceanengine\Models\QianchuanToolsAllowCouponV10ResponseDataProductAllowCouponInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
