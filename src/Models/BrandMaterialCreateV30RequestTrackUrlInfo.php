<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestTrackUrlInfo implements \JsonSerializable
{
    /**
     * 点击监测链接
     * @var string[]
     */
    protected ?array $actionTrackUrl = null;

    /**
     * 视频有效播放监测链接
     * @var string[]
     */
    protected ?array $effectiveFrame = null;

    /**
     * 视频播放链接
     * @var string[]
     */
    protected ?array $firstFrame = null;

    /**
     * 视频播放完成监测链接
     * @var string[]
     */
    protected ?array $lastFrame = null;

    /**
     * 展示监测链接
     * @var string[]
     */
    protected ?array $trackUrl = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30TrackUrlInfoTrackUrlSendType
     */
    protected ?string $trackUrlSendType = null;

    /**
     * 点击监测链接
     * @return string[]
     */
    public function getActionTrackUrl(): ?array
    {
        return $this->actionTrackUrl;
    }

    /**
     * 点击监测链接
     * @param string[] $actionTrackUrl
     * @return self
     */
    public function setActionTrackUrl(?array $actionTrackUrl): self
    {
        $this->actionTrackUrl = $actionTrackUrl;
        return $this;
    }

    /**
     * 视频有效播放监测链接
     * @return string[]
     */
    public function getEffectiveFrame(): ?array
    {
        return $this->effectiveFrame;
    }

    /**
     * 视频有效播放监测链接
     * @param string[] $effectiveFrame
     * @return self
     */
    public function setEffectiveFrame(?array $effectiveFrame): self
    {
        $this->effectiveFrame = $effectiveFrame;
        return $this;
    }

    /**
     * 视频播放链接
     * @return string[]
     */
    public function getFirstFrame(): ?array
    {
        return $this->firstFrame;
    }

    /**
     * 视频播放链接
     * @param string[] $firstFrame
     * @return self
     */
    public function setFirstFrame(?array $firstFrame): self
    {
        $this->firstFrame = $firstFrame;
        return $this;
    }

    /**
     * 视频播放完成监测链接
     * @return string[]
     */
    public function getLastFrame(): ?array
    {
        return $this->lastFrame;
    }

    /**
     * 视频播放完成监测链接
     * @param string[] $lastFrame
     * @return self
     */
    public function setLastFrame(?array $lastFrame): self
    {
        $this->lastFrame = $lastFrame;
        return $this;
    }

    /**
     * 展示监测链接
     * @return string[]
     */
    public function getTrackUrl(): ?array
    {
        return $this->trackUrl;
    }

    /**
     * 展示监测链接
     * @param string[] $trackUrl
     * @return self
     */
    public function setTrackUrl(?array $trackUrl): self
    {
        $this->trackUrl = $trackUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30TrackUrlInfoTrackUrlSendType
     */
    public function getTrackUrlSendType(): ?string
    {
        return $this->trackUrlSendType;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30TrackUrlInfoTrackUrlSendType $trackUrlSendType
     * @return self
     */
    public function setTrackUrlSendType(?string $trackUrlSendType): self
    {
        $this->trackUrlSendType = $trackUrlSendType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionTrackUrl !== null) {
            $result['action_track_url'] = $this->actionTrackUrl;
        }
        if ($this->effectiveFrame !== null) {
            $result['effective_frame'] = $this->effectiveFrame;
        }
        if ($this->firstFrame !== null) {
            $result['first_frame'] = $this->firstFrame;
        }
        if ($this->lastFrame !== null) {
            $result['last_frame'] = $this->lastFrame;
        }
        if ($this->trackUrl !== null) {
            $result['track_url'] = $this->trackUrl;
        }
        if ($this->trackUrlSendType !== null) {
            $result['track_url_send_type'] = $this->trackUrlSendType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_url'] ?? null) !== null && is_array($v)) {
            $obj->actionTrackUrl = $v;
        }
        if (($v = $data['effective_frame'] ?? null) !== null && is_array($v)) {
            $obj->effectiveFrame = $v;
        }
        if (($v = $data['first_frame'] ?? null) !== null && is_array($v)) {
            $obj->firstFrame = $v;
        }
        if (($v = $data['last_frame'] ?? null) !== null && is_array($v)) {
            $obj->lastFrame = $v;
        }
        if (($v = $data['track_url'] ?? null) !== null && is_array($v)) {
            $obj->trackUrl = $v;
        }
        if (($v = $data['track_url_send_type'] ?? null) !== null) {
            $obj->trackUrlSendType = (string) $v;
        }
        return $obj;
    }
}
