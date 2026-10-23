<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskListV30FilteringMetricValueFilterInner[]
     */
    protected ?array $metricValueFilter = null;

    /**
     * @var int[]
     */
    protected ?array $starTaskIds = null;

    /**
     * @var string
     */
    protected ?string $starTaskName = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskListV30FilteringStarTaskStatus
     */
    protected ?string $starTaskStatus = null;

    /**
     * @var string
     */
    protected ?string $taskModifyEndTime = null;

    /**
     * @var string
     */
    protected ?string $taskModifyStartTime = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskListV30FilteringMetricValueFilterInner[]
     */
    public function getMetricValueFilter(): ?array
    {
        return $this->metricValueFilter;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskListV30FilteringMetricValueFilterInner[] $metricValueFilter
     * @return self
     */
    public function setMetricValueFilter(?array $metricValueFilter): self
    {
        $this->metricValueFilter = $metricValueFilter;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getStarTaskIds(): ?array
    {
        return $this->starTaskIds;
    }

    /**
     * @param int[] $starTaskIds
     * @return self
     */
    public function setStarTaskIds(?array $starTaskIds): self
    {
        $this->starTaskIds = $starTaskIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskName(): ?string
    {
        return $this->starTaskName;
    }

    /**
     * @param string $starTaskName
     * @return self
     */
    public function setStarTaskName(?string $starTaskName): self
    {
        $this->starTaskName = $starTaskName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskListV30FilteringStarTaskStatus
     */
    public function getStarTaskStatus(): ?string
    {
        return $this->starTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskListV30FilteringStarTaskStatus $starTaskStatus
     * @return self
     */
    public function setStarTaskStatus(?string $starTaskStatus): self
    {
        $this->starTaskStatus = $starTaskStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskModifyEndTime(): ?string
    {
        return $this->taskModifyEndTime;
    }

    /**
     * @param string $taskModifyEndTime
     * @return self
     */
    public function setTaskModifyEndTime(?string $taskModifyEndTime): self
    {
        $this->taskModifyEndTime = $taskModifyEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskModifyStartTime(): ?string
    {
        return $this->taskModifyStartTime;
    }

    /**
     * @param string $taskModifyStartTime
     * @return self
     */
    public function setTaskModifyStartTime(?string $taskModifyStartTime): self
    {
        $this->taskModifyStartTime = $taskModifyStartTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->metricValueFilter !== null) {
            $result['metric_value_filter'] = $this->metricValueFilter;
        }
        if ($this->starTaskIds !== null) {
            $result['star_task_ids'] = $this->starTaskIds;
        }
        if ($this->starTaskName !== null) {
            $result['star_task_name'] = $this->starTaskName;
        }
        if ($this->starTaskStatus !== null) {
            $result['star_task_status'] = $this->starTaskStatus;
        }
        if ($this->taskModifyEndTime !== null) {
            $result['task_modify_end_time'] = $this->taskModifyEndTime;
        }
        if ($this->taskModifyStartTime !== null) {
            $result['task_modify_start_time'] = $this->taskModifyStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['metric_value_filter'] ?? null) !== null && is_array($v)) {
            $obj->metricValueFilter = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpStarTaskListV30FilteringMetricValueFilterInner::fromArray($vv), $v);
        }
        if (($v = $data['star_task_ids'] ?? null) !== null && is_array($v)) {
            $obj->starTaskIds = $v;
        }
        if (($v = $data['star_task_name'] ?? null) !== null) {
            $obj->starTaskName = (string) $v;
        }
        if (($v = $data['star_task_status'] ?? null) !== null) {
            $obj->starTaskStatus = (string) $v;
        }
        if (($v = $data['task_modify_end_time'] ?? null) !== null) {
            $obj->taskModifyEndTime = (string) $v;
        }
        if (($v = $data['task_modify_start_time'] ?? null) !== null) {
            $obj->taskModifyStartTime = (string) $v;
        }
        return $obj;
    }
}
