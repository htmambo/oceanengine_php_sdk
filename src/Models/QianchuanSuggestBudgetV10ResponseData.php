<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanSuggestBudgetV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $suggestBudgetHigh = null;

    /**
     * @var float
     */
    protected ?float $suggestBudgetLow = null;

    /**
     * @return float
     */
    public function getSuggestBudgetHigh(): ?float
    {
        return $this->suggestBudgetHigh;
    }

    /**
     * @param float $suggestBudgetHigh
     * @return self
     */
    public function setSuggestBudgetHigh(?float $suggestBudgetHigh): self
    {
        $this->suggestBudgetHigh = $suggestBudgetHigh;
        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestBudgetLow(): ?float
    {
        return $this->suggestBudgetLow;
    }

    /**
     * @param float $suggestBudgetLow
     * @return self
     */
    public function setSuggestBudgetLow(?float $suggestBudgetLow): self
    {
        $this->suggestBudgetLow = $suggestBudgetLow;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->suggestBudgetHigh !== null) {
            $result['suggest_budget_high'] = $this->suggestBudgetHigh;
        }
        if ($this->suggestBudgetLow !== null) {
            $result['suggest_budget_low'] = $this->suggestBudgetLow;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['suggest_budget_high'] ?? null) !== null) {
            $obj->suggestBudgetHigh = (float) $v;
        }
        if (($v = $data['suggest_budget_low'] ?? null) !== null) {
            $obj->suggestBudgetLow = (float) $v;
        }
        return $obj;
    }
}
