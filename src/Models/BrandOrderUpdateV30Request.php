<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderUpdateV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfo
     */
    protected ?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfo $audienceInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30RequestBookingQuantityInfo
     */
    protected ?\Oceanengine\Models\BrandOrderUpdateV30RequestBookingQuantityInfo $bookingQuantityInfo = null;

    /**
     * 总预算
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30RequestFrequencyInfo
     */
    protected ?\Oceanengine\Models\BrandOrderUpdateV30RequestFrequencyInfo $frequencyInfo = null;

    /**
     * 招商订单编号，传空字符串表示不启用招商意向单
     * @var string
     */
    protected ?string $intentionNo = null;

    /**
     * 预定单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 预订单名称
     * @var string
     */
    protected ?string $orderName = null;

    /**
     * 政策编号
     * @var string
     */
    protected ?string $policyNo = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 代理商创建广告的时候，需要传代理商员工ID
     * @var int[]
     */
    protected ?array $staffIds = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfo
     */
    public function getAudienceInfo(): ?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfo
    {
        return $this->audienceInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfo $audienceInfo
     * @return self
     */
    public function setAudienceInfo(?\Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfo $audienceInfo): self
    {
        $this->audienceInfo = $audienceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30RequestBookingQuantityInfo
     */
    public function getBookingQuantityInfo(): ?\Oceanengine\Models\BrandOrderUpdateV30RequestBookingQuantityInfo
    {
        return $this->bookingQuantityInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30RequestBookingQuantityInfo $bookingQuantityInfo
     * @return self
     */
    public function setBookingQuantityInfo(?\Oceanengine\Models\BrandOrderUpdateV30RequestBookingQuantityInfo $bookingQuantityInfo): self
    {
        $this->bookingQuantityInfo = $bookingQuantityInfo;
        return $this;
    }

    /**
     * 总预算
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 总预算
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30RequestFrequencyInfo
     */
    public function getFrequencyInfo(): ?\Oceanengine\Models\BrandOrderUpdateV30RequestFrequencyInfo
    {
        return $this->frequencyInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30RequestFrequencyInfo $frequencyInfo
     * @return self
     */
    public function setFrequencyInfo(?\Oceanengine\Models\BrandOrderUpdateV30RequestFrequencyInfo $frequencyInfo): self
    {
        $this->frequencyInfo = $frequencyInfo;
        return $this;
    }

    /**
     * 招商订单编号，传空字符串表示不启用招商意向单
     * @return string
     */
    public function getIntentionNo(): ?string
    {
        return $this->intentionNo;
    }

    /**
     * 招商订单编号，传空字符串表示不启用招商意向单
     * @param string $intentionNo
     * @return self
     */
    public function setIntentionNo(?string $intentionNo): self
    {
        $this->intentionNo = $intentionNo;
        return $this;
    }

    /**
     * 预定单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 预定单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 预订单名称
     * @return string
     */
    public function getOrderName(): ?string
    {
        return $this->orderName;
    }

    /**
     * 预订单名称
     * @param string $orderName
     * @return self
     */
    public function setOrderName(?string $orderName): self
    {
        $this->orderName = $orderName;
        return $this;
    }

    /**
     * 政策编号
     * @return string
     */
    public function getPolicyNo(): ?string
    {
        return $this->policyNo;
    }

    /**
     * 政策编号
     * @param string $policyNo
     * @return self
     */
    public function setPolicyNo(?string $policyNo): self
    {
        $this->policyNo = $policyNo;
        return $this;
    }

    /**
     * 备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 代理商创建广告的时候，需要传代理商员工ID
     * @return int[]
     */
    public function getStaffIds(): ?array
    {
        return $this->staffIds;
    }

    /**
     * 代理商创建广告的时候，需要传代理商员工ID
     * @param int[] $staffIds
     * @return self
     */
    public function setStaffIds(?array $staffIds): self
    {
        $this->staffIds = $staffIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->audienceInfo !== null) {
            $result['audience_info'] = $this->audienceInfo;
        }
        if ($this->bookingQuantityInfo !== null) {
            $result['booking_quantity_info'] = $this->bookingQuantityInfo;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->frequencyInfo !== null) {
            $result['frequency_info'] = $this->frequencyInfo;
        }
        if ($this->intentionNo !== null) {
            $result['intention_no'] = $this->intentionNo;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderName !== null) {
            $result['order_name'] = $this->orderName;
        }
        if ($this->policyNo !== null) {
            $result['policy_no'] = $this->policyNo;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->staffIds !== null) {
            $result['staff_ids'] = $this->staffIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience_info'] ?? null) !== null && is_array($v)) {
            $obj->audienceInfo = \Oceanengine\Models\BrandOrderUpdateV30RequestAudienceInfo::fromArray($v);
        }
        if (($v = $data['booking_quantity_info'] ?? null) !== null && is_array($v)) {
            $obj->bookingQuantityInfo = \Oceanengine\Models\BrandOrderUpdateV30RequestBookingQuantityInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['frequency_info'] ?? null) !== null && is_array($v)) {
            $obj->frequencyInfo = \Oceanengine\Models\BrandOrderUpdateV30RequestFrequencyInfo::fromArray($v);
        }
        if (($v = $data['intention_no'] ?? null) !== null) {
            $obj->intentionNo = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_name'] ?? null) !== null) {
            $obj->orderName = (string) $v;
        }
        if (($v = $data['policy_no'] ?? null) !== null) {
            $obj->policyNo = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['staff_ids'] ?? null) !== null && is_array($v)) {
            $obj->staffIds = $v;
        }
        return $obj;
    }
}
