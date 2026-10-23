<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdKeywordsGetV10ResponseData implements \JsonSerializable
{
    /**
     * 关键词列表
     * @var \Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * 关键词列表
     * @return \Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 关键词列表
     * @param \Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanAdKeywordsGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
