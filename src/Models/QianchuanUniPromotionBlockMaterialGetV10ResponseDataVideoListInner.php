<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionBlockMaterialGetV10ResponseDataVideoListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var bool
     */
    protected ?bool $isCarryMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isFirstPublishMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isHighQualityMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isInefficientMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isLowQualityMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isSimilarMaterial = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @var string
     */
    protected ?string $videoCoverUrl = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var int
     */
    protected ?int $width = null;

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
     * @return bool
     */
    public function getIsCarryMaterial(): ?bool
    {
        return $this->isCarryMaterial;
    }

    /**
     * @param bool $isCarryMaterial
     * @return self
     */
    public function setIsCarryMaterial(?bool $isCarryMaterial): self
    {
        $this->isCarryMaterial = $isCarryMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFirstPublishMaterial(): ?bool
    {
        return $this->isFirstPublishMaterial;
    }

    /**
     * @param bool $isFirstPublishMaterial
     * @return self
     */
    public function setIsFirstPublishMaterial(?bool $isFirstPublishMaterial): self
    {
        $this->isFirstPublishMaterial = $isFirstPublishMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsHighQualityMaterial(): ?bool
    {
        return $this->isHighQualityMaterial;
    }

    /**
     * @param bool $isHighQualityMaterial
     * @return self
     */
    public function setIsHighQualityMaterial(?bool $isHighQualityMaterial): self
    {
        $this->isHighQualityMaterial = $isHighQualityMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInefficientMaterial(): ?bool
    {
        return $this->isInefficientMaterial;
    }

    /**
     * @param bool $isInefficientMaterial
     * @return self
     */
    public function setIsInefficientMaterial(?bool $isInefficientMaterial): self
    {
        $this->isInefficientMaterial = $isInefficientMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsLowQualityMaterial(): ?bool
    {
        return $this->isLowQualityMaterial;
    }

    /**
     * @param bool $isLowQualityMaterial
     * @return self
     */
    public function setIsLowQualityMaterial(?bool $isLowQualityMaterial): self
    {
        $this->isLowQualityMaterial = $isLowQualityMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSimilarMaterial(): ?bool
    {
        return $this->isSimilarMaterial;
    }

    /**
     * @param bool $isSimilarMaterial
     * @return self
     */
    public function setIsSimilarMaterial(?bool $isSimilarMaterial): self
    {
        $this->isSimilarMaterial = $isSimilarMaterial;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
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
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverUrl(): ?string
    {
        return $this->videoCoverUrl;
    }

    /**
     * @param string $videoCoverUrl
     * @return self
     */
    public function setVideoCoverUrl(?string $videoCoverUrl): self
    {
        $this->videoCoverUrl = $videoCoverUrl;
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
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->isCarryMaterial !== null) {
            $result['is_carry_material'] = $this->isCarryMaterial;
        }
        if ($this->isFirstPublishMaterial !== null) {
            $result['is_first_publish_material'] = $this->isFirstPublishMaterial;
        }
        if ($this->isHighQualityMaterial !== null) {
            $result['is_high_quality_material'] = $this->isHighQualityMaterial;
        }
        if ($this->isInefficientMaterial !== null) {
            $result['is_inefficient_material'] = $this->isInefficientMaterial;
        }
        if ($this->isLowQualityMaterial !== null) {
            $result['is_low_quality_material'] = $this->isLowQualityMaterial;
        }
        if ($this->isSimilarMaterial !== null) {
            $result['is_similar_material'] = $this->isSimilarMaterial;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->videoCoverUrl !== null) {
            $result['video_cover_url'] = $this->videoCoverUrl;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['is_carry_material'] ?? null) !== null) {
            $obj->isCarryMaterial = (bool) $v;
        }
        if (($v = $data['is_first_publish_material'] ?? null) !== null) {
            $obj->isFirstPublishMaterial = (bool) $v;
        }
        if (($v = $data['is_high_quality_material'] ?? null) !== null) {
            $obj->isHighQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_inefficient_material'] ?? null) !== null) {
            $obj->isInefficientMaterial = (bool) $v;
        }
        if (($v = $data['is_low_quality_material'] ?? null) !== null) {
            $obj->isLowQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_similar_material'] ?? null) !== null) {
            $obj->isSimilarMaterial = (bool) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['video_cover_url'] ?? null) !== null) {
            $obj->videoCoverUrl = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
