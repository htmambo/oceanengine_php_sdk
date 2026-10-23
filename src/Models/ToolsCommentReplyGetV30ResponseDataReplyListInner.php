<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentReplyGetV30ResponseDataReplyListInner implements \JsonSerializable
{
    /**
     * 评论用户抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 评论用户昵称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 评论id
     * @var int
     */
    protected ?int $commentId = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentReplyGetV30DataReplyListHideStatus
     */
    protected ?string $hideStatus = null;

    /**
     * 该评论是否置顶，0：表示不置顶，1：表示置顶
     * @var int
     */
    protected ?int $isStick = null;

    /**
     * 抖音视频id
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 点赞数
     * @var int
     */
    protected ?int $likeCount = null;

    /**
     * 评论内容
     * @var string
     */
    protected ?string $text = null;

    /**
     * 评论用户抖音号
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 评论用户抖音号
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 评论用户昵称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 评论用户昵称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 评论id
     * @return int
     */
    public function getCommentId(): ?int
    {
        return $this->commentId;
    }

    /**
     * 评论id
     * @param int $commentId
     * @return self
     */
    public function setCommentId(?int $commentId): self
    {
        $this->commentId = $commentId;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentReplyGetV30DataReplyListHideStatus
     */
    public function getHideStatus(): ?string
    {
        return $this->hideStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentReplyGetV30DataReplyListHideStatus $hideStatus
     * @return self
     */
    public function setHideStatus(?string $hideStatus): self
    {
        $this->hideStatus = $hideStatus;
        return $this;
    }

    /**
     * 该评论是否置顶，0：表示不置顶，1：表示置顶
     * @return int
     */
    public function getIsStick(): ?int
    {
        return $this->isStick;
    }

    /**
     * 该评论是否置顶，0：表示不置顶，1：表示置顶
     * @param int $isStick
     * @return self
     */
    public function setIsStick(?int $isStick): self
    {
        $this->isStick = $isStick;
        return $this;
    }

    /**
     * 抖音视频id
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音视频id
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 点赞数
     * @return int
     */
    public function getLikeCount(): ?int
    {
        return $this->likeCount;
    }

    /**
     * 点赞数
     * @param int $likeCount
     * @return self
     */
    public function setLikeCount(?int $likeCount): self
    {
        $this->likeCount = $likeCount;
        return $this;
    }

    /**
     * 评论内容
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * 评论内容
     * @param string $text
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->commentId !== null) {
            $result['comment_id'] = $this->commentId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->hideStatus !== null) {
            $result['hide_status'] = $this->hideStatus;
        }
        if ($this->isStick !== null) {
            $result['is_stick'] = $this->isStick;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->likeCount !== null) {
            $result['like_count'] = $this->likeCount;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['comment_id'] ?? null) !== null) {
            $obj->commentId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['hide_status'] ?? null) !== null) {
            $obj->hideStatus = (string) $v;
        }
        if (($v = $data['is_stick'] ?? null) !== null) {
            $obj->isStick = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['like_count'] ?? null) !== null) {
            $obj->likeCount = (int) $v;
        }
        if (($v = $data['text'] ?? null) !== null) {
            $obj->text = (string) $v;
        }
        return $obj;
    }
}
