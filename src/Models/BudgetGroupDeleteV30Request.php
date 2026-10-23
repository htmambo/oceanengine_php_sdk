<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BudgetGroupDeleteV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 要删除的预算组id列表
     * @var int[]
     */
    protected ?array $budgetGroupIds = null;

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
     * 要删除的预算组id列表
     * @return int[]
     */
    public function getBudgetGroupIds(): ?array
    {
        return $this->budgetGroupIds;
    }

    /**
     * 要删除的预算组id列表
     * @param int[] $budgetGroupIds
     * @return self
     */
    public function setBudgetGroupIds(?array $budgetGroupIds): self
    {
        $this->budgetGroupIds = $budgetGroupIds;
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
        if ($this->budgetGroupIds !== null) {
            $result['budget_group_ids'] = $this->budgetGroupIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['budget_group_ids'] ?? null) !== null && is_array($v)) {
            $obj->budgetGroupIds = $v;
        }
        return $obj;
    }
}
