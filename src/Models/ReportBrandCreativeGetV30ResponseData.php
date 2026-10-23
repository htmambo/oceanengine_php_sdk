<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandCreativeGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportBrandCreativeGetV30ResponseDataDataReportsInner[]
     */
    protected ?array $dataReports = null;

    /**
     * 总结果数
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * @return \Oceanengine\Models\ReportBrandCreativeGetV30ResponseDataDataReportsInner[]
     */
    public function getDataReports(): ?array
    {
        return $this->dataReports;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandCreativeGetV30ResponseDataDataReportsInner[] $dataReports
     * @return self
     */
    public function setDataReports(?array $dataReports): self
    {
        $this->dataReports = $dataReports;
        return $this;
    }

    /**
     * 总结果数
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * 总结果数
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
            $obj->dataReports = array_map(fn ($vv) => \Oceanengine\Models\ReportBrandCreativeGetV30ResponseDataDataReportsInner::fromArray($vv), $v);
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        return $obj;
    }
}
