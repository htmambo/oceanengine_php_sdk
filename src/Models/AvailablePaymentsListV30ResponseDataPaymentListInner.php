<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AvailablePaymentsListV30ResponseDataPaymentListInner implements \JsonSerializable
{
    /**
     * 打款金额 单位分
     * @var int
     */
    protected ?int $amount = null;

    /**
     * 银行备注
     * @var string
     */
    protected ?string $bankRemark = null;

    /**
     * 付款方账户名
     * @var string
     */
    protected ?string $payerAccountNo = null;

    /**
     * 付款方名称
     * @var string
     */
    protected ?string $payerName = null;

    /**
     * 付款记录ID
     * @var int
     */
    protected ?int $paymentId = null;

    /**
     * 款项编号
     * @var string
     */
    protected ?string $paymentSerial = null;

    /**
     * 收款日期
     * @var string
     */
    protected ?string $receiveDate = null;

    /**
     * 收款方账户名
     * @var string
     */
    protected ?string $receiverAccountNo = null;

    /**
     * 收款方名称
     * @var string
     */
    protected ?string $receiverName = null;

    /**
     * 剩余金额 单位分
     * @var int
     */
    protected ?int $remainAmount = null;

    /**
     * 使用状态
     * @var int
     */
    protected ?int $useStatus = null;

    /**
     * 使用状态名称
     * @var string
     */
    protected ?string $useStatusName = null;

    /**
     * 打款金额 单位分
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 打款金额 单位分
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 银行备注
     * @return string
     */
    public function getBankRemark(): ?string
    {
        return $this->bankRemark;
    }

    /**
     * 银行备注
     * @param string $bankRemark
     * @return self
     */
    public function setBankRemark(?string $bankRemark): self
    {
        $this->bankRemark = $bankRemark;
        return $this;
    }

    /**
     * 付款方账户名
     * @return string
     */
    public function getPayerAccountNo(): ?string
    {
        return $this->payerAccountNo;
    }

    /**
     * 付款方账户名
     * @param string $payerAccountNo
     * @return self
     */
    public function setPayerAccountNo(?string $payerAccountNo): self
    {
        $this->payerAccountNo = $payerAccountNo;
        return $this;
    }

    /**
     * 付款方名称
     * @return string
     */
    public function getPayerName(): ?string
    {
        return $this->payerName;
    }

    /**
     * 付款方名称
     * @param string $payerName
     * @return self
     */
    public function setPayerName(?string $payerName): self
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * 付款记录ID
     * @return int
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }

    /**
     * 付款记录ID
     * @param int $paymentId
     * @return self
     */
    public function setPaymentId(?int $paymentId): self
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    /**
     * 款项编号
     * @return string
     */
    public function getPaymentSerial(): ?string
    {
        return $this->paymentSerial;
    }

    /**
     * 款项编号
     * @param string $paymentSerial
     * @return self
     */
    public function setPaymentSerial(?string $paymentSerial): self
    {
        $this->paymentSerial = $paymentSerial;
        return $this;
    }

    /**
     * 收款日期
     * @return string
     */
    public function getReceiveDate(): ?string
    {
        return $this->receiveDate;
    }

    /**
     * 收款日期
     * @param string $receiveDate
     * @return self
     */
    public function setReceiveDate(?string $receiveDate): self
    {
        $this->receiveDate = $receiveDate;
        return $this;
    }

    /**
     * 收款方账户名
     * @return string
     */
    public function getReceiverAccountNo(): ?string
    {
        return $this->receiverAccountNo;
    }

    /**
     * 收款方账户名
     * @param string $receiverAccountNo
     * @return self
     */
    public function setReceiverAccountNo(?string $receiverAccountNo): self
    {
        $this->receiverAccountNo = $receiverAccountNo;
        return $this;
    }

    /**
     * 收款方名称
     * @return string
     */
    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }

    /**
     * 收款方名称
     * @param string $receiverName
     * @return self
     */
    public function setReceiverName(?string $receiverName): self
    {
        $this->receiverName = $receiverName;
        return $this;
    }

    /**
     * 剩余金额 单位分
     * @return int
     */
    public function getRemainAmount(): ?int
    {
        return $this->remainAmount;
    }

    /**
     * 剩余金额 单位分
     * @param int $remainAmount
     * @return self
     */
    public function setRemainAmount(?int $remainAmount): self
    {
        $this->remainAmount = $remainAmount;
        return $this;
    }

    /**
     * 使用状态
     * @return int
     */
    public function getUseStatus(): ?int
    {
        return $this->useStatus;
    }

    /**
     * 使用状态
     * @param int $useStatus
     * @return self
     */
    public function setUseStatus(?int $useStatus): self
    {
        $this->useStatus = $useStatus;
        return $this;
    }

    /**
     * 使用状态名称
     * @return string
     */
    public function getUseStatusName(): ?string
    {
        return $this->useStatusName;
    }

    /**
     * 使用状态名称
     * @param string $useStatusName
     * @return self
     */
    public function setUseStatusName(?string $useStatusName): self
    {
        $this->useStatusName = $useStatusName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->bankRemark !== null) {
            $result['bank_remark'] = $this->bankRemark;
        }
        if ($this->payerAccountNo !== null) {
            $result['payer_account_no'] = $this->payerAccountNo;
        }
        if ($this->payerName !== null) {
            $result['payer_name'] = $this->payerName;
        }
        if ($this->paymentId !== null) {
            $result['payment_id'] = $this->paymentId;
        }
        if ($this->paymentSerial !== null) {
            $result['payment_serial'] = $this->paymentSerial;
        }
        if ($this->receiveDate !== null) {
            $result['receive_date'] = $this->receiveDate;
        }
        if ($this->receiverAccountNo !== null) {
            $result['receiver_account_no'] = $this->receiverAccountNo;
        }
        if ($this->receiverName !== null) {
            $result['receiver_name'] = $this->receiverName;
        }
        if ($this->remainAmount !== null) {
            $result['remain_amount'] = $this->remainAmount;
        }
        if ($this->useStatus !== null) {
            $result['use_status'] = $this->useStatus;
        }
        if ($this->useStatusName !== null) {
            $result['use_status_name'] = $this->useStatusName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['bank_remark'] ?? null) !== null) {
            $obj->bankRemark = (string) $v;
        }
        if (($v = $data['payer_account_no'] ?? null) !== null) {
            $obj->payerAccountNo = (string) $v;
        }
        if (($v = $data['payer_name'] ?? null) !== null) {
            $obj->payerName = (string) $v;
        }
        if (($v = $data['payment_id'] ?? null) !== null) {
            $obj->paymentId = (int) $v;
        }
        if (($v = $data['payment_serial'] ?? null) !== null) {
            $obj->paymentSerial = (string) $v;
        }
        if (($v = $data['receive_date'] ?? null) !== null) {
            $obj->receiveDate = (string) $v;
        }
        if (($v = $data['receiver_account_no'] ?? null) !== null) {
            $obj->receiverAccountNo = (string) $v;
        }
        if (($v = $data['receiver_name'] ?? null) !== null) {
            $obj->receiverName = (string) $v;
        }
        if (($v = $data['remain_amount'] ?? null) !== null) {
            $obj->remainAmount = (int) $v;
        }
        if (($v = $data['use_status'] ?? null) !== null) {
            $obj->useStatus = (int) $v;
        }
        if (($v = $data['use_status_name'] ?? null) !== null) {
            $obj->useStatusName = (string) $v;
        }
        return $obj;
    }
}
