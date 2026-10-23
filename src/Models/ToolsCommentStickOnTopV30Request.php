<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentStickOnTopV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 评论id
     * @var int
     */
    protected ?int $commentId = null;

    /**
     * @var \Oceanengine\Models\ToolsCommentStickOnTopV30StickType
     */
    protected ?string $stickType = null;

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
     * @return \Oceanengine\Models\ToolsCommentStickOnTopV30StickType
     */
    public function getStickType(): ?string
    {
        return $this->stickType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCommentStickOnTopV30StickType $stickType
     * @return self
     */
    public function setStickType(?string $stickType): self
    {
        $this->stickType = $stickType;
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
        if ($this->commentId !== null) {
            $result['comment_id'] = $this->commentId;
        }
        if ($this->stickType !== null) {
            $result['stick_type'] = $this->stickType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['comment_id'] ?? null) !== null) {
            $obj->commentId = (int) $v;
        }
        if (($v = $data['stick_type'] ?? null) !== null) {
            $obj->stickType = (string) $v;
        }
        return $obj;
    }
}
