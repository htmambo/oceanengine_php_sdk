<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeUid = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner[]
     */
    protected ?array $blockVideoMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner[]
     */
    protected ?array $carouselMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10MultiProductCreativeListCreativeType
     */
    protected ?string $creativeType = null;

    /**
     * @var bool
     */
    protected ?bool $hideInAweme = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerImageMaterialInner[]
     */
    protected ?array $imageMaterial = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerTitleMaterialInner[]
     */
    protected ?array $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerVideoMaterialInner[]
     */
    protected ?array $videoMaterial = null;

    /**
     * @return int
     */
    public function getAwemeUid(): ?int
    {
        return $this->awemeUid;
    }

    /**
     * @param int $awemeUid
     * @return self
     */
    public function setAwemeUid(?int $awemeUid): self
    {
        $this->awemeUid = $awemeUid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner[]
     */
    public function getBlockVideoMaterial(): ?array
    {
        return $this->blockVideoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner[] $blockVideoMaterial
     * @return self
     */
    public function setBlockVideoMaterial(?array $blockVideoMaterial): self
    {
        $this->blockVideoMaterial = $blockVideoMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner[]
     */
    public function getCarouselMaterial(): ?array
    {
        return $this->carouselMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner[] $carouselMaterial
     * @return self
     */
    public function setCarouselMaterial(?array $carouselMaterial): self
    {
        $this->carouselMaterial = $carouselMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10MultiProductCreativeListCreativeType
     */
    public function getCreativeType(): ?string
    {
        return $this->creativeType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10MultiProductCreativeListCreativeType $creativeType
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
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerImageMaterialInner[]
     */
    public function getImageMaterial(): ?array
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerImageMaterialInner[] $imageMaterial
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
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerTitleMaterialInner[]
     */
    public function getTitleMaterial(): ?array
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerTitleMaterialInner[] $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?array $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerVideoMaterialInner[]
     */
    public function getVideoMaterial(): ?array
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerVideoMaterialInner[] $videoMaterial
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
        if ($this->blockVideoMaterial !== null) {
            $result['block_video_material'] = $this->blockVideoMaterial;
        }
        if ($this->carouselMaterial !== null) {
            $result['carousel_material'] = $this->carouselMaterial;
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
        if (($v = $data['aweme_uid'] ?? null) !== null) {
            $obj->awemeUid = (int) $v;
        }
        if (($v = $data['block_video_material'] ?? null) !== null && is_array($v)) {
            $obj->blockVideoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['carousel_material'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_type'] ?? null) !== null) {
            $obj->creativeType = (string) $v;
        }
        if (($v = $data['hide_in_aweme'] ?? null) !== null) {
            $obj->hideInAweme = (bool) $v;
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerImageMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerTitleMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestMultiProductCreativeListInnerVideoMaterialInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
