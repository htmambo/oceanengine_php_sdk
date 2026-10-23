<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoFullScreenVideoListInner implements \JsonSerializable
{
    /**
     * 封面图链接
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * 时长
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 文件名称
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 文件大小
     * @var int
     */
    protected ?int $fileSize = null;

    /**
     * 高度
     * @var int
     */
    protected ?int $height = null;

    /**
     * 视频大小
     * @var int
     */
    protected ?int $initialSize = null;

    /**
     * 原始播放链接
     * @var string
     */
    protected ?string $originPlayUrl = null;

    /**
     * 视频状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * 封面图高度
     * @var int
     */
    protected ?int $thumbHeight = null;

    /**
     * 封面图宽度
     * @var int
     */
    protected ?int $thumbWidth = null;

    /**
     * 视频时长
     * @var float
     */
    protected ?float $videoDuration = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 视屏名称
     * @var string
     */
    protected ?string $videoName = null;

    /**
     * 视频链接
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 封面图链接
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * 封面图链接
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * 时长
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 时长
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 文件名称
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 文件名称
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 文件大小
     * @return int
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    /**
     * 文件大小
     * @param int $fileSize
     * @return self
     */
    public function setFileSize(?int $fileSize): self
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * 高度
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 高度
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 视频大小
     * @return int
     */
    public function getInitialSize(): ?int
    {
        return $this->initialSize;
    }

    /**
     * 视频大小
     * @param int $initialSize
     * @return self
     */
    public function setInitialSize(?int $initialSize): self
    {
        $this->initialSize = $initialSize;
        return $this;
    }

    /**
     * 原始播放链接
     * @return string
     */
    public function getOriginPlayUrl(): ?string
    {
        return $this->originPlayUrl;
    }

    /**
     * 原始播放链接
     * @param string $originPlayUrl
     * @return self
     */
    public function setOriginPlayUrl(?string $originPlayUrl): self
    {
        $this->originPlayUrl = $originPlayUrl;
        return $this;
    }

    /**
     * 视频状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 视频状态
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
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
     * 视频时长
     * @return float
     */
    public function getVideoDuration(): ?float
    {
        return $this->videoDuration;
    }

    /**
     * 视频时长
     * @param float $videoDuration
     * @return self
     */
    public function setVideoDuration(?float $videoDuration): self
    {
        $this->videoDuration = $videoDuration;
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
     * 视屏名称
     * @return string
     */
    public function getVideoName(): ?string
    {
        return $this->videoName;
    }

    /**
     * 视屏名称
     * @param string $videoName
     * @return self
     */
    public function setVideoName(?string $videoName): self
    {
        $this->videoName = $videoName;
        return $this;
    }

    /**
     * 视频链接
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频链接
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * 宽度
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 宽度
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
        if ($this->coverUrl !== null) {
            $result['cover_url'] = $this->coverUrl;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->fileSize !== null) {
            $result['file_size'] = $this->fileSize;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->initialSize !== null) {
            $result['initial_size'] = $this->initialSize;
        }
        if ($this->originPlayUrl !== null) {
            $result['origin_play_url'] = $this->originPlayUrl;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->thumbHeight !== null) {
            $result['thumb_height'] = $this->thumbHeight;
        }
        if ($this->thumbWidth !== null) {
            $result['thumb_width'] = $this->thumbWidth;
        }
        if ($this->videoDuration !== null) {
            $result['video_duration'] = $this->videoDuration;
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
        if ($this->width !== null) {
            $result['width'] = $this->width;
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
        if (($v = $data['file_size'] ?? null) !== null) {
            $obj->fileSize = (int) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['initial_size'] ?? null) !== null) {
            $obj->initialSize = (int) $v;
        }
        if (($v = $data['origin_play_url'] ?? null) !== null) {
            $obj->originPlayUrl = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['thumb_height'] ?? null) !== null) {
            $obj->thumbHeight = (int) $v;
        }
        if (($v = $data['thumb_width'] ?? null) !== null) {
            $obj->thumbWidth = (int) $v;
        }
        if (($v = $data['video_duration'] ?? null) !== null) {
            $obj->videoDuration = (float) $v;
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
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
