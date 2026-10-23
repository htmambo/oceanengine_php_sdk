<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalMarketPageListGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInner[]
     */
    protected ?array $markPageIdList = null;

    /**
     * @var \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalMarketPageListGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInner[]
     */
    public function getMarkPageIdList(): ?array
    {
        return $this->markPageIdList;
    }

    /**
     * @param \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInner[] $markPageIdList
     * @return self
     */
    public function setMarkPageIdList(?array $markPageIdList): self
    {
        $this->markPageIdList = $markPageIdList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalMarketPageListGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalMarketPageListGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->markPageIdList !== null) {
            $result['mark_page_id_list'] = $this->markPageIdList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['mark_page_id_list'] ?? null) !== null && is_array($v)) {
            $obj->markPageIdList = array_map(fn ($vv) => \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
