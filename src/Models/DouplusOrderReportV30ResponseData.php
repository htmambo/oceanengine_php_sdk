<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderReportV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInner[]
     */
    protected ?array $orderMetrics = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderReportV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\DouplusOrderReportV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInner[]
     */
    public function getOrderMetrics(): ?array
    {
        return $this->orderMetrics;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInner[] $orderMetrics
     * @return self
     */
    public function setOrderMetrics(?array $orderMetrics): self
    {
        $this->orderMetrics = $orderMetrics;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderReportV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\DouplusOrderReportV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderReportV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\DouplusOrderReportV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderMetrics !== null) {
            $result['order_metrics'] = $this->orderMetrics;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_metrics'] ?? null) !== null && is_array($v)) {
            $obj->orderMetrics = array_map(fn ($vv) => \Oceanengine\Models\DouplusOrderReportV30ResponseDataOrderMetricsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\DouplusOrderReportV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
