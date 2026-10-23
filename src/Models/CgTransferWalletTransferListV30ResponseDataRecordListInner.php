<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferListV30ResponseDataRecordListInner implements \JsonSerializable
{
    /**
     * 转账申请幂等id
     * @var string
     */
    protected ?string $bizRequestNo = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListPayeeCategory
     */
    protected ?string $payeeCategory = null;

    /**
     * 加款方id
     * @var int
     */
    protected ?int $payeeId = null;

    /**
     * 转账备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListRemitterCategory
     */
    protected ?string $remitterCategory = null;

    /**
     * 减款方id
     * @var int
     */
    protected ?int $remitterId = null;

    /**
     * 转账资金列表
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInner[]
     */
    protected ?array $transferCapitalRecordList = null;

    /**
     * 转账单编号
     * @var string
     */
    protected ?string $transferOrderSerial = null;

    /**
     * 加款方-减款方间转账金额(单位：分)
     * @var int
     */
    protected ?int $transferTargetAmount = null;

    /**
     * 完成时间yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $transferTargetCreateTime = null;

    /**
     * 创建时间yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $transferTargetFinishTime = null;

    /**
     * 账户间唯一转账编号
     * @var string
     */
    protected ?string $transferTargetSerial = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferTargetStatus
     */
    protected ?string $transferTargetStatus = null;

    /**
     * 转账申请幂等id
     * @return string
     */
    public function getBizRequestNo(): ?string
    {
        return $this->bizRequestNo;
    }

    /**
     * 转账申请幂等id
     * @param string $bizRequestNo
     * @return self
     */
    public function setBizRequestNo(?string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListPayeeCategory
     */
    public function getPayeeCategory(): ?string
    {
        return $this->payeeCategory;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListPayeeCategory $payeeCategory
     * @return self
     */
    public function setPayeeCategory(?string $payeeCategory): self
    {
        $this->payeeCategory = $payeeCategory;
        return $this;
    }

    /**
     * 加款方id
     * @return int
     */
    public function getPayeeId(): ?int
    {
        return $this->payeeId;
    }

    /**
     * 加款方id
     * @param int $payeeId
     * @return self
     */
    public function setPayeeId(?int $payeeId): self
    {
        $this->payeeId = $payeeId;
        return $this;
    }

    /**
     * 转账备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 转账备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListRemitterCategory
     */
    public function getRemitterCategory(): ?string
    {
        return $this->remitterCategory;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListRemitterCategory $remitterCategory
     * @return self
     */
    public function setRemitterCategory(?string $remitterCategory): self
    {
        $this->remitterCategory = $remitterCategory;
        return $this;
    }

    /**
     * 减款方id
     * @return int
     */
    public function getRemitterId(): ?int
    {
        return $this->remitterId;
    }

    /**
     * 减款方id
     * @param int $remitterId
     * @return self
     */
    public function setRemitterId(?int $remitterId): self
    {
        $this->remitterId = $remitterId;
        return $this;
    }

    /**
     * 转账资金列表
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInner[]
     */
    public function getTransferCapitalRecordList(): ?array
    {
        return $this->transferCapitalRecordList;
    }

    /**
     * 转账资金列表
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInner[] $transferCapitalRecordList
     * @return self
     */
    public function setTransferCapitalRecordList(?array $transferCapitalRecordList): self
    {
        $this->transferCapitalRecordList = $transferCapitalRecordList;
        return $this;
    }

    /**
     * 转账单编号
     * @return string
     */
    public function getTransferOrderSerial(): ?string
    {
        return $this->transferOrderSerial;
    }

    /**
     * 转账单编号
     * @param string $transferOrderSerial
     * @return self
     */
    public function setTransferOrderSerial(?string $transferOrderSerial): self
    {
        $this->transferOrderSerial = $transferOrderSerial;
        return $this;
    }

    /**
     * 加款方-减款方间转账金额(单位：分)
     * @return int
     */
    public function getTransferTargetAmount(): ?int
    {
        return $this->transferTargetAmount;
    }

    /**
     * 加款方-减款方间转账金额(单位：分)
     * @param int $transferTargetAmount
     * @return self
     */
    public function setTransferTargetAmount(?int $transferTargetAmount): self
    {
        $this->transferTargetAmount = $transferTargetAmount;
        return $this;
    }

    /**
     * 完成时间yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getTransferTargetCreateTime(): ?string
    {
        return $this->transferTargetCreateTime;
    }

    /**
     * 完成时间yyyy-MM-dd HH:mm:ss
     * @param string $transferTargetCreateTime
     * @return self
     */
    public function setTransferTargetCreateTime(?string $transferTargetCreateTime): self
    {
        $this->transferTargetCreateTime = $transferTargetCreateTime;
        return $this;
    }

    /**
     * 创建时间yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getTransferTargetFinishTime(): ?string
    {
        return $this->transferTargetFinishTime;
    }

    /**
     * 创建时间yyyy-MM-dd HH:mm:ss
     * @param string $transferTargetFinishTime
     * @return self
     */
    public function setTransferTargetFinishTime(?string $transferTargetFinishTime): self
    {
        $this->transferTargetFinishTime = $transferTargetFinishTime;
        return $this;
    }

    /**
     * 账户间唯一转账编号
     * @return string
     */
    public function getTransferTargetSerial(): ?string
    {
        return $this->transferTargetSerial;
    }

    /**
     * 账户间唯一转账编号
     * @param string $transferTargetSerial
     * @return self
     */
    public function setTransferTargetSerial(?string $transferTargetSerial): self
    {
        $this->transferTargetSerial = $transferTargetSerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferTargetStatus
     */
    public function getTransferTargetStatus(): ?string
    {
        return $this->transferTargetStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferTargetStatus $transferTargetStatus
     * @return self
     */
    public function setTransferTargetStatus(?string $transferTargetStatus): self
    {
        $this->transferTargetStatus = $transferTargetStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bizRequestNo !== null) {
            $result['biz_request_no'] = $this->bizRequestNo;
        }
        if ($this->payeeCategory !== null) {
            $result['payee_category'] = $this->payeeCategory;
        }
        if ($this->payeeId !== null) {
            $result['payee_id'] = $this->payeeId;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->remitterCategory !== null) {
            $result['remitter_category'] = $this->remitterCategory;
        }
        if ($this->remitterId !== null) {
            $result['remitter_id'] = $this->remitterId;
        }
        if ($this->transferCapitalRecordList !== null) {
            $result['transfer_capital_record_list'] = $this->transferCapitalRecordList;
        }
        if ($this->transferOrderSerial !== null) {
            $result['transfer_order_serial'] = $this->transferOrderSerial;
        }
        if ($this->transferTargetAmount !== null) {
            $result['transfer_target_amount'] = $this->transferTargetAmount;
        }
        if ($this->transferTargetCreateTime !== null) {
            $result['transfer_target_create_time'] = $this->transferTargetCreateTime;
        }
        if ($this->transferTargetFinishTime !== null) {
            $result['transfer_target_finish_time'] = $this->transferTargetFinishTime;
        }
        if ($this->transferTargetSerial !== null) {
            $result['transfer_target_serial'] = $this->transferTargetSerial;
        }
        if ($this->transferTargetStatus !== null) {
            $result['transfer_target_status'] = $this->transferTargetStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['biz_request_no'] ?? null) !== null) {
            $obj->bizRequestNo = (string) $v;
        }
        if (($v = $data['payee_category'] ?? null) !== null) {
            $obj->payeeCategory = (string) $v;
        }
        if (($v = $data['payee_id'] ?? null) !== null) {
            $obj->payeeId = (int) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['remitter_category'] ?? null) !== null) {
            $obj->remitterCategory = (string) $v;
        }
        if (($v = $data['remitter_id'] ?? null) !== null) {
            $obj->remitterId = (int) $v;
        }
        if (($v = $data['transfer_capital_record_list'] ?? null) !== null && is_array($v)) {
            $obj->transferCapitalRecordList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInner::fromArray($vv), $v);
        }
        if (($v = $data['transfer_order_serial'] ?? null) !== null) {
            $obj->transferOrderSerial = (string) $v;
        }
        if (($v = $data['transfer_target_amount'] ?? null) !== null) {
            $obj->transferTargetAmount = (int) $v;
        }
        if (($v = $data['transfer_target_create_time'] ?? null) !== null) {
            $obj->transferTargetCreateTime = (string) $v;
        }
        if (($v = $data['transfer_target_finish_time'] ?? null) !== null) {
            $obj->transferTargetFinishTime = (string) $v;
        }
        if (($v = $data['transfer_target_serial'] ?? null) !== null) {
            $obj->transferTargetSerial = (string) $v;
        }
        if (($v = $data['transfer_target_status'] ?? null) !== null) {
            $obj->transferTargetStatus = (string) $v;
        }
        return $obj;
    }
}
