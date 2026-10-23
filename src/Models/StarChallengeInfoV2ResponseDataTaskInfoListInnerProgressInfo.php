<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerProgressInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $activateCount = null;

    /**
     * @var int
     */
    protected ?int $currentBudgetCost = null;

    /**
     * @var int
     */
    protected ?int $totalParticipates = null;

    /**
     * @return int
     */
    public function getActivateCount(): ?int
    {
        return $this->activateCount;
    }

    /**
     * @param int $activateCount
     * @return self
     */
    public function setActivateCount(?int $activateCount): self
    {
        $this->activateCount = $activateCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentBudgetCost(): ?int
    {
        return $this->currentBudgetCost;
    }

    /**
     * @param int $currentBudgetCost
     * @return self
     */
    public function setCurrentBudgetCost(?int $currentBudgetCost): self
    {
        $this->currentBudgetCost = $currentBudgetCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalParticipates(): ?int
    {
        return $this->totalParticipates;
    }

    /**
     * @param int $totalParticipates
     * @return self
     */
    public function setTotalParticipates(?int $totalParticipates): self
    {
        $this->totalParticipates = $totalParticipates;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activateCount !== null) {
            $result['activate_count'] = $this->activateCount;
        }
        if ($this->currentBudgetCost !== null) {
            $result['current_budget_cost'] = $this->currentBudgetCost;
        }
        if ($this->totalParticipates !== null) {
            $result['total_participates'] = $this->totalParticipates;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activate_count'] ?? null) !== null) {
            $obj->activateCount = (int) $v;
        }
        if (($v = $data['current_budget_cost'] ?? null) !== null) {
            $obj->currentBudgetCost = (int) $v;
        }
        if (($v = $data['total_participates'] ?? null) !== null) {
            $obj->totalParticipates = (int) $v;
        }
        return $obj;
    }
}
