<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryRebateBalanceV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringApprovalStatus
     */
    protected ?string $approvalStatus = null;

    /**
     * 回收状态 （1：未回收，2：已回收，3：已归档）
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringArchiveStatusList[]
     */
    protected ?array $archiveStatusList = null;

    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringBillingType
     */
    protected ?string $billingType = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 创建时间范围结束时间
     * @var string
     */
    protected ?string $createEndDate = null;

    /**
     * 创建时间范围开始时间
     * @var string
     */
    protected ?string $createStartDate = null;

    /**
     * 开票状态 （1：未开票，2：部分开票，3：已开票）
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringInvoiceStatusList[]
     */
    protected ?array $invoiceStatusList = null;

    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringMonthQuarter
     */
    protected ?string $monthQuarter = null;

    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringPlatforms[]
     */
    protected ?array $platforms = null;

    /**
     * 返点流水编号 （与平台披露编号一致，建议使用）
     * @var string
     */
    protected ?string $rebateBalanceSerial = null;

    /**
     * 盖章状态 （1：未盖章，2：审批中，3：已盖章）
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringStampStatusList[]
     */
    protected ?array $stampStatusList = null;

    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringStampType
     */
    protected ?string $stampType = null;

    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringStandard
     */
    protected ?string $standard = null;

    /**
     * @var \Oceanengine\Models\QueryRebateBalanceV2FilteringUseType
     */
    protected ?string $useType = null;

    /**
     * 结算周期年
     * @var int
     */
    protected ?int $year = null;

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringApprovalStatus
     */
    public function getApprovalStatus(): ?string
    {
        return $this->approvalStatus;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringApprovalStatus $approvalStatus
     * @return self
     */
    public function setApprovalStatus(?string $approvalStatus): self
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * 回收状态 （1：未回收，2：已回收，3：已归档）
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringArchiveStatusList[]
     */
    public function getArchiveStatusList(): ?array
    {
        return $this->archiveStatusList;
    }

    /**
     * 回收状态 （1：未回收，2：已回收，3：已归档）
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringArchiveStatusList[] $archiveStatusList
     * @return self
     */
    public function setArchiveStatusList(?array $archiveStatusList): self
    {
        $this->archiveStatusList = $archiveStatusList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringBillingType
     */
    public function getBillingType(): ?string
    {
        return $this->billingType;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringBillingType $billingType
     * @return self
     */
    public function setBillingType(?string $billingType): self
    {
        $this->billingType = $billingType;
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
     * 创建时间范围结束时间
     * @return string
     */
    public function getCreateEndDate(): ?string
    {
        return $this->createEndDate;
    }

    /**
     * 创建时间范围结束时间
     * @param string $createEndDate
     * @return self
     */
    public function setCreateEndDate(?string $createEndDate): self
    {
        $this->createEndDate = $createEndDate;
        return $this;
    }

    /**
     * 创建时间范围开始时间
     * @return string
     */
    public function getCreateStartDate(): ?string
    {
        return $this->createStartDate;
    }

    /**
     * 创建时间范围开始时间
     * @param string $createStartDate
     * @return self
     */
    public function setCreateStartDate(?string $createStartDate): self
    {
        $this->createStartDate = $createStartDate;
        return $this;
    }

    /**
     * 开票状态 （1：未开票，2：部分开票，3：已开票）
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringInvoiceStatusList[]
     */
    public function getInvoiceStatusList(): ?array
    {
        return $this->invoiceStatusList;
    }

    /**
     * 开票状态 （1：未开票，2：部分开票，3：已开票）
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringInvoiceStatusList[] $invoiceStatusList
     * @return self
     */
    public function setInvoiceStatusList(?array $invoiceStatusList): self
    {
        $this->invoiceStatusList = $invoiceStatusList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringMonthQuarter
     */
    public function getMonthQuarter(): ?string
    {
        return $this->monthQuarter;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringMonthQuarter $monthQuarter
     * @return self
     */
    public function setMonthQuarter(?string $monthQuarter): self
    {
        $this->monthQuarter = $monthQuarter;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringPlatforms[]
     */
    public function getPlatforms(): ?array
    {
        return $this->platforms;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringPlatforms[] $platforms
     * @return self
     */
    public function setPlatforms(?array $platforms): self
    {
        $this->platforms = $platforms;
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
     * 盖章状态 （1：未盖章，2：审批中，3：已盖章）
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringStampStatusList[]
     */
    public function getStampStatusList(): ?array
    {
        return $this->stampStatusList;
    }

    /**
     * 盖章状态 （1：未盖章，2：审批中，3：已盖章）
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringStampStatusList[] $stampStatusList
     * @return self
     */
    public function setStampStatusList(?array $stampStatusList): self
    {
        $this->stampStatusList = $stampStatusList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringStampType
     */
    public function getStampType(): ?string
    {
        return $this->stampType;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringStampType $stampType
     * @return self
     */
    public function setStampType(?string $stampType): self
    {
        $this->stampType = $stampType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringStandard
     */
    public function getStandard(): ?string
    {
        return $this->standard;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringStandard $standard
     * @return self
     */
    public function setStandard(?string $standard): self
    {
        $this->standard = $standard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateBalanceV2FilteringUseType
     */
    public function getUseType(): ?string
    {
        return $this->useType;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateBalanceV2FilteringUseType $useType
     * @return self
     */
    public function setUseType(?string $useType): self
    {
        $this->useType = $useType;
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
        if ($this->approvalStatus !== null) {
            $result['approval_status'] = $this->approvalStatus;
        }
        if ($this->archiveStatusList !== null) {
            $result['archive_status_list'] = $this->archiveStatusList;
        }
        if ($this->billingType !== null) {
            $result['billing_type'] = $this->billingType;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->createEndDate !== null) {
            $result['create_end_date'] = $this->createEndDate;
        }
        if ($this->createStartDate !== null) {
            $result['create_start_date'] = $this->createStartDate;
        }
        if ($this->invoiceStatusList !== null) {
            $result['invoice_status_list'] = $this->invoiceStatusList;
        }
        if ($this->monthQuarter !== null) {
            $result['month_quarter'] = $this->monthQuarter;
        }
        if ($this->platforms !== null) {
            $result['platforms'] = $this->platforms;
        }
        if ($this->rebateBalanceSerial !== null) {
            $result['rebate_balance_serial'] = $this->rebateBalanceSerial;
        }
        if ($this->stampStatusList !== null) {
            $result['stamp_status_list'] = $this->stampStatusList;
        }
        if ($this->stampType !== null) {
            $result['stamp_type'] = $this->stampType;
        }
        if ($this->standard !== null) {
            $result['standard'] = $this->standard;
        }
        if ($this->useType !== null) {
            $result['use_type'] = $this->useType;
        }
        if ($this->year !== null) {
            $result['year'] = $this->year;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['approval_status'] ?? null) !== null) {
            $obj->approvalStatus = (string) $v;
        }
        if (($v = $data['archive_status_list'] ?? null) !== null && is_array($v)) {
            $obj->archiveStatusList = $v;
        }
        if (($v = $data['billing_type'] ?? null) !== null) {
            $obj->billingType = (string) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['create_end_date'] ?? null) !== null) {
            $obj->createEndDate = (string) $v;
        }
        if (($v = $data['create_start_date'] ?? null) !== null) {
            $obj->createStartDate = (string) $v;
        }
        if (($v = $data['invoice_status_list'] ?? null) !== null && is_array($v)) {
            $obj->invoiceStatusList = $v;
        }
        if (($v = $data['month_quarter'] ?? null) !== null) {
            $obj->monthQuarter = (string) $v;
        }
        if (($v = $data['platforms'] ?? null) !== null && is_array($v)) {
            $obj->platforms = $v;
        }
        if (($v = $data['rebate_balance_serial'] ?? null) !== null) {
            $obj->rebateBalanceSerial = (string) $v;
        }
        if (($v = $data['stamp_status_list'] ?? null) !== null && is_array($v)) {
            $obj->stampStatusList = $v;
        }
        if (($v = $data['stamp_type'] ?? null) !== null) {
            $obj->stampType = (string) $v;
        }
        if (($v = $data['standard'] ?? null) !== null) {
            $obj->standard = (string) $v;
        }
        if (($v = $data['use_type'] ?? null) !== null) {
            $obj->useType = (string) $v;
        }
        if (($v = $data['year'] ?? null) !== null) {
            $obj->year = (int) $v;
        }
        return $obj;
    }
}
