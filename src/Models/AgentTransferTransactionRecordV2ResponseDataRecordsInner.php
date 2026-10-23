<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentTransferTransactionRecordV2ResponseDataRecordsInner implements \JsonSerializable
{
    /**
     * 总金额（元）
     * @var float
     */
    protected ?float $amount = null;

    /**
     * 非赠款金额(元)
     * @var float
     */
    protected ?float $cash = null;

    /**
     * 授信金额额（元）
     * @var float
     */
    protected ?float $creditAmount = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsDeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * 赠款金额(元)
     * @var float
     */
    protected ?float $grants = null;

    /**
     * 转账时间
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * 操作人名称
     * @var string
     */
    protected ?string $operator = null;

    /**
     * 操作人id
     * @var string
     */
    protected ?string $operatorId = null;

    /**
     * 转入方账户ID
     * @var string
     */
    protected ?string $payee = null;

    /**
     * 转入方客户ID
     * @var string
     */
    protected ?string $payeeCustomerId = null;

    /**
     * 转入方客户名称
     * @var string
     */
    protected ?string $payeeCustomerName = null;

    /**
     * 转入方一代账户ID
     * @var string
     */
    protected ?string $payeeFirstAdAgentId = null;

    /**
     * 转入方一代账户名称
     * @var string
     */
    protected ?string $payeeFirstAdAgentName = null;

    /**
     * 转入方账户名称
     * @var string
     */
    protected ?string $payeeName = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsPayeeRole
     */
    protected ?string $payeeRole = null;

    /**
     * 转入方二代账户ID
     * @var string
     */
    protected ?string $payeeSecondAdAgentId = null;

    /**
     * 业务平台
     * @var string
     */
    protected ?string $platform = null;

    /**
     * 预借款金额（元）
     * @var float
     */
    protected ?float $preloanAmount = null;

    /**
     * 预付金额（元）
     * @var float
     */
    protected ?float $prepayAmount = null;

    /**
     * 转账备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 转账时间转出方账户ID
     * @var string
     */
    protected ?string $remitter = null;

    /**
     * 转出方客户ID
     * @var string
     */
    protected ?string $remitterCustomerId = null;

    /**
     * 转出方客户名称
     * @var string
     */
    protected ?string $remitterCustomerName = null;

    /**
     * 转出方一代账户ID
     * @var string
     */
    protected ?string $remitterFirstAdAgentId = null;

    /**
     * 转出方一代账户名称
     * @var string
     */
    protected ?string $remitterFirstAdAgentName = null;

    /**
     * 转出方账户名称
     * @var string
     */
    protected ?string $remitterName = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsRemitterRole
     */
    protected ?string $remitterRole = null;

    /**
     * 转出方二代账户ID
     * @var string
     */
    protected ?string $remitterSecondAdAgentId = null;

    /**
     * 转账单编号
     * @var string
     */
    protected ?string $transferOrderSerial = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsTransferTargetPayStatus
     */
    protected ?string $transferTargetPayStatus = null;

    /**
     * 转账编号
     * @var string
     */
    protected ?string $transferTargetSerial = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsTransferType
     */
    protected ?string $transferType = null;

    /**
     * 总金额（元）
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * 总金额（元）
     * @param float $amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 非赠款金额(元)
     * @return float
     */
    public function getCash(): ?float
    {
        return $this->cash;
    }

    /**
     * 非赠款金额(元)
     * @param float $cash
     * @return self
     */
    public function setCash(?float $cash): self
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * 授信金额额（元）
     * @return float
     */
    public function getCreditAmount(): ?float
    {
        return $this->creditAmount;
    }

    /**
     * 授信金额额（元）
     * @param float $creditAmount
     * @return self
     */
    public function setCreditAmount(?float $creditAmount): self
    {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsDeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsDeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * 赠款金额(元)
     * @return float
     */
    public function getGrants(): ?float
    {
        return $this->grants;
    }

    /**
     * 赠款金额(元)
     * @param float $grants
     * @return self
     */
    public function setGrants(?float $grants): self
    {
        $this->grants = $grants;
        return $this;
    }

    /**
     * 转账时间
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * 转账时间
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * 操作人名称
     * @return string
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * 操作人名称
     * @param string $operator
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * 操作人id
     * @return string
     */
    public function getOperatorId(): ?string
    {
        return $this->operatorId;
    }

    /**
     * 操作人id
     * @param string $operatorId
     * @return self
     */
    public function setOperatorId(?string $operatorId): self
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * 转入方账户ID
     * @return string
     */
    public function getPayee(): ?string
    {
        return $this->payee;
    }

    /**
     * 转入方账户ID
     * @param string $payee
     * @return self
     */
    public function setPayee(?string $payee): self
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * 转入方客户ID
     * @return string
     */
    public function getPayeeCustomerId(): ?string
    {
        return $this->payeeCustomerId;
    }

    /**
     * 转入方客户ID
     * @param string $payeeCustomerId
     * @return self
     */
    public function setPayeeCustomerId(?string $payeeCustomerId): self
    {
        $this->payeeCustomerId = $payeeCustomerId;
        return $this;
    }

    /**
     * 转入方客户名称
     * @return string
     */
    public function getPayeeCustomerName(): ?string
    {
        return $this->payeeCustomerName;
    }

    /**
     * 转入方客户名称
     * @param string $payeeCustomerName
     * @return self
     */
    public function setPayeeCustomerName(?string $payeeCustomerName): self
    {
        $this->payeeCustomerName = $payeeCustomerName;
        return $this;
    }

    /**
     * 转入方一代账户ID
     * @return string
     */
    public function getPayeeFirstAdAgentId(): ?string
    {
        return $this->payeeFirstAdAgentId;
    }

    /**
     * 转入方一代账户ID
     * @param string $payeeFirstAdAgentId
     * @return self
     */
    public function setPayeeFirstAdAgentId(?string $payeeFirstAdAgentId): self
    {
        $this->payeeFirstAdAgentId = $payeeFirstAdAgentId;
        return $this;
    }

    /**
     * 转入方一代账户名称
     * @return string
     */
    public function getPayeeFirstAdAgentName(): ?string
    {
        return $this->payeeFirstAdAgentName;
    }

    /**
     * 转入方一代账户名称
     * @param string $payeeFirstAdAgentName
     * @return self
     */
    public function setPayeeFirstAdAgentName(?string $payeeFirstAdAgentName): self
    {
        $this->payeeFirstAdAgentName = $payeeFirstAdAgentName;
        return $this;
    }

    /**
     * 转入方账户名称
     * @return string
     */
    public function getPayeeName(): ?string
    {
        return $this->payeeName;
    }

    /**
     * 转入方账户名称
     * @param string $payeeName
     * @return self
     */
    public function setPayeeName(?string $payeeName): self
    {
        $this->payeeName = $payeeName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsPayeeRole
     */
    public function getPayeeRole(): ?string
    {
        return $this->payeeRole;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsPayeeRole $payeeRole
     * @return self
     */
    public function setPayeeRole(?string $payeeRole): self
    {
        $this->payeeRole = $payeeRole;
        return $this;
    }

    /**
     * 转入方二代账户ID
     * @return string
     */
    public function getPayeeSecondAdAgentId(): ?string
    {
        return $this->payeeSecondAdAgentId;
    }

    /**
     * 转入方二代账户ID
     * @param string $payeeSecondAdAgentId
     * @return self
     */
    public function setPayeeSecondAdAgentId(?string $payeeSecondAdAgentId): self
    {
        $this->payeeSecondAdAgentId = $payeeSecondAdAgentId;
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
     * 预借款金额（元）
     * @return float
     */
    public function getPreloanAmount(): ?float
    {
        return $this->preloanAmount;
    }

    /**
     * 预借款金额（元）
     * @param float $preloanAmount
     * @return self
     */
    public function setPreloanAmount(?float $preloanAmount): self
    {
        $this->preloanAmount = $preloanAmount;
        return $this;
    }

    /**
     * 预付金额（元）
     * @return float
     */
    public function getPrepayAmount(): ?float
    {
        return $this->prepayAmount;
    }

    /**
     * 预付金额（元）
     * @param float $prepayAmount
     * @return self
     */
    public function setPrepayAmount(?float $prepayAmount): self
    {
        $this->prepayAmount = $prepayAmount;
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
     * 转账时间转出方账户ID
     * @return string
     */
    public function getRemitter(): ?string
    {
        return $this->remitter;
    }

    /**
     * 转账时间转出方账户ID
     * @param string $remitter
     * @return self
     */
    public function setRemitter(?string $remitter): self
    {
        $this->remitter = $remitter;
        return $this;
    }

    /**
     * 转出方客户ID
     * @return string
     */
    public function getRemitterCustomerId(): ?string
    {
        return $this->remitterCustomerId;
    }

    /**
     * 转出方客户ID
     * @param string $remitterCustomerId
     * @return self
     */
    public function setRemitterCustomerId(?string $remitterCustomerId): self
    {
        $this->remitterCustomerId = $remitterCustomerId;
        return $this;
    }

    /**
     * 转出方客户名称
     * @return string
     */
    public function getRemitterCustomerName(): ?string
    {
        return $this->remitterCustomerName;
    }

    /**
     * 转出方客户名称
     * @param string $remitterCustomerName
     * @return self
     */
    public function setRemitterCustomerName(?string $remitterCustomerName): self
    {
        $this->remitterCustomerName = $remitterCustomerName;
        return $this;
    }

    /**
     * 转出方一代账户ID
     * @return string
     */
    public function getRemitterFirstAdAgentId(): ?string
    {
        return $this->remitterFirstAdAgentId;
    }

    /**
     * 转出方一代账户ID
     * @param string $remitterFirstAdAgentId
     * @return self
     */
    public function setRemitterFirstAdAgentId(?string $remitterFirstAdAgentId): self
    {
        $this->remitterFirstAdAgentId = $remitterFirstAdAgentId;
        return $this;
    }

    /**
     * 转出方一代账户名称
     * @return string
     */
    public function getRemitterFirstAdAgentName(): ?string
    {
        return $this->remitterFirstAdAgentName;
    }

    /**
     * 转出方一代账户名称
     * @param string $remitterFirstAdAgentName
     * @return self
     */
    public function setRemitterFirstAdAgentName(?string $remitterFirstAdAgentName): self
    {
        $this->remitterFirstAdAgentName = $remitterFirstAdAgentName;
        return $this;
    }

    /**
     * 转出方账户名称
     * @return string
     */
    public function getRemitterName(): ?string
    {
        return $this->remitterName;
    }

    /**
     * 转出方账户名称
     * @param string $remitterName
     * @return self
     */
    public function setRemitterName(?string $remitterName): self
    {
        $this->remitterName = $remitterName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsRemitterRole
     */
    public function getRemitterRole(): ?string
    {
        return $this->remitterRole;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsRemitterRole $remitterRole
     * @return self
     */
    public function setRemitterRole(?string $remitterRole): self
    {
        $this->remitterRole = $remitterRole;
        return $this;
    }

    /**
     * 转出方二代账户ID
     * @return string
     */
    public function getRemitterSecondAdAgentId(): ?string
    {
        return $this->remitterSecondAdAgentId;
    }

    /**
     * 转出方二代账户ID
     * @param string $remitterSecondAdAgentId
     * @return self
     */
    public function setRemitterSecondAdAgentId(?string $remitterSecondAdAgentId): self
    {
        $this->remitterSecondAdAgentId = $remitterSecondAdAgentId;
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
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsTransferTargetPayStatus
     */
    public function getTransferTargetPayStatus(): ?string
    {
        return $this->transferTargetPayStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsTransferTargetPayStatus $transferTargetPayStatus
     * @return self
     */
    public function setTransferTargetPayStatus(?string $transferTargetPayStatus): self
    {
        $this->transferTargetPayStatus = $transferTargetPayStatus;
        return $this;
    }

    /**
     * 转账编号
     * @return string
     */
    public function getTransferTargetSerial(): ?string
    {
        return $this->transferTargetSerial;
    }

    /**
     * 转账编号
     * @param string $transferTargetSerial
     * @return self
     */
    public function setTransferTargetSerial(?string $transferTargetSerial): self
    {
        $this->transferTargetSerial = $transferTargetSerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsTransferType
     */
    public function getTransferType(): ?string
    {
        return $this->transferType;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2DataRecordsTransferType $transferType
     * @return self
     */
    public function setTransferType(?string $transferType): self
    {
        $this->transferType = $transferType;
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
        if ($this->cash !== null) {
            $result['cash'] = $this->cash;
        }
        if ($this->creditAmount !== null) {
            $result['credit_amount'] = $this->creditAmount;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        if ($this->grants !== null) {
            $result['grants'] = $this->grants;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
        }
        if ($this->operatorId !== null) {
            $result['operator_id'] = $this->operatorId;
        }
        if ($this->payee !== null) {
            $result['payee'] = $this->payee;
        }
        if ($this->payeeCustomerId !== null) {
            $result['payee_customer_id'] = $this->payeeCustomerId;
        }
        if ($this->payeeCustomerName !== null) {
            $result['payee_customer_name'] = $this->payeeCustomerName;
        }
        if ($this->payeeFirstAdAgentId !== null) {
            $result['payee_first_ad_agent_id'] = $this->payeeFirstAdAgentId;
        }
        if ($this->payeeFirstAdAgentName !== null) {
            $result['payee_first_ad_agent_name'] = $this->payeeFirstAdAgentName;
        }
        if ($this->payeeName !== null) {
            $result['payee_name'] = $this->payeeName;
        }
        if ($this->payeeRole !== null) {
            $result['payee_role'] = $this->payeeRole;
        }
        if ($this->payeeSecondAdAgentId !== null) {
            $result['payee_second_ad_agent_id'] = $this->payeeSecondAdAgentId;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->preloanAmount !== null) {
            $result['preloan_amount'] = $this->preloanAmount;
        }
        if ($this->prepayAmount !== null) {
            $result['prepay_amount'] = $this->prepayAmount;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->remitter !== null) {
            $result['remitter'] = $this->remitter;
        }
        if ($this->remitterCustomerId !== null) {
            $result['remitter_customer_id'] = $this->remitterCustomerId;
        }
        if ($this->remitterCustomerName !== null) {
            $result['remitter_customer_name'] = $this->remitterCustomerName;
        }
        if ($this->remitterFirstAdAgentId !== null) {
            $result['remitter_first_ad_agent_id'] = $this->remitterFirstAdAgentId;
        }
        if ($this->remitterFirstAdAgentName !== null) {
            $result['remitter_first_ad_agent_name'] = $this->remitterFirstAdAgentName;
        }
        if ($this->remitterName !== null) {
            $result['remitter_name'] = $this->remitterName;
        }
        if ($this->remitterRole !== null) {
            $result['remitter_role'] = $this->remitterRole;
        }
        if ($this->remitterSecondAdAgentId !== null) {
            $result['remitter_second_ad_agent_id'] = $this->remitterSecondAdAgentId;
        }
        if ($this->transferOrderSerial !== null) {
            $result['transfer_order_serial'] = $this->transferOrderSerial;
        }
        if ($this->transferTargetPayStatus !== null) {
            $result['transfer_target_pay_status'] = $this->transferTargetPayStatus;
        }
        if ($this->transferTargetSerial !== null) {
            $result['transfer_target_serial'] = $this->transferTargetSerial;
        }
        if ($this->transferType !== null) {
            $result['transfer_type'] = $this->transferType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (float) $v;
        }
        if (($v = $data['cash'] ?? null) !== null) {
            $obj->cash = (float) $v;
        }
        if (($v = $data['credit_amount'] ?? null) !== null) {
            $obj->creditAmount = (float) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        if (($v = $data['grants'] ?? null) !== null) {
            $obj->grants = (float) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (string) $v;
        }
        if (($v = $data['operator_id'] ?? null) !== null) {
            $obj->operatorId = (string) $v;
        }
        if (($v = $data['payee'] ?? null) !== null) {
            $obj->payee = (string) $v;
        }
        if (($v = $data['payee_customer_id'] ?? null) !== null) {
            $obj->payeeCustomerId = (string) $v;
        }
        if (($v = $data['payee_customer_name'] ?? null) !== null) {
            $obj->payeeCustomerName = (string) $v;
        }
        if (($v = $data['payee_first_ad_agent_id'] ?? null) !== null) {
            $obj->payeeFirstAdAgentId = (string) $v;
        }
        if (($v = $data['payee_first_ad_agent_name'] ?? null) !== null) {
            $obj->payeeFirstAdAgentName = (string) $v;
        }
        if (($v = $data['payee_name'] ?? null) !== null) {
            $obj->payeeName = (string) $v;
        }
        if (($v = $data['payee_role'] ?? null) !== null) {
            $obj->payeeRole = (string) $v;
        }
        if (($v = $data['payee_second_ad_agent_id'] ?? null) !== null) {
            $obj->payeeSecondAdAgentId = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['preloan_amount'] ?? null) !== null) {
            $obj->preloanAmount = (float) $v;
        }
        if (($v = $data['prepay_amount'] ?? null) !== null) {
            $obj->prepayAmount = (float) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['remitter'] ?? null) !== null) {
            $obj->remitter = (string) $v;
        }
        if (($v = $data['remitter_customer_id'] ?? null) !== null) {
            $obj->remitterCustomerId = (string) $v;
        }
        if (($v = $data['remitter_customer_name'] ?? null) !== null) {
            $obj->remitterCustomerName = (string) $v;
        }
        if (($v = $data['remitter_first_ad_agent_id'] ?? null) !== null) {
            $obj->remitterFirstAdAgentId = (string) $v;
        }
        if (($v = $data['remitter_first_ad_agent_name'] ?? null) !== null) {
            $obj->remitterFirstAdAgentName = (string) $v;
        }
        if (($v = $data['remitter_name'] ?? null) !== null) {
            $obj->remitterName = (string) $v;
        }
        if (($v = $data['remitter_role'] ?? null) !== null) {
            $obj->remitterRole = (string) $v;
        }
        if (($v = $data['remitter_second_ad_agent_id'] ?? null) !== null) {
            $obj->remitterSecondAdAgentId = (string) $v;
        }
        if (($v = $data['transfer_order_serial'] ?? null) !== null) {
            $obj->transferOrderSerial = (string) $v;
        }
        if (($v = $data['transfer_target_pay_status'] ?? null) !== null) {
            $obj->transferTargetPayStatus = (string) $v;
        }
        if (($v = $data['transfer_target_serial'] ?? null) !== null) {
            $obj->transferTargetSerial = (string) $v;
        }
        if (($v = $data['transfer_type'] ?? null) !== null) {
            $obj->transferType = (string) $v;
        }
        return $obj;
    }
}
