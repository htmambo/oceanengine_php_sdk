<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackageReportV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsUnionFlowPackageReportV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
