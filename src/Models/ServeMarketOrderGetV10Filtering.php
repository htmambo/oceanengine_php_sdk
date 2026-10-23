<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ServeMarketOrderGetV10Filtering implements \JsonSerializable
{
    /**
     * 订单创建时间最大值，秒级时间戳
     * @var int
     */
    protected ?int $createTimeMax = null;

    /**
     * 订单创建时间最小值，秒级时间戳
     * @var int
     */
    protected ?int $createTimeMin = null;

    /**
     * @var int[]
     */
    protected ?array $orderId = null;

    /**
     * @var int
     */
    protected ?int $useUid = null;

    /**
     * 订单创建时间最大值，秒级时间戳
     * @return int
     */
    public function getCreateTimeMax(): ?int
    {
        return $this->createTimeMax;
    }

    /**
     * 订单创建时间最大值，秒级时间戳
     * @param int $createTimeMax
     * @return self
     */
    public function setCreateTimeMax(?int $createTimeMax): self
    {
        $this->createTimeMax = $createTimeMax;
        return $this;
    }

    /**
     * 订单创建时间最小值，秒级时间戳
     * @return int
     */
    public function getCreateTimeMin(): ?int
    {
        return $this->createTimeMin;
    }

    /**
     * 订单创建时间最小值，秒级时间戳
     * @param int $createTimeMin
     * @return self
     */
    public function setCreateTimeMin(?int $createTimeMin): self
    {
        $this->createTimeMin = $createTimeMin;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getOrderId(): ?array
    {
        return $this->orderId;
    }

    /**
     * @param int[] $orderId
     * @return self
     */
    public function setOrderId(?array $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUseUid(): ?int
    {
        return $this->useUid;
    }

    /**
     * @param int $useUid
     * @return self
     */
    public function setUseUid(?int $useUid): self
    {
        $this->useUid = $useUid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTimeMax !== null) {
            $result['create_time_max'] = $this->createTimeMax;
        }
        if ($this->createTimeMin !== null) {
            $result['create_time_min'] = $this->createTimeMin;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->useUid !== null) {
            $result['use_uid'] = $this->useUid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time_max'] ?? null) !== null) {
            $obj->createTimeMax = (int) $v;
        }
        if (($v = $data['create_time_min'] ?? null) !== null) {
            $obj->createTimeMin = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null && is_array($v)) {
            $obj->orderId = $v;
        }
        if (($v = $data['use_uid'] ?? null) !== null) {
            $obj->useUid = (int) $v;
        }
        return $obj;
    }
}
