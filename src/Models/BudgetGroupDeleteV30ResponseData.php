<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BudgetGroupDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * 删除成功的预算组id
     * @var int[]
     */
    protected ?array $budgetGroupIds = null;

    /**
     * 删除失败的预算组
     * @var \Oceanengine\Models\BudgetGroupDeleteV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 删除成功的预算组id
     * @return int[]
     */
    public function getBudgetGroupIds(): ?array
    {
        return $this->budgetGroupIds;
    }

    /**
     * 删除成功的预算组id
     * @param int[] $budgetGroupIds
     * @return self
     */
    public function setBudgetGroupIds(?array $budgetGroupIds): self
    {
        $this->budgetGroupIds = $budgetGroupIds;
        return $this;
    }

    /**
     * 删除失败的预算组
     * @return \Oceanengine\Models\BudgetGroupDeleteV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 删除失败的预算组
     * @param \Oceanengine\Models\BudgetGroupDeleteV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->budgetGroupIds !== null) {
            $result['budget_group_ids'] = $this->budgetGroupIds;
        }
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget_group_ids'] ?? null) !== null && is_array($v)) {
            $obj->budgetGroupIds = $v;
        }
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\BudgetGroupDeleteV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
