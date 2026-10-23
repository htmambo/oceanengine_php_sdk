<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceTaxV2Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $invoiceSerial = null;

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
        if ($this->invoiceSerial !== null) {
            $result['invoice_serial'] = $this->invoiceSerial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invoice_serial'] ?? null) !== null) {
            $obj->invoiceSerial = (string) $v;
        }
        return $obj;
    }
}
