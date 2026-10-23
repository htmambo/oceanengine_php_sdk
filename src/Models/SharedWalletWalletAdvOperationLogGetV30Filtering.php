<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletAdvOperationLogGetV30Filtering implements \JsonSerializable
{
    /**
     * adv_id & operation_id 两个必填一个
     * @var int
     */
    protected ?int $advId = null;

    /**
     * adv_id & operation_id 两个必填一个
     * @var int
     */
    protected ?int $operationId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter
     */
    protected ?string $statusFilter = null;

    /**
     * adv_id & operation_id 两个必填一个
     * @return int
     */
    public function getAdvId(): ?int
    {
        return $this->advId;
    }

    /**
     * adv_id & operation_id 两个必填一个
     * @param int $advId
     * @return self
     */
    public function setAdvId(?int $advId): self
    {
        $this->advId = $advId;
        return $this;
    }

    /**
     * adv_id & operation_id 两个必填一个
     * @return int
     */
    public function getOperationId(): ?int
    {
        return $this->operationId;
    }

    /**
     * adv_id & operation_id 两个必填一个
     * @param int $operationId
     * @return self
     */
    public function setOperationId(?int $operationId): self
    {
        $this->operationId = $operationId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter
     */
    public function getStatusFilter(): ?string
    {
        return $this->statusFilter;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter $statusFilter
     * @return self
     */
    public function setStatusFilter(?string $statusFilter): self
    {
        $this->statusFilter = $statusFilter;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advId !== null) {
            $result['adv_id'] = $this->advId;
        }
        if ($this->operationId !== null) {
            $result['operation_id'] = $this->operationId;
        }
        if ($this->statusFilter !== null) {
            $result['status_filter'] = $this->statusFilter;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_id'] ?? null) !== null) {
            $obj->advId = (int) $v;
        }
        if (($v = $data['operation_id'] ?? null) !== null) {
            $obj->operationId = (int) $v;
        }
        if (($v = $data['status_filter'] ?? null) !== null) {
            $obj->statusFilter = (string) $v;
        }
        return $obj;
    }
}
