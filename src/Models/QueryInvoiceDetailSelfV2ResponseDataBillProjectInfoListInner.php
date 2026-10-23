<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceDetailSelfV2ResponseDataBillProjectInfoListInner implements \JsonSerializable
{
    /**
     * 开票项目金额
     * @var float
     */
    protected ?float $invoiceProjectAmount = null;

    /**
     * 开票项目名称
     * @var string
     */
    protected ?string $invoiceProjectName = null;

    /**
     * 开具日期
     * @var string
     */
    protected ?string $issueDate = null;

    /**
     * 打印备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 开票项目金额
     * @return float
     */
    public function getInvoiceProjectAmount(): ?float
    {
        return $this->invoiceProjectAmount;
    }

    /**
     * 开票项目金额
     * @param float $invoiceProjectAmount
     * @return self
     */
    public function setInvoiceProjectAmount(?float $invoiceProjectAmount): self
    {
        $this->invoiceProjectAmount = $invoiceProjectAmount;
        return $this;
    }

    /**
     * 开票项目名称
     * @return string
     */
    public function getInvoiceProjectName(): ?string
    {
        return $this->invoiceProjectName;
    }

    /**
     * 开票项目名称
     * @param string $invoiceProjectName
     * @return self
     */
    public function setInvoiceProjectName(?string $invoiceProjectName): self
    {
        $this->invoiceProjectName = $invoiceProjectName;
        return $this;
    }

    /**
     * 开具日期
     * @return string
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    /**
     * 开具日期
     * @param string $issueDate
     * @return self
     */
    public function setIssueDate(?string $issueDate): self
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * 打印备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 打印备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->invoiceProjectAmount !== null) {
            $result['invoice_project_amount'] = $this->invoiceProjectAmount;
        }
        if ($this->invoiceProjectName !== null) {
            $result['invoice_project_name'] = $this->invoiceProjectName;
        }
        if ($this->issueDate !== null) {
            $result['issue_date'] = $this->issueDate;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invoice_project_amount'] ?? null) !== null) {
            $obj->invoiceProjectAmount = (float) $v;
        }
        if (($v = $data['invoice_project_name'] ?? null) !== null) {
            $obj->invoiceProjectName = (string) $v;
        }
        if (($v = $data['issue_date'] ?? null) !== null) {
            $obj->issueDate = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        return $obj;
    }
}
