<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchor implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $activitiyInfo = null;

    /**
     * @var string
     */
    protected ?string $androidAnchorTitle = null;

    /**
     * @var string
     */
    protected ?string $androidPkgName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorAppIcon
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorAppIcon $appIcon = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var string
     */
    protected ?string $appOpenUrl = null;

    /**
     * @var string
     */
    protected ?string $detailInfo = null;

    /**
     * @var string
     */
    protected ?string $downloadGuideText = null;

    /**
     * 1-橙子建站 2-第三方落地页
     * @var int
     */
    protected ?int $externalType = null;

    /**
     * @var string
     */
    protected ?string $harmonyAnchorTitle = null;

    /**
     * @var string
     */
    protected ?string $iosAnchorTitle = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOfficialActiBannerImage
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOfficialActiBannerImage $officialActiBannerImage = null;

    /**
     * @var string
     */
    protected ?string $officialActiText = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOrangeSiteInfo
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOrangeSiteInfo $orangeSiteInfo = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorProductImage
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorProductImage $productImage = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var float
     */
    protected ?float $productPrice = null;

    /**
     * @var string[]
     */
    protected ?array $productTags = null;

    /**
     * @var string
     */
    protected ?string $serviceInfo = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorThirdSiteInfo
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorThirdSiteInfo $thirdSiteInfo = null;

    /**
     * @return string
     */
    public function getActivitiyInfo(): ?string
    {
        return $this->activitiyInfo;
    }

    /**
     * @param string $activitiyInfo
     * @return self
     */
    public function setActivitiyInfo(?string $activitiyInfo): self
    {
        $this->activitiyInfo = $activitiyInfo;
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
    public function getAndroidPkgName(): ?string
    {
        return $this->androidPkgName;
    }

    /**
     * @param string $androidPkgName
     * @return self
     */
    public function setAndroidPkgName(?string $androidPkgName): self
    {
        $this->androidPkgName = $androidPkgName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorAppIcon
     */
    public function getAppIcon(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorAppIcon
    {
        return $this->appIcon;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorAppIcon $appIcon
     * @return self
     */
    public function setAppIcon(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorAppIcon $appIcon): self
    {
        $this->appIcon = $appIcon;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
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
     * @return string
     */
    public function getDetailInfo(): ?string
    {
        return $this->detailInfo;
    }

    /**
     * @param string $detailInfo
     * @return self
     */
    public function setDetailInfo(?string $detailInfo): self
    {
        $this->detailInfo = $detailInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadGuideText(): ?string
    {
        return $this->downloadGuideText;
    }

    /**
     * @param string $downloadGuideText
     * @return self
     */
    public function setDownloadGuideText(?string $downloadGuideText): self
    {
        $this->downloadGuideText = $downloadGuideText;
        return $this;
    }

    /**
     * 1-橙子建站 2-第三方落地页
     * @return int
     */
    public function getExternalType(): ?int
    {
        return $this->externalType;
    }

    /**
     * 1-橙子建站 2-第三方落地页
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
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOfficialActiBannerImage
     */
    public function getOfficialActiBannerImage(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOfficialActiBannerImage
    {
        return $this->officialActiBannerImage;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOfficialActiBannerImage $officialActiBannerImage
     * @return self
     */
    public function setOfficialActiBannerImage(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOfficialActiBannerImage $officialActiBannerImage): self
    {
        $this->officialActiBannerImage = $officialActiBannerImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficialActiText(): ?string
    {
        return $this->officialActiText;
    }

    /**
     * @param string $officialActiText
     * @return self
     */
    public function setOfficialActiText(?string $officialActiText): self
    {
        $this->officialActiText = $officialActiText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOrangeSiteInfo
     */
    public function getOrangeSiteInfo(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOrangeSiteInfo
    {
        return $this->orangeSiteInfo;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOrangeSiteInfo $orangeSiteInfo
     * @return self
     */
    public function setOrangeSiteInfo(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOrangeSiteInfo $orangeSiteInfo): self
    {
        $this->orangeSiteInfo = $orangeSiteInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorProductImage
     */
    public function getProductImage(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorProductImage
    {
        return $this->productImage;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorProductImage $productImage
     * @return self
     */
    public function setProductImage(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorProductImage $productImage): self
    {
        $this->productImage = $productImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductPrice(): ?float
    {
        return $this->productPrice;
    }

    /**
     * @param float $productPrice
     * @return self
     */
    public function setProductPrice(?float $productPrice): self
    {
        $this->productPrice = $productPrice;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProductTags(): ?array
    {
        return $this->productTags;
    }

    /**
     * @param string[] $productTags
     * @return self
     */
    public function setProductTags(?array $productTags): self
    {
        $this->productTags = $productTags;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceInfo(): ?string
    {
        return $this->serviceInfo;
    }

    /**
     * @param string $serviceInfo
     * @return self
     */
    public function setServiceInfo(?string $serviceInfo): self
    {
        $this->serviceInfo = $serviceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorThirdSiteInfo
     */
    public function getThirdSiteInfo(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorThirdSiteInfo
    {
        return $this->thirdSiteInfo;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorThirdSiteInfo $thirdSiteInfo
     * @return self
     */
    public function setThirdSiteInfo(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorThirdSiteInfo $thirdSiteInfo): self
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
        if ($this->activitiyInfo !== null) {
            $result['activitiy_info'] = $this->activitiyInfo;
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
        if (($v = $data['activitiy_info'] ?? null) !== null) {
            $obj->activitiyInfo = (string) $v;
        }
        if (($v = $data['android_anchor_title'] ?? null) !== null) {
            $obj->androidAnchorTitle = (string) $v;
        }
        if (($v = $data['android_pkg_name'] ?? null) !== null) {
            $obj->androidPkgName = (string) $v;
        }
        if (($v = $data['app_icon'] ?? null) !== null && is_array($v)) {
            $obj->appIcon = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorAppIcon::fromArray($v);
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
            $obj->officialActiBannerImage = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOfficialActiBannerImage::fromArray($v);
        }
        if (($v = $data['official_acti_text'] ?? null) !== null) {
            $obj->officialActiText = (string) $v;
        }
        if (($v = $data['orange_site_info'] ?? null) !== null && is_array($v)) {
            $obj->orangeSiteInfo = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorOrangeSiteInfo::fromArray($v);
        }
        if (($v = $data['product_image'] ?? null) !== null && is_array($v)) {
            $obj->productImage = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorProductImage::fromArray($v);
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
            $obj->thirdSiteInfo = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorThirdSiteInfo::fromArray($v);
        }
        return $obj;
    }
}
