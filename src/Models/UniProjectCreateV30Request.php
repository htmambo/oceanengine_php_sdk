<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UniProjectCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30AigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30RequestAudience
     */
    protected ?\Oceanengine\Models\UniProjectCreateV30RequestAudience $audience = null;

    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30RequestBrandInfo
     */
    protected ?\Oceanengine\Models\UniProjectCreateV30RequestBrandInfo $brandInfo = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var string[]
     */
    protected ?array $callToActionButtons = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30DeliveryProduct
     */
    protected ?string $deliveryProduct = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var float
     */
    protected ?float $goingGlobalBudget = null;

    /**
     * @var float
     */
    protected ?float $goingGlobalRoiGoal = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30GoingGlobalSwitch
     */
    protected ?string $goingGlobalSwitch = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30RequestInternalAdvertiserInfo
     */
    protected ?\Oceanengine\Models\UniProjectCreateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30MonetizationMode
     */
    protected ?string $monetizationMode = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30RequestPlayletSeriesUrlInfoInner[]
     */
    protected ?array $playletSeriesUrlInfo = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30RequestProductInfo
     */
    protected ?\Oceanengine\Models\UniProjectCreateV30RequestProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30RequestRelatedProduct
     */
    protected ?\Oceanengine\Models\UniProjectCreateV30RequestRelatedProduct $relatedProduct = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30ScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30RequestTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * @var float
     */
    protected ?float $uniRoiGoal = null;

    /**
     * @var \Oceanengine\Models\UniProjectCreateV30RequestVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

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
     * @return \Oceanengine\Models\UniProjectCreateV30AigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30AigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\UniProjectCreateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\UniProjectCreateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30RequestBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\UniProjectCreateV30RequestBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30RequestBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\UniProjectCreateV30RequestBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCallToActionButtons(): ?array
    {
        return $this->callToActionButtons;
    }

    /**
     * @param string[] $callToActionButtons
     * @return self
     */
    public function setCallToActionButtons(?array $callToActionButtons): self
    {
        $this->callToActionButtons = $callToActionButtons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30DeliveryProduct
     */
    public function getDeliveryProduct(): ?string
    {
        return $this->deliveryProduct;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30DeliveryProduct $deliveryProduct
     * @return self
     */
    public function setDeliveryProduct(?string $deliveryProduct): self
    {
        $this->deliveryProduct = $deliveryProduct;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getGoingGlobalBudget(): ?float
    {
        return $this->goingGlobalBudget;
    }

    /**
     * @param float $goingGlobalBudget
     * @return self
     */
    public function setGoingGlobalBudget(?float $goingGlobalBudget): self
    {
        $this->goingGlobalBudget = $goingGlobalBudget;
        return $this;
    }

    /**
     * @return float
     */
    public function getGoingGlobalRoiGoal(): ?float
    {
        return $this->goingGlobalRoiGoal;
    }

    /**
     * @param float $goingGlobalRoiGoal
     * @return self
     */
    public function setGoingGlobalRoiGoal(?float $goingGlobalRoiGoal): self
    {
        $this->goingGlobalRoiGoal = $goingGlobalRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30GoingGlobalSwitch
     */
    public function getGoingGlobalSwitch(): ?string
    {
        return $this->goingGlobalSwitch;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30GoingGlobalSwitch $goingGlobalSwitch
     * @return self
     */
    public function setGoingGlobalSwitch(?string $goingGlobalSwitch): self
    {
        $this->goingGlobalSwitch = $goingGlobalSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30RequestInternalAdvertiserInfo
     */
    public function getInternalAdvertiserInfo(): ?\Oceanengine\Models\UniProjectCreateV30RequestInternalAdvertiserInfo
    {
        return $this->internalAdvertiserInfo;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo
     * @return self
     */
    public function setInternalAdvertiserInfo(?\Oceanengine\Models\UniProjectCreateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo): self
    {
        $this->internalAdvertiserInfo = $internalAdvertiserInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30MonetizationMode
     */
    public function getMonetizationMode(): ?string
    {
        return $this->monetizationMode;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30MonetizationMode $monetizationMode
     * @return self
     */
    public function setMonetizationMode(?string $monetizationMode): self
    {
        $this->monetizationMode = $monetizationMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30RequestPlayletSeriesUrlInfoInner[]
     */
    public function getPlayletSeriesUrlInfo(): ?array
    {
        return $this->playletSeriesUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30RequestPlayletSeriesUrlInfoInner[] $playletSeriesUrlInfo
     * @return self
     */
    public function setPlayletSeriesUrlInfo(?array $playletSeriesUrlInfo): self
    {
        $this->playletSeriesUrlInfo = $playletSeriesUrlInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30RequestProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\UniProjectCreateV30RequestProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30RequestProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\UniProjectCreateV30RequestProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30RequestRelatedProduct
     */
    public function getRelatedProduct(): ?\Oceanengine\Models\UniProjectCreateV30RequestRelatedProduct
    {
        return $this->relatedProduct;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30RequestRelatedProduct $relatedProduct
     * @return self
     */
    public function setRelatedProduct(?\Oceanengine\Models\UniProjectCreateV30RequestRelatedProduct $relatedProduct): self
    {
        $this->relatedProduct = $relatedProduct;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30ScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30ScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30RequestTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30RequestTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * @return float
     */
    public function getUniRoiGoal(): ?float
    {
        return $this->uniRoiGoal;
    }

    /**
     * @param float $uniRoiGoal
     * @return self
     */
    public function setUniRoiGoal(?float $uniRoiGoal): self
    {
        $this->uniRoiGoal = $uniRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectCreateV30RequestVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * @param \Oceanengine\Models\UniProjectCreateV30RequestVideoMaterialListInner[] $videoMaterialList
     * @return self
     */
    public function setVideoMaterialList(?array $videoMaterialList): self
    {
        $this->videoMaterialList = $videoMaterialList;
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
        if ($this->aigcDynamicCreativeSwitch !== null) {
            $result['aigc_dynamic_creative_switch'] = $this->aigcDynamicCreativeSwitch;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->callToActionButtons !== null) {
            $result['call_to_action_buttons'] = $this->callToActionButtons;
        }
        if ($this->deliveryProduct !== null) {
            $result['delivery_product'] = $this->deliveryProduct;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->goingGlobalBudget !== null) {
            $result['going_global_budget'] = $this->goingGlobalBudget;
        }
        if ($this->goingGlobalRoiGoal !== null) {
            $result['going_global_roi_goal'] = $this->goingGlobalRoiGoal;
        }
        if ($this->goingGlobalSwitch !== null) {
            $result['going_global_switch'] = $this->goingGlobalSwitch;
        }
        if ($this->internalAdvertiserInfo !== null) {
            $result['internal_advertiser_info'] = $this->internalAdvertiserInfo;
        }
        if ($this->monetizationMode !== null) {
            $result['monetization_mode'] = $this->monetizationMode;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->playletSeriesUrlInfo !== null) {
            $result['playlet_series_url_info'] = $this->playletSeriesUrlInfo;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->relatedProduct !== null) {
            $result['related_product'] = $this->relatedProduct;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->titleMaterialList !== null) {
            $result['title_material_list'] = $this->titleMaterialList;
        }
        if ($this->uniRoiGoal !== null) {
            $result['uni_roi_goal'] = $this->uniRoiGoal;
        }
        if ($this->videoMaterialList !== null) {
            $result['video_material_list'] = $this->videoMaterialList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aigc_dynamic_creative_switch'] ?? null) !== null) {
            $obj->aigcDynamicCreativeSwitch = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\UniProjectCreateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\UniProjectCreateV30RequestBrandInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['call_to_action_buttons'] ?? null) !== null && is_array($v)) {
            $obj->callToActionButtons = $v;
        }
        if (($v = $data['delivery_product'] ?? null) !== null) {
            $obj->deliveryProduct = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['going_global_budget'] ?? null) !== null) {
            $obj->goingGlobalBudget = (float) $v;
        }
        if (($v = $data['going_global_roi_goal'] ?? null) !== null) {
            $obj->goingGlobalRoiGoal = (float) $v;
        }
        if (($v = $data['going_global_switch'] ?? null) !== null) {
            $obj->goingGlobalSwitch = (string) $v;
        }
        if (($v = $data['internal_advertiser_info'] ?? null) !== null && is_array($v)) {
            $obj->internalAdvertiserInfo = \Oceanengine\Models\UniProjectCreateV30RequestInternalAdvertiserInfo::fromArray($v);
        }
        if (($v = $data['monetization_mode'] ?? null) !== null) {
            $obj->monetizationMode = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['playlet_series_url_info'] ?? null) !== null && is_array($v)) {
            $obj->playletSeriesUrlInfo = array_map(fn ($vv) => \Oceanengine\Models\UniProjectCreateV30RequestPlayletSeriesUrlInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\UniProjectCreateV30RequestProductInfo::fromArray($v);
        }
        if (($v = $data['related_product'] ?? null) !== null && is_array($v)) {
            $obj->relatedProduct = \Oceanengine\Models\UniProjectCreateV30RequestRelatedProduct::fromArray($v);
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\UniProjectCreateV30RequestTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['uni_roi_goal'] ?? null) !== null) {
            $obj->uniRoiGoal = (float) $v;
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\UniProjectCreateV30RequestVideoMaterialListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
