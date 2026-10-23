<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportTodayLiveRoomDataGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataRowsInner[]
     */
    protected ?array $rows = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataRowsInner[]
     */
    public function getRows(): ?array
    {
        return $this->rows;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataRowsInner[] $rows
     * @return self
     */
    public function setRows(?array $rows): self
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->rows !== null) {
            $result['rows'] = $this->rows;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['rows'] ?? null) !== null && is_array($v)) {
            $obj->rows = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportTodayLiveRoomDataGetV10ResponseDataRowsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
