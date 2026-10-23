<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceTaxV2ResponseDataInvoiceListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInner[]
     */
    protected ?array $billList = null;

    /**
     * @var string
     */
    protected ?string $invoiceSerial = null;

    /**
     * @return \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInner[]
     */
    public function getBillList(): ?array
    {
        return $this->billList;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInner[] $billList
     * @return self
     */
    public function setBillList(?array $billList): self
    {
        $this->billList = $billList;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceSerial(): ?string
    {
        return $this->invoiceSerial;
    }

    /**
     * @param string $invoiceSerial
     * @return self
     */
    public function setInvoiceSerial(?string $invoiceSerial): self
    {
        $this->invoiceSerial = $invoiceSerial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->billList !== null) {
            $result['bill_list'] = $this->billList;
        }
        if ($this->invoiceSerial !== null) {
            $result['invoice_serial'] = $this->invoiceSerial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bill_list'] ?? null) !== null && is_array($v)) {
            $obj->billList = array_map(fn ($vv) => \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInnerBillListInner::fromArray($vv), $v);
        }
        if (($v = $data['invoice_serial'] ?? null) !== null) {
            $obj->invoiceSerial = (string) $v;
        }
        return $obj;
    }
}
