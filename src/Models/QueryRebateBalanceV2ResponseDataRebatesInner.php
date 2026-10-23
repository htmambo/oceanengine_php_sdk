<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryRebateBalanceV2ResponseDataRebatesInner implements \JsonSerializable
{
    /**
     * 代理商ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 代理商名称
     * @var string
     */
    protected ?string $agentName = null;

    /**
     * 返点总金额 单位 元 保留2位小数
     * @var float
     */
    protected ?float $amount = null;

    /**
     * 回收状态
     * @var int
     */
    protected ?int $archiveStatus = null;

    /**
     * 回收状态名称
     * @var string
     */
    protected ?string $archiveStatusName = null;

    /**
     * 计费类型
     * @var int
     */
    protected ?int $billingType = null;

    /**
     * 计费类型名称
     * @var string
     */
    protected ?string $billingTypeName = null;

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
     * 媒体签约主体
     * @var string
     */
    protected ?string $contractSubjectName = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 当前审批节点名称
     * @var string
     */
    protected ?string $currentApprovalStatusName = null;

    /**
     * 冻结金额 单位 元 保留2位小数
     * @var float
     */
    protected ?float $frozenAmount = null;

    /**
     * 实际开票金额 单位 元 保留2位小数
     * @var float
     */
    protected ?float $invoiceAmount = null;

    /**
     * 可开票金额 单位 元 保留2位小数
     * @var float
     */
    protected ?float $invoiceAmountRemain = null;

    /**
     * 已申请开票金额 单位 元 保留2位小数
     * @var float
     */
    protected ?float $invoiceFrozenAmount = null;

    /**
     * 开票状态
     * @var int
     */
    protected ?int $invoiceStatus = null;

    /**
     * 开票状态名称
     * @var string
     */
    protected ?string $invoiceStatusName = null;

    /**
     * 签章类型名称
     * @var string
     */
    protected ?string $isOnlineStamp = null;

    /**
     * 所属季度／月
     * @var int
     */
    protected ?int $monthQuarter = null;

    /**
     * 所属季度／月名称
     * @var string
     */
    protected ?string $monthQuarterName = null;

    /**
     * 平台/业务线
     * @var int
     */
    protected ?int $platform = null;

    /**
     * 平台/业务线名称
     * @var string
     */
    protected ?string $platformName = null;

    /**
     * 返点流水ID
     * @var int
     */
    protected ?int $rebateBalanceId = null;

    /**
     * 返点流水编号 （与平台披露编号一致，建议使用）
     * @var string
     */
    protected ?string $rebateBalanceSerial = null;

    /**
     * 盖章状态
     * @var int
     */
    protected ?int $stampStatus = null;

    /**
     * 盖章状态名称
     * @var string
     */
    protected ?string $stampStatusName = null;

    /**
     * 是否标准
     * @var int
     */
    protected ?int $standard = null;

    /**
     * 是否标准名称
     * @var string
     */
    protected ?string $standardName = null;

    /**
     * 返点状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * 返点状态名称
     * @var string
     */
    protected ?string $statusName = null;

    /**
     * 使用类型名称
     * @var string[]
     */
    protected ?array $useTypeNames = null;

    /**
     * 使用类型
     * @var int[]
     */
    protected ?array $useTypes = null;

    /**
     * 已使用金额 单位 元 保留2位小数
     * @var float
     */
    protected ?float $usedAmount = null;

    /**
     * 结算周期年
     * @var int
     */
    protected ?int $year = null;

    /**
     * 代理商ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 代理商名称
     * @return string
     */
    public function getAgentName(): ?string
    {
        return $this->agentName;
    }

    /**
     * 代理商名称
     * @param string $agentName
     * @return self
     */
    public function setAgentName(?string $agentName): self
    {
        $this->agentName = $agentName;
        return $this;
    }

    /**
     * 返点总金额 单位 元 保留2位小数
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * 返点总金额 单位 元 保留2位小数
     * @param float $amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 回收状态
     * @return int
     */
    public function getArchiveStatus(): ?int
    {
        return $this->archiveStatus;
    }

    /**
     * 回收状态
     * @param int $archiveStatus
     * @return self
     */
    public function setArchiveStatus(?int $archiveStatus): self
    {
        $this->archiveStatus = $archiveStatus;
        return $this;
    }

    /**
     * 回收状态名称
     * @return string
     */
    public function getArchiveStatusName(): ?string
    {
        return $this->archiveStatusName;
    }

    /**
     * 回收状态名称
     * @param string $archiveStatusName
     * @return self
     */
    public function setArchiveStatusName(?string $archiveStatusName): self
    {
        $this->archiveStatusName = $archiveStatusName;
        return $this;
    }

    /**
     * 计费类型
     * @return int
     */
    public function getBillingType(): ?int
    {
        return $this->billingType;
    }

    /**
     * 计费类型
     * @param int $billingType
     * @return self
     */
    public function setBillingType(?int $billingType): self
    {
        $this->billingType = $billingType;
        return $this;
    }

    /**
     * 计费类型名称
     * @return string
     */
    public function getBillingTypeName(): ?string
    {
        return $this->billingTypeName;
    }

    /**
     * 计费类型名称
     * @param string $billingTypeName
     * @return self
     */
    public function setBillingTypeName(?string $billingTypeName): self
    {
        $this->billingTypeName = $billingTypeName;
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
     * 媒体签约主体
     * @return string
     */
    public function getContractSubjectName(): ?string
    {
        return $this->contractSubjectName;
    }

    /**
     * 媒体签约主体
     * @param string $contractSubjectName
     * @return self
     */
    public function setContractSubjectName(?string $contractSubjectName): self
    {
        $this->contractSubjectName = $contractSubjectName;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 当前审批节点名称
     * @return string
     */
    public function getCurrentApprovalStatusName(): ?string
    {
        return $this->currentApprovalStatusName;
    }

    /**
     * 当前审批节点名称
     * @param string $currentApprovalStatusName
     * @return self
     */
    public function setCurrentApprovalStatusName(?string $currentApprovalStatusName): self
    {
        $this->currentApprovalStatusName = $currentApprovalStatusName;
        return $this;
    }

    /**
     * 冻结金额 单位 元 保留2位小数
     * @return float
     */
    public function getFrozenAmount(): ?float
    {
        return $this->frozenAmount;
    }

    /**
     * 冻结金额 单位 元 保留2位小数
     * @param float $frozenAmount
     * @return self
     */
    public function setFrozenAmount(?float $frozenAmount): self
    {
        $this->frozenAmount = $frozenAmount;
        return $this;
    }

    /**
     * 实际开票金额 单位 元 保留2位小数
     * @return float
     */
    public function getInvoiceAmount(): ?float
    {
        return $this->invoiceAmount;
    }

    /**
     * 实际开票金额 单位 元 保留2位小数
     * @param float $invoiceAmount
     * @return self
     */
    public function setInvoiceAmount(?float $invoiceAmount): self
    {
        $this->invoiceAmount = $invoiceAmount;
        return $this;
    }

    /**
     * 可开票金额 单位 元 保留2位小数
     * @return float
     */
    public function getInvoiceAmountRemain(): ?float
    {
        return $this->invoiceAmountRemain;
    }

    /**
     * 可开票金额 单位 元 保留2位小数
     * @param float $invoiceAmountRemain
     * @return self
     */
    public function setInvoiceAmountRemain(?float $invoiceAmountRemain): self
    {
        $this->invoiceAmountRemain = $invoiceAmountRemain;
        return $this;
    }

    /**
     * 已申请开票金额 单位 元 保留2位小数
     * @return float
     */
    public function getInvoiceFrozenAmount(): ?float
    {
        return $this->invoiceFrozenAmount;
    }

    /**
     * 已申请开票金额 单位 元 保留2位小数
     * @param float $invoiceFrozenAmount
     * @return self
     */
    public function setInvoiceFrozenAmount(?float $invoiceFrozenAmount): self
    {
        $this->invoiceFrozenAmount = $invoiceFrozenAmount;
        return $this;
    }

    /**
     * 开票状态
     * @return int
     */
    public function getInvoiceStatus(): ?int
    {
        return $this->invoiceStatus;
    }

    /**
     * 开票状态
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
     * 签章类型名称
     * @return string
     */
    public function getIsOnlineStamp(): ?string
    {
        return $this->isOnlineStamp;
    }

    /**
     * 签章类型名称
     * @param string $isOnlineStamp
     * @return self
     */
    public function setIsOnlineStamp(?string $isOnlineStamp): self
    {
        $this->isOnlineStamp = $isOnlineStamp;
        return $this;
    }

    /**
     * 所属季度／月
     * @return int
     */
    public function getMonthQuarter(): ?int
    {
        return $this->monthQuarter;
    }

    /**
     * 所属季度／月
     * @param int $monthQuarter
     * @return self
     */
    public function setMonthQuarter(?int $monthQuarter): self
    {
        $this->monthQuarter = $monthQuarter;
        return $this;
    }

    /**
     * 所属季度／月名称
     * @return string
     */
    public function getMonthQuarterName(): ?string
    {
        return $this->monthQuarterName;
    }

    /**
     * 所属季度／月名称
     * @param string $monthQuarterName
     * @return self
     */
    public function setMonthQuarterName(?string $monthQuarterName): self
    {
        $this->monthQuarterName = $monthQuarterName;
        return $this;
    }

    /**
     * 平台/业务线
     * @return int
     */
    public function getPlatform(): ?int
    {
        return $this->platform;
    }

    /**
     * 平台/业务线
     * @param int $platform
     * @return self
     */
    public function setPlatform(?int $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 平台/业务线名称
     * @return string
     */
    public function getPlatformName(): ?string
    {
        return $this->platformName;
    }

    /**
     * 平台/业务线名称
     * @param string $platformName
     * @return self
     */
    public function setPlatformName(?string $platformName): self
    {
        $this->platformName = $platformName;
        return $this;
    }

    /**
     * 返点流水ID
     * @return int
     */
    public function getRebateBalanceId(): ?int
    {
        return $this->rebateBalanceId;
    }

    /**
     * 返点流水ID
     * @param int $rebateBalanceId
     * @return self
     */
    public function setRebateBalanceId(?int $rebateBalanceId): self
    {
        $this->rebateBalanceId = $rebateBalanceId;
        return $this;
    }

    /**
     * 返点流水编号 （与平台披露编号一致，建议使用）
     * @return string
     */
    public function getRebateBalanceSerial(): ?string
    {
        return $this->rebateBalanceSerial;
    }

    /**
     * 返点流水编号 （与平台披露编号一致，建议使用）
     * @param string $rebateBalanceSerial
     * @return self
     */
    public function setRebateBalanceSerial(?string $rebateBalanceSerial): self
    {
        $this->rebateBalanceSerial = $rebateBalanceSerial;
        return $this;
    }

    /**
     * 盖章状态
     * @return int
     */
    public function getStampStatus(): ?int
    {
        return $this->stampStatus;
    }

    /**
     * 盖章状态
     * @param int $stampStatus
     * @return self
     */
    public function setStampStatus(?int $stampStatus): self
    {
        $this->stampStatus = $stampStatus;
        return $this;
    }

    /**
     * 盖章状态名称
     * @return string
     */
    public function getStampStatusName(): ?string
    {
        return $this->stampStatusName;
    }

    /**
     * 盖章状态名称
     * @param string $stampStatusName
     * @return self
     */
    public function setStampStatusName(?string $stampStatusName): self
    {
        $this->stampStatusName = $stampStatusName;
        return $this;
    }

    /**
     * 是否标准
     * @return int
     */
    public function getStandard(): ?int
    {
        return $this->standard;
    }

    /**
     * 是否标准
     * @param int $standard
     * @return self
     */
    public function setStandard(?int $standard): self
    {
        $this->standard = $standard;
        return $this;
    }

    /**
     * 是否标准名称
     * @return string
     */
    public function getStandardName(): ?string
    {
        return $this->standardName;
    }

    /**
     * 是否标准名称
     * @param string $standardName
     * @return self
     */
    public function setStandardName(?string $standardName): self
    {
        $this->standardName = $standardName;
        return $this;
    }

    /**
     * 返点状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 返点状态
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 返点状态名称
     * @return string
     */
    public function getStatusName(): ?string
    {
        return $this->statusName;
    }

    /**
     * 返点状态名称
     * @param string $statusName
     * @return self
     */
    public function setStatusName(?string $statusName): self
    {
        $this->statusName = $statusName;
        return $this;
    }

    /**
     * 使用类型名称
     * @return string[]
     */
    public function getUseTypeNames(): ?array
    {
        return $this->useTypeNames;
    }

    /**
     * 使用类型名称
     * @param string[] $useTypeNames
     * @return self
     */
    public function setUseTypeNames(?array $useTypeNames): self
    {
        $this->useTypeNames = $useTypeNames;
        return $this;
    }

    /**
     * 使用类型
     * @return int[]
     */
    public function getUseTypes(): ?array
    {
        return $this->useTypes;
    }

    /**
     * 使用类型
     * @param int[] $useTypes
     * @return self
     */
    public function setUseTypes(?array $useTypes): self
    {
        $this->useTypes = $useTypes;
        return $this;
    }

    /**
     * 已使用金额 单位 元 保留2位小数
     * @return float
     */
    public function getUsedAmount(): ?float
    {
        return $this->usedAmount;
    }

    /**
     * 已使用金额 单位 元 保留2位小数
     * @param float $usedAmount
     * @return self
     */
    public function setUsedAmount(?float $usedAmount): self
    {
        $this->usedAmount = $usedAmount;
        return $this;
    }

    /**
     * 结算周期年
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * 结算周期年
     * @param int $year
     * @return self
     */
    public function setYear(?int $year): self
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->agentName !== null) {
            $result['agent_name'] = $this->agentName;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->archiveStatus !== null) {
            $result['archive_status'] = $this->archiveStatus;
        }
        if ($this->archiveStatusName !== null) {
            $result['archive_status_name'] = $this->archiveStatusName;
        }
        if ($this->billingType !== null) {
            $result['billing_type'] = $this->billingType;
        }
        if ($this->billingTypeName !== null) {
            $result['billing_type_name'] = $this->billingTypeName;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->currentApprovalStatusName !== null) {
            $result['current_approval_status_name'] = $this->currentApprovalStatusName;
        }
        if ($this->frozenAmount !== null) {
            $result['frozen_amount'] = $this->frozenAmount;
        }
        if ($this->invoiceAmount !== null) {
            $result['invoice_amount'] = $this->invoiceAmount;
        }
        if ($this->invoiceAmountRemain !== null) {
            $result['invoice_amount_remain'] = $this->invoiceAmountRemain;
        }
        if ($this->invoiceFrozenAmount !== null) {
            $result['invoice_frozen_amount'] = $this->invoiceFrozenAmount;
        }
        if ($this->invoiceStatus !== null) {
            $result['invoice_status'] = $this->invoiceStatus;
        }
        if ($this->invoiceStatusName !== null) {
            $result['invoice_status_name'] = $this->invoiceStatusName;
        }
        if ($this->isOnlineStamp !== null) {
            $result['is_online_stamp'] = $this->isOnlineStamp;
        }
        if ($this->monthQuarter !== null) {
            $result['month_quarter'] = $this->monthQuarter;
        }
        if ($this->monthQuarterName !== null) {
            $result['month_quarter_name'] = $this->monthQuarterName;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->platformName !== null) {
            $result['platform_name'] = $this->platformName;
        }
        if ($this->rebateBalanceId !== null) {
            $result['rebate_balance_id'] = $this->rebateBalanceId;
        }
        if ($this->rebateBalanceSerial !== null) {
            $result['rebate_balance_serial'] = $this->rebateBalanceSerial;
        }
        if ($this->stampStatus !== null) {
            $result['stamp_status'] = $this->stampStatus;
        }
        if ($this->stampStatusName !== null) {
            $result['stamp_status_name'] = $this->stampStatusName;
        }
        if ($this->standard !== null) {
            $result['standard'] = $this->standard;
        }
        if ($this->standardName !== null) {
            $result['standard_name'] = $this->standardName;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusName !== null) {
            $result['status_name'] = $this->statusName;
        }
        if ($this->useTypeNames !== null) {
            $result['use_type_names'] = $this->useTypeNames;
        }
        if ($this->useTypes !== null) {
            $result['use_types'] = $this->useTypes;
        }
        if ($this->usedAmount !== null) {
            $result['used_amount'] = $this->usedAmount;
        }
        if ($this->year !== null) {
            $result['year'] = $this->year;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['agent_name'] ?? null) !== null) {
            $obj->agentName = (string) $v;
        }
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (float) $v;
        }
        if (($v = $data['archive_status'] ?? null) !== null) {
            $obj->archiveStatus = (int) $v;
        }
        if (($v = $data['archive_status_name'] ?? null) !== null) {
            $obj->archiveStatusName = (string) $v;
        }
        if (($v = $data['billing_type'] ?? null) !== null) {
            $obj->billingType = (int) $v;
        }
        if (($v = $data['billing_type_name'] ?? null) !== null) {
            $obj->billingTypeName = (string) $v;
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
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['current_approval_status_name'] ?? null) !== null) {
            $obj->currentApprovalStatusName = (string) $v;
        }
        if (($v = $data['frozen_amount'] ?? null) !== null) {
            $obj->frozenAmount = (float) $v;
        }
        if (($v = $data['invoice_amount'] ?? null) !== null) {
            $obj->invoiceAmount = (float) $v;
        }
        if (($v = $data['invoice_amount_remain'] ?? null) !== null) {
            $obj->invoiceAmountRemain = (float) $v;
        }
        if (($v = $data['invoice_frozen_amount'] ?? null) !== null) {
            $obj->invoiceFrozenAmount = (float) $v;
        }
        if (($v = $data['invoice_status'] ?? null) !== null) {
            $obj->invoiceStatus = (int) $v;
        }
        if (($v = $data['invoice_status_name'] ?? null) !== null) {
            $obj->invoiceStatusName = (string) $v;
        }
        if (($v = $data['is_online_stamp'] ?? null) !== null) {
            $obj->isOnlineStamp = (string) $v;
        }
        if (($v = $data['month_quarter'] ?? null) !== null) {
            $obj->monthQuarter = (int) $v;
        }
        if (($v = $data['month_quarter_name'] ?? null) !== null) {
            $obj->monthQuarterName = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (int) $v;
        }
        if (($v = $data['platform_name'] ?? null) !== null) {
            $obj->platformName = (string) $v;
        }
        if (($v = $data['rebate_balance_id'] ?? null) !== null) {
            $obj->rebateBalanceId = (int) $v;
        }
        if (($v = $data['rebate_balance_serial'] ?? null) !== null) {
            $obj->rebateBalanceSerial = (string) $v;
        }
        if (($v = $data['stamp_status'] ?? null) !== null) {
            $obj->stampStatus = (int) $v;
        }
        if (($v = $data['stamp_status_name'] ?? null) !== null) {
            $obj->stampStatusName = (string) $v;
        }
        if (($v = $data['standard'] ?? null) !== null) {
            $obj->standard = (int) $v;
        }
        if (($v = $data['standard_name'] ?? null) !== null) {
            $obj->standardName = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['status_name'] ?? null) !== null) {
            $obj->statusName = (string) $v;
        }
        if (($v = $data['use_type_names'] ?? null) !== null && is_array($v)) {
            $obj->useTypeNames = $v;
        }
        if (($v = $data['use_types'] ?? null) !== null && is_array($v)) {
            $obj->useTypes = $v;
        }
        if (($v = $data['used_amount'] ?? null) !== null) {
            $obj->usedAmount = (float) $v;
        }
        if (($v = $data['year'] ?? null) !== null) {
            $obj->year = (int) $v;
        }
        return $obj;
    }
}
