<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PenaltyTaskGetV30ResponseData implements \JsonSerializable
{
    /**
     * 扣罚任务列表
     * @var \Oceanengine\Models\PenaltyTaskGetV30ResponseDataPenaltyTaskListInner[]
     */
    protected ?array $penaltyTaskList = null;

    /**
     * 扣罚任务列表
     * @return \Oceanengine\Models\PenaltyTaskGetV30ResponseDataPenaltyTaskListInner[]
     */
    public function getPenaltyTaskList(): ?array
    {
        return $this->penaltyTaskList;
    }

    /**
     * 扣罚任务列表
     * @param \Oceanengine\Models\PenaltyTaskGetV30ResponseDataPenaltyTaskListInner[] $penaltyTaskList
     * @return self
     */
    public function setPenaltyTaskList(?array $penaltyTaskList): self
    {
        $this->penaltyTaskList = $penaltyTaskList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->penaltyTaskList !== null) {
            $result['penalty_task_list'] = $this->penaltyTaskList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['penalty_task_list'] ?? null) !== null && is_array($v)) {
            $obj->penaltyTaskList = array_map(fn ($vv) => \Oceanengine\Models\PenaltyTaskGetV30ResponseDataPenaltyTaskListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
