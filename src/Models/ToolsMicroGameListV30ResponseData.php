<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMicroGameListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsMicroGameListV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsMicroGameListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsMicroGameListV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameListV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsMicroGameListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsMicroGameListV30ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsMicroGameListV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsMicroGameListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
