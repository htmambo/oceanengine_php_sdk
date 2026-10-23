<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsTaskRaiseGetV2ResponseDataReportsInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $allocatedBudget = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var int
     */
    protected ?int $duration = null;

    /**
     * @var float
     */
    protected ?float $increasedCost = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsRaiseMode
     */
    protected ?string $raiseMode = null;

    /**
     * @var int
     */
    protected ?int $reportId = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsStatus
     */
    protected ?string $status = null;

    /**
     * @return float
     */
    public function getAllocatedBudget(): ?float
    {
        return $this->allocatedBudget;
    }

    /**
     * @param float $allocatedBudget
     * @return self
     */
    public function setAllocatedBudget(?float $allocatedBudget): self
    {
        $this->allocatedBudget = $allocatedBudget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return float
     */
    public function getIncreasedCost(): ?float
    {
        return $this->increasedCost;
    }

    /**
     * @param float $increasedCost
     * @return self
     */
    public function setIncreasedCost(?float $increasedCost): self
    {
        $this->increasedCost = $increasedCost;
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
     * @return \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsRaiseMode
     */
    public function getRaiseMode(): ?string
    {
        return $this->raiseMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsRaiseMode $raiseMode
     * @return self
     */
    public function setRaiseMode(?string $raiseMode): self
    {
        $this->raiseMode = $raiseMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getReportId(): ?int
    {
        return $this->reportId;
    }

    /**
     * @param int $reportId
     * @return self
     */
    public function setReportId(?int $reportId): self
    {
        $this->reportId = $reportId;
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
     * @return \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseGetV2DataReportsStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allocatedBudget !== null) {
            $result['allocated_budget'] = $this->allocatedBudget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->increasedCost !== null) {
            $result['increased_cost'] = $this->increasedCost;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->raiseMode !== null) {
            $result['raise_mode'] = $this->raiseMode;
        }
        if ($this->reportId !== null) {
            $result['report_id'] = $this->reportId;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allocated_budget'] ?? null) !== null) {
            $obj->allocatedBudget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (int) $v;
        }
        if (($v = $data['increased_cost'] ?? null) !== null) {
            $obj->increasedCost = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['raise_mode'] ?? null) !== null) {
            $obj->raiseMode = (string) $v;
        }
        if (($v = $data['report_id'] ?? null) !== null) {
            $obj->reportId = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
