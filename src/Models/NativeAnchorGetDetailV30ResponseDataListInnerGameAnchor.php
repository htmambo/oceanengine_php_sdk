<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerGameAnchor implements \JsonSerializable
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
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorAppImagesInner[]
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
     * @var bool
     */
    protected ?bool $gameBonus = null;

    /**
     * @var string
     */
    protected ?string $gameCharatoristic = null;

    /**
     * @var string
     */
    protected ?string $gameDescription = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInner[]
     */
    protected ?array $gamePackageList = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30DataListGameAnchorGameType
     */
    protected ?string $gameType = null;

    /**
     * @var string
     */
    protected ?string $guideText = null;

    /**
     * @var string
     */
    protected ?string $harmonyDownloadUrl = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorHeadImageListInner[]
     */
    protected ?array $headImageList = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorIconImagesInner[]
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
    protected ?string $microAppUserName = null;

    /**
     * @var string
     */
    protected ?string $otherDescription = null;

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
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorAppImagesInner[]
     */
    public function getAppImages(): ?array
    {
        return $this->appImages;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorAppImagesInner[] $appImages
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
     * @return bool
     */
    public function getGameBonus(): ?bool
    {
        return $this->gameBonus;
    }

    /**
     * @param bool $gameBonus
     * @return self
     */
    public function setGameBonus(?bool $gameBonus): self
    {
        $this->gameBonus = $gameBonus;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameCharatoristic(): ?string
    {
        return $this->gameCharatoristic;
    }

    /**
     * @param string $gameCharatoristic
     * @return self
     */
    public function setGameCharatoristic(?string $gameCharatoristic): self
    {
        $this->gameCharatoristic = $gameCharatoristic;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameDescription(): ?string
    {
        return $this->gameDescription;
    }

    /**
     * @param string $gameDescription
     * @return self
     */
    public function setGameDescription(?string $gameDescription): self
    {
        $this->gameDescription = $gameDescription;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInner[]
     */
    public function getGamePackageList(): ?array
    {
        return $this->gamePackageList;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInner[] $gamePackageList
     * @return self
     */
    public function setGamePackageList(?array $gamePackageList): self
    {
        $this->gamePackageList = $gamePackageList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30DataListGameAnchorGameType
     */
    public function getGameType(): ?string
    {
        return $this->gameType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30DataListGameAnchorGameType $gameType
     * @return self
     */
    public function setGameType(?string $gameType): self
    {
        $this->gameType = $gameType;
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
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorHeadImageListInner[]
     */
    public function getHeadImageList(): ?array
    {
        return $this->headImageList;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorHeadImageListInner[] $headImageList
     * @return self
     */
    public function setHeadImageList(?array $headImageList): self
    {
        $this->headImageList = $headImageList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorIconImagesInner[]
     */
    public function getIconImages(): ?array
    {
        return $this->iconImages;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorIconImagesInner[] $iconImages
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
     * @return string
     */
    public function getOtherDescription(): ?string
    {
        return $this->otherDescription;
    }

    /**
     * @param string $otherDescription
     * @return self
     */
    public function setOtherDescription(?string $otherDescription): self
    {
        $this->otherDescription = $otherDescription;
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
        if ($this->microAppName !== null) {
            $result['micro_app_name'] = $this->microAppName;
        }
        if ($this->microAppUserName !== null) {
            $result['micro_app_user_name'] = $this->microAppUserName;
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
            $obj->appImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorAppImagesInner::fromArray($vv), $v);
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
            $obj->gamePackageList = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInner::fromArray($vv), $v);
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
            $obj->headImageList = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorHeadImageListInner::fromArray($vv), $v);
        }
        if (($v = $data['icon_images'] ?? null) !== null && is_array($v)) {
            $obj->iconImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorIconImagesInner::fromArray($vv), $v);
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
        if (($v = $data['micro_app_user_name'] ?? null) !== null) {
            $obj->microAppUserName = (string) $v;
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
