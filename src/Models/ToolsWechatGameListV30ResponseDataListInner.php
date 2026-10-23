<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsWechatGameListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListAccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListAgeLimit
     */
    protected ?string $ageLimit = null;

    /**
     * @var string
     */
    protected ?string $ageRemindUrl = null;

    /**
     * @var string
     */
    protected ?string $antiAddictionUrl = null;

    /**
     * @var string
     */
    protected ?string $artStyle = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListAuthorizationStatus
     */
    protected ?string $authorizationStatus = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

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
     * @var int
     */
    protected ?int $historyAccountId = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListHistoryAccountType
     */
    protected ?string $historyAccountType = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var bool
     */
    protected ?bool $isEbpAsset = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListMaxPaymentTierRange
     */
    protected ?string $maxPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListMidPaymentTierRange
     */
    protected ?string $midPaymentTierRange = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListMinPaymentTierRange
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
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @var string
     */
    protected ?string $reasonUnauthorize = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListRevenueModel
     */
    protected ?string $revenueModel = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30DataListScheduleCards[]
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
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListAgeLimit
     */
    public function getAgeLimit(): ?string
    {
        return $this->ageLimit;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListAgeLimit $ageLimit
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
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListAuthorizationStatus
     */
    public function getAuthorizationStatus(): ?string
    {
        return $this->authorizationStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListAuthorizationStatus $authorizationStatus
     * @return self
     */
    public function setAuthorizationStatus(?string $authorizationStatus): self
    {
        $this->authorizationStatus = $authorizationStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
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
     * @return int
     */
    public function getHistoryAccountId(): ?int
    {
        return $this->historyAccountId;
    }

    /**
     * @param int $historyAccountId
     * @return self
     */
    public function setHistoryAccountId(?int $historyAccountId): self
    {
        $this->historyAccountId = $historyAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListHistoryAccountType
     */
    public function getHistoryAccountType(): ?string
    {
        return $this->historyAccountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListHistoryAccountType $historyAccountType
     * @return self
     */
    public function setHistoryAccountType(?string $historyAccountType): self
    {
        $this->historyAccountType = $historyAccountType;
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
     * @return bool
     */
    public function getIsEbpAsset(): ?bool
    {
        return $this->isEbpAsset;
    }

    /**
     * @param bool $isEbpAsset
     * @return self
     */
    public function setIsEbpAsset(?bool $isEbpAsset): self
    {
        $this->isEbpAsset = $isEbpAsset;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListMaxPaymentTierRange
     */
    public function getMaxPaymentTierRange(): ?string
    {
        return $this->maxPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListMaxPaymentTierRange $maxPaymentTierRange
     * @return self
     */
    public function setMaxPaymentTierRange(?string $maxPaymentTierRange): self
    {
        $this->maxPaymentTierRange = $maxPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListMidPaymentTierRange
     */
    public function getMidPaymentTierRange(): ?string
    {
        return $this->midPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListMidPaymentTierRange $midPaymentTierRange
     * @return self
     */
    public function setMidPaymentTierRange(?string $midPaymentTierRange): self
    {
        $this->midPaymentTierRange = $midPaymentTierRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListMinPaymentTierRange
     */
    public function getMinPaymentTierRange(): ?string
    {
        return $this->minPaymentTierRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListMinPaymentTierRange $minPaymentTierRange
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
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getReasonUnauthorize(): ?string
    {
        return $this->reasonUnauthorize;
    }

    /**
     * @param string $reasonUnauthorize
     * @return self
     */
    public function setReasonUnauthorize(?string $reasonUnauthorize): self
    {
        $this->reasonUnauthorize = $reasonUnauthorize;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListRevenueModel
     */
    public function getRevenueModel(): ?string
    {
        return $this->revenueModel;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListRevenueModel $revenueModel
     * @return self
     */
    public function setRevenueModel(?string $revenueModel): self
    {
        $this->revenueModel = $revenueModel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30DataListScheduleCards[]
     */
    public function getScheduleCards(): ?array
    {
        return $this->scheduleCards;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30DataListScheduleCards[] $scheduleCards
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
        if ($this->antiAddictionUrl !== null) {
            $result['anti_addiction_url'] = $this->antiAddictionUrl;
        }
        if ($this->artStyle !== null) {
            $result['art_style'] = $this->artStyle;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->authorizationStatus !== null) {
            $result['authorization_status'] = $this->authorizationStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
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
        if ($this->historyAccountId !== null) {
            $result['history_account_id'] = $this->historyAccountId;
        }
        if ($this->historyAccountType !== null) {
            $result['history_account_type'] = $this->historyAccountType;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->isEbpAsset !== null) {
            $result['is_ebp_asset'] = $this->isEbpAsset;
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
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->reasonUnauthorize !== null) {
            $result['reason_unauthorize'] = $this->reasonUnauthorize;
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
        if (($v = $data['anti_addiction_url'] ?? null) !== null) {
            $obj->antiAddictionUrl = (string) $v;
        }
        if (($v = $data['art_style'] ?? null) !== null) {
            $obj->artStyle = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['authorization_status'] ?? null) !== null) {
            $obj->authorizationStatus = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
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
        if (($v = $data['history_account_id'] ?? null) !== null) {
            $obj->historyAccountId = (int) $v;
        }
        if (($v = $data['history_account_type'] ?? null) !== null) {
            $obj->historyAccountType = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['is_ebp_asset'] ?? null) !== null) {
            $obj->isEbpAsset = (bool) $v;
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
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['reason_unauthorize'] ?? null) !== null) {
            $obj->reasonUnauthorize = (string) $v;
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
