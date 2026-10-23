<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportCustomDataTopicReportV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarReportCustomDataTopicReportV2DataDataDataTopic
     */
    protected ?string $dataTopic = null;

    /**
     * 数据主题下的数据指标，一个数据主题对应一个或多个数据指标。不存在的数据指标将缺省。
     * @var \Oceanengine\Models\StarReportCustomDataTopicReportV2ResponseDataDataInnerMetricsInner[]
     */
    protected ?array $metrics = null;

    /**
     * @return \Oceanengine\Models\StarReportCustomDataTopicReportV2DataDataDataTopic
     */
    public function getDataTopic(): ?string
    {
        return $this->dataTopic;
    }

    /**
     * @param \Oceanengine\Models\StarReportCustomDataTopicReportV2DataDataDataTopic $dataTopic
     * @return self
     */
    public function setDataTopic(?string $dataTopic): self
    {
        $this->dataTopic = $dataTopic;
        return $this;
    }

    /**
     * 数据主题下的数据指标，一个数据主题对应一个或多个数据指标。不存在的数据指标将缺省。
     * @return \Oceanengine\Models\StarReportCustomDataTopicReportV2ResponseDataDataInnerMetricsInner[]
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * 数据主题下的数据指标，一个数据主题对应一个或多个数据指标。不存在的数据指标将缺省。
     * @param \Oceanengine\Models\StarReportCustomDataTopicReportV2ResponseDataDataInnerMetricsInner[] $metrics
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
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = array_map(fn ($vv) => \Oceanengine\Models\StarReportCustomDataTopicReportV2ResponseDataDataInnerMetricsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
