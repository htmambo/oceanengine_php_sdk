<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRubeexGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerDimensions
     */
    protected ?\Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerDimensions $dimensions = null;

    /**
     * @var \Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerMetrics
     */
    protected ?\Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerMetrics $metrics = null;

    /**
     * @return \Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerDimensions
     */
    public function getDimensions(): ?\Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerDimensions
    {
        return $this->dimensions;
    }

    /**
     * @param \Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerDimensions $dimensions
     * @return self
     */
    public function setDimensions(?\Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerDimensions $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerMetrics $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dimensions !== null) {
            $result['dimensions'] = $this->dimensions;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dimensions'] ?? null) !== null && is_array($v)) {
            $obj->dimensions = \Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerDimensions::fromArray($v);
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\ReportRubeexGetV2ResponseDataListInnerMetrics::fromArray($v);
        }
        return $obj;
    }
}
