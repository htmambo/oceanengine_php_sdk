<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppExtendListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataExtendPackageListInner[]
     */
    protected ?array $extendPackageList = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataExtendPackageListInner[]
     */
    public function getExtendPackageList(): ?array
    {
        return $this->extendPackageList;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataExtendPackageListInner[] $extendPackageList
     * @return self
     */
    public function setExtendPackageList(?array $extendPackageList): self
    {
        $this->extendPackageList = $extendPackageList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->extendPackageList !== null) {
            $result['extend_package_list'] = $this->extendPackageList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['extend_package_list'] ?? null) !== null && is_array($v)) {
            $obj->extendPackageList = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataExtendPackageListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsEbpAppExtendListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
