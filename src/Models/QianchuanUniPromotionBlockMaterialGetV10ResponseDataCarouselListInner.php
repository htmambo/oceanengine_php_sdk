<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var bool
     */
    protected ?bool $isPoorQuality = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerMetrics
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerMetrics $metrics = null;

    /**
     * @var string
     */
    protected ?string $musicId = null;

    /**
     * @var string
     */
    protected ?string $musicUrl = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var string
     */
    protected ?string $title = null;

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
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPoorQuality(): ?bool
    {
        return $this->isPoorQuality;
    }

    /**
     * @param bool $isPoorQuality
     * @return self
     */
    public function setIsPoorQuality(?bool $isPoorQuality): self
    {
        $this->isPoorQuality = $isPoorQuality;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerMetrics $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return string
     */
    public function getMusicId(): ?string
    {
        return $this->musicId;
    }

    /**
     * @param string $musicId
     * @return self
     */
    public function setMusicId(?string $musicId): self
    {
        $this->musicId = $musicId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMusicUrl(): ?string
    {
        return $this->musicUrl;
    }

    /**
     * @param string $musicUrl
     * @return self
     */
    public function setMusicUrl(?string $musicUrl): self
    {
        $this->musicUrl = $musicUrl;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->isPoorQuality !== null) {
            $result['is_poor_quality'] = $this->isPoorQuality;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        if ($this->musicId !== null) {
            $result['music_id'] = $this->musicId;
        }
        if ($this->musicUrl !== null) {
            $result['music_url'] = $this->musicUrl;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['is_poor_quality'] ?? null) !== null) {
            $obj->isPoorQuality = (bool) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10ResponseDataCarouselListInnerMetrics::fromArray($v);
        }
        if (($v = $data['music_id'] ?? null) !== null) {
            $obj->musicId = (string) $v;
        }
        if (($v = $data['music_url'] ?? null) !== null) {
            $obj->musicUrl = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
