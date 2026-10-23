<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $activityId = null;

    /**
     * @var \Oceanengine\Models\ClueCouponGetV2DataListActivityType
     */
    protected ?string $activityType = null;

    /**
     * @var int
     */
    protected ?int $bindFormId = null;

    /**
     * @var \Oceanengine\Models\ClueCouponGetV2ResponseDataListInnerCoupon
     */
    protected ?\Oceanengine\Models\ClueCouponGetV2ResponseDataListInnerCoupon $coupon = null;

    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     * @return self
     */
    public function setActivityId(?int $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponGetV2DataListActivityType
     */
    public function getActivityType(): ?string
    {
        return $this->activityType;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponGetV2DataListActivityType $activityType
     * @return self
     */
    public function setActivityType(?string $activityType): self
    {
        $this->activityType = $activityType;
        return $this;
    }

    /**
     * @return int
     */
    public function getBindFormId(): ?int
    {
        return $this->bindFormId;
    }

    /**
     * @param int $bindFormId
     * @return self
     */
    public function setBindFormId(?int $bindFormId): self
    {
        $this->bindFormId = $bindFormId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponGetV2ResponseDataListInnerCoupon
     */
    public function getCoupon(): ?\Oceanengine\Models\ClueCouponGetV2ResponseDataListInnerCoupon
    {
        return $this->coupon;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponGetV2ResponseDataListInnerCoupon $coupon
     * @return self
     */
    public function setCoupon(?\Oceanengine\Models\ClueCouponGetV2ResponseDataListInnerCoupon $coupon): self
    {
        $this->coupon = $coupon;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activityId !== null) {
            $result['activity_id'] = $this->activityId;
        }
        if ($this->activityType !== null) {
            $result['activity_type'] = $this->activityType;
        }
        if ($this->bindFormId !== null) {
            $result['bind_form_id'] = $this->bindFormId;
        }
        if ($this->coupon !== null) {
            $result['coupon'] = $this->coupon;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (int) $v;
        }
        if (($v = $data['activity_type'] ?? null) !== null) {
            $obj->activityType = (string) $v;
        }
        if (($v = $data['bind_form_id'] ?? null) !== null) {
            $obj->bindFormId = (int) $v;
        }
        if (($v = $data['coupon'] ?? null) !== null && is_array($v)) {
            $obj->coupon = \Oceanengine\Models\ClueCouponGetV2ResponseDataListInnerCoupon::fromArray($v);
        }
        return $obj;
    }
}
