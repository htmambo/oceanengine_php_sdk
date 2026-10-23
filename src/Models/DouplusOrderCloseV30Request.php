<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderCloseV30Request implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $awemeSecUid = null;

    /**
     * 需要关停的订单ID列表，最多10
     * @var int[]
     */
    protected ?array $orderIds = null;

    /**
     * 需要关停的task_id列表，最多10
     * @var int[]
     */
    protected ?array $taskIds = null;

    /**
     * @return string
     */
    public function getAwemeSecUid(): ?string
    {
        return $this->awemeSecUid;
    }

    /**
     * @param string $awemeSecUid
     * @return self
     */
    public function setAwemeSecUid(?string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
        return $this;
    }

    /**
     * 需要关停的订单ID列表，最多10
     * @return int[]
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * 需要关停的订单ID列表，最多10
     * @param int[] $orderIds
     * @return self
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * 需要关停的task_id列表，最多10
     * @return int[]
     */
    public function getTaskIds(): ?array
    {
        return $this->taskIds;
    }

    /**
     * 需要关停的task_id列表，最多10
     * @param int[] $taskIds
     * @return self
     */
    public function setTaskIds(?array $taskIds): self
    {
        $this->taskIds = $taskIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeSecUid !== null) {
            $result['aweme_sec_uid'] = $this->awemeSecUid;
        }
        if ($this->orderIds !== null) {
            $result['order_ids'] = $this->orderIds;
        }
        if ($this->taskIds !== null) {
            $result['task_ids'] = $this->taskIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_sec_uid'] ?? null) !== null) {
            $obj->awemeSecUid = (string) $v;
        }
        if (($v = $data['order_ids'] ?? null) !== null && is_array($v)) {
            $obj->orderIds = $v;
        }
        if (($v = $data['task_ids'] ?? null) !== null && is_array($v)) {
            $obj->taskIds = $v;
        }
        return $obj;
    }
}
