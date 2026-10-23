<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportRtaGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ReportRtaGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ReportRtaGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\ReportRtaGetV2ResponseDataTotalMetrics
     */
    protected ?\Oceanengine\Models\ReportRtaGetV2ResponseDataTotalMetrics $totalMetrics = null;

    /**
     * @return \Oceanengine\Models\ReportRtaGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ReportRtaGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRtaGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ReportRtaGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ReportRtaGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ReportRtaGetV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRtaGetV2ResponseDataTotalMetrics
     */
    public function getTotalMetrics(): ?\Oceanengine\Models\ReportRtaGetV2ResponseDataTotalMetrics
    {
        return $this->totalMetrics;
    }

    /**
     * @param \Oceanengine\Models\ReportRtaGetV2ResponseDataTotalMetrics $totalMetrics
     * @return self
     */
    public function setTotalMetrics(?\Oceanengine\Models\ReportRtaGetV2ResponseDataTotalMetrics $totalMetrics): self
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
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->totalMetrics !== null) {
            $result['total_metrics'] = $this->totalMetrics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ReportRtaGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ReportRtaGetV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['total_metrics'] ?? null) !== null && is_array($v)) {
            $obj->totalMetrics = \Oceanengine\Models\ReportRtaGetV2ResponseDataTotalMetrics::fromArray($v);
        }
        return $obj;
    }
}
