<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreative implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfo $advancedCreativeInfo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAvatarIcon
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAvatarIcon $avatarIcon = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAwemeItemInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAwemeItemInfo $awemeItemInfo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeBusinessInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeBusinessInfo $businessInfo = null;

    /**
     * 创意ID
     * @var string
     */
    protected ?string $creativeId = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfo $creativeInfo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfo $externalInfo = null;

    /**
     * 文章ID
     * @var string
     */
    protected ?string $groupId = null;

    /**
     * 抖音用户Id
     * @var string
     */
    protected ?string $iesCoreUserId = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeInteractiveModule
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeInteractiveModule $interactiveModule = null;

    /**
     * 来源
     * @var string
     */
    protected ?string $source = null;

    /**
     * 开屏按钮文案
     * @var string
     */
    protected ?string $splashButtonText = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreative
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreative $splashCreative = null;

    /**
     * 标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 按钮颜色配置
     * @var string
     */
    protected ?string $videoThemeColor = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfo
     */
    public function getAdvancedCreativeInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfo
    {
        return $this->advancedCreativeInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfo $advancedCreativeInfo
     * @return self
     */
    public function setAdvancedCreativeInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfo $advancedCreativeInfo): self
    {
        $this->advancedCreativeInfo = $advancedCreativeInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAvatarIcon
     */
    public function getAvatarIcon(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAvatarIcon
    {
        return $this->avatarIcon;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAvatarIcon $avatarIcon
     * @return self
     */
    public function setAvatarIcon(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAvatarIcon $avatarIcon): self
    {
        $this->avatarIcon = $avatarIcon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAwemeItemInfo
     */
    public function getAwemeItemInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAwemeItemInfo
    {
        return $this->awemeItemInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAwemeItemInfo $awemeItemInfo
     * @return self
     */
    public function setAwemeItemInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAwemeItemInfo $awemeItemInfo): self
    {
        $this->awemeItemInfo = $awemeItemInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeBusinessInfo
     */
    public function getBusinessInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeBusinessInfo
    {
        return $this->businessInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeBusinessInfo $businessInfo
     * @return self
     */
    public function setBusinessInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeBusinessInfo $businessInfo): self
    {
        $this->businessInfo = $businessInfo;
        return $this;
    }

    /**
     * 创意ID
     * @return string
     */
    public function getCreativeId(): ?string
    {
        return $this->creativeId;
    }

    /**
     * 创意ID
     * @param string $creativeId
     * @return self
     */
    public function setCreativeId(?string $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfo
     */
    public function getCreativeInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfo
    {
        return $this->creativeInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfo $creativeInfo
     * @return self
     */
    public function setCreativeInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfo $creativeInfo): self
    {
        $this->creativeInfo = $creativeInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfo
     */
    public function getExternalInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfo
    {
        return $this->externalInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfo $externalInfo
     * @return self
     */
    public function setExternalInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfo $externalInfo): self
    {
        $this->externalInfo = $externalInfo;
        return $this;
    }

    /**
     * 文章ID
     * @return string
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * 文章ID
     * @param string $groupId
     * @return self
     */
    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * 抖音用户Id
     * @return string
     */
    public function getIesCoreUserId(): ?string
    {
        return $this->iesCoreUserId;
    }

    /**
     * 抖音用户Id
     * @param string $iesCoreUserId
     * @return self
     */
    public function setIesCoreUserId(?string $iesCoreUserId): self
    {
        $this->iesCoreUserId = $iesCoreUserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeInteractiveModule
     */
    public function getInteractiveModule(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeInteractiveModule
    {
        return $this->interactiveModule;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeInteractiveModule $interactiveModule
     * @return self
     */
    public function setInteractiveModule(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeInteractiveModule $interactiveModule): self
    {
        $this->interactiveModule = $interactiveModule;
        return $this;
    }

    /**
     * 来源
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * 来源
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 开屏按钮文案
     * @return string
     */
    public function getSplashButtonText(): ?string
    {
        return $this->splashButtonText;
    }

    /**
     * 开屏按钮文案
     * @param string $splashButtonText
     * @return self
     */
    public function setSplashButtonText(?string $splashButtonText): self
    {
        $this->splashButtonText = $splashButtonText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreative
     */
    public function getSplashCreative(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreative
    {
        return $this->splashCreative;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreative $splashCreative
     * @return self
     */
    public function setSplashCreative(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreative $splashCreative): self
    {
        $this->splashCreative = $splashCreative;
        return $this;
    }

    /**
     * 标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 按钮颜色配置
     * @return string
     */
    public function getVideoThemeColor(): ?string
    {
        return $this->videoThemeColor;
    }

    /**
     * 按钮颜色配置
     * @param string $videoThemeColor
     * @return self
     */
    public function setVideoThemeColor(?string $videoThemeColor): self
    {
        $this->videoThemeColor = $videoThemeColor;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advancedCreativeInfo !== null) {
            $result['advanced_creative_info'] = $this->advancedCreativeInfo;
        }
        if ($this->avatarIcon !== null) {
            $result['avatar_icon'] = $this->avatarIcon;
        }
        if ($this->awemeItemInfo !== null) {
            $result['aweme_item_info'] = $this->awemeItemInfo;
        }
        if ($this->businessInfo !== null) {
            $result['business_info'] = $this->businessInfo;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->creativeInfo !== null) {
            $result['creative_info'] = $this->creativeInfo;
        }
        if ($this->externalInfo !== null) {
            $result['external_info'] = $this->externalInfo;
        }
        if ($this->groupId !== null) {
            $result['group_id'] = $this->groupId;
        }
        if ($this->iesCoreUserId !== null) {
            $result['ies_core_user_id'] = $this->iesCoreUserId;
        }
        if ($this->interactiveModule !== null) {
            $result['interactive_module'] = $this->interactiveModule;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->splashButtonText !== null) {
            $result['splash_button_text'] = $this->splashButtonText;
        }
        if ($this->splashCreative !== null) {
            $result['splash_creative'] = $this->splashCreative;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoThemeColor !== null) {
            $result['video_theme_color'] = $this->videoThemeColor;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advanced_creative_info'] ?? null) !== null && is_array($v)) {
            $obj->advancedCreativeInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfo::fromArray($v);
        }
        if (($v = $data['avatar_icon'] ?? null) !== null && is_array($v)) {
            $obj->avatarIcon = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAvatarIcon::fromArray($v);
        }
        if (($v = $data['aweme_item_info'] ?? null) !== null && is_array($v)) {
            $obj->awemeItemInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAwemeItemInfo::fromArray($v);
        }
        if (($v = $data['business_info'] ?? null) !== null && is_array($v)) {
            $obj->businessInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeBusinessInfo::fromArray($v);
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (string) $v;
        }
        if (($v = $data['creative_info'] ?? null) !== null && is_array($v)) {
            $obj->creativeInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeCreativeInfo::fromArray($v);
        }
        if (($v = $data['external_info'] ?? null) !== null && is_array($v)) {
            $obj->externalInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfo::fromArray($v);
        }
        if (($v = $data['group_id'] ?? null) !== null) {
            $obj->groupId = (string) $v;
        }
        if (($v = $data['ies_core_user_id'] ?? null) !== null) {
            $obj->iesCoreUserId = (string) $v;
        }
        if (($v = $data['interactive_module'] ?? null) !== null && is_array($v)) {
            $obj->interactiveModule = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeInteractiveModule::fromArray($v);
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['splash_button_text'] ?? null) !== null) {
            $obj->splashButtonText = (string) $v;
        }
        if (($v = $data['splash_creative'] ?? null) !== null && is_array($v)) {
            $obj->splashCreative = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreative::fromArray($v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_theme_color'] ?? null) !== null) {
            $obj->videoThemeColor = (string) $v;
        }
        return $obj;
    }
}
