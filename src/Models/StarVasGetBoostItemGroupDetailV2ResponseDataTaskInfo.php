<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostItemGroupDetailV2ResponseDataTaskInfo implements \JsonSerializable
{
    /**
     * 手动出价，乘百取整（如：0.1 -> 10）。若没有则代表自动出价
     * @var int
     */
    protected ?int $bidAmount = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType
     */
    protected ?string $bidType = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction
     */
    protected ?string $boostAction = null;

    /**
     * 助推预算，单位元
     * @var int
     */
    protected ?int $boostAmount = null;

    /**
     * 助推消耗，单位千分之一元
     * @var int
     */
    protected ?int $boostCost = null;

    /**
     * 自定义投放时长，单位时。若没有则代表非自定义投放时长
     * @var int
     */
    protected ?int $boostHours = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType
     */
    protected ?string $boostType = null;

    /**
     * 创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 关联人群包，仅boost_type为CUSTOM_PACKAGE有效
     * @var int
     */
    protected ?int $packId = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus
     */
    protected ?string $status = null;

    /**
     * 助推组ID
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 助推组名称
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * 手动出价，乘百取整（如：0.1 -> 10）。若没有则代表自动出价
     * @return int
     */
    public function getBidAmount(): ?int
    {
        return $this->bidAmount;
    }

    /**
     * 手动出价，乘百取整（如：0.1 -> 10）。若没有则代表自动出价
     * @param int $bidAmount
     * @return self
     */
    public function setBidAmount(?int $bidAmount): self
    {
        $this->bidAmount = $bidAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction
     */
    public function getBoostAction(): ?string
    {
        return $this->boostAction;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction $boostAction
     * @return self
     */
    public function setBoostAction(?string $boostAction): self
    {
        $this->boostAction = $boostAction;
        return $this;
    }

    /**
     * 助推预算，单位元
     * @return int
     */
    public function getBoostAmount(): ?int
    {
        return $this->boostAmount;
    }

    /**
     * 助推预算，单位元
     * @param int $boostAmount
     * @return self
     */
    public function setBoostAmount(?int $boostAmount): self
    {
        $this->boostAmount = $boostAmount;
        return $this;
    }

    /**
     * 助推消耗，单位千分之一元
     * @return int
     */
    public function getBoostCost(): ?int
    {
        return $this->boostCost;
    }

    /**
     * 助推消耗，单位千分之一元
     * @param int $boostCost
     * @return self
     */
    public function setBoostCost(?int $boostCost): self
    {
        $this->boostCost = $boostCost;
        return $this;
    }

    /**
     * 自定义投放时长，单位时。若没有则代表非自定义投放时长
     * @return int
     */
    public function getBoostHours(): ?int
    {
        return $this->boostHours;
    }

    /**
     * 自定义投放时长，单位时。若没有则代表非自定义投放时长
     * @param int $boostHours
     * @return self
     */
    public function setBoostHours(?int $boostHours): self
    {
        $this->boostHours = $boostHours;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType
     */
    public function getBoostType(): ?string
    {
        return $this->boostType;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType $boostType
     * @return self
     */
    public function setBoostType(?string $boostType): self
    {
        $this->boostType = $boostType;
        return $this;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 关联人群包，仅boost_type为CUSTOM_PACKAGE有效
     * @return int
     */
    public function getPackId(): ?int
    {
        return $this->packId;
    }

    /**
     * 关联人群包，仅boost_type为CUSTOM_PACKAGE有效
     * @param int $packId
     * @return self
     */
    public function setPackId(?int $packId): self
    {
        $this->packId = $packId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 助推组ID
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 助推组ID
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * 助推组名称
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * 助推组名称
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bidAmount !== null) {
            $result['bid_amount'] = $this->bidAmount;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->boostAction !== null) {
            $result['boost_action'] = $this->boostAction;
        }
        if ($this->boostAmount !== null) {
            $result['boost_amount'] = $this->boostAmount;
        }
        if ($this->boostCost !== null) {
            $result['boost_cost'] = $this->boostCost;
        }
        if ($this->boostHours !== null) {
            $result['boost_hours'] = $this->boostHours;
        }
        if ($this->boostType !== null) {
            $result['boost_type'] = $this->boostType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->packId !== null) {
            $result['pack_id'] = $this->packId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->taskName !== null) {
            $result['task_name'] = $this->taskName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid_amount'] ?? null) !== null) {
            $obj->bidAmount = (int) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['boost_action'] ?? null) !== null) {
            $obj->boostAction = (string) $v;
        }
        if (($v = $data['boost_amount'] ?? null) !== null) {
            $obj->boostAmount = (int) $v;
        }
        if (($v = $data['boost_cost'] ?? null) !== null) {
            $obj->boostCost = (int) $v;
        }
        if (($v = $data['boost_hours'] ?? null) !== null) {
            $obj->boostHours = (int) $v;
        }
        if (($v = $data['boost_type'] ?? null) !== null) {
            $obj->boostType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['pack_id'] ?? null) !== null) {
            $obj->packId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        return $obj;
    }
}
