<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchor implements \JsonSerializable
{
    /**
     * APP图片比例，100：尺寸为2：1的横图，200：尺寸为3：5的竖图
     * @var int
     */
    protected ?int $anchorImageMode = null;

    /**
     * 安卓锚点入口标题字段
     * @var string
     */
    protected ?string $androidAnchorTitle = null;

    /**
     * 安卓下载链接，net_service_type为微信小程序场景下不用传入
     * @var string
     */
    protected ?string $androidDownloadUrl = null;

    /**
     * APP详情，1～100
     * @var string
     */
    protected ?string $appDescription = null;

    /**
     * APP图片，图片个数 3～8
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorAppImagesInner[]
     */
    protected ?array $appImages = null;

    /**
     * app调起链接
     * @var string
     */
    protected ?string $appOpenUrl = null;

    /**
     * APP标签列表，每个标签长度：1～4；标签个数：1～3
     * @var string[]
     */
    protected ?array $appTags = null;

    /**
     * 引导文案，长度：1～15
     * @var string
     */
    protected ?string $guideText = null;

    /**
     * @var string
     */
    protected ?string $harmonyAnchorTitle = null;

    /**
     * @var string
     */
    protected ?string $harmonyDownloadUrl = null;

    /**
     * 锚点头部图片list，推荐尺寸为2：1的横图
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorHeadImageListInner[]
     */
    protected ?array $headImageList = null;

    /**
     * 小程序图片list，当前锚点类型且net_service_type为'MICRO_APP' 必填，比例为1：1，最多一个
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorIconImagesInner[]
     */
    protected ?array $iconImages = null;

    /**
     * 微信小程序ID，当前锚点类型且net_service_type为MICRO_APP必填
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * iOS 锚点入口标题字段
     * @var string
     */
    protected ?string $iosAnchorTitle = null;

    /**
     * iOS下载链接，net_service_type为微信小程序场景下不用传入
     * @var string
     */
    protected ?string $iosDownloadUrl = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType
     */
    protected ?string $netServiceType = null;

    /**
     * 小说章节预览，最多9999个字
     * @var string
     */
    protected ?string $novelChapter = null;

    /**
     * 微信小游戏/小程序路径参数
     * @var string
     */
    protected ?string $pathParam = null;

    /**
     * 配置平台，net_service_type为微信小程序场景下不用传入（1:不限,2:安卓,3:iOS）不限：安卓下载链接和iOS下载链接必填；安卓：安卓下载链接必填，iOS下载链接不填写；iOS：iOS下载链接必填
     * @var int
     */
    protected ?int $platformType = null;

    /**
     * 快应用ID，当前锚点类型且net_service_type为QUICK_APP必填
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * 微信外跳链接
     * @var string
     */
    protected ?string $wechatExternalUrl = null;

    /**
     * 微信包id
     * @var int
     */
    protected ?int $wechatPackageId = null;

    /**
     * APP图片比例，100：尺寸为2：1的横图，200：尺寸为3：5的竖图
     * @return int
     */
    public function getAnchorImageMode(): ?int
    {
        return $this->anchorImageMode;
    }

    /**
     * APP图片比例，100：尺寸为2：1的横图，200：尺寸为3：5的竖图
     * @param int $anchorImageMode
     * @return self
     */
    public function setAnchorImageMode(?int $anchorImageMode): self
    {
        $this->anchorImageMode = $anchorImageMode;
        return $this;
    }

    /**
     * 安卓锚点入口标题字段
     * @return string
     */
    public function getAndroidAnchorTitle(): ?string
    {
        return $this->androidAnchorTitle;
    }

    /**
     * 安卓锚点入口标题字段
     * @param string $androidAnchorTitle
     * @return self
     */
    public function setAndroidAnchorTitle(?string $androidAnchorTitle): self
    {
        $this->androidAnchorTitle = $androidAnchorTitle;
        return $this;
    }

    /**
     * 安卓下载链接，net_service_type为微信小程序场景下不用传入
     * @return string
     */
    public function getAndroidDownloadUrl(): ?string
    {
        return $this->androidDownloadUrl;
    }

    /**
     * 安卓下载链接，net_service_type为微信小程序场景下不用传入
     * @param string $androidDownloadUrl
     * @return self
     */
    public function setAndroidDownloadUrl(?string $androidDownloadUrl): self
    {
        $this->androidDownloadUrl = $androidDownloadUrl;
        return $this;
    }

    /**
     * APP详情，1～100
     * @return string
     */
    public function getAppDescription(): ?string
    {
        return $this->appDescription;
    }

    /**
     * APP详情，1～100
     * @param string $appDescription
     * @return self
     */
    public function setAppDescription(?string $appDescription): self
    {
        $this->appDescription = $appDescription;
        return $this;
    }

    /**
     * APP图片，图片个数 3～8
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorAppImagesInner[]
     */
    public function getAppImages(): ?array
    {
        return $this->appImages;
    }

    /**
     * APP图片，图片个数 3～8
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorAppImagesInner[] $appImages
     * @return self
     */
    public function setAppImages(?array $appImages): self
    {
        $this->appImages = $appImages;
        return $this;
    }

    /**
     * app调起链接
     * @return string
     */
    public function getAppOpenUrl(): ?string
    {
        return $this->appOpenUrl;
    }

    /**
     * app调起链接
     * @param string $appOpenUrl
     * @return self
     */
    public function setAppOpenUrl(?string $appOpenUrl): self
    {
        $this->appOpenUrl = $appOpenUrl;
        return $this;
    }

    /**
     * APP标签列表，每个标签长度：1～4；标签个数：1～3
     * @return string[]
     */
    public function getAppTags(): ?array
    {
        return $this->appTags;
    }

    /**
     * APP标签列表，每个标签长度：1～4；标签个数：1～3
     * @param string[] $appTags
     * @return self
     */
    public function setAppTags(?array $appTags): self
    {
        $this->appTags = $appTags;
        return $this;
    }

    /**
     * 引导文案，长度：1～15
     * @return string
     */
    public function getGuideText(): ?string
    {
        return $this->guideText;
    }

    /**
     * 引导文案，长度：1～15
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
    public function getHarmonyAnchorTitle(): ?string
    {
        return $this->harmonyAnchorTitle;
    }

    /**
     * @param string $harmonyAnchorTitle
     * @return self
     */
    public function setHarmonyAnchorTitle(?string $harmonyAnchorTitle): self
    {
        $this->harmonyAnchorTitle = $harmonyAnchorTitle;
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
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorHeadImageListInner[]
     */
    public function getHeadImageList(): ?array
    {
        return $this->headImageList;
    }

    /**
     * 锚点头部图片list，推荐尺寸为2：1的横图
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorHeadImageListInner[] $headImageList
     * @return self
     */
    public function setHeadImageList(?array $headImageList): self
    {
        $this->headImageList = $headImageList;
        return $this;
    }

    /**
     * 小程序图片list，当前锚点类型且net_service_type为'MICRO_APP' 必填，比例为1：1，最多一个
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorIconImagesInner[]
     */
    public function getIconImages(): ?array
    {
        return $this->iconImages;
    }

    /**
     * 小程序图片list，当前锚点类型且net_service_type为'MICRO_APP' 必填，比例为1：1，最多一个
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorIconImagesInner[] $iconImages
     * @return self
     */
    public function setIconImages(?array $iconImages): self
    {
        $this->iconImages = $iconImages;
        return $this;
    }

    /**
     * 微信小程序ID，当前锚点类型且net_service_type为MICRO_APP必填
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 微信小程序ID，当前锚点类型且net_service_type为MICRO_APP必填
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * iOS 锚点入口标题字段
     * @return string
     */
    public function getIosAnchorTitle(): ?string
    {
        return $this->iosAnchorTitle;
    }

    /**
     * iOS 锚点入口标题字段
     * @param string $iosAnchorTitle
     * @return self
     */
    public function setIosAnchorTitle(?string $iosAnchorTitle): self
    {
        $this->iosAnchorTitle = $iosAnchorTitle;
        return $this;
    }

    /**
     * iOS下载链接，net_service_type为微信小程序场景下不用传入
     * @return string
     */
    public function getIosDownloadUrl(): ?string
    {
        return $this->iosDownloadUrl;
    }

    /**
     * iOS下载链接，net_service_type为微信小程序场景下不用传入
     * @param string $iosDownloadUrl
     * @return self
     */
    public function setIosDownloadUrl(?string $iosDownloadUrl): self
    {
        $this->iosDownloadUrl = $iosDownloadUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType
     */
    public function getNetServiceType(): ?string
    {
        return $this->netServiceType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType $netServiceType
     * @return self
     */
    public function setNetServiceType(?string $netServiceType): self
    {
        $this->netServiceType = $netServiceType;
        return $this;
    }

    /**
     * 小说章节预览，最多9999个字
     * @return string
     */
    public function getNovelChapter(): ?string
    {
        return $this->novelChapter;
    }

    /**
     * 小说章节预览，最多9999个字
     * @param string $novelChapter
     * @return self
     */
    public function setNovelChapter(?string $novelChapter): self
    {
        $this->novelChapter = $novelChapter;
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
     * 配置平台，net_service_type为微信小程序场景下不用传入（1:不限,2:安卓,3:iOS）不限：安卓下载链接和iOS下载链接必填；安卓：安卓下载链接必填，iOS下载链接不填写；iOS：iOS下载链接必填
     * @return int
     */
    public function getPlatformType(): ?int
    {
        return $this->platformType;
    }

    /**
     * 配置平台，net_service_type为微信小程序场景下不用传入（1:不限,2:安卓,3:iOS）不限：安卓下载链接和iOS下载链接必填；安卓：安卓下载链接必填，iOS下载链接不填写；iOS：iOS下载链接必填
     * @param int $platformType
     * @return self
     */
    public function setPlatformType(?int $platformType): self
    {
        $this->platformType = $platformType;
        return $this;
    }

    /**
     * 快应用ID，当前锚点类型且net_service_type为QUICK_APP必填
     * @return int
     */
    public function getQuickAppId(): ?int
    {
        return $this->quickAppId;
    }

    /**
     * 快应用ID，当前锚点类型且net_service_type为QUICK_APP必填
     * @param int $quickAppId
     * @return self
     */
    public function setQuickAppId(?int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * 微信外跳链接
     * @return string
     */
    public function getWechatExternalUrl(): ?string
    {
        return $this->wechatExternalUrl;
    }

    /**
     * 微信外跳链接
     * @param string $wechatExternalUrl
     * @return self
     */
    public function setWechatExternalUrl(?string $wechatExternalUrl): self
    {
        $this->wechatExternalUrl = $wechatExternalUrl;
        return $this;
    }

    /**
     * 微信包id
     * @return int
     */
    public function getWechatPackageId(): ?int
    {
        return $this->wechatPackageId;
    }

    /**
     * 微信包id
     * @param int $wechatPackageId
     * @return self
     */
    public function setWechatPackageId(?int $wechatPackageId): self
    {
        $this->wechatPackageId = $wechatPackageId;
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
        if ($this->appDescription !== null) {
            $result['app_description'] = $this->appDescription;
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
        if ($this->guideText !== null) {
            $result['guide_text'] = $this->guideText;
        }
        if ($this->harmonyAnchorTitle !== null) {
            $result['harmony_anchor_title'] = $this->harmonyAnchorTitle;
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
        if ($this->netServiceType !== null) {
            $result['net_service_type'] = $this->netServiceType;
        }
        if ($this->novelChapter !== null) {
            $result['novel_chapter'] = $this->novelChapter;
        }
        if ($this->pathParam !== null) {
            $result['path_param'] = $this->pathParam;
        }
        if ($this->platformType !== null) {
            $result['platform_type'] = $this->platformType;
        }
        if ($this->quickAppId !== null) {
            $result['quick_app_id'] = $this->quickAppId;
        }
        if ($this->wechatExternalUrl !== null) {
            $result['wechat_external_url'] = $this->wechatExternalUrl;
        }
        if ($this->wechatPackageId !== null) {
            $result['wechat_package_id'] = $this->wechatPackageId;
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
        if (($v = $data['app_description'] ?? null) !== null) {
            $obj->appDescription = (string) $v;
        }
        if (($v = $data['app_images'] ?? null) !== null && is_array($v)) {
            $obj->appImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorAppImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['app_open_url'] ?? null) !== null) {
            $obj->appOpenUrl = (string) $v;
        }
        if (($v = $data['app_tags'] ?? null) !== null && is_array($v)) {
            $obj->appTags = $v;
        }
        if (($v = $data['guide_text'] ?? null) !== null) {
            $obj->guideText = (string) $v;
        }
        if (($v = $data['harmony_anchor_title'] ?? null) !== null) {
            $obj->harmonyAnchorTitle = (string) $v;
        }
        if (($v = $data['harmony_download_url'] ?? null) !== null) {
            $obj->harmonyDownloadUrl = (string) $v;
        }
        if (($v = $data['head_image_list'] ?? null) !== null && is_array($v)) {
            $obj->headImageList = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorHeadImageListInner::fromArray($vv), $v);
        }
        if (($v = $data['icon_images'] ?? null) !== null && is_array($v)) {
            $obj->iconImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchorIconImagesInner::fromArray($vv), $v);
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
        if (($v = $data['net_service_type'] ?? null) !== null) {
            $obj->netServiceType = (string) $v;
        }
        if (($v = $data['novel_chapter'] ?? null) !== null) {
            $obj->novelChapter = (string) $v;
        }
        if (($v = $data['path_param'] ?? null) !== null) {
            $obj->pathParam = (string) $v;
        }
        if (($v = $data['platform_type'] ?? null) !== null) {
            $obj->platformType = (int) $v;
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
        }
        if (($v = $data['wechat_external_url'] ?? null) !== null) {
            $obj->wechatExternalUrl = (string) $v;
        }
        if (($v = $data['wechat_package_id'] ?? null) !== null) {
            $obj->wechatPackageId = (int) $v;
        }
        return $obj;
    }
}
