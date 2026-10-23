<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletOperationLogGetV30Filtering implements \JsonSerializable
{
    /**
     * 操作id
     * @var int
     */
    protected ?int $operationId = null;

    /**
     * 操作类型
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30FilteringOperationTypeList[]
     */
    protected ?array $operationTypeList = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30FilteringStatusFilter
     */
    protected ?string $statusFilter = null;

    /**
     * 操作id
     * @return int
     */
    public function getOperationId(): ?int
    {
        return $this->operationId;
    }

    /**
     * 操作id
     * @param int $operationId
     * @return self
     */
    public function setOperationId(?int $operationId): self
    {
        $this->operationId = $operationId;
        return $this;
    }

    /**
     * 操作类型
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30FilteringOperationTypeList[]
     */
    public function getOperationTypeList(): ?array
    {
        return $this->operationTypeList;
    }

    /**
     * 操作类型
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30FilteringOperationTypeList[] $operationTypeList
     * @return self
     */
    public function setOperationTypeList(?array $operationTypeList): self
    {
        $this->operationTypeList = $operationTypeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30FilteringStatusFilter
     */
    public function getStatusFilter(): ?string
    {
        return $this->statusFilter;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30FilteringStatusFilter $statusFilter
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
        if ($this->operationId !== null) {
            $result['operation_id'] = $this->operationId;
        }
        if ($this->operationTypeList !== null) {
            $result['operation_type_list'] = $this->operationTypeList;
        }
        if ($this->statusFilter !== null) {
            $result['status_filter'] = $this->statusFilter;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['operation_id'] ?? null) !== null) {
            $obj->operationId = (int) $v;
        }
        if (($v = $data['operation_type_list'] ?? null) !== null && is_array($v)) {
            $obj->operationTypeList = $v;
        }
        if (($v = $data['status_filter'] ?? null) !== null) {
            $obj->statusFilter = (string) $v;
        }
        return $obj;
    }
}
