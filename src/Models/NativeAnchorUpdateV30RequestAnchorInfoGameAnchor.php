<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorUpdateV30RequestAnchorInfoGameAnchor implements \JsonSerializable
{
    /**
     * 游戏图片比例枚举，100：尺寸为2：1的横图，200：尺寸为3：5的竖图
     * @var int
     */
    protected ?int $anchorImageMode = null;

    /**
     * 安卓锚点入口标题字段，长度1～12
     * @var string
     */
    protected ?string $androidAnchorTitle = null;

    /**
     * 安卓下载链接，game_type为微信小游戏场景下不用传入
     * @var string
     */
    protected ?string $androidDownloadUrl = null;

    /**
     * 游戏图片，图片个数 3～8
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorAppImagesInner[]
     */
    protected ?array $appImages = null;

    /**
     * @var string
     */
    protected ?string $appOpenUrl = null;

    /**
     * 游戏标签列表，每个标签长度1～6，标签个数1～2
     * @var string[]
     */
    protected ?array $appTags = null;

    /**
     * 游戏福利，可选择YES启用、NO不启用
     * @var bool
     */
    protected ?bool $gameBonus = null;

    /**
     * 游戏特色，长度 1～45
     * @var string
     */
    protected ?string $gameCharatoristic = null;

    /**
     * 游戏简介，长度 1～45
     * @var string
     */
    protected ?string $gameDescription = null;

    /**
     * 游戏礼包列表，当game_bonus为YES时必填，数量限制0-3
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInner[]
     */
    protected ?array $gamePackageList = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoGameAnchorGameType
     */
    protected ?string $gameType = null;

    /**
     * 引导文案，长度1～15
     * @var string
     */
    protected ?string $guideText = null;

    /**
     * @var string
     */
    protected ?string $harmonyDownloadUrl = null;

    /**
     * 锚点头部图片list，推荐尺寸为2：1的横图
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorHeadImageListInner[]
     */
    protected ?array $headImageList = null;

    /**
     * 小游戏图片list，当前锚点类型且game_type为MICRO_GAME必填，比例为1：1，最多一个
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorIconImagesInner[]
     */
    protected ?array $iconImages = null;

    /**
     * 微信小游戏ID，当前锚点类型且game_type为MICRO_GAME必填
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * iOS锚点入口标题字段，长度1～12
     * @var string
     */
    protected ?string $iosAnchorTitle = null;

    /**
     * iOS下载链接，game_type为微信小游戏场景下不用传入
     * @var string
     */
    protected ?string $iosDownloadUrl = null;

    /**
     * 其他说明，长度 1～200
     * @var string
     */
    protected ?string $otherDescription = null;

    /**
     * 微信小游戏/小程序路径参数
     * @var string
     */
    protected ?string $pathParam = null;

    /**
     * 配置平台，game_type为微信小游戏场景下不用传入
     * @var int
     */
    protected ?int $platformType = null;

    /**
     * 游戏图片比例枚举，100：尺寸为2：1的横图，200：尺寸为3：5的竖图
     * @return int
     */
    public function getAnchorImageMode(): ?int
    {
        return $this->anchorImageMode;
    }

    /**
     * 游戏图片比例枚举，100：尺寸为2：1的横图，200：尺寸为3：5的竖图
     * @param int $anchorImageMode
     * @return self
     */
    public function setAnchorImageMode(?int $anchorImageMode): self
    {
        $this->anchorImageMode = $anchorImageMode;
        return $this;
    }

    /**
     * 安卓锚点入口标题字段，长度1～12
     * @return string
     */
    public function getAndroidAnchorTitle(): ?string
    {
        return $this->androidAnchorTitle;
    }

    /**
     * 安卓锚点入口标题字段，长度1～12
     * @param string $androidAnchorTitle
     * @return self
     */
    public function setAndroidAnchorTitle(?string $androidAnchorTitle): self
    {
        $this->androidAnchorTitle = $androidAnchorTitle;
        return $this;
    }

    /**
     * 安卓下载链接，game_type为微信小游戏场景下不用传入
     * @return string
     */
    public function getAndroidDownloadUrl(): ?string
    {
        return $this->androidDownloadUrl;
    }

    /**
     * 安卓下载链接，game_type为微信小游戏场景下不用传入
     * @param string $androidDownloadUrl
     * @return self
     */
    public function setAndroidDownloadUrl(?string $androidDownloadUrl): self
    {
        $this->androidDownloadUrl = $androidDownloadUrl;
        return $this;
    }

    /**
     * 游戏图片，图片个数 3～8
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorAppImagesInner[]
     */
    public function getAppImages(): ?array
    {
        return $this->appImages;
    }

    /**
     * 游戏图片，图片个数 3～8
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorAppImagesInner[] $appImages
     * @return self
     */
    public function setAppImages(?array $appImages): self
    {
        $this->appImages = $appImages;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppOpenUrl(): ?string
    {
        return $this->appOpenUrl;
    }

    /**
     * @param string $appOpenUrl
     * @return self
     */
    public function setAppOpenUrl(?string $appOpenUrl): self
    {
        $this->appOpenUrl = $appOpenUrl;
        return $this;
    }

    /**
     * 游戏标签列表，每个标签长度1～6，标签个数1～2
     * @return string[]
     */
    public function getAppTags(): ?array
    {
        return $this->appTags;
    }

    /**
     * 游戏标签列表，每个标签长度1～6，标签个数1～2
     * @param string[] $appTags
     * @return self
     */
    public function setAppTags(?array $appTags): self
    {
        $this->appTags = $appTags;
        return $this;
    }

    /**
     * 游戏福利，可选择YES启用、NO不启用
     * @return bool
     */
    public function getGameBonus(): ?bool
    {
        return $this->gameBonus;
    }

    /**
     * 游戏福利，可选择YES启用、NO不启用
     * @param bool $gameBonus
     * @return self
     */
    public function setGameBonus(?bool $gameBonus): self
    {
        $this->gameBonus = $gameBonus;
        return $this;
    }

    /**
     * 游戏特色，长度 1～45
     * @return string
     */
    public function getGameCharatoristic(): ?string
    {
        return $this->gameCharatoristic;
    }

    /**
     * 游戏特色，长度 1～45
     * @param string $gameCharatoristic
     * @return self
     */
    public function setGameCharatoristic(?string $gameCharatoristic): self
    {
        $this->gameCharatoristic = $gameCharatoristic;
        return $this;
    }

    /**
     * 游戏简介，长度 1～45
     * @return string
     */
    public function getGameDescription(): ?string
    {
        return $this->gameDescription;
    }

    /**
     * 游戏简介，长度 1～45
     * @param string $gameDescription
     * @return self
     */
    public function setGameDescription(?string $gameDescription): self
    {
        $this->gameDescription = $gameDescription;
        return $this;
    }

    /**
     * 游戏礼包列表，当game_bonus为YES时必填，数量限制0-3
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInner[]
     */
    public function getGamePackageList(): ?array
    {
        return $this->gamePackageList;
    }

    /**
     * 游戏礼包列表，当game_bonus为YES时必填，数量限制0-3
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInner[] $gamePackageList
     * @return self
     */
    public function setGamePackageList(?array $gamePackageList): self
    {
        $this->gamePackageList = $gamePackageList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoGameAnchorGameType
     */
    public function getGameType(): ?string
    {
        return $this->gameType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoGameAnchorGameType $gameType
     * @return self
     */
    public function setGameType(?string $gameType): self
    {
        $this->gameType = $gameType;
        return $this;
    }

    /**
     * 引导文案，长度1～15
     * @return string
     */
    public function getGuideText(): ?string
    {
        return $this->guideText;
    }

    /**
     * 引导文案，长度1～15
     * @param string $guideText
     * @return self
     */
    public function setGuideText(?string $guideText): self
    {
        $this->guideText = $guideText;
        return $this;
    }

    /**
     * @return string
     */
    public function getHarmonyDownloadUrl(): ?string
    {
        return $this->harmonyDownloadUrl;
    }

    /**
     * @param string $harmonyDownloadUrl
     * @return self
     */
    public function setHarmonyDownloadUrl(?string $harmonyDownloadUrl): self
    {
        $this->harmonyDownloadUrl = $harmonyDownloadUrl;
        return $this;
    }

    /**
     * 锚点头部图片list，推荐尺寸为2：1的横图
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorHeadImageListInner[]
     */
    public function getHeadImageList(): ?array
    {
        return $this->headImageList;
    }

    /**
     * 锚点头部图片list，推荐尺寸为2：1的横图
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorHeadImageListInner[] $headImageList
     * @return self
     */
    public function setHeadImageList(?array $headImageList): self
    {
        $this->headImageList = $headImageList;
        return $this;
    }

    /**
     * 小游戏图片list，当前锚点类型且game_type为MICRO_GAME必填，比例为1：1，最多一个
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorIconImagesInner[]
     */
    public function getIconImages(): ?array
    {
        return $this->iconImages;
    }

    /**
     * 小游戏图片list，当前锚点类型且game_type为MICRO_GAME必填，比例为1：1，最多一个
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorIconImagesInner[] $iconImages
     * @return self
     */
    public function setIconImages(?array $iconImages): self
    {
        $this->iconImages = $iconImages;
        return $this;
    }

    /**
     * 微信小游戏ID，当前锚点类型且game_type为MICRO_GAME必填
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 微信小游戏ID，当前锚点类型且game_type为MICRO_GAME必填
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * iOS锚点入口标题字段，长度1～12
     * @return string
     */
    public function getIosAnchorTitle(): ?string
    {
        return $this->iosAnchorTitle;
    }

    /**
     * iOS锚点入口标题字段，长度1～12
     * @param string $iosAnchorTitle
     * @return self
     */
    public function setIosAnchorTitle(?string $iosAnchorTitle): self
    {
        $this->iosAnchorTitle = $iosAnchorTitle;
        return $this;
    }

    /**
     * iOS下载链接，game_type为微信小游戏场景下不用传入
     * @return string
     */
    public function getIosDownloadUrl(): ?string
    {
        return $this->iosDownloadUrl;
    }

    /**
     * iOS下载链接，game_type为微信小游戏场景下不用传入
     * @param string $iosDownloadUrl
     * @return self
     */
    public function setIosDownloadUrl(?string $iosDownloadUrl): self
    {
        $this->iosDownloadUrl = $iosDownloadUrl;
        return $this;
    }

    /**
     * 其他说明，长度 1～200
     * @return string
     */
    public function getOtherDescription(): ?string
    {
        return $this->otherDescription;
    }

    /**
     * 其他说明，长度 1～200
     * @param string $otherDescription
     * @return self
     */
    public function setOtherDescription(?string $otherDescription): self
    {
        $this->otherDescription = $otherDescription;
        return $this;
    }

    /**
     * 微信小游戏/小程序路径参数
     * @return string
     */
    public function getPathParam(): ?string
    {
        return $this->pathParam;
    }

    /**
     * 微信小游戏/小程序路径参数
     * @param string $pathParam
     * @return self
     */
    public function setPathParam(?string $pathParam): self
    {
        $this->pathParam = $pathParam;
        return $this;
    }

    /**
     * 配置平台，game_type为微信小游戏场景下不用传入
     * @return int
     */
    public function getPlatformType(): ?int
    {
        return $this->platformType;
    }

    /**
     * 配置平台，game_type为微信小游戏场景下不用传入
     * @param int $platformType
     * @return self
     */
    public function setPlatformType(?int $platformType): self
    {
        $this->platformType = $platformType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorImageMode !== null) {
            $result['anchor_image_mode'] = $this->anchorImageMode;
        }
        if ($this->androidAnchorTitle !== null) {
            $result['android_anchor_title'] = $this->androidAnchorTitle;
        }
        if ($this->androidDownloadUrl !== null) {
            $result['android_download_url'] = $this->androidDownloadUrl;
        }
        if ($this->appImages !== null) {
            $result['app_images'] = $this->appImages;
        }
        if ($this->appOpenUrl !== null) {
            $result['app_open_url'] = $this->appOpenUrl;
        }
        if ($this->appTags !== null) {
            $result['app_tags'] = $this->appTags;
        }
        if ($this->gameBonus !== null) {
            $result['game_bonus'] = $this->gameBonus;
        }
        if ($this->gameCharatoristic !== null) {
            $result['game_charatoristic'] = $this->gameCharatoristic;
        }
        if ($this->gameDescription !== null) {
            $result['game_description'] = $this->gameDescription;
        }
        if ($this->gamePackageList !== null) {
            $result['game_package_list'] = $this->gamePackageList;
        }
        if ($this->gameType !== null) {
            $result['game_type'] = $this->gameType;
        }
        if ($this->guideText !== null) {
            $result['guide_text'] = $this->guideText;
        }
        if ($this->harmonyDownloadUrl !== null) {
            $result['harmony_download_url'] = $this->harmonyDownloadUrl;
        }
        if ($this->headImageList !== null) {
            $result['head_image_list'] = $this->headImageList;
        }
        if ($this->iconImages !== null) {
            $result['icon_images'] = $this->iconImages;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->iosAnchorTitle !== null) {
            $result['ios_anchor_title'] = $this->iosAnchorTitle;
        }
        if ($this->iosDownloadUrl !== null) {
            $result['ios_download_url'] = $this->iosDownloadUrl;
        }
        if ($this->otherDescription !== null) {
            $result['other_description'] = $this->otherDescription;
        }
        if ($this->pathParam !== null) {
            $result['path_param'] = $this->pathParam;
        }
        if ($this->platformType !== null) {
            $result['platform_type'] = $this->platformType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_image_mode'] ?? null) !== null) {
            $obj->anchorImageMode = (int) $v;
        }
        if (($v = $data['android_anchor_title'] ?? null) !== null) {
            $obj->androidAnchorTitle = (string) $v;
        }
        if (($v = $data['android_download_url'] ?? null) !== null) {
            $obj->androidDownloadUrl = (string) $v;
        }
        if (($v = $data['app_images'] ?? null) !== null && is_array($v)) {
            $obj->appImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorAppImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['app_open_url'] ?? null) !== null) {
            $obj->appOpenUrl = (string) $v;
        }
        if (($v = $data['app_tags'] ?? null) !== null && is_array($v)) {
            $obj->appTags = $v;
        }
        if (($v = $data['game_bonus'] ?? null) !== null) {
            $obj->gameBonus = (bool) $v;
        }
        if (($v = $data['game_charatoristic'] ?? null) !== null) {
            $obj->gameCharatoristic = (string) $v;
        }
        if (($v = $data['game_description'] ?? null) !== null) {
            $obj->gameDescription = (string) $v;
        }
        if (($v = $data['game_package_list'] ?? null) !== null && is_array($v)) {
            $obj->gamePackageList = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInner::fromArray($vv), $v);
        }
        if (($v = $data['game_type'] ?? null) !== null) {
            $obj->gameType = (string) $v;
        }
        if (($v = $data['guide_text'] ?? null) !== null) {
            $obj->guideText = (string) $v;
        }
        if (($v = $data['harmony_download_url'] ?? null) !== null) {
            $obj->harmonyDownloadUrl = (string) $v;
        }
        if (($v = $data['head_image_list'] ?? null) !== null && is_array($v)) {
            $obj->headImageList = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorHeadImageListInner::fromArray($vv), $v);
        }
        if (($v = $data['icon_images'] ?? null) !== null && is_array($v)) {
            $obj->iconImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorIconImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['ios_anchor_title'] ?? null) !== null) {
            $obj->iosAnchorTitle = (string) $v;
        }
        if (($v = $data['ios_download_url'] ?? null) !== null) {
            $obj->iosDownloadUrl = (string) $v;
        }
        if (($v = $data['other_description'] ?? null) !== null) {
            $obj->otherDescription = (string) $v;
        }
        if (($v = $data['path_param'] ?? null) !== null) {
            $obj->pathParam = (string) $v;
        }
        if (($v = $data['platform_type'] ?? null) !== null) {
            $obj->platformType = (int) $v;
        }
        return $obj;
    }
}
