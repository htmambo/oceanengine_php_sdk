<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGamePromotionEvent implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $promotionDate = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType
     */
    protected ?string $promotionType = null;

    /**
     * @return string
     */
    public function getPromotionDate(): ?string
    {
        return $this->promotionDate;
    }

    /**
     * @param string $promotionDate
     * @return self
     */
    public function setPromotionDate(?string $promotionDate): self
    {
        $this->promotionDate = $promotionDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType
     */
    public function getPromotionType(): ?string
    {
        return $this->promotionType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType $promotionType
     * @return self
     */
    public function setPromotionType(?string $promotionType): self
    {
        $this->promotionType = $promotionType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->promotionDate !== null) {
            $result['promotion_date'] = $this->promotionDate;
        }
        if ($this->promotionType !== null) {
            $result['promotion_type'] = $this->promotionType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['promotion_date'] ?? null) !== null) {
            $obj->promotionDate = (string) $v;
        }
        if (($v = $data['promotion_type'] ?? null) !== null) {
            $obj->promotionType = (string) $v;
        }
        return $obj;
    }
}
