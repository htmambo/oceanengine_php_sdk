<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponDetailV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $activityId = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2DataActivityType
     */
    protected ?string $activityType = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2ResponseDataCoupon
     */
    protected ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCoupon $coupon = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2ResponseDataForm
     */
    protected ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataForm $form = null;

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
     * @return \Oceanengine\Models\ClueCouponDetailV2DataActivityType
     */
    public function getActivityType(): ?string
    {
        return $this->activityType;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2DataActivityType $activityType
     * @return self
     */
    public function setActivityType(?string $activityType): self
    {
        $this->activityType = $activityType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2ResponseDataCoupon
     */
    public function getCoupon(): ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCoupon
    {
        return $this->coupon;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2ResponseDataCoupon $coupon
     * @return self
     */
    public function setCoupon(?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCoupon $coupon): self
    {
        $this->coupon = $coupon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2ResponseDataForm
     */
    public function getForm(): ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataForm
    {
        return $this->form;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2ResponseDataForm $form
     * @return self
     */
    public function setForm(?\Oceanengine\Models\ClueCouponDetailV2ResponseDataForm $form): self
    {
        $this->form = $form;
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
        if ($this->coupon !== null) {
            $result['coupon'] = $this->coupon;
        }
        if ($this->form !== null) {
            $result['form'] = $this->form;
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
        if (($v = $data['coupon'] ?? null) !== null && is_array($v)) {
            $obj->coupon = \Oceanengine\Models\ClueCouponDetailV2ResponseDataCoupon::fromArray($v);
        }
        if (($v = $data['form'] ?? null) !== null && is_array($v)) {
            $obj->form = \Oceanengine\Models\ClueCouponDetailV2ResponseDataForm::fromArray($v);
        }
        return $obj;
    }
}
