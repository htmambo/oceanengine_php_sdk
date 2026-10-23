<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestPromotionMaterialsCarouselMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $carouselId = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * @return string
     */
    public function getCarouselId(): ?string
    {
        return $this->carouselId;
    }

    /**
     * @param string $carouselId
     * @return self
     */
    public function setCarouselId(?string $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility $videoHpVisibility
     * @return self
     */
    public function setVideoHpVisibility(?string $videoHpVisibility): self
    {
        $this->videoHpVisibility = $videoHpVisibility;
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
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->videoHpVisibility !== null) {
            $result['video_hp_visibility'] = $this->videoHpVisibility;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        return $obj;
    }
}
