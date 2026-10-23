<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderDemanderCancelV2Request implements \JsonSerializable
{
    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 其他取消原因 100字内，reason_type=0时需提供
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 取消原因类别 (0)：其他 (1)：信息填错，重新下单 (2)：推广计划改变 (3)：经协商一致 (4)：达人无档期，不接单 (5)：达人不配合 (6)：产出物不符合要求
     * @var int
     */
    protected ?int $reasonType = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

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
     * 其他取消原因 100字内，reason_type=0时需提供
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * 其他取消原因 100字内，reason_type=0时需提供
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * 取消原因类别 (0)：其他 (1)：信息填错，重新下单 (2)：推广计划改变 (3)：经协商一致 (4)：达人无档期，不接单 (5)：达人不配合 (6)：产出物不符合要求
     * @return int
     */
    public function getReasonType(): ?int
    {
        return $this->reasonType;
    }

    /**
     * 取消原因类别 (0)：其他 (1)：信息填错，重新下单 (2)：推广计划改变 (3)：经协商一致 (4)：达人无档期，不接单 (5)：达人不配合 (6)：产出物不符合要求
     * @param int $reasonType
     * @return self
     */
    public function setReasonType(?int $reasonType): self
    {
        $this->reasonType = $reasonType;
        return $this;
    }

    /**
     * 星图客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 星图客户ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
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
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->reasonType !== null) {
            $result['reason_type'] = $this->reasonType;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['reason_type'] ?? null) !== null) {
            $obj->reasonType = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
