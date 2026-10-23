<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandAdGetV30ResponseData implements \JsonSerializable
{
    /**
     * 报表列表
     * @var \Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInner[]
     */
    protected ?array $dataReports = null;

    /**
     * 结果总数
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * 报表列表
     * @return \Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInner[]
     */
    public function getDataReports(): ?array
    {
        return $this->dataReports;
    }

    /**
     * 报表列表
     * @param \Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInner[] $dataReports
     * @return self
     */
    public function setDataReports(?array $dataReports): self
    {
        $this->dataReports = $dataReports;
        return $this;
    }

    /**
     * 结果总数
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * 结果总数
     * @param int $totalCount
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataReports !== null) {
            $result['data_reports'] = $this->dataReports;
        }
        if ($this->totalCount !== null) {
            $result['total_count'] = $this->totalCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_reports'] ?? null) !== null && is_array($v)) {
            $obj->dataReports = array_map(fn ($vv) => \Oceanengine\Models\ReportBrandAdGetV30ResponseDataDataReportsInner::fromArray($vv), $v);
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        return $obj;
    }
}
