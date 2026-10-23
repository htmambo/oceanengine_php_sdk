<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportAccountGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalReportAccountGetV30ResponseDataDataListInner[]
     */
    protected ?array $dataList = null;

    /**
     * @var \Oceanengine\Models\LocalReportAccountGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalReportAccountGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\LocalReportAccountGetV30ResponseDataDataListInner[]
     */
    public function getDataList(): ?array
    {
        return $this->dataList;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAccountGetV30ResponseDataDataListInner[] $dataList
     * @return self
     */
    public function setDataList(?array $dataList): self
    {
        $this->dataList = $dataList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAccountGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalReportAccountGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAccountGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalReportAccountGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->dataList !== null) {
            $result['data_list'] = $this->dataList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_list'] ?? null) !== null && is_array($v)) {
            $obj->dataList = array_map(fn ($vv) => \Oceanengine\Models\LocalReportAccountGetV30ResponseDataDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalReportAccountGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
