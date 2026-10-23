<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaOfflineProductBatchDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * 批量删除任务id
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * 批量删除任务上限
     * @var int
     */
    protected ?int $taskTotal = null;

    /**
     * 批量删除任务id
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * 批量删除任务id
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * 批量删除任务上限
     * @return int
     */
    public function getTaskTotal(): ?int
    {
        return $this->taskTotal;
    }

    /**
     * 批量删除任务上限
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
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        if ($this->taskTotal !== null) {
            $result['task_total'] = $this->taskTotal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        if (($v = $data['task_total'] ?? null) !== null) {
            $obj->taskTotal = (int) $v;
        }
        return $obj;
    }
}
