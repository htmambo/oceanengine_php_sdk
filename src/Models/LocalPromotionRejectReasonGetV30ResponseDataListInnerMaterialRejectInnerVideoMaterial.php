<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerVideoMaterial implements \JsonSerializable
{
    /**
     * 审核拒绝视频素材id
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 审核拒绝视频素材url
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 审核拒绝视频素材id
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 审核拒绝视频素材id
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 审核拒绝视频素材url
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 审核拒绝视频素材url
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
