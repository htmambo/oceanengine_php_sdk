<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponDetailV2ResponseDataCoupon implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $couponId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $deliverEnd = null;

    /**
     * @var string
     */
    protected ?string $deliverStart = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponGlobalLimit
     */
    protected ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponGlobalLimit $globalLimit = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2DataCouponNeedPhone
     */
    protected ?string $needPhone = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2DataCouponNeedSmsVerify
     */
    protected ?string $needSmsVerify = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponResourceListInner[]
     */
    protected ?array $resourceList = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2DataCouponStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponUserLimit
     */
    protected ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponUserLimit $userLimit = null;

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
     * @return string
     */
    public function getDeliverEnd(): ?string
    {
        return $this->deliverEnd;
    }

    /**
     * @param string $deliverEnd
     * @return self
     */
    public function setDeliverEnd(?string $deliverEnd): self
    {
        $this->deliverEnd = $deliverEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliverStart(): ?string
    {
        return $this->deliverStart;
    }

    /**
     * @param string $deliverStart
     * @return self
     */
    public function setDeliverStart(?string $deliverStart): self
    {
        $this->deliverStart = $deliverStart;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponGlobalLimit
     */
    public function getGlobalLimit(): ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponGlobalLimit
    {
        return $this->globalLimit;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponGlobalLimit $globalLimit
     * @return self
     */
    public function setGlobalLimit(?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponGlobalLimit $globalLimit): self
    {
        $this->globalLimit = $globalLimit;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2DataCouponNeedPhone
     */
    public function getNeedPhone(): ?string
    {
        return $this->needPhone;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2DataCouponNeedPhone $needPhone
     * @return self
     */
    public function setNeedPhone(?string $needPhone): self
    {
        $this->needPhone = $needPhone;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2DataCouponNeedSmsVerify
     */
    public function getNeedSmsVerify(): ?string
    {
        return $this->needSmsVerify;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2DataCouponNeedSmsVerify $needSmsVerify
     * @return self
     */
    public function setNeedSmsVerify(?string $needSmsVerify): self
    {
        $this->needSmsVerify = $needSmsVerify;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponResourceListInner[]
     */
    public function getResourceList(): ?array
    {
        return $this->resourceList;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponResourceListInner[] $resourceList
     * @return self
     */
    public function setResourceList(?array $resourceList): self
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2DataCouponStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2DataCouponStatus $status
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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
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
     * @return \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponUserLimit
     */
    public function getUserLimit(): ?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponUserLimit
    {
        return $this->userLimit;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponUserLimit $userLimit
     * @return self
     */
    public function setUserLimit(?\Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponUserLimit $userLimit): self
    {
        $this->userLimit = $userLimit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->couponId !== null) {
            $result['coupon_id'] = $this->couponId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->deliverEnd !== null) {
            $result['deliver_end'] = $this->deliverEnd;
        }
        if ($this->deliverStart !== null) {
            $result['deliver_start'] = $this->deliverStart;
        }
        if ($this->globalLimit !== null) {
            $result['global_limit'] = $this->globalLimit;
        }
        if ($this->needPhone !== null) {
            $result['need_phone'] = $this->needPhone;
        }
        if ($this->needSmsVerify !== null) {
            $result['need_sms_verify'] = $this->needSmsVerify;
        }
        if ($this->resourceList !== null) {
            $result['resource_list'] = $this->resourceList;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        if ($this->userLimit !== null) {
            $result['user_limit'] = $this->userLimit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['coupon_id'] ?? null) !== null) {
            $obj->couponId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['deliver_end'] ?? null) !== null) {
            $obj->deliverEnd = (string) $v;
        }
        if (($v = $data['deliver_start'] ?? null) !== null) {
            $obj->deliverStart = (string) $v;
        }
        if (($v = $data['global_limit'] ?? null) !== null && is_array($v)) {
            $obj->globalLimit = \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponGlobalLimit::fromArray($v);
        }
        if (($v = $data['need_phone'] ?? null) !== null) {
            $obj->needPhone = (string) $v;
        }
        if (($v = $data['need_sms_verify'] ?? null) !== null) {
            $obj->needSmsVerify = (string) $v;
        }
        if (($v = $data['resource_list'] ?? null) !== null && is_array($v)) {
            $obj->resourceList = array_map(fn ($vv) => \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponResourceListInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        if (($v = $data['user_limit'] ?? null) !== null && is_array($v)) {
            $obj->userLimit = \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponUserLimit::fromArray($v);
        }
        return $obj;
    }
}
