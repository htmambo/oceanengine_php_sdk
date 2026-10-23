<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceV2Filtering implements \JsonSerializable
{
    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * @var \Oceanengine\Models\QueryInvoiceV2FilteringDifferenceInvoice
     */
    protected ?string $differenceInvoice = null;

    /**
     * 实际开票时间范围结束时间，格式：%Y-%m-%d
     * @var string
     */
    protected ?string $invoiceEndDate = null;

    /**
     * 开票单编号
     * @var string[]
     */
    protected ?array $invoiceSerialList = null;

    /**
     * 实际开票时间范围开始时间，格式：%Y-%m-%d
     * @var string
     */
    protected ?string $invoiceStartDate = null;

    /**
     * @var int[]
     */
    protected ?array $invoiceStatuses = null;

    /**
     * @var \Oceanengine\Models\QueryInvoiceV2FilteringInvoiceType
     */
    protected ?string $invoiceType = null;

    /**
     * @var \Oceanengine\Models\QueryInvoiceV2FilteringPlatform
     */
    protected ?string $platform = null;

    /**
     * @var string[]
     */
    protected ?array $projectSerials = null;

    /**
     * 红冲状态
     * @var \Oceanengine\Models\QueryInvoiceV2FilteringRevertStatusList[]
     */
    protected ?array $revertStatusList = null;

    /**
     * @var string[]
     */
    protected ?array $statementSerials = null;

    /**
     * 提交审批时间范围结束时间，格式：%Y-%m-%d %H:%M:%S
     * @var string
     */
    protected ?string $submitEndTime = null;

    /**
     * 提交审批时间范围开始时间，格式：%Y-%m-%d %H:%M:%S
     * @var string
     */
    protected ?string $submitStartTime = null;

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
     * @return \Oceanengine\Models\QueryInvoiceV2FilteringDifferenceInvoice
     */
    public function getDifferenceInvoice(): ?string
    {
        return $this->differenceInvoice;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceV2FilteringDifferenceInvoice $differenceInvoice
     * @return self
     */
    public function setDifferenceInvoice(?string $differenceInvoice): self
    {
        $this->differenceInvoice = $differenceInvoice;
        return $this;
    }

    /**
     * 实际开票时间范围结束时间，格式：%Y-%m-%d
     * @return string
     */
    public function getInvoiceEndDate(): ?string
    {
        return $this->invoiceEndDate;
    }

    /**
     * 实际开票时间范围结束时间，格式：%Y-%m-%d
     * @param string $invoiceEndDate
     * @return self
     */
    public function setInvoiceEndDate(?string $invoiceEndDate): self
    {
        $this->invoiceEndDate = $invoiceEndDate;
        return $this;
    }

    /**
     * 开票单编号
     * @return string[]
     */
    public function getInvoiceSerialList(): ?array
    {
        return $this->invoiceSerialList;
    }

    /**
     * 开票单编号
     * @param string[] $invoiceSerialList
     * @return self
     */
    public function setInvoiceSerialList(?array $invoiceSerialList): self
    {
        $this->invoiceSerialList = $invoiceSerialList;
        return $this;
    }

    /**
     * 实际开票时间范围开始时间，格式：%Y-%m-%d
     * @return string
     */
    public function getInvoiceStartDate(): ?string
    {
        return $this->invoiceStartDate;
    }

    /**
     * 实际开票时间范围开始时间，格式：%Y-%m-%d
     * @param string $invoiceStartDate
     * @return self
     */
    public function setInvoiceStartDate(?string $invoiceStartDate): self
    {
        $this->invoiceStartDate = $invoiceStartDate;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getInvoiceStatuses(): ?array
    {
        return $this->invoiceStatuses;
    }

    /**
     * @param int[] $invoiceStatuses
     * @return self
     */
    public function setInvoiceStatuses(?array $invoiceStatuses): self
    {
        $this->invoiceStatuses = $invoiceStatuses;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryInvoiceV2FilteringInvoiceType
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceV2FilteringInvoiceType $invoiceType
     * @return self
     */
    public function setInvoiceType(?string $invoiceType): self
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryInvoiceV2FilteringPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceV2FilteringPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProjectSerials(): ?array
    {
        return $this->projectSerials;
    }

    /**
     * @param string[] $projectSerials
     * @return self
     */
    public function setProjectSerials(?array $projectSerials): self
    {
        $this->projectSerials = $projectSerials;
        return $this;
    }

    /**
     * 红冲状态
     * @return \Oceanengine\Models\QueryInvoiceV2FilteringRevertStatusList[]
     */
    public function getRevertStatusList(): ?array
    {
        return $this->revertStatusList;
    }

    /**
     * 红冲状态
     * @param \Oceanengine\Models\QueryInvoiceV2FilteringRevertStatusList[] $revertStatusList
     * @return self
     */
    public function setRevertStatusList(?array $revertStatusList): self
    {
        $this->revertStatusList = $revertStatusList;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatementSerials(): ?array
    {
        return $this->statementSerials;
    }

    /**
     * @param string[] $statementSerials
     * @return self
     */
    public function setStatementSerials(?array $statementSerials): self
    {
        $this->statementSerials = $statementSerials;
        return $this;
    }

    /**
     * 提交审批时间范围结束时间，格式：%Y-%m-%d %H:%M:%S
     * @return string
     */
    public function getSubmitEndTime(): ?string
    {
        return $this->submitEndTime;
    }

    /**
     * 提交审批时间范围结束时间，格式：%Y-%m-%d %H:%M:%S
     * @param string $submitEndTime
     * @return self
     */
    public function setSubmitEndTime(?string $submitEndTime): self
    {
        $this->submitEndTime = $submitEndTime;
        return $this;
    }

    /**
     * 提交审批时间范围开始时间，格式：%Y-%m-%d %H:%M:%S
     * @return string
     */
    public function getSubmitStartTime(): ?string
    {
        return $this->submitStartTime;
    }

    /**
     * 提交审批时间范围开始时间，格式：%Y-%m-%d %H:%M:%S
     * @param string $submitStartTime
     * @return self
     */
    public function setSubmitStartTime(?string $submitStartTime): self
    {
        $this->submitStartTime = $submitStartTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->differenceInvoice !== null) {
            $result['difference_invoice'] = $this->differenceInvoice;
        }
        if ($this->invoiceEndDate !== null) {
            $result['invoice_end_date'] = $this->invoiceEndDate;
        }
        if ($this->invoiceSerialList !== null) {
            $result['invoice_serial_list'] = $this->invoiceSerialList;
        }
        if ($this->invoiceStartDate !== null) {
            $result['invoice_start_date'] = $this->invoiceStartDate;
        }
        if ($this->invoiceStatuses !== null) {
            $result['invoice_statuses'] = $this->invoiceStatuses;
        }
        if ($this->invoiceType !== null) {
            $result['invoice_type'] = $this->invoiceType;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->projectSerials !== null) {
            $result['project_serials'] = $this->projectSerials;
        }
        if ($this->revertStatusList !== null) {
            $result['revert_status_list'] = $this->revertStatusList;
        }
        if ($this->statementSerials !== null) {
            $result['statement_serials'] = $this->statementSerials;
        }
        if ($this->submitEndTime !== null) {
            $result['submit_end_time'] = $this->submitEndTime;
        }
        if ($this->submitStartTime !== null) {
            $result['submit_start_time'] = $this->submitStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['difference_invoice'] ?? null) !== null) {
            $obj->differenceInvoice = (string) $v;
        }
        if (($v = $data['invoice_end_date'] ?? null) !== null) {
            $obj->invoiceEndDate = (string) $v;
        }
        if (($v = $data['invoice_serial_list'] ?? null) !== null && is_array($v)) {
            $obj->invoiceSerialList = $v;
        }
        if (($v = $data['invoice_start_date'] ?? null) !== null) {
            $obj->invoiceStartDate = (string) $v;
        }
        if (($v = $data['invoice_statuses'] ?? null) !== null && is_array($v)) {
            $obj->invoiceStatuses = $v;
        }
        if (($v = $data['invoice_type'] ?? null) !== null) {
            $obj->invoiceType = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['project_serials'] ?? null) !== null && is_array($v)) {
            $obj->projectSerials = $v;
        }
        if (($v = $data['revert_status_list'] ?? null) !== null && is_array($v)) {
            $obj->revertStatusList = $v;
        }
        if (($v = $data['statement_serials'] ?? null) !== null && is_array($v)) {
            $obj->statementSerials = $v;
        }
        if (($v = $data['submit_end_time'] ?? null) !== null) {
            $obj->submitEndTime = (string) $v;
        }
        if (($v = $data['submit_start_time'] ?? null) !== null) {
            $obj->submitStartTime = (string) $v;
        }
        return $obj;
    }
}
