<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideoVideoListInner implements \JsonSerializable
{
    /**
     * 视频时长，单位秒
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 文件大小，单位字节
     * @var string
     */
    protected ?string $fileSize = null;

    /**
     * 视频高,单位px
     * @var int
     */
    protected ?int $height = null;

    /**
     * 播放地址
     * @var string
     */
    protected ?string $originPlayUrl = null;

    /**
     * 封面图高度
     * @var int
     */
    protected ?int $thumbHeight = null;

    /**
     * 封面图uri
     * @var string
     */
    protected ?string $thumbUri = null;

    /**
     * 封面图宽度
     * @var int
     */
    protected ?int $thumbWidth = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 视频url
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 视频宽,单位px
     * @var int
     */
    protected ?int $width = null;

    /**
     * 视频时长，单位秒
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 视频时长，单位秒
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 文件大小，单位字节
     * @return string
     */
    public function getFileSize(): ?string
    {
        return $this->fileSize;
    }

    /**
     * 文件大小，单位字节
     * @param string $fileSize
     * @return self
     */
    public function setFileSize(?string $fileSize): self
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * 视频高,单位px
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 视频高,单位px
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 播放地址
     * @return string
     */
    public function getOriginPlayUrl(): ?string
    {
        return $this->originPlayUrl;
    }

    /**
     * 播放地址
     * @param string $originPlayUrl
     * @return self
     */
    public function setOriginPlayUrl(?string $originPlayUrl): self
    {
        $this->originPlayUrl = $originPlayUrl;
        return $this;
    }

    /**
     * 封面图高度
     * @return int
     */
    public function getThumbHeight(): ?int
    {
        return $this->thumbHeight;
    }

    /**
     * 封面图高度
     * @param int $thumbHeight
     * @return self
     */
    public function setThumbHeight(?int $thumbHeight): self
    {
        $this->thumbHeight = $thumbHeight;
        return $this;
    }

    /**
     * 封面图uri
     * @return string
     */
    public function getThumbUri(): ?string
    {
        return $this->thumbUri;
    }

    /**
     * 封面图uri
     * @param string $thumbUri
     * @return self
     */
    public function setThumbUri(?string $thumbUri): self
    {
        $this->thumbUri = $thumbUri;
        return $this;
    }

    /**
     * 封面图宽度
     * @return int
     */
    public function getThumbWidth(): ?int
    {
        return $this->thumbWidth;
    }

    /**
     * 封面图宽度
     * @param int $thumbWidth
     * @return self
     */
    public function setThumbWidth(?int $thumbWidth): self
    {
        $this->thumbWidth = $thumbWidth;
        return $this;
    }

    /**
     * 视频ID
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频ID
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 视频url
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频url
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * 视频宽,单位px
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 视频宽,单位px
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
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->fileSize !== null) {
            $result['file_size'] = $this->fileSize;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->originPlayUrl !== null) {
            $result['origin_play_url'] = $this->originPlayUrl;
        }
        if ($this->thumbHeight !== null) {
            $result['thumb_height'] = $this->thumbHeight;
        }
        if ($this->thumbUri !== null) {
            $result['thumb_uri'] = $this->thumbUri;
        }
        if ($this->thumbWidth !== null) {
            $result['thumb_width'] = $this->thumbWidth;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
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
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['file_size'] ?? null) !== null) {
            $obj->fileSize = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['origin_play_url'] ?? null) !== null) {
            $obj->originPlayUrl = (string) $v;
        }
        if (($v = $data['thumb_height'] ?? null) !== null) {
            $obj->thumbHeight = (int) $v;
        }
        if (($v = $data['thumb_uri'] ?? null) !== null) {
            $obj->thumbUri = (string) $v;
        }
        if (($v = $data['thumb_width'] ?? null) !== null) {
            $obj->thumbWidth = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
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
