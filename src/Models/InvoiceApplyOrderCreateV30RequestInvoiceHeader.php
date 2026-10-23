<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceApplyOrderCreateV30RequestInvoiceHeader implements \JsonSerializable
{
    /**
     * 购方名称
     * @var string
     */
    protected ?string $buyerName = null;

    /**
     * 购方税号
     * @var string
     */
    protected ?string $buyerTaxNo = null;

    /**
     * 购方名称
     * @return string
     */
    public function getBuyerName(): ?string
    {
        return $this->buyerName;
    }

    /**
     * 购方名称
     * @param string $buyerName
     * @return self
     */
    public function setBuyerName(?string $buyerName): self
    {
        $this->buyerName = $buyerName;
        return $this;
    }

    /**
     * 购方税号
     * @return string
     */
    public function getBuyerTaxNo(): ?string
    {
        return $this->buyerTaxNo;
    }

    /**
     * 购方税号
     * @param string $buyerTaxNo
     * @return self
     */
    public function setBuyerTaxNo(?string $buyerTaxNo): self
    {
        $this->buyerTaxNo = $buyerTaxNo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->buyerName !== null) {
            $result['buyer_name'] = $this->buyerName;
        }
        if ($this->buyerTaxNo !== null) {
            $result['buyer_tax_no'] = $this->buyerTaxNo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['buyer_name'] ?? null) !== null) {
            $obj->buyerName = (string) $v;
        }
        if (($v = $data['buyer_tax_no'] ?? null) !== null) {
            $obj->buyerTaxNo = (string) $v;
        }
        return $obj;
    }
}
