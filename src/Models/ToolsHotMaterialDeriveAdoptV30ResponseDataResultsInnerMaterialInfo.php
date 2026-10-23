<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInnerMaterialInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var int
     */
    protected ?int $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $preVideoUrl = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
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
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return int
     */
    public function getImageMode(): ?int
    {
        return $this->imageMode;
    }

    /**
     * @param int $imageMode
     * @return self
     */
    public function setImageMode(?int $imageMode): self
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
     * @return string
     */
    public function getPreVideoUrl(): ?string
    {
        return $this->preVideoUrl;
    }

    /**
     * @param string $preVideoUrl
     * @return self
     */
    public function setPreVideoUrl(?string $preVideoUrl): self
    {
        $this->preVideoUrl = $preVideoUrl;
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
        if ($this->coverUrl !== null) {
            $result['cover_url'] = $this->coverUrl;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->preVideoUrl !== null) {
            $result['pre_video_url'] = $this->preVideoUrl;
        }
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
        if (($v = $data['cover_url'] ?? null) !== null) {
            $obj->coverUrl = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['pre_video_url'] ?? null) !== null) {
            $obj->preVideoUrl = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
