<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomConfigGetV30ResponseDataListInnerDimensionsInner implements \JsonSerializable
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
     * @var string[]
     */
    protected ?array $exclusionMetrics = null;

    /**
     * @var string
     */
    protected ?string $field = null;

    /**
     * @var bool
     */
    protected ?bool $filterAble = null;

    /**
     * @var \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfig
     */
    protected ?\Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfig $filterConfig = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var bool
     */
    protected ?bool $sortAble = null;

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
     * @return string[]
     */
    public function getExclusionMetrics(): ?array
    {
        return $this->exclusionMetrics;
    }

    /**
     * @param string[] $exclusionMetrics
     * @return self
     */
    public function setExclusionMetrics(?array $exclusionMetrics): self
    {
        $this->exclusionMetrics = $exclusionMetrics;
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
     * @return bool
     */
    public function getFilterAble(): ?bool
    {
        return $this->filterAble;
    }

    /**
     * @param bool $filterAble
     * @return self
     */
    public function setFilterAble(?bool $filterAble): self
    {
        $this->filterAble = $filterAble;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfig
     */
    public function getFilterConfig(): ?\Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfig
    {
        return $this->filterConfig;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfig $filterConfig
     * @return self
     */
    public function setFilterConfig(?\Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfig $filterConfig): self
    {
        $this->filterConfig = $filterConfig;
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
     * @return bool
     */
    public function getSortAble(): ?bool
    {
        return $this->sortAble;
    }

    /**
     * @param bool $sortAble
     * @return self
     */
    public function setSortAble(?bool $sortAble): self
    {
        $this->sortAble = $sortAble;
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
        if ($this->exclusionMetrics !== null) {
            $result['exclusion_metrics'] = $this->exclusionMetrics;
        }
        if ($this->field !== null) {
            $result['field'] = $this->field;
        }
        if ($this->filterAble !== null) {
            $result['filter_able'] = $this->filterAble;
        }
        if ($this->filterConfig !== null) {
            $result['filter_config'] = $this->filterConfig;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->sortAble !== null) {
            $result['sort_able'] = $this->sortAble;
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
        if (($v = $data['exclusion_metrics'] ?? null) !== null && is_array($v)) {
            $obj->exclusionMetrics = $v;
        }
        if (($v = $data['field'] ?? null) !== null) {
            $obj->field = (string) $v;
        }
        if (($v = $data['filter_able'] ?? null) !== null) {
            $obj->filterAble = (bool) $v;
        }
        if (($v = $data['filter_config'] ?? null) !== null && is_array($v)) {
            $obj->filterConfig = \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInnerFilterConfig::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sort_able'] ?? null) !== null) {
            $obj->sortAble = (bool) $v;
        }
        return $obj;
    }
}
