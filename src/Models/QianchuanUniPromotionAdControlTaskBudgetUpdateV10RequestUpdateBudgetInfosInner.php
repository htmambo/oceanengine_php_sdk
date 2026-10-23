<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskBudgetUpdateV10RequestUpdateBudgetInfosInner implements \JsonSerializable
{
    /**
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @var float
     */
    protected ?float $budget = null;

    /**
     * 需要修改的调控任务ID
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 需要修改的调控任务ID
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 需要修改的调控任务ID
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
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
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
