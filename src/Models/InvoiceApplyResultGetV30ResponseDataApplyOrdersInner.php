<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceApplyResultGetV30ResponseDataApplyOrdersInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $applyAmount = null;

    /**
     * @var string
     */
    protected ?string $applySerial = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus
     */
    protected ?string $invoiceStatus = null;

    /**
     * @return int
     */
    public function getApplyAmount(): ?int
    {
        return $this->applyAmount;
    }

    /**
     * @param int $applyAmount
     * @return self
     */
    public function setApplyAmount(?int $applyAmount): self
    {
        $this->applyAmount = $applyAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplySerial(): ?string
    {
        return $this->applySerial;
    }

    /**
     * @param string $applySerial
     * @return self
     */
    public function setApplySerial(?string $applySerial): self
    {
        $this->applySerial = $applySerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus
     */
    public function getInvoiceStatus(): ?string
    {
        return $this->invoiceStatus;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyResultGetV30DataApplyOrdersInvoiceStatus $invoiceStatus
     * @return self
     */
    public function setInvoiceStatus(?string $invoiceStatus): self
    {
        $this->invoiceStatus = $invoiceStatus;
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
        if ($this->applySerial !== null) {
            $result['apply_serial'] = $this->applySerial;
        }
        if ($this->invoiceStatus !== null) {
            $result['invoice_status'] = $this->invoiceStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_amount'] ?? null) !== null) {
            $obj->applyAmount = (int) $v;
        }
        if (($v = $data['apply_serial'] ?? null) !== null) {
            $obj->applySerial = (string) $v;
        }
        if (($v = $data['invoice_status'] ?? null) !== null) {
            $obj->invoiceStatus = (string) $v;
        }
        return $obj;
    }
}
