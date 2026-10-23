<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferTransferDetailGetV30ResponseData implements \JsonSerializable
{
    /**
     * 幂等id
     * @var string
     */
    protected ?string $bizRequestNo = null;

    /**
     * 转账备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 转账总金额(单位：分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * 转账创建时间(yyyy-MM-dd HH:mm:ss)
     * @var string
     */
    protected ?string $transferCreateTime = null;

    /**
     * @var \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferDirection
     */
    protected ?string $transferDirection = null;

    /**
     * 转账完成时间(yyyy-MM-dd HH:mm:ss)
     * @var string
     */
    protected ?string $transferFinishTime = null;

    /**
     * 转账单号
     * @var string
     */
    protected ?string $transferSerial = null;

    /**
     * @var \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferStatus
     */
    protected ?string $transferStatus = null;

    /**
     * 账户信息列表
     * @var \Oceanengine\Models\CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInner[]
     */
    protected ?array $transferTargetRecordList = null;

    /**
     * 幂等id
     * @return string
     */
    public function getBizRequestNo(): ?string
    {
        return $this->bizRequestNo;
    }

    /**
     * 幂等id
     * @param string $bizRequestNo
     * @return self
     */
    public function setBizRequestNo(?string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
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
     * 转账总金额(单位：分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 转账总金额(单位：分)
     * @param int $transferAmount
     * @return self
     */
    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * 转账创建时间(yyyy-MM-dd HH:mm:ss)
     * @return string
     */
    public function getTransferCreateTime(): ?string
    {
        return $this->transferCreateTime;
    }

    /**
     * 转账创建时间(yyyy-MM-dd HH:mm:ss)
     * @param string $transferCreateTime
     * @return self
     */
    public function setTransferCreateTime(?string $transferCreateTime): self
    {
        $this->transferCreateTime = $transferCreateTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferDirection
     */
    public function getTransferDirection(): ?string
    {
        return $this->transferDirection;
    }

    /**
     * @param \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferDirection $transferDirection
     * @return self
     */
    public function setTransferDirection(?string $transferDirection): self
    {
        $this->transferDirection = $transferDirection;
        return $this;
    }

    /**
     * 转账完成时间(yyyy-MM-dd HH:mm:ss)
     * @return string
     */
    public function getTransferFinishTime(): ?string
    {
        return $this->transferFinishTime;
    }

    /**
     * 转账完成时间(yyyy-MM-dd HH:mm:ss)
     * @param string $transferFinishTime
     * @return self
     */
    public function setTransferFinishTime(?string $transferFinishTime): self
    {
        $this->transferFinishTime = $transferFinishTime;
        return $this;
    }

    /**
     * 转账单号
     * @return string
     */
    public function getTransferSerial(): ?string
    {
        return $this->transferSerial;
    }

    /**
     * 转账单号
     * @param string $transferSerial
     * @return self
     */
    public function setTransferSerial(?string $transferSerial): self
    {
        $this->transferSerial = $transferSerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferStatus
     */
    public function getTransferStatus(): ?string
    {
        return $this->transferStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferTransferDetailGetV30DataTransferStatus $transferStatus
     * @return self
     */
    public function setTransferStatus(?string $transferStatus): self
    {
        $this->transferStatus = $transferStatus;
        return $this;
    }

    /**
     * 账户信息列表
     * @return \Oceanengine\Models\CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInner[]
     */
    public function getTransferTargetRecordList(): ?array
    {
        return $this->transferTargetRecordList;
    }

    /**
     * 账户信息列表
     * @param \Oceanengine\Models\CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInner[] $transferTargetRecordList
     * @return self
     */
    public function setTransferTargetRecordList(?array $transferTargetRecordList): self
    {
        $this->transferTargetRecordList = $transferTargetRecordList;
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
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        if ($this->transferCreateTime !== null) {
            $result['transfer_create_time'] = $this->transferCreateTime;
        }
        if ($this->transferDirection !== null) {
            $result['transfer_direction'] = $this->transferDirection;
        }
        if ($this->transferFinishTime !== null) {
            $result['transfer_finish_time'] = $this->transferFinishTime;
        }
        if ($this->transferSerial !== null) {
            $result['transfer_serial'] = $this->transferSerial;
        }
        if ($this->transferStatus !== null) {
            $result['transfer_status'] = $this->transferStatus;
        }
        if ($this->transferTargetRecordList !== null) {
            $result['transfer_target_record_list'] = $this->transferTargetRecordList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['biz_request_no'] ?? null) !== null) {
            $obj->bizRequestNo = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        if (($v = $data['transfer_create_time'] ?? null) !== null) {
            $obj->transferCreateTime = (string) $v;
        }
        if (($v = $data['transfer_direction'] ?? null) !== null) {
            $obj->transferDirection = (string) $v;
        }
        if (($v = $data['transfer_finish_time'] ?? null) !== null) {
            $obj->transferFinishTime = (string) $v;
        }
        if (($v = $data['transfer_serial'] ?? null) !== null) {
            $obj->transferSerial = (string) $v;
        }
        if (($v = $data['transfer_status'] ?? null) !== null) {
            $obj->transferStatus = (string) $v;
        }
        if (($v = $data['transfer_target_record_list'] ?? null) !== null && is_array($v)) {
            $obj->transferTargetRecordList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferTransferDetailGetV30ResponseDataTransferTargetRecordListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
