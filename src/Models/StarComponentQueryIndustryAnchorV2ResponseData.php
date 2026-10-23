<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentQueryIndustryAnchorV2ResponseData implements \JsonSerializable
{
    /**
     * 组件列表
     * @var \Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataComponentsInner[]
     */
    protected ?array $components = null;

    /**
     * @var \Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 组件列表
     * @return \Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataComponentsInner[]
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * 组件列表
     * @param \Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataComponentsInner[] $components
     * @return self
     */
    public function setComponents(?array $components): self
    {
        $this->components = $components;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->components !== null) {
            $result['components'] = $this->components;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['components'] ?? null) !== null && is_array($v)) {
            $obj->components = array_map(fn ($vv) => \Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataComponentsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarComponentQueryIndustryAnchorV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
