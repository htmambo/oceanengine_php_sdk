<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10RequestCreativeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerCarouselMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerCarouselMaterial $carouselMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerImageMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerImageMaterial $imageMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10CreativeListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerPromotionCardMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerPromotionCardMaterial $promotionCardMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerTitleMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerCarouselMaterial
     */
    public function getCarouselMaterial(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerCarouselMaterial
    {
        return $this->carouselMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerCarouselMaterial $carouselMaterial
     * @return self
     */
    public function setCarouselMaterial(?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerCarouselMaterial $carouselMaterial): self
    {
        $this->carouselMaterial = $carouselMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerImageMaterial
     */
    public function getImageMaterial(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerImageMaterial
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerImageMaterial $imageMaterial
     * @return self
     */
    public function setImageMaterial(?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerImageMaterial $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10CreativeListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10CreativeListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerPromotionCardMaterial
     */
    public function getPromotionCardMaterial(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerPromotionCardMaterial
    {
        return $this->promotionCardMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerPromotionCardMaterial $promotionCardMaterial
     * @return self
     */
    public function setPromotionCardMaterial(?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerPromotionCardMaterial $promotionCardMaterial): self
    {
        $this->promotionCardMaterial = $promotionCardMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerVideoMaterial $videoMaterial): self
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
        if ($this->carouselMaterial !== null) {
            $result['carousel_material'] = $this->carouselMaterial;
        }
        if ($this->imageMaterial !== null) {
            $result['image_material'] = $this->imageMaterial;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->promotionCardMaterial !== null) {
            $result['promotion_card_material'] = $this->promotionCardMaterial;
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
        if (($v = $data['carousel_material'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterial = \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerCarouselMaterial::fromArray($v);
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerImageMaterial::fromArray($v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['promotion_card_material'] ?? null) !== null && is_array($v)) {
            $obj->promotionCardMaterial = \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerPromotionCardMaterial::fromArray($v);
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
