<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2ResponseDataBillInfo implements \JsonSerializable
{
    /**
     * 可用余额（单位元，下同）
     * @var int
     */
    protected ?int $balance = null;

    /**
     * 每个任务金额明细
     * @var \Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfoOrderBillListInner[]
     */
    protected ?array $orderBillList = null;

    /**
     * 精确可用余额（单位元，下同）
     * @var float
     */
    protected ?float $preciseBalance = null;

    /**
     * 精确总金额
     * @var float
     */
    protected ?float $preciseTotalAmount = null;

    /**
     * 精确总服务费
     * @var float
     */
    protected ?float $preciseTotalPlatformFee = null;

    /**
     * 精确待付金额
     * @var float
     */
    protected ?float $preciseTotalRemaining = null;

    /**
     * 精确任务总金额
     * @var float
     */
    protected ?float $preciseTotalTaskCost = null;

    /**
     * 总金额
     * @var int
     */
    protected ?int $totalAmount = null;

    /**
     * 总服务费
     * @var int
     */
    protected ?int $totalPlatformFee = null;

    /**
     * 待付金额
     * @var int
     */
    protected ?int $totalRemaining = null;

    /**
     * 任务总金额
     * @var int
     */
    protected ?int $totalTaskCost = null;

    /**
     * 可用余额（单位元，下同）
     * @return int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * 可用余额（单位元，下同）
     * @param int $balance
     * @return self
     */
    public function setBalance(?int $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * 每个任务金额明细
     * @return \Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfoOrderBillListInner[]
     */
    public function getOrderBillList(): ?array
    {
        return $this->orderBillList;
    }

    /**
     * 每个任务金额明细
     * @param \Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfoOrderBillListInner[] $orderBillList
     * @return self
     */
    public function setOrderBillList(?array $orderBillList): self
    {
        $this->orderBillList = $orderBillList;
        return $this;
    }

    /**
     * 精确可用余额（单位元，下同）
     * @return float
     */
    public function getPreciseBalance(): ?float
    {
        return $this->preciseBalance;
    }

    /**
     * 精确可用余额（单位元，下同）
     * @param float $preciseBalance
     * @return self
     */
    public function setPreciseBalance(?float $preciseBalance): self
    {
        $this->preciseBalance = $preciseBalance;
        return $this;
    }

    /**
     * 精确总金额
     * @return float
     */
    public function getPreciseTotalAmount(): ?float
    {
        return $this->preciseTotalAmount;
    }

    /**
     * 精确总金额
     * @param float $preciseTotalAmount
     * @return self
     */
    public function setPreciseTotalAmount(?float $preciseTotalAmount): self
    {
        $this->preciseTotalAmount = $preciseTotalAmount;
        return $this;
    }

    /**
     * 精确总服务费
     * @return float
     */
    public function getPreciseTotalPlatformFee(): ?float
    {
        return $this->preciseTotalPlatformFee;
    }

    /**
     * 精确总服务费
     * @param float $preciseTotalPlatformFee
     * @return self
     */
    public function setPreciseTotalPlatformFee(?float $preciseTotalPlatformFee): self
    {
        $this->preciseTotalPlatformFee = $preciseTotalPlatformFee;
        return $this;
    }

    /**
     * 精确待付金额
     * @return float
     */
    public function getPreciseTotalRemaining(): ?float
    {
        return $this->preciseTotalRemaining;
    }

    /**
     * 精确待付金额
     * @param float $preciseTotalRemaining
     * @return self
     */
    public function setPreciseTotalRemaining(?float $preciseTotalRemaining): self
    {
        $this->preciseTotalRemaining = $preciseTotalRemaining;
        return $this;
    }

    /**
     * 精确任务总金额
     * @return float
     */
    public function getPreciseTotalTaskCost(): ?float
    {
        return $this->preciseTotalTaskCost;
    }

    /**
     * 精确任务总金额
     * @param float $preciseTotalTaskCost
     * @return self
     */
    public function setPreciseTotalTaskCost(?float $preciseTotalTaskCost): self
    {
        $this->preciseTotalTaskCost = $preciseTotalTaskCost;
        return $this;
    }

    /**
     * 总金额
     * @return int
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
     * 总金额
     * @param int $totalAmount
     * @return self
     */
    public function setTotalAmount(?int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * 总服务费
     * @return int
     */
    public function getTotalPlatformFee(): ?int
    {
        return $this->totalPlatformFee;
    }

    /**
     * 总服务费
     * @param int $totalPlatformFee
     * @return self
     */
    public function setTotalPlatformFee(?int $totalPlatformFee): self
    {
        $this->totalPlatformFee = $totalPlatformFee;
        return $this;
    }

    /**
     * 待付金额
     * @return int
     */
    public function getTotalRemaining(): ?int
    {
        return $this->totalRemaining;
    }

    /**
     * 待付金额
     * @param int $totalRemaining
     * @return self
     */
    public function setTotalRemaining(?int $totalRemaining): self
    {
        $this->totalRemaining = $totalRemaining;
        return $this;
    }

    /**
     * 任务总金额
     * @return int
     */
    public function getTotalTaskCost(): ?int
    {
        return $this->totalTaskCost;
    }

    /**
     * 任务总金额
     * @param int $totalTaskCost
     * @return self
     */
    public function setTotalTaskCost(?int $totalTaskCost): self
    {
        $this->totalTaskCost = $totalTaskCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->balance !== null) {
            $result['balance'] = $this->balance;
        }
        if ($this->orderBillList !== null) {
            $result['order_bill_list'] = $this->orderBillList;
        }
        if ($this->preciseBalance !== null) {
            $result['precise_balance'] = $this->preciseBalance;
        }
        if ($this->preciseTotalAmount !== null) {
            $result['precise_total_amount'] = $this->preciseTotalAmount;
        }
        if ($this->preciseTotalPlatformFee !== null) {
            $result['precise_total_platform_fee'] = $this->preciseTotalPlatformFee;
        }
        if ($this->preciseTotalRemaining !== null) {
            $result['precise_total_remaining'] = $this->preciseTotalRemaining;
        }
        if ($this->preciseTotalTaskCost !== null) {
            $result['precise_total_task_cost'] = $this->preciseTotalTaskCost;
        }
        if ($this->totalAmount !== null) {
            $result['total_amount'] = $this->totalAmount;
        }
        if ($this->totalPlatformFee !== null) {
            $result['total_platform_fee'] = $this->totalPlatformFee;
        }
        if ($this->totalRemaining !== null) {
            $result['total_remaining'] = $this->totalRemaining;
        }
        if ($this->totalTaskCost !== null) {
            $result['total_task_cost'] = $this->totalTaskCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['balance'] ?? null) !== null) {
            $obj->balance = (int) $v;
        }
        if (($v = $data['order_bill_list'] ?? null) !== null && is_array($v)) {
            $obj->orderBillList = array_map(fn ($vv) => \Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfoOrderBillListInner::fromArray($vv), $v);
        }
        if (($v = $data['precise_balance'] ?? null) !== null) {
            $obj->preciseBalance = (float) $v;
        }
        if (($v = $data['precise_total_amount'] ?? null) !== null) {
            $obj->preciseTotalAmount = (float) $v;
        }
        if (($v = $data['precise_total_platform_fee'] ?? null) !== null) {
            $obj->preciseTotalPlatformFee = (float) $v;
        }
        if (($v = $data['precise_total_remaining'] ?? null) !== null) {
            $obj->preciseTotalRemaining = (float) $v;
        }
        if (($v = $data['precise_total_task_cost'] ?? null) !== null) {
            $obj->preciseTotalTaskCost = (float) $v;
        }
        if (($v = $data['total_amount'] ?? null) !== null) {
            $obj->totalAmount = (int) $v;
        }
        if (($v = $data['total_platform_fee'] ?? null) !== null) {
            $obj->totalPlatformFee = (int) $v;
        }
        if (($v = $data['total_remaining'] ?? null) !== null) {
            $obj->totalRemaining = (int) $v;
        }
        if (($v = $data['total_task_cost'] ?? null) !== null) {
            $obj->totalTaskCost = (int) $v;
        }
        return $obj;
    }
}
