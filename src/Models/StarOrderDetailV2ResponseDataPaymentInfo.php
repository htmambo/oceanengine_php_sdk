<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderDetailV2ResponseDataPaymentInfo implements \JsonSerializable
{
    /**
     * 已扣除金额
     * @var int
     */
    protected ?int $deductAmount = null;

    /**
     * 服务费
     * @var int
     */
    protected ?int $platformFee = null;

    /**
     * 已退还金额
     * @var int
     */
    protected ?int $refundAmount = null;

    /**
     * 任务金额
     * @var int
     */
    protected ?int $taskCost = null;

    /**
     * 任务总金额
     * @var int
     */
    protected ?int $total = null;

    /**
     * 已付金额（元，下同）
     * @var int
     */
    protected ?int $totalPaid = null;

    /**
     * 已扣除金额
     * @return int
     */
    public function getDeductAmount(): ?int
    {
        return $this->deductAmount;
    }

    /**
     * 已扣除金额
     * @param int $deductAmount
     * @return self
     */
    public function setDeductAmount(?int $deductAmount): self
    {
        $this->deductAmount = $deductAmount;
        return $this;
    }

    /**
     * 服务费
     * @return int
     */
    public function getPlatformFee(): ?int
    {
        return $this->platformFee;
    }

    /**
     * 服务费
     * @param int $platformFee
     * @return self
     */
    public function setPlatformFee(?int $platformFee): self
    {
        $this->platformFee = $platformFee;
        return $this;
    }

    /**
     * 已退还金额
     * @return int
     */
    public function getRefundAmount(): ?int
    {
        return $this->refundAmount;
    }

    /**
     * 已退还金额
     * @param int $refundAmount
     * @return self
     */
    public function setRefundAmount(?int $refundAmount): self
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }

    /**
     * 任务金额
     * @return int
     */
    public function getTaskCost(): ?int
    {
        return $this->taskCost;
    }

    /**
     * 任务金额
     * @param int $taskCost
     * @return self
     */
    public function setTaskCost(?int $taskCost): self
    {
        $this->taskCost = $taskCost;
        return $this;
    }

    /**
     * 任务总金额
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 任务总金额
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * 已付金额（元，下同）
     * @return int
     */
    public function getTotalPaid(): ?int
    {
        return $this->totalPaid;
    }

    /**
     * 已付金额（元，下同）
     * @param int $totalPaid
     * @return self
     */
    public function setTotalPaid(?int $totalPaid): self
    {
        $this->totalPaid = $totalPaid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deductAmount !== null) {
            $result['deduct_amount'] = $this->deductAmount;
        }
        if ($this->platformFee !== null) {
            $result['platform_fee'] = $this->platformFee;
        }
        if ($this->refundAmount !== null) {
            $result['refund_amount'] = $this->refundAmount;
        }
        if ($this->taskCost !== null) {
            $result['task_cost'] = $this->taskCost;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->totalPaid !== null) {
            $result['total_paid'] = $this->totalPaid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deduct_amount'] ?? null) !== null) {
            $obj->deductAmount = (int) $v;
        }
        if (($v = $data['platform_fee'] ?? null) !== null) {
            $obj->platformFee = (int) $v;
        }
        if (($v = $data['refund_amount'] ?? null) !== null) {
            $obj->refundAmount = (int) $v;
        }
        if (($v = $data['task_cost'] ?? null) !== null) {
            $obj->taskCost = (int) $v;
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        if (($v = $data['total_paid'] ?? null) !== null) {
            $obj->totalPaid = (int) $v;
        }
        return $obj;
    }
}
