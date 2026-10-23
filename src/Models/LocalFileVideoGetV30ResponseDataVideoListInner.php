<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoGetV30ResponseDataVideoListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoGetV30DataVideoListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoGetV30DataVideoListMaterialProperties[]
     */
    protected ?array $materialProperties = null;

    /**
     * @var string
     */
    protected ?string $posterUrl = null;

    /**
     * @var string
     */
    protected ?string $signature = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoGetV30DataVideoListSource
     */
    protected ?string $source = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var string
     */
    protected ?string $videoName = null;

    /**
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoGetV30DataVideoListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoGetV30DataVideoListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoGetV30DataVideoListMaterialProperties[]
     */
    public function getMaterialProperties(): ?array
    {
        return $this->materialProperties;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoGetV30DataVideoListMaterialProperties[] $materialProperties
     * @return self
     */
    public function setMaterialProperties(?array $materialProperties): self
    {
        $this->materialProperties = $materialProperties;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosterUrl(): ?string
    {
        return $this->posterUrl;
    }

    /**
     * @param string $posterUrl
     * @return self
     */
    public function setPosterUrl(?string $posterUrl): self
    {
        $this->posterUrl = $posterUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoGetV30DataVideoListSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoGetV30DataVideoListSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoName(): ?string
    {
        return $this->videoName;
    }

    /**
     * @param string $videoName
     * @return self
     */
    public function setVideoName(?string $videoName): self
    {
        $this->videoName = $videoName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialProperties !== null) {
            $result['material_properties'] = $this->materialProperties;
        }
        if ($this->posterUrl !== null) {
            $result['poster_url'] = $this->posterUrl;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoName !== null) {
            $result['video_name'] = $this->videoName;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_properties'] ?? null) !== null && is_array($v)) {
            $obj->materialProperties = $v;
        }
        if (($v = $data['poster_url'] ?? null) !== null) {
            $obj->posterUrl = (string) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_name'] ?? null) !== null) {
            $obj->videoName = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
