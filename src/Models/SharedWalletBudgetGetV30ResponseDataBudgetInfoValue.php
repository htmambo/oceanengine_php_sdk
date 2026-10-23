<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletBudgetGetV30ResponseDataBudgetInfoValue implements \JsonSerializable
{
    /**
     * 预算金额，单位：元
     * @var int
     */
    protected ?int $budget = null;

    /**
     * 预算类型 返回类型为平台预算的枚举值 -2:未设置, -1:不限预算, 0:日预算
     * @var string
     */
    protected ?string $budgetMode = null;

    /**
     * 预算生效模式
     * @var string
     */
    protected ?string $effectiveMode = null;

    /**
     * 最大修改次数
     * @var int
     */
    protected ?int $maxModCnt = null;

    /**
     * 预算设置最低金额（消耗保证金），单位：元
     * @var int
     */
    protected ?int $minBudgetAmount = null;

    /**
     * 预算上调最低金额（步长），单位：元
     * @var int
     */
    protected ?int $minIncreaseAmount = null;

    /**
     * 今日修改次数
     * @var int
     */
    protected ?int $modCnt = null;

    /**
     * 预算金额，单位：元
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 预算金额，单位：元
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 预算类型 返回类型为平台预算的枚举值 -2:未设置, -1:不限预算, 0:日预算
     * @return string
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * 预算类型 返回类型为平台预算的枚举值 -2:未设置, -1:不限预算, 0:日预算
     * @param string $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * 预算生效模式
     * @return string
     */
    public function getEffectiveMode(): ?string
    {
        return $this->effectiveMode;
    }

    /**
     * 预算生效模式
     * @param string $effectiveMode
     * @return self
     */
    public function setEffectiveMode(?string $effectiveMode): self
    {
        $this->effectiveMode = $effectiveMode;
        return $this;
    }

    /**
     * 最大修改次数
     * @return int
     */
    public function getMaxModCnt(): ?int
    {
        return $this->maxModCnt;
    }

    /**
     * 最大修改次数
     * @param int $maxModCnt
     * @return self
     */
    public function setMaxModCnt(?int $maxModCnt): self
    {
        $this->maxModCnt = $maxModCnt;
        return $this;
    }

    /**
     * 预算设置最低金额（消耗保证金），单位：元
     * @return int
     */
    public function getMinBudgetAmount(): ?int
    {
        return $this->minBudgetAmount;
    }

    /**
     * 预算设置最低金额（消耗保证金），单位：元
     * @param int $minBudgetAmount
     * @return self
     */
    public function setMinBudgetAmount(?int $minBudgetAmount): self
    {
        $this->minBudgetAmount = $minBudgetAmount;
        return $this;
    }

    /**
     * 预算上调最低金额（步长），单位：元
     * @return int
     */
    public function getMinIncreaseAmount(): ?int
    {
        return $this->minIncreaseAmount;
    }

    /**
     * 预算上调最低金额（步长），单位：元
     * @param int $minIncreaseAmount
     * @return self
     */
    public function setMinIncreaseAmount(?int $minIncreaseAmount): self
    {
        $this->minIncreaseAmount = $minIncreaseAmount;
        return $this;
    }

    /**
     * 今日修改次数
     * @return int
     */
    public function getModCnt(): ?int
    {
        return $this->modCnt;
    }

    /**
     * 今日修改次数
     * @param int $modCnt
     * @return self
     */
    public function setModCnt(?int $modCnt): self
    {
        $this->modCnt = $modCnt;
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
        if ($this->effectiveMode !== null) {
            $result['effective_mode'] = $this->effectiveMode;
        }
        if ($this->maxModCnt !== null) {
            $result['max_mod_cnt'] = $this->maxModCnt;
        }
        if ($this->minBudgetAmount !== null) {
            $result['min_budget_amount'] = $this->minBudgetAmount;
        }
        if ($this->minIncreaseAmount !== null) {
            $result['min_increase_amount'] = $this->minIncreaseAmount;
        }
        if ($this->modCnt !== null) {
            $result['mod_cnt'] = $this->modCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['effective_mode'] ?? null) !== null) {
            $obj->effectiveMode = (string) $v;
        }
        if (($v = $data['max_mod_cnt'] ?? null) !== null) {
            $obj->maxModCnt = (int) $v;
        }
        if (($v = $data['min_budget_amount'] ?? null) !== null) {
            $obj->minBudgetAmount = (int) $v;
        }
        if (($v = $data['min_increase_amount'] ?? null) !== null) {
            $obj->minIncreaseAmount = (int) $v;
        }
        if (($v = $data['mod_cnt'] ?? null) !== null) {
            $obj->modCnt = (int) $v;
        }
        return $obj;
    }
}
