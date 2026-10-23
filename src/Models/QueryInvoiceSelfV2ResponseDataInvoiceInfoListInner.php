<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceSelfV2ResponseDataInvoiceInfoListInner implements \JsonSerializable
{
    /**
     * 作废金额
     * @var float
     */
    protected ?float $abandonedAmount = null;

    /**
     * 实际开票金额
     * @var float
     */
    protected ?float $actualInvoiceAmount = null;

    /**
     * 开票申请金额
     * @var float
     */
    protected ?float $applyAmount = null;

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
     * 签约主体
     * @var string
     */
    protected ?string $contractSubjectName = null;

    /**
     * 客户ID
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * 客户名称
     * @var string
     */
    protected ?string $customerName = null;

    /**
     * 开票客户名称
     * @var string
     */
    protected ?string $customerSubjectName = null;

    /**
     * 是否差额开票
     * @var string
     */
    protected ?string $differenceInvoiceName = null;

    /**
     * 开票金额
     * @var float
     */
    protected ?float $invoiceAmount = null;

    /**
     * 发票代码
     * @var string[]
     */
    protected ?array $invoiceCodes = null;

    /**
     * 开票单ID
     * @var int
     */
    protected ?int $invoiceId = null;

    /**
     * 发票号码
     * @var string[]
     */
    protected ?array $invoiceNos = null;

    /**
     * 开票类型名称
     * @var string
     */
    protected ?string $invoiceObjectName = null;

    /**
     * 开票项目名称
     * @var string[]
     */
    protected ?array $invoiceProjectList = null;

    /**
     * 开票单编号
     * @var string
     */
    protected ?string $invoiceSerial = null;

    /**
     * 开票状态 CANCELLED(0, \"已作废\"),NO_INVOICED(1, \"未开票\"),PART_INVOICED(2, \"部分开票\"),INVOICED(3, \"已开票\"),NO_NEED_INVOICE(4, \"无需开票\");
     * @var int
     */
    protected ?int $invoiceStatus = null;

    /**
     * 开票状态名称
     * @var string
     */
    protected ?string $invoiceStatusName = null;

    /**
     * 发票类型
     * @var int
     */
    protected ?int $invoiceType = null;

    /**
     * 发票类型名称
     * @var string
     */
    protected ?string $invoiceTypeName = null;

    /**
     * 发票开具时间 yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $issueTime = null;

    /**
     * 业务线
     * @var string
     */
    protected ?string $platformName = null;

    /**
     * 红冲金额
     * @var float
     */
    protected ?float $revertAmount = null;

    /**
     * 红冲冻结金额
     * @var float
     */
    protected ?float $revertFrozenAmount = null;

    /**
     * 红冲状态  NORMAL(1, \"未红冲\"),REVERTED(2, \"全额红冲\"),RED(3, \"红票\"),PART_REVERTED(4, \"部分红冲\");
     * @var int
     */
    protected ?int $revertStatus = null;

    /**
     * 红冲状态名称
     * @var string
     */
    protected ?string $revertStatusName = null;

    /**
     * 提交时间 yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $submitTime = null;

    /**
     * 提交人名称
     * @var string
     */
    protected ?string $submitterName = null;

    /**
     * 作废金额
     * @return float
     */
    public function getAbandonedAmount(): ?float
    {
        return $this->abandonedAmount;
    }

    /**
     * 作废金额
     * @param float $abandonedAmount
     * @return self
     */
    public function setAbandonedAmount(?float $abandonedAmount): self
    {
        $this->abandonedAmount = $abandonedAmount;
        return $this;
    }

    /**
     * 实际开票金额
     * @return float
     */
    public function getActualInvoiceAmount(): ?float
    {
        return $this->actualInvoiceAmount;
    }

    /**
     * 实际开票金额
     * @param float $actualInvoiceAmount
     * @return self
     */
    public function setActualInvoiceAmount(?float $actualInvoiceAmount): self
    {
        $this->actualInvoiceAmount = $actualInvoiceAmount;
        return $this;
    }

    /**
     * 开票申请金额
     * @return float
     */
    public function getApplyAmount(): ?float
    {
        return $this->applyAmount;
    }

    /**
     * 开票申请金额
     * @param float $applyAmount
     * @return self
     */
    public function setApplyAmount(?float $applyAmount): self
    {
        $this->applyAmount = $applyAmount;
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
     * 签约主体
     * @return string
     */
    public function getContractSubjectName(): ?string
    {
        return $this->contractSubjectName;
    }

    /**
     * 签约主体
     * @param string $contractSubjectName
     * @return self
     */
    public function setContractSubjectName(?string $contractSubjectName): self
    {
        $this->contractSubjectName = $contractSubjectName;
        return $this;
    }

    /**
     * 客户ID
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 客户ID
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
     * 开票客户名称
     * @return string
     */
    public function getCustomerSubjectName(): ?string
    {
        return $this->customerSubjectName;
    }

    /**
     * 开票客户名称
     * @param string $customerSubjectName
     * @return self
     */
    public function setCustomerSubjectName(?string $customerSubjectName): self
    {
        $this->customerSubjectName = $customerSubjectName;
        return $this;
    }

    /**
     * 是否差额开票
     * @return string
     */
    public function getDifferenceInvoiceName(): ?string
    {
        return $this->differenceInvoiceName;
    }

    /**
     * 是否差额开票
     * @param string $differenceInvoiceName
     * @return self
     */
    public function setDifferenceInvoiceName(?string $differenceInvoiceName): self
    {
        $this->differenceInvoiceName = $differenceInvoiceName;
        return $this;
    }

    /**
     * 开票金额
     * @return float
     */
    public function getInvoiceAmount(): ?float
    {
        return $this->invoiceAmount;
    }

    /**
     * 开票金额
     * @param float $invoiceAmount
     * @return self
     */
    public function setInvoiceAmount(?float $invoiceAmount): self
    {
        $this->invoiceAmount = $invoiceAmount;
        return $this;
    }

    /**
     * 发票代码
     * @return string[]
     */
    public function getInvoiceCodes(): ?array
    {
        return $this->invoiceCodes;
    }

    /**
     * 发票代码
     * @param string[] $invoiceCodes
     * @return self
     */
    public function setInvoiceCodes(?array $invoiceCodes): self
    {
        $this->invoiceCodes = $invoiceCodes;
        return $this;
    }

    /**
     * 开票单ID
     * @return int
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }

    /**
     * 开票单ID
     * @param int $invoiceId
     * @return self
     */
    public function setInvoiceId(?int $invoiceId): self
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * 发票号码
     * @return string[]
     */
    public function getInvoiceNos(): ?array
    {
        return $this->invoiceNos;
    }

    /**
     * 发票号码
     * @param string[] $invoiceNos
     * @return self
     */
    public function setInvoiceNos(?array $invoiceNos): self
    {
        $this->invoiceNos = $invoiceNos;
        return $this;
    }

    /**
     * 开票类型名称
     * @return string
     */
    public function getInvoiceObjectName(): ?string
    {
        return $this->invoiceObjectName;
    }

    /**
     * 开票类型名称
     * @param string $invoiceObjectName
     * @return self
     */
    public function setInvoiceObjectName(?string $invoiceObjectName): self
    {
        $this->invoiceObjectName = $invoiceObjectName;
        return $this;
    }

    /**
     * 开票项目名称
     * @return string[]
     */
    public function getInvoiceProjectList(): ?array
    {
        return $this->invoiceProjectList;
    }

    /**
     * 开票项目名称
     * @param string[] $invoiceProjectList
     * @return self
     */
    public function setInvoiceProjectList(?array $invoiceProjectList): self
    {
        $this->invoiceProjectList = $invoiceProjectList;
        return $this;
    }

    /**
     * 开票单编号
     * @return string
     */
    public function getInvoiceSerial(): ?string
    {
        return $this->invoiceSerial;
    }

    /**
     * 开票单编号
     * @param string $invoiceSerial
     * @return self
     */
    public function setInvoiceSerial(?string $invoiceSerial): self
    {
        $this->invoiceSerial = $invoiceSerial;
        return $this;
    }

    /**
     * 开票状态 CANCELLED(0, \"已作废\"),NO_INVOICED(1, \"未开票\"),PART_INVOICED(2, \"部分开票\"),INVOICED(3, \"已开票\"),NO_NEED_INVOICE(4, \"无需开票\");
     * @return int
     */
    public function getInvoiceStatus(): ?int
    {
        return $this->invoiceStatus;
    }

    /**
     * 开票状态 CANCELLED(0, \"已作废\"),NO_INVOICED(1, \"未开票\"),PART_INVOICED(2, \"部分开票\"),INVOICED(3, \"已开票\"),NO_NEED_INVOICE(4, \"无需开票\");
     * @param int $invoiceStatus
     * @return self
     */
    public function setInvoiceStatus(?int $invoiceStatus): self
    {
        $this->invoiceStatus = $invoiceStatus;
        return $this;
    }

    /**
     * 开票状态名称
     * @return string
     */
    public function getInvoiceStatusName(): ?string
    {
        return $this->invoiceStatusName;
    }

    /**
     * 开票状态名称
     * @param string $invoiceStatusName
     * @return self
     */
    public function setInvoiceStatusName(?string $invoiceStatusName): self
    {
        $this->invoiceStatusName = $invoiceStatusName;
        return $this;
    }

    /**
     * 发票类型
     * @return int
     */
    public function getInvoiceType(): ?int
    {
        return $this->invoiceType;
    }

    /**
     * 发票类型
     * @param int $invoiceType
     * @return self
     */
    public function setInvoiceType(?int $invoiceType): self
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * 发票类型名称
     * @return string
     */
    public function getInvoiceTypeName(): ?string
    {
        return $this->invoiceTypeName;
    }

    /**
     * 发票类型名称
     * @param string $invoiceTypeName
     * @return self
     */
    public function setInvoiceTypeName(?string $invoiceTypeName): self
    {
        $this->invoiceTypeName = $invoiceTypeName;
        return $this;
    }

    /**
     * 发票开具时间 yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getIssueTime(): ?string
    {
        return $this->issueTime;
    }

    /**
     * 发票开具时间 yyyy-MM-dd HH:mm:ss
     * @param string $issueTime
     * @return self
     */
    public function setIssueTime(?string $issueTime): self
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * 业务线
     * @return string
     */
    public function getPlatformName(): ?string
    {
        return $this->platformName;
    }

    /**
     * 业务线
     * @param string $platformName
     * @return self
     */
    public function setPlatformName(?string $platformName): self
    {
        $this->platformName = $platformName;
        return $this;
    }

    /**
     * 红冲金额
     * @return float
     */
    public function getRevertAmount(): ?float
    {
        return $this->revertAmount;
    }

    /**
     * 红冲金额
     * @param float $revertAmount
     * @return self
     */
    public function setRevertAmount(?float $revertAmount): self
    {
        $this->revertAmount = $revertAmount;
        return $this;
    }

    /**
     * 红冲冻结金额
     * @return float
     */
    public function getRevertFrozenAmount(): ?float
    {
        return $this->revertFrozenAmount;
    }

    /**
     * 红冲冻结金额
     * @param float $revertFrozenAmount
     * @return self
     */
    public function setRevertFrozenAmount(?float $revertFrozenAmount): self
    {
        $this->revertFrozenAmount = $revertFrozenAmount;
        return $this;
    }

    /**
     * 红冲状态  NORMAL(1, \"未红冲\"),REVERTED(2, \"全额红冲\"),RED(3, \"红票\"),PART_REVERTED(4, \"部分红冲\");
     * @return int
     */
    public function getRevertStatus(): ?int
    {
        return $this->revertStatus;
    }

    /**
     * 红冲状态  NORMAL(1, \"未红冲\"),REVERTED(2, \"全额红冲\"),RED(3, \"红票\"),PART_REVERTED(4, \"部分红冲\");
     * @param int $revertStatus
     * @return self
     */
    public function setRevertStatus(?int $revertStatus): self
    {
        $this->revertStatus = $revertStatus;
        return $this;
    }

    /**
     * 红冲状态名称
     * @return string
     */
    public function getRevertStatusName(): ?string
    {
        return $this->revertStatusName;
    }

    /**
     * 红冲状态名称
     * @param string $revertStatusName
     * @return self
     */
    public function setRevertStatusName(?string $revertStatusName): self
    {
        $this->revertStatusName = $revertStatusName;
        return $this;
    }

    /**
     * 提交时间 yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getSubmitTime(): ?string
    {
        return $this->submitTime;
    }

    /**
     * 提交时间 yyyy-MM-dd HH:mm:ss
     * @param string $submitTime
     * @return self
     */
    public function setSubmitTime(?string $submitTime): self
    {
        $this->submitTime = $submitTime;
        return $this;
    }

    /**
     * 提交人名称
     * @return string
     */
    public function getSubmitterName(): ?string
    {
        return $this->submitterName;
    }

    /**
     * 提交人名称
     * @param string $submitterName
     * @return self
     */
    public function setSubmitterName(?string $submitterName): self
    {
        $this->submitterName = $submitterName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->abandonedAmount !== null) {
            $result['abandoned_amount'] = $this->abandonedAmount;
        }
        if ($this->actualInvoiceAmount !== null) {
            $result['actual_invoice_amount'] = $this->actualInvoiceAmount;
        }
        if ($this->applyAmount !== null) {
            $result['apply_amount'] = $this->applyAmount;
        }
        if ($this->contractName !== null) {
            $result['contract_name'] = $this->contractName;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->contractSubjectName !== null) {
            $result['contract_subject_name'] = $this->contractSubjectName;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->customerName !== null) {
            $result['customer_name'] = $this->customerName;
        }
        if ($this->customerSubjectName !== null) {
            $result['customer_subject_name'] = $this->customerSubjectName;
        }
        if ($this->differenceInvoiceName !== null) {
            $result['difference_invoice_name'] = $this->differenceInvoiceName;
        }
        if ($this->invoiceAmount !== null) {
            $result['invoice_amount'] = $this->invoiceAmount;
        }
        if ($this->invoiceCodes !== null) {
            $result['invoice_codes'] = $this->invoiceCodes;
        }
        if ($this->invoiceId !== null) {
            $result['invoice_id'] = $this->invoiceId;
        }
        if ($this->invoiceNos !== null) {
            $result['invoice_nos'] = $this->invoiceNos;
        }
        if ($this->invoiceObjectName !== null) {
            $result['invoice_object_name'] = $this->invoiceObjectName;
        }
        if ($this->invoiceProjectList !== null) {
            $result['invoice_project_list'] = $this->invoiceProjectList;
        }
        if ($this->invoiceSerial !== null) {
            $result['invoice_serial'] = $this->invoiceSerial;
        }
        if ($this->invoiceStatus !== null) {
            $result['invoice_status'] = $this->invoiceStatus;
        }
        if ($this->invoiceStatusName !== null) {
            $result['invoice_status_name'] = $this->invoiceStatusName;
        }
        if ($this->invoiceType !== null) {
            $result['invoice_type'] = $this->invoiceType;
        }
        if ($this->invoiceTypeName !== null) {
            $result['invoice_type_name'] = $this->invoiceTypeName;
        }
        if ($this->issueTime !== null) {
            $result['issue_time'] = $this->issueTime;
        }
        if ($this->platformName !== null) {
            $result['platform_name'] = $this->platformName;
        }
        if ($this->revertAmount !== null) {
            $result['revert_amount'] = $this->revertAmount;
        }
        if ($this->revertFrozenAmount !== null) {
            $result['revert_frozen_amount'] = $this->revertFrozenAmount;
        }
        if ($this->revertStatus !== null) {
            $result['revert_status'] = $this->revertStatus;
        }
        if ($this->revertStatusName !== null) {
            $result['revert_status_name'] = $this->revertStatusName;
        }
        if ($this->submitTime !== null) {
            $result['submit_time'] = $this->submitTime;
        }
        if ($this->submitterName !== null) {
            $result['submitter_name'] = $this->submitterName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['abandoned_amount'] ?? null) !== null) {
            $obj->abandonedAmount = (float) $v;
        }
        if (($v = $data['actual_invoice_amount'] ?? null) !== null) {
            $obj->actualInvoiceAmount = (float) $v;
        }
        if (($v = $data['apply_amount'] ?? null) !== null) {
            $obj->applyAmount = (float) $v;
        }
        if (($v = $data['contract_name'] ?? null) !== null) {
            $obj->contractName = (string) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['contract_subject_name'] ?? null) !== null) {
            $obj->contractSubjectName = (string) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['customer_name'] ?? null) !== null) {
            $obj->customerName = (string) $v;
        }
        if (($v = $data['customer_subject_name'] ?? null) !== null) {
            $obj->customerSubjectName = (string) $v;
        }
        if (($v = $data['difference_invoice_name'] ?? null) !== null) {
            $obj->differenceInvoiceName = (string) $v;
        }
        if (($v = $data['invoice_amount'] ?? null) !== null) {
            $obj->invoiceAmount = (float) $v;
        }
        if (($v = $data['invoice_codes'] ?? null) !== null && is_array($v)) {
            $obj->invoiceCodes = $v;
        }
        if (($v = $data['invoice_id'] ?? null) !== null) {
            $obj->invoiceId = (int) $v;
        }
        if (($v = $data['invoice_nos'] ?? null) !== null && is_array($v)) {
            $obj->invoiceNos = $v;
        }
        if (($v = $data['invoice_object_name'] ?? null) !== null) {
            $obj->invoiceObjectName = (string) $v;
        }
        if (($v = $data['invoice_project_list'] ?? null) !== null && is_array($v)) {
            $obj->invoiceProjectList = $v;
        }
        if (($v = $data['invoice_serial'] ?? null) !== null) {
            $obj->invoiceSerial = (string) $v;
        }
        if (($v = $data['invoice_status'] ?? null) !== null) {
            $obj->invoiceStatus = (int) $v;
        }
        if (($v = $data['invoice_status_name'] ?? null) !== null) {
            $obj->invoiceStatusName = (string) $v;
        }
        if (($v = $data['invoice_type'] ?? null) !== null) {
            $obj->invoiceType = (int) $v;
        }
        if (($v = $data['invoice_type_name'] ?? null) !== null) {
            $obj->invoiceTypeName = (string) $v;
        }
        if (($v = $data['issue_time'] ?? null) !== null) {
            $obj->issueTime = (string) $v;
        }
        if (($v = $data['platform_name'] ?? null) !== null) {
            $obj->platformName = (string) $v;
        }
        if (($v = $data['revert_amount'] ?? null) !== null) {
            $obj->revertAmount = (float) $v;
        }
        if (($v = $data['revert_frozen_amount'] ?? null) !== null) {
            $obj->revertFrozenAmount = (float) $v;
        }
        if (($v = $data['revert_status'] ?? null) !== null) {
            $obj->revertStatus = (int) $v;
        }
        if (($v = $data['revert_status_name'] ?? null) !== null) {
            $obj->revertStatusName = (string) $v;
        }
        if (($v = $data['submit_time'] ?? null) !== null) {
            $obj->submitTime = (string) $v;
        }
        if (($v = $data['submitter_name'] ?? null) !== null) {
            $obj->submitterName = (string) $v;
        }
        return $obj;
    }
}
