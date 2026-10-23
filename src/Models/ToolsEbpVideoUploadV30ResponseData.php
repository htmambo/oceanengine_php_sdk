<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoUploadV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $coverImageUri = null;

    /**
     * @var string
     */
    protected ?string $coverImageUrl = null;

    /**
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var int
     */
    protected ?int $size = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var string
     */
    protected ?string $videoSignature = null;

    /**
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * @var int
     */
    protected ?int $width = null;

    /**
     * @return string
     */
    public function getCoverImageUri(): ?string
    {
        return $this->coverImageUri;
    }

    /**
     * @param string $coverImageUri
     * @return self
     */
    public function setCoverImageUri(?string $coverImageUri): self
    {
        $this->coverImageUri = $coverImageUri;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverImageUrl(): ?string
    {
        return $this->coverImageUrl;
    }

    /**
     * @param string $coverImageUrl
     * @return self
     */
    public function setCoverImageUrl(?string $coverImageUrl): self
    {
        $this->coverImageUrl = $coverImageUrl;
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
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
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
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;
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
    public function getVideoSignature(): ?string
    {
        return $this->videoSignature;
    }

    /**
     * @param string $videoSignature
     * @return self
     */
    public function setVideoSignature(?string $videoSignature): self
    {
        $this->videoSignature = $videoSignature;
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
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->coverImageUri !== null) {
            $result['cover_image_uri'] = $this->coverImageUri;
        }
        if ($this->coverImageUrl !== null) {
            $result['cover_image_url'] = $this->coverImageUrl;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->size !== null) {
            $result['size'] = $this->size;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoSignature !== null) {
            $result['video_signature'] = $this->videoSignature;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_image_uri'] ?? null) !== null) {
            $obj->coverImageUri = (string) $v;
        }
        if (($v = $data['cover_image_url'] ?? null) !== null) {
            $obj->coverImageUrl = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['size'] ?? null) !== null) {
            $obj->size = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_signature'] ?? null) !== null) {
            $obj->videoSignature = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
