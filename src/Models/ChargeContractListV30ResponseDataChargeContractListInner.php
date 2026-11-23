<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeContractListV30ResponseDataChargeContractListInner implements \JsonSerializable
{
    /**
     * 允许的资金池投放方式
     * @var int[]
     */
    protected ?array $allowBillingDeliveryTypeList = null;

    /**
     * 审批状态
     * @var int
     */
    protected ?int $approvalStatus = null;

    /**
     * 归档状态 1 未归档 2 归档中 3已归档
     * @var int
     */
    protected ?int $archiveStatus = null;

    /**
     * 可剩余充值金额 单位 分
     * @var int
     */
    protected ?int $chargeRemainAmount = null;

    /**
     * 合同结束日期 yyyy-MM-dd
     * @var string
     */
    protected ?string $contractEndDate = null;

    /**
     * 合同ID
     * @var int
     */
    protected ?int $contractId = null;

    /**
     * 合同名称
     * @var string
     */
    protected ?string $contractName = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 合同开始日期 yyyy-MM-dd
     * @var string
     */
    protected ?string $contractStartDate = null;

    /**
     * 合同状态
     * @var int
     */
    protected ?int $contractStatus = null;

    /**
     * 合同状态名称
     * @var string
     */
    protected ?string $contractStatusName = null;

    /**
     * 合同主体名称
     * @var string
     */
    protected ?string $contractSubjectName = null;

    /**
     * 合同类型
     * @var int
     */
    protected ?int $contractType = null;

    /**
     * 合同类型名称
     * @var string
     */
    protected ?string $contractTypeName = null;

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
     * 客户类型
     * @var int
     */
    protected ?int $customerType = null;

    /**
     * 是否虚拟合同
     * @var bool
     */
    protected ?bool $isVirtual = null;

    /**
     * 老合同ID
     * @var int
     */
    protected ?int $oldContractId = null;

    /**
     * 老合同编号
     * @var string
     */
    protected ?string $oldContractSerial = null;

    /**
     * 支付方式和投放方式的映射
     * @var array<string,string[]>
     */
    protected ?array $paymentThrowDict = null;

    /**
     * 合同支付类型名称
     * @var string[]
     */
    protected ?array $paymentTypeNames = null;

    /**
     * 合同支付类型
     * @var int[]
     */
    protected ?array $paymentTypes = null;

    /**
     * 合同主体id
     * @var int
     */
    protected ?int $subjectId = null;

    /**
     * 合同投放方式名称
     * @var string[]
     */
    protected ?array $throwCodeNames = null;

    /**
     * 合同投放方式
     * @var string[]
     */
    protected ?array $throwCodes = null;

    /**
     * 允许的资金池投放方式
     * @return int[]
     */
    public function getAllowBillingDeliveryTypeList(): ?array
    {
        return $this->allowBillingDeliveryTypeList;
    }

    /**
     * 允许的资金池投放方式
     * @param int[] $allowBillingDeliveryTypeList
     * @return self
     */
    public function setAllowBillingDeliveryTypeList(?array $allowBillingDeliveryTypeList): self
    {
        $this->allowBillingDeliveryTypeList = $allowBillingDeliveryTypeList;
        return $this;
    }

    /**
     * 审批状态
     * @return int
     */
    public function getApprovalStatus(): ?int
    {
        return $this->approvalStatus;
    }

    /**
     * 审批状态
     * @param int $approvalStatus
     * @return self
     */
    public function setApprovalStatus(?int $approvalStatus): self
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * 归档状态 1 未归档 2 归档中 3已归档
     * @return int
     */
    public function getArchiveStatus(): ?int
    {
        return $this->archiveStatus;
    }

    /**
     * 归档状态 1 未归档 2 归档中 3已归档
     * @param int $archiveStatus
     * @return self
     */
    public function setArchiveStatus(?int $archiveStatus): self
    {
        $this->archiveStatus = $archiveStatus;
        return $this;
    }

    /**
     * 可剩余充值金额 单位 分
     * @return int
     */
    public function getChargeRemainAmount(): ?int
    {
        return $this->chargeRemainAmount;
    }

    /**
     * 可剩余充值金额 单位 分
     * @param int $chargeRemainAmount
     * @return self
     */
    public function setChargeRemainAmount(?int $chargeRemainAmount): self
    {
        $this->chargeRemainAmount = $chargeRemainAmount;
        return $this;
    }

    /**
     * 合同结束日期 yyyy-MM-dd
     * @return string
     */
    public function getContractEndDate(): ?string
    {
        return $this->contractEndDate;
    }

    /**
     * 合同结束日期 yyyy-MM-dd
     * @param string $contractEndDate
     * @return self
     */
    public function setContractEndDate(?string $contractEndDate): self
    {
        $this->contractEndDate = $contractEndDate;
        return $this;
    }

    /**
     * 合同ID
     * @return int
     */
    public function getContractId(): ?int
    {
        return $this->contractId;
    }

    /**
     * 合同ID
     * @param int $contractId
     * @return self
     */
    public function setContractId(?int $contractId): self
    {
        $this->contractId = $contractId;
        return $this;
    }

    /**
     * 合同名称
     * @return string
     */
    public function getContractName(): ?string
    {
        return $this->contractName;
    }

    /**
     * 合同名称
     * @param string $contractName
     * @return self
     */
    public function setContractName(?string $contractName): self
    {
        $this->contractName = $contractName;
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
     * 合同开始日期 yyyy-MM-dd
     * @return string
     */
    public function getContractStartDate(): ?string
    {
        return $this->contractStartDate;
    }

    /**
     * 合同开始日期 yyyy-MM-dd
     * @param string $contractStartDate
     * @return self
     */
    public function setContractStartDate(?string $contractStartDate): self
    {
        $this->contractStartDate = $contractStartDate;
        return $this;
    }

    /**
     * 合同状态
     * @return int
     */
    public function getContractStatus(): ?int
    {
        return $this->contractStatus;
    }

    /**
     * 合同状态
     * @param int $contractStatus
     * @return self
     */
    public function setContractStatus(?int $contractStatus): self
    {
        $this->contractStatus = $contractStatus;
        return $this;
    }

    /**
     * 合同状态名称
     * @return string
     */
    public function getContractStatusName(): ?string
    {
        return $this->contractStatusName;
    }

    /**
     * 合同状态名称
     * @param string $contractStatusName
     * @return self
     */
    public function setContractStatusName(?string $contractStatusName): self
    {
        $this->contractStatusName = $contractStatusName;
        return $this;
    }

    /**
     * 合同主体名称
     * @return string
     */
    public function getContractSubjectName(): ?string
    {
        return $this->contractSubjectName;
    }

    /**
     * 合同主体名称
     * @param string $contractSubjectName
     * @return self
     */
    public function setContractSubjectName(?string $contractSubjectName): self
    {
        $this->contractSubjectName = $contractSubjectName;
        return $this;
    }

    /**
     * 合同类型
     * @return int
     */
    public function getContractType(): ?int
    {
        return $this->contractType;
    }

    /**
     * 合同类型
     * @param int $contractType
     * @return self
     */
    public function setContractType(?int $contractType): self
    {
        $this->contractType = $contractType;
        return $this;
    }

    /**
     * 合同类型名称
     * @return string
     */
    public function getContractTypeName(): ?string
    {
        return $this->contractTypeName;
    }

    /**
     * 合同类型名称
     * @param string $contractTypeName
     * @return self
     */
    public function setContractTypeName(?string $contractTypeName): self
    {
        $this->contractTypeName = $contractTypeName;
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
     * 客户类型
     * @return int
     */
    public function getCustomerType(): ?int
    {
        return $this->customerType;
    }

    /**
     * 客户类型
     * @param int $customerType
     * @return self
     */
    public function setCustomerType(?int $customerType): self
    {
        $this->customerType = $customerType;
        return $this;
    }

    /**
     * 是否虚拟合同
     * @return bool
     */
    public function getIsVirtual(): ?bool
    {
        return $this->isVirtual;
    }

    /**
     * 是否虚拟合同
     * @param bool $isVirtual
     * @return self
     */
    public function setIsVirtual(?bool $isVirtual): self
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }

    /**
     * 老合同ID
     * @return int
     */
    public function getOldContractId(): ?int
    {
        return $this->oldContractId;
    }

    /**
     * 老合同ID
     * @param int $oldContractId
     * @return self
     */
    public function setOldContractId(?int $oldContractId): self
    {
        $this->oldContractId = $oldContractId;
        return $this;
    }

    /**
     * 老合同编号
     * @return string
     */
    public function getOldContractSerial(): ?string
    {
        return $this->oldContractSerial;
    }

    /**
     * 老合同编号
     * @param string $oldContractSerial
     * @return self
     */
    public function setOldContractSerial(?string $oldContractSerial): self
    {
        $this->oldContractSerial = $oldContractSerial;
        return $this;
    }

    /**
     * 支付方式和投放方式的映射
     * @return array<string,string[]>
     */
    public function getPaymentThrowDict(): ?array
    {
        return $this->paymentThrowDict;
    }

    /**
     * 支付方式和投放方式的映射
     * @param array<string,string[]> $paymentThrowDict
     * @return self
     */
    public function setPaymentThrowDict(?array $paymentThrowDict): self
    {
        $this->paymentThrowDict = $paymentThrowDict;
        return $this;
    }

    /**
     * 合同支付类型名称
     * @return string[]
     */
    public function getPaymentTypeNames(): ?array
    {
        return $this->paymentTypeNames;
    }

    /**
     * 合同支付类型名称
     * @param string[] $paymentTypeNames
     * @return self
     */
    public function setPaymentTypeNames(?array $paymentTypeNames): self
    {
        $this->paymentTypeNames = $paymentTypeNames;
        return $this;
    }

    /**
     * 合同支付类型
     * @return int[]
     */
    public function getPaymentTypes(): ?array
    {
        return $this->paymentTypes;
    }

    /**
     * 合同支付类型
     * @param int[] $paymentTypes
     * @return self
     */
    public function setPaymentTypes(?array $paymentTypes): self
    {
        $this->paymentTypes = $paymentTypes;
        return $this;
    }

    /**
     * 合同主体id
     * @return int
     */
    public function getSubjectId(): ?int
    {
        return $this->subjectId;
    }

    /**
     * 合同主体id
     * @param int $subjectId
     * @return self
     */
    public function setSubjectId(?int $subjectId): self
    {
        $this->subjectId = $subjectId;
        return $this;
    }

    /**
     * 合同投放方式名称
     * @return string[]
     */
    public function getThrowCodeNames(): ?array
    {
        return $this->throwCodeNames;
    }

    /**
     * 合同投放方式名称
     * @param string[] $throwCodeNames
     * @return self
     */
    public function setThrowCodeNames(?array $throwCodeNames): self
    {
        $this->throwCodeNames = $throwCodeNames;
        return $this;
    }

    /**
     * 合同投放方式
     * @return string[]
     */
    public function getThrowCodes(): ?array
    {
        return $this->throwCodes;
    }

    /**
     * 合同投放方式
     * @param string[] $throwCodes
     * @return self
     */
    public function setThrowCodes(?array $throwCodes): self
    {
        $this->throwCodes = $throwCodes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allowBillingDeliveryTypeList !== null) {
            $result['allow_billing_delivery_type_list'] = $this->allowBillingDeliveryTypeList;
        }
        if ($this->approvalStatus !== null) {
            $result['approval_status'] = $this->approvalStatus;
        }
        if ($this->archiveStatus !== null) {
            $result['archive_status'] = $this->archiveStatus;
        }
        if ($this->chargeRemainAmount !== null) {
            $result['charge_remain_amount'] = $this->chargeRemainAmount;
        }
        if ($this->contractEndDate !== null) {
            $result['contract_end_date'] = $this->contractEndDate;
        }
        if ($this->contractId !== null) {
            $result['contract_id'] = $this->contractId;
        }
        if ($this->contractName !== null) {
            $result['contract_name'] = $this->contractName;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->contractStartDate !== null) {
            $result['contract_start_date'] = $this->contractStartDate;
        }
        if ($this->contractStatus !== null) {
            $result['contract_status'] = $this->contractStatus;
        }
        if ($this->contractStatusName !== null) {
            $result['contract_status_name'] = $this->contractStatusName;
        }
        if ($this->contractSubjectName !== null) {
            $result['contract_subject_name'] = $this->contractSubjectName;
        }
        if ($this->contractType !== null) {
            $result['contract_type'] = $this->contractType;
        }
        if ($this->contractTypeName !== null) {
            $result['contract_type_name'] = $this->contractTypeName;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->customerName !== null) {
            $result['customer_name'] = $this->customerName;
        }
        if ($this->customerType !== null) {
            $result['customer_type'] = $this->customerType;
        }
        if ($this->isVirtual !== null) {
            $result['is_virtual'] = $this->isVirtual;
        }
        if ($this->oldContractId !== null) {
            $result['old_contract_id'] = $this->oldContractId;
        }
        if ($this->oldContractSerial !== null) {
            $result['old_contract_serial'] = $this->oldContractSerial;
        }
        if ($this->paymentThrowDict !== null) {
            $result['payment_throw_dict'] = $this->paymentThrowDict;
        }
        if ($this->paymentTypeNames !== null) {
            $result['payment_type_names'] = $this->paymentTypeNames;
        }
        if ($this->paymentTypes !== null) {
            $result['payment_types'] = $this->paymentTypes;
        }
        if ($this->subjectId !== null) {
            $result['subject_id'] = $this->subjectId;
        }
        if ($this->throwCodeNames !== null) {
            $result['throw_code_names'] = $this->throwCodeNames;
        }
        if ($this->throwCodes !== null) {
            $result['throw_codes'] = $this->throwCodes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_billing_delivery_type_list'] ?? null) !== null && is_array($v)) {
            $obj->allowBillingDeliveryTypeList = $v;
        }
        if (($v = $data['approval_status'] ?? null) !== null) {
            $obj->approvalStatus = (int) $v;
        }
        if (($v = $data['archive_status'] ?? null) !== null) {
            $obj->archiveStatus = (int) $v;
        }
        if (($v = $data['charge_remain_amount'] ?? null) !== null) {
            $obj->chargeRemainAmount = (int) $v;
        }
        if (($v = $data['contract_end_date'] ?? null) !== null) {
            $obj->contractEndDate = (string) $v;
        }
        if (($v = $data['contract_id'] ?? null) !== null) {
            $obj->contractId = (int) $v;
        }
        if (($v = $data['contract_name'] ?? null) !== null) {
            $obj->contractName = (string) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['contract_start_date'] ?? null) !== null) {
            $obj->contractStartDate = (string) $v;
        }
        if (($v = $data['contract_status'] ?? null) !== null) {
            $obj->contractStatus = (int) $v;
        }
        if (($v = $data['contract_status_name'] ?? null) !== null) {
            $obj->contractStatusName = (string) $v;
        }
        if (($v = $data['contract_subject_name'] ?? null) !== null) {
            $obj->contractSubjectName = (string) $v;
        }
        if (($v = $data['contract_type'] ?? null) !== null) {
            $obj->contractType = (int) $v;
        }
        if (($v = $data['contract_type_name'] ?? null) !== null) {
            $obj->contractTypeName = (string) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['customer_name'] ?? null) !== null) {
            $obj->customerName = (string) $v;
        }
        if (($v = $data['customer_type'] ?? null) !== null) {
            $obj->customerType = (int) $v;
        }
        if (($v = $data['is_virtual'] ?? null) !== null) {
            $obj->isVirtual = (bool) $v;
        }
        if (($v = $data['old_contract_id'] ?? null) !== null) {
            $obj->oldContractId = (int) $v;
        }
        if (($v = $data['old_contract_serial'] ?? null) !== null) {
            $obj->oldContractSerial = (string) $v;
        }
        if (($v = $data['payment_throw_dict'] ?? null) !== null && is_array($v)) {
            $obj->paymentThrowDict = $v;
        }
        if (($v = $data['payment_type_names'] ?? null) !== null && is_array($v)) {
            $obj->paymentTypeNames = $v;
        }
        if (($v = $data['payment_types'] ?? null) !== null && is_array($v)) {
            $obj->paymentTypes = $v;
        }
        if (($v = $data['subject_id'] ?? null) !== null) {
            $obj->subjectId = (int) $v;
        }
        if (($v = $data['throw_code_names'] ?? null) !== null && is_array($v)) {
            $obj->throwCodeNames = $v;
        }
        if (($v = $data['throw_codes'] ?? null) !== null && is_array($v)) {
            $obj->throwCodes = $v;
        }
        return $obj;
    }
}
