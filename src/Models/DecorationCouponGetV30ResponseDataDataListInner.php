<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DecorationCouponGetV30ResponseDataDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $activityCreateTime = null;

    /**
     * @var string
     */
    protected ?string $activityEndTime = null;

    /**
     * @var string
     */
    protected ?string $activityId = null;

    /**
     * @var string
     */
    protected ?string $activityName = null;

    /**
     * @var string
     */
    protected ?string $activityStartTime = null;

    /**
     * @var string
     */
    protected ?string $couponEndTime = null;

    /**
     * @var string
     */
    protected ?string $couponName = null;

    /**
     * @var string
     */
    protected ?string $couponStartTime = null;

    /**
     * @return string
     */
    public function getActivityCreateTime(): ?string
    {
        return $this->activityCreateTime;
    }

    /**
     * @param string $activityCreateTime
     * @return self
     */
    public function setActivityCreateTime(?string $activityCreateTime): self
    {
        $this->activityCreateTime = $activityCreateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityEndTime(): ?string
    {
        return $this->activityEndTime;
    }

    /**
     * @param string $activityEndTime
     * @return self
     */
    public function setActivityEndTime(?string $activityEndTime): self
    {
        $this->activityEndTime = $activityEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityId(): ?string
    {
        return $this->activityId;
    }

    /**
     * @param string $activityId
     * @return self
     */
    public function setActivityId(?string $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityName(): ?string
    {
        return $this->activityName;
    }

    /**
     * @param string $activityName
     * @return self
     */
    public function setActivityName(?string $activityName): self
    {
        $this->activityName = $activityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityStartTime(): ?string
    {
        return $this->activityStartTime;
    }

    /**
     * @param string $activityStartTime
     * @return self
     */
    public function setActivityStartTime(?string $activityStartTime): self
    {
        $this->activityStartTime = $activityStartTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouponEndTime(): ?string
    {
        return $this->couponEndTime;
    }

    /**
     * @param string $couponEndTime
     * @return self
     */
    public function setCouponEndTime(?string $couponEndTime): self
    {
        $this->couponEndTime = $couponEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouponName(): ?string
    {
        return $this->couponName;
    }

    /**
     * @param string $couponName
     * @return self
     */
    public function setCouponName(?string $couponName): self
    {
        $this->couponName = $couponName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouponStartTime(): ?string
    {
        return $this->couponStartTime;
    }

    /**
     * @param string $couponStartTime
     * @return self
     */
    public function setCouponStartTime(?string $couponStartTime): self
    {
        $this->couponStartTime = $couponStartTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activityCreateTime !== null) {
            $result['activity_create_time'] = $this->activityCreateTime;
        }
        if ($this->activityEndTime !== null) {
            $result['activity_end_time'] = $this->activityEndTime;
        }
        if ($this->activityId !== null) {
            $result['activity_id'] = $this->activityId;
        }
        if ($this->activityName !== null) {
            $result['activity_name'] = $this->activityName;
        }
        if ($this->activityStartTime !== null) {
            $result['activity_start_time'] = $this->activityStartTime;
        }
        if ($this->couponEndTime !== null) {
            $result['coupon_end_time'] = $this->couponEndTime;
        }
        if ($this->couponName !== null) {
            $result['coupon_name'] = $this->couponName;
        }
        if ($this->couponStartTime !== null) {
            $result['coupon_start_time'] = $this->couponStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_create_time'] ?? null) !== null) {
            $obj->activityCreateTime = (string) $v;
        }
        if (($v = $data['activity_end_time'] ?? null) !== null) {
            $obj->activityEndTime = (string) $v;
        }
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (string) $v;
        }
        if (($v = $data['activity_name'] ?? null) !== null) {
            $obj->activityName = (string) $v;
        }
        if (($v = $data['activity_start_time'] ?? null) !== null) {
            $obj->activityStartTime = (string) $v;
        }
        if (($v = $data['coupon_end_time'] ?? null) !== null) {
            $obj->couponEndTime = (string) $v;
        }
        if (($v = $data['coupon_name'] ?? null) !== null) {
            $obj->couponName = (string) $v;
        }
        if (($v = $data['coupon_start_time'] ?? null) !== null) {
            $obj->couponStartTime = (string) $v;
        }
        return $obj;
    }
}
