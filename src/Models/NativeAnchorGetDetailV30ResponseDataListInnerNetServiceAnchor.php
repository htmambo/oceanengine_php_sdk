<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchor implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $anchorImageMode = null;

    /**
     * @var string
     */
    protected ?string $androidAnchorTitle = null;

    /**
     * @var string
     */
    protected ?string $androidDownloadUrl = null;

    /**
     * @var string
     */
    protected ?string $appDescription = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorAppImagesInner[]
     */
    protected ?array $appImages = null;

    /**
     * @var string
     */
    protected ?string $appOpenUrl = null;

    /**
     * @var string[]
     */
    protected ?array $appTags = null;

    /**
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
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorHeadImageListInner[]
     */
    protected ?array $headImageList = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorIconImagesInner[]
     */
    protected ?array $iconImages = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var string
     */
    protected ?string $iosAnchorTitle = null;

    /**
     * @var string
     */
    protected ?string $iosDownloadUrl = null;

    /**
     * @var string
     */
    protected ?string $microAppName = null;

    /**
     * @var string
     */
    protected ?string $microAppPath = null;

    /**
     * @var string
     */
    protected ?string $microAppUserName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType
     */
    protected ?string $netServiceType = null;

    /**
     * @var string
     */
    protected ?string $novelChapter = null;

    /**
     * @var string
     */
    protected ?string $pathParam = null;

    /**
     * 配置平台（1:不限,2:安卓,3:iOS）
     * @var int
     */
    protected ?int $platformType = null;

    /**
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * @var string
     */
    protected ?string $wechatExternalUrl = null;

    /**
     * @var int
     */
    protected ?int $wechatPackageId = null;

    /**
     * @return int
     */
    public function getAnchorImageMode(): ?int
    {
        return $this->anchorImageMode;
    }

    /**
     * @param int $anchorImageMode
     * @return self
     */
    public function setAnchorImageMode(?int $anchorImageMode): self
    {
        $this->anchorImageMode = $anchorImageMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAndroidAnchorTitle(): ?string
    {
        return $this->androidAnchorTitle;
    }

    /**
     * @param string $androidAnchorTitle
     * @return self
     */
    public function setAndroidAnchorTitle(?string $androidAnchorTitle): self
    {
        $this->androidAnchorTitle = $androidAnchorTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getAndroidDownloadUrl(): ?string
    {
        return $this->androidDownloadUrl;
    }

    /**
     * @param string $androidDownloadUrl
     * @return self
     */
    public function setAndroidDownloadUrl(?string $androidDownloadUrl): self
    {
        $this->androidDownloadUrl = $androidDownloadUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppDescription(): ?string
    {
        return $this->appDescription;
    }

    /**
     * @param string $appDescription
     * @return self
     */
    public function setAppDescription(?string $appDescription): self
    {
        $this->appDescription = $appDescription;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorAppImagesInner[]
     */
    public function getAppImages(): ?array
    {
        return $this->appImages;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorAppImagesInner[] $appImages
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
     * @return string[]
     */
    public function getAppTags(): ?array
    {
        return $this->appTags;
    }

    /**
     * @param string[] $appTags
     * @return self
     */
    public function setAppTags(?array $appTags): self
    {
        $this->appTags = $appTags;
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
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorHeadImageListInner[]
     */
    public function getHeadImageList(): ?array
    {
        return $this->headImageList;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorHeadImageListInner[] $headImageList
     * @return self
     */
    public function setHeadImageList(?array $headImageList): self
    {
        $this->headImageList = $headImageList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorIconImagesInner[]
     */
    public function getIconImages(): ?array
    {
        return $this->iconImages;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorIconImagesInner[] $iconImages
     * @return self
     */
    public function setIconImages(?array $iconImages): self
    {
        $this->iconImages = $iconImages;
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
    public function getIosAnchorTitle(): ?string
    {
        return $this->iosAnchorTitle;
    }

    /**
     * @param string $iosAnchorTitle
     * @return self
     */
    public function setIosAnchorTitle(?string $iosAnchorTitle): self
    {
        $this->iosAnchorTitle = $iosAnchorTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosDownloadUrl(): ?string
    {
        return $this->iosDownloadUrl;
    }

    /**
     * @param string $iosDownloadUrl
     * @return self
     */
    public function setIosDownloadUrl(?string $iosDownloadUrl): self
    {
        $this->iosDownloadUrl = $iosDownloadUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getMicroAppName(): ?string
    {
        return $this->microAppName;
    }

    /**
     * @param string $microAppName
     * @return self
     */
    public function setMicroAppName(?string $microAppName): self
    {
        $this->microAppName = $microAppName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMicroAppPath(): ?string
    {
        return $this->microAppPath;
    }

    /**
     * @param string $microAppPath
     * @return self
     */
    public function setMicroAppPath(?string $microAppPath): self
    {
        $this->microAppPath = $microAppPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getMicroAppUserName(): ?string
    {
        return $this->microAppUserName;
    }

    /**
     * @param string $microAppUserName
     * @return self
     */
    public function setMicroAppUserName(?string $microAppUserName): self
    {
        $this->microAppUserName = $microAppUserName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType
     */
    public function getNetServiceType(): ?string
    {
        return $this->netServiceType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType $netServiceType
     * @return self
     */
    public function setNetServiceType(?string $netServiceType): self
    {
        $this->netServiceType = $netServiceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getNovelChapter(): ?string
    {
        return $this->novelChapter;
    }

    /**
     * @param string $novelChapter
     * @return self
     */
    public function setNovelChapter(?string $novelChapter): self
    {
        $this->novelChapter = $novelChapter;
        return $this;
    }

    /**
     * @return string
     */
    public function getPathParam(): ?string
    {
        return $this->pathParam;
    }

    /**
     * @param string $pathParam
     * @return self
     */
    public function setPathParam(?string $pathParam): self
    {
        $this->pathParam = $pathParam;
        return $this;
    }

    /**
     * 配置平台（1:不限,2:安卓,3:iOS）
     * @return int
     */
    public function getPlatformType(): ?int
    {
        return $this->platformType;
    }

    /**
     * 配置平台（1:不限,2:安卓,3:iOS）
     * @param int $platformType
     * @return self
     */
    public function setPlatformType(?int $platformType): self
    {
        $this->platformType = $platformType;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuickAppId(): ?int
    {
        return $this->quickAppId;
    }

    /**
     * @param int $quickAppId
     * @return self
     */
    public function setQuickAppId(?int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWechatExternalUrl(): ?string
    {
        return $this->wechatExternalUrl;
    }

    /**
     * @param string $wechatExternalUrl
     * @return self
     */
    public function setWechatExternalUrl(?string $wechatExternalUrl): self
    {
        $this->wechatExternalUrl = $wechatExternalUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getWechatPackageId(): ?int
    {
        return $this->wechatPackageId;
    }

    /**
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
        if ($this->microAppName !== null) {
            $result['micro_app_name'] = $this->microAppName;
        }
        if ($this->microAppPath !== null) {
            $result['micro_app_path'] = $this->microAppPath;
        }
        if ($this->microAppUserName !== null) {
            $result['micro_app_user_name'] = $this->microAppUserName;
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
            $obj->appImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorAppImagesInner::fromArray($vv), $v);
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
            $obj->headImageList = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorHeadImageListInner::fromArray($vv), $v);
        }
        if (($v = $data['icon_images'] ?? null) !== null && is_array($v)) {
            $obj->iconImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchorIconImagesInner::fromArray($vv), $v);
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
        if (($v = $data['micro_app_name'] ?? null) !== null) {
            $obj->microAppName = (string) $v;
        }
        if (($v = $data['micro_app_path'] ?? null) !== null) {
            $obj->microAppPath = (string) $v;
        }
        if (($v = $data['micro_app_user_name'] ?? null) !== null) {
            $obj->microAppUserName = (string) $v;
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
