<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BudgetGroupListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BudgetGroupListV30FilteringAdType
     */
    protected ?string $adType = null;

    /**
     * 预算组id列表
     * @var int[]
     */
    protected ?array $budgetGroupIdList = null;

    /**
     * 预算组名称模糊搜索关键字
     * @var string
     */
    protected ?string $budgetGroupKeyword = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupListV30FilteringBudgetGroupStatusFirst
     */
    protected ?string $budgetGroupStatusFirst = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupListV30FilteringBudgetGroupStatusSecond
     */
    protected ?string $budgetGroupStatusSecond = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupListV30FilteringDeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupListV30FilteringStatisticsTime
     */
    protected ?\Oceanengine\Models\BudgetGroupListV30FilteringStatisticsTime $statisticsTime = null;

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30FilteringAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30FilteringAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * 预算组id列表
     * @return int[]
     */
    public function getBudgetGroupIdList(): ?array
    {
        return $this->budgetGroupIdList;
    }

    /**
     * 预算组id列表
     * @param int[] $budgetGroupIdList
     * @return self
     */
    public function setBudgetGroupIdList(?array $budgetGroupIdList): self
    {
        $this->budgetGroupIdList = $budgetGroupIdList;
        return $this;
    }

    /**
     * 预算组名称模糊搜索关键字
     * @return string
     */
    public function getBudgetGroupKeyword(): ?string
    {
        return $this->budgetGroupKeyword;
    }

    /**
     * 预算组名称模糊搜索关键字
     * @param string $budgetGroupKeyword
     * @return self
     */
    public function setBudgetGroupKeyword(?string $budgetGroupKeyword): self
    {
        $this->budgetGroupKeyword = $budgetGroupKeyword;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30FilteringBudgetGroupStatusFirst
     */
    public function getBudgetGroupStatusFirst(): ?string
    {
        return $this->budgetGroupStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30FilteringBudgetGroupStatusFirst $budgetGroupStatusFirst
     * @return self
     */
    public function setBudgetGroupStatusFirst(?string $budgetGroupStatusFirst): self
    {
        $this->budgetGroupStatusFirst = $budgetGroupStatusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30FilteringBudgetGroupStatusSecond
     */
    public function getBudgetGroupStatusSecond(): ?string
    {
        return $this->budgetGroupStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30FilteringBudgetGroupStatusSecond $budgetGroupStatusSecond
     * @return self
     */
    public function setBudgetGroupStatusSecond(?string $budgetGroupStatusSecond): self
    {
        $this->budgetGroupStatusSecond = $budgetGroupStatusSecond;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30FilteringDeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30FilteringDeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30FilteringStatisticsTime
     */
    public function getStatisticsTime(): ?\Oceanengine\Models\BudgetGroupListV30FilteringStatisticsTime
    {
        return $this->statisticsTime;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30FilteringStatisticsTime $statisticsTime
     * @return self
     */
    public function setStatisticsTime(?\Oceanengine\Models\BudgetGroupListV30FilteringStatisticsTime $statisticsTime): self
    {
        $this->statisticsTime = $statisticsTime;
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
        if ($this->budgetGroupIdList !== null) {
            $result['budget_group_id_list'] = $this->budgetGroupIdList;
        }
        if ($this->budgetGroupKeyword !== null) {
            $result['budget_group_keyword'] = $this->budgetGroupKeyword;
        }
        if ($this->budgetGroupStatusFirst !== null) {
            $result['budget_group_status_first'] = $this->budgetGroupStatusFirst;
        }
        if ($this->budgetGroupStatusSecond !== null) {
            $result['budget_group_status_second'] = $this->budgetGroupStatusSecond;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        if ($this->statisticsTime !== null) {
            $result['statistics_time'] = $this->statisticsTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['budget_group_id_list'] ?? null) !== null && is_array($v)) {
            $obj->budgetGroupIdList = $v;
        }
        if (($v = $data['budget_group_keyword'] ?? null) !== null) {
            $obj->budgetGroupKeyword = (string) $v;
        }
        if (($v = $data['budget_group_status_first'] ?? null) !== null) {
            $obj->budgetGroupStatusFirst = (string) $v;
        }
        if (($v = $data['budget_group_status_second'] ?? null) !== null) {
            $obj->budgetGroupStatusSecond = (string) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        if (($v = $data['statistics_time'] ?? null) !== null && is_array($v)) {
            $obj->statisticsTime = \Oceanengine\Models\BudgetGroupListV30FilteringStatisticsTime::fromArray($v);
        }
        return $obj;
    }
}
