<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvRechargeRechargeRecordV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * 账户id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 账户名称
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * 账户类型
     * @var string
     */
    protected ?string $accountType = null;

    /**
     * 充值金额
     * @var string
     */
    protected ?string $amount = null;

    /**
     * 资金池投放类型
     * @var string
     */
    protected ?string $capitalPoolDeliveryType = null;

    /**
     * 充值类型
     * @var string
     */
    protected ?string $capitalPoolDetailType = null;

    /**
     * 余额类型
     * @var string
     */
    protected ?string $capitalSourceName = null;

    /**
     * 合同id
     * @var int
     */
    protected ?int $contractId = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 客户id
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * 客户名称
     * @var string
     */
    protected ?string $customerName = null;

    /**
     * 充值来源
     * @var string
     */
    protected ?string $onlineCharge = null;

    /**
     * 操作人id
     * @var int
     */
    protected ?int $operatorId = null;

    /**
     * 操作人名称
     * @var string
     */
    protected ?string $operatorName = null;

    /**
     * 支付方式
     * @var string
     */
    protected ?string $paymentChannelName = null;

    /**
     * 支付来源
     * @var string
     */
    protected ?string $paymentSource = null;

    /**
     * 业务平台
     * @var string
     */
    protected ?string $platform = null;

    /**
     * 充值时间
     * @var string
     */
    protected ?string $statTime = null;

    /**
     * 交易流水号
     * @var string
     */
    protected ?string $transactionId = null;

    /**
     * 账户id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户名称
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * 账户名称
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * 账户类型
     * @return string
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * 账户类型
     * @param string $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 充值金额
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * 充值金额
     * @param string $amount
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 资金池投放类型
     * @return string
     */
    public function getCapitalPoolDeliveryType(): ?string
    {
        return $this->capitalPoolDeliveryType;
    }

    /**
     * 资金池投放类型
     * @param string $capitalPoolDeliveryType
     * @return self
     */
    public function setCapitalPoolDeliveryType(?string $capitalPoolDeliveryType): self
    {
        $this->capitalPoolDeliveryType = $capitalPoolDeliveryType;
        return $this;
    }

    /**
     * 充值类型
     * @return string
     */
    public function getCapitalPoolDetailType(): ?string
    {
        return $this->capitalPoolDetailType;
    }

    /**
     * 充值类型
     * @param string $capitalPoolDetailType
     * @return self
     */
    public function setCapitalPoolDetailType(?string $capitalPoolDetailType): self
    {
        $this->capitalPoolDetailType = $capitalPoolDetailType;
        return $this;
    }

    /**
     * 余额类型
     * @return string
     */
    public function getCapitalSourceName(): ?string
    {
        return $this->capitalSourceName;
    }

    /**
     * 余额类型
     * @param string $capitalSourceName
     * @return self
     */
    public function setCapitalSourceName(?string $capitalSourceName): self
    {
        $this->capitalSourceName = $capitalSourceName;
        return $this;
    }

    /**
     * 合同id
     * @return int
     */
    public function getContractId(): ?int
    {
        return $this->contractId;
    }

    /**
     * 合同id
     * @param int $contractId
     * @return self
     */
    public function setContractId(?int $contractId): self
    {
        $this->contractId = $contractId;
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
     * 客户id
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 客户id
     * @param int $customerId
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * 客户名称
     * @return string
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * 客户名称
     * @param string $customerName
     * @return self
     */
    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * 充值来源
     * @return string
     */
    public function getOnlineCharge(): ?string
    {
        return $this->onlineCharge;
    }

    /**
     * 充值来源
     * @param string $onlineCharge
     * @return self
     */
    public function setOnlineCharge(?string $onlineCharge): self
    {
        $this->onlineCharge = $onlineCharge;
        return $this;
    }

    /**
     * 操作人id
     * @return int
     */
    public function getOperatorId(): ?int
    {
        return $this->operatorId;
    }

    /**
     * 操作人id
     * @param int $operatorId
     * @return self
     */
    public function setOperatorId(?int $operatorId): self
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * 操作人名称
     * @return string
     */
    public function getOperatorName(): ?string
    {
        return $this->operatorName;
    }

    /**
     * 操作人名称
     * @param string $operatorName
     * @return self
     */
    public function setOperatorName(?string $operatorName): self
    {
        $this->operatorName = $operatorName;
        return $this;
    }

    /**
     * 支付方式
     * @return string
     */
    public function getPaymentChannelName(): ?string
    {
        return $this->paymentChannelName;
    }

    /**
     * 支付方式
     * @param string $paymentChannelName
     * @return self
     */
    public function setPaymentChannelName(?string $paymentChannelName): self
    {
        $this->paymentChannelName = $paymentChannelName;
        return $this;
    }

    /**
     * 支付来源
     * @return string
     */
    public function getPaymentSource(): ?string
    {
        return $this->paymentSource;
    }

    /**
     * 支付来源
     * @param string $paymentSource
     * @return self
     */
    public function setPaymentSource(?string $paymentSource): self
    {
        $this->paymentSource = $paymentSource;
        return $this;
    }

    /**
     * 业务平台
     * @return string
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * 业务平台
     * @param string $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 充值时间
     * @return string
     */
    public function getStatTime(): ?string
    {
        return $this->statTime;
    }

    /**
     * 充值时间
     * @param string $statTime
     * @return self
     */
    public function setStatTime(?string $statTime): self
    {
        $this->statTime = $statTime;
        return $this;
    }

    /**
     * 交易流水号
     * @return string
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * 交易流水号
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;
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
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->capitalPoolDeliveryType !== null) {
            $result['capital_pool_delivery_type'] = $this->capitalPoolDeliveryType;
        }
        if ($this->capitalPoolDetailType !== null) {
            $result['capital_pool_detail_type'] = $this->capitalPoolDetailType;
        }
        if ($this->capitalSourceName !== null) {
            $result['capital_source_name'] = $this->capitalSourceName;
        }
        if ($this->contractId !== null) {
            $result['contract_id'] = $this->contractId;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->customerName !== null) {
            $result['customer_name'] = $this->customerName;
        }
        if ($this->onlineCharge !== null) {
            $result['online_charge'] = $this->onlineCharge;
        }
        if ($this->operatorId !== null) {
            $result['operator_id'] = $this->operatorId;
        }
        if ($this->operatorName !== null) {
            $result['operator_name'] = $this->operatorName;
        }
        if ($this->paymentChannelName !== null) {
            $result['payment_channel_name'] = $this->paymentChannelName;
        }
        if ($this->paymentSource !== null) {
            $result['payment_source'] = $this->paymentSource;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->statTime !== null) {
            $result['stat_time'] = $this->statTime;
        }
        if ($this->transactionId !== null) {
            $result['transaction_id'] = $this->transactionId;
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
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (string) $v;
        }
        if (($v = $data['capital_pool_delivery_type'] ?? null) !== null) {
            $obj->capitalPoolDeliveryType = (string) $v;
        }
        if (($v = $data['capital_pool_detail_type'] ?? null) !== null) {
            $obj->capitalPoolDetailType = (string) $v;
        }
        if (($v = $data['capital_source_name'] ?? null) !== null) {
            $obj->capitalSourceName = (string) $v;
        }
        if (($v = $data['contract_id'] ?? null) !== null) {
            $obj->contractId = (int) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['customer_name'] ?? null) !== null) {
            $obj->customerName = (string) $v;
        }
        if (($v = $data['online_charge'] ?? null) !== null) {
            $obj->onlineCharge = (string) $v;
        }
        if (($v = $data['operator_id'] ?? null) !== null) {
            $obj->operatorId = (int) $v;
        }
        if (($v = $data['operator_name'] ?? null) !== null) {
            $obj->operatorName = (string) $v;
        }
        if (($v = $data['payment_channel_name'] ?? null) !== null) {
            $obj->paymentChannelName = (string) $v;
        }
        if (($v = $data['payment_source'] ?? null) !== null) {
            $obj->paymentSource = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['stat_time'] ?? null) !== null) {
            $obj->statTime = (string) $v;
        }
        if (($v = $data['transaction_id'] ?? null) !== null) {
            $obj->transactionId = (string) $v;
        }
        return $obj;
    }
}
