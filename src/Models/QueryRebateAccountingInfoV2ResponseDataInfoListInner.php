<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryRebateAccountingInfoV2ResponseDataInfoListInner implements \JsonSerializable
{
    /**
     * 代理商ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 代理商name
     * @var string
     */
    protected ?string $agentName = null;

    /**
     * 返点金额 单位 元 保留2位小数
     * @var float
     */
    protected ?float $amount = null;

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
     * 创建时间 2000-01-01 00:00:00
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 当前审批节点名称 （待代理商审批/待平台复核终审/审批完成）
     * @var string
     */
    protected ?string $currentApprovalStatusName = null;

    /**
     * 激励名称
     * @var string
     */
    protected ?string $inspireName = null;

    /**
     * 是否已创建返点 1:是 2:否
     * @var int
     */
    protected ?int $isCreateRebate = null;

    /**
     * 是否已创建返点name (\"是\"、\"否\")
     * @var string
     */
    protected ?string $isCreateRebateName = null;

    /**
     * 结算季度/月 （1:1月，2:2月，3:3月，4:4月，5:5月，6:6月，7:7月，8:8月，9:9月，10:10月，11:11月，12:12月，13:Q1，14:Q2，15:Q3，16:Q4，17:上半年，18:下半年，19:全年）
     * @var int
     */
    protected ?int $monthQuarter = null;

    /**
     * 结算季度/月name
     * @var string
     */
    protected ?string $monthQuarterName = null;

    /**
     * 业绩基数 单位 元 保留2位小数
     * @var float
     */
    protected ?float $performanceAmount = null;

    /**
     * 业务线/平台
     * @var int
     */
    protected ?int $platform = null;

    /**
     * 业务线/平台name
     * @var string
     */
    protected ?string $platformName = null;

    /**
     * 返点核算信息ID
     * @var int
     */
    protected ?int $rebateAccountingInfoId = null;

    /**
     * 返点核算信息编号（与平台披露编号一致，建议使用）
     * @var string
     */
    protected ?string $rebateAccountingInfoSerial = null;

    /**
     * 返点流水ID
     * @var int
     */
    protected ?int $rebateBalanceId = null;

    /**
     * 返点流水编号（与平台披露编号一致，建议使用）
     * @var string
     */
    protected ?string $rebateBalanceSerial = null;

    /**
     * 是否复算
     * @var int
     */
    protected ?int $recheck = null;

    /**
     * 是否复算name
     * @var string
     */
    protected ?string $recheckName = null;

    /**
     * 复算关联返点核算流水
     * @var string
     */
    protected ?string $recheckRelatedNo = null;

    /**
     * 审批状态code
     * @var int
     */
    protected ?int $status = null;

    /**
     * 审批状态name
     * @var string
     */
    protected ?string $statusName = null;

    /**
     * 返点结算类型
     * @var int
     */
    protected ?int $type = null;

    /**
     * 返点结算类型name
     * @var string
     */
    protected ?string $typeName = null;

    /**
     * 使用类型name
     * @var string[]
     */
    protected ?array $useTypeNames = null;

    /**
     * 使用类型list
     * @var int[]
     */
    protected ?array $useTypes = null;

    /**
     * 结算年份 例：2024
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
     * 代理商name
     * @return string
     */
    public function getAgentName(): ?string
    {
        return $this->agentName;
    }

    /**
     * 代理商name
     * @param string $agentName
     * @return self
     */
    public function setAgentName(?string $agentName): self
    {
        $this->agentName = $agentName;
        return $this;
    }

    /**
     * 返点金额 单位 元 保留2位小数
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * 返点金额 单位 元 保留2位小数
     * @param float $amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
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
     * 创建时间 2000-01-01 00:00:00
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间 2000-01-01 00:00:00
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 当前审批节点名称 （待代理商审批/待平台复核终审/审批完成）
     * @return string
     */
    public function getCurrentApprovalStatusName(): ?string
    {
        return $this->currentApprovalStatusName;
    }

    /**
     * 当前审批节点名称 （待代理商审批/待平台复核终审/审批完成）
     * @param string $currentApprovalStatusName
     * @return self
     */
    public function setCurrentApprovalStatusName(?string $currentApprovalStatusName): self
    {
        $this->currentApprovalStatusName = $currentApprovalStatusName;
        return $this;
    }

    /**
     * 激励名称
     * @return string
     */
    public function getInspireName(): ?string
    {
        return $this->inspireName;
    }

    /**
     * 激励名称
     * @param string $inspireName
     * @return self
     */
    public function setInspireName(?string $inspireName): self
    {
        $this->inspireName = $inspireName;
        return $this;
    }

    /**
     * 是否已创建返点 1:是 2:否
     * @return int
     */
    public function getIsCreateRebate(): ?int
    {
        return $this->isCreateRebate;
    }

    /**
     * 是否已创建返点 1:是 2:否
     * @param int $isCreateRebate
     * @return self
     */
    public function setIsCreateRebate(?int $isCreateRebate): self
    {
        $this->isCreateRebate = $isCreateRebate;
        return $this;
    }

    /**
     * 是否已创建返点name (\"是\"、\"否\")
     * @return string
     */
    public function getIsCreateRebateName(): ?string
    {
        return $this->isCreateRebateName;
    }

    /**
     * 是否已创建返点name (\"是\"、\"否\")
     * @param string $isCreateRebateName
     * @return self
     */
    public function setIsCreateRebateName(?string $isCreateRebateName): self
    {
        $this->isCreateRebateName = $isCreateRebateName;
        return $this;
    }

    /**
     * 结算季度/月 （1:1月，2:2月，3:3月，4:4月，5:5月，6:6月，7:7月，8:8月，9:9月，10:10月，11:11月，12:12月，13:Q1，14:Q2，15:Q3，16:Q4，17:上半年，18:下半年，19:全年）
     * @return int
     */
    public function getMonthQuarter(): ?int
    {
        return $this->monthQuarter;
    }

    /**
     * 结算季度/月 （1:1月，2:2月，3:3月，4:4月，5:5月，6:6月，7:7月，8:8月，9:9月，10:10月，11:11月，12:12月，13:Q1，14:Q2，15:Q3，16:Q4，17:上半年，18:下半年，19:全年）
     * @param int $monthQuarter
     * @return self
     */
    public function setMonthQuarter(?int $monthQuarter): self
    {
        $this->monthQuarter = $monthQuarter;
        return $this;
    }

    /**
     * 结算季度/月name
     * @return string
     */
    public function getMonthQuarterName(): ?string
    {
        return $this->monthQuarterName;
    }

    /**
     * 结算季度/月name
     * @param string $monthQuarterName
     * @return self
     */
    public function setMonthQuarterName(?string $monthQuarterName): self
    {
        $this->monthQuarterName = $monthQuarterName;
        return $this;
    }

    /**
     * 业绩基数 单位 元 保留2位小数
     * @return float
     */
    public function getPerformanceAmount(): ?float
    {
        return $this->performanceAmount;
    }

    /**
     * 业绩基数 单位 元 保留2位小数
     * @param float $performanceAmount
     * @return self
     */
    public function setPerformanceAmount(?float $performanceAmount): self
    {
        $this->performanceAmount = $performanceAmount;
        return $this;
    }

    /**
     * 业务线/平台
     * @return int
     */
    public function getPlatform(): ?int
    {
        return $this->platform;
    }

    /**
     * 业务线/平台
     * @param int $platform
     * @return self
     */
    public function setPlatform(?int $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 业务线/平台name
     * @return string
     */
    public function getPlatformName(): ?string
    {
        return $this->platformName;
    }

    /**
     * 业务线/平台name
     * @param string $platformName
     * @return self
     */
    public function setPlatformName(?string $platformName): self
    {
        $this->platformName = $platformName;
        return $this;
    }

    /**
     * 返点核算信息ID
     * @return int
     */
    public function getRebateAccountingInfoId(): ?int
    {
        return $this->rebateAccountingInfoId;
    }

    /**
     * 返点核算信息ID
     * @param int $rebateAccountingInfoId
     * @return self
     */
    public function setRebateAccountingInfoId(?int $rebateAccountingInfoId): self
    {
        $this->rebateAccountingInfoId = $rebateAccountingInfoId;
        return $this;
    }

    /**
     * 返点核算信息编号（与平台披露编号一致，建议使用）
     * @return string
     */
    public function getRebateAccountingInfoSerial(): ?string
    {
        return $this->rebateAccountingInfoSerial;
    }

    /**
     * 返点核算信息编号（与平台披露编号一致，建议使用）
     * @param string $rebateAccountingInfoSerial
     * @return self
     */
    public function setRebateAccountingInfoSerial(?string $rebateAccountingInfoSerial): self
    {
        $this->rebateAccountingInfoSerial = $rebateAccountingInfoSerial;
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
     * 返点流水编号（与平台披露编号一致，建议使用）
     * @return string
     */
    public function getRebateBalanceSerial(): ?string
    {
        return $this->rebateBalanceSerial;
    }

    /**
     * 返点流水编号（与平台披露编号一致，建议使用）
     * @param string $rebateBalanceSerial
     * @return self
     */
    public function setRebateBalanceSerial(?string $rebateBalanceSerial): self
    {
        $this->rebateBalanceSerial = $rebateBalanceSerial;
        return $this;
    }

    /**
     * 是否复算
     * @return int
     */
    public function getRecheck(): ?int
    {
        return $this->recheck;
    }

    /**
     * 是否复算
     * @param int $recheck
     * @return self
     */
    public function setRecheck(?int $recheck): self
    {
        $this->recheck = $recheck;
        return $this;
    }

    /**
     * 是否复算name
     * @return string
     */
    public function getRecheckName(): ?string
    {
        return $this->recheckName;
    }

    /**
     * 是否复算name
     * @param string $recheckName
     * @return self
     */
    public function setRecheckName(?string $recheckName): self
    {
        $this->recheckName = $recheckName;
        return $this;
    }

    /**
     * 复算关联返点核算流水
     * @return string
     */
    public function getRecheckRelatedNo(): ?string
    {
        return $this->recheckRelatedNo;
    }

    /**
     * 复算关联返点核算流水
     * @param string $recheckRelatedNo
     * @return self
     */
    public function setRecheckRelatedNo(?string $recheckRelatedNo): self
    {
        $this->recheckRelatedNo = $recheckRelatedNo;
        return $this;
    }

    /**
     * 审批状态code
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 审批状态code
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 审批状态name
     * @return string
     */
    public function getStatusName(): ?string
    {
        return $this->statusName;
    }

    /**
     * 审批状态name
     * @param string $statusName
     * @return self
     */
    public function setStatusName(?string $statusName): self
    {
        $this->statusName = $statusName;
        return $this;
    }

    /**
     * 返点结算类型
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * 返点结算类型
     * @param int $type
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * 返点结算类型name
     * @return string
     */
    public function getTypeName(): ?string
    {
        return $this->typeName;
    }

    /**
     * 返点结算类型name
     * @param string $typeName
     * @return self
     */
    public function setTypeName(?string $typeName): self
    {
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * 使用类型name
     * @return string[]
     */
    public function getUseTypeNames(): ?array
    {
        return $this->useTypeNames;
    }

    /**
     * 使用类型name
     * @param string[] $useTypeNames
     * @return self
     */
    public function setUseTypeNames(?array $useTypeNames): self
    {
        $this->useTypeNames = $useTypeNames;
        return $this;
    }

    /**
     * 使用类型list
     * @return int[]
     */
    public function getUseTypes(): ?array
    {
        return $this->useTypes;
    }

    /**
     * 使用类型list
     * @param int[] $useTypes
     * @return self
     */
    public function setUseTypes(?array $useTypes): self
    {
        $this->useTypes = $useTypes;
        return $this;
    }

    /**
     * 结算年份 例：2024
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * 结算年份 例：2024
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
        if ($this->billingType !== null) {
            $result['billing_type'] = $this->billingType;
        }
        if ($this->billingTypeName !== null) {
            $result['billing_type_name'] = $this->billingTypeName;
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
        if ($this->inspireName !== null) {
            $result['inspire_name'] = $this->inspireName;
        }
        if ($this->isCreateRebate !== null) {
            $result['is_create_rebate'] = $this->isCreateRebate;
        }
        if ($this->isCreateRebateName !== null) {
            $result['is_create_rebate_name'] = $this->isCreateRebateName;
        }
        if ($this->monthQuarter !== null) {
            $result['month_quarter'] = $this->monthQuarter;
        }
        if ($this->monthQuarterName !== null) {
            $result['month_quarter_name'] = $this->monthQuarterName;
        }
        if ($this->performanceAmount !== null) {
            $result['performance_amount'] = $this->performanceAmount;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->platformName !== null) {
            $result['platform_name'] = $this->platformName;
        }
        if ($this->rebateAccountingInfoId !== null) {
            $result['rebate_accounting_info_id'] = $this->rebateAccountingInfoId;
        }
        if ($this->rebateAccountingInfoSerial !== null) {
            $result['rebate_accounting_info_serial'] = $this->rebateAccountingInfoSerial;
        }
        if ($this->rebateBalanceId !== null) {
            $result['rebate_balance_id'] = $this->rebateBalanceId;
        }
        if ($this->rebateBalanceSerial !== null) {
            $result['rebate_balance_serial'] = $this->rebateBalanceSerial;
        }
        if ($this->recheck !== null) {
            $result['recheck'] = $this->recheck;
        }
        if ($this->recheckName !== null) {
            $result['recheck_name'] = $this->recheckName;
        }
        if ($this->recheckRelatedNo !== null) {
            $result['recheck_related_no'] = $this->recheckRelatedNo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusName !== null) {
            $result['status_name'] = $this->statusName;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->typeName !== null) {
            $result['type_name'] = $this->typeName;
        }
        if ($this->useTypeNames !== null) {
            $result['use_type_names'] = $this->useTypeNames;
        }
        if ($this->useTypes !== null) {
            $result['use_types'] = $this->useTypes;
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
        if (($v = $data['billing_type'] ?? null) !== null) {
            $obj->billingType = (int) $v;
        }
        if (($v = $data['billing_type_name'] ?? null) !== null) {
            $obj->billingTypeName = (string) $v;
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
        if (($v = $data['inspire_name'] ?? null) !== null) {
            $obj->inspireName = (string) $v;
        }
        if (($v = $data['is_create_rebate'] ?? null) !== null) {
            $obj->isCreateRebate = (int) $v;
        }
        if (($v = $data['is_create_rebate_name'] ?? null) !== null) {
            $obj->isCreateRebateName = (string) $v;
        }
        if (($v = $data['month_quarter'] ?? null) !== null) {
            $obj->monthQuarter = (int) $v;
        }
        if (($v = $data['month_quarter_name'] ?? null) !== null) {
            $obj->monthQuarterName = (string) $v;
        }
        if (($v = $data['performance_amount'] ?? null) !== null) {
            $obj->performanceAmount = (float) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (int) $v;
        }
        if (($v = $data['platform_name'] ?? null) !== null) {
            $obj->platformName = (string) $v;
        }
        if (($v = $data['rebate_accounting_info_id'] ?? null) !== null) {
            $obj->rebateAccountingInfoId = (int) $v;
        }
        if (($v = $data['rebate_accounting_info_serial'] ?? null) !== null) {
            $obj->rebateAccountingInfoSerial = (string) $v;
        }
        if (($v = $data['rebate_balance_id'] ?? null) !== null) {
            $obj->rebateBalanceId = (int) $v;
        }
        if (($v = $data['rebate_balance_serial'] ?? null) !== null) {
            $obj->rebateBalanceSerial = (string) $v;
        }
        if (($v = $data['recheck'] ?? null) !== null) {
            $obj->recheck = (int) $v;
        }
        if (($v = $data['recheck_name'] ?? null) !== null) {
            $obj->recheckName = (string) $v;
        }
        if (($v = $data['recheck_related_no'] ?? null) !== null) {
            $obj->recheckRelatedNo = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['status_name'] ?? null) !== null) {
            $obj->statusName = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        if (($v = $data['type_name'] ?? null) !== null) {
            $obj->typeName = (string) $v;
        }
        if (($v = $data['use_type_names'] ?? null) !== null && is_array($v)) {
            $obj->useTypeNames = $v;
        }
        if (($v = $data['use_types'] ?? null) !== null && is_array($v)) {
            $obj->useTypes = $v;
        }
        if (($v = $data['year'] ?? null) !== null) {
            $obj->year = (int) $v;
        }
        return $obj;
    }
}
