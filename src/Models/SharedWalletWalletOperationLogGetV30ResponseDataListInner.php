<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletOperationLogGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 业务时间, UTC 时间戳, 秒级别
     * @var int
     */
    protected ?int $businessTime = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerExtraInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerExtraInfo $extraInfo = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetail
     */
    protected ?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetail $operationDetail = null;

    /**
     * 操作id
     * @var int
     */
    protected ?int $operationId = null;

    /**
     * 操作人
     * @var string
     */
    protected ?string $operator = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * 操作的id
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30DataListWalletOperationType
     */
    protected ?string $walletOperationType = null;

    /**
     * 业务时间, UTC 时间戳, 秒级别
     * @return int
     */
    public function getBusinessTime(): ?int
    {
        return $this->businessTime;
    }

    /**
     * 业务时间, UTC 时间戳, 秒级别
     * @param int $businessTime
     * @return self
     */
    public function setBusinessTime(?int $businessTime): self
    {
        $this->businessTime = $businessTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerExtraInfo
     */
    public function getExtraInfo(): ?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerExtraInfo
    {
        return $this->extraInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerExtraInfo $extraInfo
     * @return self
     */
    public function setExtraInfo(?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerExtraInfo $extraInfo): self
    {
        $this->extraInfo = $extraInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetail
     */
    public function getOperationDetail(): ?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetail
    {
        return $this->operationDetail;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetail $operationDetail
     * @return self
     */
    public function setOperationDetail(?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetail $operationDetail): self
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
     * 操作人
     * @return string
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * 操作人
     * @param string $operator
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 操作的id
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * 操作的id
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30DataListWalletOperationType
     */
    public function getWalletOperationType(): ?string
    {
        return $this->walletOperationType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30DataListWalletOperationType $walletOperationType
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
        if ($this->businessTime !== null) {
            $result['business_time'] = $this->businessTime;
        }
        if ($this->extraInfo !== null) {
            $result['extra_info'] = $this->extraInfo;
        }
        if ($this->operationDetail !== null) {
            $result['operation_detail'] = $this->operationDetail;
        }
        if ($this->operationId !== null) {
            $result['operation_id'] = $this->operationId;
        }
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
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
        if (($v = $data['business_time'] ?? null) !== null) {
            $obj->businessTime = (int) $v;
        }
        if (($v = $data['extra_info'] ?? null) !== null && is_array($v)) {
            $obj->extraInfo = \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerExtraInfo::fromArray($v);
        }
        if (($v = $data['operation_detail'] ?? null) !== null && is_array($v)) {
            $obj->operationDetail = \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetail::fromArray($v);
        }
        if (($v = $data['operation_id'] ?? null) !== null) {
            $obj->operationId = (int) $v;
        }
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (string) $v;
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
