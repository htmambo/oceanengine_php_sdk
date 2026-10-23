<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentGetV30ResponseData implements \JsonSerializable
{
    /**
     * 评论列表
     * @var \Oceanengine\Models\ToolsCommentGetV30ResponseDataCommentListInner[]
     */
    protected ?array $commentList = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsCommentGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 评论列表
     * @return \Oceanengine\Models\ToolsCommentGetV30ResponseDataCommentListInner[]
     */
    public function getCommentList(): ?array
    {
        return $this->commentList;
    }

    /**
     * 评论列表
     * @param \Oceanengine\Models\ToolsCommentGetV30ResponseDataCommentListInner[] $commentList
     * @return self
     */
    public function setCommentList(?array $commentList): self
    {
        $this->commentList = $commentList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsCommentGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsCommentGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->commentList !== null) {
            $result['comment_list'] = $this->commentList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['comment_list'] ?? null) !== null && is_array($v)) {
            $obj->commentList = array_map(fn ($vv) => \Oceanengine\Models\ToolsCommentGetV30ResponseDataCommentListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsCommentGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
