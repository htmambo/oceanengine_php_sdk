<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceTaxV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInner[]
     */
    protected ?array $invoiceList = null;

    /**
     * @return \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInner[]
     */
    public function getInvoiceList(): ?array
    {
        return $this->invoiceList;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInner[] $invoiceList
     * @return self
     */
    public function setInvoiceList(?array $invoiceList): self
    {
        $this->invoiceList = $invoiceList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->invoiceList !== null) {
            $result['invoice_list'] = $this->invoiceList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invoice_list'] ?? null) !== null && is_array($v)) {
            $obj->invoiceList = array_map(fn ($vv) => \Oceanengine\Models\QueryInvoiceTaxV2ResponseDataInvoiceListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
