<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryRebateAccountingInfoV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringApprovalStatus
     */
    protected ?string $approvalStatus = null;

    /**
     * @var \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringBillingType
     */
    protected ?string $billingType = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * @var \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringIsCreateRebate
     */
    protected ?string $isCreateRebate = null;

    /**
     * @var \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringMonthQuarter
     */
    protected ?string $monthQuarter = null;

    /**
     * 业务线/平台 (0:AD 3:星图 10031:广告 10063:巨量本地推)
     * @var \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringPlatforms[]
     */
    protected ?array $platforms = null;

    /**
     * 返点核算信息编号
     * @var string
     */
    protected ?string $rebateAccountingInfoSerial = null;

    /**
     * 返点流水号
     * @var string
     */
    protected ?string $rebateBalanceSerial = null;

    /**
     * @var \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringUseType
     */
    protected ?string $useType = null;

    /**
     * 结算周期年 例:2024
     * @var int
     */
    protected ?int $year = null;

    /**
     * @return \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringApprovalStatus
     */
    public function getApprovalStatus(): ?string
    {
        return $this->approvalStatus;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringApprovalStatus $approvalStatus
     * @return self
     */
    public function setApprovalStatus(?string $approvalStatus): self
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringBillingType
     */
    public function getBillingType(): ?string
    {
        return $this->billingType;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringBillingType $billingType
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
     * @return \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringIsCreateRebate
     */
    public function getIsCreateRebate(): ?string
    {
        return $this->isCreateRebate;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringIsCreateRebate $isCreateRebate
     * @return self
     */
    public function setIsCreateRebate(?string $isCreateRebate): self
    {
        $this->isCreateRebate = $isCreateRebate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringMonthQuarter
     */
    public function getMonthQuarter(): ?string
    {
        return $this->monthQuarter;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringMonthQuarter $monthQuarter
     * @return self
     */
    public function setMonthQuarter(?string $monthQuarter): self
    {
        $this->monthQuarter = $monthQuarter;
        return $this;
    }

    /**
     * 业务线/平台 (0:AD 3:星图 10031:广告 10063:巨量本地推)
     * @return \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringPlatforms[]
     */
    public function getPlatforms(): ?array
    {
        return $this->platforms;
    }

    /**
     * 业务线/平台 (0:AD 3:星图 10031:广告 10063:巨量本地推)
     * @param \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringPlatforms[] $platforms
     * @return self
     */
    public function setPlatforms(?array $platforms): self
    {
        $this->platforms = $platforms;
        return $this;
    }

    /**
     * 返点核算信息编号
     * @return string
     */
    public function getRebateAccountingInfoSerial(): ?string
    {
        return $this->rebateAccountingInfoSerial;
    }

    /**
     * 返点核算信息编号
     * @param string $rebateAccountingInfoSerial
     * @return self
     */
    public function setRebateAccountingInfoSerial(?string $rebateAccountingInfoSerial): self
    {
        $this->rebateAccountingInfoSerial = $rebateAccountingInfoSerial;
        return $this;
    }

    /**
     * 返点流水号
     * @return string
     */
    public function getRebateBalanceSerial(): ?string
    {
        return $this->rebateBalanceSerial;
    }

    /**
     * 返点流水号
     * @param string $rebateBalanceSerial
     * @return self
     */
    public function setRebateBalanceSerial(?string $rebateBalanceSerial): self
    {
        $this->rebateBalanceSerial = $rebateBalanceSerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringUseType
     */
    public function getUseType(): ?string
    {
        return $this->useType;
    }

    /**
     * @param \Oceanengine\Models\QueryRebateAccountingInfoV2FilteringUseType $useType
     * @return self
     */
    public function setUseType(?string $useType): self
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * 结算周期年 例:2024
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * 结算周期年 例:2024
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
        if ($this->billingType !== null) {
            $result['billing_type'] = $this->billingType;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->isCreateRebate !== null) {
            $result['is_create_rebate'] = $this->isCreateRebate;
        }
        if ($this->monthQuarter !== null) {
            $result['month_quarter'] = $this->monthQuarter;
        }
        if ($this->platforms !== null) {
            $result['platforms'] = $this->platforms;
        }
        if ($this->rebateAccountingInfoSerial !== null) {
            $result['rebate_accounting_info_serial'] = $this->rebateAccountingInfoSerial;
        }
        if ($this->rebateBalanceSerial !== null) {
            $result['rebate_balance_serial'] = $this->rebateBalanceSerial;
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
        if (($v = $data['billing_type'] ?? null) !== null) {
            $obj->billingType = (string) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['is_create_rebate'] ?? null) !== null) {
            $obj->isCreateRebate = (string) $v;
        }
        if (($v = $data['month_quarter'] ?? null) !== null) {
            $obj->monthQuarter = (string) $v;
        }
        if (($v = $data['platforms'] ?? null) !== null && is_array($v)) {
            $obj->platforms = $v;
        }
        if (($v = $data['rebate_accounting_info_serial'] ?? null) !== null) {
            $obj->rebateAccountingInfoSerial = (string) $v;
        }
        if (($v = $data['rebate_balance_serial'] ?? null) !== null) {
            $obj->rebateBalanceSerial = (string) $v;
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
