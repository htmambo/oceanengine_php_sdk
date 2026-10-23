<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataCreativeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterial $carouselMaterial = null;

    /**
     * @var string
     */
    protected ?string $creativeCreateTime = null;

    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var string
     */
    protected ?string $creativeModifyTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerImageMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerImageMaterial $imageMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerPromotionCardMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerPromotionCardMaterial $promotionCardMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerTitleMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterial
     */
    public function getCarouselMaterial(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterial
    {
        return $this->carouselMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterial $carouselMaterial
     * @return self
     */
    public function setCarouselMaterial(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterial $carouselMaterial): self
    {
        $this->carouselMaterial = $carouselMaterial;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreativeCreateTime(): ?string
    {
        return $this->creativeCreateTime;
    }

    /**
     * @param string $creativeCreateTime
     * @return self
     */
    public function setCreativeCreateTime(?string $creativeCreateTime): self
    {
        $this->creativeCreateTime = $creativeCreateTime;
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
     * @return string
     */
    public function getCreativeModifyTime(): ?string
    {
        return $this->creativeModifyTime;
    }

    /**
     * @param string $creativeModifyTime
     * @return self
     */
    public function setCreativeModifyTime(?string $creativeModifyTime): self
    {
        $this->creativeModifyTime = $creativeModifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerImageMaterial
     */
    public function getImageMaterial(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerImageMaterial
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerImageMaterial $imageMaterial
     * @return self
     */
    public function setImageMaterial(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerImageMaterial $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerPromotionCardMaterial
     */
    public function getPromotionCardMaterial(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerPromotionCardMaterial
    {
        return $this->promotionCardMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerPromotionCardMaterial $promotionCardMaterial
     * @return self
     */
    public function setPromotionCardMaterial(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerPromotionCardMaterial $promotionCardMaterial): self
    {
        $this->promotionCardMaterial = $promotionCardMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerVideoMaterial $videoMaterial): self
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
        if ($this->creativeCreateTime !== null) {
            $result['creative_create_time'] = $this->creativeCreateTime;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->creativeModifyTime !== null) {
            $result['creative_modify_time'] = $this->creativeModifyTime;
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
            $obj->carouselMaterial = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerCarouselMaterial::fromArray($v);
        }
        if (($v = $data['creative_create_time'] ?? null) !== null) {
            $obj->creativeCreateTime = (string) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['creative_modify_time'] ?? null) !== null) {
            $obj->creativeModifyTime = (string) $v;
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerImageMaterial::fromArray($v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['promotion_card_material'] ?? null) !== null && is_array($v)) {
            $obj->promotionCardMaterial = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerPromotionCardMaterial::fromArray($v);
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
