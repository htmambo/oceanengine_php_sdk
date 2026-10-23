<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectDetailV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAdType
     */
    protected ?string $adType = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAiOptimizeLocalAssetSwitch
     */
    protected ?string $aiOptimizeLocalAssetSwitch = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudience
     */
    protected ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudience $audience = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAutoUpdatePois
     */
    protected ?string $autoUpdatePois = null;

    /**
     * 抖音号id
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 出价，单位为分
     * @var int
     */
    protected ?int $bid = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataBidType
     */
    protected ?string $bidType = null;

    /**
     * 项目预算，单位为分
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * 私信接待抖音号,仅短视频线索使用
     * @var string
     */
    protected ?string $consultAwemeUid = null;

    /**
     * 每日投放时长，单位：秒,仅直播线索使用
     * @var int
     */
    protected ?int $dailyDeliverySeconds = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataDeliveryPackage
     */
    protected ?string $deliveryPackage = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataDeliveryPoiMode
     */
    protected ?string $deliveryPoiMode = null;

    /**
     * 投放结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 上调高峰日预算比例，单位为百分比
     * @var int
     */
    protected ?int $highBudgetRate = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataIntelligentSelectionMode
     */
    protected ?string $intelligentSelectionMode = null;

    /**
     * 是否设置了高峰日预算
     * @var bool
     */
    protected ?bool $isSetPeakBudget = null;

    /**
     * 广告账户id
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataLocalAssetType
     */
    protected ?string $localAssetType = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * 选择的营销页ids,仅短视频线索使用
     * @var int[]
     */
    protected ?array $marketPageIds = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 多门店id
     * @var int
     */
    protected ?int $multiPoiId = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 高峰日-节假日
     * @var \Oceanengine\Models\LocalProjectDetailV30DataPeakHolidays[]
     */
    protected ?array $peakHolidays = null;

    /**
     * 高峰日-自然周
     * @var \Oceanengine\Models\LocalProjectDetailV30DataPeakWeekDays[]
     */
    protected ?array $peakWeekDays = null;

    /**
     * 单门店id
     * @var int
     */
    protected ?int $poiId = null;

    /**
     * 商品id
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 项目id
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 固定投放时长，单位s
     * @var int
     */
    protected ?int $scheduleFixedSeconds = null;

    /**
     * 投放时段
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * 投放起始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 留咨组件id,仅短视频线索使用
     * @var int
     */
    protected ?int $toolPackId = null;

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAiOptimizeLocalAssetSwitch
     */
    public function getAiOptimizeLocalAssetSwitch(): ?string
    {
        return $this->aiOptimizeLocalAssetSwitch;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAiOptimizeLocalAssetSwitch $aiOptimizeLocalAssetSwitch
     * @return self
     */
    public function setAiOptimizeLocalAssetSwitch(?string $aiOptimizeLocalAssetSwitch): self
    {
        $this->aiOptimizeLocalAssetSwitch = $aiOptimizeLocalAssetSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudience
     */
    public function getAudience(): ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAutoUpdatePois
     */
    public function getAutoUpdatePois(): ?string
    {
        return $this->autoUpdatePois;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAutoUpdatePois $autoUpdatePois
     * @return self
     */
    public function setAutoUpdatePois(?string $autoUpdatePois): self
    {
        $this->autoUpdatePois = $autoUpdatePois;
        return $this;
    }

    /**
     * 抖音号id
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 出价，单位为分
     * @return int
     */
    public function getBid(): ?int
    {
        return $this->bid;
    }

    /**
     * 出价，单位为分
     * @param int $bid
     * @return self
     */
    public function setBid(?int $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * 项目预算，单位为分
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 项目预算，单位为分
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * 私信接待抖音号,仅短视频线索使用
     * @return string
     */
    public function getConsultAwemeUid(): ?string
    {
        return $this->consultAwemeUid;
    }

    /**
     * 私信接待抖音号,仅短视频线索使用
     * @param string $consultAwemeUid
     * @return self
     */
    public function setConsultAwemeUid(?string $consultAwemeUid): self
    {
        $this->consultAwemeUid = $consultAwemeUid;
        return $this;
    }

    /**
     * 每日投放时长，单位：秒,仅直播线索使用
     * @return int
     */
    public function getDailyDeliverySeconds(): ?int
    {
        return $this->dailyDeliverySeconds;
    }

    /**
     * 每日投放时长，单位：秒,仅直播线索使用
     * @param int $dailyDeliverySeconds
     * @return self
     */
    public function setDailyDeliverySeconds(?int $dailyDeliverySeconds): self
    {
        $this->dailyDeliverySeconds = $dailyDeliverySeconds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataDeliveryPackage
     */
    public function getDeliveryPackage(): ?string
    {
        return $this->deliveryPackage;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataDeliveryPackage $deliveryPackage
     * @return self
     */
    public function setDeliveryPackage(?string $deliveryPackage): self
    {
        $this->deliveryPackage = $deliveryPackage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataDeliveryPoiMode
     */
    public function getDeliveryPoiMode(): ?string
    {
        return $this->deliveryPoiMode;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataDeliveryPoiMode $deliveryPoiMode
     * @return self
     */
    public function setDeliveryPoiMode(?string $deliveryPoiMode): self
    {
        $this->deliveryPoiMode = $deliveryPoiMode;
        return $this;
    }

    /**
     * 投放结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 投放结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 上调高峰日预算比例，单位为百分比
     * @return int
     */
    public function getHighBudgetRate(): ?int
    {
        return $this->highBudgetRate;
    }

    /**
     * 上调高峰日预算比例，单位为百分比
     * @param int $highBudgetRate
     * @return self
     */
    public function setHighBudgetRate(?int $highBudgetRate): self
    {
        $this->highBudgetRate = $highBudgetRate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataIntelligentSelectionMode
     */
    public function getIntelligentSelectionMode(): ?string
    {
        return $this->intelligentSelectionMode;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataIntelligentSelectionMode $intelligentSelectionMode
     * @return self
     */
    public function setIntelligentSelectionMode(?string $intelligentSelectionMode): self
    {
        $this->intelligentSelectionMode = $intelligentSelectionMode;
        return $this;
    }

    /**
     * 是否设置了高峰日预算
     * @return bool
     */
    public function getIsSetPeakBudget(): ?bool
    {
        return $this->isSetPeakBudget;
    }

    /**
     * 是否设置了高峰日预算
     * @param bool $isSetPeakBudget
     * @return self
     */
    public function setIsSetPeakBudget(?bool $isSetPeakBudget): self
    {
        $this->isSetPeakBudget = $isSetPeakBudget;
        return $this;
    }

    /**
     * 广告账户id
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 广告账户id
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataLocalAssetType
     */
    public function getLocalAssetType(): ?string
    {
        return $this->localAssetType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataLocalAssetType $localAssetType
     * @return self
     */
    public function setLocalAssetType(?string $localAssetType): self
    {
        $this->localAssetType = $localAssetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * 选择的营销页ids,仅短视频线索使用
     * @return int[]
     */
    public function getMarketPageIds(): ?array
    {
        return $this->marketPageIds;
    }

    /**
     * 选择的营销页ids,仅短视频线索使用
     * @param int[] $marketPageIds
     * @return self
     */
    public function setMarketPageIds(?array $marketPageIds): self
    {
        $this->marketPageIds = $marketPageIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 多门店id
     * @return int
     */
    public function getMultiPoiId(): ?int
    {
        return $this->multiPoiId;
    }

    /**
     * 多门店id
     * @param int $multiPoiId
     * @return self
     */
    public function setMultiPoiId(?int $multiPoiId): self
    {
        $this->multiPoiId = $multiPoiId;
        return $this;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 项目名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 高峰日-节假日
     * @return \Oceanengine\Models\LocalProjectDetailV30DataPeakHolidays[]
     */
    public function getPeakHolidays(): ?array
    {
        return $this->peakHolidays;
    }

    /**
     * 高峰日-节假日
     * @param \Oceanengine\Models\LocalProjectDetailV30DataPeakHolidays[] $peakHolidays
     * @return self
     */
    public function setPeakHolidays(?array $peakHolidays): self
    {
        $this->peakHolidays = $peakHolidays;
        return $this;
    }

    /**
     * 高峰日-自然周
     * @return \Oceanengine\Models\LocalProjectDetailV30DataPeakWeekDays[]
     */
    public function getPeakWeekDays(): ?array
    {
        return $this->peakWeekDays;
    }

    /**
     * 高峰日-自然周
     * @param \Oceanengine\Models\LocalProjectDetailV30DataPeakWeekDays[] $peakWeekDays
     * @return self
     */
    public function setPeakWeekDays(?array $peakWeekDays): self
    {
        $this->peakWeekDays = $peakWeekDays;
        return $this;
    }

    /**
     * 单门店id
     * @return int
     */
    public function getPoiId(): ?int
    {
        return $this->poiId;
    }

    /**
     * 单门店id
     * @param int $poiId
     * @return self
     */
    public function setPoiId(?int $poiId): self
    {
        $this->poiId = $poiId;
        return $this;
    }

    /**
     * 商品id
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品id
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 项目id
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目id
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 固定投放时长，单位s
     * @return int
     */
    public function getScheduleFixedSeconds(): ?int
    {
        return $this->scheduleFixedSeconds;
    }

    /**
     * 固定投放时长，单位s
     * @param int $scheduleFixedSeconds
     * @return self
     */
    public function setScheduleFixedSeconds(?int $scheduleFixedSeconds): self
    {
        $this->scheduleFixedSeconds = $scheduleFixedSeconds;
        return $this;
    }

    /**
     * 投放时段
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * 投放时段
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * 投放起始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 投放起始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 留咨组件id,仅短视频线索使用
     * @return int
     */
    public function getToolPackId(): ?int
    {
        return $this->toolPackId;
    }

    /**
     * 留咨组件id,仅短视频线索使用
     * @param int $toolPackId
     * @return self
     */
    public function setToolPackId(?int $toolPackId): self
    {
        $this->toolPackId = $toolPackId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adType !== null) {
            $result['ad_type'] = $this->adType;
        }
        if ($this->aiOptimizeLocalAssetSwitch !== null) {
            $result['ai_optimize_local_asset_switch'] = $this->aiOptimizeLocalAssetSwitch;
        }
        if ($this->aigcDynamicCreativeSwitch !== null) {
            $result['aigc_dynamic_creative_switch'] = $this->aigcDynamicCreativeSwitch;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->autoUpdatePois !== null) {
            $result['auto_update_pois'] = $this->autoUpdatePois;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->consultAwemeUid !== null) {
            $result['consult_aweme_uid'] = $this->consultAwemeUid;
        }
        if ($this->dailyDeliverySeconds !== null) {
            $result['daily_delivery_seconds'] = $this->dailyDeliverySeconds;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->deliveryPackage !== null) {
            $result['delivery_package'] = $this->deliveryPackage;
        }
        if ($this->deliveryPoiMode !== null) {
            $result['delivery_poi_mode'] = $this->deliveryPoiMode;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->highBudgetRate !== null) {
            $result['high_budget_rate'] = $this->highBudgetRate;
        }
        if ($this->intelligentSelectionMode !== null) {
            $result['intelligent_selection_mode'] = $this->intelligentSelectionMode;
        }
        if ($this->isSetPeakBudget !== null) {
            $result['is_set_peak_budget'] = $this->isSetPeakBudget;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->localAssetType !== null) {
            $result['local_asset_type'] = $this->localAssetType;
        }
        if ($this->localDeliveryScene !== null) {
            $result['local_delivery_scene'] = $this->localDeliveryScene;
        }
        if ($this->marketPageIds !== null) {
            $result['market_page_ids'] = $this->marketPageIds;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->multiPoiId !== null) {
            $result['multi_poi_id'] = $this->multiPoiId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->peakHolidays !== null) {
            $result['peak_holidays'] = $this->peakHolidays;
        }
        if ($this->peakWeekDays !== null) {
            $result['peak_week_days'] = $this->peakWeekDays;
        }
        if ($this->poiId !== null) {
            $result['poi_id'] = $this->poiId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->scheduleFixedSeconds !== null) {
            $result['schedule_fixed_seconds'] = $this->scheduleFixedSeconds;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->toolPackId !== null) {
            $result['tool_pack_id'] = $this->toolPackId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['ai_optimize_local_asset_switch'] ?? null) !== null) {
            $obj->aiOptimizeLocalAssetSwitch = (string) $v;
        }
        if (($v = $data['aigc_dynamic_creative_switch'] ?? null) !== null) {
            $obj->aigcDynamicCreativeSwitch = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudience::fromArray($v);
        }
        if (($v = $data['auto_update_pois'] ?? null) !== null) {
            $obj->autoUpdatePois = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (int) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['consult_aweme_uid'] ?? null) !== null) {
            $obj->consultAwemeUid = (string) $v;
        }
        if (($v = $data['daily_delivery_seconds'] ?? null) !== null) {
            $obj->dailyDeliverySeconds = (int) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['delivery_package'] ?? null) !== null) {
            $obj->deliveryPackage = (string) $v;
        }
        if (($v = $data['delivery_poi_mode'] ?? null) !== null) {
            $obj->deliveryPoiMode = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['high_budget_rate'] ?? null) !== null) {
            $obj->highBudgetRate = (int) $v;
        }
        if (($v = $data['intelligent_selection_mode'] ?? null) !== null) {
            $obj->intelligentSelectionMode = (string) $v;
        }
        if (($v = $data['is_set_peak_budget'] ?? null) !== null) {
            $obj->isSetPeakBudget = (bool) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['local_asset_type'] ?? null) !== null) {
            $obj->localAssetType = (string) $v;
        }
        if (($v = $data['local_delivery_scene'] ?? null) !== null) {
            $obj->localDeliveryScene = (string) $v;
        }
        if (($v = $data['market_page_ids'] ?? null) !== null && is_array($v)) {
            $obj->marketPageIds = $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['multi_poi_id'] ?? null) !== null) {
            $obj->multiPoiId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['peak_holidays'] ?? null) !== null && is_array($v)) {
            $obj->peakHolidays = $v;
        }
        if (($v = $data['peak_week_days'] ?? null) !== null && is_array($v)) {
            $obj->peakWeekDays = $v;
        }
        if (($v = $data['poi_id'] ?? null) !== null) {
            $obj->poiId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['schedule_fixed_seconds'] ?? null) !== null) {
            $obj->scheduleFixedSeconds = (int) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['tool_pack_id'] ?? null) !== null) {
            $obj->toolPackId = (int) $v;
        }
        return $obj;
    }
}
