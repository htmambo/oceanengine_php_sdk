<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BudgetGroupListV30ResponseDataBudgetGroupsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsAdType
     */
    protected ?string $adType = null;

    /**
     * 预算组预算
     * @var float
     */
    protected ?float $budgetGroupBudget = null;

    /**
     * 预算组id
     * @var int
     */
    protected ?int $budgetGroupId = null;

    /**
     * 预算组名称
     * @var string
     */
    protected ?string $budgetGroupName = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst
     */
    protected ?string $budgetGroupStatusFirst = null;

    /**
     * 二级状态
     * @var \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusSecond[]
     */
    protected ?array $budgetGroupStatusSecond = null;

    /**
     * 预算组消耗
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsDeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * 关联的（非删除）项目个数
     * @var int
     */
    protected ?int $numProjects = null;

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * 预算组预算
     * @return float
     */
    public function getBudgetGroupBudget(): ?float
    {
        return $this->budgetGroupBudget;
    }

    /**
     * 预算组预算
     * @param float $budgetGroupBudget
     * @return self
     */
    public function setBudgetGroupBudget(?float $budgetGroupBudget): self
    {
        $this->budgetGroupBudget = $budgetGroupBudget;
        return $this;
    }

    /**
     * 预算组id
     * @return int
     */
    public function getBudgetGroupId(): ?int
    {
        return $this->budgetGroupId;
    }

    /**
     * 预算组id
     * @param int $budgetGroupId
     * @return self
     */
    public function setBudgetGroupId(?int $budgetGroupId): self
    {
        $this->budgetGroupId = $budgetGroupId;
        return $this;
    }

    /**
     * 预算组名称
     * @return string
     */
    public function getBudgetGroupName(): ?string
    {
        return $this->budgetGroupName;
    }

    /**
     * 预算组名称
     * @param string $budgetGroupName
     * @return self
     */
    public function setBudgetGroupName(?string $budgetGroupName): self
    {
        $this->budgetGroupName = $budgetGroupName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst
     */
    public function getBudgetGroupStatusFirst(): ?string
    {
        return $this->budgetGroupStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst $budgetGroupStatusFirst
     * @return self
     */
    public function setBudgetGroupStatusFirst(?string $budgetGroupStatusFirst): self
    {
        $this->budgetGroupStatusFirst = $budgetGroupStatusFirst;
        return $this;
    }

    /**
     * 二级状态
     * @return \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusSecond[]
     */
    public function getBudgetGroupStatusSecond(): ?array
    {
        return $this->budgetGroupStatusSecond;
    }

    /**
     * 二级状态
     * @param \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusSecond[] $budgetGroupStatusSecond
     * @return self
     */
    public function setBudgetGroupStatusSecond(?array $budgetGroupStatusSecond): self
    {
        $this->budgetGroupStatusSecond = $budgetGroupStatusSecond;
        return $this;
    }

    /**
     * 预算组消耗
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * 预算组消耗
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsDeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30DataBudgetGroupsDeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * 关联的（非删除）项目个数
     * @return int
     */
    public function getNumProjects(): ?int
    {
        return $this->numProjects;
    }

    /**
     * 关联的（非删除）项目个数
     * @param int $numProjects
     * @return self
     */
    public function setNumProjects(?int $numProjects): self
    {
        $this->numProjects = $numProjects;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adType !== null) {
            $result['ad_type'] = $this->adType;
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
        if ($this->budgetGroupStatusFirst !== null) {
            $result['budget_group_status_first'] = $this->budgetGroupStatusFirst;
        }
        if ($this->budgetGroupStatusSecond !== null) {
            $result['budget_group_status_second'] = $this->budgetGroupStatusSecond;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        if ($this->numProjects !== null) {
            $result['num_projects'] = $this->numProjects;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
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
        if (($v = $data['budget_group_status_first'] ?? null) !== null) {
            $obj->budgetGroupStatusFirst = (string) $v;
        }
        if (($v = $data['budget_group_status_second'] ?? null) !== null && is_array($v)) {
            $obj->budgetGroupStatusSecond = $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        if (($v = $data['num_projects'] ?? null) !== null) {
            $obj->numProjects = (int) $v;
        }
        return $obj;
    }
}
