<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportDataTopicConfigV2ResponseDataStatInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarReportDataTopicConfigV2DataStatDataTopic
     */
    protected ?string $dataTopic = null;

    /**
     * 数据主题下的数据指标，一个数据主题对应一个或多个数据指标。不存在的数据指标将缺省。
     * @var \Oceanengine\Models\StarReportDataTopicConfigV2ResponseDataStatInnerMetricsInner[]
     */
    protected ?array $metrics = null;

    /**
     * @return \Oceanengine\Models\StarReportDataTopicConfigV2DataStatDataTopic
     */
    public function getDataTopic(): ?string
    {
        return $this->dataTopic;
    }

    /**
     * @param \Oceanengine\Models\StarReportDataTopicConfigV2DataStatDataTopic $dataTopic
     * @return self
     */
    public function setDataTopic(?string $dataTopic): self
    {
        $this->dataTopic = $dataTopic;
        return $this;
    }

    /**
     * 数据主题下的数据指标，一个数据主题对应一个或多个数据指标。不存在的数据指标将缺省。
     * @return \Oceanengine\Models\StarReportDataTopicConfigV2ResponseDataStatInnerMetricsInner[]
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * 数据主题下的数据指标，一个数据主题对应一个或多个数据指标。不存在的数据指标将缺省。
     * @param \Oceanengine\Models\StarReportDataTopicConfigV2ResponseDataStatInnerMetricsInner[] $metrics
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
            $obj->metrics = array_map(fn ($vv) => \Oceanengine\Models\StarReportDataTopicConfigV2ResponseDataStatInnerMetricsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
