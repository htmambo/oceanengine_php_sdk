<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanVideoGetV10Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanVideoGetV10FilteringImageMode[]
     */
    protected ?array $imageMode = null;

    /**
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var string[]
     */
    protected ?array $signatures = null;

    /**
     * @var \Oceanengine\Models\QianchuanVideoGetV10FilteringSources[]
     */
    protected ?array $sources = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var string[]
     */
    protected ?array $tags = null;

    /**
     * @var string[]
     */
    protected ?array $videoIds = null;

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanVideoGetV10FilteringImageMode[]
     */
    public function getImageMode(): ?array
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanVideoGetV10FilteringImageMode[] $imageMode
     * @return self
     */
    public function setImageMode(?array $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSignatures(): ?array
    {
        return $this->signatures;
    }

    /**
     * @param string[] $signatures
     * @return self
     */
    public function setSignatures(?array $signatures): self
    {
        $this->signatures = $signatures;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanVideoGetV10FilteringSources[]
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }

    /**
     * @param \Oceanengine\Models\QianchuanVideoGetV10FilteringSources[] $sources
     * @return self
     */
    public function setSources(?array $sources): self
    {
        $this->sources = $sources;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoIds(): ?array
    {
        return $this->videoIds;
    }

    /**
     * @param string[] $videoIds
     * @return self
     */
    public function setVideoIds(?array $videoIds): self
    {
        $this->videoIds = $videoIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->signatures !== null) {
            $result['signatures'] = $this->signatures;
        }
        if ($this->sources !== null) {
            $result['sources'] = $this->sources;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->videoIds !== null) {
            $result['video_ids'] = $this->videoIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null && is_array($v)) {
            $obj->imageMode = $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['signatures'] ?? null) !== null && is_array($v)) {
            $obj->signatures = $v;
        }
        if (($v = $data['sources'] ?? null) !== null && is_array($v)) {
            $obj->sources = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = $v;
        }
        if (($v = $data['video_ids'] ?? null) !== null && is_array($v)) {
            $obj->videoIds = $v;
        }
        return $obj;
    }
}
