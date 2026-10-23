<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportCustomConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string[]
     */
    protected ?array $exclusionDims = null;

    /**
     * @var string
     */
    protected ?string $field = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $unit = null;

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExclusionDims(): ?array
    {
        return $this->exclusionDims;
    }

    /**
     * @param string[] $exclusionDims
     * @return self
     */
    public function setExclusionDims(?array $exclusionDims): self
    {
        $this->exclusionDims = $exclusionDims;
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnit(): ?int
    {
        return $this->unit;
    }

    /**
     * @param int $unit
     * @return self
     */
    public function setUnit(?int $unit): self
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->exclusionDims !== null) {
            $result['exclusion_dims'] = $this->exclusionDims;
        }
        if ($this->field !== null) {
            $result['field'] = $this->field;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->unit !== null) {
            $result['unit'] = $this->unit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['exclusion_dims'] ?? null) !== null && is_array($v)) {
            $obj->exclusionDims = $v;
        }
        if (($v = $data['field'] ?? null) !== null) {
            $obj->field = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['unit'] ?? null) !== null) {
            $obj->unit = (int) $v;
        }
        return $obj;
    }
}
