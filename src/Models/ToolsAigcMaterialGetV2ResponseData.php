<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAigcMaterialGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataAigcVideoMaterialListInner[]
     */
    protected ?array $aigcVideoMaterialList = null;

    /**
     * @var \Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataAigcVideoMaterialListInner[]
     */
    public function getAigcVideoMaterialList(): ?array
    {
        return $this->aigcVideoMaterialList;
    }

    /**
     * @param \Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataAigcVideoMaterialListInner[] $aigcVideoMaterialList
     * @return self
     */
    public function setAigcVideoMaterialList(?array $aigcVideoMaterialList): self
    {
        $this->aigcVideoMaterialList = $aigcVideoMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->aigcVideoMaterialList !== null) {
            $result['aigc_video_material_list'] = $this->aigcVideoMaterialList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aigc_video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->aigcVideoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataAigcVideoMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsAigcMaterialGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
