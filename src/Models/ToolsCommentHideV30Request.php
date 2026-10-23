<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentHideV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 评论id列表，只允许传入小于等于20个评论ID。
     * @var int[]
     */
    protected ?array $commentIds = null;

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
     * 评论id列表，只允许传入小于等于20个评论ID。
     * @return int[]
     */
    public function getCommentIds(): ?array
    {
        return $this->commentIds;
    }

    /**
     * 评论id列表，只允许传入小于等于20个评论ID。
     * @param int[] $commentIds
     * @return self
     */
    public function setCommentIds(?array $commentIds): self
    {
        $this->commentIds = $commentIds;
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
        return $obj;
    }
}
