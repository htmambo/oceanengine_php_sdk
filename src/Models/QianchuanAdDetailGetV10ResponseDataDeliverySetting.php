<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataDeliverySetting implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $allowQcpx = null;

    /**
     * @var int
     */
    protected ?int $autoManageStrategyCmd = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingDeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * @var float
     */
    protected ?float $deepCpaBid = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingEnableAutoPause
     */
    protected ?string $enableAutoPause = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingEnableFollowMaterial
     */
    protected ?string $enableFollowMaterial = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 抢首屏ROI目标降低幅度
     * @var int
     */
    protected ?int $grabFirstScreenBidAdjustRate = null;

    /**
     * 抢首屏开关
     * @var bool
     */
    protected ?bool $grabFirstScreenSwitch = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType
     */
    protected ?string $liveScheduleType = null;

    /**
     * @var bool
     */
    protected ?bool $productNewOpen = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * @var float
     */
    protected ?float $reviveBudget = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var int
     */
    protected ?int $scheduleFixedRange = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType
     */
    protected ?string $videoScheduleType = null;

    /**
     * @return bool
     */
    public function getAllowQcpx(): ?bool
    {
        return $this->allowQcpx;
    }

    /**
     * @param bool $allowQcpx
     * @return self
     */
    public function setAllowQcpx(?bool $allowQcpx): self
    {
        $this->allowQcpx = $allowQcpx;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoManageStrategyCmd(): ?int
    {
        return $this->autoManageStrategyCmd;
    }

    /**
     * @param int $autoManageStrategyCmd
     * @return self
     */
    public function setAutoManageStrategyCmd(?int $autoManageStrategyCmd): self
    {
        $this->autoManageStrategyCmd = $autoManageStrategyCmd;
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingBudgetMode $budgetMode
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingDeepBidType $deepBidType
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
    public function getDeepCpaBid(): ?float
    {
        return $this->deepCpaBid;
    }

    /**
     * @param float $deepCpaBid
     * @return self
     */
    public function setDeepCpaBid(?float $deepCpaBid): self
    {
        $this->deepCpaBid = $deepCpaBid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingEnableAutoPause
     */
    public function getEnableAutoPause(): ?string
    {
        return $this->enableAutoPause;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingEnableAutoPause $enableAutoPause
     * @return self
     */
    public function setEnableAutoPause(?string $enableAutoPause): self
    {
        $this->enableAutoPause = $enableAutoPause;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingEnableFollowMaterial
     */
    public function getEnableFollowMaterial(): ?string
    {
        return $this->enableFollowMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingEnableFollowMaterial $enableFollowMaterial
     * @return self
     */
    public function setEnableFollowMaterial(?string $enableFollowMaterial): self
    {
        $this->enableFollowMaterial = $enableFollowMaterial;
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 抢首屏ROI目标降低幅度
     * @return int
     */
    public function getGrabFirstScreenBidAdjustRate(): ?int
    {
        return $this->grabFirstScreenBidAdjustRate;
    }

    /**
     * 抢首屏ROI目标降低幅度
     * @param int $grabFirstScreenBidAdjustRate
     * @return self
     */
    public function setGrabFirstScreenBidAdjustRate(?int $grabFirstScreenBidAdjustRate): self
    {
        $this->grabFirstScreenBidAdjustRate = $grabFirstScreenBidAdjustRate;
        return $this;
    }

    /**
     * 抢首屏开关
     * @return bool
     */
    public function getGrabFirstScreenSwitch(): ?bool
    {
        return $this->grabFirstScreenSwitch;
    }

    /**
     * 抢首屏开关
     * @param bool $grabFirstScreenSwitch
     * @return self
     */
    public function setGrabFirstScreenSwitch(?bool $grabFirstScreenSwitch): self
    {
        $this->grabFirstScreenSwitch = $grabFirstScreenSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType
     */
    public function getLiveScheduleType(): ?string
    {
        return $this->liveScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType $liveScheduleType
     * @return self
     */
    public function setLiveScheduleType(?string $liveScheduleType): self
    {
        $this->liveScheduleType = $liveScheduleType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getProductNewOpen(): ?bool
    {
        return $this->productNewOpen;
    }

    /**
     * @param bool $productNewOpen
     * @return self
     */
    public function setProductNewOpen(?bool $productNewOpen): self
    {
        $this->productNewOpen = $productNewOpen;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingQcpxMode $qcpxMode
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
    public function getReviveBudget(): ?float
    {
        return $this->reviveBudget;
    }

    /**
     * @param float $reviveBudget
     * @return self
     */
    public function setReviveBudget(?float $reviveBudget): self
    {
        $this->reviveBudget = $reviveBudget;
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
     * @return int
     */
    public function getScheduleFixedRange(): ?int
    {
        return $this->scheduleFixedRange;
    }

    /**
     * @param int $scheduleFixedRange
     * @return self
     */
    public function setScheduleFixedRange(?int $scheduleFixedRange): self
    {
        $this->scheduleFixedRange = $scheduleFixedRange;
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType
     */
    public function getVideoScheduleType(): ?string
    {
        return $this->videoScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType $videoScheduleType
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
        if ($this->allowQcpx !== null) {
            $result['allow_qcpx'] = $this->allowQcpx;
        }
        if ($this->autoManageStrategyCmd !== null) {
            $result['auto_manage_strategy_cmd'] = $this->autoManageStrategyCmd;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->deepBidType !== null) {
            $result['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->deepCpaBid !== null) {
            $result['deep_cpa_bid'] = $this->deepCpaBid;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->enableAutoPause !== null) {
            $result['enable_auto_pause'] = $this->enableAutoPause;
        }
        if ($this->enableFollowMaterial !== null) {
            $result['enable_follow_material'] = $this->enableFollowMaterial;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->grabFirstScreenBidAdjustRate !== null) {
            $result['grab_first_screen_bid_adjust_rate'] = $this->grabFirstScreenBidAdjustRate;
        }
        if ($this->grabFirstScreenSwitch !== null) {
            $result['grab_first_screen_switch'] = $this->grabFirstScreenSwitch;
        }
        if ($this->liveScheduleType !== null) {
            $result['live_schedule_type'] = $this->liveScheduleType;
        }
        if ($this->productNewOpen !== null) {
            $result['product_new_open'] = $this->productNewOpen;
        }
        if ($this->qcpxMode !== null) {
            $result['qcpx_mode'] = $this->qcpxMode;
        }
        if ($this->reviveBudget !== null) {
            $result['revive_budget'] = $this->reviveBudget;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->scheduleFixedRange !== null) {
            $result['schedule_fixed_range'] = $this->scheduleFixedRange;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
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
        if (($v = $data['allow_qcpx'] ?? null) !== null) {
            $obj->allowQcpx = (bool) $v;
        }
        if (($v = $data['auto_manage_strategy_cmd'] ?? null) !== null) {
            $obj->autoManageStrategyCmd = (int) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['deep_bid_type'] ?? null) !== null) {
            $obj->deepBidType = (string) $v;
        }
        if (($v = $data['deep_cpa_bid'] ?? null) !== null) {
            $obj->deepCpaBid = (float) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['enable_auto_pause'] ?? null) !== null) {
            $obj->enableAutoPause = (string) $v;
        }
        if (($v = $data['enable_follow_material'] ?? null) !== null) {
            $obj->enableFollowMaterial = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['grab_first_screen_bid_adjust_rate'] ?? null) !== null) {
            $obj->grabFirstScreenBidAdjustRate = (int) $v;
        }
        if (($v = $data['grab_first_screen_switch'] ?? null) !== null) {
            $obj->grabFirstScreenSwitch = (bool) $v;
        }
        if (($v = $data['live_schedule_type'] ?? null) !== null) {
            $obj->liveScheduleType = (string) $v;
        }
        if (($v = $data['product_new_open'] ?? null) !== null) {
            $obj->productNewOpen = (bool) $v;
        }
        if (($v = $data['qcpx_mode'] ?? null) !== null) {
            $obj->qcpxMode = (string) $v;
        }
        if (($v = $data['revive_budget'] ?? null) !== null) {
            $obj->reviveBudget = (float) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['schedule_fixed_range'] ?? null) !== null) {
            $obj->scheduleFixedRange = (int) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
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
