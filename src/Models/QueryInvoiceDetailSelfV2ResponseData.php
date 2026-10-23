<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceDetailSelfV2ResponseData implements \JsonSerializable
{
    /**
     * 账户Id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 申请开票金额
     * @var float
     */
    protected ?float $applyAmount = null;

    /**
     * 审批状态
     * @var string
     */
    protected ?string $approvalStatusName = null;

    /**
     * 发票小票明细
     * @var \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataBillProjectInfoListInner[]
     */
    protected ?array $billProjectInfoList = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 我方开票主体名称
     * @var string
     */
    protected ?string $contractSubjectName = null;

    /**
     * @var \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataCusQualificationInfo
     */
    protected ?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataCusQualificationInfo $cusQualificationInfo = null;

    /**
     * 客户Id
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * 客户名称
     * @var string
     */
    protected ?string $customerName = null;

    /**
     * @var \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataElectronicReceiveInfo
     */
    protected ?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataElectronicReceiveInfo $electronicReceiveInfo = null;

    /**
     * 开票失败原因
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * 已开票金额
     * @var float
     */
    protected ?float $invoiceAmount = null;

    /**
     * 开票单ID
     * @var int
     */
    protected ?int $invoiceId = null;

    /**
     * 开票实体
     * @var string
     */
    protected ?string $invoiceObjectName = null;

    /**
     * 开票单编号
     * @var string
     */
    protected ?string $invoiceSerial = null;

    /**
     * 开票状态
     * @var string
     */
    protected ?string $invoiceStatusName = null;

    /**
     * 发票类型
     * @var string
     */
    protected ?string $invoiceTypeName = null;

    /**
     * 蓝票开票单ID（仅红票）
     * @var int
     */
    protected ?int $orgInvoiceId = null;

    /**
     * @var \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperReceiveInfo
     */
    protected ?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperReceiveInfo $paperReceiveInfo = null;

    /**
     * @var \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperSendInfo
     */
    protected ?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperSendInfo $paperSendInfo = null;

    /**
     * 业务线
     * @var string
     */
    protected ?string $platformName = null;

    /**
     * 已红冲金额
     * @var float
     */
    protected ?float $revertAmount = null;

    /**
     * 红冲冻结金额
     * @var float
     */
    protected ?float $revertFrozenAmount = null;

    /**
     * 红冲状态
     * @var string
     */
    protected ?string $revertStatusName = null;

    /**
     * 寄送状态
     * @var string
     */
    protected ?string $sendStatusName = null;

    /**
     * 非打印备注
     * @var string
     */
    protected ?string $unprintableRemark = null;

    /**
     * 账户Id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户Id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 申请开票金额
     * @return float
     */
    public function getApplyAmount(): ?float
    {
        return $this->applyAmount;
    }

    /**
     * 申请开票金额
     * @param float $applyAmount
     * @return self
     */
    public function setApplyAmount(?float $applyAmount): self
    {
        $this->applyAmount = $applyAmount;
        return $this;
    }

    /**
     * 审批状态
     * @return string
     */
    public function getApprovalStatusName(): ?string
    {
        return $this->approvalStatusName;
    }

    /**
     * 审批状态
     * @param string $approvalStatusName
     * @return self
     */
    public function setApprovalStatusName(?string $approvalStatusName): self
    {
        $this->approvalStatusName = $approvalStatusName;
        return $this;
    }

    /**
     * 发票小票明细
     * @return \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataBillProjectInfoListInner[]
     */
    public function getBillProjectInfoList(): ?array
    {
        return $this->billProjectInfoList;
    }

    /**
     * 发票小票明细
     * @param \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataBillProjectInfoListInner[] $billProjectInfoList
     * @return self
     */
    public function setBillProjectInfoList(?array $billProjectInfoList): self
    {
        $this->billProjectInfoList = $billProjectInfoList;
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
     * 我方开票主体名称
     * @return string
     */
    public function getContractSubjectName(): ?string
    {
        return $this->contractSubjectName;
    }

    /**
     * 我方开票主体名称
     * @param string $contractSubjectName
     * @return self
     */
    public function setContractSubjectName(?string $contractSubjectName): self
    {
        $this->contractSubjectName = $contractSubjectName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataCusQualificationInfo
     */
    public function getCusQualificationInfo(): ?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataCusQualificationInfo
    {
        return $this->cusQualificationInfo;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataCusQualificationInfo $cusQualificationInfo
     * @return self
     */
    public function setCusQualificationInfo(?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataCusQualificationInfo $cusQualificationInfo): self
    {
        $this->cusQualificationInfo = $cusQualificationInfo;
        return $this;
    }

    /**
     * 客户Id
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 客户Id
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
     * @return \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataElectronicReceiveInfo
     */
    public function getElectronicReceiveInfo(): ?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataElectronicReceiveInfo
    {
        return $this->electronicReceiveInfo;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataElectronicReceiveInfo $electronicReceiveInfo
     * @return self
     */
    public function setElectronicReceiveInfo(?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataElectronicReceiveInfo $electronicReceiveInfo): self
    {
        $this->electronicReceiveInfo = $electronicReceiveInfo;
        return $this;
    }

    /**
     * 开票失败原因
     * @return string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * 开票失败原因
     * @param string $failReason
     * @return self
     */
    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * 已开票金额
     * @return float
     */
    public function getInvoiceAmount(): ?float
    {
        return $this->invoiceAmount;
    }

    /**
     * 已开票金额
     * @param float $invoiceAmount
     * @return self
     */
    public function setInvoiceAmount(?float $invoiceAmount): self
    {
        $this->invoiceAmount = $invoiceAmount;
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
     * 开票实体
     * @return string
     */
    public function getInvoiceObjectName(): ?string
    {
        return $this->invoiceObjectName;
    }

    /**
     * 开票实体
     * @param string $invoiceObjectName
     * @return self
     */
    public function setInvoiceObjectName(?string $invoiceObjectName): self
    {
        $this->invoiceObjectName = $invoiceObjectName;
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
     * 开票状态
     * @return string
     */
    public function getInvoiceStatusName(): ?string
    {
        return $this->invoiceStatusName;
    }

    /**
     * 开票状态
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
     * @return string
     */
    public function getInvoiceTypeName(): ?string
    {
        return $this->invoiceTypeName;
    }

    /**
     * 发票类型
     * @param string $invoiceTypeName
     * @return self
     */
    public function setInvoiceTypeName(?string $invoiceTypeName): self
    {
        $this->invoiceTypeName = $invoiceTypeName;
        return $this;
    }

    /**
     * 蓝票开票单ID（仅红票）
     * @return int
     */
    public function getOrgInvoiceId(): ?int
    {
        return $this->orgInvoiceId;
    }

    /**
     * 蓝票开票单ID（仅红票）
     * @param int $orgInvoiceId
     * @return self
     */
    public function setOrgInvoiceId(?int $orgInvoiceId): self
    {
        $this->orgInvoiceId = $orgInvoiceId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperReceiveInfo
     */
    public function getPaperReceiveInfo(): ?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperReceiveInfo
    {
        return $this->paperReceiveInfo;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperReceiveInfo $paperReceiveInfo
     * @return self
     */
    public function setPaperReceiveInfo(?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperReceiveInfo $paperReceiveInfo): self
    {
        $this->paperReceiveInfo = $paperReceiveInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperSendInfo
     */
    public function getPaperSendInfo(): ?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperSendInfo
    {
        return $this->paperSendInfo;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperSendInfo $paperSendInfo
     * @return self
     */
    public function setPaperSendInfo(?\Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperSendInfo $paperSendInfo): self
    {
        $this->paperSendInfo = $paperSendInfo;
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
     * 已红冲金额
     * @return float
     */
    public function getRevertAmount(): ?float
    {
        return $this->revertAmount;
    }

    /**
     * 已红冲金额
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
     * 红冲状态
     * @return string
     */
    public function getRevertStatusName(): ?string
    {
        return $this->revertStatusName;
    }

    /**
     * 红冲状态
     * @param string $revertStatusName
     * @return self
     */
    public function setRevertStatusName(?string $revertStatusName): self
    {
        $this->revertStatusName = $revertStatusName;
        return $this;
    }

    /**
     * 寄送状态
     * @return string
     */
    public function getSendStatusName(): ?string
    {
        return $this->sendStatusName;
    }

    /**
     * 寄送状态
     * @param string $sendStatusName
     * @return self
     */
    public function setSendStatusName(?string $sendStatusName): self
    {
        $this->sendStatusName = $sendStatusName;
        return $this;
    }

    /**
     * 非打印备注
     * @return string
     */
    public function getUnprintableRemark(): ?string
    {
        return $this->unprintableRemark;
    }

    /**
     * 非打印备注
     * @param string $unprintableRemark
     * @return self
     */
    public function setUnprintableRemark(?string $unprintableRemark): self
    {
        $this->unprintableRemark = $unprintableRemark;
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
        if ($this->applyAmount !== null) {
            $result['apply_amount'] = $this->applyAmount;
        }
        if ($this->approvalStatusName !== null) {
            $result['approval_status_name'] = $this->approvalStatusName;
        }
        if ($this->billProjectInfoList !== null) {
            $result['bill_project_info_list'] = $this->billProjectInfoList;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->contractSubjectName !== null) {
            $result['contract_subject_name'] = $this->contractSubjectName;
        }
        if ($this->cusQualificationInfo !== null) {
            $result['cus_qualification_info'] = $this->cusQualificationInfo;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->customerName !== null) {
            $result['customer_name'] = $this->customerName;
        }
        if ($this->electronicReceiveInfo !== null) {
            $result['electronic_receive_info'] = $this->electronicReceiveInfo;
        }
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
        }
        if ($this->invoiceAmount !== null) {
            $result['invoice_amount'] = $this->invoiceAmount;
        }
        if ($this->invoiceId !== null) {
            $result['invoice_id'] = $this->invoiceId;
        }
        if ($this->invoiceObjectName !== null) {
            $result['invoice_object_name'] = $this->invoiceObjectName;
        }
        if ($this->invoiceSerial !== null) {
            $result['invoice_serial'] = $this->invoiceSerial;
        }
        if ($this->invoiceStatusName !== null) {
            $result['invoice_status_name'] = $this->invoiceStatusName;
        }
        if ($this->invoiceTypeName !== null) {
            $result['invoice_type_name'] = $this->invoiceTypeName;
        }
        if ($this->orgInvoiceId !== null) {
            $result['org_invoice_id'] = $this->orgInvoiceId;
        }
        if ($this->paperReceiveInfo !== null) {
            $result['paper_receive_info'] = $this->paperReceiveInfo;
        }
        if ($this->paperSendInfo !== null) {
            $result['paper_send_info'] = $this->paperSendInfo;
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
        if ($this->revertStatusName !== null) {
            $result['revert_status_name'] = $this->revertStatusName;
        }
        if ($this->sendStatusName !== null) {
            $result['send_status_name'] = $this->sendStatusName;
        }
        if ($this->unprintableRemark !== null) {
            $result['unprintable_remark'] = $this->unprintableRemark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['apply_amount'] ?? null) !== null) {
            $obj->applyAmount = (float) $v;
        }
        if (($v = $data['approval_status_name'] ?? null) !== null) {
            $obj->approvalStatusName = (string) $v;
        }
        if (($v = $data['bill_project_info_list'] ?? null) !== null && is_array($v)) {
            $obj->billProjectInfoList = array_map(fn ($vv) => \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataBillProjectInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['contract_subject_name'] ?? null) !== null) {
            $obj->contractSubjectName = (string) $v;
        }
        if (($v = $data['cus_qualification_info'] ?? null) !== null && is_array($v)) {
            $obj->cusQualificationInfo = \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataCusQualificationInfo::fromArray($v);
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['customer_name'] ?? null) !== null) {
            $obj->customerName = (string) $v;
        }
        if (($v = $data['electronic_receive_info'] ?? null) !== null && is_array($v)) {
            $obj->electronicReceiveInfo = \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataElectronicReceiveInfo::fromArray($v);
        }
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
        }
        if (($v = $data['invoice_amount'] ?? null) !== null) {
            $obj->invoiceAmount = (float) $v;
        }
        if (($v = $data['invoice_id'] ?? null) !== null) {
            $obj->invoiceId = (int) $v;
        }
        if (($v = $data['invoice_object_name'] ?? null) !== null) {
            $obj->invoiceObjectName = (string) $v;
        }
        if (($v = $data['invoice_serial'] ?? null) !== null) {
            $obj->invoiceSerial = (string) $v;
        }
        if (($v = $data['invoice_status_name'] ?? null) !== null) {
            $obj->invoiceStatusName = (string) $v;
        }
        if (($v = $data['invoice_type_name'] ?? null) !== null) {
            $obj->invoiceTypeName = (string) $v;
        }
        if (($v = $data['org_invoice_id'] ?? null) !== null) {
            $obj->orgInvoiceId = (int) $v;
        }
        if (($v = $data['paper_receive_info'] ?? null) !== null && is_array($v)) {
            $obj->paperReceiveInfo = \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperReceiveInfo::fromArray($v);
        }
        if (($v = $data['paper_send_info'] ?? null) !== null && is_array($v)) {
            $obj->paperSendInfo = \Oceanengine\Models\QueryInvoiceDetailSelfV2ResponseDataPaperSendInfo::fromArray($v);
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
        if (($v = $data['revert_status_name'] ?? null) !== null) {
            $obj->revertStatusName = (string) $v;
        }
        if (($v = $data['send_status_name'] ?? null) !== null) {
            $obj->sendStatusName = (string) $v;
        }
        if (($v = $data['unprintable_remark'] ?? null) !== null) {
            $obj->unprintableRemark = (string) $v;
        }
        return $obj;
    }
}
