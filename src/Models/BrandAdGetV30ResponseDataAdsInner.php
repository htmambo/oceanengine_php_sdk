<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInner implements \JsonSerializable
{
    /**
     * 计划ID
     * @var string
     */
    protected ?string $adId = null;

    /**
     * 计划状态
     * @var int
     */
    protected ?int $adStatus = null;

    /**
     * 流量位置信息
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAdStockInfosInner[]
     */
    protected ?array $adStockInfos = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfo
     */
    protected ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfo $audienceInfo = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfo
     */
    protected ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfo $budgetInfo = null;

    /**
     * 资源立项编号
     * @var string
     */
    protected ?string $budgetNo = null;

    /**
     * 广告组ID
     * @var string
     */
    protected ?string $campaignId = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsClassify
     */
    protected ?string $classify = null;

    /**
     * 计划创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsEnableMerchantIntention
     */
    protected ?string $enableMerchantIntention = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerFrequencyInfo
     */
    protected ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerFrequencyInfo $frequencyInfo = null;

    /**
     * 推广目的（枚举值）
     * @var int
     */
    protected ?int $landingType = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerMagazinePriceInfo
     */
    protected ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerMagazinePriceInfo $magazinePriceInfo = null;

    /**
     * 招商意向单ID
     * @var int
     */
    protected ?int $merchantIntentionId = null;

    /**
     * 招商意向单名称
     * @var string
     */
    protected ?string $merchantIntentionName = null;

    /**
     * 招商意向单编号
     * @var string
     */
    protected ?string $merchantIntentionNo = null;

    /**
     * 广告计划名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 政策信息
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerPromotionsInner[]
     */
    protected ?array $promotions = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerScheduleInfo
     */
    protected ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerScheduleInfo $scheduleInfo = null;

    /**
     * 商品ID
     * @var int
     */
    protected ?int $spuId = null;

    /**
     * 计划ID
     * @return string
     */
    public function getAdId(): ?string
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param string $adId
     * @return self
     */
    public function setAdId(?string $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 计划状态
     * @return int
     */
    public function getAdStatus(): ?int
    {
        return $this->adStatus;
    }

    /**
     * 计划状态
     * @param int $adStatus
     * @return self
     */
    public function setAdStatus(?int $adStatus): self
    {
        $this->adStatus = $adStatus;
        return $this;
    }

    /**
     * 流量位置信息
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAdStockInfosInner[]
     */
    public function getAdStockInfos(): ?array
    {
        return $this->adStockInfos;
    }

    /**
     * 流量位置信息
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAdStockInfosInner[] $adStockInfos
     * @return self
     */
    public function setAdStockInfos(?array $adStockInfos): self
    {
        $this->adStockInfos = $adStockInfos;
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
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfo
     */
    public function getAudienceInfo(): ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfo
    {
        return $this->audienceInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfo $audienceInfo
     * @return self
     */
    public function setAudienceInfo(?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfo $audienceInfo): self
    {
        $this->audienceInfo = $audienceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfo
     */
    public function getBudgetInfo(): ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfo
    {
        return $this->budgetInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfo $budgetInfo
     * @return self
     */
    public function setBudgetInfo(?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfo $budgetInfo): self
    {
        $this->budgetInfo = $budgetInfo;
        return $this;
    }

    /**
     * 资源立项编号
     * @return string
     */
    public function getBudgetNo(): ?string
    {
        return $this->budgetNo;
    }

    /**
     * 资源立项编号
     * @param string $budgetNo
     * @return self
     */
    public function setBudgetNo(?string $budgetNo): self
    {
        $this->budgetNo = $budgetNo;
        return $this;
    }

    /**
     * 广告组ID
     * @return string
     */
    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    /**
     * 广告组ID
     * @param string $campaignId
     * @return self
     */
    public function setCampaignId(?string $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsClassify
     */
    public function getClassify(): ?string
    {
        return $this->classify;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsClassify $classify
     * @return self
     */
    public function setClassify(?string $classify): self
    {
        $this->classify = $classify;
        return $this;
    }

    /**
     * 计划创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 计划创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsEnableMerchantIntention
     */
    public function getEnableMerchantIntention(): ?string
    {
        return $this->enableMerchantIntention;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsEnableMerchantIntention $enableMerchantIntention
     * @return self
     */
    public function setEnableMerchantIntention(?string $enableMerchantIntention): self
    {
        $this->enableMerchantIntention = $enableMerchantIntention;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerFrequencyInfo
     */
    public function getFrequencyInfo(): ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerFrequencyInfo
    {
        return $this->frequencyInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerFrequencyInfo $frequencyInfo
     * @return self
     */
    public function setFrequencyInfo(?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerFrequencyInfo $frequencyInfo): self
    {
        $this->frequencyInfo = $frequencyInfo;
        return $this;
    }

    /**
     * 推广目的（枚举值）
     * @return int
     */
    public function getLandingType(): ?int
    {
        return $this->landingType;
    }

    /**
     * 推广目的（枚举值）
     * @param int $landingType
     * @return self
     */
    public function setLandingType(?int $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerMagazinePriceInfo
     */
    public function getMagazinePriceInfo(): ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerMagazinePriceInfo
    {
        return $this->magazinePriceInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerMagazinePriceInfo $magazinePriceInfo
     * @return self
     */
    public function setMagazinePriceInfo(?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerMagazinePriceInfo $magazinePriceInfo): self
    {
        $this->magazinePriceInfo = $magazinePriceInfo;
        return $this;
    }

    /**
     * 招商意向单ID
     * @return int
     */
    public function getMerchantIntentionId(): ?int
    {
        return $this->merchantIntentionId;
    }

    /**
     * 招商意向单ID
     * @param int $merchantIntentionId
     * @return self
     */
    public function setMerchantIntentionId(?int $merchantIntentionId): self
    {
        $this->merchantIntentionId = $merchantIntentionId;
        return $this;
    }

    /**
     * 招商意向单名称
     * @return string
     */
    public function getMerchantIntentionName(): ?string
    {
        return $this->merchantIntentionName;
    }

    /**
     * 招商意向单名称
     * @param string $merchantIntentionName
     * @return self
     */
    public function setMerchantIntentionName(?string $merchantIntentionName): self
    {
        $this->merchantIntentionName = $merchantIntentionName;
        return $this;
    }

    /**
     * 招商意向单编号
     * @return string
     */
    public function getMerchantIntentionNo(): ?string
    {
        return $this->merchantIntentionNo;
    }

    /**
     * 招商意向单编号
     * @param string $merchantIntentionNo
     * @return self
     */
    public function setMerchantIntentionNo(?string $merchantIntentionNo): self
    {
        $this->merchantIntentionNo = $merchantIntentionNo;
        return $this;
    }

    /**
     * 广告计划名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 广告计划名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 政策信息
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerPromotionsInner[]
     */
    public function getPromotions(): ?array
    {
        return $this->promotions;
    }

    /**
     * 政策信息
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerPromotionsInner[] $promotions
     * @return self
     */
    public function setPromotions(?array $promotions): self
    {
        $this->promotions = $promotions;
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
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerScheduleInfo
     */
    public function getScheduleInfo(): ?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerScheduleInfo
    {
        return $this->scheduleInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerScheduleInfo $scheduleInfo
     * @return self
     */
    public function setScheduleInfo(?\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerScheduleInfo $scheduleInfo): self
    {
        $this->scheduleInfo = $scheduleInfo;
        return $this;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getSpuId(): ?int
    {
        return $this->spuId;
    }

    /**
     * 商品ID
     * @param int $spuId
     * @return self
     */
    public function setSpuId(?int $spuId): self
    {
        $this->spuId = $spuId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adStatus !== null) {
            $result['ad_status'] = $this->adStatus;
        }
        if ($this->adStockInfos !== null) {
            $result['ad_stock_infos'] = $this->adStockInfos;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->audienceInfo !== null) {
            $result['audience_info'] = $this->audienceInfo;
        }
        if ($this->budgetInfo !== null) {
            $result['budget_info'] = $this->budgetInfo;
        }
        if ($this->budgetNo !== null) {
            $result['budget_no'] = $this->budgetNo;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->classify !== null) {
            $result['classify'] = $this->classify;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->enableMerchantIntention !== null) {
            $result['enable_merchant_intention'] = $this->enableMerchantIntention;
        }
        if ($this->frequencyInfo !== null) {
            $result['frequency_info'] = $this->frequencyInfo;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->magazinePriceInfo !== null) {
            $result['magazine_price_info'] = $this->magazinePriceInfo;
        }
        if ($this->merchantIntentionId !== null) {
            $result['merchant_intention_id'] = $this->merchantIntentionId;
        }
        if ($this->merchantIntentionName !== null) {
            $result['merchant_intention_name'] = $this->merchantIntentionName;
        }
        if ($this->merchantIntentionNo !== null) {
            $result['merchant_intention_no'] = $this->merchantIntentionNo;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->promotions !== null) {
            $result['promotions'] = $this->promotions;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->scheduleInfo !== null) {
            $result['schedule_info'] = $this->scheduleInfo;
        }
        if ($this->spuId !== null) {
            $result['spu_id'] = $this->spuId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (string) $v;
        }
        if (($v = $data['ad_status'] ?? null) !== null) {
            $obj->adStatus = (int) $v;
        }
        if (($v = $data['ad_stock_infos'] ?? null) !== null && is_array($v)) {
            $obj->adStockInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAdStockInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience_info'] ?? null) !== null && is_array($v)) {
            $obj->audienceInfo = \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfo::fromArray($v);
        }
        if (($v = $data['budget_info'] ?? null) !== null && is_array($v)) {
            $obj->budgetInfo = \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfo::fromArray($v);
        }
        if (($v = $data['budget_no'] ?? null) !== null) {
            $obj->budgetNo = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (string) $v;
        }
        if (($v = $data['classify'] ?? null) !== null) {
            $obj->classify = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['enable_merchant_intention'] ?? null) !== null) {
            $obj->enableMerchantIntention = (string) $v;
        }
        if (($v = $data['frequency_info'] ?? null) !== null && is_array($v)) {
            $obj->frequencyInfo = \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerFrequencyInfo::fromArray($v);
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (int) $v;
        }
        if (($v = $data['magazine_price_info'] ?? null) !== null && is_array($v)) {
            $obj->magazinePriceInfo = \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerMagazinePriceInfo::fromArray($v);
        }
        if (($v = $data['merchant_intention_id'] ?? null) !== null) {
            $obj->merchantIntentionId = (int) $v;
        }
        if (($v = $data['merchant_intention_name'] ?? null) !== null) {
            $obj->merchantIntentionName = (string) $v;
        }
        if (($v = $data['merchant_intention_no'] ?? null) !== null) {
            $obj->merchantIntentionNo = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['promotions'] ?? null) !== null && is_array($v)) {
            $obj->promotions = array_map(fn ($vv) => \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerPromotionsInner::fromArray($vv), $v);
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['schedule_info'] ?? null) !== null && is_array($v)) {
            $obj->scheduleInfo = \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerScheduleInfo::fromArray($v);
        }
        if (($v = $data['spu_id'] ?? null) !== null) {
            $obj->spuId = (int) $v;
        }
        return $obj;
    }
}
