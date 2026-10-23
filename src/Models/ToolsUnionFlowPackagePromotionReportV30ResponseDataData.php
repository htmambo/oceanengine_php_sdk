<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackagePromotionReportV30ResponseDataData implements \JsonSerializable
{
    /**
     * 数据列表
     * @var \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataPageInfo $pageInfo = null;

    /**
     * 数据列表
     * @return \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 数据列表
     * @param \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30ResponseDataDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
