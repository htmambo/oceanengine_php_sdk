<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsAllowCouponV10ResponseDataAwemeAllowCouponInner implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $allowCoupon = null;

    /**
     * @var int
     */
    protected ?int $awemeId = null;

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
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
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
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_coupon'] ?? null) !== null) {
            $obj->allowCoupon = (bool) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        return $obj;
    }
}
