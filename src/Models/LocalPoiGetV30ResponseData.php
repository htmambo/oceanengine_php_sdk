<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPoiGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPoiGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalPoiGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 门店列表
     * @var \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInner[]
     */
    protected ?array $poiList = null;

    /**
     * @return \Oceanengine\Models\LocalPoiGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalPoiGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalPoiGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalPoiGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 门店列表
     * @return \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInner[]
     */
    public function getPoiList(): ?array
    {
        return $this->poiList;
    }

    /**
     * 门店列表
     * @param \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInner[] $poiList
     * @return self
     */
    public function setPoiList(?array $poiList): self
    {
        $this->poiList = $poiList;
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
        if ($this->poiList !== null) {
            $result['poi_list'] = $this->poiList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalPoiGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['poi_list'] ?? null) !== null && is_array($v)) {
            $obj->poiList = array_map(fn ($vv) => \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
