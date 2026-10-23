<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoUpdateV2ResponseDataVideosInner implements \JsonSerializable
{
    /**
     * 标签
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * 更新状态 SUCCESS 成功 FAILURE 失败（原因：操作视频非当前客户所有或操作的视频不存在）
     * @var int
     */
    protected ?int $statusCode = null;

    /**
     * @var \Oceanengine\Models\FileVideoUpdateV2DataVideosUpdateStatus
     */
    protected ?string $updateStatus = null;

    /**
     * 视频封面uri
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * 视频id
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 标签
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * 标签
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * 更新状态 SUCCESS 成功 FAILURE 失败（原因：操作视频非当前客户所有或操作的视频不存在）
     * @return int
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * 更新状态 SUCCESS 成功 FAILURE 失败（原因：操作视频非当前客户所有或操作的视频不存在）
     * @param int $statusCode
     * @return self
     */
    public function setStatusCode(?int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoUpdateV2DataVideosUpdateStatus
     */
    public function getUpdateStatus(): ?string
    {
        return $this->updateStatus;
    }

    /**
     * @param \Oceanengine\Models\FileVideoUpdateV2DataVideosUpdateStatus $updateStatus
     * @return self
     */
    public function setUpdateStatus(?string $updateStatus): self
    {
        $this->updateStatus = $updateStatus;
        return $this;
    }

    /**
     * 视频封面uri
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * 视频封面uri
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
        return $this;
    }

    /**
     * 视频id
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频id
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->statusCode !== null) {
            $result['status_code'] = $this->statusCode;
        }
        if ($this->updateStatus !== null) {
            $result['update_status'] = $this->updateStatus;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['status_code'] ?? null) !== null) {
            $obj->statusCode = (int) $v;
        }
        if (($v = $data['update_status'] ?? null) !== null) {
            $obj->updateStatus = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
