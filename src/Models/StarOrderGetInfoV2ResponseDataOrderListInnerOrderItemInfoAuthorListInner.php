<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfoAuthorListInner implements \JsonSerializable
{
    /**
     * 达人ID（星图中的达人Star ID）
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 任务数量
     * @var int
     */
    protected ?int $cnt = null;

    /**
     * 任务类型枚举 (1)：1-20s视频； (2)：21-60s视频； (71)：60s+视频
     * @var int
     */
    protected ?int $videoType = null;

    /**
     * 达人ID（星图中的达人Star ID）
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * 达人ID（星图中的达人Star ID）
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * 任务数量
     * @return int
     */
    public function getCnt(): ?int
    {
        return $this->cnt;
    }

    /**
     * 任务数量
     * @param int $cnt
     * @return self
     */
    public function setCnt(?int $cnt): self
    {
        $this->cnt = $cnt;
        return $this;
    }

    /**
     * 任务类型枚举 (1)：1-20s视频； (2)：21-60s视频； (71)：60s+视频
     * @return int
     */
    public function getVideoType(): ?int
    {
        return $this->videoType;
    }

    /**
     * 任务类型枚举 (1)：1-20s视频； (2)：21-60s视频； (71)：60s+视频
     * @param int $videoType
     * @return self
     */
    public function setVideoType(?int $videoType): self
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->cnt !== null) {
            $result['cnt'] = $this->cnt;
        }
        if ($this->videoType !== null) {
            $result['video_type'] = $this->videoType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['cnt'] ?? null) !== null) {
            $obj->cnt = (int) $v;
        }
        if (($v = $data['video_type'] ?? null) !== null) {
            $obj->videoType = (int) $v;
        }
        return $obj;
    }
}
