<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfig implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $filterRequired = null;

    /**
     * @var int
     */
    protected ?int $operator = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfigRangeValuesInner[]
     */
    protected ?array $rangeValues = null;

    /**
     * @var int
     */
    protected ?int $type = null;

    /**
     * @var int
     */
    protected ?int $valueLimit = null;

    /**
     * @return bool
     */
    public function getFilterRequired(): ?bool
    {
        return $this->filterRequired;
    }

    /**
     * @param bool $filterRequired
     * @return self
     */
    public function setFilterRequired(?bool $filterRequired): self
    {
        $this->filterRequired = $filterRequired;
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
     * @return \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfigRangeValuesInner[]
     */
    public function getRangeValues(): ?array
    {
        return $this->rangeValues;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfigRangeValuesInner[] $rangeValues
     * @return self
     */
    public function setRangeValues(?array $rangeValues): self
    {
        $this->rangeValues = $rangeValues;
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
        if ($this->filterRequired !== null) {
            $result['filter_required'] = $this->filterRequired;
        }
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
        }
        if ($this->rangeValues !== null) {
            $result['range_values'] = $this->rangeValues;
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
        if (($v = $data['filter_required'] ?? null) !== null) {
            $obj->filterRequired = (bool) $v;
        }
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (int) $v;
        }
        if (($v = $data['range_values'] ?? null) !== null && is_array($v)) {
            $obj->rangeValues = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInnerFilterConfigRangeValuesInner::fromArray($vv), $v);
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
