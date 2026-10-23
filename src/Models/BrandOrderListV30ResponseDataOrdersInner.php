<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAdForm
     */
    protected ?string $adForm = null;

    /**
     * 计划信息
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAdInfosInner[]
     */
    protected ?array $adInfos = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAdvancedCreativeType
     */
    protected ?string $advancedCreativeType = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAdvancedOption
     */
    protected ?string $advancedOption = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAppOrigin
     */
    protected ?string $appOrigin = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfo
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfo $audienceInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfo
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfo $bookingQuantityInfo = null;

    /**
     * 总预算
     * @var string
     */
    protected ?string $budget = null;

    /**
     * 组ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 组名称
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersClassify
     */
    protected ?string $classify = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 预定单创建人
     * @var string
     */
    protected ?string $creator = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFailInfoListInner[]
     */
    protected ?array $failInfoList = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFrequencyInfo
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFrequencyInfo $frequencyInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersGdSendType
     */
    protected ?string $gdSendType = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMagazinePriceInfo
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMagazinePriceInfo $magazinePriceInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMerchantIntention
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMerchantIntention $merchantIntention = null;

    /**
     * 预定单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 预定单名称
     * @var string
     */
    protected ?string $orderName = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerPolicy
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerPolicy $policy = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersPricingType
     */
    protected ?string $pricingType = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersProType
     */
    protected ?string $proType = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerScheduleInfo
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerScheduleInfo $scheduleInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAdForm
     */
    public function getAdForm(): ?string
    {
        return $this->adForm;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAdForm $adForm
     * @return self
     */
    public function setAdForm(?string $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * 计划信息
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAdInfosInner[]
     */
    public function getAdInfos(): ?array
    {
        return $this->adInfos;
    }

    /**
     * 计划信息
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAdInfosInner[] $adInfos
     * @return self
     */
    public function setAdInfos(?array $adInfos): self
    {
        $this->adInfos = $adInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAdvancedCreativeType
     */
    public function getAdvancedCreativeType(): ?string
    {
        return $this->advancedCreativeType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAdvancedCreativeType $advancedCreativeType
     * @return self
     */
    public function setAdvancedCreativeType(?string $advancedCreativeType): self
    {
        $this->advancedCreativeType = $advancedCreativeType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAdvancedOption
     */
    public function getAdvancedOption(): ?string
    {
        return $this->advancedOption;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAdvancedOption $advancedOption
     * @return self
     */
    public function setAdvancedOption(?string $advancedOption): self
    {
        $this->advancedOption = $advancedOption;
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
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAppOrigin
     */
    public function getAppOrigin(): ?string
    {
        return $this->appOrigin;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAppOrigin $appOrigin
     * @return self
     */
    public function setAppOrigin(?string $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfo
     */
    public function getAudienceInfo(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfo
    {
        return $this->audienceInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfo $audienceInfo
     * @return self
     */
    public function setAudienceInfo(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfo $audienceInfo): self
    {
        $this->audienceInfo = $audienceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfo
     */
    public function getBookingQuantityInfo(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfo
    {
        return $this->bookingQuantityInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfo $bookingQuantityInfo
     * @return self
     */
    public function setBookingQuantityInfo(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfo $bookingQuantityInfo): self
    {
        $this->bookingQuantityInfo = $bookingQuantityInfo;
        return $this;
    }

    /**
     * 总预算
     * @return string
     */
    public function getBudget(): ?string
    {
        return $this->budget;
    }

    /**
     * 总预算
     * @param string $budget
     * @return self
     */
    public function setBudget(?string $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 组ID
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 组ID
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 组名称
     * @return string
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * 组名称
     * @param string $campaignName
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersClassify
     */
    public function getClassify(): ?string
    {
        return $this->classify;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersClassify $classify
     * @return self
     */
    public function setClassify(?string $classify): self
    {
        $this->classify = $classify;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 预定单创建人
     * @return string
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }

    /**
     * 预定单创建人
     * @param string $creator
     * @return self
     */
    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFailInfoListInner[]
     */
    public function getFailInfoList(): ?array
    {
        return $this->failInfoList;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFailInfoListInner[] $failInfoList
     * @return self
     */
    public function setFailInfoList(?array $failInfoList): self
    {
        $this->failInfoList = $failInfoList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFrequencyInfo
     */
    public function getFrequencyInfo(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFrequencyInfo
    {
        return $this->frequencyInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFrequencyInfo $frequencyInfo
     * @return self
     */
    public function setFrequencyInfo(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFrequencyInfo $frequencyInfo): self
    {
        $this->frequencyInfo = $frequencyInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersGdSendType
     */
    public function getGdSendType(): ?string
    {
        return $this->gdSendType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersGdSendType $gdSendType
     * @return self
     */
    public function setGdSendType(?string $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMagazinePriceInfo
     */
    public function getMagazinePriceInfo(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMagazinePriceInfo
    {
        return $this->magazinePriceInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMagazinePriceInfo $magazinePriceInfo
     * @return self
     */
    public function setMagazinePriceInfo(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMagazinePriceInfo $magazinePriceInfo): self
    {
        $this->magazinePriceInfo = $magazinePriceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMerchantIntention
     */
    public function getMerchantIntention(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMerchantIntention
    {
        return $this->merchantIntention;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMerchantIntention $merchantIntention
     * @return self
     */
    public function setMerchantIntention(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMerchantIntention $merchantIntention): self
    {
        $this->merchantIntention = $merchantIntention;
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
     * 预定单名称
     * @return string
     */
    public function getOrderName(): ?string
    {
        return $this->orderName;
    }

    /**
     * 预定单名称
     * @param string $orderName
     * @return self
     */
    public function setOrderName(?string $orderName): self
    {
        $this->orderName = $orderName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerPolicy
     */
    public function getPolicy(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerPolicy
    {
        return $this->policy;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerPolicy $policy
     * @return self
     */
    public function setPolicy(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerPolicy $policy): self
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersPricingType
     */
    public function getPricingType(): ?string
    {
        return $this->pricingType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersPricingType $pricingType
     * @return self
     */
    public function setPricingType(?string $pricingType): self
    {
        $this->pricingType = $pricingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersProType
     */
    public function getProType(): ?string
    {
        return $this->proType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersProType $proType
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
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerScheduleInfo
     */
    public function getScheduleInfo(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerScheduleInfo
    {
        return $this->scheduleInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerScheduleInfo $scheduleInfo
     * @return self
     */
    public function setScheduleInfo(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerScheduleInfo $scheduleInfo): self
    {
        $this->scheduleInfo = $scheduleInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->adInfos !== null) {
            $result['ad_infos'] = $this->adInfos;
        }
        if ($this->advancedCreativeType !== null) {
            $result['advanced_creative_type'] = $this->advancedCreativeType;
        }
        if ($this->advancedOption !== null) {
            $result['advanced_option'] = $this->advancedOption;
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
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
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
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->classify !== null) {
            $result['classify'] = $this->classify;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->creator !== null) {
            $result['creator'] = $this->creator;
        }
        if ($this->failInfoList !== null) {
            $result['fail_info_list'] = $this->failInfoList;
        }
        if ($this->frequencyInfo !== null) {
            $result['frequency_info'] = $this->frequencyInfo;
        }
        if ($this->gdSendType !== null) {
            $result['gd_send_type'] = $this->gdSendType;
        }
        if ($this->magazinePriceInfo !== null) {
            $result['magazine_price_info'] = $this->magazinePriceInfo;
        }
        if ($this->merchantIntention !== null) {
            $result['merchant_intention'] = $this->merchantIntention;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderName !== null) {
            $result['order_name'] = $this->orderName;
        }
        if ($this->policy !== null) {
            $result['policy'] = $this->policy;
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
        if ($this->scheduleInfo !== null) {
            $result['schedule_info'] = $this->scheduleInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_form'] ?? null) !== null) {
            $obj->adForm = (string) $v;
        }
        if (($v = $data['ad_infos'] ?? null) !== null && is_array($v)) {
            $obj->adInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAdInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['advanced_creative_type'] ?? null) !== null) {
            $obj->advancedCreativeType = (string) $v;
        }
        if (($v = $data['advanced_option'] ?? null) !== null) {
            $obj->advancedOption = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['app_origin'] ?? null) !== null) {
            $obj->appOrigin = (string) $v;
        }
        if (($v = $data['audience_info'] ?? null) !== null && is_array($v)) {
            $obj->audienceInfo = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfo::fromArray($v);
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['booking_quantity_info'] ?? null) !== null && is_array($v)) {
            $obj->bookingQuantityInfo = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['classify'] ?? null) !== null) {
            $obj->classify = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['creator'] ?? null) !== null) {
            $obj->creator = (string) $v;
        }
        if (($v = $data['fail_info_list'] ?? null) !== null && is_array($v)) {
            $obj->failInfoList = array_map(fn ($vv) => \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFailInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['frequency_info'] ?? null) !== null && is_array($v)) {
            $obj->frequencyInfo = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerFrequencyInfo::fromArray($v);
        }
        if (($v = $data['gd_send_type'] ?? null) !== null) {
            $obj->gdSendType = (string) $v;
        }
        if (($v = $data['magazine_price_info'] ?? null) !== null && is_array($v)) {
            $obj->magazinePriceInfo = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMagazinePriceInfo::fromArray($v);
        }
        if (($v = $data['merchant_intention'] ?? null) !== null && is_array($v)) {
            $obj->merchantIntention = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerMerchantIntention::fromArray($v);
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_name'] ?? null) !== null) {
            $obj->orderName = (string) $v;
        }
        if (($v = $data['policy'] ?? null) !== null && is_array($v)) {
            $obj->policy = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerPolicy::fromArray($v);
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
        if (($v = $data['schedule_info'] ?? null) !== null && is_array($v)) {
            $obj->scheduleInfo = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerScheduleInfo::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
