<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $dataTopic = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner[]
     */
    protected ?array $dimensions = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner[]
     */
    protected ?array $metrics = null;

    /**
     * @return string
     */
    public function getDataTopic(): ?string
    {
        return $this->dataTopic;
    }

    /**
     * @param string $dataTopic
     * @return self
     */
    public function setDataTopic(?string $dataTopic): self
    {
        $this->dataTopic = $dataTopic;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner[]
     */
    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner[] $dimensions
     * @return self
     */
    public function setDimensions(?array $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner[]
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner[] $metrics
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
            $obj->dimensions = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerDimensionsInner::fromArray($vv), $v);
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportLongTransferOrderConfigGetV10ResponseDataCustomConfigDatasInnerMetricsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
