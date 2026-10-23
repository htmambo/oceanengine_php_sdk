<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponCodeConsumeV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $activityId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $code = null;

    /**
     * @var string
     */
    protected ?string $codeId = null;

    /**
     * @var int
     */
    protected ?int $couponId = null;

    /**
     * @var \Oceanengine\Models\ClueCouponCodeConsumeV2RequestEmployee
     */
    protected ?\Oceanengine\Models\ClueCouponCodeConsumeV2RequestEmployee $employee = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $extra = null;

    /**
     * @var int
     */
    protected ?int $resourceId = null;

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
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeId(): ?string
    {
        return $this->codeId;
    }

    /**
     * @param string $codeId
     * @return self
     */
    public function setCodeId(?string $codeId): self
    {
        $this->codeId = $codeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    /**
     * @param int $couponId
     * @return self
     */
    public function setCouponId(?int $couponId): self
    {
        $this->couponId = $couponId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponCodeConsumeV2RequestEmployee
     */
    public function getEmployee(): ?\Oceanengine\Models\ClueCouponCodeConsumeV2RequestEmployee
    {
        return $this->employee;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCodeConsumeV2RequestEmployee $employee
     * @return self
     */
    public function setEmployee(?\Oceanengine\Models\ClueCouponCodeConsumeV2RequestEmployee $employee): self
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * @param array<string,mixed> $extra
     * @return self
     */
    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @return int
     */
    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }

    /**
     * @param int $resourceId
     * @return self
     */
    public function setResourceId(?int $resourceId): self
    {
        $this->resourceId = $resourceId;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->codeId !== null) {
            $result['code_id'] = $this->codeId;
        }
        if ($this->couponId !== null) {
            $result['coupon_id'] = $this->couponId;
        }
        if ($this->employee !== null) {
            $result['employee'] = $this->employee;
        }
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->resourceId !== null) {
            $result['resource_id'] = $this->resourceId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (string) $v;
        }
        if (($v = $data['code_id'] ?? null) !== null) {
            $obj->codeId = (string) $v;
        }
        if (($v = $data['coupon_id'] ?? null) !== null) {
            $obj->couponId = (int) $v;
        }
        if (($v = $data['employee'] ?? null) !== null && is_array($v)) {
            $obj->employee = \Oceanengine\Models\ClueCouponCodeConsumeV2RequestEmployee::fromArray($v);
        }
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = $v;
        }
        if (($v = $data['resource_id'] ?? null) !== null) {
            $obj->resourceId = (int) $v;
        }
        return $obj;
    }
}
