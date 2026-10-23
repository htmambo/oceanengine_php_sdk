<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasAppendOrderToBoostItemGroupV2Request implements \JsonSerializable
{
    /**
     * 助推金额，单位元。若为null，则不追加
     * @var int
     */
    protected ?int $boostAmount = null;

    /**
     * 关联投稿视频，该字段与order_ids只取其一。同一主推组下指派和投稿不可同时存在
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * 关联指派单，该字段与item_ids只取其一。同一主推组下指派和投稿不可同时存在
     * @var int[]
     */
    protected ?array $orderIds = null;

    /**
     * 客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 助推组ID
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 助推金额，单位元。若为null，则不追加
     * @return int
     */
    public function getBoostAmount(): ?int
    {
        return $this->boostAmount;
    }

    /**
     * 助推金额，单位元。若为null，则不追加
     * @param int $boostAmount
     * @return self
     */
    public function setBoostAmount(?int $boostAmount): self
    {
        $this->boostAmount = $boostAmount;
        return $this;
    }

    /**
     * 关联投稿视频，该字段与order_ids只取其一。同一主推组下指派和投稿不可同时存在
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * 关联投稿视频，该字段与order_ids只取其一。同一主推组下指派和投稿不可同时存在
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * 关联指派单，该字段与item_ids只取其一。同一主推组下指派和投稿不可同时存在
     * @return int[]
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * 关联指派单，该字段与item_ids只取其一。同一主推组下指派和投稿不可同时存在
     * @param int[] $orderIds
     * @return self
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * 客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->boostAmount !== null) {
            $result['boost_amount'] = $this->boostAmount;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->orderIds !== null) {
            $result['order_ids'] = $this->orderIds;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['boost_amount'] ?? null) !== null) {
            $obj->boostAmount = (int) $v;
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['order_ids'] ?? null) !== null && is_array($v)) {
            $obj->orderIds = $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
