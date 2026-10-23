<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletAdvOperationLogGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * adv_id
     * @var int
     */
    protected ?int $advId = null;

    /**
     * adv_name
     * @var string
     */
    protected ?string $advName = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetail
     */
    protected ?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetail $operationDetail = null;

    /**
     * 操作id
     * @var int
     */
    protected ?int $operationId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * 操作的目标
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType
     */
    protected ?string $walletOperationType = null;

    /**
     * adv_id
     * @return int
     */
    public function getAdvId(): ?int
    {
        return $this->advId;
    }

    /**
     * adv_id
     * @param int $advId
     * @return self
     */
    public function setAdvId(?int $advId): self
    {
        $this->advId = $advId;
        return $this;
    }

    /**
     * adv_name
     * @return string
     */
    public function getAdvName(): ?string
    {
        return $this->advName;
    }

    /**
     * adv_name
     * @param string $advName
     * @return self
     */
    public function setAdvName(?string $advName): self
    {
        $this->advName = $advName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetail
     */
    public function getOperationDetail(): ?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetail
    {
        return $this->operationDetail;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetail $operationDetail
     * @return self
     */
    public function setOperationDetail(?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetail $operationDetail): self
    {
        $this->operationDetail = $operationDetail;
        return $this;
    }

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
     * @return \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 操作的目标
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * 操作的目标
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType
     */
    public function getWalletOperationType(): ?string
    {
        return $this->walletOperationType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType $walletOperationType
     * @return self
     */
    public function setWalletOperationType(?string $walletOperationType): self
    {
        $this->walletOperationType = $walletOperationType;
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
        if ($this->advName !== null) {
            $result['adv_name'] = $this->advName;
        }
        if ($this->operationDetail !== null) {
            $result['operation_detail'] = $this->operationDetail;
        }
        if ($this->operationId !== null) {
            $result['operation_id'] = $this->operationId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        if ($this->walletOperationType !== null) {
            $result['wallet_operation_type'] = $this->walletOperationType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_id'] ?? null) !== null) {
            $obj->advId = (int) $v;
        }
        if (($v = $data['adv_name'] ?? null) !== null) {
            $obj->advName = (string) $v;
        }
        if (($v = $data['operation_detail'] ?? null) !== null && is_array($v)) {
            $obj->operationDetail = \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetail::fromArray($v);
        }
        if (($v = $data['operation_id'] ?? null) !== null) {
            $obj->operationId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        if (($v = $data['wallet_operation_type'] ?? null) !== null) {
            $obj->walletOperationType = (string) $v;
        }
        return $obj;
    }
}
