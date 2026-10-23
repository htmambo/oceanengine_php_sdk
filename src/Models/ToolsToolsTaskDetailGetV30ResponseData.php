<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsToolsTaskDetailGetV30ResponseData implements \JsonSerializable
{
    /**
     * 操作相关信息
     * @var \Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataObjectListInner[]
     */
    protected ?array $objectList = null;

    /**
     * @var \Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 操作相关信息
     * @return \Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataObjectListInner[]
     */
    public function getObjectList(): ?array
    {
        return $this->objectList;
    }

    /**
     * 操作相关信息
     * @param \Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataObjectListInner[] $objectList
     * @return self
     */
    public function setObjectList(?array $objectList): self
    {
        $this->objectList = $objectList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->objectList !== null) {
            $result['object_list'] = $this->objectList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['object_list'] ?? null) !== null && is_array($v)) {
            $obj->objectList = array_map(fn ($vv) => \Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataObjectListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsToolsTaskDetailGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
