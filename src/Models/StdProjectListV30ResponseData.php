<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectListV30ResponseData implements \JsonSerializable
{
    /**
     * 项目列表
     * @var \Oceanengine\Models\StdProjectListV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StdProjectListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 项目列表
     * @return \Oceanengine\Models\StdProjectListV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 项目列表
     * @param \Oceanengine\Models\StdProjectListV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StdProjectListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StdProjectListV30ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\StdProjectListV30ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StdProjectListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
