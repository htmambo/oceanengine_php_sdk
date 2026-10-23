<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomAsyncTaskCreateV30RequestFiltersInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $field = null;

    /**
     * @var int
     */
    protected ?int $operator = null;

    /**
     * @var int
     */
    protected ?int $type = null;

    /**
     * @var string[]
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
     * @return string[]
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param string[] $values
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
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
            $obj->operator = (int) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        if (($v = $data['values'] ?? null) !== null && is_array($v)) {
            $obj->values = $v;
        }
        return $obj;
    }
}
