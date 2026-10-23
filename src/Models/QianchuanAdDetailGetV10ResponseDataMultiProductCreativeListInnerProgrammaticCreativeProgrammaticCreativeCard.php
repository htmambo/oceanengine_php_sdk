<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * @var string
     */
    protected ?string $promotionCardActionButton = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeCardPromotionCardButtonSmartOptimization
     */
    protected ?string $promotionCardButtonSmartOptimization = null;

    /**
     * @var int
     */
    protected ?int $promotionCardId = null;

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
     * @return int
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * @param int $componentId
     * @return self
     */
    public function setComponentId(?int $componentId): self
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCardActionButton(): ?string
    {
        return $this->promotionCardActionButton;
    }

    /**
     * @param string $promotionCardActionButton
     * @return self
     */
    public function setPromotionCardActionButton(?string $promotionCardActionButton): self
    {
        $this->promotionCardActionButton = $promotionCardActionButton;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeCardPromotionCardButtonSmartOptimization
     */
    public function getPromotionCardButtonSmartOptimization(): ?string
    {
        return $this->promotionCardButtonSmartOptimization;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeCardPromotionCardButtonSmartOptimization $promotionCardButtonSmartOptimization
     * @return self
     */
    public function setPromotionCardButtonSmartOptimization(?string $promotionCardButtonSmartOptimization): self
    {
        $this->promotionCardButtonSmartOptimization = $promotionCardButtonSmartOptimization;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionCardId(): ?int
    {
        return $this->promotionCardId;
    }

    /**
     * @param int $promotionCardId
     * @return self
     */
    public function setPromotionCardId(?int $promotionCardId): self
    {
        $this->promotionCardId = $promotionCardId;
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
        if ($this->componentId !== null) {
            $result['component_id'] = $this->componentId;
        }
        if ($this->promotionCardActionButton !== null) {
            $result['promotion_card_action_button'] = $this->promotionCardActionButton;
        }
        if ($this->promotionCardButtonSmartOptimization !== null) {
            $result['promotion_card_button_smart_optimization'] = $this->promotionCardButtonSmartOptimization;
        }
        if ($this->promotionCardId !== null) {
            $result['promotion_card_id'] = $this->promotionCardId;
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
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (int) $v;
        }
        if (($v = $data['promotion_card_action_button'] ?? null) !== null) {
            $obj->promotionCardActionButton = (string) $v;
        }
        if (($v = $data['promotion_card_button_smart_optimization'] ?? null) !== null) {
            $obj->promotionCardButtonSmartOptimization = (string) $v;
        }
        if (($v = $data['promotion_card_id'] ?? null) !== null) {
            $obj->promotionCardId = (int) $v;
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
