<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderReportV30ResponseDataOrderMetricsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerDimensionData
     */
    protected ?\Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerDimensionData $dimensionData = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerMetricsData
     */
    protected ?\Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerMetricsData $metricsData = null;

    /**
     * @return \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerDimensionData
     */
    public function getDimensionData(): ?\Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerDimensionData
    {
        return $this->dimensionData;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerDimensionData $dimensionData
     * @return self
     */
    public function setDimensionData(?\Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerDimensionData $dimensionData): self
    {
        $this->dimensionData = $dimensionData;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerMetricsData
     */
    public function getMetricsData(): ?\Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerMetricsData
    {
        return $this->metricsData;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerMetricsData $metricsData
     * @return self
     */
    public function setMetricsData(?\Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerMetricsData $metricsData): self
    {
        $this->metricsData = $metricsData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dimensionData !== null) {
            $result['dimension_data'] = $this->dimensionData;
        }
        if ($this->metricsData !== null) {
            $result['metrics_data'] = $this->metricsData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dimension_data'] ?? null) !== null && is_array($v)) {
            $obj->dimensionData = \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerDimensionData::fromArray($v);
        }
        if (($v = $data['metrics_data'] ?? null) !== null && is_array($v)) {
            $obj->metricsData = \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInnerMetricsData::fromArray($v);
        }
        return $obj;
    }
}
