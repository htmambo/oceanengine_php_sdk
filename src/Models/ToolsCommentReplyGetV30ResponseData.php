<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentReplyGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 回复列表
     * @var \Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataReplyListInner[]
     */
    protected ?array $replyList = null;

    /**
     * @return \Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 回复列表
     * @return \Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataReplyListInner[]
     */
    public function getReplyList(): ?array
    {
        return $this->replyList;
    }

    /**
     * 回复列表
     * @param \Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataReplyListInner[] $replyList
     * @return self
     */
    public function setReplyList(?array $replyList): self
    {
        $this->replyList = $replyList;
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
        if ($this->replyList !== null) {
            $result['reply_list'] = $this->replyList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['reply_list'] ?? null) !== null && is_array($v)) {
            $obj->replyList = array_map(fn ($vv) => \Oceanengine\Models\ToolsCommentReplyGetV30ResponseDataReplyListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
