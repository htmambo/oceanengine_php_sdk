<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementAndroidBasicPackageGetV2ResponseDataNextVersion implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var string
     */
    protected ?string $artStyle = null;

    /**
     * @var int
     */
    protected ?int $auditId = null;

    /**
     * @var string
     */
    protected ?string $auditMessage = null;

    /**
     * @var int
     */
    protected ?int $discountRate = null;

    /**
     * @var string[]
     */
    protected ?array $featureTags = null;

    /**
     * @var string
     */
    protected ?string $gameBoxName = null;

    /**
     * @var string
     */
    protected ?string $gameIpTag = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType[]
     */
    protected ?array $gameIpType = null;

    /**
     * @var bool
     */
    protected ?bool $hasDiscount = null;

    /**
     * @var bool
     */
    protected ?bool $hasOnlineEarning = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange
     */
    protected ?string $maxPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxRechargeTier
     */
    protected ?string $maxRechargeTier = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType
     */
    protected ?string $membershipType = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange
     */
    protected ?string $midPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange
     */
    protected ?string $minPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinRechargeTier
     */
    protected ?string $minRechargeTier = null;

    /**
     * @var string[]
     */
    protected ?array $networkEnvironment = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier
     */
    protected ?string $recommendedRechargeTier = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel
     */
    protected ?string $revenueModel = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards[]
     */
    protected ?array $scheduleCards = null;

    /**
     * @var string
     */
    protected ?string $spokesperson = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $themeTag = null;

    /**
     * @var string
     */
    protected ?string $versionCode = null;

    /**
     * @var string
     */
    protected ?string $versionId = null;

    /**
     * @var string
     */
    protected ?string $versionName = null;

    /**
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
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
    public function getAuditId(): ?int
    {
        return $this->auditId;
    }

    /**
     * @param int $auditId
     * @return self
     */
    public function setAuditId(?int $auditId): self
    {
        $this->auditId = $auditId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuditMessage(): ?string
    {
        return $this->auditMessage;
    }

    /**
     * @param string $auditMessage
     * @return self
     */
    public function setAuditMessage(?string $auditMessage): self
    {
        $this->auditMessage = $auditMessage;
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
     * @return string
     */
    public function getGameBoxName(): ?string
    {
        return $this->gameBoxName;
    }

    /**
     * @param string $gameBoxName
     * @return self
     */
    public function setGameBoxName(?string $gameBoxName): self
    {
        $this->gameBoxName = $gameBoxName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameIpTag(): ?string
    {
        return $this->gameIpTag;
    }

    /**
     * @param string $gameIpTag
     * @return self
     */
    public function setGameIpTag(?string $gameIpTag): self
    {
        $this->gameIpTag = $gameIpTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType[]
     */
    public function getGameIpType(): ?array
    {
        return $this->gameIpType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType[] $gameIpType
     * @return self
     */
    public function setGameIpType(?array $gameIpType): self
    {
        $this->gameIpType = $gameIpType;
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
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange
     */
    public function getMaxPaymentTierRange(): ?string
    {
        return $this->maxPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange $maxPaymentTierRange
     * @return self
     */
    public function setMaxPaymentTierRange(?string $maxPaymentTierRange): self
    {
        $this->maxPaymentTierRange = $maxPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxRechargeTier
     */
    public function getMaxRechargeTier(): ?string
    {
        return $this->maxRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxRechargeTier $maxRechargeTier
     * @return self
     */
    public function setMaxRechargeTier(?string $maxRechargeTier): self
    {
        $this->maxRechargeTier = $maxRechargeTier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType
     */
    public function getMembershipType(): ?string
    {
        return $this->membershipType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType $membershipType
     * @return self
     */
    public function setMembershipType(?string $membershipType): self
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange
     */
    public function getMidPaymentTierRange(): ?string
    {
        return $this->midPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange $midPaymentTierRange
     * @return self
     */
    public function setMidPaymentTierRange(?string $midPaymentTierRange): self
    {
        $this->midPaymentTierRange = $midPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange
     */
    public function getMinPaymentTierRange(): ?string
    {
        return $this->minPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange $minPaymentTierRange
     * @return self
     */
    public function setMinPaymentTierRange(?string $minPaymentTierRange): self
    {
        $this->minPaymentTierRange = $minPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinRechargeTier
     */
    public function getMinRechargeTier(): ?string
    {
        return $this->minRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinRechargeTier $minRechargeTier
     * @return self
     */
    public function setMinRechargeTier(?string $minRechargeTier): self
    {
        $this->minRechargeTier = $minRechargeTier;
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
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier
     */
    public function getRecommendedRechargeTier(): ?string
    {
        return $this->recommendedRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier $recommendedRechargeTier
     * @return self
     */
    public function setRecommendedRechargeTier(?string $recommendedRechargeTier): self
    {
        $this->recommendedRechargeTier = $recommendedRechargeTier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel
     */
    public function getRevenueModel(): ?string
    {
        return $this->revenueModel;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel $revenueModel
     * @return self
     */
    public function setRevenueModel(?string $revenueModel): self
    {
        $this->revenueModel = $revenueModel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards[]
     */
    public function getScheduleCards(): ?array
    {
        return $this->scheduleCards;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards[] $scheduleCards
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
    public function getSpokesperson(): ?string
    {
        return $this->spokesperson;
    }

    /**
     * @param string $spokesperson
     * @return self
     */
    public function setSpokesperson(?string $spokesperson): self
    {
        $this->spokesperson = $spokesperson;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
     * @return string
     */
    public function getVersionCode(): ?string
    {
        return $this->versionCode;
    }

    /**
     * @param string $versionCode
     * @return self
     */
    public function setVersionCode(?string $versionCode): self
    {
        $this->versionCode = $versionCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersionId(): ?string
    {
        return $this->versionId;
    }

    /**
     * @param string $versionId
     * @return self
     */
    public function setVersionId(?string $versionId): self
    {
        $this->versionId = $versionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersionName(): ?string
    {
        return $this->versionName;
    }

    /**
     * @param string $versionName
     * @return self
     */
    public function setVersionName(?string $versionName): self
    {
        $this->versionName = $versionName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->artStyle !== null) {
            $result['art_style'] = $this->artStyle;
        }
        if ($this->auditId !== null) {
            $result['audit_id'] = $this->auditId;
        }
        if ($this->auditMessage !== null) {
            $result['audit_message'] = $this->auditMessage;
        }
        if ($this->discountRate !== null) {
            $result['discount_rate'] = $this->discountRate;
        }
        if ($this->featureTags !== null) {
            $result['feature_tags'] = $this->featureTags;
        }
        if ($this->gameBoxName !== null) {
            $result['game_box_name'] = $this->gameBoxName;
        }
        if ($this->gameIpTag !== null) {
            $result['game_ip_tag'] = $this->gameIpTag;
        }
        if ($this->gameIpType !== null) {
            $result['game_ip_type'] = $this->gameIpType;
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
        if ($this->networkEnvironment !== null) {
            $result['network_environment'] = $this->networkEnvironment;
        }
        if ($this->recommendedRechargeTier !== null) {
            $result['recommended_recharge_tier'] = $this->recommendedRechargeTier;
        }
        if ($this->revenueModel !== null) {
            $result['revenue_model'] = $this->revenueModel;
        }
        if ($this->scheduleCards !== null) {
            $result['schedule_cards'] = $this->scheduleCards;
        }
        if ($this->spokesperson !== null) {
            $result['spokesperson'] = $this->spokesperson;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->themeTag !== null) {
            $result['theme_tag'] = $this->themeTag;
        }
        if ($this->versionCode !== null) {
            $result['version_code'] = $this->versionCode;
        }
        if ($this->versionId !== null) {
            $result['version_id'] = $this->versionId;
        }
        if ($this->versionName !== null) {
            $result['version_name'] = $this->versionName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['art_style'] ?? null) !== null) {
            $obj->artStyle = (string) $v;
        }
        if (($v = $data['audit_id'] ?? null) !== null) {
            $obj->auditId = (int) $v;
        }
        if (($v = $data['audit_message'] ?? null) !== null) {
            $obj->auditMessage = (string) $v;
        }
        if (($v = $data['discount_rate'] ?? null) !== null) {
            $obj->discountRate = (int) $v;
        }
        if (($v = $data['feature_tags'] ?? null) !== null && is_array($v)) {
            $obj->featureTags = $v;
        }
        if (($v = $data['game_box_name'] ?? null) !== null) {
            $obj->gameBoxName = (string) $v;
        }
        if (($v = $data['game_ip_tag'] ?? null) !== null) {
            $obj->gameIpTag = (string) $v;
        }
        if (($v = $data['game_ip_type'] ?? null) !== null && is_array($v)) {
            $obj->gameIpType = $v;
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
        if (($v = $data['network_environment'] ?? null) !== null && is_array($v)) {
            $obj->networkEnvironment = $v;
        }
        if (($v = $data['recommended_recharge_tier'] ?? null) !== null) {
            $obj->recommendedRechargeTier = (string) $v;
        }
        if (($v = $data['revenue_model'] ?? null) !== null) {
            $obj->revenueModel = (string) $v;
        }
        if (($v = $data['schedule_cards'] ?? null) !== null && is_array($v)) {
            $obj->scheduleCards = $v;
        }
        if (($v = $data['spokesperson'] ?? null) !== null) {
            $obj->spokesperson = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['theme_tag'] ?? null) !== null) {
            $obj->themeTag = (string) $v;
        }
        if (($v = $data['version_code'] ?? null) !== null) {
            $obj->versionCode = (string) $v;
        }
        if (($v = $data['version_id'] ?? null) !== null) {
            $obj->versionId = (string) $v;
        }
        if (($v = $data['version_name'] ?? null) !== null) {
            $obj->versionName = (string) $v;
        }
        return $obj;
    }
}
