<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoAwemeGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $albumId = null;

    /**
     * 视频播放链接
     * @var string
     */
    protected ?string $awemePlayUrl = null;

    /**
     * 视频时长，单位为秒
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var string
     */
    protected ?string $ifAlbum = null;

    /**
     * @var \Oceanengine\Models\FileVideoAwemeGetV2DataListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * 抖音视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 素材ID
     * @var int
     */
    protected ?int $mid = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 视频封面ID
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * 视频封面链接
     * @var string
     */
    protected ?string $videoCoverUrl = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return int
     */
    public function getAlbumId(): ?int
    {
        return $this->albumId;
    }

    /**
     * @param int $albumId
     * @return self
     */
    public function setAlbumId(?int $albumId): self
    {
        $this->albumId = $albumId;
        return $this;
    }

    /**
     * 视频播放链接
     * @return string
     */
    public function getAwemePlayUrl(): ?string
    {
        return $this->awemePlayUrl;
    }

    /**
     * 视频播放链接
     * @param string $awemePlayUrl
     * @return self
     */
    public function setAwemePlayUrl(?string $awemePlayUrl): self
    {
        $this->awemePlayUrl = $awemePlayUrl;
        return $this;
    }

    /**
     * 视频时长，单位为秒
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 视频时长，单位为秒
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
    public function getIfAlbum(): ?string
    {
        return $this->ifAlbum;
    }

    /**
     * @param string $ifAlbum
     * @return self
     */
    public function setIfAlbum(?string $ifAlbum): self
    {
        $this->ifAlbum = $ifAlbum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoAwemeGetV2DataListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\FileVideoAwemeGetV2DataListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * 抖音视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 素材ID
     * @return int
     */
    public function getMid(): ?int
    {
        return $this->mid;
    }

    /**
     * 素材ID
     * @param int $mid
     * @return self
     */
    public function setMid(?int $mid): self
    {
        $this->mid = $mid;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 视频标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 视频封面ID
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * 视频封面ID
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
        return $this;
    }

    /**
     * 视频封面链接
     * @return string
     */
    public function getVideoCoverUrl(): ?string
    {
        return $this->videoCoverUrl;
    }

    /**
     * 视频封面链接
     * @param string $videoCoverUrl
     * @return self
     */
    public function setVideoCoverUrl(?string $videoCoverUrl): self
    {
        $this->videoCoverUrl = $videoCoverUrl;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->albumId !== null) {
            $result['album_id'] = $this->albumId;
        }
        if ($this->awemePlayUrl !== null) {
            $result['aweme_play_url'] = $this->awemePlayUrl;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->ifAlbum !== null) {
            $result['if_album'] = $this->ifAlbum;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->mid !== null) {
            $result['mid'] = $this->mid;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoCoverUrl !== null) {
            $result['video_cover_url'] = $this->videoCoverUrl;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['album_id'] ?? null) !== null) {
            $obj->albumId = (int) $v;
        }
        if (($v = $data['aweme_play_url'] ?? null) !== null) {
            $obj->awemePlayUrl = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['if_album'] ?? null) !== null) {
            $obj->ifAlbum = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['mid'] ?? null) !== null) {
            $obj->mid = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_cover_url'] ?? null) !== null) {
            $obj->videoCoverUrl = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
