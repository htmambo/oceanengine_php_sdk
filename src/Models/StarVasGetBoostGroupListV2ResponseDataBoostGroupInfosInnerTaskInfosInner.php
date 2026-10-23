<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostGroupListV2ResponseDataBoostGroupInfosInnerTaskInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 达人ID
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 达人名称
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * 投稿视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 视频名称
     * @var string
     */
    protected ?string $itemName = null;

    /**
     * 指派/投稿任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 指派/投稿任务名称
     * @var string
     */
    protected ?string $orderName = null;

    /**
     * @return \Oceanengine\Models\StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 达人ID
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * 达人ID
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * 达人名称
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * 达人名称
     * @param string $authorName
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * 投稿视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 投稿视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 视频名称
     * @return string
     */
    public function getItemName(): ?string
    {
        return $this->itemName;
    }

    /**
     * 视频名称
     * @param string $itemName
     * @return self
     */
    public function setItemName(?string $itemName): self
    {
        $this->itemName = $itemName;
        return $this;
    }

    /**
     * 指派/投稿任务ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 指派/投稿任务ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 指派/投稿任务名称
     * @return string
     */
    public function getOrderName(): ?string
    {
        return $this->orderName;
    }

    /**
     * 指派/投稿任务名称
     * @param string $orderName
     * @return self
     */
    public function setOrderName(?string $orderName): self
    {
        $this->orderName = $orderName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->authorName !== null) {
            $result['author_name'] = $this->authorName;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->itemName !== null) {
            $result['item_name'] = $this->itemName;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderName !== null) {
            $result['order_name'] = $this->orderName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['author_name'] ?? null) !== null) {
            $obj->authorName = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['item_name'] ?? null) !== null) {
            $obj->itemName = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_name'] ?? null) !== null) {
            $obj->orderName = (string) $v;
        }
        return $obj;
    }
}
