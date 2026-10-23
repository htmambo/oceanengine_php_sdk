<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInnerBillDetailListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $amount = null;

    /**
     * @var string
     */
    protected ?string $commodifyServiceName = null;

    /**
     * @var string
     */
    protected ?string $specificationsModels = null;

    /**
     * @var float
     */
    protected ?float $taxAmount = null;

    /**
     * @var float
     */
    protected ?float $taxRate = null;

    /**
     * @var float
     */
    protected ?float $totalPriceTax = null;

    /**
     * @var string
     */
    protected ?string $unit = null;

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommodifyServiceName(): ?string
    {
        return $this->commodifyServiceName;
    }

    /**
     * @param string $commodifyServiceName
     * @return self
     */
    public function setCommodifyServiceName(?string $commodifyServiceName): self
    {
        $this->commodifyServiceName = $commodifyServiceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecificationsModels(): ?string
    {
        return $this->specificationsModels;
    }

    /**
     * @param string $specificationsModels
     * @return self
     */
    public function setSpecificationsModels(?string $specificationsModels): self
    {
        $this->specificationsModels = $specificationsModels;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }

    /**
     * @param float $taxAmount
     * @return self
     */
    public function setTaxAmount(?float $taxAmount): self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate(): ?float
    {
        return $this->taxRate;
    }

    /**
     * @param float $taxRate
     * @return self
     */
    public function setTaxRate(?float $taxRate): self
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPriceTax(): ?float
    {
        return $this->totalPriceTax;
    }

    /**
     * @param float $totalPriceTax
     * @return self
     */
    public function setTotalPriceTax(?float $totalPriceTax): self
    {
        $this->totalPriceTax = $totalPriceTax;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
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
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->commodifyServiceName !== null) {
            $result['commodify_service_name'] = $this->commodifyServiceName;
        }
        if ($this->specificationsModels !== null) {
            $result['specifications_models'] = $this->specificationsModels;
        }
        if ($this->taxAmount !== null) {
            $result['tax_amount'] = $this->taxAmount;
        }
        if ($this->taxRate !== null) {
            $result['tax_rate'] = $this->taxRate;
        }
        if ($this->totalPriceTax !== null) {
            $result['total_price_tax'] = $this->totalPriceTax;
        }
        if ($this->unit !== null) {
            $result['unit'] = $this->unit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (float) $v;
        }
        if (($v = $data['commodify_service_name'] ?? null) !== null) {
            $obj->commodifyServiceName = (string) $v;
        }
        if (($v = $data['specifications_models'] ?? null) !== null) {
            $obj->specificationsModels = (string) $v;
        }
        if (($v = $data['tax_amount'] ?? null) !== null) {
            $obj->taxAmount = (float) $v;
        }
        if (($v = $data['tax_rate'] ?? null) !== null) {
            $obj->taxRate = (float) $v;
        }
        if (($v = $data['total_price_tax'] ?? null) !== null) {
            $obj->totalPriceTax = (float) $v;
        }
        if (($v = $data['unit'] ?? null) !== null) {
            $obj->unit = (string) $v;
        }
        return $obj;
    }
}
