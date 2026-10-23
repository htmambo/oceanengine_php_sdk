<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandDataV30ResponseDataDataReportsInner implements \JsonSerializable
{
    /**
     * 指标集合
     * @var \Oceanengine\Models\ReportBrandDataV30ResponseDataDataReportsInnerDataReportInner[]
     */
    protected ?array $dataReport = null;

    /**
     * @var \Oceanengine\Models\ReportBrandDataV30ResponseDataDataReportsInnerDimensionsInner[]
     */
    protected ?array $dimensions = null;

    /**
     * 指标集合
     * @return \Oceanengine\Models\ReportBrandDataV30ResponseDataDataReportsInnerDataReportInner[]
     */
    public function getDataReport(): ?array
    {
        return $this->dataReport;
    }

    /**
     * 指标集合
     * @param \Oceanengine\Models\ReportBrandDataV30ResponseDataDataReportsInnerDataReportInner[] $dataReport
     * @return self
     */
    public function setDataReport(?array $dataReport): self
    {
        $this->dataReport = $dataReport;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportBrandDataV30ResponseDataDataReportsInnerDimensionsInner[]
     */
    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandDataV30ResponseDataDataReportsInnerDimensionsInner[] $dimensions
     * @return self
     */
    public function setDimensions(?array $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataReport !== null) {
            $result['data_report'] = $this->dataReport;
        }
        if ($this->dimensions !== null) {
            $result['dimensions'] = $this->dimensions;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_report'] ?? null) !== null && is_array($v)) {
            $obj->dataReport = array_map(fn ($vv) => \Oceanengine\Models\ReportBrandDataV30ResponseDataDataReportsInnerDataReportInner::fromArray($vv), $v);
        }
        if (($v = $data['dimensions'] ?? null) !== null && is_array($v)) {
            $obj->dimensions = array_map(fn ($vv) => \Oceanengine\Models\ReportBrandDataV30ResponseDataDataReportsInnerDimensionsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
