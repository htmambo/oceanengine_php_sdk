<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportStardeliveryTaskDataGetV30ResponseData implements \JsonSerializable
{
    /**
     * 任务列表
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 任务列表
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 任务列表
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ReportStardeliveryTaskDataGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
