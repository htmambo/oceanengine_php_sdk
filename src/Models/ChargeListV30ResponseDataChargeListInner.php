<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeListV30ResponseDataChargeListInner implements \JsonSerializable
{
    /**
     * 广告主账号名称
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * 广告主账号ID
     * @var int
     */
    protected ?int $acountId = null;

    /**
     * 充值金额
     * @var int
     */
    protected ?int $amount = null;

    /**
     * 撤销金额
     * @var int
     */
    protected ?int $cancelAmount = null;

    /**
     * 充值单号
     * @var int
     */
    protected ?int $chargeOrderId = null;

    /**
     * 充值编号
     * @var string
     */
    protected ?string $chargeSerial = null;

    /**
     * 充值来源名称
     * @var string
     */
    protected ?string $chargeSourceName = null;

    /**
     * 充值状态名称
     * @var string
     */
    protected ?string $chargeStatusName = null;

    /**
     * 支付当渠道
     * @var string
     */
    protected ?string $paymentChannelName = null;

    /**
     * 广告主账号名称
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * 广告主账号名称
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * 广告主账号ID
     * @return int
     */
    public function getAcountId(): ?int
    {
        return $this->acountId;
    }

    /**
     * 广告主账号ID
     * @param int $acountId
     * @return self
     */
    public function setAcountId(?int $acountId): self
    {
        $this->acountId = $acountId;
        return $this;
    }

    /**
     * 充值金额
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 充值金额
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 撤销金额
     * @return int
     */
    public function getCancelAmount(): ?int
    {
        return $this->cancelAmount;
    }

    /**
     * 撤销金额
     * @param int $cancelAmount
     * @return self
     */
    public function setCancelAmount(?int $cancelAmount): self
    {
        $this->cancelAmount = $cancelAmount;
        return $this;
    }

    /**
     * 充值单号
     * @return int
     */
    public function getChargeOrderId(): ?int
    {
        return $this->chargeOrderId;
    }

    /**
     * 充值单号
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
     * 充值来源名称
     * @return string
     */
    public function getChargeSourceName(): ?string
    {
        return $this->chargeSourceName;
    }

    /**
     * 充值来源名称
     * @param string $chargeSourceName
     * @return self
     */
    public function setChargeSourceName(?string $chargeSourceName): self
    {
        $this->chargeSourceName = $chargeSourceName;
        return $this;
    }

    /**
     * 充值状态名称
     * @return string
     */
    public function getChargeStatusName(): ?string
    {
        return $this->chargeStatusName;
    }

    /**
     * 充值状态名称
     * @param string $chargeStatusName
     * @return self
     */
    public function setChargeStatusName(?string $chargeStatusName): self
    {
        $this->chargeStatusName = $chargeStatusName;
        return $this;
    }

    /**
     * 支付当渠道
     * @return string
     */
    public function getPaymentChannelName(): ?string
    {
        return $this->paymentChannelName;
    }

    /**
     * 支付当渠道
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
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        if ($this->acountId !== null) {
            $result['acount_id'] = $this->acountId;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->cancelAmount !== null) {
            $result['cancel_amount'] = $this->cancelAmount;
        }
        if ($this->chargeOrderId !== null) {
            $result['charge_order_id'] = $this->chargeOrderId;
        }
        if ($this->chargeSerial !== null) {
            $result['charge_serial'] = $this->chargeSerial;
        }
        if ($this->chargeSourceName !== null) {
            $result['charge_source_name'] = $this->chargeSourceName;
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
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['acount_id'] ?? null) !== null) {
            $obj->acountId = (int) $v;
        }
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['cancel_amount'] ?? null) !== null) {
            $obj->cancelAmount = (int) $v;
        }
        if (($v = $data['charge_order_id'] ?? null) !== null) {
            $obj->chargeOrderId = (int) $v;
        }
        if (($v = $data['charge_serial'] ?? null) !== null) {
            $obj->chargeSerial = (string) $v;
        }
        if (($v = $data['charge_source_name'] ?? null) !== null) {
            $obj->chargeSourceName = (string) $v;
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
