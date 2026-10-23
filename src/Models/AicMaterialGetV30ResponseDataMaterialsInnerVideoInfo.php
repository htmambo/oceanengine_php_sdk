<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMaterialGetV30ResponseDataMaterialsInnerVideoInfo implements \JsonSerializable
{
    /**
     * 视频时长
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 视频高度
     * @var int
     */
    protected ?int $height = null;

    /**
     * 视频宽高比
     * @var float
     */
    protected ?float $ratio = null;

    /**
     * 视频md5值
     * @var string
     */
    protected ?string $signature = null;

    /**
     * 视频ID，可以调用推送的 MAPI 推送到对应的广告账号。
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 视频预览链接，可利用此链接下载视频
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 视频宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 视频时长
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 视频时长
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 视频高度
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 视频高度
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 视频宽高比
     * @return float
     */
    public function getRatio(): ?float
    {
        return $this->ratio;
    }

    /**
     * 视频宽高比
     * @param float $ratio
     * @return self
     */
    public function setRatio(?float $ratio): self
    {
        $this->ratio = $ratio;
        return $this;
    }

    /**
     * 视频md5值
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 视频md5值
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * 视频ID，可以调用推送的 MAPI 推送到对应的广告账号。
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频ID，可以调用推送的 MAPI 推送到对应的广告账号。
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 视频预览链接，可利用此链接下载视频
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频预览链接，可利用此链接下载视频
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * 视频宽度
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 视频宽度
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
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->ratio !== null) {
            $result['ratio'] = $this->ratio;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
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
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['ratio'] ?? null) !== null) {
            $obj->ratio = (float) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
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
