<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchor implements \JsonSerializable
{
    /**
     * 活动信息文案，长度：1～20
     * @var string
     */
    protected ?string $activityInfo = null;

    /**
     * 安卓锚点入口标题字段，长度：1～12
     * @var string
     */
    protected ?string $androidAnchorTitle = null;

    /**
     * 安卓包名
     * @var string
     */
    protected ?string $androidPkgName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorAppIcon
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorAppIcon $appIcon = null;

    /**
     * 应用名称，长度：1～6
     * @var string
     */
    protected ?string $appName = null;

    /**
     * 应用吊起链接
     * @var string
     */
    protected ?string $appOpenUrl = null;

    /**
     * 详情信息文案，长度：1～20
     * @var string
     */
    protected ?string $detailInfo = null;

    /**
     * APP下载引导文案，长度：1～12
     * @var string
     */
    protected ?string $downloadGuideText = null;

    /**
     * 跳转链接类型枚举，1：橙子建站，橙子建站落地页设置字段必填；2：第三方落地页，第三方落地页设置字段必填
     * @var int
     */
    protected ?int $externalType = null;

    /**
     * @var string
     */
    protected ?string $harmonyAnchorTitle = null;

    /**
     * ios 锚点入口标题字段，长度：1～12
     * @var string
     */
    protected ?string $iosAnchorTitle = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOfficialActiBannerImage
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOfficialActiBannerImage $officialActiBannerImage = null;

    /**
     * 官方活动描述详情，长度：1～15
     * @var string
     */
    protected ?string $officialActiText = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOrangeSiteInfo
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOrangeSiteInfo $orangeSiteInfo = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorProductImage
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorProductImage $productImage = null;

    /**
     * 商品名称，长度1～10
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 商品价格（整数，且单位：元）
     * @var float
     */
    protected ?float $productPrice = null;

    /**
     * 商品标签列表，每个标签长度：1～4，标签个数：1～3
     * @var string[]
     */
    protected ?array $productTags = null;

    /**
     * 服务信息文案，长度：1～20
     * @var string
     */
    protected ?string $serviceInfo = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorThirdSiteInfo
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorThirdSiteInfo $thirdSiteInfo = null;

    /**
     * 活动信息文案，长度：1～20
     * @return string
     */
    public function getActivityInfo(): ?string
    {
        return $this->activityInfo;
    }

    /**
     * 活动信息文案，长度：1～20
     * @param string $activityInfo
     * @return self
     */
    public function setActivityInfo(?string $activityInfo): self
    {
        $this->activityInfo = $activityInfo;
        return $this;
    }

    /**
     * 安卓锚点入口标题字段，长度：1～12
     * @return string
     */
    public function getAndroidAnchorTitle(): ?string
    {
        return $this->androidAnchorTitle;
    }

    /**
     * 安卓锚点入口标题字段，长度：1～12
     * @param string $androidAnchorTitle
     * @return self
     */
    public function setAndroidAnchorTitle(?string $androidAnchorTitle): self
    {
        $this->androidAnchorTitle = $androidAnchorTitle;
        return $this;
    }

    /**
     * 安卓包名
     * @return string
     */
    public function getAndroidPkgName(): ?string
    {
        return $this->androidPkgName;
    }

    /**
     * 安卓包名
     * @param string $androidPkgName
     * @return self
     */
    public function setAndroidPkgName(?string $androidPkgName): self
    {
        $this->androidPkgName = $androidPkgName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorAppIcon
     */
    public function getAppIcon(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorAppIcon
    {
        return $this->appIcon;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorAppIcon $appIcon
     * @return self
     */
    public function setAppIcon(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorAppIcon $appIcon): self
    {
        $this->appIcon = $appIcon;
        return $this;
    }

    /**
     * 应用名称，长度：1～6
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * 应用名称，长度：1～6
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * 应用吊起链接
     * @return string
     */
    public function getAppOpenUrl(): ?string
    {
        return $this->appOpenUrl;
    }

    /**
     * 应用吊起链接
     * @param string $appOpenUrl
     * @return self
     */
    public function setAppOpenUrl(?string $appOpenUrl): self
    {
        $this->appOpenUrl = $appOpenUrl;
        return $this;
    }

    /**
     * 详情信息文案，长度：1～20
     * @return string
     */
    public function getDetailInfo(): ?string
    {
        return $this->detailInfo;
    }

    /**
     * 详情信息文案，长度：1～20
     * @param string $detailInfo
     * @return self
     */
    public function setDetailInfo(?string $detailInfo): self
    {
        $this->detailInfo = $detailInfo;
        return $this;
    }

    /**
     * APP下载引导文案，长度：1～12
     * @return string
     */
    public function getDownloadGuideText(): ?string
    {
        return $this->downloadGuideText;
    }

    /**
     * APP下载引导文案，长度：1～12
     * @param string $downloadGuideText
     * @return self
     */
    public function setDownloadGuideText(?string $downloadGuideText): self
    {
        $this->downloadGuideText = $downloadGuideText;
        return $this;
    }

    /**
     * 跳转链接类型枚举，1：橙子建站，橙子建站落地页设置字段必填；2：第三方落地页，第三方落地页设置字段必填
     * @return int
     */
    public function getExternalType(): ?int
    {
        return $this->externalType;
    }

    /**
     * 跳转链接类型枚举，1：橙子建站，橙子建站落地页设置字段必填；2：第三方落地页，第三方落地页设置字段必填
     * @param int $externalType
     * @return self
     */
    public function setExternalType(?int $externalType): self
    {
        $this->externalType = $externalType;
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
     * ios 锚点入口标题字段，长度：1～12
     * @return string
     */
    public function getIosAnchorTitle(): ?string
    {
        return $this->iosAnchorTitle;
    }

    /**
     * ios 锚点入口标题字段，长度：1～12
     * @param string $iosAnchorTitle
     * @return self
     */
    public function setIosAnchorTitle(?string $iosAnchorTitle): self
    {
        $this->iosAnchorTitle = $iosAnchorTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOfficialActiBannerImage
     */
    public function getOfficialActiBannerImage(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOfficialActiBannerImage
    {
        return $this->officialActiBannerImage;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOfficialActiBannerImage $officialActiBannerImage
     * @return self
     */
    public function setOfficialActiBannerImage(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOfficialActiBannerImage $officialActiBannerImage): self
    {
        $this->officialActiBannerImage = $officialActiBannerImage;
        return $this;
    }

    /**
     * 官方活动描述详情，长度：1～15
     * @return string
     */
    public function getOfficialActiText(): ?string
    {
        return $this->officialActiText;
    }

    /**
     * 官方活动描述详情，长度：1～15
     * @param string $officialActiText
     * @return self
     */
    public function setOfficialActiText(?string $officialActiText): self
    {
        $this->officialActiText = $officialActiText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOrangeSiteInfo
     */
    public function getOrangeSiteInfo(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOrangeSiteInfo
    {
        return $this->orangeSiteInfo;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOrangeSiteInfo $orangeSiteInfo
     * @return self
     */
    public function setOrangeSiteInfo(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOrangeSiteInfo $orangeSiteInfo): self
    {
        $this->orangeSiteInfo = $orangeSiteInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorProductImage
     */
    public function getProductImage(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorProductImage
    {
        return $this->productImage;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorProductImage $productImage
     * @return self
     */
    public function setProductImage(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorProductImage $productImage): self
    {
        $this->productImage = $productImage;
        return $this;
    }

    /**
     * 商品名称，长度1～10
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名称，长度1～10
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 商品价格（整数，且单位：元）
     * @return float
     */
    public function getProductPrice(): ?float
    {
        return $this->productPrice;
    }

    /**
     * 商品价格（整数，且单位：元）
     * @param float $productPrice
     * @return self
     */
    public function setProductPrice(?float $productPrice): self
    {
        $this->productPrice = $productPrice;
        return $this;
    }

    /**
     * 商品标签列表，每个标签长度：1～4，标签个数：1～3
     * @return string[]
     */
    public function getProductTags(): ?array
    {
        return $this->productTags;
    }

    /**
     * 商品标签列表，每个标签长度：1～4，标签个数：1～3
     * @param string[] $productTags
     * @return self
     */
    public function setProductTags(?array $productTags): self
    {
        $this->productTags = $productTags;
        return $this;
    }

    /**
     * 服务信息文案，长度：1～20
     * @return string
     */
    public function getServiceInfo(): ?string
    {
        return $this->serviceInfo;
    }

    /**
     * 服务信息文案，长度：1～20
     * @param string $serviceInfo
     * @return self
     */
    public function setServiceInfo(?string $serviceInfo): self
    {
        $this->serviceInfo = $serviceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorThirdSiteInfo
     */
    public function getThirdSiteInfo(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorThirdSiteInfo
    {
        return $this->thirdSiteInfo;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorThirdSiteInfo $thirdSiteInfo
     * @return self
     */
    public function setThirdSiteInfo(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorThirdSiteInfo $thirdSiteInfo): self
    {
        $this->thirdSiteInfo = $thirdSiteInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activityInfo !== null) {
            $result['activity_info'] = $this->activityInfo;
        }
        if ($this->androidAnchorTitle !== null) {
            $result['android_anchor_title'] = $this->androidAnchorTitle;
        }
        if ($this->androidPkgName !== null) {
            $result['android_pkg_name'] = $this->androidPkgName;
        }
        if ($this->appIcon !== null) {
            $result['app_icon'] = $this->appIcon;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->appOpenUrl !== null) {
            $result['app_open_url'] = $this->appOpenUrl;
        }
        if ($this->detailInfo !== null) {
            $result['detail_info'] = $this->detailInfo;
        }
        if ($this->downloadGuideText !== null) {
            $result['download_guide_text'] = $this->downloadGuideText;
        }
        if ($this->externalType !== null) {
            $result['external_type'] = $this->externalType;
        }
        if ($this->harmonyAnchorTitle !== null) {
            $result['harmony_anchor_title'] = $this->harmonyAnchorTitle;
        }
        if ($this->iosAnchorTitle !== null) {
            $result['ios_anchor_title'] = $this->iosAnchorTitle;
        }
        if ($this->officialActiBannerImage !== null) {
            $result['official_acti_banner_image'] = $this->officialActiBannerImage;
        }
        if ($this->officialActiText !== null) {
            $result['official_acti_text'] = $this->officialActiText;
        }
        if ($this->orangeSiteInfo !== null) {
            $result['orange_site_info'] = $this->orangeSiteInfo;
        }
        if ($this->productImage !== null) {
            $result['product_image'] = $this->productImage;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productPrice !== null) {
            $result['product_price'] = $this->productPrice;
        }
        if ($this->productTags !== null) {
            $result['product_tags'] = $this->productTags;
        }
        if ($this->serviceInfo !== null) {
            $result['service_info'] = $this->serviceInfo;
        }
        if ($this->thirdSiteInfo !== null) {
            $result['third_site_info'] = $this->thirdSiteInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_info'] ?? null) !== null) {
            $obj->activityInfo = (string) $v;
        }
        if (($v = $data['android_anchor_title'] ?? null) !== null) {
            $obj->androidAnchorTitle = (string) $v;
        }
        if (($v = $data['android_pkg_name'] ?? null) !== null) {
            $obj->androidPkgName = (string) $v;
        }
        if (($v = $data['app_icon'] ?? null) !== null && is_array($v)) {
            $obj->appIcon = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorAppIcon::fromArray($v);
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['app_open_url'] ?? null) !== null) {
            $obj->appOpenUrl = (string) $v;
        }
        if (($v = $data['detail_info'] ?? null) !== null) {
            $obj->detailInfo = (string) $v;
        }
        if (($v = $data['download_guide_text'] ?? null) !== null) {
            $obj->downloadGuideText = (string) $v;
        }
        if (($v = $data['external_type'] ?? null) !== null) {
            $obj->externalType = (int) $v;
        }
        if (($v = $data['harmony_anchor_title'] ?? null) !== null) {
            $obj->harmonyAnchorTitle = (string) $v;
        }
        if (($v = $data['ios_anchor_title'] ?? null) !== null) {
            $obj->iosAnchorTitle = (string) $v;
        }
        if (($v = $data['official_acti_banner_image'] ?? null) !== null && is_array($v)) {
            $obj->officialActiBannerImage = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOfficialActiBannerImage::fromArray($v);
        }
        if (($v = $data['official_acti_text'] ?? null) !== null) {
            $obj->officialActiText = (string) $v;
        }
        if (($v = $data['orange_site_info'] ?? null) !== null && is_array($v)) {
            $obj->orangeSiteInfo = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOrangeSiteInfo::fromArray($v);
        }
        if (($v = $data['product_image'] ?? null) !== null && is_array($v)) {
            $obj->productImage = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorProductImage::fromArray($v);
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_price'] ?? null) !== null) {
            $obj->productPrice = (float) $v;
        }
        if (($v = $data['product_tags'] ?? null) !== null && is_array($v)) {
            $obj->productTags = $v;
        }
        if (($v = $data['service_info'] ?? null) !== null) {
            $obj->serviceInfo = (string) $v;
        }
        if (($v = $data['third_site_info'] ?? null) !== null && is_array($v)) {
            $obj->thirdSiteInfo = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorThirdSiteInfo::fromArray($v);
        }
        return $obj;
    }
}
