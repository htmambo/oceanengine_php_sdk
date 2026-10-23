<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandAdvertiserGetV30ResponseDataDataReportsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInnerDataReport
     */
    protected ?\Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInnerDataReport $dataReport = null;

    /**
     * 日期 2016-01-01
     * @var string
     */
    protected ?string $date = null;

    /**
     * @return \Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInnerDataReport
     */
    public function getDataReport(): ?\Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInnerDataReport
    {
        return $this->dataReport;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInnerDataReport $dataReport
     * @return self
     */
    public function setDataReport(?\Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInnerDataReport $dataReport): self
    {
        $this->dataReport = $dataReport;
        return $this;
    }

    /**
     * 日期 2016-01-01
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 日期 2016-01-01
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
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
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_report'] ?? null) !== null && is_array($v)) {
            $obj->dataReport = \Oceanengine\Models\ReportBrandAdvertiserGetV30ResponseDataDataReportsInnerDataReport::fromArray($v);
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        return $obj;
    }
}
