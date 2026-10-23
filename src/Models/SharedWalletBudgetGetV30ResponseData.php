<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletBudgetGetV30ResponseData implements \JsonSerializable
{
    /**
     * 预算信息
     * @var array<string,\Oceanengine\Models\SharedWalletBudgetGetV30ResponseDataBudgetInfoValue>
     */
    protected ?array $budgetInfo = null;

    /**
     * 预算设置下限，单位：元
     * @var int
     */
    protected ?int $budgetLowerLimit = null;

    /**
     * 预算设置上限，单位：元
     * @var int
     */
    protected ?int $budgetUpperLimit = null;

    /**
     * 子钱包ID
     * @var int
     */
    protected ?int $subWalletId = null;

    /**
     * 预算信息
     * @return array<string,\Oceanengine\Models\SharedWalletBudgetGetV30ResponseDataBudgetInfoValue>
     */
    public function getBudgetInfo(): ?array
    {
        return $this->budgetInfo;
    }

    /**
     * 预算信息
     * @param array<string,\Oceanengine\Models\SharedWalletBudgetGetV30ResponseDataBudgetInfoValue> $budgetInfo
     * @return self
     */
    public function setBudgetInfo(?array $budgetInfo): self
    {
        $this->budgetInfo = $budgetInfo;
        return $this;
    }

    /**
     * 预算设置下限，单位：元
     * @return int
     */
    public function getBudgetLowerLimit(): ?int
    {
        return $this->budgetLowerLimit;
    }

    /**
     * 预算设置下限，单位：元
     * @param int $budgetLowerLimit
     * @return self
     */
    public function setBudgetLowerLimit(?int $budgetLowerLimit): self
    {
        $this->budgetLowerLimit = $budgetLowerLimit;
        return $this;
    }

    /**
     * 预算设置上限，单位：元
     * @return int
     */
    public function getBudgetUpperLimit(): ?int
    {
        return $this->budgetUpperLimit;
    }

    /**
     * 预算设置上限，单位：元
     * @param int $budgetUpperLimit
     * @return self
     */
    public function setBudgetUpperLimit(?int $budgetUpperLimit): self
    {
        $this->budgetUpperLimit = $budgetUpperLimit;
        return $this;
    }

    /**
     * 子钱包ID
     * @return int
     */
    public function getSubWalletId(): ?int
    {
        return $this->subWalletId;
    }

    /**
     * 子钱包ID
     * @param int $subWalletId
     * @return self
     */
    public function setSubWalletId(?int $subWalletId): self
    {
        $this->subWalletId = $subWalletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->budgetInfo !== null) {
            $result['budget_info'] = $this->budgetInfo;
        }
        if ($this->budgetLowerLimit !== null) {
            $result['budget_lower_limit'] = $this->budgetLowerLimit;
        }
        if ($this->budgetUpperLimit !== null) {
            $result['budget_upper_limit'] = $this->budgetUpperLimit;
        }
        if ($this->subWalletId !== null) {
            $result['sub_wallet_id'] = $this->subWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget_info'] ?? null) !== null && is_array($v)) {
            $obj->budgetInfo = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletBudgetGetV30ResponseDataBudgetInfoValue::fromArray($vv), $v);
        }
        if (($v = $data['budget_lower_limit'] ?? null) !== null) {
            $obj->budgetLowerLimit = (int) $v;
        }
        if (($v = $data['budget_upper_limit'] ?? null) !== null) {
            $obj->budgetUpperLimit = (int) $v;
        }
        if (($v = $data['sub_wallet_id'] ?? null) !== null) {
            $obj->subWalletId = (int) $v;
        }
        return $obj;
    }
}
