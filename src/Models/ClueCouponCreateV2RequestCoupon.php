<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponCreateV2RequestCoupon implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $deliverEnd = null;

    /**
     * @var string
     */
    protected ?string $deliverStart = null;

    /**
     * @var \Oceanengine\Models\ClueCouponCreateV2RequestCouponGlobalLimit
     */
    protected ?\Oceanengine\Models\ClueCouponCreateV2RequestCouponGlobalLimit $globalLimit = null;

    /**
     * @var \Oceanengine\Models\ClueCouponCreateV2CouponNeedPhone
     */
    protected ?string $needPhone = null;

    /**
     * @var \Oceanengine\Models\ClueCouponCreateV2CouponNeedSmsVerify
     */
    protected ?string $needSmsVerify = null;

    /**
     * @var \Oceanengine\Models\ClueCouponCreateV2RequestCouponResourceListInner[]
     */
    protected ?array $resourceList = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\ClueCouponCreateV2RequestCouponUserLimit
     */
    protected ?\Oceanengine\Models\ClueCouponCreateV2RequestCouponUserLimit $userLimit = null;

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
     * @return \Oceanengine\Models\ClueCouponCreateV2RequestCouponGlobalLimit
     */
    public function getGlobalLimit(): ?\Oceanengine\Models\ClueCouponCreateV2RequestCouponGlobalLimit
    {
        return $this->globalLimit;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCreateV2RequestCouponGlobalLimit $globalLimit
     * @return self
     */
    public function setGlobalLimit(?\Oceanengine\Models\ClueCouponCreateV2RequestCouponGlobalLimit $globalLimit): self
    {
        $this->globalLimit = $globalLimit;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponCreateV2CouponNeedPhone
     */
    public function getNeedPhone(): ?string
    {
        return $this->needPhone;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCreateV2CouponNeedPhone $needPhone
     * @return self
     */
    public function setNeedPhone(?string $needPhone): self
    {
        $this->needPhone = $needPhone;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponCreateV2CouponNeedSmsVerify
     */
    public function getNeedSmsVerify(): ?string
    {
        return $this->needSmsVerify;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCreateV2CouponNeedSmsVerify $needSmsVerify
     * @return self
     */
    public function setNeedSmsVerify(?string $needSmsVerify): self
    {
        $this->needSmsVerify = $needSmsVerify;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponCreateV2RequestCouponResourceListInner[]
     */
    public function getResourceList(): ?array
    {
        return $this->resourceList;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCreateV2RequestCouponResourceListInner[] $resourceList
     * @return self
     */
    public function setResourceList(?array $resourceList): self
    {
        $this->resourceList = $resourceList;
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
     * @return \Oceanengine\Models\ClueCouponCreateV2RequestCouponUserLimit
     */
    public function getUserLimit(): ?\Oceanengine\Models\ClueCouponCreateV2RequestCouponUserLimit
    {
        return $this->userLimit;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponCreateV2RequestCouponUserLimit $userLimit
     * @return self
     */
    public function setUserLimit(?\Oceanengine\Models\ClueCouponCreateV2RequestCouponUserLimit $userLimit): self
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->userLimit !== null) {
            $result['user_limit'] = $this->userLimit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deliver_end'] ?? null) !== null) {
            $obj->deliverEnd = (string) $v;
        }
        if (($v = $data['deliver_start'] ?? null) !== null) {
            $obj->deliverStart = (string) $v;
        }
        if (($v = $data['global_limit'] ?? null) !== null && is_array($v)) {
            $obj->globalLimit = \Oceanengine\Models\ClueCouponCreateV2RequestCouponGlobalLimit::fromArray($v);
        }
        if (($v = $data['need_phone'] ?? null) !== null) {
            $obj->needPhone = (string) $v;
        }
        if (($v = $data['need_sms_verify'] ?? null) !== null) {
            $obj->needSmsVerify = (string) $v;
        }
        if (($v = $data['resource_list'] ?? null) !== null && is_array($v)) {
            $obj->resourceList = array_map(fn ($vv) => \Oceanengine\Models\ClueCouponCreateV2RequestCouponResourceListInner::fromArray($vv), $v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['user_limit'] ?? null) !== null && is_array($v)) {
            $obj->userLimit = \Oceanengine\Models\ClueCouponCreateV2RequestCouponUserLimit::fromArray($v);
        }
        return $obj;
    }
}
