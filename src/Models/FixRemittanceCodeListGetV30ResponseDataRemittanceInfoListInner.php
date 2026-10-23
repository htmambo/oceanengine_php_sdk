<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FixRemittanceCodeListGetV30ResponseDataRemittanceInfoListInner implements \JsonSerializable
{
    /**
     * 充值金额
     * @var int
     */
    protected ?int $chargeAmount = null;

    /**
     * 充值完成时间
     * @var string
     */
    protected ?string $chargeFinishTime = null;

    /**
     * 充值对象ID
     * @var int
     */
    protected ?int $chargeTargetId = null;

    /**
     * 汇款码创建时间
     * @var string
     */
    protected ?string $codeCreateTime = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 失败原因
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * @var string
     */
    protected ?string $flowId = null;

    /**
     * @var \Oceanengine\Models\FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform
     */
    protected ?string $platform = null;

    /**
     * 款项到账时间
     * @var string
     */
    protected ?string $receiveDate = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 汇款码
     * @var string
     */
    protected ?string $remittanceCode = null;

    /**
     * @var \Oceanengine\Models\FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus
     */
    protected ?string $remittanceCodeStatus = null;

    /**
     * 充值金额
     * @return int
     */
    public function getChargeAmount(): ?int
    {
        return $this->chargeAmount;
    }

    /**
     * 充值金额
     * @param int $chargeAmount
     * @return self
     */
    public function setChargeAmount(?int $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;
        return $this;
    }

    /**
     * 充值完成时间
     * @return string
     */
    public function getChargeFinishTime(): ?string
    {
        return $this->chargeFinishTime;
    }

    /**
     * 充值完成时间
     * @param string $chargeFinishTime
     * @return self
     */
    public function setChargeFinishTime(?string $chargeFinishTime): self
    {
        $this->chargeFinishTime = $chargeFinishTime;
        return $this;
    }

    /**
     * 充值对象ID
     * @return int
     */
    public function getChargeTargetId(): ?int
    {
        return $this->chargeTargetId;
    }

    /**
     * 充值对象ID
     * @param int $chargeTargetId
     * @return self
     */
    public function setChargeTargetId(?int $chargeTargetId): self
    {
        $this->chargeTargetId = $chargeTargetId;
        return $this;
    }

    /**
     * 汇款码创建时间
     * @return string
     */
    public function getCodeCreateTime(): ?string
    {
        return $this->codeCreateTime;
    }

    /**
     * 汇款码创建时间
     * @param string $codeCreateTime
     * @return self
     */
    public function setCodeCreateTime(?string $codeCreateTime): self
    {
        $this->codeCreateTime = $codeCreateTime;
        return $this;
    }

    /**
     * 合同编号
     * @return string
     */
    public function getContractSerial(): ?string
    {
        return $this->contractSerial;
    }

    /**
     * 合同编号
     * @param string $contractSerial
     * @return self
     */
    public function setContractSerial(?string $contractSerial): self
    {
        $this->contractSerial = $contractSerial;
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
     * @return string
     */
    public function getFlowId(): ?string
    {
        return $this->flowId;
    }

    /**
     * @param string $flowId
     * @return self
     */
    public function setFlowId(?string $flowId): self
    {
        $this->flowId = $flowId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 款项到账时间
     * @return string
     */
    public function getReceiveDate(): ?string
    {
        return $this->receiveDate;
    }

    /**
     * 款项到账时间
     * @param string $receiveDate
     * @return self
     */
    public function setReceiveDate(?string $receiveDate): self
    {
        $this->receiveDate = $receiveDate;
        return $this;
    }

    /**
     * 备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 汇款码
     * @return string
     */
    public function getRemittanceCode(): ?string
    {
        return $this->remittanceCode;
    }

    /**
     * 汇款码
     * @param string $remittanceCode
     * @return self
     */
    public function setRemittanceCode(?string $remittanceCode): self
    {
        $this->remittanceCode = $remittanceCode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus
     */
    public function getRemittanceCodeStatus(): ?string
    {
        return $this->remittanceCodeStatus;
    }

    /**
     * @param \Oceanengine\Models\FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus $remittanceCodeStatus
     * @return self
     */
    public function setRemittanceCodeStatus(?string $remittanceCodeStatus): self
    {
        $this->remittanceCodeStatus = $remittanceCodeStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->chargeAmount !== null) {
            $result['charge_amount'] = $this->chargeAmount;
        }
        if ($this->chargeFinishTime !== null) {
            $result['charge_finish_time'] = $this->chargeFinishTime;
        }
        if ($this->chargeTargetId !== null) {
            $result['charge_target_id'] = $this->chargeTargetId;
        }
        if ($this->codeCreateTime !== null) {
            $result['code_create_time'] = $this->codeCreateTime;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
        }
        if ($this->flowId !== null) {
            $result['flow_id'] = $this->flowId;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->receiveDate !== null) {
            $result['receive_date'] = $this->receiveDate;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->remittanceCode !== null) {
            $result['remittance_code'] = $this->remittanceCode;
        }
        if ($this->remittanceCodeStatus !== null) {
            $result['remittance_code_status'] = $this->remittanceCodeStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_amount'] ?? null) !== null) {
            $obj->chargeAmount = (int) $v;
        }
        if (($v = $data['charge_finish_time'] ?? null) !== null) {
            $obj->chargeFinishTime = (string) $v;
        }
        if (($v = $data['charge_target_id'] ?? null) !== null) {
            $obj->chargeTargetId = (int) $v;
        }
        if (($v = $data['code_create_time'] ?? null) !== null) {
            $obj->codeCreateTime = (string) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
        }
        if (($v = $data['flow_id'] ?? null) !== null) {
            $obj->flowId = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['receive_date'] ?? null) !== null) {
            $obj->receiveDate = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['remittance_code'] ?? null) !== null) {
            $obj->remittanceCode = (string) $v;
        }
        if (($v = $data['remittance_code_status'] ?? null) !== null) {
            $obj->remittanceCodeStatus = (string) $v;
        }
        return $obj;
    }
}
