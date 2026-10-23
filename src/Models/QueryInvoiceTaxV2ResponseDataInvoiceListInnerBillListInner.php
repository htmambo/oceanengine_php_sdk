<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInnerBillDetailListInner[]
     */
    protected ?array $billDetailList = null;

    /**
     * @var string
     */
    protected ?string $invoiceCode = null;

    /**
     * @var string
     */
    protected ?string $invoiceDate = null;

    /**
     * @var string
     */
    protected ?string $invoiceNo = null;

    /**
     * @var float
     */
    protected ?float $totalPriceTax = null;

    /**
     * @return \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInnerBillDetailListInner[]
     */
    public function getBillDetailList(): ?array
    {
        return $this->billDetailList;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInnerBillDetailListInner[] $billDetailList
     * @return self
     */
    public function setBillDetailList(?array $billDetailList): self
    {
        $this->billDetailList = $billDetailList;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceCode(): ?string
    {
        return $this->invoiceCode;
    }

    /**
     * @param string $invoiceCode
     * @return self
     */
    public function setInvoiceCode(?string $invoiceCode): self
    {
        $this->invoiceCode = $invoiceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }

    /**
     * @param string $invoiceDate
     * @return self
     */
    public function setInvoiceDate(?string $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }

    /**
     * @param string $invoiceNo
     * @return self
     */
    public function setInvoiceNo(?string $invoiceNo): self
    {
        $this->invoiceNo = $invoiceNo;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->billDetailList !== null) {
            $result['bill_detail_list'] = $this->billDetailList;
        }
        if ($this->invoiceCode !== null) {
            $result['invoice_code'] = $this->invoiceCode;
        }
        if ($this->invoiceDate !== null) {
            $result['invoice_date'] = $this->invoiceDate;
        }
        if ($this->invoiceNo !== null) {
            $result['invoice_no'] = $this->invoiceNo;
        }
        if ($this->totalPriceTax !== null) {
            $result['total_price_tax'] = $this->totalPriceTax;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bill_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->billDetailList = array_map(fn ($vv) => \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInnerBillDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['invoice_code'] ?? null) !== null) {
            $obj->invoiceCode = (string) $v;
        }
        if (($v = $data['invoice_date'] ?? null) !== null) {
            $obj->invoiceDate = (string) $v;
        }
        if (($v = $data['invoice_no'] ?? null) !== null) {
            $obj->invoiceNo = (string) $v;
        }
        if (($v = $data['total_price_tax'] ?? null) !== null) {
            $obj->totalPriceTax = (float) $v;
        }
        return $obj;
    }
}
