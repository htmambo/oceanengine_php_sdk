<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectUpdateV30RequestTrackUrlSetting implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $actionTrackUrl = null;

    /**
     * @var string[]
     */
    protected ?array $activeTrackUrl = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30TrackUrlSettingSendType
     */
    protected ?string $sendType = null;

    /**
     * @var string[]
     */
    protected ?array $trackUrl = null;

    /**
     * @var int
     */
    protected ?int $trackUrlGroupId = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30TrackUrlSettingTrackUrlType
     */
    protected ?string $trackUrlType = null;

    /**
     * @var string[]
     */
    protected ?array $videoPlayDoneTrackUrl = null;

    /**
     * @var string[]
     */
    protected ?array $videoPlayEffectiveTrackUrl = null;

    /**
     * @var string[]
     */
    protected ?array $videoPlayFirstTrackUrl = null;

    /**
     * @return string[]
     */
    public function getActionTrackUrl(): ?array
    {
        return $this->actionTrackUrl;
    }

    /**
     * @param string[] $actionTrackUrl
     * @return self
     */
    public function setActionTrackUrl(?array $actionTrackUrl): self
    {
        $this->actionTrackUrl = $actionTrackUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getActiveTrackUrl(): ?array
    {
        return $this->activeTrackUrl;
    }

    /**
     * @param string[] $activeTrackUrl
     * @return self
     */
    public function setActiveTrackUrl(?array $activeTrackUrl): self
    {
        $this->activeTrackUrl = $activeTrackUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30TrackUrlSettingSendType
     */
    public function getSendType(): ?string
    {
        return $this->sendType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30TrackUrlSettingSendType $sendType
     * @return self
     */
    public function setSendType(?string $sendType): self
    {
        $this->sendType = $sendType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTrackUrl(): ?array
    {
        return $this->trackUrl;
    }

    /**
     * @param string[] $trackUrl
     * @return self
     */
    public function setTrackUrl(?array $trackUrl): self
    {
        $this->trackUrl = $trackUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrackUrlGroupId(): ?int
    {
        return $this->trackUrlGroupId;
    }

    /**
     * @param int $trackUrlGroupId
     * @return self
     */
    public function setTrackUrlGroupId(?int $trackUrlGroupId): self
    {
        $this->trackUrlGroupId = $trackUrlGroupId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30TrackUrlSettingTrackUrlType
     */
    public function getTrackUrlType(): ?string
    {
        return $this->trackUrlType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30TrackUrlSettingTrackUrlType $trackUrlType
     * @return self
     */
    public function setTrackUrlType(?string $trackUrlType): self
    {
        $this->trackUrlType = $trackUrlType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoPlayDoneTrackUrl(): ?array
    {
        return $this->videoPlayDoneTrackUrl;
    }

    /**
     * @param string[] $videoPlayDoneTrackUrl
     * @return self
     */
    public function setVideoPlayDoneTrackUrl(?array $videoPlayDoneTrackUrl): self
    {
        $this->videoPlayDoneTrackUrl = $videoPlayDoneTrackUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoPlayEffectiveTrackUrl(): ?array
    {
        return $this->videoPlayEffectiveTrackUrl;
    }

    /**
     * @param string[] $videoPlayEffectiveTrackUrl
     * @return self
     */
    public function setVideoPlayEffectiveTrackUrl(?array $videoPlayEffectiveTrackUrl): self
    {
        $this->videoPlayEffectiveTrackUrl = $videoPlayEffectiveTrackUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoPlayFirstTrackUrl(): ?array
    {
        return $this->videoPlayFirstTrackUrl;
    }

    /**
     * @param string[] $videoPlayFirstTrackUrl
     * @return self
     */
    public function setVideoPlayFirstTrackUrl(?array $videoPlayFirstTrackUrl): self
    {
        $this->videoPlayFirstTrackUrl = $videoPlayFirstTrackUrl;
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
        if ($this->activeTrackUrl !== null) {
            $result['active_track_url'] = $this->activeTrackUrl;
        }
        if ($this->sendType !== null) {
            $result['send_type'] = $this->sendType;
        }
        if ($this->trackUrl !== null) {
            $result['track_url'] = $this->trackUrl;
        }
        if ($this->trackUrlGroupId !== null) {
            $result['track_url_group_id'] = $this->trackUrlGroupId;
        }
        if ($this->trackUrlType !== null) {
            $result['track_url_type'] = $this->trackUrlType;
        }
        if ($this->videoPlayDoneTrackUrl !== null) {
            $result['video_play_done_track_url'] = $this->videoPlayDoneTrackUrl;
        }
        if ($this->videoPlayEffectiveTrackUrl !== null) {
            $result['video_play_effective_track_url'] = $this->videoPlayEffectiveTrackUrl;
        }
        if ($this->videoPlayFirstTrackUrl !== null) {
            $result['video_play_first_track_url'] = $this->videoPlayFirstTrackUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_url'] ?? null) !== null && is_array($v)) {
            $obj->actionTrackUrl = $v;
        }
        if (($v = $data['active_track_url'] ?? null) !== null && is_array($v)) {
            $obj->activeTrackUrl = $v;
        }
        if (($v = $data['send_type'] ?? null) !== null) {
            $obj->sendType = (string) $v;
        }
        if (($v = $data['track_url'] ?? null) !== null && is_array($v)) {
            $obj->trackUrl = $v;
        }
        if (($v = $data['track_url_group_id'] ?? null) !== null) {
            $obj->trackUrlGroupId = (int) $v;
        }
        if (($v = $data['track_url_type'] ?? null) !== null) {
            $obj->trackUrlType = (string) $v;
        }
        if (($v = $data['video_play_done_track_url'] ?? null) !== null && is_array($v)) {
            $obj->videoPlayDoneTrackUrl = $v;
        }
        if (($v = $data['video_play_effective_track_url'] ?? null) !== null && is_array($v)) {
            $obj->videoPlayEffectiveTrackUrl = $v;
        }
        if (($v = $data['video_play_first_track_url'] ?? null) !== null && is_array($v)) {
            $obj->videoPlayFirstTrackUrl = $v;
        }
        return $obj;
    }
}
