<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMaterialPushV30ResponseDataFailResultsInner implements \JsonSerializable
{
    /**
     * 推送失败的原因
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 目标推送广告主id
     * @var int
     */
    protected ?int $targetAdvertiserId = null;

    /**
     * 推送失败的视频id
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 推送失败的原因
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * 推送失败的原因
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * 目标推送广告主id
     * @return int
     */
    public function getTargetAdvertiserId(): ?int
    {
        return $this->targetAdvertiserId;
    }

    /**
     * 目标推送广告主id
     * @param int $targetAdvertiserId
     * @return self
     */
    public function setTargetAdvertiserId(?int $targetAdvertiserId): self
    {
        $this->targetAdvertiserId = $targetAdvertiserId;
        return $this;
    }

    /**
     * 推送失败的视频id
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 推送失败的视频id
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
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->targetAdvertiserId !== null) {
            $result['target_advertiser_id'] = $this->targetAdvertiserId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['target_advertiser_id'] ?? null) !== null) {
            $obj->targetAdvertiserId = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
