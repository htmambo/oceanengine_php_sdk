<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementAndroidBasicPackageUpdateV2Request implements \JsonSerializable
{
    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2AccountType
     */
    protected ?string $accountType = null;

    /**
     * 应用介绍
     * @var string
     */
    protected ?string $appDescription = null;

    /**
     * 应用开发者名称
     * @var string
     */
    protected ?string $appDeveloperName = null;

    /**
     * 应用名称
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var string
     */
    protected ?string $artStyle = null;

    /**
     * 是否自动发布
     * @var bool
     */
    protected ?bool $autoPublish = null;

    /**
     * @var int
     */
    protected ?int $categoryId = null;

    /**
     * @var int
     */
    protected ?int $discountRate = null;

    /**
     * @var string[]
     */
    protected ?array $featureTags = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2FileOption
     */
    protected ?string $fileOption = null;

    /**
     * 文件内容<br>必须包含一个apk；可选：五个图片、一个视频
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RequestFilesInner[]
     */
    protected ?array $files = null;

    /**
     * @var string
     */
    protected ?string $gameBoxName = null;

    /**
     * @var string
     */
    protected ?string $gameIpTag = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType[]
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
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MaxPaymentTierRange
     */
    protected ?string $maxPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier
     */
    protected ?string $maxRechargeTier = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType
     */
    protected ?string $membershipType = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange
     */
    protected ?string $midPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange
     */
    protected ?string $minPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MinRechargeTier
     */
    protected ?string $minRechargeTier = null;

    /**
     * @var string[]
     */
    protected ?array $networkEnvironment = null;

    /**
     * 应用包id
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType
     */
    protected ?string $paymentType = null;

    /**
     * 隐私权限说明
     * @var string
     */
    protected ?string $permissionsDescription = null;

    /**
     * 推荐语
     * @var string
     */
    protected ?string $recommend = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RecommendedRechargeTier
     */
    protected ?string $recommendedRechargeTier = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RevenueModel
     */
    protected ?string $revenueModel = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards[]
     */
    protected ?array $scheduleCards = null;

    /**
     * @var string
     */
    protected ?string $spokesperson = null;

    /**
     * 应用题材标签id
     * @var string
     */
    protected ?string $themeTagId = null;

    /**
     * 版本更新说明
     * @var string
     */
    protected ?string $updateDescription = null;

    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 应用介绍
     * @return string
     */
    public function getAppDescription(): ?string
    {
        return $this->appDescription;
    }

    /**
     * 应用介绍
     * @param string $appDescription
     * @return self
     */
    public function setAppDescription(?string $appDescription): self
    {
        $this->appDescription = $appDescription;
        return $this;
    }

    /**
     * 应用开发者名称
     * @return string
     */
    public function getAppDeveloperName(): ?string
    {
        return $this->appDeveloperName;
    }

    /**
     * 应用开发者名称
     * @param string $appDeveloperName
     * @return self
     */
    public function setAppDeveloperName(?string $appDeveloperName): self
    {
        $this->appDeveloperName = $appDeveloperName;
        return $this;
    }

    /**
     * 应用名称
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * 应用名称
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
     * 是否自动发布
     * @return bool
     */
    public function getAutoPublish(): ?bool
    {
        return $this->autoPublish;
    }

    /**
     * 是否自动发布
     * @param bool $autoPublish
     * @return self
     */
    public function setAutoPublish(?bool $autoPublish): self
    {
        $this->autoPublish = $autoPublish;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return self
     */
    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;
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
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2FileOption
     */
    public function getFileOption(): ?string
    {
        return $this->fileOption;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2FileOption $fileOption
     * @return self
     */
    public function setFileOption(?string $fileOption): self
    {
        $this->fileOption = $fileOption;
        return $this;
    }

    /**
     * 文件内容<br>必须包含一个apk；可选：五个图片、一个视频
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RequestFilesInner[]
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * 文件内容<br>必须包含一个apk；可选：五个图片、一个视频
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RequestFilesInner[] $files
     * @return self
     */
    public function setFiles(?array $files): self
    {
        $this->files = $files;
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
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType[]
     */
    public function getGameIpType(): ?array
    {
        return $this->gameIpType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType[] $gameIpType
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
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MaxPaymentTierRange
     */
    public function getMaxPaymentTierRange(): ?string
    {
        return $this->maxPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MaxPaymentTierRange $maxPaymentTierRange
     * @return self
     */
    public function setMaxPaymentTierRange(?string $maxPaymentTierRange): self
    {
        $this->maxPaymentTierRange = $maxPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier
     */
    public function getMaxRechargeTier(): ?string
    {
        return $this->maxRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier $maxRechargeTier
     * @return self
     */
    public function setMaxRechargeTier(?string $maxRechargeTier): self
    {
        $this->maxRechargeTier = $maxRechargeTier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType
     */
    public function getMembershipType(): ?string
    {
        return $this->membershipType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType $membershipType
     * @return self
     */
    public function setMembershipType(?string $membershipType): self
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange
     */
    public function getMidPaymentTierRange(): ?string
    {
        return $this->midPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange $midPaymentTierRange
     * @return self
     */
    public function setMidPaymentTierRange(?string $midPaymentTierRange): self
    {
        $this->midPaymentTierRange = $midPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange
     */
    public function getMinPaymentTierRange(): ?string
    {
        return $this->minPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange $minPaymentTierRange
     * @return self
     */
    public function setMinPaymentTierRange(?string $minPaymentTierRange): self
    {
        $this->minPaymentTierRange = $minPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MinRechargeTier
     */
    public function getMinRechargeTier(): ?string
    {
        return $this->minRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2MinRechargeTier $minRechargeTier
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
     * 应用包id
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 应用包id
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType $paymentType
     * @return self
     */
    public function setPaymentType(?string $paymentType): self
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * 隐私权限说明
     * @return string
     */
    public function getPermissionsDescription(): ?string
    {
        return $this->permissionsDescription;
    }

    /**
     * 隐私权限说明
     * @param string $permissionsDescription
     * @return self
     */
    public function setPermissionsDescription(?string $permissionsDescription): self
    {
        $this->permissionsDescription = $permissionsDescription;
        return $this;
    }

    /**
     * 推荐语
     * @return string
     */
    public function getRecommend(): ?string
    {
        return $this->recommend;
    }

    /**
     * 推荐语
     * @param string $recommend
     * @return self
     */
    public function setRecommend(?string $recommend): self
    {
        $this->recommend = $recommend;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RecommendedRechargeTier
     */
    public function getRecommendedRechargeTier(): ?string
    {
        return $this->recommendedRechargeTier;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RecommendedRechargeTier $recommendedRechargeTier
     * @return self
     */
    public function setRecommendedRechargeTier(?string $recommendedRechargeTier): self
    {
        $this->recommendedRechargeTier = $recommendedRechargeTier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RevenueModel
     */
    public function getRevenueModel(): ?string
    {
        return $this->revenueModel;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RevenueModel $revenueModel
     * @return self
     */
    public function setRevenueModel(?string $revenueModel): self
    {
        $this->revenueModel = $revenueModel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards[]
     */
    public function getScheduleCards(): ?array
    {
        return $this->scheduleCards;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards[] $scheduleCards
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
     * 应用题材标签id
     * @return string
     */
    public function getThemeTagId(): ?string
    {
        return $this->themeTagId;
    }

    /**
     * 应用题材标签id
     * @param string $themeTagId
     * @return self
     */
    public function setThemeTagId(?string $themeTagId): self
    {
        $this->themeTagId = $themeTagId;
        return $this;
    }

    /**
     * 版本更新说明
     * @return string
     */
    public function getUpdateDescription(): ?string
    {
        return $this->updateDescription;
    }

    /**
     * 版本更新说明
     * @param string $updateDescription
     * @return self
     */
    public function setUpdateDescription(?string $updateDescription): self
    {
        $this->updateDescription = $updateDescription;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->appDescription !== null) {
            $result['app_description'] = $this->appDescription;
        }
        if ($this->appDeveloperName !== null) {
            $result['app_developer_name'] = $this->appDeveloperName;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->artStyle !== null) {
            $result['art_style'] = $this->artStyle;
        }
        if ($this->autoPublish !== null) {
            $result['auto_publish'] = $this->autoPublish;
        }
        if ($this->categoryId !== null) {
            $result['category_id'] = $this->categoryId;
        }
        if ($this->discountRate !== null) {
            $result['discount_rate'] = $this->discountRate;
        }
        if ($this->featureTags !== null) {
            $result['feature_tags'] = $this->featureTags;
        }
        if ($this->fileOption !== null) {
            $result['file_option'] = $this->fileOption;
        }
        if ($this->files !== null) {
            $result['files'] = $this->files;
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
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->paymentType !== null) {
            $result['payment_type'] = $this->paymentType;
        }
        if ($this->permissionsDescription !== null) {
            $result['permissions_description'] = $this->permissionsDescription;
        }
        if ($this->recommend !== null) {
            $result['recommend'] = $this->recommend;
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
        if ($this->themeTagId !== null) {
            $result['theme_tag_id'] = $this->themeTagId;
        }
        if ($this->updateDescription !== null) {
            $result['update_description'] = $this->updateDescription;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['app_description'] ?? null) !== null) {
            $obj->appDescription = (string) $v;
        }
        if (($v = $data['app_developer_name'] ?? null) !== null) {
            $obj->appDeveloperName = (string) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['art_style'] ?? null) !== null) {
            $obj->artStyle = (string) $v;
        }
        if (($v = $data['auto_publish'] ?? null) !== null) {
            $obj->autoPublish = (bool) $v;
        }
        if (($v = $data['category_id'] ?? null) !== null) {
            $obj->categoryId = (int) $v;
        }
        if (($v = $data['discount_rate'] ?? null) !== null) {
            $obj->discountRate = (int) $v;
        }
        if (($v = $data['feature_tags'] ?? null) !== null && is_array($v)) {
            $obj->featureTags = $v;
        }
        if (($v = $data['file_option'] ?? null) !== null) {
            $obj->fileOption = (string) $v;
        }
        if (($v = $data['files'] ?? null) !== null && is_array($v)) {
            $obj->files = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2RequestFilesInner::fromArray($vv), $v);
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
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['payment_type'] ?? null) !== null) {
            $obj->paymentType = (string) $v;
        }
        if (($v = $data['permissions_description'] ?? null) !== null) {
            $obj->permissionsDescription = (string) $v;
        }
        if (($v = $data['recommend'] ?? null) !== null) {
            $obj->recommend = (string) $v;
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
        if (($v = $data['theme_tag_id'] ?? null) !== null) {
            $obj->themeTagId = (string) $v;
        }
        if (($v = $data['update_description'] ?? null) !== null) {
            $obj->updateDescription = (string) $v;
        }
        return $obj;
    }
}
