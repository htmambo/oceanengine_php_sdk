<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderListV30Filter implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusOrderListV30FilterOrderCreateTime
     */
    protected ?\Oceanengine\Models\DouplusOrderListV30FilterOrderCreateTime $orderCreateTime = null;

    /**
     * @var int[]
     */
    protected ?array $orderId = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30FilterSceneType
     */
    protected ?string $sceneType = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30FilterStatus[]
     */
    protected ?array $status = null;

    /**
     * @var int[]
     */
    protected ?array $taskId = null;

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30FilterOrderCreateTime
     */
    public function getOrderCreateTime(): ?\Oceanengine\Models\DouplusOrderListV30FilterOrderCreateTime
    {
        return $this->orderCreateTime;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30FilterOrderCreateTime $orderCreateTime
     * @return self
     */
    public function setOrderCreateTime(?\Oceanengine\Models\DouplusOrderListV30FilterOrderCreateTime $orderCreateTime): self
    {
        $this->orderCreateTime = $orderCreateTime;
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
     * @return \Oceanengine\Models\DouplusOrderListV30FilterSceneType
     */
    public function getSceneType(): ?string
    {
        return $this->sceneType;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30FilterSceneType $sceneType
     * @return self
     */
    public function setSceneType(?string $sceneType): self
    {
        $this->sceneType = $sceneType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30FilterStatus[]
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30FilterStatus[] $status
     * @return self
     */
    public function setStatus(?array $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTaskId(): ?array
    {
        return $this->taskId;
    }

    /**
     * @param int[] $taskId
     * @return self
     */
    public function setTaskId(?array $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderCreateTime !== null) {
            $result['order_create_time'] = $this->orderCreateTime;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->sceneType !== null) {
            $result['scene_type'] = $this->sceneType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_create_time'] ?? null) !== null && is_array($v)) {
            $obj->orderCreateTime = \Oceanengine\Models\DouplusOrderListV30FilterOrderCreateTime::fromArray($v);
        }
        if (($v = $data['order_id'] ?? null) !== null && is_array($v)) {
            $obj->orderId = $v;
        }
        if (($v = $data['scene_type'] ?? null) !== null) {
            $obj->sceneType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null && is_array($v)) {
            $obj->status = $v;
        }
        if (($v = $data['task_id'] ?? null) !== null && is_array($v)) {
            $obj->taskId = $v;
        }
        return $obj;
    }
}
