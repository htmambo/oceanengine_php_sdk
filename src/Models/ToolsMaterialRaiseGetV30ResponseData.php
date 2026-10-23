<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseGetV30ResponseData implements \JsonSerializable
{
    /**
     * 素材起量方案列表
     * @var \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 素材起量方案列表
     * @return \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 素材起量方案列表
     * @param \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
