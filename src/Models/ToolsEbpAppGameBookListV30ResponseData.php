<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppGameBookListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataBasicAppListInner[]
     */
    protected ?array $basicAppList = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataBasicAppListInner[]
     */
    public function getBasicAppList(): ?array
    {
        return $this->basicAppList;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataBasicAppListInner[] $basicAppList
     * @return self
     */
    public function setBasicAppList(?array $basicAppList): self
    {
        $this->basicAppList = $basicAppList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->basicAppList !== null) {
            $result['basic_app_list'] = $this->basicAppList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['basic_app_list'] ?? null) !== null && is_array($v)) {
            $obj->basicAppList = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataBasicAppListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsEbpAppGameBookListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
