<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionUpdateV30RequestNativeSetting implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionUpdateV30NativeSettingAnchorRelatedType
     */
    protected ?string $anchorRelatedType = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30NativeSettingIsFeedAndFavSee
     */
    protected ?string $isFeedAndFavSee = null;

    /**
     * @return \Oceanengine\Models\PromotionUpdateV30NativeSettingAnchorRelatedType
     */
    public function getAnchorRelatedType(): ?string
    {
        return $this->anchorRelatedType;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30NativeSettingAnchorRelatedType $anchorRelatedType
     * @return self
     */
    public function setAnchorRelatedType(?string $anchorRelatedType): self
    {
        $this->anchorRelatedType = $anchorRelatedType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionUpdateV30NativeSettingIsFeedAndFavSee
     */
    public function getIsFeedAndFavSee(): ?string
    {
        return $this->isFeedAndFavSee;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30NativeSettingIsFeedAndFavSee $isFeedAndFavSee
     * @return self
     */
    public function setIsFeedAndFavSee(?string $isFeedAndFavSee): self
    {
        $this->isFeedAndFavSee = $isFeedAndFavSee;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorRelatedType !== null) {
            $result['anchor_related_type'] = $this->anchorRelatedType;
        }
        if ($this->isFeedAndFavSee !== null) {
            $result['is_feed_and_fav_see'] = $this->isFeedAndFavSee;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_related_type'] ?? null) !== null) {
            $obj->anchorRelatedType = (string) $v;
        }
        if (($v = $data['is_feed_and_fav_see'] ?? null) !== null) {
            $obj->isFeedAndFavSee = (string) $v;
        }
        return $obj;
    }
}
