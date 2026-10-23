<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentTermsBannedGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsCommentTermsBannedGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsCommentTermsBannedGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 屏蔽词列表
     * @var string[]
     */
    protected ?array $terms = null;

    /**
     * @return \Oceanengine\Models\ToolsCommentTermsBannedGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsCommentTermsBannedGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentTermsBannedGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsCommentTermsBannedGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 屏蔽词列表
     * @return string[]
     */
    public function getTerms(): ?array
    {
        return $this->terms;
    }

    /**
     * 屏蔽词列表
     * @param string[] $terms
     * @return self
     */
    public function setTerms(?array $terms): self
    {
        $this->terms = $terms;
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
        if ($this->terms !== null) {
            $result['terms'] = $this->terms;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsCommentTermsBannedGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['terms'] ?? null) !== null && is_array($v)) {
            $obj->terms = $v;
        }
        return $obj;
    }
}
