<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponCodeGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $activityId = null;

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
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $resourceId = null;

    /**
     * @var string
     */
    protected ?string $resourceTitle = null;

    /**
     * @var \Oceanengine\Models\ClueCouponCodeGetV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @var string
     */
    protected ?string $validEnd = null;

    /**
     * @var string
     */
    protected ?string $validStart = null;

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
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
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
     * @return string
     */
    public function getResourceTitle(): ?string
    {
        return $this->resourceTitle;
    }

    /**
     * @param string $resourceTitle
     * @return self
     */
    public function setResourceTitle(?string $resourceTitle): self
    {
        $this->resourceTitle = $resourceTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponCodeGetV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCodeGetV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidEnd(): ?string
    {
        return $this->validEnd;
    }

    /**
     * @param string $validEnd
     * @return self
     */
    public function setValidEnd(?string $validEnd): self
    {
        $this->validEnd = $validEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidStart(): ?string
    {
        return $this->validStart;
    }

    /**
     * @param string $validStart
     * @return self
     */
    public function setValidStart(?string $validStart): self
    {
        $this->validStart = $validStart;
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
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->codeId !== null) {
            $result['code_id'] = $this->codeId;
        }
        if ($this->couponId !== null) {
            $result['coupon_id'] = $this->couponId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->resourceId !== null) {
            $result['resource_id'] = $this->resourceId;
        }
        if ($this->resourceTitle !== null) {
            $result['resource_title'] = $this->resourceTitle;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        if ($this->validEnd !== null) {
            $result['valid_end'] = $this->validEnd;
        }
        if ($this->validStart !== null) {
            $result['valid_start'] = $this->validStart;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (int) $v;
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
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['resource_id'] ?? null) !== null) {
            $obj->resourceId = (int) $v;
        }
        if (($v = $data['resource_title'] ?? null) !== null) {
            $obj->resourceTitle = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        if (($v = $data['valid_end'] ?? null) !== null) {
            $obj->validEnd = (string) $v;
        }
        if (($v = $data['valid_start'] ?? null) !== null) {
            $obj->validStart = (string) $v;
        }
        return $obj;
    }
}
