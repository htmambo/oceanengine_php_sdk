<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInner implements \JsonSerializable
{
    /**
     * 转账资金子类型明细列表
     * @var \Oceanengine\Models\CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner[]
     */
    protected ?array $capitalSubDetailList = null;

    /**
     * @var \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType
     */
    protected ?string $capitalType = null;

    /**
     * 失败原因
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * 转账资金金额(单位：分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * @var \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus
     */
    protected ?string $transferStatus = null;

    /**
     * 转账资金子类型明细列表
     * @return \Oceanengine\Models\CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner[]
     */
    public function getCapitalSubDetailList(): ?array
    {
        return $this->capitalSubDetailList;
    }

    /**
     * 转账资金子类型明细列表
     * @param \Oceanengine\Models\CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner[] $capitalSubDetailList
     * @return self
     */
    public function setCapitalSubDetailList(?array $capitalSubDetailList): self
    {
        $this->capitalSubDetailList = $capitalSubDetailList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType
     */
    public function getCapitalType(): ?string
    {
        return $this->capitalType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListCapitalType $capitalType
     * @return self
     */
    public function setCapitalType(?string $capitalType): self
    {
        $this->capitalType = $capitalType;
        return $this;
    }

    /**
     * 失败原因
     * @return string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * 失败原因
     * @param string $failReason
     * @return self
     */
    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * 转账资金金额(单位：分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 转账资金金额(单位：分)
     * @param int $transferAmount
     * @return self
     */
    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus
     */
    public function getTransferStatus(): ?string
    {
        return $this->transferStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferTargetRecordListTransferCapitalRecordListTransferStatus $transferStatus
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
        if ($this->capitalSubDetailList !== null) {
            $result['capital_sub_detail_list'] = $this->capitalSubDetailList;
        }
        if ($this->capitalType !== null) {
            $result['capital_type'] = $this->capitalType;
        }
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
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
        if (($v = $data['capital_sub_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalSubDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['capital_type'] ?? null) !== null) {
            $obj->capitalType = (string) $v;
        }
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
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
