<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMicroAppletLinkListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataLinksInner[]
     */
    protected ?array $links = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataLinksInner[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataLinksInner[] $links
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->links !== null) {
            $result['links'] = $this->links;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['links'] ?? null) !== null && is_array($v)) {
            $obj->links = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataLinksInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
