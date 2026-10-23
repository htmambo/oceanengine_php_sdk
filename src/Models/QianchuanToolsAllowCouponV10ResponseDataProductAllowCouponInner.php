<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsAllowCouponV10ResponseDataProductAllowCouponInner implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $allowCoupon = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @return bool
     */
    public function getAllowCoupon(): ?bool
    {
        return $this->allowCoupon;
    }

    /**
     * @param bool $allowCoupon
     * @return self
     */
    public function setAllowCoupon(?bool $allowCoupon): self
    {
        $this->allowCoupon = $allowCoupon;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allowCoupon !== null) {
            $result['allow_coupon'] = $this->allowCoupon;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_coupon'] ?? null) !== null) {
            $obj->allowCoupon = (bool) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        return $obj;
    }
}
