<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2ResponseDataBillInfo implements \JsonSerializable
{
    /**
     * （任务发布后）可用余额（单位元，下同）
     * @var int
     */
    protected ?int $balance = null;

    /**
     * 总金额（预算+服务费）
     * @var int
     */
    protected ?int $totalAmount = null;

    /**
     * 服务费
     * @var int
     */
    protected ?int $totalPlatformFee = null;

    /**
     * 任务金额（预算）
     * @var int
     */
    protected ?int $totalTaskCost = null;

    /**
     * （任务发布后）可用余额（单位元，下同）
     * @return int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * （任务发布后）可用余额（单位元，下同）
     * @param int $balance
     * @return self
     */
    public function setBalance(?int $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * 总金额（预算+服务费）
     * @return int
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
     * 总金额（预算+服务费）
     * @param int $totalAmount
     * @return self
     */
    public function setTotalAmount(?int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * 服务费
     * @return int
     */
    public function getTotalPlatformFee(): ?int
    {
        return $this->totalPlatformFee;
    }

    /**
     * 服务费
     * @param int $totalPlatformFee
     * @return self
     */
    public function setTotalPlatformFee(?int $totalPlatformFee): self
    {
        $this->totalPlatformFee = $totalPlatformFee;
        return $this;
    }

    /**
     * 任务金额（预算）
     * @return int
     */
    public function getTotalTaskCost(): ?int
    {
        return $this->totalTaskCost;
    }

    /**
     * 任务金额（预算）
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
        if ($this->totalAmount !== null) {
            $result['total_amount'] = $this->totalAmount;
        }
        if ($this->totalPlatformFee !== null) {
            $result['total_platform_fee'] = $this->totalPlatformFee;
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
        if (($v = $data['total_amount'] ?? null) !== null) {
            $obj->totalAmount = (int) $v;
        }
        if (($v = $data['total_platform_fee'] ?? null) !== null) {
            $obj->totalPlatformFee = (int) $v;
        }
        if (($v = $data['total_task_cost'] ?? null) !== null) {
            $obj->totalTaskCost = (int) $v;
        }
        return $obj;
    }
}
