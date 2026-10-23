<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMicroAppCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30RequestAppPage
     */
    protected ?\Oceanengine\Models\ToolsMicroAppCreateV30RequestAppPage $appPage = null;

    /**
     * @var int
     */
    protected ?int $discountRate = null;

    /**
     * @var bool
     */
    protected ?bool $hasDiscount = null;

    /**
     * @var bool
     */
    protected ?bool $hasOnlineEarning = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30MaxPaymentTierRange
     */
    protected ?string $maxPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30MaxRechargeTier
     */
    protected ?string $maxRechargeTier = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30MembershipType
     */
    protected ?string $membershipType = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30MidPaymentTierRange
     */
    protected ?string $midPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30MinPaymentTierRange
     */
    protected ?string $minPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30MinRechargeTier
     */
    protected ?string $minRechargeTier = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30PaymentForm
     */
    protected ?string $paymentForm = null;

    /**
     * @var string
     */
    protected ?string $propName = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30RecommendedRechargeTier
     */
    protected ?string $recommendedRechargeTier = null;

    /**
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroAppCreateV30RevenueModel
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
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30RequestAppPage
     */
    public function getAppPage(): ?\Oceanengine\Models\ToolsMicroAppCreateV30RequestAppPage
    {
        return $this->appPage;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30RequestAppPage $appPage
     * @return self
     */
    public function setAppPage(?\Oceanengine\Models\ToolsMicroAppCreateV30RequestAppPage $appPage): self
    {
        $this->appPage = $appPage;
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
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30MaxPaymentTierRange
     */
    public function getMaxPaymentTierRange(): ?string
    {
        return $this->maxPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30MaxPaymentTierRange $maxPaymentTierRange
     * @return self
     */
    public function setMaxPaymentTierRange(?string $maxPaymentTierRange): self
    {
        $this->maxPaymentTierRange = $maxPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30MaxRechargeTier
     */
    public function getMaxRechargeTier(): ?string
    {
        return $this->maxRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30MaxRechargeTier $maxRechargeTier
     * @return self
     */
    public function setMaxRechargeTier(?string $maxRechargeTier): self
    {
        $this->maxRechargeTier = $maxRechargeTier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30MembershipType
     */
    public function getMembershipType(): ?string
    {
        return $this->membershipType;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30MembershipType $membershipType
     * @return self
     */
    public function setMembershipType(?string $membershipType): self
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30MidPaymentTierRange
     */
    public function getMidPaymentTierRange(): ?string
    {
        return $this->midPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30MidPaymentTierRange $midPaymentTierRange
     * @return self
     */
    public function setMidPaymentTierRange(?string $midPaymentTierRange): self
    {
        $this->midPaymentTierRange = $midPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30MinPaymentTierRange
     */
    public function getMinPaymentTierRange(): ?string
    {
        return $this->minPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30MinPaymentTierRange $minPaymentTierRange
     * @return self
     */
    public function setMinPaymentTierRange(?string $minPaymentTierRange): self
    {
        $this->minPaymentTierRange = $minPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30MinRechargeTier
     */
    public function getMinRechargeTier(): ?string
    {
        return $this->minRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30MinRechargeTier $minRechargeTier
     * @return self
     */
    public function setMinRechargeTier(?string $minRechargeTier): self
    {
        $this->minRechargeTier = $minRechargeTier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30PaymentForm
     */
    public function getPaymentForm(): ?string
    {
        return $this->paymentForm;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30PaymentForm $paymentForm
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
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30RecommendedRechargeTier
     */
    public function getRecommendedRechargeTier(): ?string
    {
        return $this->recommendedRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30RecommendedRechargeTier $recommendedRechargeTier
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
     * @return \Oceanengine\Models\ToolsMicroAppCreateV30RevenueModel
     */
    public function getRevenueModel(): ?string
    {
        return $this->revenueModel;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroAppCreateV30RevenueModel $revenueModel
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
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->appPage !== null) {
            $result['app_page'] = $this->appPage;
        }
        if ($this->discountRate !== null) {
            $result['discount_rate'] = $this->discountRate;
        }
        if ($this->hasDiscount !== null) {
            $result['has_discount'] = $this->hasDiscount;
        }
        if ($this->hasOnlineEarning !== null) {
            $result['has_online_earning'] = $this->hasOnlineEarning;
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
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
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
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['app_page'] ?? null) !== null && is_array($v)) {
            $obj->appPage = \Oceanengine\Models\ToolsMicroAppCreateV30RequestAppPage::fromArray($v);
        }
        if (($v = $data['discount_rate'] ?? null) !== null) {
            $obj->discountRate = (int) $v;
        }
        if (($v = $data['has_discount'] ?? null) !== null) {
            $obj->hasDiscount = (bool) $v;
        }
        if (($v = $data['has_online_earning'] ?? null) !== null) {
            $obj->hasOnlineEarning = (bool) $v;
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
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
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
