<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserGoingGlobalBudgetGetV2ResponseData implements \JsonSerializable
{
    /**
     * 广告主海外日预算限制
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\AdvertiserGoingGlobalBudgetGetV2DataBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * 广告主海外日预算限制
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 广告主海外日预算限制
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserGoingGlobalBudgetGetV2DataBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserGoingGlobalBudgetGetV2DataBudgetMode $budgetMode
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
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        return $obj;
    }
}
