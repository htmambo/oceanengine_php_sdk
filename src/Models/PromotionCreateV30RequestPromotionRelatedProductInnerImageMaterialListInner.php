<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestPromotionRelatedProductInnerImageMaterialListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionRelatedProductInnerImageMaterialListInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionRelatedProductInnerImageMaterialListInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionRelatedProductInnerImageMaterialListInnerImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionRelatedProductInnerImageMaterialListInnerImagesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
