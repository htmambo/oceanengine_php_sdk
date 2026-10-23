<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $field = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterOperator
     */
    protected ?string $operator = null;

    /**
     * @var float[]
     */
    protected ?array $values = null;

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
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterOperator
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterOperator $operator
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param float[] $values
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->values = $values;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->field !== null) {
            $result['field'] = $this->field;
        }
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
        }
        if ($this->values !== null) {
            $result['values'] = $this->values;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['field'] ?? null) !== null) {
            $obj->field = (string) $v;
        }
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (string) $v;
        }
        if (($v = $data['values'] ?? null) !== null && is_array($v)) {
            $obj->values = $v;
        }
        return $obj;
    }
}
