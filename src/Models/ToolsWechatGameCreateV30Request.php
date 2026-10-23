<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsWechatGameCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30AgeLimit
     */
    protected ?string $ageLimit = null;

    /**
     * @var string
     */
    protected ?string $ageRemindUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30RequestAnchorList
     */
    protected ?\Oceanengine\Models\ToolsWechatGameCreateV30RequestAnchorList $anchorList = null;

    /**
     * @var string
     */
    protected ?string $antiAddictionUrl = null;

    /**
     * @var string
     */
    protected ?string $artStyle = null;

    /**
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * @var int
     */
    protected ?int $discountRate = null;

    /**
     * @var string[]
     */
    protected ?array $featureTags = null;

    /**
     * @var bool
     */
    protected ?bool $hasDiscount = null;

    /**
     * @var bool
     */
    protected ?bool $hasOnlineEarning = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30MaxPaymentTierRange
     */
    protected ?string $maxPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30MidPaymentTierRange
     */
    protected ?string $midPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30MinPaymentTierRange
     */
    protected ?string $minPaymentTierRange = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string[]
     */
    protected ?array $networkEnvironment = null;

    /**
     * @var string
     */
    protected ?string $path = null;

    /**
     * @var string
     */
    protected ?string $realNameUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30RevenueModel
     */
    protected ?string $revenueModel = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30ScheduleCards[]
     */
    protected ?array $scheduleCards = null;

    /**
     * @var string
     */
    protected ?string $screenRecordUrl = null;

    /**
     * @var string
     */
    protected ?string $tagInfo = null;

    /**
     * @var string
     */
    protected ?string $themeTag = null;

    /**
     * @var string
     */
    protected ?string $userName = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30AgeLimit
     */
    public function getAgeLimit(): ?string
    {
        return $this->ageLimit;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30AgeLimit $ageLimit
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
    public function getAgeRemindUrl(): ?string
    {
        return $this->ageRemindUrl;
    }

    /**
     * @param string $ageRemindUrl
     * @return self
     */
    public function setAgeRemindUrl(?string $ageRemindUrl): self
    {
        $this->ageRemindUrl = $ageRemindUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30RequestAnchorList
     */
    public function getAnchorList(): ?\Oceanengine\Models\ToolsWechatGameCreateV30RequestAnchorList
    {
        return $this->anchorList;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30RequestAnchorList $anchorList
     * @return self
     */
    public function setAnchorList(?\Oceanengine\Models\ToolsWechatGameCreateV30RequestAnchorList $anchorList): self
    {
        $this->anchorList = $anchorList;
        return $this;
    }

    /**
     * @return string
     */
    public function getAntiAddictionUrl(): ?string
    {
        return $this->antiAddictionUrl;
    }

    /**
     * @param string $antiAddictionUrl
     * @return self
     */
    public function setAntiAddictionUrl(?string $antiAddictionUrl): self
    {
        $this->antiAddictionUrl = $antiAddictionUrl;
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
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
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
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30MaxPaymentTierRange
     */
    public function getMaxPaymentTierRange(): ?string
    {
        return $this->maxPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30MaxPaymentTierRange $maxPaymentTierRange
     * @return self
     */
    public function setMaxPaymentTierRange(?string $maxPaymentTierRange): self
    {
        $this->maxPaymentTierRange = $maxPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30MidPaymentTierRange
     */
    public function getMidPaymentTierRange(): ?string
    {
        return $this->midPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30MidPaymentTierRange $midPaymentTierRange
     * @return self
     */
    public function setMidPaymentTierRange(?string $midPaymentTierRange): self
    {
        $this->midPaymentTierRange = $midPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30MinPaymentTierRange
     */
    public function getMinPaymentTierRange(): ?string
    {
        return $this->minPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30MinPaymentTierRange $minPaymentTierRange
     * @return self
     */
    public function setMinPaymentTierRange(?string $minPaymentTierRange): self
    {
        $this->minPaymentTierRange = $minPaymentTierRange;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getRealNameUrl(): ?string
    {
        return $this->realNameUrl;
    }

    /**
     * @param string $realNameUrl
     * @return self
     */
    public function setRealNameUrl(?string $realNameUrl): self
    {
        $this->realNameUrl = $realNameUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30RevenueModel
     */
    public function getRevenueModel(): ?string
    {
        return $this->revenueModel;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30RevenueModel $revenueModel
     * @return self
     */
    public function setRevenueModel(?string $revenueModel): self
    {
        $this->revenueModel = $revenueModel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30ScheduleCards[]
     */
    public function getScheduleCards(): ?array
    {
        return $this->scheduleCards;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30ScheduleCards[] $scheduleCards
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
    public function getScreenRecordUrl(): ?string
    {
        return $this->screenRecordUrl;
    }

    /**
     * @param string $screenRecordUrl
     * @return self
     */
    public function setScreenRecordUrl(?string $screenRecordUrl): self
    {
        $this->screenRecordUrl = $screenRecordUrl;
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
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;
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
        if ($this->ageLimit !== null) {
            $result['age_limit'] = $this->ageLimit;
        }
        if ($this->ageRemindUrl !== null) {
            $result['age_remind_url'] = $this->ageRemindUrl;
        }
        if ($this->anchorList !== null) {
            $result['anchor_list'] = $this->anchorList;
        }
        if ($this->antiAddictionUrl !== null) {
            $result['anti_addiction_url'] = $this->antiAddictionUrl;
        }
        if ($this->artStyle !== null) {
            $result['art_style'] = $this->artStyle;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->discountRate !== null) {
            $result['discount_rate'] = $this->discountRate;
        }
        if ($this->featureTags !== null) {
            $result['feature_tags'] = $this->featureTags;
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
        if ($this->midPaymentTierRange !== null) {
            $result['mid_payment_tier_range'] = $this->midPaymentTierRange;
        }
        if ($this->minPaymentTierRange !== null) {
            $result['min_payment_tier_range'] = $this->minPaymentTierRange;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->networkEnvironment !== null) {
            $result['network_environment'] = $this->networkEnvironment;
        }
        if ($this->path !== null) {
            $result['path'] = $this->path;
        }
        if ($this->realNameUrl !== null) {
            $result['real_name_url'] = $this->realNameUrl;
        }
        if ($this->revenueModel !== null) {
            $result['revenue_model'] = $this->revenueModel;
        }
        if ($this->scheduleCards !== null) {
            $result['schedule_cards'] = $this->scheduleCards;
        }
        if ($this->screenRecordUrl !== null) {
            $result['screen_record_url'] = $this->screenRecordUrl;
        }
        if ($this->tagInfo !== null) {
            $result['tag_info'] = $this->tagInfo;
        }
        if ($this->themeTag !== null) {
            $result['theme_tag'] = $this->themeTag;
        }
        if ($this->userName !== null) {
            $result['user_name'] = $this->userName;
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
        if (($v = $data['age_limit'] ?? null) !== null) {
            $obj->ageLimit = (string) $v;
        }
        if (($v = $data['age_remind_url'] ?? null) !== null) {
            $obj->ageRemindUrl = (string) $v;
        }
        if (($v = $data['anchor_list'] ?? null) !== null && is_array($v)) {
            $obj->anchorList = \Oceanengine\Models\ToolsWechatGameCreateV30RequestAnchorList::fromArray($v);
        }
        if (($v = $data['anti_addiction_url'] ?? null) !== null) {
            $obj->antiAddictionUrl = (string) $v;
        }
        if (($v = $data['art_style'] ?? null) !== null) {
            $obj->artStyle = (string) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['discount_rate'] ?? null) !== null) {
            $obj->discountRate = (int) $v;
        }
        if (($v = $data['feature_tags'] ?? null) !== null && is_array($v)) {
            $obj->featureTags = $v;
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
        if (($v = $data['mid_payment_tier_range'] ?? null) !== null) {
            $obj->midPaymentTierRange = (string) $v;
        }
        if (($v = $data['min_payment_tier_range'] ?? null) !== null) {
            $obj->minPaymentTierRange = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['network_environment'] ?? null) !== null && is_array($v)) {
            $obj->networkEnvironment = $v;
        }
        if (($v = $data['path'] ?? null) !== null) {
            $obj->path = (string) $v;
        }
        if (($v = $data['real_name_url'] ?? null) !== null) {
            $obj->realNameUrl = (string) $v;
        }
        if (($v = $data['revenue_model'] ?? null) !== null) {
            $obj->revenueModel = (string) $v;
        }
        if (($v = $data['schedule_cards'] ?? null) !== null && is_array($v)) {
            $obj->scheduleCards = $v;
        }
        if (($v = $data['screen_record_url'] ?? null) !== null) {
            $obj->screenRecordUrl = (string) $v;
        }
        if (($v = $data['tag_info'] ?? null) !== null) {
            $obj->tagInfo = (string) $v;
        }
        if (($v = $data['theme_tag'] ?? null) !== null) {
            $obj->themeTag = (string) $v;
        }
        if (($v = $data['user_name'] ?? null) !== null) {
            $obj->userName = (string) $v;
        }
        return $obj;
    }
}
