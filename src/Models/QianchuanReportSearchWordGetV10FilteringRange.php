<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportSearchWordGetV10FilteringRange implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRangeCalculation
     */
    protected ?string $calculation = null;

    /**
     * @var string
     */
    protected ?string $field = null;

    /**
     * @var string
     */
    protected ?string $value = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRangeCalculation
     */
    public function getCalculation(): ?string
    {
        return $this->calculation;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportSearchWordGetV10FilteringRangeCalculation $calculation
     * @return self
     */
    public function setCalculation(?string $calculation): self
    {
        $this->calculation = $calculation;
        return $this;
    }

    /**
     * @return string
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return self
     */
    public function setField(?string $field): self
    {
        $this->field = $field;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->calculation !== null) {
            $result['calculation'] = $this->calculation;
        }
        if ($this->field !== null) {
            $result['field'] = $this->field;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['calculation'] ?? null) !== null) {
            $obj->calculation = (string) $v;
        }
        if (($v = $data['field'] ?? null) !== null) {
            $obj->field = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
