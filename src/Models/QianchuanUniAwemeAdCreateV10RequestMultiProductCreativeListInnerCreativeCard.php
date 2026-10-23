<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCreativeCard implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton
     */
    protected ?string $promotionCardActionButton = null;

    /**
     * @var bool
     */
    protected ?bool $promotionCardButtonSmartOptimization = null;

    /**
     * @var string
     */
    protected ?string $promotionCardImageId = null;

    /**
     * @var string[]
     */
    protected ?array $promotionCardSellingPoints = null;

    /**
     * @var string
     */
    protected ?string $promotionCardTitle = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton
     */
    public function getPromotionCardActionButton(): ?string
    {
        return $this->promotionCardActionButton;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdCreateV10MultiProductCreativeListCreativeCardPromotionCardActionButton $promotionCardActionButton
     * @return self
     */
    public function setPromotionCardActionButton(?string $promotionCardActionButton): self
    {
        $this->promotionCardActionButton = $promotionCardActionButton;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPromotionCardButtonSmartOptimization(): ?bool
    {
        return $this->promotionCardButtonSmartOptimization;
    }

    /**
     * @param bool $promotionCardButtonSmartOptimization
     * @return self
     */
    public function setPromotionCardButtonSmartOptimization(?bool $promotionCardButtonSmartOptimization): self
    {
        $this->promotionCardButtonSmartOptimization = $promotionCardButtonSmartOptimization;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCardImageId(): ?string
    {
        return $this->promotionCardImageId;
    }

    /**
     * @param string $promotionCardImageId
     * @return self
     */
    public function setPromotionCardImageId(?string $promotionCardImageId): self
    {
        $this->promotionCardImageId = $promotionCardImageId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPromotionCardSellingPoints(): ?array
    {
        return $this->promotionCardSellingPoints;
    }

    /**
     * @param string[] $promotionCardSellingPoints
     * @return self
     */
    public function setPromotionCardSellingPoints(?array $promotionCardSellingPoints): self
    {
        $this->promotionCardSellingPoints = $promotionCardSellingPoints;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCardTitle(): ?string
    {
        return $this->promotionCardTitle;
    }

    /**
     * @param string $promotionCardTitle
     * @return self
     */
    public function setPromotionCardTitle(?string $promotionCardTitle): self
    {
        $this->promotionCardTitle = $promotionCardTitle;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->promotionCardActionButton !== null) {
            $result['promotion_card_action_button'] = $this->promotionCardActionButton;
        }
        if ($this->promotionCardButtonSmartOptimization !== null) {
            $result['promotion_card_button_smart_optimization'] = $this->promotionCardButtonSmartOptimization;
        }
        if ($this->promotionCardImageId !== null) {
            $result['promotion_card_image_id'] = $this->promotionCardImageId;
        }
        if ($this->promotionCardSellingPoints !== null) {
            $result['promotion_card_selling_points'] = $this->promotionCardSellingPoints;
        }
        if ($this->promotionCardTitle !== null) {
            $result['promotion_card_title'] = $this->promotionCardTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['promotion_card_action_button'] ?? null) !== null) {
            $obj->promotionCardActionButton = (string) $v;
        }
        if (($v = $data['promotion_card_button_smart_optimization'] ?? null) !== null) {
            $obj->promotionCardButtonSmartOptimization = (bool) $v;
        }
        if (($v = $data['promotion_card_image_id'] ?? null) !== null) {
            $obj->promotionCardImageId = (string) $v;
        }
        if (($v = $data['promotion_card_selling_points'] ?? null) !== null && is_array($v)) {
            $obj->promotionCardSellingPoints = $v;
        }
        if (($v = $data['promotion_card_title'] ?? null) !== null) {
            $obj->promotionCardTitle = (string) $v;
        }
        return $obj;
    }
}
