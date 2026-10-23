<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdDetailV10ResponseDataDeliverySetting implements \JsonSerializable
{
    /**
     * 达人带货佣金优化开关，ON/OFF
     * @var string
     */
    protected ?string $allianceCommisionSwitch = null;

    /**
     * @var bool
     */
    protected ?bool $autoAwemeMaterial = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var float
     */
    protected ?float $dailyDeliveryTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * 是否开启 AIGC 动态创意
     * @var bool
     */
    protected ?bool $enableAigcCreative = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 是否多号乘方计划
     * @var bool
     */
    protected ?bool $isMultiAwemeUid = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType
     */
    protected ?string $liveScheduleType = null;

    /**
     * 是否无号投商城
     * @var bool
     */
    protected ?bool $noAwemeId = null;

    /**
     * 全域 ROI 成本项；包含 3 表示星选素材，包含 4 表示达人带货佣金优化
     * @var int[]
     */
    protected ?array $overallRoiCostItems = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingPricingType
     */
    protected ?string $pricingType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * 直播下：所选星选商品ID列表；以 Creation 返回为准
     * @var int[]
     */
    protected ?array $selectedStarPids = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * 千川星选素材投放开关，ON/OFF
     * @var string
     */
    protected ?string $starTaskMaterialSwitch = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingVideoScheduleType
     */
    protected ?string $videoScheduleType = null;

    /**
     * 达人带货佣金优化开关，ON/OFF
     * @return string
     */
    public function getAllianceCommisionSwitch(): ?string
    {
        return $this->allianceCommisionSwitch;
    }

    /**
     * 达人带货佣金优化开关，ON/OFF
     * @param string $allianceCommisionSwitch
     * @return self
     */
    public function setAllianceCommisionSwitch(?string $allianceCommisionSwitch): self
    {
        $this->allianceCommisionSwitch = $allianceCommisionSwitch;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoAwemeMaterial(): ?bool
    {
        return $this->autoAwemeMaterial;
    }

    /**
     * @param bool $autoAwemeMaterial
     * @return self
     */
    public function setAutoAwemeMaterial(?bool $autoAwemeMaterial): self
    {
        $this->autoAwemeMaterial = $autoAwemeMaterial;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getDailyDeliveryTime(): ?float
    {
        return $this->dailyDeliveryTime;
    }

    /**
     * @param float $dailyDeliveryTime
     * @return self
     */
    public function setDailyDeliveryTime(?float $dailyDeliveryTime): self
    {
        $this->dailyDeliveryTime = $dailyDeliveryTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType $deepBidType
     * @return self
     */
    public function setDeepBidType(?string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * 是否开启 AIGC 动态创意
     * @return bool
     */
    public function getEnableAigcCreative(): ?bool
    {
        return $this->enableAigcCreative;
    }

    /**
     * 是否开启 AIGC 动态创意
     * @param bool $enableAigcCreative
     * @return self
     */
    public function setEnableAigcCreative(?bool $enableAigcCreative): self
    {
        $this->enableAigcCreative = $enableAigcCreative;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 是否多号乘方计划
     * @return bool
     */
    public function getIsMultiAwemeUid(): ?bool
    {
        return $this->isMultiAwemeUid;
    }

    /**
     * 是否多号乘方计划
     * @param bool $isMultiAwemeUid
     * @return self
     */
    public function setIsMultiAwemeUid(?bool $isMultiAwemeUid): self
    {
        $this->isMultiAwemeUid = $isMultiAwemeUid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType
     */
    public function getLiveScheduleType(): ?string
    {
        return $this->liveScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType $liveScheduleType
     * @return self
     */
    public function setLiveScheduleType(?string $liveScheduleType): self
    {
        $this->liveScheduleType = $liveScheduleType;
        return $this;
    }

    /**
     * 是否无号投商城
     * @return bool
     */
    public function getNoAwemeId(): ?bool
    {
        return $this->noAwemeId;
    }

    /**
     * 是否无号投商城
     * @param bool $noAwemeId
     * @return self
     */
    public function setNoAwemeId(?bool $noAwemeId): self
    {
        $this->noAwemeId = $noAwemeId;
        return $this;
    }

    /**
     * 全域 ROI 成本项；包含 3 表示星选素材，包含 4 表示达人带货佣金优化
     * @return int[]
     */
    public function getOverallRoiCostItems(): ?array
    {
        return $this->overallRoiCostItems;
    }

    /**
     * 全域 ROI 成本项；包含 3 表示星选素材，包含 4 表示达人带货佣金优化
     * @param int[] $overallRoiCostItems
     * @return self
     */
    public function setOverallRoiCostItems(?array $overallRoiCostItems): self
    {
        $this->overallRoiCostItems = $overallRoiCostItems;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingPricingType
     */
    public function getPricingType(): ?string
    {
        return $this->pricingType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingPricingType $pricingType
     * @return self
     */
    public function setPricingType(?string $pricingType): self
    {
        $this->pricingType = $pricingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode $qcpxMode
     * @return self
     */
    public function setQcpxMode(?string $qcpxMode): self
    {
        $this->qcpxMode = $qcpxMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoi2Goal(): ?float
    {
        return $this->roi2Goal;
    }

    /**
     * @param float $roi2Goal
     * @return self
     */
    public function setRoi2Goal(?float $roi2Goal): self
    {
        $this->roi2Goal = $roi2Goal;
        return $this;
    }

    /**
     * 直播下：所选星选商品ID列表；以 Creation 返回为准
     * @return int[]
     */
    public function getSelectedStarPids(): ?array
    {
        return $this->selectedStarPids;
    }

    /**
     * 直播下：所选星选商品ID列表；以 Creation 返回为准
     * @param int[] $selectedStarPids
     * @return self
     */
    public function setSelectedStarPids(?array $selectedStarPids): self
    {
        $this->selectedStarPids = $selectedStarPids;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * 千川星选素材投放开关，ON/OFF
     * @return string
     */
    public function getStarTaskMaterialSwitch(): ?string
    {
        return $this->starTaskMaterialSwitch;
    }

    /**
     * 千川星选素材投放开关，ON/OFF
     * @param string $starTaskMaterialSwitch
     * @return self
     */
    public function setStarTaskMaterialSwitch(?string $starTaskMaterialSwitch): self
    {
        $this->starTaskMaterialSwitch = $starTaskMaterialSwitch;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingVideoScheduleType
     */
    public function getVideoScheduleType(): ?string
    {
        return $this->videoScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataDeliverySettingVideoScheduleType $videoScheduleType
     * @return self
     */
    public function setVideoScheduleType(?string $videoScheduleType): self
    {
        $this->videoScheduleType = $videoScheduleType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allianceCommisionSwitch !== null) {
            $result['alliance_commision_switch'] = $this->allianceCommisionSwitch;
        }
        if ($this->autoAwemeMaterial !== null) {
            $result['auto_aweme_material'] = $this->autoAwemeMaterial;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->dailyDeliveryTime !== null) {
            $result['daily_delivery_time'] = $this->dailyDeliveryTime;
        }
        if ($this->deepBidType !== null) {
            $result['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->enableAigcCreative !== null) {
            $result['enable_aigc_creative'] = $this->enableAigcCreative;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->isMultiAwemeUid !== null) {
            $result['is_multi_aweme_uid'] = $this->isMultiAwemeUid;
        }
        if ($this->liveScheduleType !== null) {
            $result['live_schedule_type'] = $this->liveScheduleType;
        }
        if ($this->noAwemeId !== null) {
            $result['no_aweme_id'] = $this->noAwemeId;
        }
        if ($this->overallRoiCostItems !== null) {
            $result['overall_roi_cost_items'] = $this->overallRoiCostItems;
        }
        if ($this->pricingType !== null) {
            $result['pricing_type'] = $this->pricingType;
        }
        if ($this->qcpxMode !== null) {
            $result['qcpx_mode'] = $this->qcpxMode;
        }
        if ($this->roi2Goal !== null) {
            $result['roi2_goal'] = $this->roi2Goal;
        }
        if ($this->selectedStarPids !== null) {
            $result['selected_star_pids'] = $this->selectedStarPids;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        if ($this->starTaskMaterialSwitch !== null) {
            $result['star_task_material_switch'] = $this->starTaskMaterialSwitch;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->videoScheduleType !== null) {
            $result['video_schedule_type'] = $this->videoScheduleType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['alliance_commision_switch'] ?? null) !== null) {
            $obj->allianceCommisionSwitch = (string) $v;
        }
        if (($v = $data['auto_aweme_material'] ?? null) !== null) {
            $obj->autoAwemeMaterial = (bool) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['daily_delivery_time'] ?? null) !== null) {
            $obj->dailyDeliveryTime = (float) $v;
        }
        if (($v = $data['deep_bid_type'] ?? null) !== null) {
            $obj->deepBidType = (string) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['enable_aigc_creative'] ?? null) !== null) {
            $obj->enableAigcCreative = (bool) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['is_multi_aweme_uid'] ?? null) !== null) {
            $obj->isMultiAwemeUid = (bool) $v;
        }
        if (($v = $data['live_schedule_type'] ?? null) !== null) {
            $obj->liveScheduleType = (string) $v;
        }
        if (($v = $data['no_aweme_id'] ?? null) !== null) {
            $obj->noAwemeId = (bool) $v;
        }
        if (($v = $data['overall_roi_cost_items'] ?? null) !== null && is_array($v)) {
            $obj->overallRoiCostItems = $v;
        }
        if (($v = $data['pricing_type'] ?? null) !== null) {
            $obj->pricingType = (string) $v;
        }
        if (($v = $data['qcpx_mode'] ?? null) !== null) {
            $obj->qcpxMode = (string) $v;
        }
        if (($v = $data['roi2_goal'] ?? null) !== null) {
            $obj->roi2Goal = (float) $v;
        }
        if (($v = $data['selected_star_pids'] ?? null) !== null && is_array($v)) {
            $obj->selectedStarPids = $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        if (($v = $data['star_task_material_switch'] ?? null) !== null) {
            $obj->starTaskMaterialSwitch = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['video_schedule_type'] ?? null) !== null) {
            $obj->videoScheduleType = (string) $v;
        }
        return $obj;
    }
}
