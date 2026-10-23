<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletBudgetSubmitV30RequestBudget implements \JsonSerializable
{
    /**
     * 预算金额，单位：元。需要介于3,000~10,000,000元之间（不限预算模式下不传）
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var \Oceanengine\Models\SharedWalletBudgetSubmitV30BudgetBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * 预算金额，单位：元。需要介于3,000~10,000,000元之间（不限预算模式下不传）
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 预算金额，单位：元。需要介于3,000~10,000,000元之间（不限预算模式下不传）
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletBudgetSubmitV30BudgetBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletBudgetSubmitV30BudgetBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
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
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        return $obj;
    }
}
