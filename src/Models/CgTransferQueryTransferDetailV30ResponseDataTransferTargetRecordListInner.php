<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryTransferDetailV30ResponseDataTransferTargetRecordListInner implements \JsonSerializable
{
    /**
     * 锚定账户id，1:N的1
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 目标账户id，1:N的N
     * @var int
     */
    protected ?int $targetAccountId = null;

    /**
     * 账户间转账编号
     * @var string
     */
    protected ?string $targetTransferSerial = null;

    /**
     * 转账金额(单位：分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * 转账资金类型列表
     * @var \Oceanengine\Models\CgTransferQueryTransferDetailV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInner[]
     */
    protected ?array $transferCapitalRecordList = null;

    /**
     * @var \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferStatus
     */
    protected ?string $transferStatus = null;

    /**
     * 锚定账户id，1:N的1
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 锚定账户id，1:N的1
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 目标账户id，1:N的N
     * @return int
     */
    public function getTargetAccountId(): ?int
    {
        return $this->targetAccountId;
    }

    /**
     * 目标账户id，1:N的N
     * @param int $targetAccountId
     * @return self
     */
    public function setTargetAccountId(?int $targetAccountId): self
    {
        $this->targetAccountId = $targetAccountId;
        return $this;
    }

    /**
     * 账户间转账编号
     * @return string
     */
    public function getTargetTransferSerial(): ?string
    {
        return $this->targetTransferSerial;
    }

    /**
     * 账户间转账编号
     * @param string $targetTransferSerial
     * @return self
     */
    public function setTargetTransferSerial(?string $targetTransferSerial): self
    {
        $this->targetTransferSerial = $targetTransferSerial;
        return $this;
    }

    /**
     * 转账金额(单位：分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 转账金额(单位：分)
     * @param int $transferAmount
     * @return self
     */
    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * 转账资金类型列表
     * @return \Oceanengine\Models\CgTransferQueryTransferDetailV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInner[]
     */
    public function getTransferCapitalRecordList(): ?array
    {
        return $this->transferCapitalRecordList;
    }

    /**
     * 转账资金类型列表
     * @param \Oceanengine\Models\CgTransferQueryTransferDetailV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInner[] $transferCapitalRecordList
     * @return self
     */
    public function setTransferCapitalRecordList(?array $transferCapitalRecordList): self
    {
        $this->transferCapitalRecordList = $transferCapitalRecordList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferStatus
     */
    public function getTransferStatus(): ?string
    {
        return $this->transferStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferStatus $transferStatus
     * @return self
     */
    public function setTransferStatus(?string $transferStatus): self
    {
        $this->transferStatus = $transferStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->targetAccountId !== null) {
            $result['target_account_id'] = $this->targetAccountId;
        }
        if ($this->targetTransferSerial !== null) {
            $result['target_transfer_serial'] = $this->targetTransferSerial;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        if ($this->transferCapitalRecordList !== null) {
            $result['transfer_capital_record_list'] = $this->transferCapitalRecordList;
        }
        if ($this->transferStatus !== null) {
            $result['transfer_status'] = $this->transferStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['target_account_id'] ?? null) !== null) {
            $obj->targetAccountId = (int) $v;
        }
        if (($v = $data['target_transfer_serial'] ?? null) !== null) {
            $obj->targetTransferSerial = (string) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        if (($v = $data['transfer_capital_record_list'] ?? null) !== null && is_array($v)) {
            $obj->transferCapitalRecordList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferQueryTransferDetailV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInner::fromArray($vv), $v);
        }
        if (($v = $data['transfer_status'] ?? null) !== null) {
            $obj->transferStatus = (string) $v;
        }
        return $obj;
    }
}
