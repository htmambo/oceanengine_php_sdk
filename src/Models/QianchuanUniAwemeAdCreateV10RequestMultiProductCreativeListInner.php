<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner[]
     */
    protected ?array $blockVideoMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner[]
     */
    protected ?array $carouselMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCreativeCard
     */
    protected ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCreativeCard $creativeCard = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeType
     */
    protected ?string $creativeType = null;

    /**
     * @var bool
     */
    protected ?bool $hideInAweme = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerImageMaterialInner[]
     */
    protected ?array $imageMaterial = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerTitleMaterialInner[]
     */
    protected ?array $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerVideoMaterialInner[]
     */
    protected ?array $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner[]
     */
    public function getBlockVideoMaterial(): ?array
    {
        return $this->blockVideoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner[] $blockVideoMaterial
     * @return self
     */
    public function setBlockVideoMaterial(?array $blockVideoMaterial): self
    {
        $this->blockVideoMaterial = $blockVideoMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner[]
     */
    public function getCarouselMaterial(): ?array
    {
        return $this->carouselMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner[] $carouselMaterial
     * @return self
     */
    public function setCarouselMaterial(?array $carouselMaterial): self
    {
        $this->carouselMaterial = $carouselMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCreativeCard
     */
    public function getCreativeCard(): ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCreativeCard
    {
        return $this->creativeCard;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCreativeCard $creativeCard
     * @return self
     */
    public function setCreativeCard(?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCreativeCard $creativeCard): self
    {
        $this->creativeCard = $creativeCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeType
     */
    public function getCreativeType(): ?string
    {
        return $this->creativeType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeType $creativeType
     * @return self
     */
    public function setCreativeType(?string $creativeType): self
    {
        $this->creativeType = $creativeType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHideInAweme(): ?bool
    {
        return $this->hideInAweme;
    }

    /**
     * @param bool $hideInAweme
     * @return self
     */
    public function setHideInAweme(?bool $hideInAweme): self
    {
        $this->hideInAweme = $hideInAweme;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerImageMaterialInner[]
     */
    public function getImageMaterial(): ?array
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerImageMaterialInner[] $imageMaterial
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
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerTitleMaterialInner[]
     */
    public function getTitleMaterial(): ?array
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerTitleMaterialInner[] $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?array $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerVideoMaterialInner[]
     */
    public function getVideoMaterial(): ?array
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerVideoMaterialInner[] $videoMaterial
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
        if ($this->blockVideoMaterial !== null) {
            $result['block_video_material'] = $this->blockVideoMaterial;
        }
        if ($this->carouselMaterial !== null) {
            $result['carousel_material'] = $this->carouselMaterial;
        }
        if ($this->creativeCard !== null) {
            $result['creative_card'] = $this->creativeCard;
        }
        if ($this->creativeType !== null) {
            $result['creative_type'] = $this->creativeType;
        }
        if ($this->hideInAweme !== null) {
            $result['hide_in_aweme'] = $this->hideInAweme;
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
        if (($v = $data['block_video_material'] ?? null) !== null && is_array($v)) {
            $obj->blockVideoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['carousel_material'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_card'] ?? null) !== null && is_array($v)) {
            $obj->creativeCard = \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCreativeCard::fromArray($v);
        }
        if (($v = $data['creative_type'] ?? null) !== null) {
            $obj->creativeType = (string) $v;
        }
        if (($v = $data['hide_in_aweme'] ?? null) !== null) {
            $obj->hideInAweme = (bool) $v;
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerImageMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerTitleMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerVideoMaterialInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
