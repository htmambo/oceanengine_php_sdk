<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementAndroidAppListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsAppManagementAndroidAppListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
