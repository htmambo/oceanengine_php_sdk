<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerTrackUrlGetV2ResponseDataTrackUrlGroupsInner implements \JsonSerializable
{
    /**
     * 点击（监测链接）只允许传入1个
     * @var string
     */
    protected ?string $actionTrackUrl = null;

    /**
     * 激活监测
     * @var string
     */
    protected ?string $activeTrackUrl = null;

    /**
     * 下载链接
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 展示（监测链接）
     * @var string
     */
    protected ?string $trackUrl = null;

    /**
     * 监测链接组ID
     * @var int
     */
    protected ?int $trackUrlGroupId = null;

    /**
     * 监测链接组名称
     * @var string
     */
    protected ?string $trackUrlGroupName = null;

    /**
     * 视频播完（监测链接），只允许传入1个
     * @var string
     */
    protected ?string $videoPlayDoneTrackUrl = null;

    /**
     * 视频有效播放（监测链接），只允许传入1个
     * @var string
     */
    protected ?string $videoPlayEffectiveTrackUrl = null;

    /**
     * 视频播放（监测链接），只允许传入1个
     * @var string
     */
    protected ?string $videoPlayTrackUrl = null;

    /**
     * 点击（监测链接）只允许传入1个
     * @return string
     */
    public function getActionTrackUrl(): ?string
    {
        return $this->actionTrackUrl;
    }

    /**
     * 点击（监测链接）只允许传入1个
     * @param string $actionTrackUrl
     * @return self
     */
    public function setActionTrackUrl(?string $actionTrackUrl): self
    {
        $this->actionTrackUrl = $actionTrackUrl;
        return $this;
    }

    /**
     * 激活监测
     * @return string
     */
    public function getActiveTrackUrl(): ?string
    {
        return $this->activeTrackUrl;
    }

    /**
     * 激活监测
     * @param string $activeTrackUrl
     * @return self
     */
    public function setActiveTrackUrl(?string $activeTrackUrl): self
    {
        $this->activeTrackUrl = $activeTrackUrl;
        return $this;
    }

    /**
     * 下载链接
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 下载链接
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 展示（监测链接）
     * @return string
     */
    public function getTrackUrl(): ?string
    {
        return $this->trackUrl;
    }

    /**
     * 展示（监测链接）
     * @param string $trackUrl
     * @return self
     */
    public function setTrackUrl(?string $trackUrl): self
    {
        $this->trackUrl = $trackUrl;
        return $this;
    }

    /**
     * 监测链接组ID
     * @return int
     */
    public function getTrackUrlGroupId(): ?int
    {
        return $this->trackUrlGroupId;
    }

    /**
     * 监测链接组ID
     * @param int $trackUrlGroupId
     * @return self
     */
    public function setTrackUrlGroupId(?int $trackUrlGroupId): self
    {
        $this->trackUrlGroupId = $trackUrlGroupId;
        return $this;
    }

    /**
     * 监测链接组名称
     * @return string
     */
    public function getTrackUrlGroupName(): ?string
    {
        return $this->trackUrlGroupName;
    }

    /**
     * 监测链接组名称
     * @param string $trackUrlGroupName
     * @return self
     */
    public function setTrackUrlGroupName(?string $trackUrlGroupName): self
    {
        $this->trackUrlGroupName = $trackUrlGroupName;
        return $this;
    }

    /**
     * 视频播完（监测链接），只允许传入1个
     * @return string
     */
    public function getVideoPlayDoneTrackUrl(): ?string
    {
        return $this->videoPlayDoneTrackUrl;
    }

    /**
     * 视频播完（监测链接），只允许传入1个
     * @param string $videoPlayDoneTrackUrl
     * @return self
     */
    public function setVideoPlayDoneTrackUrl(?string $videoPlayDoneTrackUrl): self
    {
        $this->videoPlayDoneTrackUrl = $videoPlayDoneTrackUrl;
        return $this;
    }

    /**
     * 视频有效播放（监测链接），只允许传入1个
     * @return string
     */
    public function getVideoPlayEffectiveTrackUrl(): ?string
    {
        return $this->videoPlayEffectiveTrackUrl;
    }

    /**
     * 视频有效播放（监测链接），只允许传入1个
     * @param string $videoPlayEffectiveTrackUrl
     * @return self
     */
    public function setVideoPlayEffectiveTrackUrl(?string $videoPlayEffectiveTrackUrl): self
    {
        $this->videoPlayEffectiveTrackUrl = $videoPlayEffectiveTrackUrl;
        return $this;
    }

    /**
     * 视频播放（监测链接），只允许传入1个
     * @return string
     */
    public function getVideoPlayTrackUrl(): ?string
    {
        return $this->videoPlayTrackUrl;
    }

    /**
     * 视频播放（监测链接），只允许传入1个
     * @param string $videoPlayTrackUrl
     * @return self
     */
    public function setVideoPlayTrackUrl(?string $videoPlayTrackUrl): self
    {
        $this->videoPlayTrackUrl = $videoPlayTrackUrl;
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
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->trackUrl !== null) {
            $result['track_url'] = $this->trackUrl;
        }
        if ($this->trackUrlGroupId !== null) {
            $result['track_url_group_id'] = $this->trackUrlGroupId;
        }
        if ($this->trackUrlGroupName !== null) {
            $result['track_url_group_name'] = $this->trackUrlGroupName;
        }
        if ($this->videoPlayDoneTrackUrl !== null) {
            $result['video_play_done_track_url'] = $this->videoPlayDoneTrackUrl;
        }
        if ($this->videoPlayEffectiveTrackUrl !== null) {
            $result['video_play_effective_track_url'] = $this->videoPlayEffectiveTrackUrl;
        }
        if ($this->videoPlayTrackUrl !== null) {
            $result['video_play_track_url'] = $this->videoPlayTrackUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_url'] ?? null) !== null) {
            $obj->actionTrackUrl = (string) $v;
        }
        if (($v = $data['active_track_url'] ?? null) !== null) {
            $obj->activeTrackUrl = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['track_url'] ?? null) !== null) {
            $obj->trackUrl = (string) $v;
        }
        if (($v = $data['track_url_group_id'] ?? null) !== null) {
            $obj->trackUrlGroupId = (int) $v;
        }
        if (($v = $data['track_url_group_name'] ?? null) !== null) {
            $obj->trackUrlGroupName = (string) $v;
        }
        if (($v = $data['video_play_done_track_url'] ?? null) !== null) {
            $obj->videoPlayDoneTrackUrl = (string) $v;
        }
        if (($v = $data['video_play_effective_track_url'] ?? null) !== null) {
            $obj->videoPlayEffectiveTrackUrl = (string) $v;
        }
        if (($v = $data['video_play_track_url'] ?? null) !== null) {
            $obj->videoPlayTrackUrl = (string) $v;
        }
        return $obj;
    }
}
