<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskListV30Filtering implements \JsonSerializable
{
    /**
     * 星广品类名称
     * @var string
     */
    protected ?string $starTaskCategoryName = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskCategoryType
     */
    protected ?string $starTaskCategoryType = null;

    /**
     * 任务id过滤，精确搜索，最长50
     * @var int[]
     */
    protected ?array $starTaskIds = null;

    /**
     * 任务名称过滤，长度1-50个字符（两个英文字符占1个字，该字段采取模糊查询的方式）
     * @var string
     */
    protected ?string $starTaskName = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskSource
     */
    protected ?string $starTaskSource = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskStatus
     */
    protected ?string $starTaskStatus = null;

    /**
     * 任务更新时间，结束时间，格式YYYY-MM-DD hh:mm:ss
     * @var string
     */
    protected ?string $taskModifyEndTime = null;

    /**
     * 任务更新时间，起始时间，格式YYYY-MM-DD hh:mm:ss
     * @var string
     */
    protected ?string $taskModifyStartTime = null;

    /**
     * 星广品类名称
     * @return string
     */
    public function getStarTaskCategoryName(): ?string
    {
        return $this->starTaskCategoryName;
    }

    /**
     * 星广品类名称
     * @param string $starTaskCategoryName
     * @return self
     */
    public function setStarTaskCategoryName(?string $starTaskCategoryName): self
    {
        $this->starTaskCategoryName = $starTaskCategoryName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskCategoryType
     */
    public function getStarTaskCategoryType(): ?string
    {
        return $this->starTaskCategoryType;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskCategoryType $starTaskCategoryType
     * @return self
     */
    public function setStarTaskCategoryType(?string $starTaskCategoryType): self
    {
        $this->starTaskCategoryType = $starTaskCategoryType;
        return $this;
    }

    /**
     * 任务id过滤，精确搜索，最长50
     * @return int[]
     */
    public function getStarTaskIds(): ?array
    {
        return $this->starTaskIds;
    }

    /**
     * 任务id过滤，精确搜索，最长50
     * @param int[] $starTaskIds
     * @return self
     */
    public function setStarTaskIds(?array $starTaskIds): self
    {
        $this->starTaskIds = $starTaskIds;
        return $this;
    }

    /**
     * 任务名称过滤，长度1-50个字符（两个英文字符占1个字，该字段采取模糊查询的方式）
     * @return string
     */
    public function getStarTaskName(): ?string
    {
        return $this->starTaskName;
    }

    /**
     * 任务名称过滤，长度1-50个字符（两个英文字符占1个字，该字段采取模糊查询的方式）
     * @param string $starTaskName
     * @return self
     */
    public function setStarTaskName(?string $starTaskName): self
    {
        $this->starTaskName = $starTaskName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskSource
     */
    public function getStarTaskSource(): ?string
    {
        return $this->starTaskSource;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskSource $starTaskSource
     * @return self
     */
    public function setStarTaskSource(?string $starTaskSource): self
    {
        $this->starTaskSource = $starTaskSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskStatus
     */
    public function getStarTaskStatus(): ?string
    {
        return $this->starTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30FilteringStarTaskStatus $starTaskStatus
     * @return self
     */
    public function setStarTaskStatus(?string $starTaskStatus): self
    {
        $this->starTaskStatus = $starTaskStatus;
        return $this;
    }

    /**
     * 任务更新时间，结束时间，格式YYYY-MM-DD hh:mm:ss
     * @return string
     */
    public function getTaskModifyEndTime(): ?string
    {
        return $this->taskModifyEndTime;
    }

    /**
     * 任务更新时间，结束时间，格式YYYY-MM-DD hh:mm:ss
     * @param string $taskModifyEndTime
     * @return self
     */
    public function setTaskModifyEndTime(?string $taskModifyEndTime): self
    {
        $this->taskModifyEndTime = $taskModifyEndTime;
        return $this;
    }

    /**
     * 任务更新时间，起始时间，格式YYYY-MM-DD hh:mm:ss
     * @return string
     */
    public function getTaskModifyStartTime(): ?string
    {
        return $this->taskModifyStartTime;
    }

    /**
     * 任务更新时间，起始时间，格式YYYY-MM-DD hh:mm:ss
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
        if ($this->starTaskCategoryName !== null) {
            $result['star_task_category_name'] = $this->starTaskCategoryName;
        }
        if ($this->starTaskCategoryType !== null) {
            $result['star_task_category_type'] = $this->starTaskCategoryType;
        }
        if ($this->starTaskIds !== null) {
            $result['star_task_ids'] = $this->starTaskIds;
        }
        if ($this->starTaskName !== null) {
            $result['star_task_name'] = $this->starTaskName;
        }
        if ($this->starTaskSource !== null) {
            $result['star_task_source'] = $this->starTaskSource;
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
        if (($v = $data['star_task_category_name'] ?? null) !== null) {
            $obj->starTaskCategoryName = (string) $v;
        }
        if (($v = $data['star_task_category_type'] ?? null) !== null) {
            $obj->starTaskCategoryType = (string) $v;
        }
        if (($v = $data['star_task_ids'] ?? null) !== null && is_array($v)) {
            $obj->starTaskIds = $v;
        }
        if (($v = $data['star_task_name'] ?? null) !== null) {
            $obj->starTaskName = (string) $v;
        }
        if (($v = $data['star_task_source'] ?? null) !== null) {
            $obj->starTaskSource = (string) $v;
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
