<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideo implements \JsonSerializable
{
    /**
     * 抖音视频ID
     * @var string
     */
    protected ?string $awemeItemId = null;

    /**
     * 是否塞物料 1为取物料（拉取抖音主页视频） 0为塞物料（上传视频）
     * @var int
     */
    protected ?int $awemeItemSource = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoMusicInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoMusicInfo $musicInfo = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInner[]
     */
    protected ?array $slides = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoVideo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoVideo $video = null;

    /**
     * 抖音视频ID
     * @return string
     */
    public function getAwemeItemId(): ?string
    {
        return $this->awemeItemId;
    }

    /**
     * 抖音视频ID
     * @param string $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?string $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * 是否塞物料 1为取物料（拉取抖音主页视频） 0为塞物料（上传视频）
     * @return int
     */
    public function getAwemeItemSource(): ?int
    {
        return $this->awemeItemSource;
    }

    /**
     * 是否塞物料 1为取物料（拉取抖音主页视频） 0为塞物料（上传视频）
     * @param int $awemeItemSource
     * @return self
     */
    public function setAwemeItemSource(?int $awemeItemSource): self
    {
        $this->awemeItemSource = $awemeItemSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoMusicInfo
     */
    public function getMusicInfo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoMusicInfo
    {
        return $this->musicInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoMusicInfo $musicInfo
     * @return self
     */
    public function setMusicInfo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoMusicInfo $musicInfo): self
    {
        $this->musicInfo = $musicInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInner[]
     */
    public function getSlides(): ?array
    {
        return $this->slides;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInner[] $slides
     * @return self
     */
    public function setSlides(?array $slides): self
    {
        $this->slides = $slides;
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
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoVideo
     */
    public function getVideo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoVideo $video): self
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->awemeItemSource !== null) {
            $result['aweme_item_source'] = $this->awemeItemSource;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->musicInfo !== null) {
            $result['music_info'] = $this->musicInfo;
        }
        if ($this->slides !== null) {
            $result['slides'] = $this->slides;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->video !== null) {
            $result['video'] = $this->video;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (string) $v;
        }
        if (($v = $data['aweme_item_source'] ?? null) !== null) {
            $obj->awemeItemSource = (int) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['music_info'] ?? null) !== null && is_array($v)) {
            $obj->musicInfo = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoMusicInfo::fromArray($v);
        }
        if (($v = $data['slides'] ?? null) !== null && is_array($v)) {
            $obj->slides = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoSlidesInner::fromArray($vv), $v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeVideoVideo::fromArray($v);
        }
        return $obj;
    }
}
