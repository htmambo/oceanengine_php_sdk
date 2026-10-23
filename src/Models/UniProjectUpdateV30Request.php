<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UniProjectUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\UniProjectUpdateV30AigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\UniProjectUpdateV30RequestAudience
     */
    protected ?\Oceanengine\Models\UniProjectUpdateV30RequestAudience $audience = null;

    /**
     * @var \Oceanengine\Models\UniProjectUpdateV30RequestBrandInfo
     */
    protected ?\Oceanengine\Models\UniProjectUpdateV30RequestBrandInfo $brandInfo = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var string[]
     */
    protected ?array $callToActionButtons = null;

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
     * @var \Oceanengine\Models\UniProjectUpdateV30GoingGlobalSwitch
     */
    protected ?string $goingGlobalSwitch = null;

    /**
     * @var \Oceanengine\Models\UniProjectUpdateV30MonetizationMode
     */
    protected ?string $monetizationMode = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\UniProjectUpdateV30RequestPlayletSeriesUrlInfoInner[]
     */
    protected ?array $playletSeriesUrlInfo = null;

    /**
     * @var \Oceanengine\Models\UniProjectUpdateV30RequestProductInfo
     */
    protected ?\Oceanengine\Models\UniProjectUpdateV30RequestProductInfo $productInfo = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\UniProjectUpdateV30ScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var \Oceanengine\Models\UniProjectUpdateV30RequestTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * @var float
     */
    protected ?float $uniRoiGoal = null;

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
     * @return \Oceanengine\Models\UniProjectUpdateV30AigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30AigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectUpdateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\UniProjectUpdateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\UniProjectUpdateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectUpdateV30RequestBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\UniProjectUpdateV30RequestBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30RequestBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\UniProjectUpdateV30RequestBrandInfo $brandInfo): self
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
     * @return \Oceanengine\Models\UniProjectUpdateV30GoingGlobalSwitch
     */
    public function getGoingGlobalSwitch(): ?string
    {
        return $this->goingGlobalSwitch;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30GoingGlobalSwitch $goingGlobalSwitch
     * @return self
     */
    public function setGoingGlobalSwitch(?string $goingGlobalSwitch): self
    {
        $this->goingGlobalSwitch = $goingGlobalSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectUpdateV30MonetizationMode
     */
    public function getMonetizationMode(): ?string
    {
        return $this->monetizationMode;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30MonetizationMode $monetizationMode
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
     * @return \Oceanengine\Models\UniProjectUpdateV30RequestPlayletSeriesUrlInfoInner[]
     */
    public function getPlayletSeriesUrlInfo(): ?array
    {
        return $this->playletSeriesUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30RequestPlayletSeriesUrlInfoInner[] $playletSeriesUrlInfo
     * @return self
     */
    public function setPlayletSeriesUrlInfo(?array $playletSeriesUrlInfo): self
    {
        $this->playletSeriesUrlInfo = $playletSeriesUrlInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectUpdateV30RequestProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\UniProjectUpdateV30RequestProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30RequestProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\UniProjectUpdateV30RequestProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
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
     * @return \Oceanengine\Models\UniProjectUpdateV30ScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30ScheduleType $scheduleType
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
     * @return \Oceanengine\Models\UniProjectUpdateV30RequestTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * @param \Oceanengine\Models\UniProjectUpdateV30RequestTitleMaterialListInner[] $titleMaterialList
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
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->callToActionButtons !== null) {
            $result['call_to_action_buttons'] = $this->callToActionButtons;
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
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
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
        if ($this->titleMaterialList !== null) {
            $result['title_material_list'] = $this->titleMaterialList;
        }
        if ($this->uniRoiGoal !== null) {
            $result['uni_roi_goal'] = $this->uniRoiGoal;
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
            $obj->audience = \Oceanengine\Models\UniProjectUpdateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\UniProjectUpdateV30RequestBrandInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['call_to_action_buttons'] ?? null) !== null && is_array($v)) {
            $obj->callToActionButtons = $v;
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
        if (($v = $data['monetization_mode'] ?? null) !== null) {
            $obj->monetizationMode = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['playlet_series_url_info'] ?? null) !== null && is_array($v)) {
            $obj->playletSeriesUrlInfo = array_map(fn ($vv) => \Oceanengine\Models\UniProjectUpdateV30RequestPlayletSeriesUrlInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\UniProjectUpdateV30RequestProductInfo::fromArray($v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
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
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\UniProjectUpdateV30RequestTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['uni_roi_goal'] ?? null) !== null) {
            $obj->uniRoiGoal = (float) $v;
        }
        return $obj;
    }
}
