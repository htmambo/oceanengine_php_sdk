<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallLiveUpdateV10RequestDeliverySetting implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * AIGC 动态创意
     * @var bool
     */
    protected ?bool $enableAigcCreative = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveUpdateV10DeliverySettingLiveScheduleType
     */
    protected ?string $liveScheduleType = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySettingOverallCostItems
     */
    protected ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySettingOverallCostItems $overallCostItems = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveUpdateV10DeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * 选择的星选素材对应的商品ID
     * @var int[]
     */
    protected ?array $selectedStarPids = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

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
     * AIGC 动态创意
     * @return bool
     */
    public function getEnableAigcCreative(): ?bool
    {
        return $this->enableAigcCreative;
    }

    /**
     * AIGC 动态创意
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
     * @return \Oceanengine\Models\QianchuanOverallLiveUpdateV10DeliverySettingLiveScheduleType
     */
    public function getLiveScheduleType(): ?string
    {
        return $this->liveScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveUpdateV10DeliverySettingLiveScheduleType $liveScheduleType
     * @return self
     */
    public function setLiveScheduleType(?string $liveScheduleType): self
    {
        $this->liveScheduleType = $liveScheduleType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySettingOverallCostItems
     */
    public function getOverallCostItems(): ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySettingOverallCostItems
    {
        return $this->overallCostItems;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySettingOverallCostItems $overallCostItems
     * @return self
     */
    public function setOverallCostItems(?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySettingOverallCostItems $overallCostItems): self
    {
        $this->overallCostItems = $overallCostItems;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallLiveUpdateV10DeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveUpdateV10DeliverySettingQcpxMode $qcpxMode
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
     * 选择的星选素材对应的商品ID
     * @return int[]
     */
    public function getSelectedStarPids(): ?array
    {
        return $this->selectedStarPids;
    }

    /**
     * 选择的星选素材对应的商品ID
     * @param int[] $selectedStarPids
     * @return self
     */
    public function setSelectedStarPids(?array $selectedStarPids): self
    {
        $this->selectedStarPids = $selectedStarPids;
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
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->enableAigcCreative !== null) {
            $result['enable_aigc_creative'] = $this->enableAigcCreative;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->liveScheduleType !== null) {
            $result['live_schedule_type'] = $this->liveScheduleType;
        }
        if ($this->overallCostItems !== null) {
            $result['overall_cost_items'] = $this->overallCostItems;
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
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['enable_aigc_creative'] ?? null) !== null) {
            $obj->enableAigcCreative = (bool) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['live_schedule_type'] ?? null) !== null) {
            $obj->liveScheduleType = (string) $v;
        }
        if (($v = $data['overall_cost_items'] ?? null) !== null && is_array($v)) {
            $obj->overallCostItems = \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySettingOverallCostItems::fromArray($v);
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
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
