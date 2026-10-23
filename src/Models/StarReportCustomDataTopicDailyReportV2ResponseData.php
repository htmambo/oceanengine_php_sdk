<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportCustomDataTopicDailyReportV2ResponseData implements \JsonSerializable
{
    /**
     * 统计数据列表
     * @var \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2ResponseDataStatsInner[]
     */
    protected ?array $stats = null;

    /**
     * 统计数据列表
     * @return \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2ResponseDataStatsInner[]
     */
    public function getStats(): ?array
    {
        return $this->stats;
    }

    /**
     * 统计数据列表
     * @param \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2ResponseDataStatsInner[] $stats
     * @return self
     */
    public function setStats(?array $stats): self
    {
        $this->stats = $stats;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->stats !== null) {
            $result['stats'] = $this->stats;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['stats'] ?? null) !== null && is_array($v)) {
            $obj->stats = array_map(fn ($vv) => \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2ResponseDataStatsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
