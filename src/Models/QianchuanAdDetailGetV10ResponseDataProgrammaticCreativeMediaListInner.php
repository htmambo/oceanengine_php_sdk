<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeCarouselId = null;

    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselAudio
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselAudio $carouselAudio = null;

    /**
     * @var string
     */
    protected ?string $carouselDescription = null;

    /**
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselImagesInner[]
     */
    protected ?array $carouselImages = null;

    /**
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $isAutoGenerate = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var string
     */
    protected ?string $videoPosterUrl = null;

    /**
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * @return int
     */
    public function getAwemeCarouselId(): ?int
    {
        return $this->awemeCarouselId;
    }

    /**
     * @param int $awemeCarouselId
     * @return self
     */
    public function setAwemeCarouselId(?int $awemeCarouselId): self
    {
        $this->awemeCarouselId = $awemeCarouselId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselAudio
     */
    public function getCarouselAudio(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselAudio
    {
        return $this->carouselAudio;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselAudio $carouselAudio
     * @return self
     */
    public function setCarouselAudio(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselAudio $carouselAudio): self
    {
        $this->carouselAudio = $carouselAudio;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarouselDescription(): ?string
    {
        return $this->carouselDescription;
    }

    /**
     * @param string $carouselDescription
     * @return self
     */
    public function setCarouselDescription(?string $carouselDescription): self
    {
        $this->carouselDescription = $carouselDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getCarouselId(): ?int
    {
        return $this->carouselId;
    }

    /**
     * @param int $carouselId
     * @return self
     */
    public function setCarouselId(?int $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselImagesInner[]
     */
    public function getCarouselImages(): ?array
    {
        return $this->carouselImages;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselImagesInner[] $carouselImages
     * @return self
     */
    public function setCarouselImages(?array $carouselImages): self
    {
        $this->carouselImages = $carouselImages;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataProgrammaticCreativeMediaListImageMode $imageMode
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
    public function getIsAutoGenerate(): ?int
    {
        return $this->isAutoGenerate;
    }

    /**
     * @param int $isAutoGenerate
     * @return self
     */
    public function setIsAutoGenerate(?int $isAutoGenerate): self
    {
        $this->isAutoGenerate = $isAutoGenerate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
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
    public function getVideoPosterUrl(): ?string
    {
        return $this->videoPosterUrl;
    }

    /**
     * @param string $videoPosterUrl
     * @return self
     */
    public function setVideoPosterUrl(?string $videoPosterUrl): self
    {
        $this->videoPosterUrl = $videoPosterUrl;
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
        if ($this->awemeCarouselId !== null) {
            $result['aweme_carousel_id'] = $this->awemeCarouselId;
        }
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->carouselAudio !== null) {
            $result['carousel_audio'] = $this->carouselAudio;
        }
        if ($this->carouselDescription !== null) {
            $result['carousel_description'] = $this->carouselDescription;
        }
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->carouselImages !== null) {
            $result['carousel_images'] = $this->carouselImages;
        }
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->isAutoGenerate !== null) {
            $result['is_auto_generate'] = $this->isAutoGenerate;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoPosterUrl !== null) {
            $result['video_poster_url'] = $this->videoPosterUrl;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_carousel_id'] ?? null) !== null) {
            $obj->awemeCarouselId = (int) $v;
        }
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['carousel_audio'] ?? null) !== null && is_array($v)) {
            $obj->carouselAudio = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselAudio::fromArray($v);
        }
        if (($v = $data['carousel_description'] ?? null) !== null) {
            $obj->carouselDescription = (string) $v;
        }
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['carousel_images'] ?? null) !== null && is_array($v)) {
            $obj->carouselImages = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInnerCarouselImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['is_auto_generate'] ?? null) !== null) {
            $obj->isAutoGenerate = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_poster_url'] ?? null) !== null) {
            $obj->videoPosterUrl = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
