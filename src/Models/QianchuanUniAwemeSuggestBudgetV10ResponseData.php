<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeSuggestBudgetV10ResponseData implements \JsonSerializable
{
    /**
     * 推荐预算
     * @var int
     */
    protected ?int $budget = null;

    /**
     * 预算上限
     * @var int
     */
    protected ?int $budgetDanger = null;

    /**
     * @var int
     */
    protected ?int $budgetMax = null;

    /**
     * @var int
     */
    protected ?int $budgetMin = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeSuggestBudgetV10ResponseDataEstimateTransCostListInner[]
     */
    protected ?array $estimateTransCostList = null;

    /**
     * 用于roi2 nobid，建议预算是否更新
     * @var bool
     */
    protected ?bool $isUpdate = null;

    /**
     * @var string
     */
    protected ?string $lastUpdateTime = null;

    /**
     * 多档建议预算
     * @var int[]
     */
    protected ?array $suggestedBudgetList = null;

    /**
     * 推荐预算
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 推荐预算
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 预算上限
     * @return int
     */
    public function getBudgetDanger(): ?int
    {
        return $this->budgetDanger;
    }

    /**
     * 预算上限
     * @param int $budgetDanger
     * @return self
     */
    public function setBudgetDanger(?int $budgetDanger): self
    {
        $this->budgetDanger = $budgetDanger;
        return $this;
    }

    /**
     * @return int
     */
    public function getBudgetMax(): ?int
    {
        return $this->budgetMax;
    }

    /**
     * @param int $budgetMax
     * @return self
     */
    public function setBudgetMax(?int $budgetMax): self
    {
        $this->budgetMax = $budgetMax;
        return $this;
    }

    /**
     * @return int
     */
    public function getBudgetMin(): ?int
    {
        return $this->budgetMin;
    }

    /**
     * @param int $budgetMin
     * @return self
     */
    public function setBudgetMin(?int $budgetMin): self
    {
        $this->budgetMin = $budgetMin;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeSuggestBudgetV10ResponseDataEstimateTransCostListInner[]
     */
    public function getEstimateTransCostList(): ?array
    {
        return $this->estimateTransCostList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeSuggestBudgetV10ResponseDataEstimateTransCostListInner[] $estimateTransCostList
     * @return self
     */
    public function setEstimateTransCostList(?array $estimateTransCostList): self
    {
        $this->estimateTransCostList = $estimateTransCostList;
        return $this;
    }

    /**
     * 用于roi2 nobid，建议预算是否更新
     * @return bool
     */
    public function getIsUpdate(): ?bool
    {
        return $this->isUpdate;
    }

    /**
     * 用于roi2 nobid，建议预算是否更新
     * @param bool $isUpdate
     * @return self
     */
    public function setIsUpdate(?bool $isUpdate): self
    {
        $this->isUpdate = $isUpdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdateTime(): ?string
    {
        return $this->lastUpdateTime;
    }

    /**
     * @param string $lastUpdateTime
     * @return self
     */
    public function setLastUpdateTime(?string $lastUpdateTime): self
    {
        $this->lastUpdateTime = $lastUpdateTime;
        return $this;
    }

    /**
     * 多档建议预算
     * @return int[]
     */
    public function getSuggestedBudgetList(): ?array
    {
        return $this->suggestedBudgetList;
    }

    /**
     * 多档建议预算
     * @param int[] $suggestedBudgetList
     * @return self
     */
    public function setSuggestedBudgetList(?array $suggestedBudgetList): self
    {
        $this->suggestedBudgetList = $suggestedBudgetList;
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
        if ($this->budgetDanger !== null) {
            $result['budget_danger'] = $this->budgetDanger;
        }
        if ($this->budgetMax !== null) {
            $result['budget_max'] = $this->budgetMax;
        }
        if ($this->budgetMin !== null) {
            $result['budget_min'] = $this->budgetMin;
        }
        if ($this->estimateTransCostList !== null) {
            $result['estimate_trans_cost_list'] = $this->estimateTransCostList;
        }
        if ($this->isUpdate !== null) {
            $result['is_update'] = $this->isUpdate;
        }
        if ($this->lastUpdateTime !== null) {
            $result['last_update_time'] = $this->lastUpdateTime;
        }
        if ($this->suggestedBudgetList !== null) {
            $result['suggested_budget_list'] = $this->suggestedBudgetList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['budget_danger'] ?? null) !== null) {
            $obj->budgetDanger = (int) $v;
        }
        if (($v = $data['budget_max'] ?? null) !== null) {
            $obj->budgetMax = (int) $v;
        }
        if (($v = $data['budget_min'] ?? null) !== null) {
            $obj->budgetMin = (int) $v;
        }
        if (($v = $data['estimate_trans_cost_list'] ?? null) !== null && is_array($v)) {
            $obj->estimateTransCostList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeSuggestBudgetV10ResponseDataEstimateTransCostListInner::fromArray($vv), $v);
        }
        if (($v = $data['is_update'] ?? null) !== null) {
            $obj->isUpdate = (bool) $v;
        }
        if (($v = $data['last_update_time'] ?? null) !== null) {
            $obj->lastUpdateTime = (string) $v;
        }
        if (($v = $data['suggested_budget_list'] ?? null) !== null && is_array($v)) {
            $obj->suggestedBudgetList = $v;
        }
        return $obj;
    }
}
