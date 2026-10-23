<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10RequestTrackUrl implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $actionTrackUrl = null;

    /**
     * @var string[]
     */
    protected ?array $showTrackUrl = null;

    /**
     * @var string[]
     */
    protected ?array $videoPlayEffectiveTrackUrl = null;

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
    public function getShowTrackUrl(): ?array
    {
        return $this->showTrackUrl;
    }

    /**
     * @param string[] $showTrackUrl
     * @return self
     */
    public function setShowTrackUrl(?array $showTrackUrl): self
    {
        $this->showTrackUrl = $showTrackUrl;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionTrackUrl !== null) {
            $result['action_track_url'] = $this->actionTrackUrl;
        }
        if ($this->showTrackUrl !== null) {
            $result['show_track_url'] = $this->showTrackUrl;
        }
        if ($this->videoPlayEffectiveTrackUrl !== null) {
            $result['video_play_effective_track_url'] = $this->videoPlayEffectiveTrackUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_url'] ?? null) !== null && is_array($v)) {
            $obj->actionTrackUrl = $v;
        }
        if (($v = $data['show_track_url'] ?? null) !== null && is_array($v)) {
            $obj->showTrackUrl = $v;
        }
        if (($v = $data['video_play_effective_track_url'] ?? null) !== null && is_array($v)) {
            $obj->videoPlayEffectiveTrackUrl = $v;
        }
        return $obj;
    }
}
