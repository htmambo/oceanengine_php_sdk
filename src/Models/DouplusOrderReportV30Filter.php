<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderReportV30Filter implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $authorUniqueIds = null;

    /**
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderReportV30FilterOrderCreateTime
     */
    protected ?\Oceanengine\Models\DouplusOrderReportV30FilterOrderCreateTime $orderCreateTime = null;

    /**
     * @var int[]
     */
    protected ?array $orderIds = null;

    /**
     * @var int[]
     */
    protected ?array $roomIds = null;

    /**
     * @var int[]
     */
    protected ?array $taskIds = null;

    /**
     * @return string[]
     */
    public function getAuthorUniqueIds(): ?array
    {
        return $this->authorUniqueIds;
    }

    /**
     * @param string[] $authorUniqueIds
     * @return self
     */
    public function setAuthorUniqueIds(?array $authorUniqueIds): self
    {
        $this->authorUniqueIds = $authorUniqueIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderReportV30FilterOrderCreateTime
     */
    public function getOrderCreateTime(): ?\Oceanengine\Models\DouplusOrderReportV30FilterOrderCreateTime
    {
        return $this->orderCreateTime;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderReportV30FilterOrderCreateTime $orderCreateTime
     * @return self
     */
    public function setOrderCreateTime(?\Oceanengine\Models\DouplusOrderReportV30FilterOrderCreateTime $orderCreateTime): self
    {
        $this->orderCreateTime = $orderCreateTime;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * @param int[] $orderIds
     * @return self
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRoomIds(): ?array
    {
        return $this->roomIds;
    }

    /**
     * @param int[] $roomIds
     * @return self
     */
    public function setRoomIds(?array $roomIds): self
    {
        $this->roomIds = $roomIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTaskIds(): ?array
    {
        return $this->taskIds;
    }

    /**
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
        if ($this->authorUniqueIds !== null) {
            $result['author_unique_ids'] = $this->authorUniqueIds;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->orderCreateTime !== null) {
            $result['order_create_time'] = $this->orderCreateTime;
        }
        if ($this->orderIds !== null) {
            $result['order_ids'] = $this->orderIds;
        }
        if ($this->roomIds !== null) {
            $result['room_ids'] = $this->roomIds;
        }
        if ($this->taskIds !== null) {
            $result['task_ids'] = $this->taskIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_unique_ids'] ?? null) !== null && is_array($v)) {
            $obj->authorUniqueIds = $v;
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['order_create_time'] ?? null) !== null && is_array($v)) {
            $obj->orderCreateTime = \Oceanengine\Models\DouplusOrderReportV30FilterOrderCreateTime::fromArray($v);
        }
        if (($v = $data['order_ids'] ?? null) !== null && is_array($v)) {
            $obj->orderIds = $v;
        }
        if (($v = $data['room_ids'] ?? null) !== null && is_array($v)) {
            $obj->roomIds = $v;
        }
        if (($v = $data['task_ids'] ?? null) !== null && is_array($v)) {
            $obj->taskIds = $v;
        }
        return $obj;
    }
}
