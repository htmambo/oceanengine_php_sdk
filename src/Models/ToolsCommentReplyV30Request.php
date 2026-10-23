<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentReplyV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 评论id列表，只允许传入小于等于20个评论id
     * @var int[]
     */
    protected ?array $commentIds = null;

    /**
     * 回复内容，最多支持100字
     * @var string
     */
    protected ?string $replyText = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 评论id列表，只允许传入小于等于20个评论id
     * @return int[]
     */
    public function getCommentIds(): ?array
    {
        return $this->commentIds;
    }

    /**
     * 评论id列表，只允许传入小于等于20个评论id
     * @param int[] $commentIds
     * @return self
     */
    public function setCommentIds(?array $commentIds): self
    {
        $this->commentIds = $commentIds;
        return $this;
    }

    /**
     * 回复内容，最多支持100字
     * @return string
     */
    public function getReplyText(): ?string
    {
        return $this->replyText;
    }

    /**
     * 回复内容，最多支持100字
     * @param string $replyText
     * @return self
     */
    public function setReplyText(?string $replyText): self
    {
        $this->replyText = $replyText;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->commentIds !== null) {
            $result['comment_ids'] = $this->commentIds;
        }
        if ($this->replyText !== null) {
            $result['reply_text'] = $this->replyText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['comment_ids'] ?? null) !== null && is_array($v)) {
            $obj->commentIds = $v;
        }
        if (($v = $data['reply_text'] ?? null) !== null) {
            $obj->replyText = (string) $v;
        }
        return $obj;
    }
}
