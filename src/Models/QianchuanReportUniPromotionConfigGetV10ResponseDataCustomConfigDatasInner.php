<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10DataCustomConfigDatasDataTopic
     */
    protected ?string $dataTopic = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner[]
     */
    protected ?array $dimensions = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner[]
     */
    protected ?array $metrics = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerQueryLimit
     */
    protected ?\Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerQueryLimit $queryLimit = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10DataCustomConfigDatasDataTopic
     */
    public function getDataTopic(): ?string
    {
        return $this->dataTopic;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10DataCustomConfigDatasDataTopic $dataTopic
     * @return self
     */
    public function setDataTopic(?string $dataTopic): self
    {
        $this->dataTopic = $dataTopic;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner[]
     */
    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner[] $dimensions
     * @return self
     */
    public function setDimensions(?array $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner[]
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner[] $metrics
     * @return self
     */
    public function setMetrics(?array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerQueryLimit
     */
    public function getQueryLimit(): ?\Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerQueryLimit
    {
        return $this->queryLimit;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerQueryLimit $queryLimit
     * @return self
     */
    public function setQueryLimit(?\Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerQueryLimit $queryLimit): self
    {
        $this->queryLimit = $queryLimit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataTopic !== null) {
            $result['data_topic'] = $this->dataTopic;
        }
        if ($this->dimensions !== null) {
            $result['dimensions'] = $this->dimensions;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        if ($this->queryLimit !== null) {
            $result['query_limit'] = $this->queryLimit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_topic'] ?? null) !== null) {
            $obj->dataTopic = (string) $v;
        }
        if (($v = $data['dimensions'] ?? null) !== null && is_array($v)) {
            $obj->dimensions = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner::fromArray($vv), $v);
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner::fromArray($vv), $v);
        }
        if (($v = $data['query_limit'] ?? null) !== null && is_array($v)) {
            $obj->queryLimit = \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerQueryLimit::fromArray($v);
        }
        return $obj;
    }
}
