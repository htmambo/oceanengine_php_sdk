<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ServeMarketOrderGetV10ResponseDataOrderListInnerSpecsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $specName = null;

    /**
     * @var string
     */
    protected ?string $specValue = null;

    /**
     * @return string
     */
    public function getSpecName(): ?string
    {
        return $this->specName;
    }

    /**
     * @param string $specName
     * @return self
     */
    public function setSpecName(?string $specName): self
    {
        $this->specName = $specName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecValue(): ?string
    {
        return $this->specValue;
    }

    /**
     * @param string $specValue
     * @return self
     */
    public function setSpecValue(?string $specValue): self
    {
        $this->specValue = $specValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->specName !== null) {
            $result['spec_name'] = $this->specName;
        }
        if ($this->specValue !== null) {
            $result['spec_value'] = $this->specValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['spec_name'] ?? null) !== null) {
            $obj->specName = (string) $v;
        }
        if (($v = $data['spec_value'] ?? null) !== null) {
            $obj->specValue = (string) $v;
        }
        return $obj;
    }
}
