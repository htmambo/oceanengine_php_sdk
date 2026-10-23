<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $autoPlay = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackground
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackground $background = null;

    /**
     * @var string
     */
    protected ?string $bgColor = null;

    /**
     * @var string
     */
    protected ?string $bgImage = null;

    /**
     * @var string
     */
    protected ?string $bgType = null;

    /**
     * @var string
     */
    protected ?string $borderColor = null;

    /**
     * @var int
     */
    protected ?int $borderRadius = null;

    /**
     * @var int
     */
    protected ?int $borderWidth = null;

    /**
     * @var bool
     */
    protected ?bool $bulbEffect = null;

    /**
     * @var string
     */
    protected ?string $color = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerCommentsInner[]
     */
    protected ?array $comments = null;

    /**
     * @var string
     */
    protected ?string $content = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerElementsInner[]
     */
    protected ?array $elements = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInner[]
     */
    protected ?array $events = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFailureLink
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFailureLink $failureLink = null;

    /**
     * @var string
     */
    protected ?string $float = null;

    /**
     * @var string
     */
    protected ?string $fontFamily = null;

    /**
     * @var int
     */
    protected ?int $fontSize = null;

    /**
     * @var string[]
     */
    protected ?array $fontStyle = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFormData
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFormData $formData = null;

    /**
     * @var string
     */
    protected ?string $gamePath = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerGroupContentInner[]
     */
    protected ?array $groupContent = null;

    /**
     * @var string
     */
    protected ?string $groupType = null;

    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var string
     */
    protected ?string $icId = null;

    /**
     * @var string
     */
    protected ?string $icon = null;

    /**
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var int
     */
    protected ?int $isCover = null;

    /**
     * @var int
     */
    protected ?int $letterSpacing = null;

    /**
     * @var float
     */
    protected ?float $lineHeight = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLink
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLink $link = null;

    /**
     * @var int
     */
    protected ?int $linkable = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLocalSource
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLocalSource $localSource = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerMarquee
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerMarquee $marquee = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $offsetX = null;

    /**
     * @var int
     */
    protected ?int $offsetY = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerOnlineSource
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerOnlineSource $onlineSource = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerPackageInfo
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerPackageInfo $packageInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRewardsInner[]
     */
    protected ?array $rewards = null;

    /**
     * @var string
     */
    protected ?string $rewardsButtonText = null;

    /**
     * @var string
     */
    protected ?string $rewardsButtonTextColor = null;

    /**
     * @var int
     */
    protected ?int $rewardsButtonTextFontSize = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRuleText
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRuleText $ruleText = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSetting
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSetting $setting = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSuccessLink
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSuccessLink $successLink = null;

    /**
     * @var string
     */
    protected ?string $successTip = null;

    /**
     * @var string
     */
    protected ?string $text = null;

    /**
     * @var string
     */
    protected ?string $textAlign = null;

    /**
     * @var int
     */
    protected ?int $width = null;

    /**
     * @var int
     */
    protected ?int $x = null;

    /**
     * @var int
     */
    protected ?int $y = null;

    /**
     * @return int
     */
    public function getAutoPlay(): ?int
    {
        return $this->autoPlay;
    }

    /**
     * @param int $autoPlay
     * @return self
     */
    public function setAutoPlay(?int $autoPlay): self
    {
        $this->autoPlay = $autoPlay;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackground
     */
    public function getBackground(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackground
    {
        return $this->background;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackground $background
     * @return self
     */
    public function setBackground(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackground $background): self
    {
        $this->background = $background;
        return $this;
    }

    /**
     * @return string
     */
    public function getBgColor(): ?string
    {
        return $this->bgColor;
    }

    /**
     * @param string $bgColor
     * @return self
     */
    public function setBgColor(?string $bgColor): self
    {
        $this->bgColor = $bgColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getBgImage(): ?string
    {
        return $this->bgImage;
    }

    /**
     * @param string $bgImage
     * @return self
     */
    public function setBgImage(?string $bgImage): self
    {
        $this->bgImage = $bgImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getBgType(): ?string
    {
        return $this->bgType;
    }

    /**
     * @param string $bgType
     * @return self
     */
    public function setBgType(?string $bgType): self
    {
        $this->bgType = $bgType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor(): ?string
    {
        return $this->borderColor;
    }

    /**
     * @param string $borderColor
     * @return self
     */
    public function setBorderColor(?string $borderColor): self
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderRadius(): ?int
    {
        return $this->borderRadius;
    }

    /**
     * @param int $borderRadius
     * @return self
     */
    public function setBorderRadius(?int $borderRadius): self
    {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderWidth(): ?int
    {
        return $this->borderWidth;
    }

    /**
     * @param int $borderWidth
     * @return self
     */
    public function setBorderWidth(?int $borderWidth): self
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBulbEffect(): ?bool
    {
        return $this->bulbEffect;
    }

    /**
     * @param bool $bulbEffect
     * @return self
     */
    public function setBulbEffect(?bool $bulbEffect): self
    {
        $this->bulbEffect = $bulbEffect;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerCommentsInner[]
     */
    public function getComments(): ?array
    {
        return $this->comments;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerCommentsInner[] $comments
     * @return self
     */
    public function setComments(?array $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerElementsInner[]
     */
    public function getElements(): ?array
    {
        return $this->elements;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerElementsInner[] $elements
     * @return self
     */
    public function setElements(?array $elements): self
    {
        $this->elements = $elements;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInner[]
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInner[] $events
     * @return self
     */
    public function setEvents(?array $events): self
    {
        $this->events = $events;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFailureLink
     */
    public function getFailureLink(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFailureLink
    {
        return $this->failureLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFailureLink $failureLink
     * @return self
     */
    public function setFailureLink(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFailureLink $failureLink): self
    {
        $this->failureLink = $failureLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloat(): ?string
    {
        return $this->float;
    }

    /**
     * @param string $float
     * @return self
     */
    public function setFloat(?string $float): self
    {
        $this->float = $float;
        return $this;
    }

    /**
     * @return string
     */
    public function getFontFamily(): ?string
    {
        return $this->fontFamily;
    }

    /**
     * @param string $fontFamily
     * @return self
     */
    public function setFontFamily(?string $fontFamily): self
    {
        $this->fontFamily = $fontFamily;
        return $this;
    }

    /**
     * @return int
     */
    public function getFontSize(): ?int
    {
        return $this->fontSize;
    }

    /**
     * @param int $fontSize
     * @return self
     */
    public function setFontSize(?int $fontSize): self
    {
        $this->fontSize = $fontSize;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getFontStyle(): ?array
    {
        return $this->fontStyle;
    }

    /**
     * @param string[] $fontStyle
     * @return self
     */
    public function setFontStyle(?array $fontStyle): self
    {
        $this->fontStyle = $fontStyle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFormData
     */
    public function getFormData(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFormData
    {
        return $this->formData;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFormData $formData
     * @return self
     */
    public function setFormData(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFormData $formData): self
    {
        $this->formData = $formData;
        return $this;
    }

    /**
     * @return string
     */
    public function getGamePath(): ?string
    {
        return $this->gamePath;
    }

    /**
     * @param string $gamePath
     * @return self
     */
    public function setGamePath(?string $gamePath): self
    {
        $this->gamePath = $gamePath;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerGroupContentInner[]
     */
    public function getGroupContent(): ?array
    {
        return $this->groupContent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerGroupContentInner[] $groupContent
     * @return self
     */
    public function setGroupContent(?array $groupContent): self
    {
        $this->groupContent = $groupContent;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupType(): ?string
    {
        return $this->groupType;
    }

    /**
     * @param string $groupType
     * @return self
     */
    public function setGroupType(?string $groupType): self
    {
        $this->groupType = $groupType;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcId(): ?string
    {
        return $this->icId;
    }

    /**
     * @param string $icId
     * @return self
     */
    public function setIcId(?string $icId): self
    {
        $this->icId = $icId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
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
     * @return int
     */
    public function getIsCover(): ?int
    {
        return $this->isCover;
    }

    /**
     * @param int $isCover
     * @return self
     */
    public function setIsCover(?int $isCover): self
    {
        $this->isCover = $isCover;
        return $this;
    }

    /**
     * @return int
     */
    public function getLetterSpacing(): ?int
    {
        return $this->letterSpacing;
    }

    /**
     * @param int $letterSpacing
     * @return self
     */
    public function setLetterSpacing(?int $letterSpacing): self
    {
        $this->letterSpacing = $letterSpacing;
        return $this;
    }

    /**
     * @return float
     */
    public function getLineHeight(): ?float
    {
        return $this->lineHeight;
    }

    /**
     * @param float $lineHeight
     * @return self
     */
    public function setLineHeight(?float $lineHeight): self
    {
        $this->lineHeight = $lineHeight;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLink
     */
    public function getLink(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLink
    {
        return $this->link;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLink $link
     * @return self
     */
    public function setLink(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLink $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkable(): ?int
    {
        return $this->linkable;
    }

    /**
     * @param int $linkable
     * @return self
     */
    public function setLinkable(?int $linkable): self
    {
        $this->linkable = $linkable;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLocalSource
     */
    public function getLocalSource(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLocalSource
    {
        return $this->localSource;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLocalSource $localSource
     * @return self
     */
    public function setLocalSource(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLocalSource $localSource): self
    {
        $this->localSource = $localSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerMarquee
     */
    public function getMarquee(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerMarquee
    {
        return $this->marquee;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerMarquee $marquee
     * @return self
     */
    public function setMarquee(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerMarquee $marquee): self
    {
        $this->marquee = $marquee;
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
     * @return int
     */
    public function getOffsetX(): ?int
    {
        return $this->offsetX;
    }

    /**
     * @param int $offsetX
     * @return self
     */
    public function setOffsetX(?int $offsetX): self
    {
        $this->offsetX = $offsetX;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffsetY(): ?int
    {
        return $this->offsetY;
    }

    /**
     * @param int $offsetY
     * @return self
     */
    public function setOffsetY(?int $offsetY): self
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerOnlineSource
     */
    public function getOnlineSource(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerOnlineSource
    {
        return $this->onlineSource;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerOnlineSource $onlineSource
     * @return self
     */
    public function setOnlineSource(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerOnlineSource $onlineSource): self
    {
        $this->onlineSource = $onlineSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerPackageInfo
     */
    public function getPackageInfo(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerPackageInfo
    {
        return $this->packageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerPackageInfo $packageInfo
     * @return self
     */
    public function setPackageInfo(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerPackageInfo $packageInfo): self
    {
        $this->packageInfo = $packageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRewardsInner[]
     */
    public function getRewards(): ?array
    {
        return $this->rewards;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRewardsInner[] $rewards
     * @return self
     */
    public function setRewards(?array $rewards): self
    {
        $this->rewards = $rewards;
        return $this;
    }

    /**
     * @return string
     */
    public function getRewardsButtonText(): ?string
    {
        return $this->rewardsButtonText;
    }

    /**
     * @param string $rewardsButtonText
     * @return self
     */
    public function setRewardsButtonText(?string $rewardsButtonText): self
    {
        $this->rewardsButtonText = $rewardsButtonText;
        return $this;
    }

    /**
     * @return string
     */
    public function getRewardsButtonTextColor(): ?string
    {
        return $this->rewardsButtonTextColor;
    }

    /**
     * @param string $rewardsButtonTextColor
     * @return self
     */
    public function setRewardsButtonTextColor(?string $rewardsButtonTextColor): self
    {
        $this->rewardsButtonTextColor = $rewardsButtonTextColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getRewardsButtonTextFontSize(): ?int
    {
        return $this->rewardsButtonTextFontSize;
    }

    /**
     * @param int $rewardsButtonTextFontSize
     * @return self
     */
    public function setRewardsButtonTextFontSize(?int $rewardsButtonTextFontSize): self
    {
        $this->rewardsButtonTextFontSize = $rewardsButtonTextFontSize;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRuleText
     */
    public function getRuleText(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRuleText
    {
        return $this->ruleText;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRuleText $ruleText
     * @return self
     */
    public function setRuleText(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRuleText $ruleText): self
    {
        $this->ruleText = $ruleText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSetting
     */
    public function getSetting(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSetting
    {
        return $this->setting;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSetting $setting
     * @return self
     */
    public function setSetting(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSetting $setting): self
    {
        $this->setting = $setting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSuccessLink
     */
    public function getSuccessLink(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSuccessLink
    {
        return $this->successLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSuccessLink $successLink
     * @return self
     */
    public function setSuccessLink(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSuccessLink $successLink): self
    {
        $this->successLink = $successLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuccessTip(): ?string
    {
        return $this->successTip;
    }

    /**
     * @param string $successTip
     * @return self
     */
    public function setSuccessTip(?string $successTip): self
    {
        $this->successTip = $successTip;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextAlign(): ?string
    {
        return $this->textAlign;
    }

    /**
     * @param string $textAlign
     * @return self
     */
    public function setTextAlign(?string $textAlign): self
    {
        $this->textAlign = $textAlign;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getX(): ?int
    {
        return $this->x;
    }

    /**
     * @param int $x
     * @return self
     */
    public function setX(?int $x): self
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return int
     */
    public function getY(): ?int
    {
        return $this->y;
    }

    /**
     * @param int $y
     * @return self
     */
    public function setY(?int $y): self
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->autoPlay !== null) {
            $result['auto_play'] = $this->autoPlay;
        }
        if ($this->background !== null) {
            $result['background'] = $this->background;
        }
        if ($this->bgColor !== null) {
            $result['bg_color'] = $this->bgColor;
        }
        if ($this->bgImage !== null) {
            $result['bg_image'] = $this->bgImage;
        }
        if ($this->bgType !== null) {
            $result['bg_type'] = $this->bgType;
        }
        if ($this->borderColor !== null) {
            $result['border_color'] = $this->borderColor;
        }
        if ($this->borderRadius !== null) {
            $result['border_radius'] = $this->borderRadius;
        }
        if ($this->borderWidth !== null) {
            $result['border_width'] = $this->borderWidth;
        }
        if ($this->bulbEffect !== null) {
            $result['bulb_effect'] = $this->bulbEffect;
        }
        if ($this->color !== null) {
            $result['color'] = $this->color;
        }
        if ($this->comments !== null) {
            $result['comments'] = $this->comments;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->elements !== null) {
            $result['elements'] = $this->elements;
        }
        if ($this->events !== null) {
            $result['events'] = $this->events;
        }
        if ($this->failureLink !== null) {
            $result['failure_link'] = $this->failureLink;
        }
        if ($this->float !== null) {
            $result['float'] = $this->float;
        }
        if ($this->fontFamily !== null) {
            $result['font_family'] = $this->fontFamily;
        }
        if ($this->fontSize !== null) {
            $result['font_size'] = $this->fontSize;
        }
        if ($this->fontStyle !== null) {
            $result['font_style'] = $this->fontStyle;
        }
        if ($this->formData !== null) {
            $result['form_data'] = $this->formData;
        }
        if ($this->gamePath !== null) {
            $result['game_path'] = $this->gamePath;
        }
        if ($this->groupContent !== null) {
            $result['group_content'] = $this->groupContent;
        }
        if ($this->groupType !== null) {
            $result['group_type'] = $this->groupType;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->icId !== null) {
            $result['ic_id'] = $this->icId;
        }
        if ($this->icon !== null) {
            $result['icon'] = $this->icon;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->isCover !== null) {
            $result['is_cover'] = $this->isCover;
        }
        if ($this->letterSpacing !== null) {
            $result['letter_spacing'] = $this->letterSpacing;
        }
        if ($this->lineHeight !== null) {
            $result['line_height'] = $this->lineHeight;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->linkable !== null) {
            $result['linkable'] = $this->linkable;
        }
        if ($this->localSource !== null) {
            $result['local_source'] = $this->localSource;
        }
        if ($this->marquee !== null) {
            $result['marquee'] = $this->marquee;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->offsetX !== null) {
            $result['offset_x'] = $this->offsetX;
        }
        if ($this->offsetY !== null) {
            $result['offset_y'] = $this->offsetY;
        }
        if ($this->onlineSource !== null) {
            $result['online_source'] = $this->onlineSource;
        }
        if ($this->packageInfo !== null) {
            $result['package_info'] = $this->packageInfo;
        }
        if ($this->rewards !== null) {
            $result['rewards'] = $this->rewards;
        }
        if ($this->rewardsButtonText !== null) {
            $result['rewards_button_text'] = $this->rewardsButtonText;
        }
        if ($this->rewardsButtonTextColor !== null) {
            $result['rewards_button_text_color'] = $this->rewardsButtonTextColor;
        }
        if ($this->rewardsButtonTextFontSize !== null) {
            $result['rewards_button_text_font_size'] = $this->rewardsButtonTextFontSize;
        }
        if ($this->ruleText !== null) {
            $result['rule_text'] = $this->ruleText;
        }
        if ($this->setting !== null) {
            $result['setting'] = $this->setting;
        }
        if ($this->successLink !== null) {
            $result['success_link'] = $this->successLink;
        }
        if ($this->successTip !== null) {
            $result['success_tip'] = $this->successTip;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        if ($this->textAlign !== null) {
            $result['text_align'] = $this->textAlign;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        if ($this->x !== null) {
            $result['x'] = $this->x;
        }
        if ($this->y !== null) {
            $result['y'] = $this->y;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auto_play'] ?? null) !== null) {
            $obj->autoPlay = (int) $v;
        }
        if (($v = $data['background'] ?? null) !== null && is_array($v)) {
            $obj->background = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackground::fromArray($v);
        }
        if (($v = $data['bg_color'] ?? null) !== null) {
            $obj->bgColor = (string) $v;
        }
        if (($v = $data['bg_image'] ?? null) !== null) {
            $obj->bgImage = (string) $v;
        }
        if (($v = $data['bg_type'] ?? null) !== null) {
            $obj->bgType = (string) $v;
        }
        if (($v = $data['border_color'] ?? null) !== null) {
            $obj->borderColor = (string) $v;
        }
        if (($v = $data['border_radius'] ?? null) !== null) {
            $obj->borderRadius = (int) $v;
        }
        if (($v = $data['border_width'] ?? null) !== null) {
            $obj->borderWidth = (int) $v;
        }
        if (($v = $data['bulb_effect'] ?? null) !== null) {
            $obj->bulbEffect = (bool) $v;
        }
        if (($v = $data['color'] ?? null) !== null) {
            $obj->color = (string) $v;
        }
        if (($v = $data['comments'] ?? null) !== null && is_array($v)) {
            $obj->comments = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerCommentsInner::fromArray($vv), $v);
        }
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['elements'] ?? null) !== null && is_array($v)) {
            $obj->elements = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerElementsInner::fromArray($vv), $v);
        }
        if (($v = $data['events'] ?? null) !== null && is_array($v)) {
            $obj->events = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInner::fromArray($vv), $v);
        }
        if (($v = $data['failure_link'] ?? null) !== null && is_array($v)) {
            $obj->failureLink = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFailureLink::fromArray($v);
        }
        if (($v = $data['float'] ?? null) !== null) {
            $obj->float = (string) $v;
        }
        if (($v = $data['font_family'] ?? null) !== null) {
            $obj->fontFamily = (string) $v;
        }
        if (($v = $data['font_size'] ?? null) !== null) {
            $obj->fontSize = (int) $v;
        }
        if (($v = $data['font_style'] ?? null) !== null && is_array($v)) {
            $obj->fontStyle = $v;
        }
        if (($v = $data['form_data'] ?? null) !== null && is_array($v)) {
            $obj->formData = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerFormData::fromArray($v);
        }
        if (($v = $data['game_path'] ?? null) !== null) {
            $obj->gamePath = (string) $v;
        }
        if (($v = $data['group_content'] ?? null) !== null && is_array($v)) {
            $obj->groupContent = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerGroupContentInner::fromArray($vv), $v);
        }
        if (($v = $data['group_type'] ?? null) !== null) {
            $obj->groupType = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['ic_id'] ?? null) !== null) {
            $obj->icId = (string) $v;
        }
        if (($v = $data['icon'] ?? null) !== null) {
            $obj->icon = (string) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['is_cover'] ?? null) !== null) {
            $obj->isCover = (int) $v;
        }
        if (($v = $data['letter_spacing'] ?? null) !== null) {
            $obj->letterSpacing = (int) $v;
        }
        if (($v = $data['line_height'] ?? null) !== null) {
            $obj->lineHeight = (float) $v;
        }
        if (($v = $data['link'] ?? null) !== null && is_array($v)) {
            $obj->link = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLink::fromArray($v);
        }
        if (($v = $data['linkable'] ?? null) !== null) {
            $obj->linkable = (int) $v;
        }
        if (($v = $data['local_source'] ?? null) !== null && is_array($v)) {
            $obj->localSource = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerLocalSource::fromArray($v);
        }
        if (($v = $data['marquee'] ?? null) !== null && is_array($v)) {
            $obj->marquee = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerMarquee::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['offset_x'] ?? null) !== null) {
            $obj->offsetX = (int) $v;
        }
        if (($v = $data['offset_y'] ?? null) !== null) {
            $obj->offsetY = (int) $v;
        }
        if (($v = $data['online_source'] ?? null) !== null && is_array($v)) {
            $obj->onlineSource = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerOnlineSource::fromArray($v);
        }
        if (($v = $data['package_info'] ?? null) !== null && is_array($v)) {
            $obj->packageInfo = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerPackageInfo::fromArray($v);
        }
        if (($v = $data['rewards'] ?? null) !== null && is_array($v)) {
            $obj->rewards = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRewardsInner::fromArray($vv), $v);
        }
        if (($v = $data['rewards_button_text'] ?? null) !== null) {
            $obj->rewardsButtonText = (string) $v;
        }
        if (($v = $data['rewards_button_text_color'] ?? null) !== null) {
            $obj->rewardsButtonTextColor = (string) $v;
        }
        if (($v = $data['rewards_button_text_font_size'] ?? null) !== null) {
            $obj->rewardsButtonTextFontSize = (int) $v;
        }
        if (($v = $data['rule_text'] ?? null) !== null && is_array($v)) {
            $obj->ruleText = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerRuleText::fromArray($v);
        }
        if (($v = $data['setting'] ?? null) !== null && is_array($v)) {
            $obj->setting = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSetting::fromArray($v);
        }
        if (($v = $data['success_link'] ?? null) !== null && is_array($v)) {
            $obj->successLink = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSuccessLink::fromArray($v);
        }
        if (($v = $data['success_tip'] ?? null) !== null) {
            $obj->successTip = (string) $v;
        }
        if (($v = $data['text'] ?? null) !== null) {
            $obj->text = (string) $v;
        }
        if (($v = $data['text_align'] ?? null) !== null) {
            $obj->textAlign = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        if (($v = $data['x'] ?? null) !== null) {
            $obj->x = (int) $v;
        }
        if (($v = $data['y'] ?? null) !== null) {
            $obj->y = (int) $v;
        }
        return $obj;
    }
}
