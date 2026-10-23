<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAlbumStatusGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaAlbumStatusGetV30DataCanNotPromotionReason
     */
    protected ?string $canNotPromotionReason = null;

    /**
     * 是否可投
     * @var bool
     */
    protected ?bool $canPromotion = null;

    /**
     * @return \Oceanengine\Models\DpaAlbumStatusGetV30DataCanNotPromotionReason
     */
    public function getCanNotPromotionReason(): ?string
    {
        return $this->canNotPromotionReason;
    }

    /**
     * @param \Oceanengine\Models\DpaAlbumStatusGetV30DataCanNotPromotionReason $canNotPromotionReason
     * @return self
     */
    public function setCanNotPromotionReason(?string $canNotPromotionReason): self
    {
        $this->canNotPromotionReason = $canNotPromotionReason;
        return $this;
    }

    /**
     * 是否可投
     * @return bool
     */
    public function getCanPromotion(): ?bool
    {
        return $this->canPromotion;
    }

    /**
     * 是否可投
     * @param bool $canPromotion
     * @return self
     */
    public function setCanPromotion(?bool $canPromotion): self
    {
        $this->canPromotion = $canPromotion;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canNotPromotionReason !== null) {
            $result['can_not_promotion_reason'] = $this->canNotPromotionReason;
        }
        if ($this->canPromotion !== null) {
            $result['can_promotion'] = $this->canPromotion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_not_promotion_reason'] ?? null) !== null) {
            $obj->canNotPromotionReason = (string) $v;
        }
        if (($v = $data['can_promotion'] ?? null) !== null) {
            $obj->canPromotion = (bool) $v;
        }
        return $obj;
    }
}
