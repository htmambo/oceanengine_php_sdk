<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BudgetGroupListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BudgetGroupListV30ResponseDataBudgetGroupsInner[]
     */
    protected ?array $budgetGroups = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\BudgetGroupListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30ResponseDataBudgetGroupsInner[]
     */
    public function getBudgetGroups(): ?array
    {
        return $this->budgetGroups;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30ResponseDataBudgetGroupsInner[] $budgetGroups
     * @return self
     */
    public function setBudgetGroups(?array $budgetGroups): self
    {
        $this->budgetGroups = $budgetGroups;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\BudgetGroupListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\BudgetGroupListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->budgetGroups !== null) {
            $result['budget_groups'] = $this->budgetGroups;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget_groups'] ?? null) !== null && is_array($v)) {
            $obj->budgetGroups = array_map(fn ($vv) => \Oceanengine\Models\BudgetGroupListV30ResponseDataBudgetGroupsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\BudgetGroupListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
