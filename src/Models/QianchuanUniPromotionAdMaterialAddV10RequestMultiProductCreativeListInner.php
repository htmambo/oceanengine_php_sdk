<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInner implements \JsonSerializable
{
    /**
     * 抖音号ID，多号场景必填
     * @var int
     */
    protected ?int $awemeUid = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerCarouselMaterialInner[]
     */
    protected ?array $carouselMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerImageMaterialInner[]
     */
    protected ?array $imageMaterial = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerTitleMaterialInner[]
     */
    protected ?array $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerVideoMaterialInner[]
     */
    protected ?array $videoMaterial = null;

    /**
     * 抖音号ID，多号场景必填
     * @return int
     */
    public function getAwemeUid(): ?int
    {
        return $this->awemeUid;
    }

    /**
     * 抖音号ID，多号场景必填
     * @param int $awemeUid
     * @return self
     */
    public function setAwemeUid(?int $awemeUid): self
    {
        $this->awemeUid = $awemeUid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerCarouselMaterialInner[]
     */
    public function getCarouselMaterial(): ?array
    {
        return $this->carouselMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerCarouselMaterialInner[] $carouselMaterial
     * @return self
     */
    public function setCarouselMaterial(?array $carouselMaterial): self
    {
        $this->carouselMaterial = $carouselMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerImageMaterialInner[]
     */
    public function getImageMaterial(): ?array
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerImageMaterialInner[] $imageMaterial
     * @return self
     */
    public function setImageMaterial(?array $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerTitleMaterialInner[]
     */
    public function getTitleMaterial(): ?array
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerTitleMaterialInner[] $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?array $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerVideoMaterialInner[]
     */
    public function getVideoMaterial(): ?array
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerVideoMaterialInner[] $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?array $videoMaterial): self
    {
        $this->videoMaterial = $videoMaterial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeUid !== null) {
            $result['aweme_uid'] = $this->awemeUid;
        }
        if ($this->carouselMaterial !== null) {
            $result['carousel_material'] = $this->carouselMaterial;
        }
        if ($this->imageMaterial !== null) {
            $result['image_material'] = $this->imageMaterial;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->titleMaterial !== null) {
            $result['title_material'] = $this->titleMaterial;
        }
        if ($this->videoMaterial !== null) {
            $result['video_material'] = $this->videoMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_uid'] ?? null) !== null) {
            $obj->awemeUid = (int) $v;
        }
        if (($v = $data['carousel_material'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerCarouselMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerImageMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerTitleMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10RequestMultiProductCreativeListInnerVideoMaterialInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
