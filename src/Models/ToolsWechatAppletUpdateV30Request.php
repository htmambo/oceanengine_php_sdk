<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsWechatAppletUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $discountRate = null;

    /**
     * @var string
     */
    protected ?string $guideText = null;

    /**
     * @var bool
     */
    protected ?bool $hasDiscount = null;

    /**
     * @var bool
     */
    protected ?bool $hasOnlineEarning = null;

    /**
     * @var string
     */
    protected ?string $headerImageUrl = null;

    /**
     * @var string
     */
    protected ?string $iconImageUrl = null;

    /**
     * @var string[]
     */
    protected ?array $imagesHorizontalUrl = null;

    /**
     * @var string[]
     */
    protected ?array $imagesVerticalUrl = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var string
     */
    protected ?string $introduction = null;

    /**
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30MaxPaymentTierRange
     */
    protected ?string $maxPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30MaxRechargeTier
     */
    protected ?string $maxRechargeTier = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30MembershipType
     */
    protected ?string $membershipType = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30MidPaymentTierRange
     */
    protected ?string $midPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30MinPaymentTierRange
     */
    protected ?string $minPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30MinRechargeTier
     */
    protected ?string $minRechargeTier = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30PaymentForm
     */
    protected ?string $paymentForm = null;

    /**
     * @var string
     */
    protected ?string $propName = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30RecommendedRechargeTier
     */
    protected ?string $recommendedRechargeTier = null;

    /**
     * @var string
     */
    protected ?string $remarkMessage = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30RevenueModel
     */
    protected ?string $revenueModel = null;

    /**
     * @var string
     */
    protected ?string $tagInfo = null;

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
     * @return string
     */
    public function getGuideText(): ?string
    {
        return $this->guideText;
    }

    /**
     * @param string $guideText
     * @return self
     */
    public function setGuideText(?string $guideText): self
    {
        $this->guideText = $guideText;
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
     * @return string
     */
    public function getHeaderImageUrl(): ?string
    {
        return $this->headerImageUrl;
    }

    /**
     * @param string $headerImageUrl
     * @return self
     */
    public function setHeaderImageUrl(?string $headerImageUrl): self
    {
        $this->headerImageUrl = $headerImageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIconImageUrl(): ?string
    {
        return $this->iconImageUrl;
    }

    /**
     * @param string $iconImageUrl
     * @return self
     */
    public function setIconImageUrl(?string $iconImageUrl): self
    {
        $this->iconImageUrl = $iconImageUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImagesHorizontalUrl(): ?array
    {
        return $this->imagesHorizontalUrl;
    }

    /**
     * @param string[] $imagesHorizontalUrl
     * @return self
     */
    public function setImagesHorizontalUrl(?array $imagesHorizontalUrl): self
    {
        $this->imagesHorizontalUrl = $imagesHorizontalUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImagesVerticalUrl(): ?array
    {
        return $this->imagesVerticalUrl;
    }

    /**
     * @param string[] $imagesVerticalUrl
     * @return self
     */
    public function setImagesVerticalUrl(?array $imagesVerticalUrl): self
    {
        $this->imagesVerticalUrl = $imagesVerticalUrl;
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
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30MaxPaymentTierRange
     */
    public function getMaxPaymentTierRange(): ?string
    {
        return $this->maxPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30MaxPaymentTierRange $maxPaymentTierRange
     * @return self
     */
    public function setMaxPaymentTierRange(?string $maxPaymentTierRange): self
    {
        $this->maxPaymentTierRange = $maxPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30MaxRechargeTier
     */
    public function getMaxRechargeTier(): ?string
    {
        return $this->maxRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30MaxRechargeTier $maxRechargeTier
     * @return self
     */
    public function setMaxRechargeTier(?string $maxRechargeTier): self
    {
        $this->maxRechargeTier = $maxRechargeTier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30MembershipType
     */
    public function getMembershipType(): ?string
    {
        return $this->membershipType;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30MembershipType $membershipType
     * @return self
     */
    public function setMembershipType(?string $membershipType): self
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30MidPaymentTierRange
     */
    public function getMidPaymentTierRange(): ?string
    {
        return $this->midPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30MidPaymentTierRange $midPaymentTierRange
     * @return self
     */
    public function setMidPaymentTierRange(?string $midPaymentTierRange): self
    {
        $this->midPaymentTierRange = $midPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30MinPaymentTierRange
     */
    public function getMinPaymentTierRange(): ?string
    {
        return $this->minPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30MinPaymentTierRange $minPaymentTierRange
     * @return self
     */
    public function setMinPaymentTierRange(?string $minPaymentTierRange): self
    {
        $this->minPaymentTierRange = $minPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30MinRechargeTier
     */
    public function getMinRechargeTier(): ?string
    {
        return $this->minRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30MinRechargeTier $minRechargeTier
     * @return self
     */
    public function setMinRechargeTier(?string $minRechargeTier): self
    {
        $this->minRechargeTier = $minRechargeTier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30PaymentForm
     */
    public function getPaymentForm(): ?string
    {
        return $this->paymentForm;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30PaymentForm $paymentForm
     * @return self
     */
    public function setPaymentForm(?string $paymentForm): self
    {
        $this->paymentForm = $paymentForm;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropName(): ?string
    {
        return $this->propName;
    }

    /**
     * @param string $propName
     * @return self
     */
    public function setPropName(?string $propName): self
    {
        $this->propName = $propName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30RecommendedRechargeTier
     */
    public function getRecommendedRechargeTier(): ?string
    {
        return $this->recommendedRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30RecommendedRechargeTier $recommendedRechargeTier
     * @return self
     */
    public function setRecommendedRechargeTier(?string $recommendedRechargeTier): self
    {
        $this->recommendedRechargeTier = $recommendedRechargeTier;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemarkMessage(): ?string
    {
        return $this->remarkMessage;
    }

    /**
     * @param string $remarkMessage
     * @return self
     */
    public function setRemarkMessage(?string $remarkMessage): self
    {
        $this->remarkMessage = $remarkMessage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30RevenueModel
     */
    public function getRevenueModel(): ?string
    {
        return $this->revenueModel;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30RevenueModel $revenueModel
     * @return self
     */
    public function setRevenueModel(?string $revenueModel): self
    {
        $this->revenueModel = $revenueModel;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->discountRate !== null) {
            $result['discount_rate'] = $this->discountRate;
        }
        if ($this->guideText !== null) {
            $result['guide_text'] = $this->guideText;
        }
        if ($this->hasDiscount !== null) {
            $result['has_discount'] = $this->hasDiscount;
        }
        if ($this->hasOnlineEarning !== null) {
            $result['has_online_earning'] = $this->hasOnlineEarning;
        }
        if ($this->headerImageUrl !== null) {
            $result['header_image_url'] = $this->headerImageUrl;
        }
        if ($this->iconImageUrl !== null) {
            $result['icon_image_url'] = $this->iconImageUrl;
        }
        if ($this->imagesHorizontalUrl !== null) {
            $result['images_horizontal_url'] = $this->imagesHorizontalUrl;
        }
        if ($this->imagesVerticalUrl !== null) {
            $result['images_vertical_url'] = $this->imagesVerticalUrl;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->introduction !== null) {
            $result['introduction'] = $this->introduction;
        }
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->maxPaymentTierRange !== null) {
            $result['max_payment_tier_range'] = $this->maxPaymentTierRange;
        }
        if ($this->maxRechargeTier !== null) {
            $result['max_recharge_tier'] = $this->maxRechargeTier;
        }
        if ($this->membershipType !== null) {
            $result['membership_type'] = $this->membershipType;
        }
        if ($this->midPaymentTierRange !== null) {
            $result['mid_payment_tier_range'] = $this->midPaymentTierRange;
        }
        if ($this->minPaymentTierRange !== null) {
            $result['min_payment_tier_range'] = $this->minPaymentTierRange;
        }
        if ($this->minRechargeTier !== null) {
            $result['min_recharge_tier'] = $this->minRechargeTier;
        }
        if ($this->paymentForm !== null) {
            $result['payment_form'] = $this->paymentForm;
        }
        if ($this->propName !== null) {
            $result['prop_name'] = $this->propName;
        }
        if ($this->recommendedRechargeTier !== null) {
            $result['recommended_recharge_tier'] = $this->recommendedRechargeTier;
        }
        if ($this->remarkMessage !== null) {
            $result['remark_message'] = $this->remarkMessage;
        }
        if ($this->revenueModel !== null) {
            $result['revenue_model'] = $this->revenueModel;
        }
        if ($this->tagInfo !== null) {
            $result['tag_info'] = $this->tagInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['discount_rate'] ?? null) !== null) {
            $obj->discountRate = (int) $v;
        }
        if (($v = $data['guide_text'] ?? null) !== null) {
            $obj->guideText = (string) $v;
        }
        if (($v = $data['has_discount'] ?? null) !== null) {
            $obj->hasDiscount = (bool) $v;
        }
        if (($v = $data['has_online_earning'] ?? null) !== null) {
            $obj->hasOnlineEarning = (bool) $v;
        }
        if (($v = $data['header_image_url'] ?? null) !== null) {
            $obj->headerImageUrl = (string) $v;
        }
        if (($v = $data['icon_image_url'] ?? null) !== null) {
            $obj->iconImageUrl = (string) $v;
        }
        if (($v = $data['images_horizontal_url'] ?? null) !== null && is_array($v)) {
            $obj->imagesHorizontalUrl = $v;
        }
        if (($v = $data['images_vertical_url'] ?? null) !== null && is_array($v)) {
            $obj->imagesVerticalUrl = $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['introduction'] ?? null) !== null) {
            $obj->introduction = (string) $v;
        }
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['max_payment_tier_range'] ?? null) !== null) {
            $obj->maxPaymentTierRange = (string) $v;
        }
        if (($v = $data['max_recharge_tier'] ?? null) !== null) {
            $obj->maxRechargeTier = (string) $v;
        }
        if (($v = $data['membership_type'] ?? null) !== null) {
            $obj->membershipType = (string) $v;
        }
        if (($v = $data['mid_payment_tier_range'] ?? null) !== null) {
            $obj->midPaymentTierRange = (string) $v;
        }
        if (($v = $data['min_payment_tier_range'] ?? null) !== null) {
            $obj->minPaymentTierRange = (string) $v;
        }
        if (($v = $data['min_recharge_tier'] ?? null) !== null) {
            $obj->minRechargeTier = (string) $v;
        }
        if (($v = $data['payment_form'] ?? null) !== null) {
            $obj->paymentForm = (string) $v;
        }
        if (($v = $data['prop_name'] ?? null) !== null) {
            $obj->propName = (string) $v;
        }
        if (($v = $data['recommended_recharge_tier'] ?? null) !== null) {
            $obj->recommendedRechargeTier = (string) $v;
        }
        if (($v = $data['remark_message'] ?? null) !== null) {
            $obj->remarkMessage = (string) $v;
        }
        if (($v = $data['revenue_model'] ?? null) !== null) {
            $obj->revenueModel = (string) $v;
        }
        if (($v = $data['tag_info'] ?? null) !== null) {
            $obj->tagInfo = (string) $v;
        }
        return $obj;
    }
}
