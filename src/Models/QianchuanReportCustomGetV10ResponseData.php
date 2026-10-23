<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportCustomGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataPagination
     */
    protected ?\Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataPagination $pagination = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataRowsInner[]
     */
    protected ?array $rows = null;

    /**
     * @var array<string,string>
     */
    protected ?array $totalMetrics = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataRowsInner[]
     */
    public function getRows(): ?array
    {
        return $this->rows;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataRowsInner[] $rows
     * @return self
     */
    public function setRows(?array $rows): self
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @return array<string,string>
     */
    public function getTotalMetrics(): ?array
    {
        return $this->totalMetrics;
    }

    /**
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
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
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
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataPagination::fromArray($v);
        }
        if (($v = $data['rows'] ?? null) !== null && is_array($v)) {
            $obj->rows = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportCustomGetV10ResponseDataRowsInner::fromArray($vv), $v);
        }
        if (($v = $data['total_metrics'] ?? null) !== null && is_array($v)) {
            $obj->totalMetrics = $v;
        }
        return $obj;
    }
}
