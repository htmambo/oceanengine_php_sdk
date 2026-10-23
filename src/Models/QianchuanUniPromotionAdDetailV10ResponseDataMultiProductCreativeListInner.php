<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInner implements \JsonSerializable
{
    /**
     * 抖音号ID
     * @var int
     */
    protected ?int $awemeUid = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerBlockMaterialInner[]
     */
    protected ?array $blockMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCarouselMaterialInner[]
     */
    protected ?array $carouselMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCreativeCard
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCreativeCard $creativeCard = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType
     */
    protected ?string $creativeType = null;

    /**
     * @var bool
     */
    protected ?bool $hideInAweme = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerImageMaterialInner[]
     */
    protected ?array $imageMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerProductChannel
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerProductChannel $productChannel = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInner[]
     */
    protected ?array $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerVideoMaterialInner[]
     */
    protected ?array $videoMaterial = null;

    /**
     * 抖音号ID
     * @return int
     */
    public function getAwemeUid(): ?int
    {
        return $this->awemeUid;
    }

    /**
     * 抖音号ID
     * @param int $awemeUid
     * @return self
     */
    public function setAwemeUid(?int $awemeUid): self
    {
        $this->awemeUid = $awemeUid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerBlockMaterialInner[]
     */
    public function getBlockMaterial(): ?array
    {
        return $this->blockMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerBlockMaterialInner[] $blockMaterial
     * @return self
     */
    public function setBlockMaterial(?array $blockMaterial): self
    {
        $this->blockMaterial = $blockMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCarouselMaterialInner[]
     */
    public function getCarouselMaterial(): ?array
    {
        return $this->carouselMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCarouselMaterialInner[] $carouselMaterial
     * @return self
     */
    public function setCarouselMaterial(?array $carouselMaterial): self
    {
        $this->carouselMaterial = $carouselMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCreativeCard
     */
    public function getCreativeCard(): ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCreativeCard
    {
        return $this->creativeCard;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCreativeCard $creativeCard
     * @return self
     */
    public function setCreativeCard(?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCreativeCard $creativeCard): self
    {
        $this->creativeCard = $creativeCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType
     */
    public function getCreativeType(): ?string
    {
        return $this->creativeType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType $creativeType
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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerImageMaterialInner[]
     */
    public function getImageMaterial(): ?array
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerImageMaterialInner[] $imageMaterial
     * @return self
     */
    public function setImageMaterial(?array $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerProductChannel
     */
    public function getProductChannel(): ?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerProductChannel
    {
        return $this->productChannel;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerProductChannel $productChannel
     * @return self
     */
    public function setProductChannel(?\Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerProductChannel $productChannel): self
    {
        $this->productChannel = $productChannel;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInner[]
     */
    public function getTitleMaterial(): ?array
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInner[] $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?array $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerVideoMaterialInner[]
     */
    public function getVideoMaterial(): ?array
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerVideoMaterialInner[] $videoMaterial
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
        if ($this->blockMaterial !== null) {
            $result['block_material'] = $this->blockMaterial;
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
        if ($this->productChannel !== null) {
            $result['product_channel'] = $this->productChannel;
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
        if (($v = $data['block_material'] ?? null) !== null && is_array($v)) {
            $obj->blockMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerBlockMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['carousel_material'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCarouselMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_card'] ?? null) !== null && is_array($v)) {
            $obj->creativeCard = \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerCreativeCard::fromArray($v);
        }
        if (($v = $data['creative_type'] ?? null) !== null) {
            $obj->creativeType = (string) $v;
        }
        if (($v = $data['hide_in_aweme'] ?? null) !== null) {
            $obj->hideInAweme = (bool) $v;
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerImageMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['product_channel'] ?? null) !== null && is_array($v)) {
            $obj->productChannel = \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerProductChannel::fromArray($v);
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerVideoMaterialInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
