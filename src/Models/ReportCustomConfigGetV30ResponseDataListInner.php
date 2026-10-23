<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomConfigGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportCustomConfigGetV30DataListDataTopic
     */
    protected ?string $dataTopic = null;

    /**
     * @var \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInner[]
     */
    protected ?array $dimensions = null;

    /**
     * @var \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerMetricsInner[]
     */
    protected ?array $metrics = null;

    /**
     * @return \Oceanengine\Models\ReportCustomConfigGetV30DataListDataTopic
     */
    public function getDataTopic(): ?string
    {
        return $this->dataTopic;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomConfigGetV30DataListDataTopic $dataTopic
     * @return self
     */
    public function setDataTopic(?string $dataTopic): self
    {
        $this->dataTopic = $dataTopic;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInner[]
     */
    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInner[] $dimensions
     * @return self
     */
    public function setDimensions(?array $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerMetricsInner[]
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerMetricsInner[] $metrics
     * @return self
     */
    public function setMetrics(?array $metrics): self
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
        if ($this->dataTopic !== null) {
            $result['data_topic'] = $this->dataTopic;
        }
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
        if (($v = $data['data_topic'] ?? null) !== null) {
            $obj->dataTopic = (string) $v;
        }
        if (($v = $data['dimensions'] ?? null) !== null && is_array($v)) {
            $obj->dimensions = array_map(fn ($vv) => \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerDimensionsInner::fromArray($vv), $v);
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = array_map(fn ($vv) => \Oceanengine\Models\ReportCustomConfigGetV30ResponseDataListInnerMetricsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
