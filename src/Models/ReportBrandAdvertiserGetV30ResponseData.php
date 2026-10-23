<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandAdvertiserGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInner[]
     */
    protected ?array $dataReports = null;

    /**
     * 数据总数
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * @return \Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInner[]
     */
    public function getDataReports(): ?array
    {
        return $this->dataReports;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInner[] $dataReports
     * @return self
     */
    public function setDataReports(?array $dataReports): self
    {
        $this->dataReports = $dataReports;
        return $this;
    }

    /**
     * 数据总数
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * 数据总数
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
            $obj->dataReports = array_map(fn ($vv) => \Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInner::fromArray($vv), $v);
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        return $obj;
    }
}
