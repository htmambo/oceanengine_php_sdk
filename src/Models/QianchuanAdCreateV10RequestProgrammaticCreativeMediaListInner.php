<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10RequestProgrammaticCreativeMediaListInner implements \JsonSerializable
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
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

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
     * @return \Oceanengine\Models\QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10ProgrammaticCreativeMediaListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
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
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
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
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
