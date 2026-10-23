<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BudgetGroupUpdateV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 更新后的预算组日预算
     * @var float
     */
    protected ?float $budgetGroupBudget = null;

    /**
     * 需要更新的预算组id
     * @var int
     */
    protected ?int $budgetGroupId = null;

    /**
     * 更新后的预算组名称
     * @var string
     */
    protected ?string $budgetGroupName = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 更新后的预算组日预算
     * @return float
     */
    public function getBudgetGroupBudget(): ?float
    {
        return $this->budgetGroupBudget;
    }

    /**
     * 更新后的预算组日预算
     * @param float $budgetGroupBudget
     * @return self
     */
    public function setBudgetGroupBudget(?float $budgetGroupBudget): self
    {
        $this->budgetGroupBudget = $budgetGroupBudget;
        return $this;
    }

    /**
     * 需要更新的预算组id
     * @return int
     */
    public function getBudgetGroupId(): ?int
    {
        return $this->budgetGroupId;
    }

    /**
     * 需要更新的预算组id
     * @param int $budgetGroupId
     * @return self
     */
    public function setBudgetGroupId(?int $budgetGroupId): self
    {
        $this->budgetGroupId = $budgetGroupId;
        return $this;
    }

    /**
     * 更新后的预算组名称
     * @return string
     */
    public function getBudgetGroupName(): ?string
    {
        return $this->budgetGroupName;
    }

    /**
     * 更新后的预算组名称
     * @param string $budgetGroupName
     * @return self
     */
    public function setBudgetGroupName(?string $budgetGroupName): self
    {
        $this->budgetGroupName = $budgetGroupName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->budgetGroupBudget !== null) {
            $result['budget_group_budget'] = $this->budgetGroupBudget;
        }
        if ($this->budgetGroupId !== null) {
            $result['budget_group_id'] = $this->budgetGroupId;
        }
        if ($this->budgetGroupName !== null) {
            $result['budget_group_name'] = $this->budgetGroupName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['budget_group_budget'] ?? null) !== null) {
            $obj->budgetGroupBudget = (float) $v;
        }
        if (($v = $data['budget_group_id'] ?? null) !== null) {
            $obj->budgetGroupId = (int) $v;
        }
        if (($v = $data['budget_group_name'] ?? null) !== null) {
            $obj->budgetGroupName = (string) $v;
        }
        return $obj;
    }
}
