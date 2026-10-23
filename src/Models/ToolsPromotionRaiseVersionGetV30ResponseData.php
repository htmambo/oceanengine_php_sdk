<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseVersionGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 起量版本列表
     * @var \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataRaiseVersionListInner[]
     */
    protected ?array $raiseVersionList = null;

    /**
     * @return \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 起量版本列表
     * @return \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataRaiseVersionListInner[]
     */
    public function getRaiseVersionList(): ?array
    {
        return $this->raiseVersionList;
    }

    /**
     * 起量版本列表
     * @param \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataRaiseVersionListInner[] $raiseVersionList
     * @return self
     */
    public function setRaiseVersionList(?array $raiseVersionList): self
    {
        $this->raiseVersionList = $raiseVersionList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->raiseVersionList !== null) {
            $result['raise_version_list'] = $this->raiseVersionList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['raise_version_list'] ?? null) !== null && is_array($v)) {
            $obj->raiseVersionList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30ResponseDataRaiseVersionListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
