<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMicroGameUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameUpdateV30AgeLimit
     */
    protected ?string $ageLimit = null;

    /**
     * @var string
     */
    protected ?string $artStyle = null;

    /**
     * @var int
     */
    protected ?int $discountRate = null;

    /**
     * @var string[]
     */
    protected ?array $featureTags = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameUpdateV30RequestGameLinkInner[]
     */
    protected ?array $gameLink = null;

    /**
     * @var bool
     */
    protected ?bool $hasDiscount = null;

    /**
     * @var bool
     */
    protected ?bool $hasOnlineEarning = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var string
     */
    protected ?string $introduction = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameUpdateV30MaxPaymentTierRange
     */
    protected ?string $maxPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameUpdateV30MidPaymentTierRange
     */
    protected ?string $midPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameUpdateV30MinPaymentTierRange
     */
    protected ?string $minPaymentTierRange = null;

    /**
     * @var string[]
     */
    protected ?array $networkEnvironment = null;

    /**
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameUpdateV30RevenueModel
     */
    protected ?string $revenueModel = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameUpdateV30ScheduleCards[]
     */
    protected ?array $scheduleCards = null;

    /**
     * @var string
     */
    protected ?string $tagInfo = null;

    /**
     * @var string
     */
    protected ?string $themeTag = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameUpdateV30AgeLimit
     */
    public function getAgeLimit(): ?string
    {
        return $this->ageLimit;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameUpdateV30AgeLimit $ageLimit
     * @return self
     */
    public function setAgeLimit(?string $ageLimit): self
    {
        $this->ageLimit = $ageLimit;
        return $this;
    }

    /**
     * @return string
     */
    public function getArtStyle(): ?string
    {
        return $this->artStyle;
    }

    /**
     * @param string $artStyle
     * @return self
     */
    public function setArtStyle(?string $artStyle): self
    {
        $this->artStyle = $artStyle;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscountRate(): ?int
    {
        return $this->discountRate;
    }

    /**
     * @param int $discountRate
     * @return self
     */
    public function setDiscountRate(?int $discountRate): self
    {
        $this->discountRate = $discountRate;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getFeatureTags(): ?array
    {
        return $this->featureTags;
    }

    /**
     * @param string[] $featureTags
     * @return self
     */
    public function setFeatureTags(?array $featureTags): self
    {
        $this->featureTags = $featureTags;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameUpdateV30RequestGameLinkInner[]
     */
    public function getGameLink(): ?array
    {
        return $this->gameLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameUpdateV30RequestGameLinkInner[] $gameLink
     * @return self
     */
    public function setGameLink(?array $gameLink): self
    {
        $this->gameLink = $gameLink;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasDiscount(): ?bool
    {
        return $this->hasDiscount;
    }

    /**
     * @param bool $hasDiscount
     * @return self
     */
    public function setHasDiscount(?bool $hasDiscount): self
    {
        $this->hasDiscount = $hasDiscount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasOnlineEarning(): ?bool
    {
        return $this->hasOnlineEarning;
    }

    /**
     * @param bool $hasOnlineEarning
     * @return self
     */
    public function setHasOnlineEarning(?bool $hasOnlineEarning): self
    {
        $this->hasOnlineEarning = $hasOnlineEarning;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    /**
     * @param string $introduction
     * @return self
     */
    public function setIntroduction(?string $introduction): self
    {
        $this->introduction = $introduction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameUpdateV30MaxPaymentTierRange
     */
    public function getMaxPaymentTierRange(): ?string
    {
        return $this->maxPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameUpdateV30MaxPaymentTierRange $maxPaymentTierRange
     * @return self
     */
    public function setMaxPaymentTierRange(?string $maxPaymentTierRange): self
    {
        $this->maxPaymentTierRange = $maxPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameUpdateV30MidPaymentTierRange
     */
    public function getMidPaymentTierRange(): ?string
    {
        return $this->midPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameUpdateV30MidPaymentTierRange $midPaymentTierRange
     * @return self
     */
    public function setMidPaymentTierRange(?string $midPaymentTierRange): self
    {
        $this->midPaymentTierRange = $midPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameUpdateV30MinPaymentTierRange
     */
    public function getMinPaymentTierRange(): ?string
    {
        return $this->minPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameUpdateV30MinPaymentTierRange $minPaymentTierRange
     * @return self
     */
    public function setMinPaymentTierRange(?string $minPaymentTierRange): self
    {
        $this->minPaymentTierRange = $minPaymentTierRange;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNetworkEnvironment(): ?array
    {
        return $this->networkEnvironment;
    }

    /**
     * @param string[] $networkEnvironment
     * @return self
     */
    public function setNetworkEnvironment(?array $networkEnvironment): self
    {
        $this->networkEnvironment = $networkEnvironment;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameUpdateV30RevenueModel
     */
    public function getRevenueModel(): ?string
    {
        return $this->revenueModel;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameUpdateV30RevenueModel $revenueModel
     * @return self
     */
    public function setRevenueModel(?string $revenueModel): self
    {
        $this->revenueModel = $revenueModel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameUpdateV30ScheduleCards[]
     */
    public function getScheduleCards(): ?array
    {
        return $this->scheduleCards;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameUpdateV30ScheduleCards[] $scheduleCards
     * @return self
     */
    public function setScheduleCards(?array $scheduleCards): self
    {
        $this->scheduleCards = $scheduleCards;
        return $this;
    }

    /**
     * @return string
     */
    public function getTagInfo(): ?string
    {
        return $this->tagInfo;
    }

    /**
     * @param string $tagInfo
     * @return self
     */
    public function setTagInfo(?string $tagInfo): self
    {
        $this->tagInfo = $tagInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getThemeTag(): ?string
    {
        return $this->themeTag;
    }

    /**
     * @param string $themeTag
     * @return self
     */
    public function setThemeTag(?string $themeTag): self
    {
        $this->themeTag = $themeTag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->ageLimit !== null) {
            $result['age_limit'] = $this->ageLimit;
        }
        if ($this->artStyle !== null) {
            $result['art_style'] = $this->artStyle;
        }
        if ($this->discountRate !== null) {
            $result['discount_rate'] = $this->discountRate;
        }
        if ($this->featureTags !== null) {
            $result['feature_tags'] = $this->featureTags;
        }
        if ($this->gameLink !== null) {
            $result['game_link'] = $this->gameLink;
        }
        if ($this->hasDiscount !== null) {
            $result['has_discount'] = $this->hasDiscount;
        }
        if ($this->hasOnlineEarning !== null) {
            $result['has_online_earning'] = $this->hasOnlineEarning;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->introduction !== null) {
            $result['introduction'] = $this->introduction;
        }
        if ($this->maxPaymentTierRange !== null) {
            $result['max_payment_tier_range'] = $this->maxPaymentTierRange;
        }
        if ($this->midPaymentTierRange !== null) {
            $result['mid_payment_tier_range'] = $this->midPaymentTierRange;
        }
        if ($this->minPaymentTierRange !== null) {
            $result['min_payment_tier_range'] = $this->minPaymentTierRange;
        }
        if ($this->networkEnvironment !== null) {
            $result['network_environment'] = $this->networkEnvironment;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->revenueModel !== null) {
            $result['revenue_model'] = $this->revenueModel;
        }
        if ($this->scheduleCards !== null) {
            $result['schedule_cards'] = $this->scheduleCards;
        }
        if ($this->tagInfo !== null) {
            $result['tag_info'] = $this->tagInfo;
        }
        if ($this->themeTag !== null) {
            $result['theme_tag'] = $this->themeTag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['age_limit'] ?? null) !== null) {
            $obj->ageLimit = (string) $v;
        }
        if (($v = $data['art_style'] ?? null) !== null) {
            $obj->artStyle = (string) $v;
        }
        if (($v = $data['discount_rate'] ?? null) !== null) {
            $obj->discountRate = (int) $v;
        }
        if (($v = $data['feature_tags'] ?? null) !== null && is_array($v)) {
            $obj->featureTags = $v;
        }
        if (($v = $data['game_link'] ?? null) !== null && is_array($v)) {
            $obj->gameLink = array_map(fn ($vv) => \Oceanengine\Models\ToolsMicroGameUpdateV30RequestGameLinkInner::fromArray($vv), $v);
        }
        if (($v = $data['has_discount'] ?? null) !== null) {
            $obj->hasDiscount = (bool) $v;
        }
        if (($v = $data['has_online_earning'] ?? null) !== null) {
            $obj->hasOnlineEarning = (bool) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['introduction'] ?? null) !== null) {
            $obj->introduction = (string) $v;
        }
        if (($v = $data['max_payment_tier_range'] ?? null) !== null) {
            $obj->maxPaymentTierRange = (string) $v;
        }
        if (($v = $data['mid_payment_tier_range'] ?? null) !== null) {
            $obj->midPaymentTierRange = (string) $v;
        }
        if (($v = $data['min_payment_tier_range'] ?? null) !== null) {
            $obj->minPaymentTierRange = (string) $v;
        }
        if (($v = $data['network_environment'] ?? null) !== null && is_array($v)) {
            $obj->networkEnvironment = $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['revenue_model'] ?? null) !== null) {
            $obj->revenueModel = (string) $v;
        }
        if (($v = $data['schedule_cards'] ?? null) !== null && is_array($v)) {
            $obj->scheduleCards = $v;
        }
        if (($v = $data['tag_info'] ?? null) !== null) {
            $obj->tagInfo = (string) $v;
        }
        if (($v = $data['theme_tag'] ?? null) !== null) {
            $obj->themeTag = (string) $v;
        }
        return $obj;
    }
}
