<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectCreateV30RequestDeliverySetting implements \JsonSerializable
{
    /**
     * cpc/cpm项目出价
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingBidType
     */
    protected ?string $bidType = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingBudgetOptimizeSwitch
     */
    protected ?string $budgetOptimizeSwitch = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingDeepBidType
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
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingFilterNightSwitch
     */
    protected ?string $filterNightSwitch = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoal = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingLayerRoiSwitch
     */
    protected ?string $layerRoiSwitch = null;

    /**
     * @var float
     */
    protected ?float $liveDuration = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingPricing
     */
    protected ?string $pricing = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingProjectCustom
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
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliverySettingSearchContinueDelivery
     */
    protected ?string $searchContinueDelivery = null;

    /**
     * @var float
     */
    protected ?float $sevenRoiGoal = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * cpc/cpm项目出价
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * cpc/cpm项目出价
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingBidType $bidType
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
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingBudgetOptimizeSwitch
     */
    public function getBudgetOptimizeSwitch(): ?string
    {
        return $this->budgetOptimizeSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingBudgetOptimizeSwitch $budgetOptimizeSwitch
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
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingDeepBidType $deepBidType
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
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingFilterNightSwitch
     */
    public function getFilterNightSwitch(): ?string
    {
        return $this->filterNightSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingFilterNightSwitch $filterNightSwitch
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
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingLayerRoiSwitch
     */
    public function getLayerRoiSwitch(): ?string
    {
        return $this->layerRoiSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingLayerRoiSwitch $layerRoiSwitch
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
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingProjectCustom
     */
    public function getProjectCustom(): ?string
    {
        return $this->projectCustom;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingProjectCustom $projectCustom
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
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliverySettingSearchContinueDelivery
     */
    public function getSearchContinueDelivery(): ?string
    {
        return $this->searchContinueDelivery;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliverySettingSearchContinueDelivery $searchContinueDelivery
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
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
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
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
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
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
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
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
