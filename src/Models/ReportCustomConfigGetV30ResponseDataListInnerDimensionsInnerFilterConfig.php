<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfig implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $operator = null;

    /**
     * @var \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfigRangeValueInner[]
     */
    protected ?array $rangeValue = null;

    /**
     * @var int
     */
    protected ?int $type = null;

    /**
     * @var int
     */
    protected ?int $valueLimit = null;

    /**
     * @return int
     */
    public function getOperator(): ?int
    {
        return $this->operator;
    }

    /**
     * @param int $operator
     * @return self
     */
    public function setOperator(?int $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfigRangeValueInner[]
     */
    public function getRangeValue(): ?array
    {
        return $this->rangeValue;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfigRangeValueInner[] $rangeValue
     * @return self
     */
    public function setRangeValue(?array $rangeValue): self
    {
        $this->rangeValue = $rangeValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getValueLimit(): ?int
    {
        return $this->valueLimit;
    }

    /**
     * @param int $valueLimit
     * @return self
     */
    public function setValueLimit(?int $valueLimit): self
    {
        $this->valueLimit = $valueLimit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
        }
        if ($this->rangeValue !== null) {
            $result['range_value'] = $this->rangeValue;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->valueLimit !== null) {
            $result['value_limit'] = $this->valueLimit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (int) $v;
        }
        if (($v = $data['range_value'] ?? null) !== null && is_array($v)) {
            $obj->rangeValue = array_map(fn ($vv) => \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfigRangeValueInner::fromArray($vv), $v);
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        if (($v = $data['value_limit'] ?? null) !== null) {
            $obj->valueLimit = (int) $v;
        }
        return $obj;
    }
}
