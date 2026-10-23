<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcProjectGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataAdType
     */
    protected ?string $adType = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataAigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30ResponseDataAudience
     */
    protected ?\Oceanengine\Models\LocalOcProjectGetV30ResponseDataAudience $audience = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataAutoUpdatePois
     */
    protected ?string $autoUpdatePois = null;

    /**
     * 用于投放的抖音号id
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * 出价
     * @var int
     */
    protected ?int $bid = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataBidType
     */
    protected ?string $bidType = null;

    /**
     * 项目预算
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * 私信接待抖音号
     * @var int
     */
    protected ?int $consultAwemeUid = null;

    /**
     * 每日投放时长
     * @var int
     */
    protected ?int $dailyDeliverySeconds = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataDeliveryGoal
     */
    protected ?string $deliveryGoal = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataDeliveryPoiMode
     */
    protected ?string $deliveryPoiMode = null;

    /**
     * 结束投放时间
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 营销跳转页
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataLocalAssetType[]
     */
    protected ?array $localAssetType = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * 营销页id
     * @var int[]
     */
    protected ?array $marketPageIds = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 推门店ID列表,需通过【根据多门店id查门店列表】接口查询门店列表。 delivery_poi_mode=Part时传入
     * @var int
     */
    protected ?int $multiPoiIds = null;

    /**
     * 项目名
     * @var string
     */
    protected ?string $name = null;

    /**
     * 单门店id
     * @var int
     */
    protected ?int $poiId = null;

    /**
     * 产品投放id
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataProjectType
     */
    protected ?string $projectType = null;

    /**
     * 投放时段
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * 开始投放时间
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * 留资组件ID
     * @var int
     */
    protected ?int $toolPackId = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataToolSelectionMode
     */
    protected ?string $toolSelectionMode = null;

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataAigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataAigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30ResponseDataAudience
     */
    public function getAudience(): ?\Oceanengine\Models\LocalOcProjectGetV30ResponseDataAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30ResponseDataAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\LocalOcProjectGetV30ResponseDataAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataAutoUpdatePois
     */
    public function getAutoUpdatePois(): ?string
    {
        return $this->autoUpdatePois;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataAutoUpdatePois $autoUpdatePois
     * @return self
     */
    public function setAutoUpdatePois(?string $autoUpdatePois): self
    {
        $this->autoUpdatePois = $autoUpdatePois;
        return $this;
    }

    /**
     * 用于投放的抖音号id
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 用于投放的抖音号id
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 出价
     * @return int
     */
    public function getBid(): ?int
    {
        return $this->bid;
    }

    /**
     * 出价
     * @param int $bid
     * @return self
     */
    public function setBid(?int $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * 项目预算
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 项目预算
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * 私信接待抖音号
     * @return int
     */
    public function getConsultAwemeUid(): ?int
    {
        return $this->consultAwemeUid;
    }

    /**
     * 私信接待抖音号
     * @param int $consultAwemeUid
     * @return self
     */
    public function setConsultAwemeUid(?int $consultAwemeUid): self
    {
        $this->consultAwemeUid = $consultAwemeUid;
        return $this;
    }

    /**
     * 每日投放时长
     * @return int
     */
    public function getDailyDeliverySeconds(): ?int
    {
        return $this->dailyDeliverySeconds;
    }

    /**
     * 每日投放时长
     * @param int $dailyDeliverySeconds
     * @return self
     */
    public function setDailyDeliverySeconds(?int $dailyDeliverySeconds): self
    {
        $this->dailyDeliverySeconds = $dailyDeliverySeconds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataDeliveryGoal
     */
    public function getDeliveryGoal(): ?string
    {
        return $this->deliveryGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataDeliveryGoal $deliveryGoal
     * @return self
     */
    public function setDeliveryGoal(?string $deliveryGoal): self
    {
        $this->deliveryGoal = $deliveryGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataDeliveryPoiMode
     */
    public function getDeliveryPoiMode(): ?string
    {
        return $this->deliveryPoiMode;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataDeliveryPoiMode $deliveryPoiMode
     * @return self
     */
    public function setDeliveryPoiMode(?string $deliveryPoiMode): self
    {
        $this->deliveryPoiMode = $deliveryPoiMode;
        return $this;
    }

    /**
     * 结束投放时间
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * 结束投放时间
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 营销跳转页
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataLocalAssetType[]
     */
    public function getLocalAssetType(): ?array
    {
        return $this->localAssetType;
    }

    /**
     * 营销跳转页
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataLocalAssetType[] $localAssetType
     * @return self
     */
    public function setLocalAssetType(?array $localAssetType): self
    {
        $this->localAssetType = $localAssetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * 营销页id
     * @return int[]
     */
    public function getMarketPageIds(): ?array
    {
        return $this->marketPageIds;
    }

    /**
     * 营销页id
     * @param int[] $marketPageIds
     * @return self
     */
    public function setMarketPageIds(?array $marketPageIds): self
    {
        $this->marketPageIds = $marketPageIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 推门店ID列表,需通过【根据多门店id查门店列表】接口查询门店列表。 delivery_poi_mode=Part时传入
     * @return int
     */
    public function getMultiPoiIds(): ?int
    {
        return $this->multiPoiIds;
    }

    /**
     * 推门店ID列表,需通过【根据多门店id查门店列表】接口查询门店列表。 delivery_poi_mode=Part时传入
     * @param int $multiPoiIds
     * @return self
     */
    public function setMultiPoiIds(?int $multiPoiIds): self
    {
        $this->multiPoiIds = $multiPoiIds;
        return $this;
    }

    /**
     * 项目名
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 项目名
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
     * 产品投放id
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 产品投放id
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataProjectType
     */
    public function getProjectType(): ?string
    {
        return $this->projectType;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataProjectType $projectType
     * @return self
     */
    public function setProjectType(?string $projectType): self
    {
        $this->projectType = $projectType;
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
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * 开始投放时间
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * 开始投放时间
     * @param int $startTime
     * @return self
     */
    public function setStartTime(?int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 留资组件ID
     * @return int
     */
    public function getToolPackId(): ?int
    {
        return $this->toolPackId;
    }

    /**
     * 留资组件ID
     * @param int $toolPackId
     * @return self
     */
    public function setToolPackId(?int $toolPackId): self
    {
        $this->toolPackId = $toolPackId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataToolSelectionMode
     */
    public function getToolSelectionMode(): ?string
    {
        return $this->toolSelectionMode;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataToolSelectionMode $toolSelectionMode
     * @return self
     */
    public function setToolSelectionMode(?string $toolSelectionMode): self
    {
        $this->toolSelectionMode = $toolSelectionMode;
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
        if ($this->deliveryGoal !== null) {
            $result['delivery_goal'] = $this->deliveryGoal;
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
        if ($this->multiPoiIds !== null) {
            $result['multi_poi_ids'] = $this->multiPoiIds;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->poiId !== null) {
            $result['poi_id'] = $this->poiId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->projectType !== null) {
            $result['project_type'] = $this->projectType;
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
        if ($this->toolSelectionMode !== null) {
            $result['tool_selection_mode'] = $this->toolSelectionMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['aigc_dynamic_creative_switch'] ?? null) !== null) {
            $obj->aigcDynamicCreativeSwitch = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\LocalOcProjectGetV30ResponseDataAudience::fromArray($v);
        }
        if (($v = $data['auto_update_pois'] ?? null) !== null) {
            $obj->autoUpdatePois = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
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
            $obj->consultAwemeUid = (int) $v;
        }
        if (($v = $data['daily_delivery_seconds'] ?? null) !== null) {
            $obj->dailyDeliverySeconds = (int) $v;
        }
        if (($v = $data['delivery_goal'] ?? null) !== null) {
            $obj->deliveryGoal = (string) $v;
        }
        if (($v = $data['delivery_poi_mode'] ?? null) !== null) {
            $obj->deliveryPoiMode = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['local_asset_type'] ?? null) !== null && is_array($v)) {
            $obj->localAssetType = $v;
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
        if (($v = $data['multi_poi_ids'] ?? null) !== null) {
            $obj->multiPoiIds = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['poi_id'] ?? null) !== null) {
            $obj->poiId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['project_type'] ?? null) !== null) {
            $obj->projectType = (string) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (int) $v;
        }
        if (($v = $data['tool_pack_id'] ?? null) !== null) {
            $obj->toolPackId = (int) $v;
        }
        if (($v = $data['tool_selection_mode'] ?? null) !== null) {
            $obj->toolSelectionMode = (string) $v;
        }
        return $obj;
    }
}
