<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentQueryLinkV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInner[]
     */
    protected ?array $components = null;

    /**
     * @var \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarComponentQueryLinkV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInner[]
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * @param \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInner[] $components
     * @return self
     */
    public function setComponents(?array $components): self
    {
        $this->components = $components;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarComponentQueryLinkV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarComponentQueryLinkV2ResponseDataPageInfo $pageInfo): self
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
            $obj->components = array_map(fn ($vv) => \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
