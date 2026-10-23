<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentTransferTransactionRecordV2Filtering implements \JsonSerializable
{
    /**
     * 转入/转出方账户
     * @var int[]
     */
    protected ?array $accountIds = null;

    /**
     * 转入/转出方客户
     * @var int[]
     */
    protected ?array $customerIds = null;

    /**
     * 操作人
     * @var int[]
     */
    protected ?array $operatorIds = null;

    /**
     * 转入方客户
     * @var int[]
     */
    protected ?array $payeeCustomerIds = null;

    /**
     * 转入方代理商账户
     * @var int
     */
    protected ?int $payeeFirstAdAgentId = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringPayeeType
     */
    protected ?string $payeeType = null;

    /**
     * 转入方账号
     * @var int[]
     */
    protected ?array $payees = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringPlatform
     */
    protected ?string $platform = null;

    /**
     * 转出方客户
     * @var int[]
     */
    protected ?array $remitterCustomerIds = null;

    /**
     * 转出方代理商账户
     * @var int
     */
    protected ?int $remitterFirstAdAgentId = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringRemitterType
     */
    protected ?string $remitterType = null;

    /**
     * 转出方账户
     * @var int[]
     */
    protected ?array $remitters = null;

    /**
     * 转账单编号
     * @var string
     */
    protected ?string $transferOrderSerial = null;

    /**
     * 转账编号
     * @var string
     */
    protected ?string $transferTargetSerial = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringTransferType
     */
    protected ?string $transferType = null;

    /**
     * 转入/转出方账户
     * @return int[]
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * 转入/转出方账户
     * @param int[] $accountIds
     * @return self
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    /**
     * 转入/转出方客户
     * @return int[]
     */
    public function getCustomerIds(): ?array
    {
        return $this->customerIds;
    }

    /**
     * 转入/转出方客户
     * @param int[] $customerIds
     * @return self
     */
    public function setCustomerIds(?array $customerIds): self
    {
        $this->customerIds = $customerIds;
        return $this;
    }

    /**
     * 操作人
     * @return int[]
     */
    public function getOperatorIds(): ?array
    {
        return $this->operatorIds;
    }

    /**
     * 操作人
     * @param int[] $operatorIds
     * @return self
     */
    public function setOperatorIds(?array $operatorIds): self
    {
        $this->operatorIds = $operatorIds;
        return $this;
    }

    /**
     * 转入方客户
     * @return int[]
     */
    public function getPayeeCustomerIds(): ?array
    {
        return $this->payeeCustomerIds;
    }

    /**
     * 转入方客户
     * @param int[] $payeeCustomerIds
     * @return self
     */
    public function setPayeeCustomerIds(?array $payeeCustomerIds): self
    {
        $this->payeeCustomerIds = $payeeCustomerIds;
        return $this;
    }

    /**
     * 转入方代理商账户
     * @return int
     */
    public function getPayeeFirstAdAgentId(): ?int
    {
        return $this->payeeFirstAdAgentId;
    }

    /**
     * 转入方代理商账户
     * @param int $payeeFirstAdAgentId
     * @return self
     */
    public function setPayeeFirstAdAgentId(?int $payeeFirstAdAgentId): self
    {
        $this->payeeFirstAdAgentId = $payeeFirstAdAgentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringPayeeType
     */
    public function getPayeeType(): ?string
    {
        return $this->payeeType;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringPayeeType $payeeType
     * @return self
     */
    public function setPayeeType(?string $payeeType): self
    {
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * 转入方账号
     * @return int[]
     */
    public function getPayees(): ?array
    {
        return $this->payees;
    }

    /**
     * 转入方账号
     * @param int[] $payees
     * @return self
     */
    public function setPayees(?array $payees): self
    {
        $this->payees = $payees;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 转出方客户
     * @return int[]
     */
    public function getRemitterCustomerIds(): ?array
    {
        return $this->remitterCustomerIds;
    }

    /**
     * 转出方客户
     * @param int[] $remitterCustomerIds
     * @return self
     */
    public function setRemitterCustomerIds(?array $remitterCustomerIds): self
    {
        $this->remitterCustomerIds = $remitterCustomerIds;
        return $this;
    }

    /**
     * 转出方代理商账户
     * @return int
     */
    public function getRemitterFirstAdAgentId(): ?int
    {
        return $this->remitterFirstAdAgentId;
    }

    /**
     * 转出方代理商账户
     * @param int $remitterFirstAdAgentId
     * @return self
     */
    public function setRemitterFirstAdAgentId(?int $remitterFirstAdAgentId): self
    {
        $this->remitterFirstAdAgentId = $remitterFirstAdAgentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringRemitterType
     */
    public function getRemitterType(): ?string
    {
        return $this->remitterType;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringRemitterType $remitterType
     * @return self
     */
    public function setRemitterType(?string $remitterType): self
    {
        $this->remitterType = $remitterType;
        return $this;
    }

    /**
     * 转出方账户
     * @return int[]
     */
    public function getRemitters(): ?array
    {
        return $this->remitters;
    }

    /**
     * 转出方账户
     * @param int[] $remitters
     * @return self
     */
    public function setRemitters(?array $remitters): self
    {
        $this->remitters = $remitters;
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
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringTransferType
     */
    public function getTransferType(): ?string
    {
        return $this->transferType;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2FilteringTransferType $transferType
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
        if ($this->accountIds !== null) {
            $result['account_ids'] = $this->accountIds;
        }
        if ($this->customerIds !== null) {
            $result['customer_ids'] = $this->customerIds;
        }
        if ($this->operatorIds !== null) {
            $result['operator_ids'] = $this->operatorIds;
        }
        if ($this->payeeCustomerIds !== null) {
            $result['payee_customer_ids'] = $this->payeeCustomerIds;
        }
        if ($this->payeeFirstAdAgentId !== null) {
            $result['payee_first_ad_agent_id'] = $this->payeeFirstAdAgentId;
        }
        if ($this->payeeType !== null) {
            $result['payee_type'] = $this->payeeType;
        }
        if ($this->payees !== null) {
            $result['payees'] = $this->payees;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->remitterCustomerIds !== null) {
            $result['remitter_customer_ids'] = $this->remitterCustomerIds;
        }
        if ($this->remitterFirstAdAgentId !== null) {
            $result['remitter_first_ad_agent_id'] = $this->remitterFirstAdAgentId;
        }
        if ($this->remitterType !== null) {
            $result['remitter_type'] = $this->remitterType;
        }
        if ($this->remitters !== null) {
            $result['remitters'] = $this->remitters;
        }
        if ($this->transferOrderSerial !== null) {
            $result['transfer_order_serial'] = $this->transferOrderSerial;
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
        if (($v = $data['account_ids'] ?? null) !== null && is_array($v)) {
            $obj->accountIds = $v;
        }
        if (($v = $data['customer_ids'] ?? null) !== null && is_array($v)) {
            $obj->customerIds = $v;
        }
        if (($v = $data['operator_ids'] ?? null) !== null && is_array($v)) {
            $obj->operatorIds = $v;
        }
        if (($v = $data['payee_customer_ids'] ?? null) !== null && is_array($v)) {
            $obj->payeeCustomerIds = $v;
        }
        if (($v = $data['payee_first_ad_agent_id'] ?? null) !== null) {
            $obj->payeeFirstAdAgentId = (int) $v;
        }
        if (($v = $data['payee_type'] ?? null) !== null) {
            $obj->payeeType = (string) $v;
        }
        if (($v = $data['payees'] ?? null) !== null && is_array($v)) {
            $obj->payees = $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['remitter_customer_ids'] ?? null) !== null && is_array($v)) {
            $obj->remitterCustomerIds = $v;
        }
        if (($v = $data['remitter_first_ad_agent_id'] ?? null) !== null) {
            $obj->remitterFirstAdAgentId = (int) $v;
        }
        if (($v = $data['remitter_type'] ?? null) !== null) {
            $obj->remitterType = (string) $v;
        }
        if (($v = $data['remitters'] ?? null) !== null && is_array($v)) {
            $obj->remitters = $v;
        }
        if (($v = $data['transfer_order_serial'] ?? null) !== null) {
            $obj->transferOrderSerial = (string) $v;
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
