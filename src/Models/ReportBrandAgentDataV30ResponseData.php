<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandAgentDataV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportBrandAgentDataV30ResponseDataDataReportsInner[]
     */
    protected ?array $dataReports = null;

    /**
     * @var \Oceanengine\Models\ReportBrandAgentDataV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ReportBrandAgentDataV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ReportBrandAgentDataV30ResponseDataDataReportsInner[]
     */
    public function getDataReports(): ?array
    {
        return $this->dataReports;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandAgentDataV30ResponseDataDataReportsInner[] $dataReports
     * @return self
     */
    public function setDataReports(?array $dataReports): self
    {
        $this->dataReports = $dataReports;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportBrandAgentDataV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ReportBrandAgentDataV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ReportBrandAgentDataV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ReportBrandAgentDataV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->dataReports !== null) {
            $result['data_reports'] = $this->dataReports;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_reports'] ?? null) !== null && is_array($v)) {
            $obj->dataReports = array_map(fn ($vv) => \Oceanengine\Models\ReportBrandAgentDataV30ResponseDataDataReportsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ReportBrandAgentDataV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
