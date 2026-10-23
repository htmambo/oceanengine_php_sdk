<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomAsyncTaskCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * @var \Oceanengine\Models\ReportCustomAsyncTaskCreateV30DataTaskStatus
     */
    protected ?string $taskStatus = null;

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomAsyncTaskCreateV30DataTaskStatus
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomAsyncTaskCreateV30DataTaskStatus $taskStatus
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
