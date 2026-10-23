<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2RequestOrderItemInfoAuthorListInner implements \JsonSerializable
{
    /**
     * 达人ID（星图中的达人Star ID）
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 任务数量  1到10的整数，所有达人任务累计数量不能超过50
     * @var int
     */
    protected ?int $cnt = null;

    /**
     * 任务时长，直播任务使用
     * @var int
     */
    protected ?int $orderTimeSpan = null;

    /**
     * 任务类型枚举  [video_type]仅限以下 (1)：1-20s视频； (2)：21-60s视频； (71)：60s+视频
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
     * 任务数量  1到10的整数，所有达人任务累计数量不能超过50
     * @return int
     */
    public function getCnt(): ?int
    {
        return $this->cnt;
    }

    /**
     * 任务数量  1到10的整数，所有达人任务累计数量不能超过50
     * @param int $cnt
     * @return self
     */
    public function setCnt(?int $cnt): self
    {
        $this->cnt = $cnt;
        return $this;
    }

    /**
     * 任务时长，直播任务使用
     * @return int
     */
    public function getOrderTimeSpan(): ?int
    {
        return $this->orderTimeSpan;
    }

    /**
     * 任务时长，直播任务使用
     * @param int $orderTimeSpan
     * @return self
     */
    public function setOrderTimeSpan(?int $orderTimeSpan): self
    {
        $this->orderTimeSpan = $orderTimeSpan;
        return $this;
    }

    /**
     * 任务类型枚举  [video_type]仅限以下 (1)：1-20s视频； (2)：21-60s视频； (71)：60s+视频
     * @return int
     */
    public function getVideoType(): ?int
    {
        return $this->videoType;
    }

    /**
     * 任务类型枚举  [video_type]仅限以下 (1)：1-20s视频； (2)：21-60s视频； (71)：60s+视频
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
        if ($this->orderTimeSpan !== null) {
            $result['order_time_span'] = $this->orderTimeSpan;
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
        if (($v = $data['order_time_span'] ?? null) !== null) {
            $obj->orderTimeSpan = (int) $v;
        }
        if (($v = $data['video_type'] ?? null) !== null) {
            $obj->videoType = (int) $v;
        }
        return $obj;
    }
}
