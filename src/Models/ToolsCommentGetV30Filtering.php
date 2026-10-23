<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentGetV30Filtering implements \JsonSerializable
{
    /**
     * 计划id列表，一次最多100个，仅当platform_version=V1时传入生效
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * 视频作者抖音id，最多支持100个
     * @var int[]
     */
    protected ?array $authorIds = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30FilteringCommentType
     */
    protected ?string $commentType = null;

    /**
     * 评论关键词，最长支持10个字符
     * @var string
     */
    protected ?string $content = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30FilteringEmotionType
     */
    protected ?string $emotionType = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30FilteringHideStatus
     */
    protected ?string $hideStatus = null;

    /**
     * 是否已回复
     * @var int
     */
    protected ?int $isReplied = null;

    /**
     * 广告视频id列表，一次最多100个，仅当platform_version=V2时传入生效
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentGetV30FilteringLevelType
     */
    protected ?string $levelType = null;

    /**
     * 计划id列表，一次最多100个，仅当platform_version=V1时传入生效
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * 计划id列表，一次最多100个，仅当platform_version=V1时传入生效
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * 视频作者抖音id，最多支持100个
     * @return int[]
     */
    public function getAuthorIds(): ?array
    {
        return $this->authorIds;
    }

    /**
     * 视频作者抖音id，最多支持100个
     * @param int[] $authorIds
     * @return self
     */
    public function setAuthorIds(?array $authorIds): self
    {
        $this->authorIds = $authorIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30FilteringCommentType
     */
    public function getCommentType(): ?string
    {
        return $this->commentType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30FilteringCommentType $commentType
     * @return self
     */
    public function setCommentType(?string $commentType): self
    {
        $this->commentType = $commentType;
        return $this;
    }

    /**
     * 评论关键词，最长支持10个字符
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * 评论关键词，最长支持10个字符
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30FilteringEmotionType
     */
    public function getEmotionType(): ?string
    {
        return $this->emotionType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30FilteringEmotionType $emotionType
     * @return self
     */
    public function setEmotionType(?string $emotionType): self
    {
        $this->emotionType = $emotionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30FilteringHideStatus
     */
    public function getHideStatus(): ?string
    {
        return $this->hideStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30FilteringHideStatus $hideStatus
     * @return self
     */
    public function setHideStatus(?string $hideStatus): self
    {
        $this->hideStatus = $hideStatus;
        return $this;
    }

    /**
     * 是否已回复
     * @return int
     */
    public function getIsReplied(): ?int
    {
        return $this->isReplied;
    }

    /**
     * 是否已回复
     * @param int $isReplied
     * @return self
     */
    public function setIsReplied(?int $isReplied): self
    {
        $this->isReplied = $isReplied;
        return $this;
    }

    /**
     * 广告视频id列表，一次最多100个，仅当platform_version=V2时传入生效
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * 广告视频id列表，一次最多100个，仅当platform_version=V2时传入生效
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCommentGetV30FilteringLevelType
     */
    public function getLevelType(): ?string
    {
        return $this->levelType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentGetV30FilteringLevelType $levelType
     * @return self
     */
    public function setLevelType(?string $levelType): self
    {
        $this->levelType = $levelType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->authorIds !== null) {
            $result['author_ids'] = $this->authorIds;
        }
        if ($this->commentType !== null) {
            $result['comment_type'] = $this->commentType;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->emotionType !== null) {
            $result['emotion_type'] = $this->emotionType;
        }
        if ($this->hideStatus !== null) {
            $result['hide_status'] = $this->hideStatus;
        }
        if ($this->isReplied !== null) {
            $result['is_replied'] = $this->isReplied;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->levelType !== null) {
            $result['level_type'] = $this->levelType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['author_ids'] ?? null) !== null && is_array($v)) {
            $obj->authorIds = $v;
        }
        if (($v = $data['comment_type'] ?? null) !== null) {
            $obj->commentType = (string) $v;
        }
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['emotion_type'] ?? null) !== null) {
            $obj->emotionType = (string) $v;
        }
        if (($v = $data['hide_status'] ?? null) !== null) {
            $obj->hideStatus = (string) $v;
        }
        if (($v = $data['is_replied'] ?? null) !== null) {
            $obj->isReplied = (int) $v;
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['level_type'] ?? null) !== null) {
            $obj->levelType = (string) $v;
        }
        return $obj;
    }
}
