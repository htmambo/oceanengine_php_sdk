<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderCreateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30AdForm
     */
    protected ?string $adForm = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30AppOrigin
     */
    protected ?string $appOrigin = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfo
     */
    protected ?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfo $audienceInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfo
     */
    protected ?\Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfo $bookingQuantityInfo = null;

    /**
     * 总预算
     * @var int
     */
    protected ?int $budget = null;

    /**
     * 广告组ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30Classify
     */
    protected ?string $classify = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30RequestFrequencyInfo
     */
    protected ?\Oceanengine\Models\BrandOrderCreateV30RequestFrequencyInfo $frequencyInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30GdSendType
     */
    protected ?string $gdSendType = null;

    /**
     * 招商订单编号
     * @var string
     */
    protected ?string $intentionNo = null;

    /**
     * 预订单名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 政策编号
     * @var string
     */
    protected ?string $policyNo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30PricingType
     */
    protected ?string $pricingType = null;

    /**
     * @var \Oceanengine\Models\BrandOrderCreateV30ProType
     */
    protected ?string $proType = null;

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
     * @return \Oceanengine\Models\BrandOrderCreateV30AdForm
     */
    public function getAdForm(): ?string
    {
        return $this->adForm;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30AdForm $adForm
     * @return self
     */
    public function setAdForm(?string $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

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
     * @return \Oceanengine\Models\BrandOrderCreateV30AppOrigin
     */
    public function getAppOrigin(): ?string
    {
        return $this->appOrigin;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30AppOrigin $appOrigin
     * @return self
     */
    public function setAppOrigin(?string $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfo
     */
    public function getAudienceInfo(): ?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfo
    {
        return $this->audienceInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfo $audienceInfo
     * @return self
     */
    public function setAudienceInfo(?\Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfo $audienceInfo): self
    {
        $this->audienceInfo = $audienceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfo
     */
    public function getBookingQuantityInfo(): ?\Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfo
    {
        return $this->bookingQuantityInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfo $bookingQuantityInfo
     * @return self
     */
    public function setBookingQuantityInfo(?\Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfo $bookingQuantityInfo): self
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
     * 广告组ID
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 广告组ID
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30Classify
     */
    public function getClassify(): ?string
    {
        return $this->classify;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30Classify $classify
     * @return self
     */
    public function setClassify(?string $classify): self
    {
        $this->classify = $classify;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30RequestFrequencyInfo
     */
    public function getFrequencyInfo(): ?\Oceanengine\Models\BrandOrderCreateV30RequestFrequencyInfo
    {
        return $this->frequencyInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30RequestFrequencyInfo $frequencyInfo
     * @return self
     */
    public function setFrequencyInfo(?\Oceanengine\Models\BrandOrderCreateV30RequestFrequencyInfo $frequencyInfo): self
    {
        $this->frequencyInfo = $frequencyInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30GdSendType
     */
    public function getGdSendType(): ?string
    {
        return $this->gdSendType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30GdSendType $gdSendType
     * @return self
     */
    public function setGdSendType(?string $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * 招商订单编号
     * @return string
     */
    public function getIntentionNo(): ?string
    {
        return $this->intentionNo;
    }

    /**
     * 招商订单编号
     * @param string $intentionNo
     * @return self
     */
    public function setIntentionNo(?string $intentionNo): self
    {
        $this->intentionNo = $intentionNo;
        return $this;
    }

    /**
     * 预订单名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 预订单名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
     * @return \Oceanengine\Models\BrandOrderCreateV30PricingType
     */
    public function getPricingType(): ?string
    {
        return $this->pricingType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30PricingType $pricingType
     * @return self
     */
    public function setPricingType(?string $pricingType): self
    {
        $this->pricingType = $pricingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderCreateV30ProType
     */
    public function getProType(): ?string
    {
        return $this->proType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderCreateV30ProType $proType
     * @return self
     */
    public function setProType(?string $proType): self
    {
        $this->proType = $proType;
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
        if ($this->adForm !== null) {
            $result['ad_form'] = $this->adForm;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->appOrigin !== null) {
            $result['app_origin'] = $this->appOrigin;
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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->classify !== null) {
            $result['classify'] = $this->classify;
        }
        if ($this->frequencyInfo !== null) {
            $result['frequency_info'] = $this->frequencyInfo;
        }
        if ($this->gdSendType !== null) {
            $result['gd_send_type'] = $this->gdSendType;
        }
        if ($this->intentionNo !== null) {
            $result['intention_no'] = $this->intentionNo;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->policyNo !== null) {
            $result['policy_no'] = $this->policyNo;
        }
        if ($this->pricingType !== null) {
            $result['pricing_type'] = $this->pricingType;
        }
        if ($this->proType !== null) {
            $result['pro_type'] = $this->proType;
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
        if (($v = $data['ad_form'] ?? null) !== null) {
            $obj->adForm = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['app_origin'] ?? null) !== null) {
            $obj->appOrigin = (string) $v;
        }
        if (($v = $data['audience_info'] ?? null) !== null && is_array($v)) {
            $obj->audienceInfo = \Oceanengine\Models\BrandOrderCreateV30RequestAudienceInfo::fromArray($v);
        }
        if (($v = $data['booking_quantity_info'] ?? null) !== null && is_array($v)) {
            $obj->bookingQuantityInfo = \Oceanengine\Models\BrandOrderCreateV30RequestBookingQuantityInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['classify'] ?? null) !== null) {
            $obj->classify = (string) $v;
        }
        if (($v = $data['frequency_info'] ?? null) !== null && is_array($v)) {
            $obj->frequencyInfo = \Oceanengine\Models\BrandOrderCreateV30RequestFrequencyInfo::fromArray($v);
        }
        if (($v = $data['gd_send_type'] ?? null) !== null) {
            $obj->gdSendType = (string) $v;
        }
        if (($v = $data['intention_no'] ?? null) !== null) {
            $obj->intentionNo = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['policy_no'] ?? null) !== null) {
            $obj->policyNo = (string) $v;
        }
        if (($v = $data['pricing_type'] ?? null) !== null) {
            $obj->pricingType = (string) $v;
        }
        if (($v = $data['pro_type'] ?? null) !== null) {
            $obj->proType = (string) $v;
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
