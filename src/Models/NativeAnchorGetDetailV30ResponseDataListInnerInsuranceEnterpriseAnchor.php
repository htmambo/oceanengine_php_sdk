<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchor implements \JsonSerializable
{
    /**
     * 详情介绍，1-18个字
     * @var string
     */
    protected ?string $bannerDescription = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorBannerImage
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorBannerImage $bannerImage = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn
     */
    protected ?string $conversionBtn = null;

    /**
     * 点击按钮时的跳转链接，此处填写的跳转链接会应用到“转化按钮”与“详情介绍”，以http开头
     * @var string
     */
    protected ?string $detailUrl = null;

    /**
     * 产品描述
     * @var string[]
     */
    protected ?array $productDescriptions = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorProductImage
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorProductImage $productImage = null;

    /**
     * 产品详情下的产品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 服务描述，1-6字
     * @var string
     */
    protected ?string $productServiceDescription = null;

    /**
     * 产品特点，最多返回3个
     * @var string[]
     */
    protected ?array $productTags = null;

    /**
     * 产品名称，1-15字
     * @var string
     */
    protected ?string $productTitle = null;

    /**
     * 单项服务名称，5-10组
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorSingleProductInfoInner[]
     */
    protected ?array $singleProductInfo = null;

    /**
     * 详情介绍，1-18个字
     * @return string
     */
    public function getBannerDescription(): ?string
    {
        return $this->bannerDescription;
    }

    /**
     * 详情介绍，1-18个字
     * @param string $bannerDescription
     * @return self
     */
    public function setBannerDescription(?string $bannerDescription): self
    {
        $this->bannerDescription = $bannerDescription;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorBannerImage
     */
    public function getBannerImage(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorBannerImage
    {
        return $this->bannerImage;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorBannerImage $bannerImage
     * @return self
     */
    public function setBannerImage(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorBannerImage $bannerImage): self
    {
        $this->bannerImage = $bannerImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn
     */
    public function getConversionBtn(): ?string
    {
        return $this->conversionBtn;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn $conversionBtn
     * @return self
     */
    public function setConversionBtn(?string $conversionBtn): self
    {
        $this->conversionBtn = $conversionBtn;
        return $this;
    }

    /**
     * 点击按钮时的跳转链接，此处填写的跳转链接会应用到“转化按钮”与“详情介绍”，以http开头
     * @return string
     */
    public function getDetailUrl(): ?string
    {
        return $this->detailUrl;
    }

    /**
     * 点击按钮时的跳转链接，此处填写的跳转链接会应用到“转化按钮”与“详情介绍”，以http开头
     * @param string $detailUrl
     * @return self
     */
    public function setDetailUrl(?string $detailUrl): self
    {
        $this->detailUrl = $detailUrl;
        return $this;
    }

    /**
     * 产品描述
     * @return string[]
     */
    public function getProductDescriptions(): ?array
    {
        return $this->productDescriptions;
    }

    /**
     * 产品描述
     * @param string[] $productDescriptions
     * @return self
     */
    public function setProductDescriptions(?array $productDescriptions): self
    {
        $this->productDescriptions = $productDescriptions;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorProductImage
     */
    public function getProductImage(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorProductImage
    {
        return $this->productImage;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorProductImage $productImage
     * @return self
     */
    public function setProductImage(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorProductImage $productImage): self
    {
        $this->productImage = $productImage;
        return $this;
    }

    /**
     * 产品详情下的产品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 产品详情下的产品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 服务描述，1-6字
     * @return string
     */
    public function getProductServiceDescription(): ?string
    {
        return $this->productServiceDescription;
    }

    /**
     * 服务描述，1-6字
     * @param string $productServiceDescription
     * @return self
     */
    public function setProductServiceDescription(?string $productServiceDescription): self
    {
        $this->productServiceDescription = $productServiceDescription;
        return $this;
    }

    /**
     * 产品特点，最多返回3个
     * @return string[]
     */
    public function getProductTags(): ?array
    {
        return $this->productTags;
    }

    /**
     * 产品特点，最多返回3个
     * @param string[] $productTags
     * @return self
     */
    public function setProductTags(?array $productTags): self
    {
        $this->productTags = $productTags;
        return $this;
    }

    /**
     * 产品名称，1-15字
     * @return string
     */
    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    /**
     * 产品名称，1-15字
     * @param string $productTitle
     * @return self
     */
    public function setProductTitle(?string $productTitle): self
    {
        $this->productTitle = $productTitle;
        return $this;
    }

    /**
     * 单项服务名称，5-10组
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorSingleProductInfoInner[]
     */
    public function getSingleProductInfo(): ?array
    {
        return $this->singleProductInfo;
    }

    /**
     * 单项服务名称，5-10组
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorSingleProductInfoInner[] $singleProductInfo
     * @return self
     */
    public function setSingleProductInfo(?array $singleProductInfo): self
    {
        $this->singleProductInfo = $singleProductInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bannerDescription !== null) {
            $result['banner_description'] = $this->bannerDescription;
        }
        if ($this->bannerImage !== null) {
            $result['banner_image'] = $this->bannerImage;
        }
        if ($this->conversionBtn !== null) {
            $result['conversion_btn'] = $this->conversionBtn;
        }
        if ($this->detailUrl !== null) {
            $result['detail_url'] = $this->detailUrl;
        }
        if ($this->productDescriptions !== null) {
            $result['product_descriptions'] = $this->productDescriptions;
        }
        if ($this->productImage !== null) {
            $result['product_image'] = $this->productImage;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productServiceDescription !== null) {
            $result['product_service_description'] = $this->productServiceDescription;
        }
        if ($this->productTags !== null) {
            $result['product_tags'] = $this->productTags;
        }
        if ($this->productTitle !== null) {
            $result['product_title'] = $this->productTitle;
        }
        if ($this->singleProductInfo !== null) {
            $result['single_product_info'] = $this->singleProductInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['banner_description'] ?? null) !== null) {
            $obj->bannerDescription = (string) $v;
        }
        if (($v = $data['banner_image'] ?? null) !== null && is_array($v)) {
            $obj->bannerImage = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorBannerImage::fromArray($v);
        }
        if (($v = $data['conversion_btn'] ?? null) !== null) {
            $obj->conversionBtn = (string) $v;
        }
        if (($v = $data['detail_url'] ?? null) !== null) {
            $obj->detailUrl = (string) $v;
        }
        if (($v = $data['product_descriptions'] ?? null) !== null && is_array($v)) {
            $obj->productDescriptions = $v;
        }
        if (($v = $data['product_image'] ?? null) !== null && is_array($v)) {
            $obj->productImage = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorProductImage::fromArray($v);
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_service_description'] ?? null) !== null) {
            $obj->productServiceDescription = (string) $v;
        }
        if (($v = $data['product_tags'] ?? null) !== null && is_array($v)) {
            $obj->productTags = $v;
        }
        if (($v = $data['product_title'] ?? null) !== null) {
            $obj->productTitle = (string) $v;
        }
        if (($v = $data['single_product_info'] ?? null) !== null && is_array($v)) {
            $obj->singleProductInfo = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchorSingleProductInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
