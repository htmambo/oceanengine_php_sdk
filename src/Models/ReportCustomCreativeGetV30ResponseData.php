<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomCreativeGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataRowsInner[]
     */
    protected ?array $rows = null;

    /**
     * 指标汇总数据
     * @var array<string,string>
     */
    protected ?array $totalMetrics = null;

    /**
     * @return \Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataRowsInner[]
     */
    public function getRows(): ?array
    {
        return $this->rows;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataRowsInner[] $rows
     * @return self
     */
    public function setRows(?array $rows): self
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * 指标汇总数据
     * @return array<string,string>
     */
    public function getTotalMetrics(): ?array
    {
        return $this->totalMetrics;
    }

    /**
     * 指标汇总数据
     * @param array<string,string> $totalMetrics
     * @return self
     */
    public function setTotalMetrics(?array $totalMetrics): self
    {
        $this->totalMetrics = $totalMetrics;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->rows !== null) {
            $result['rows'] = $this->rows;
        }
        if ($this->totalMetrics !== null) {
            $result['total_metrics'] = $this->totalMetrics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['rows'] ?? null) !== null && is_array($v)) {
            $obj->rows = array_map(fn ($vv) => \Oceanengine\Models\ReportCustomCreativeGetV30ResponseDataRowsInner::fromArray($vv), $v);
        }
        if (($v = $data['total_metrics'] ?? null) !== null && is_array($v)) {
            $obj->totalMetrics = $v;
        }
        return $obj;
    }
}
