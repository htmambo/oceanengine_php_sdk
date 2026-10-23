<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsTaskRaiseCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 日预算金额，当budget_mode为LIMIT时必填，范围：1000-9999999
     * @var float
     */
    protected ?float $allocatedBudget = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseCreateV2BudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * 起量任务结束时间yyyy-mm-dd，传空为不限时长，起量将在指定日期0点结束
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseCreateV2RaiseMode
     */
    protected ?string $raiseMode = null;

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
     * 日预算金额，当budget_mode为LIMIT时必填，范围：1000-9999999
     * @return float
     */
    public function getAllocatedBudget(): ?float
    {
        return $this->allocatedBudget;
    }

    /**
     * 日预算金额，当budget_mode为LIMIT时必填，范围：1000-9999999
     * @param float $allocatedBudget
     * @return self
     */
    public function setAllocatedBudget(?float $allocatedBudget): self
    {
        $this->allocatedBudget = $allocatedBudget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseCreateV2BudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseCreateV2BudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * 起量任务结束时间yyyy-mm-dd，传空为不限时长，起量将在指定日期0点结束
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 起量任务结束时间yyyy-mm-dd，传空为不限时长，起量将在指定日期0点结束
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseCreateV2RaiseMode
     */
    public function getRaiseMode(): ?string
    {
        return $this->raiseMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseCreateV2RaiseMode $raiseMode
     * @return self
     */
    public function setRaiseMode(?string $raiseMode): self
    {
        $this->raiseMode = $raiseMode;
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
        if ($this->allocatedBudget !== null) {
            $result['allocated_budget'] = $this->allocatedBudget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->raiseMode !== null) {
            $result['raise_mode'] = $this->raiseMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['allocated_budget'] ?? null) !== null) {
            $obj->allocatedBudget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['raise_mode'] ?? null) !== null) {
            $obj->raiseMode = (string) $v;
        }
        return $obj;
    }
}
