<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ScheduleResultGetV30ResponseData implements \JsonSerializable
{
    /**
     * 子任务失败数量
     * @var int
     */
    protected ?int $failCount = null;

    /**
     * 主任务状态
     * @var string
     */
    protected ?string $scheduleStatus = null;

    /**
     * 子任务成功数量
     * @var int
     */
    protected ?int $successCount = null;

    /**
     * 子任务总量
     * @var int
     */
    protected ?int $taskTotal = null;

    /**
     * 子任务失败数量
     * @return int
     */
    public function getFailCount(): ?int
    {
        return $this->failCount;
    }

    /**
     * 子任务失败数量
     * @param int $failCount
     * @return self
     */
    public function setFailCount(?int $failCount): self
    {
        $this->failCount = $failCount;
        return $this;
    }

    /**
     * 主任务状态
     * @return string
     */
    public function getScheduleStatus(): ?string
    {
        return $this->scheduleStatus;
    }

    /**
     * 主任务状态
     * @param string $scheduleStatus
     * @return self
     */
    public function setScheduleStatus(?string $scheduleStatus): self
    {
        $this->scheduleStatus = $scheduleStatus;
        return $this;
    }

    /**
     * 子任务成功数量
     * @return int
     */
    public function getSuccessCount(): ?int
    {
        return $this->successCount;
    }

    /**
     * 子任务成功数量
     * @param int $successCount
     * @return self
     */
    public function setSuccessCount(?int $successCount): self
    {
        $this->successCount = $successCount;
        return $this;
    }

    /**
     * 子任务总量
     * @return int
     */
    public function getTaskTotal(): ?int
    {
        return $this->taskTotal;
    }

    /**
     * 子任务总量
     * @param int $taskTotal
     * @return self
     */
    public function setTaskTotal(?int $taskTotal): self
    {
        $this->taskTotal = $taskTotal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failCount !== null) {
            $result['fail_count'] = $this->failCount;
        }
        if ($this->scheduleStatus !== null) {
            $result['schedule_status'] = $this->scheduleStatus;
        }
        if ($this->successCount !== null) {
            $result['success_count'] = $this->successCount;
        }
        if ($this->taskTotal !== null) {
            $result['task_total'] = $this->taskTotal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_count'] ?? null) !== null) {
            $obj->failCount = (int) $v;
        }
        if (($v = $data['schedule_status'] ?? null) !== null) {
            $obj->scheduleStatus = (string) $v;
        }
        if (($v = $data['success_count'] ?? null) !== null) {
            $obj->successCount = (int) $v;
        }
        if (($v = $data['task_total'] ?? null) !== null) {
            $obj->taskTotal = (int) $v;
        }
        return $obj;
    }
}
