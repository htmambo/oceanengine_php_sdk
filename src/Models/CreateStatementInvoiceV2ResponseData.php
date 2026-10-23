<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreateStatementInvoiceV2ResponseData implements \JsonSerializable
{
    /**
     * 申请单编号
     * @var string
     */
    protected ?string $invoiceSerial = null;

    /**
     * 申请单编号
     * @return string
     */
    public function getInvoiceSerial(): ?string
    {
        return $this->invoiceSerial;
    }

    /**
     * 申请单编号
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
