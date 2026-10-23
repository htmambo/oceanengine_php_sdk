<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceApplyOrderCreateV30RequestInvoiceProjectInfo implements \JsonSerializable
{
    /**
     * 规格型号
     * @var string
     */
    protected ?string $specifications = null;

    /**
     * 单位
     * @var string
     */
    protected ?string $unit = null;

    /**
     * 规格型号
     * @return string
     */
    public function getSpecifications(): ?string
    {
        return $this->specifications;
    }

    /**
     * 规格型号
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
        if (($v = $data['specifications'] ?? null) !== null) {
            $obj->specifications = (string) $v;
        }
        if (($v = $data['unit'] ?? null) !== null) {
            $obj->unit = (string) $v;
        }
        return $obj;
    }
}
