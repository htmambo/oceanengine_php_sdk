<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV3WalletTransferDetailGetV30ResponseData implements \JsonSerializable
{
    /**
     * 账户维度转账结果列表
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInner[]
     */
    protected ?array $accountTransferOrderResultList = null;

    /**
     * 转账请求id
     * @var string
     */
    protected ?string $bizRequestNo = null;

    /**
     * 操作人
     * @var int
     */
    protected ?int $operatorId = null;

    /**
     * operatorName
     * @var string
     */
    protected ?string $operatorName = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataOrigin
     */
    protected ?string $origin = null;

    /**
     * 转账备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 转账金额 (单位:分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * 转账创建时间
     * @var string
     */
    protected ?string $transferCreateTime = null;

    /**
     * 转账完成时间
     * @var string
     */
    protected ?string $transferFinishTime = null;

    /**
     * 转账编号
     * @var string
     */
    protected ?string $transferSerial = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataTransferStatus
     */
    protected ?string $transferStatus = null;

    /**
     * 账户维度转账结果列表
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInner[]
     */
    public function getAccountTransferOrderResultList(): ?array
    {
        return $this->accountTransferOrderResultList;
    }

    /**
     * 账户维度转账结果列表
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInner[] $accountTransferOrderResultList
     * @return self
     */
    public function setAccountTransferOrderResultList(?array $accountTransferOrderResultList): self
    {
        $this->accountTransferOrderResultList = $accountTransferOrderResultList;
        return $this;
    }

    /**
     * 转账请求id
     * @return string
     */
    public function getBizRequestNo(): ?string
    {
        return $this->bizRequestNo;
    }

    /**
     * 转账请求id
     * @param string $bizRequestNo
     * @return self
     */
    public function setBizRequestNo(?string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
        return $this;
    }

    /**
     * 操作人
     * @return int
     */
    public function getOperatorId(): ?int
    {
        return $this->operatorId;
    }

    /**
     * 操作人
     * @param int $operatorId
     * @return self
     */
    public function setOperatorId(?int $operatorId): self
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * operatorName
     * @return string
     */
    public function getOperatorName(): ?string
    {
        return $this->operatorName;
    }

    /**
     * operatorName
     * @param string $operatorName
     * @return self
     */
    public function setOperatorName(?string $operatorName): self
    {
        $this->operatorName = $operatorName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataOrigin
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataOrigin $origin
     * @return self
     */
    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;
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
     * 转账金额 (单位:分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 转账金额 (单位:分)
     * @param int $transferAmount
     * @return self
     */
    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * 转账创建时间
     * @return string
     */
    public function getTransferCreateTime(): ?string
    {
        return $this->transferCreateTime;
    }

    /**
     * 转账创建时间
     * @param string $transferCreateTime
     * @return self
     */
    public function setTransferCreateTime(?string $transferCreateTime): self
    {
        $this->transferCreateTime = $transferCreateTime;
        return $this;
    }

    /**
     * 转账完成时间
     * @return string
     */
    public function getTransferFinishTime(): ?string
    {
        return $this->transferFinishTime;
    }

    /**
     * 转账完成时间
     * @param string $transferFinishTime
     * @return self
     */
    public function setTransferFinishTime(?string $transferFinishTime): self
    {
        $this->transferFinishTime = $transferFinishTime;
        return $this;
    }

    /**
     * 转账编号
     * @return string
     */
    public function getTransferSerial(): ?string
    {
        return $this->transferSerial;
    }

    /**
     * 转账编号
     * @param string $transferSerial
     * @return self
     */
    public function setTransferSerial(?string $transferSerial): self
    {
        $this->transferSerial = $transferSerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataTransferStatus
     */
    public function getTransferStatus(): ?string
    {
        return $this->transferStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataTransferStatus $transferStatus
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
        if ($this->accountTransferOrderResultList !== null) {
            $result['account_transfer_order_result_list'] = $this->accountTransferOrderResultList;
        }
        if ($this->bizRequestNo !== null) {
            $result['biz_request_no'] = $this->bizRequestNo;
        }
        if ($this->operatorId !== null) {
            $result['operator_id'] = $this->operatorId;
        }
        if ($this->operatorName !== null) {
            $result['operator_name'] = $this->operatorName;
        }
        if ($this->origin !== null) {
            $result['origin'] = $this->origin;
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
        if ($this->transferFinishTime !== null) {
            $result['transfer_finish_time'] = $this->transferFinishTime;
        }
        if ($this->transferSerial !== null) {
            $result['transfer_serial'] = $this->transferSerial;
        }
        if ($this->transferStatus !== null) {
            $result['transfer_status'] = $this->transferStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_transfer_order_result_list'] ?? null) !== null && is_array($v)) {
            $obj->accountTransferOrderResultList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInner::fromArray($vv), $v);
        }
        if (($v = $data['biz_request_no'] ?? null) !== null) {
            $obj->bizRequestNo = (string) $v;
        }
        if (($v = $data['operator_id'] ?? null) !== null) {
            $obj->operatorId = (int) $v;
        }
        if (($v = $data['operator_name'] ?? null) !== null) {
            $obj->operatorName = (string) $v;
        }
        if (($v = $data['origin'] ?? null) !== null) {
            $obj->origin = (string) $v;
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
        if (($v = $data['transfer_finish_time'] ?? null) !== null) {
            $obj->transferFinishTime = (string) $v;
        }
        if (($v = $data['transfer_serial'] ?? null) !== null) {
            $obj->transferSerial = (string) $v;
        }
        if (($v = $data['transfer_status'] ?? null) !== null) {
            $obj->transferStatus = (string) $v;
        }
        return $obj;
    }
}
