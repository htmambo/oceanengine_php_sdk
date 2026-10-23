<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsToolsTaskGetV30ResponseDataTaskListInner implements \JsonSerializable
{
    /**
     * 任务创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * @var \Oceanengine\Models\ToolsToolsTaskGetV30DataTaskListTaskStatus
     */
    protected ?string $taskStatus = null;

    /**
     * 任务创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 任务创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 任务ID
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * 任务名称
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * 任务名称
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsToolsTaskGetV30DataTaskListTaskStatus
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsToolsTaskGetV30DataTaskListTaskStatus $taskStatus
     * @return self
     */
    public function setTaskStatus(?string $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->taskName !== null) {
            $result['task_name'] = $this->taskName;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (string) $v;
        }
        return $obj;
    }
}
