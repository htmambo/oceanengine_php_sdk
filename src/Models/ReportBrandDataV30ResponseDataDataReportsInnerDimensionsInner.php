<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandDataV30ResponseDataDataReportsInnerDimensionsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $dimension = null;

    /**
     * @var string
     */
    protected ?string $value = null;

    /**
     * @var string
     */
    protected ?string $valueStr = null;

    /**
     * @return string
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @param string $dimension
     * @return self
     */
    public function setDimension(?string $dimension): self
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValueStr(): ?string
    {
        return $this->valueStr;
    }

    /**
     * @param string $valueStr
     * @return self
     */
    public function setValueStr(?string $valueStr): self
    {
        $this->valueStr = $valueStr;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dimension !== null) {
            $result['dimension'] = $this->dimension;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->valueStr !== null) {
            $result['value_str'] = $this->valueStr;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dimension'] ?? null) !== null) {
            $obj->dimension = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        if (($v = $data['value_str'] ?? null) !== null) {
            $obj->valueStr = (string) $v;
        }
        return $obj;
    }
}
