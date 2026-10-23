<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInner[]
     */
    protected ?array $baseStats = null;

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInner[]
     */
    public function getBaseStats(): ?array
    {
        return $this->baseStats;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInner[] $baseStats
     * @return self
     */
    public function setBaseStats(?array $baseStats): self
    {
        $this->baseStats = $baseStats;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->baseStats !== null) {
            $result['base_stats'] = $this->baseStats;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['base_stats'] ?? null) !== null && is_array($v)) {
            $obj->baseStats = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
