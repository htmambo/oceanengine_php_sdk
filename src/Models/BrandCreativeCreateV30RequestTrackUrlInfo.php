<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30RequestTrackUrlInfo implements \JsonSerializable
{
    /**
     * 点击监测
     * @var string[]
     */
    protected ?array $actionTrackUrlList = null;

    /**
     * 视频5s播放监测
     * @var string[]
     */
    protected ?array $effectiveFrameUrlList = null;

    /**
     * 展示监测
     * @var string[]
     */
    protected ?array $trackUrlList = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType
     */
    protected ?string $trackUrlSendType = null;

    /**
     * 点击监测
     * @return string[]
     */
    public function getActionTrackUrlList(): ?array
    {
        return $this->actionTrackUrlList;
    }

    /**
     * 点击监测
     * @param string[] $actionTrackUrlList
     * @return self
     */
    public function setActionTrackUrlList(?array $actionTrackUrlList): self
    {
        $this->actionTrackUrlList = $actionTrackUrlList;
        return $this;
    }

    /**
     * 视频5s播放监测
     * @return string[]
     */
    public function getEffectiveFrameUrlList(): ?array
    {
        return $this->effectiveFrameUrlList;
    }

    /**
     * 视频5s播放监测
     * @param string[] $effectiveFrameUrlList
     * @return self
     */
    public function setEffectiveFrameUrlList(?array $effectiveFrameUrlList): self
    {
        $this->effectiveFrameUrlList = $effectiveFrameUrlList;
        return $this;
    }

    /**
     * 展示监测
     * @return string[]
     */
    public function getTrackUrlList(): ?array
    {
        return $this->trackUrlList;
    }

    /**
     * 展示监测
     * @param string[] $trackUrlList
     * @return self
     */
    public function setTrackUrlList(?array $trackUrlList): self
    {
        $this->trackUrlList = $trackUrlList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType
     */
    public function getTrackUrlSendType(): ?string
    {
        return $this->trackUrlSendType;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType $trackUrlSendType
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
        if ($this->actionTrackUrlList !== null) {
            $result['action_track_url_list'] = $this->actionTrackUrlList;
        }
        if ($this->effectiveFrameUrlList !== null) {
            $result['effective_frame_url_list'] = $this->effectiveFrameUrlList;
        }
        if ($this->trackUrlList !== null) {
            $result['track_url_list'] = $this->trackUrlList;
        }
        if ($this->trackUrlSendType !== null) {
            $result['track_url_send_type'] = $this->trackUrlSendType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_url_list'] ?? null) !== null && is_array($v)) {
            $obj->actionTrackUrlList = $v;
        }
        if (($v = $data['effective_frame_url_list'] ?? null) !== null && is_array($v)) {
            $obj->effectiveFrameUrlList = $v;
        }
        if (($v = $data['track_url_list'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlList = $v;
        }
        if (($v = $data['track_url_send_type'] ?? null) !== null) {
            $obj->trackUrlSendType = (string) $v;
        }
        return $obj;
    }
}
