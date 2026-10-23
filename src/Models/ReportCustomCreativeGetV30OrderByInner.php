<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomCreativeGetV30OrderByInner implements \JsonSerializable
{
    /**
     * 排序字段
     * @var string
     */
    protected ?string $field = null;

    /**
     * @var \Oceanengine\Models\ReportCustomCreativeGetV30OrderByType
     */
    protected ?string $type = null;

    /**
     * 排序字段
     * @return string
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * 排序字段
     * @param string $field
     * @return self
     */
    public function setField(?string $field): self
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomCreativeGetV30OrderByType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomCreativeGetV30OrderByType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['field'] ?? null) !== null) {
            $obj->field = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
