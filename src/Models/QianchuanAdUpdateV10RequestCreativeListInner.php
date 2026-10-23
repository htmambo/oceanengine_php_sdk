<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10RequestCreativeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerCarouselMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerCarouselMaterial $carouselMaterial = null;

    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerImageMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerImageMaterial $imageMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10CreativeListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerPromotionCardMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerPromotionCardMaterial $promotionCardMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerCarouselMaterial
     */
    public function getCarouselMaterial(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerCarouselMaterial
    {
        return $this->carouselMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerCarouselMaterial $carouselMaterial
     * @return self
     */
    public function setCarouselMaterial(?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerCarouselMaterial $carouselMaterial): self
    {
        $this->carouselMaterial = $carouselMaterial;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerImageMaterial
     */
    public function getImageMaterial(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerImageMaterial
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerImageMaterial $imageMaterial
     * @return self
     */
    public function setImageMaterial(?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerImageMaterial $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10CreativeListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10CreativeListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerPromotionCardMaterial
     */
    public function getPromotionCardMaterial(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerPromotionCardMaterial
    {
        return $this->promotionCardMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerPromotionCardMaterial $promotionCardMaterial
     * @return self
     */
    public function setPromotionCardMaterial(?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerPromotionCardMaterial $promotionCardMaterial): self
    {
        $this->promotionCardMaterial = $promotionCardMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerVideoMaterial $videoMaterial): self
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
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
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
            $obj->carouselMaterial = \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerCarouselMaterial::fromArray($v);
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerImageMaterial::fromArray($v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['promotion_card_material'] ?? null) !== null && is_array($v)) {
            $obj->promotionCardMaterial = \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerPromotionCardMaterial::fromArray($v);
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
