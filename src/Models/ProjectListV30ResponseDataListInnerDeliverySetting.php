<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInnerDeliverySetting implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $alreadyDeliveryDuration = null;

    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliverySettingBidSpeed
     */
    protected ?string $bidSpeed = null;

    /**
     * @var string
     */
    protected ?string $bidType = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliverySettingBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch
     */
    protected ?string $budgetOptimizeSwitch = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliverySettingDeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * @var float
     */
    protected ?float $deepCpabid = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var string
     */
    protected ?string $filterNightSwitch = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoal = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliverySettingLayerRoiSwitch
     */
    protected ?string $layerRoiSwitch = null;

    /**
     * @var float
     */
    protected ?float $liveDuration = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliverySettingProjectCustom
     */
    protected ?string $projectCustom = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliverySettingScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliverySettingSearchContinueDelivery
     */
    protected ?string $searchContinueDelivery = null;

    /**
     * @var float
     */
    protected ?float $sevenRoiGoal = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySettingShopMultiRoiGoalsInner[]
     */
    protected ?array $shopMultiRoiGoals = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return float
     */
    public function getAlreadyDeliveryDuration(): ?float
    {
        return $this->alreadyDeliveryDuration;
    }

    /**
     * @param float $alreadyDeliveryDuration
     * @return self
     */
    public function setAlreadyDeliveryDuration(?float $alreadyDeliveryDuration): self
    {
        $this->alreadyDeliveryDuration = $alreadyDeliveryDuration;
        return $this;
    }

    /**
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliverySettingBidSpeed
     */
    public function getBidSpeed(): ?string
    {
        return $this->bidSpeed;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliverySettingBidSpeed $bidSpeed
     * @return self
     */
    public function setBidSpeed(?string $bidSpeed): self
    {
        $this->bidSpeed = $bidSpeed;
        return $this;
    }

    /**
     * @return string
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param string $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
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
     * @return \Oceanengine\Models\ProjectListV30DataListDeliverySettingBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliverySettingBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch
     */
    public function getBudgetOptimizeSwitch(): ?string
    {
        return $this->budgetOptimizeSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch $budgetOptimizeSwitch
     * @return self
     */
    public function setBudgetOptimizeSwitch(?string $budgetOptimizeSwitch): self
    {
        $this->budgetOptimizeSwitch = $budgetOptimizeSwitch;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliverySettingDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliverySettingDeepBidType $deepBidType
     * @return self
     */
    public function setDeepBidType(?string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeepCpabid(): ?float
    {
        return $this->deepCpabid;
    }

    /**
     * @param float $deepCpabid
     * @return self
     */
    public function setDeepCpabid(?float $deepCpabid): self
    {
        $this->deepCpabid = $deepCpabid;
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
     * @return string
     */
    public function getFilterNightSwitch(): ?string
    {
        return $this->filterNightSwitch;
    }

    /**
     * @param string $filterNightSwitch
     * @return self
     */
    public function setFilterNightSwitch(?string $filterNightSwitch): self
    {
        $this->filterNightSwitch = $filterNightSwitch;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstRoiGoal(): ?float
    {
        return $this->firstRoiGoal;
    }

    /**
     * @param float $firstRoiGoal
     * @return self
     */
    public function setFirstRoiGoal(?float $firstRoiGoal): self
    {
        $this->firstRoiGoal = $firstRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliverySettingLayerRoiSwitch
     */
    public function getLayerRoiSwitch(): ?string
    {
        return $this->layerRoiSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliverySettingLayerRoiSwitch $layerRoiSwitch
     * @return self
     */
    public function setLayerRoiSwitch(?string $layerRoiSwitch): self
    {
        $this->layerRoiSwitch = $layerRoiSwitch;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveDuration(): ?float
    {
        return $this->liveDuration;
    }

    /**
     * @param float $liveDuration
     * @return self
     */
    public function setLiveDuration(?float $liveDuration): self
    {
        $this->liveDuration = $liveDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliverySettingProjectCustom
     */
    public function getProjectCustom(): ?string
    {
        return $this->projectCustom;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliverySettingProjectCustom $projectCustom
     * @return self
     */
    public function setProjectCustom(?string $projectCustom): self
    {
        $this->projectCustom = $projectCustom;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
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
     * @return \Oceanengine\Models\ProjectListV30DataListDeliverySettingScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliverySettingScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliverySettingSearchContinueDelivery
     */
    public function getSearchContinueDelivery(): ?string
    {
        return $this->searchContinueDelivery;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliverySettingSearchContinueDelivery $searchContinueDelivery
     * @return self
     */
    public function setSearchContinueDelivery(?string $searchContinueDelivery): self
    {
        $this->searchContinueDelivery = $searchContinueDelivery;
        return $this;
    }

    /**
     * @return float
     */
    public function getSevenRoiGoal(): ?float
    {
        return $this->sevenRoiGoal;
    }

    /**
     * @param float $sevenRoiGoal
     * @return self
     */
    public function setSevenRoiGoal(?float $sevenRoiGoal): self
    {
        $this->sevenRoiGoal = $sevenRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySettingShopMultiRoiGoalsInner[]
     */
    public function getShopMultiRoiGoals(): ?array
    {
        return $this->shopMultiRoiGoals;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySettingShopMultiRoiGoalsInner[] $shopMultiRoiGoals
     * @return self
     */
    public function setShopMultiRoiGoals(?array $shopMultiRoiGoals): self
    {
        $this->shopMultiRoiGoals = $shopMultiRoiGoals;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->alreadyDeliveryDuration !== null) {
            $result['already_delivery_duration'] = $this->alreadyDeliveryDuration;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->bidSpeed !== null) {
            $result['bid_speed'] = $this->bidSpeed;
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
        if ($this->budgetOptimizeSwitch !== null) {
            $result['budget_optimize_switch'] = $this->budgetOptimizeSwitch;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->deepBidType !== null) {
            $result['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->deepCpabid !== null) {
            $result['deep_cpabid'] = $this->deepCpabid;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->filterNightSwitch !== null) {
            $result['filter_night_switch'] = $this->filterNightSwitch;
        }
        if ($this->firstRoiGoal !== null) {
            $result['first_roi_goal'] = $this->firstRoiGoal;
        }
        if ($this->layerRoiSwitch !== null) {
            $result['layer_roi_switch'] = $this->layerRoiSwitch;
        }
        if ($this->liveDuration !== null) {
            $result['live_duration'] = $this->liveDuration;
        }
        if ($this->projectCustom !== null) {
            $result['project_custom'] = $this->projectCustom;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->searchContinueDelivery !== null) {
            $result['search_continue_delivery'] = $this->searchContinueDelivery;
        }
        if ($this->sevenRoiGoal !== null) {
            $result['seven_roi_goal'] = $this->sevenRoiGoal;
        }
        if ($this->shopMultiRoiGoals !== null) {
            $result['shop_multi_roi_goals'] = $this->shopMultiRoiGoals;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['already_delivery_duration'] ?? null) !== null) {
            $obj->alreadyDeliveryDuration = (float) $v;
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['bid_speed'] ?? null) !== null) {
            $obj->bidSpeed = (string) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['budget_optimize_switch'] ?? null) !== null) {
            $obj->budgetOptimizeSwitch = (string) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['deep_bid_type'] ?? null) !== null) {
            $obj->deepBidType = (string) $v;
        }
        if (($v = $data['deep_cpabid'] ?? null) !== null) {
            $obj->deepCpabid = (float) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['filter_night_switch'] ?? null) !== null) {
            $obj->filterNightSwitch = (string) $v;
        }
        if (($v = $data['first_roi_goal'] ?? null) !== null) {
            $obj->firstRoiGoal = (float) $v;
        }
        if (($v = $data['layer_roi_switch'] ?? null) !== null) {
            $obj->layerRoiSwitch = (string) $v;
        }
        if (($v = $data['live_duration'] ?? null) !== null) {
            $obj->liveDuration = (float) $v;
        }
        if (($v = $data['project_custom'] ?? null) !== null) {
            $obj->projectCustom = (string) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['search_continue_delivery'] ?? null) !== null) {
            $obj->searchContinueDelivery = (string) $v;
        }
        if (($v = $data['seven_roi_goal'] ?? null) !== null) {
            $obj->sevenRoiGoal = (float) $v;
        }
        if (($v = $data['shop_multi_roi_goals'] ?? null) !== null && is_array($v)) {
            $obj->shopMultiRoiGoals = array_map(fn ($vv) => \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySettingShopMultiRoiGoalsInner::fromArray($vv), $v);
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
