<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryTransferDetailV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType
     */
    protected ?string $capitalSubType = null;

    /**
     * 资金子类型转账金额(单位：分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * @var \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus
     */
    protected ?string $transferStatus = null;

    /**
     * @return \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType
     */
    public function getCapitalSubType(): ?string
    {
        return $this->capitalSubType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListCapitalSubType $capitalSubType
     * @return self
     */
    public function setCapitalSubType(?string $capitalSubType): self
    {
        $this->capitalSubType = $capitalSubType;
        return $this;
    }

    /**
     * 资金子类型转账金额(单位：分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 资金子类型转账金额(单位：分)
     * @param int $transferAmount
     * @return self
     */
    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus
     */
    public function getTransferStatus(): ?string
    {
        return $this->transferStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferQueryTransferDetailV30DataTransferTargetRecordListTransferCapitalRecordListCapitalSubDetailListTransferStatus $transferStatus
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
        if ($this->capitalSubType !== null) {
            $result['capital_sub_type'] = $this->capitalSubType;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        if ($this->transferStatus !== null) {
            $result['transfer_status'] = $this->transferStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_sub_type'] ?? null) !== null) {
            $obj->capitalSubType = (string) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        if (($v = $data['transfer_status'] ?? null) !== null) {
            $obj->transferStatus = (string) $v;
        }
        return $obj;
    }
}
