<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderListV30ResponseDataOrderListInnerOrder implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderLiveScene
     */
    protected ?string $liveScene = null;

    /**
     * @var string
     */
    protected ?string $orderCreateTime = null;

    /**
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 续费次数
     * @var int
     */
    protected ?int $renewCount = null;

    /**
     * @var int
     */
    protected ?int $rtaId = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderSceneType
     */
    protected ?string $sceneType = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderTaskStatus
     */
    protected ?string $taskStatus = null;

    /**
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderLiveScene
     */
    public function getLiveScene(): ?string
    {
        return $this->liveScene;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderLiveScene $liveScene
     * @return self
     */
    public function setLiveScene(?string $liveScene): self
    {
        $this->liveScene = $liveScene;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderCreateTime(): ?string
    {
        return $this->orderCreateTime;
    }

    /**
     * @param string $orderCreateTime
     * @return self
     */
    public function setOrderCreateTime(?string $orderCreateTime): self
    {
        $this->orderCreateTime = $orderCreateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 续费次数
     * @return int
     */
    public function getRenewCount(): ?int
    {
        return $this->renewCount;
    }

    /**
     * 续费次数
     * @param int $renewCount
     * @return self
     */
    public function setRenewCount(?int $renewCount): self
    {
        $this->renewCount = $renewCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRtaId(): ?int
    {
        return $this->rtaId;
    }

    /**
     * @param int $rtaId
     * @return self
     */
    public function setRtaId(?int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderSceneType
     */
    public function getSceneType(): ?string
    {
        return $this->sceneType;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderSceneType $sceneType
     * @return self
     */
    public function setSceneType(?string $sceneType): self
    {
        $this->sceneType = $sceneType;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderTaskStatus
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30DataOrderListOrderTaskStatus $taskStatus
     * @return self
     */
    public function setTaskStatus(?string $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
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
        if ($this->liveScene !== null) {
            $result['live_scene'] = $this->liveScene;
        }
        if ($this->orderCreateTime !== null) {
            $result['order_create_time'] = $this->orderCreateTime;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->renewCount !== null) {
            $result['renew_count'] = $this->renewCount;
        }
        if ($this->rtaId !== null) {
            $result['rta_id'] = $this->rtaId;
        }
        if ($this->sceneType !== null) {
            $result['scene_type'] = $this->sceneType;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['live_scene'] ?? null) !== null) {
            $obj->liveScene = (string) $v;
        }
        if (($v = $data['order_create_time'] ?? null) !== null) {
            $obj->orderCreateTime = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['renew_count'] ?? null) !== null) {
            $obj->renewCount = (int) $v;
        }
        if (($v = $data['rta_id'] ?? null) !== null) {
            $obj->rtaId = (int) $v;
        }
        if (($v = $data['scene_type'] ?? null) !== null) {
            $obj->sceneType = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (string) $v;
        }
        return $obj;
    }
}
