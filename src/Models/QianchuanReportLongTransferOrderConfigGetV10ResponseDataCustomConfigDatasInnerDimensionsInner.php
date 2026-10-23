<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner implements \JsonSerializable
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
     * @var \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfig
     */
    protected ?\Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfig $filterConfig = null;

    /**
     * @var bool
     */
    protected ?bool $filterable = null;

    /**
     * @var bool
     */
    protected ?bool $isRequired = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var bool
     */
    protected ?bool $sortable = null;

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
     * @return \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfig
     */
    public function getFilterConfig(): ?\Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfig
    {
        return $this->filterConfig;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfig $filterConfig
     * @return self
     */
    public function setFilterConfig(?\Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfig $filterConfig): self
    {
        $this->filterConfig = $filterConfig;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFilterable(): ?bool
    {
        return $this->filterable;
    }

    /**
     * @param bool $filterable
     * @return self
     */
    public function setFilterable(?bool $filterable): self
    {
        $this->filterable = $filterable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }

    /**
     * @param bool $isRequired
     * @return self
     */
    public function setIsRequired(?bool $isRequired): self
    {
        $this->isRequired = $isRequired;
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
    public function getSortable(): ?bool
    {
        return $this->sortable;
    }

    /**
     * @param bool $sortable
     * @return self
     */
    public function setSortable(?bool $sortable): self
    {
        $this->sortable = $sortable;
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
        if ($this->filterConfig !== null) {
            $result['filter_config'] = $this->filterConfig;
        }
        if ($this->filterable !== null) {
            $result['filterable'] = $this->filterable;
        }
        if ($this->isRequired !== null) {
            $result['is_required'] = $this->isRequired;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->sortable !== null) {
            $result['sortable'] = $this->sortable;
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
        if (($v = $data['filter_config'] ?? null) !== null && is_array($v)) {
            $obj->filterConfig = \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfig::fromArray($v);
        }
        if (($v = $data['filterable'] ?? null) !== null) {
            $obj->filterable = (bool) $v;
        }
        if (($v = $data['is_required'] ?? null) !== null) {
            $obj->isRequired = (bool) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sortable'] ?? null) !== null) {
            $obj->sortable = (bool) $v;
        }
        return $obj;
    }
}
