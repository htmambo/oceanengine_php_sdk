<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarBillGetPendingV2ResponseDataOrderBillListInner implements \JsonSerializable
{
    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 服务费
     * @var int
     */
    protected ?int $platformFee = null;

    /**
     * 精确服务费
     * @var float
     */
    protected ?float $precisePlatformFee = null;

    /**
     * 精确待付金额
     * @var float
     */
    protected ?float $preciseRemaining = null;

    /**
     * 精确任务金额
     * @var float
     */
    protected ?float $preciseTaskCost = null;

    /**
     * 精确总金额（单位元，下同）
     * @var float
     */
    protected ?float $preciseTotal = null;

    /**
     * 待付金额
     * @var int
     */
    protected ?int $remaining = null;

    /**
     * 任务金额
     * @var int
     */
    protected ?int $taskCost = null;

    /**
     * 总金额（单位元，下同）
     * @var int
     */
    protected ?int $total = null;

    /**
     * 任务ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 任务ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
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
     * 精确服务费
     * @return float
     */
    public function getPrecisePlatformFee(): ?float
    {
        return $this->precisePlatformFee;
    }

    /**
     * 精确服务费
     * @param float $precisePlatformFee
     * @return self
     */
    public function setPrecisePlatformFee(?float $precisePlatformFee): self
    {
        $this->precisePlatformFee = $precisePlatformFee;
        return $this;
    }

    /**
     * 精确待付金额
     * @return float
     */
    public function getPreciseRemaining(): ?float
    {
        return $this->preciseRemaining;
    }

    /**
     * 精确待付金额
     * @param float $preciseRemaining
     * @return self
     */
    public function setPreciseRemaining(?float $preciseRemaining): self
    {
        $this->preciseRemaining = $preciseRemaining;
        return $this;
    }

    /**
     * 精确任务金额
     * @return float
     */
    public function getPreciseTaskCost(): ?float
    {
        return $this->preciseTaskCost;
    }

    /**
     * 精确任务金额
     * @param float $preciseTaskCost
     * @return self
     */
    public function setPreciseTaskCost(?float $preciseTaskCost): self
    {
        $this->preciseTaskCost = $preciseTaskCost;
        return $this;
    }

    /**
     * 精确总金额（单位元，下同）
     * @return float
     */
    public function getPreciseTotal(): ?float
    {
        return $this->preciseTotal;
    }

    /**
     * 精确总金额（单位元，下同）
     * @param float $preciseTotal
     * @return self
     */
    public function setPreciseTotal(?float $preciseTotal): self
    {
        $this->preciseTotal = $preciseTotal;
        return $this;
    }

    /**
     * 待付金额
     * @return int
     */
    public function getRemaining(): ?int
    {
        return $this->remaining;
    }

    /**
     * 待付金额
     * @param int $remaining
     * @return self
     */
    public function setRemaining(?int $remaining): self
    {
        $this->remaining = $remaining;
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
     * 总金额（单位元，下同）
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 总金额（单位元，下同）
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->platformFee !== null) {
            $result['platform_fee'] = $this->platformFee;
        }
        if ($this->precisePlatformFee !== null) {
            $result['precise_platform_fee'] = $this->precisePlatformFee;
        }
        if ($this->preciseRemaining !== null) {
            $result['precise_remaining'] = $this->preciseRemaining;
        }
        if ($this->preciseTaskCost !== null) {
            $result['precise_task_cost'] = $this->preciseTaskCost;
        }
        if ($this->preciseTotal !== null) {
            $result['precise_total'] = $this->preciseTotal;
        }
        if ($this->remaining !== null) {
            $result['remaining'] = $this->remaining;
        }
        if ($this->taskCost !== null) {
            $result['task_cost'] = $this->taskCost;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['platform_fee'] ?? null) !== null) {
            $obj->platformFee = (int) $v;
        }
        if (($v = $data['precise_platform_fee'] ?? null) !== null) {
            $obj->precisePlatformFee = (float) $v;
        }
        if (($v = $data['precise_remaining'] ?? null) !== null) {
            $obj->preciseRemaining = (float) $v;
        }
        if (($v = $data['precise_task_cost'] ?? null) !== null) {
            $obj->preciseTaskCost = (float) $v;
        }
        if (($v = $data['precise_total'] ?? null) !== null) {
            $obj->preciseTotal = (float) $v;
        }
        if (($v = $data['remaining'] ?? null) !== null) {
            $obj->remaining = (int) $v;
        }
        if (($v = $data['task_cost'] ?? null) !== null) {
            $obj->taskCost = (int) $v;
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
