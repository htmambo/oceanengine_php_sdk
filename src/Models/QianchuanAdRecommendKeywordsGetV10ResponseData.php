<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdRecommendKeywordsGetV10ResponseData implements \JsonSerializable
{
    /**
     * 本次查询的唯一标识ID，有效期12h。 可用于后续请求，用以保证查询到数据的完整性。
     * @var string
     */
    protected ?string $cacheId = null;

    /**
     * 关键词列表
     * @var \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * 本次查询的唯一标识ID，有效期12h。 可用于后续请求，用以保证查询到数据的完整性。
     * @return string
     */
    public function getCacheId(): ?string
    {
        return $this->cacheId;
    }

    /**
     * 本次查询的唯一标识ID，有效期12h。 可用于后续请求，用以保证查询到数据的完整性。
     * @param string $cacheId
     * @return self
     */
    public function setCacheId(?string $cacheId): self
    {
        $this->cacheId = $cacheId;
        return $this;
    }

    /**
     * 关键词列表
     * @return \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 关键词列表
     * @param \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataPageInfo $pageInfo): self
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
        if ($this->cacheId !== null) {
            $result['cache_id'] = $this->cacheId;
        }
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
        if (($v = $data['cache_id'] ?? null) !== null) {
            $obj->cacheId = (string) $v;
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
