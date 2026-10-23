<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerNativeSetting implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionListV30DataListNativeSettingAnchorRelatedType
     */
    protected ?string $anchorRelatedType = null;

    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var string[]
     */
    protected ?array $awemeIds = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListNativeSettingAwemeSettingType
     */
    protected ?string $awemeSettingType = null;

    /**
     * @var string[]
     */
    protected ?array $excludeAwemeIds = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListNativeSettingIsFeedAndFavSee
     */
    protected ?string $isFeedAndFavSee = null;

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListNativeSettingAnchorRelatedType
     */
    public function getAnchorRelatedType(): ?string
    {
        return $this->anchorRelatedType;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListNativeSettingAnchorRelatedType $anchorRelatedType
     * @return self
     */
    public function setAnchorRelatedType(?string $anchorRelatedType): self
    {
        $this->anchorRelatedType = $anchorRelatedType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAwemeIds(): ?array
    {
        return $this->awemeIds;
    }

    /**
     * @param string[] $awemeIds
     * @return self
     */
    public function setAwemeIds(?array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListNativeSettingAwemeSettingType
     */
    public function getAwemeSettingType(): ?string
    {
        return $this->awemeSettingType;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListNativeSettingAwemeSettingType $awemeSettingType
     * @return self
     */
    public function setAwemeSettingType(?string $awemeSettingType): self
    {
        $this->awemeSettingType = $awemeSettingType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExcludeAwemeIds(): ?array
    {
        return $this->excludeAwemeIds;
    }

    /**
     * @param string[] $excludeAwemeIds
     * @return self
     */
    public function setExcludeAwemeIds(?array $excludeAwemeIds): self
    {
        $this->excludeAwemeIds = $excludeAwemeIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListNativeSettingIsFeedAndFavSee
     */
    public function getIsFeedAndFavSee(): ?string
    {
        return $this->isFeedAndFavSee;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListNativeSettingIsFeedAndFavSee $isFeedAndFavSee
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
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeIds !== null) {
            $result['aweme_ids'] = $this->awemeIds;
        }
        if ($this->awemeSettingType !== null) {
            $result['aweme_setting_type'] = $this->awemeSettingType;
        }
        if ($this->excludeAwemeIds !== null) {
            $result['exclude_aweme_ids'] = $this->excludeAwemeIds;
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
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeIds = $v;
        }
        if (($v = $data['aweme_setting_type'] ?? null) !== null) {
            $obj->awemeSettingType = (string) $v;
        }
        if (($v = $data['exclude_aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->excludeAwemeIds = $v;
        }
        if (($v = $data['is_feed_and_fav_see'] ?? null) !== null) {
            $obj->isFeedAndFavSee = (string) $v;
        }
        return $obj;
    }
}
