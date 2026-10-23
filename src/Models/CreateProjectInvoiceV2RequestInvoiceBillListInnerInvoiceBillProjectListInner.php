<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreateProjectInvoiceV2RequestInvoiceBillListInnerInvoiceBillProjectListInner implements \JsonSerializable
{
    /**
     * 开票项目金额
     * @var float
     */
    protected ?float $applyAmount = null;

    /**
     * 开票项目名称
     * @var string
     */
    protected ?string $invoiceProjectName = null;

    /**
     * 规则型号
     * @var string
     */
    protected ?string $specifications = null;

    /**
     * 单位
     * @var string
     */
    protected ?string $unit = null;

    /**
     * 开票项目金额
     * @return float
     */
    public function getApplyAmount(): ?float
    {
        return $this->applyAmount;
    }

    /**
     * 开票项目金额
     * @param float $applyAmount
     * @return self
     */
    public function setApplyAmount(?float $applyAmount): self
    {
        $this->applyAmount = $applyAmount;
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
     * 规则型号
     * @return string
     */
    public function getSpecifications(): ?string
    {
        return $this->specifications;
    }

    /**
     * 规则型号
     * @param string $specifications
     * @return self
     */
    public function setSpecifications(?string $specifications): self
    {
        $this->specifications = $specifications;
        return $this;
    }

    /**
     * 单位
     * @return string
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * 单位
     * @param string $unit
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyAmount !== null) {
            $result['apply_amount'] = $this->applyAmount;
        }
        if ($this->invoiceProjectName !== null) {
            $result['invoice_project_name'] = $this->invoiceProjectName;
        }
        if ($this->specifications !== null) {
            $result['specifications'] = $this->specifications;
        }
        if ($this->unit !== null) {
            $result['unit'] = $this->unit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_amount'] ?? null) !== null) {
            $obj->applyAmount = (float) $v;
        }
        if (($v = $data['invoice_project_name'] ?? null) !== null) {
            $obj->invoiceProjectName = (string) $v;
        }
        if (($v = $data['specifications'] ?? null) !== null) {
            $obj->specifications = (string) $v;
        }
        if (($v = $data['unit'] ?? null) !== null) {
            $obj->unit = (string) $v;
        }
        return $obj;
    }
}
