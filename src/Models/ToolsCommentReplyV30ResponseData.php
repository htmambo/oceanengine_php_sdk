<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentReplyV30ResponseData implements \JsonSerializable
{
    /**
     * 回复成功的评论id列表
     * @var int[]
     */
    protected ?array $successCommentIds = null;

    /**
     * 回复成功的评论id列表
     * @return int[]
     */
    public function getSuccessCommentIds(): ?array
    {
        return $this->successCommentIds;
    }

    /**
     * 回复成功的评论id列表
     * @param int[] $successCommentIds
     * @return self
     */
    public function setSuccessCommentIds(?array $successCommentIds): self
    {
        $this->successCommentIds = $successCommentIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->successCommentIds !== null) {
            $result['success_comment_ids'] = $this->successCommentIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['success_comment_ids'] ?? null) !== null && is_array($v)) {
            $obj->successCommentIds = $v;
        }
        return $obj;
    }
}
