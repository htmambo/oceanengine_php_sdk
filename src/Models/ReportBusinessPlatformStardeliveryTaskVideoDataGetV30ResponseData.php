<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseData implements \JsonSerializable
{
    /**
     * 返回的数据列表
     * @var \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 返回的数据列表
     * @return \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 返回的数据列表
     * @param \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
