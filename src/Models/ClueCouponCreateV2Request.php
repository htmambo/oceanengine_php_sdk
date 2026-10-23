<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponCreateV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueCouponCreateV2ActivityType
     */
    protected ?string $activityType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $bindFormId = null;

    /**
     * @var \Oceanengine\Models\ClueCouponCreateV2RequestCoupon
     */
    protected ?\Oceanengine\Models\ClueCouponCreateV2RequestCoupon $coupon = null;

    /**
     * @return \Oceanengine\Models\ClueCouponCreateV2ActivityType
     */
    public function getActivityType(): ?string
    {
        return $this->activityType;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCreateV2ActivityType $activityType
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
     * @return \Oceanengine\Models\ClueCouponCreateV2RequestCoupon
     */
    public function getCoupon(): ?\Oceanengine\Models\ClueCouponCreateV2RequestCoupon
    {
        return $this->coupon;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCreateV2RequestCoupon $coupon
     * @return self
     */
    public function setCoupon(?\Oceanengine\Models\ClueCouponCreateV2RequestCoupon $coupon): self
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
        if ($this->activityType !== null) {
            $result['activity_type'] = $this->activityType;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
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
        if (($v = $data['activity_type'] ?? null) !== null) {
            $obj->activityType = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['bind_form_id'] ?? null) !== null) {
            $obj->bindFormId = (int) $v;
        }
        if (($v = $data['coupon'] ?? null) !== null && is_array($v)) {
            $obj->coupon = \Oceanengine\Models\ClueCouponCreateV2RequestCoupon::fromArray($v);
        }
        return $obj;
    }
}
