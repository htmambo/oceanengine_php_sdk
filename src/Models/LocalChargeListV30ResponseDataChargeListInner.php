<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalChargeListV30ResponseDataChargeListInner implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 广告主名称
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * 充值金额，单位分，需除以100使用
     * @var int
     */
    protected ?int $amount = null;

    /**
     * 撤销金额，单位分，需除以100使用
     * @var int
     */
    protected ?int $cancelAmount = null;

    /**
     * 充值来源中文描述
     * @var string
     */
    protected ?string $chargeMethodName = null;

    /**
     * 充值单ID
     * @var int
     */
    protected ?int $chargeOrderId = null;

    /**
     * 充值编号
     * @var string
     */
    protected ?string $chargeSerial = null;

    /**
     * 充值状态中文描述
     * @var string
     */
    protected ?string $chargeStatusName = null;

    /**
     * 支付方式中文描述
     * @var string
     */
    protected ?string $paymentChannelName = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 广告主ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 广告主名称
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * 广告主名称
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * 充值金额，单位分，需除以100使用
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 充值金额，单位分，需除以100使用
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 撤销金额，单位分，需除以100使用
     * @return int
     */
    public function getCancelAmount(): ?int
    {
        return $this->cancelAmount;
    }

    /**
     * 撤销金额，单位分，需除以100使用
     * @param int $cancelAmount
     * @return self
     */
    public function setCancelAmount(?int $cancelAmount): self
    {
        $this->cancelAmount = $cancelAmount;
        return $this;
    }

    /**
     * 充值来源中文描述
     * @return string
     */
    public function getChargeMethodName(): ?string
    {
        return $this->chargeMethodName;
    }

    /**
     * 充值来源中文描述
     * @param string $chargeMethodName
     * @return self
     */
    public function setChargeMethodName(?string $chargeMethodName): self
    {
        $this->chargeMethodName = $chargeMethodName;
        return $this;
    }

    /**
     * 充值单ID
     * @return int
     */
    public function getChargeOrderId(): ?int
    {
        return $this->chargeOrderId;
    }

    /**
     * 充值单ID
     * @param int $chargeOrderId
     * @return self
     */
    public function setChargeOrderId(?int $chargeOrderId): self
    {
        $this->chargeOrderId = $chargeOrderId;
        return $this;
    }

    /**
     * 充值编号
     * @return string
     */
    public function getChargeSerial(): ?string
    {
        return $this->chargeSerial;
    }

    /**
     * 充值编号
     * @param string $chargeSerial
     * @return self
     */
    public function setChargeSerial(?string $chargeSerial): self
    {
        $this->chargeSerial = $chargeSerial;
        return $this;
    }

    /**
     * 充值状态中文描述
     * @return string
     */
    public function getChargeStatusName(): ?string
    {
        return $this->chargeStatusName;
    }

    /**
     * 充值状态中文描述
     * @param string $chargeStatusName
     * @return self
     */
    public function setChargeStatusName(?string $chargeStatusName): self
    {
        $this->chargeStatusName = $chargeStatusName;
        return $this;
    }

    /**
     * 支付方式中文描述
     * @return string
     */
    public function getPaymentChannelName(): ?string
    {
        return $this->paymentChannelName;
    }

    /**
     * 支付方式中文描述
     * @param string $paymentChannelName
     * @return self
     */
    public function setPaymentChannelName(?string $paymentChannelName): self
    {
        $this->paymentChannelName = $paymentChannelName;
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
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->cancelAmount !== null) {
            $result['cancel_amount'] = $this->cancelAmount;
        }
        if ($this->chargeMethodName !== null) {
            $result['charge_method_name'] = $this->chargeMethodName;
        }
        if ($this->chargeOrderId !== null) {
            $result['charge_order_id'] = $this->chargeOrderId;
        }
        if ($this->chargeSerial !== null) {
            $result['charge_serial'] = $this->chargeSerial;
        }
        if ($this->chargeStatusName !== null) {
            $result['charge_status_name'] = $this->chargeStatusName;
        }
        if ($this->paymentChannelName !== null) {
            $result['payment_channel_name'] = $this->paymentChannelName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['cancel_amount'] ?? null) !== null) {
            $obj->cancelAmount = (int) $v;
        }
        if (($v = $data['charge_method_name'] ?? null) !== null) {
            $obj->chargeMethodName = (string) $v;
        }
        if (($v = $data['charge_order_id'] ?? null) !== null) {
            $obj->chargeOrderId = (int) $v;
        }
        if (($v = $data['charge_serial'] ?? null) !== null) {
            $obj->chargeSerial = (string) $v;
        }
        if (($v = $data['charge_status_name'] ?? null) !== null) {
            $obj->chargeStatusName = (string) $v;
        }
        if (($v = $data['payment_channel_name'] ?? null) !== null) {
            $obj->paymentChannelName = (string) $v;
        }
        return $obj;
    }
}
