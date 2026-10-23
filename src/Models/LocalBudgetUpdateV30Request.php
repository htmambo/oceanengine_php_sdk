<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalBudgetUpdateV30Request implements \JsonSerializable
{
    /**
     * 预算值
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\LocalBudgetUpdateV30BudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var \Oceanengine\Models\LocalBudgetUpdateV30EffectiveMode
     */
    protected ?string $effectiveMode = null;

    /**
     * 投放账户ID
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 预算值
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 预算值
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalBudgetUpdateV30BudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\LocalBudgetUpdateV30BudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalBudgetUpdateV30EffectiveMode
     */
    public function getEffectiveMode(): ?string
    {
        return $this->effectiveMode;
    }

    /**
     * @param \Oceanengine\Models\LocalBudgetUpdateV30EffectiveMode $effectiveMode
     * @return self
     */
    public function setEffectiveMode(?string $effectiveMode): self
    {
        $this->effectiveMode = $effectiveMode;
        return $this;
    }

    /**
     * 投放账户ID
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 投放账户ID
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
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
        if ($this->effectiveMode !== null) {
            $result['effective_mode'] = $this->effectiveMode;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['effective_mode'] ?? null) !== null) {
            $obj->effectiveMode = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        return $obj;
    }
}
