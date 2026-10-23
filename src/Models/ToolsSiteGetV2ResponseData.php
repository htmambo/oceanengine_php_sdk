<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteGetV2ResponseData implements \JsonSerializable
{
    /**
     * 建站列表
     * @var \Oceanengine\Models\ToolsSiteGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsSiteGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 建站列表
     * @return \Oceanengine\Models\ToolsSiteGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 建站列表
     * @param \Oceanengine\Models\ToolsSiteGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsSiteGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsSiteGetV2ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsSiteGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
