<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentGetV30ResponseDataCommentListInner implements \JsonSerializable
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
     * 评论ID
     * @var int
     */
    protected ?int $commentId = null;

    /**
     * 评论图片内容，返回图片url列表
     * @var string[]
     */
    protected ?array $commentImages = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30DataCommentListCommentPermission
     */
    protected ?string $commentPermission = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30DataCommentListCommentType
     */
    protected ?string $commentType = null;

    /**
     * 评论创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30DataCommentListEmotionType
     */
    protected ?string $emotionType = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30DataCommentListHideStatus
     */
    protected ?string $hideStatus = null;

    /**
     * 该评论是否置顶，0：表示不置顶，1：表示置顶
     * @var int
     */
    protected ?int $isStick = null;

    /**
     * 广告视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $itemTitle = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30DataCommentListLevelType
     */
    protected ?string $levelType = null;

    /**
     * 点赞数
     * @var int
     */
    protected ?int $likeCount = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 广告id，仅2.0平台适用，仅引流流量返回
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 评论的回复数量
     * @var int
     */
    protected ?int $replyCount = null;

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
     * 评论ID
     * @return int
     */
    public function getCommentId(): ?int
    {
        return $this->commentId;
    }

    /**
     * 评论ID
     * @param int $commentId
     * @return self
     */
    public function setCommentId(?int $commentId): self
    {
        $this->commentId = $commentId;
        return $this;
    }

    /**
     * 评论图片内容，返回图片url列表
     * @return string[]
     */
    public function getCommentImages(): ?array
    {
        return $this->commentImages;
    }

    /**
     * 评论图片内容，返回图片url列表
     * @param string[] $commentImages
     * @return self
     */
    public function setCommentImages(?array $commentImages): self
    {
        $this->commentImages = $commentImages;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30DataCommentListCommentPermission
     */
    public function getCommentPermission(): ?string
    {
        return $this->commentPermission;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30DataCommentListCommentPermission $commentPermission
     * @return self
     */
    public function setCommentPermission(?string $commentPermission): self
    {
        $this->commentPermission = $commentPermission;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30DataCommentListCommentType
     */
    public function getCommentType(): ?string
    {
        return $this->commentType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30DataCommentListCommentType $commentType
     * @return self
     */
    public function setCommentType(?string $commentType): self
    {
        $this->commentType = $commentType;
        return $this;
    }

    /**
     * 评论创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 评论创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30DataCommentListEmotionType
     */
    public function getEmotionType(): ?string
    {
        return $this->emotionType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30DataCommentListEmotionType $emotionType
     * @return self
     */
    public function setEmotionType(?string $emotionType): self
    {
        $this->emotionType = $emotionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30DataCommentListHideStatus
     */
    public function getHideStatus(): ?string
    {
        return $this->hideStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30DataCommentListHideStatus $hideStatus
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
     * 广告视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 广告视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getItemTitle(): ?string
    {
        return $this->itemTitle;
    }

    /**
     * 视频标题
     * @param string $itemTitle
     * @return self
     */
    public function setItemTitle(?string $itemTitle): self
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30DataCommentListLevelType
     */
    public function getLevelType(): ?string
    {
        return $this->levelType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30DataCommentListLevelType $levelType
     * @return self
     */
    public function setLevelType(?string $levelType): self
    {
        $this->levelType = $levelType;
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
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 广告id，仅2.0平台适用，仅引流流量返回
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告id，仅2.0平台适用，仅引流流量返回
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 评论的回复数量
     * @return int
     */
    public function getReplyCount(): ?int
    {
        return $this->replyCount;
    }

    /**
     * 评论的回复数量
     * @param int $replyCount
     * @return self
     */
    public function setReplyCount(?int $replyCount): self
    {
        $this->replyCount = $replyCount;
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
        if ($this->commentImages !== null) {
            $result['comment_images'] = $this->commentImages;
        }
        if ($this->commentPermission !== null) {
            $result['comment_permission'] = $this->commentPermission;
        }
        if ($this->commentType !== null) {
            $result['comment_type'] = $this->commentType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->emotionType !== null) {
            $result['emotion_type'] = $this->emotionType;
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
        if ($this->itemTitle !== null) {
            $result['item_title'] = $this->itemTitle;
        }
        if ($this->levelType !== null) {
            $result['level_type'] = $this->levelType;
        }
        if ($this->likeCount !== null) {
            $result['like_count'] = $this->likeCount;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->replyCount !== null) {
            $result['reply_count'] = $this->replyCount;
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
        if (($v = $data['comment_images'] ?? null) !== null && is_array($v)) {
            $obj->commentImages = $v;
        }
        if (($v = $data['comment_permission'] ?? null) !== null) {
            $obj->commentPermission = (string) $v;
        }
        if (($v = $data['comment_type'] ?? null) !== null) {
            $obj->commentType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['emotion_type'] ?? null) !== null) {
            $obj->emotionType = (string) $v;
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
        if (($v = $data['item_title'] ?? null) !== null) {
            $obj->itemTitle = (string) $v;
        }
        if (($v = $data['level_type'] ?? null) !== null) {
            $obj->levelType = (string) $v;
        }
        if (($v = $data['like_count'] ?? null) !== null) {
            $obj->likeCount = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['reply_count'] ?? null) !== null) {
            $obj->replyCount = (int) $v;
        }
        if (($v = $data['text'] ?? null) !== null) {
            $obj->text = (string) $v;
        }
        return $obj;
    }
}
