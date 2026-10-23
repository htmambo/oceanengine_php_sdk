<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductDetailV2ResponseDataProductsInnerBrandInfo implements \JsonSerializable
{
    /**
     * 品牌ID
     * @var string
     */
    protected ?string $brandId = null;

    /**
     * 品牌logo
     * @var string
     */
    protected ?string $brandLogo = null;

    /**
     * 品牌名称
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * 品牌默认落地页
     * @var string
     */
    protected ?string $brandUrl = null;

    /**
     * 品牌安卓落地页
     * @var string
     */
    protected ?string $brandUrlAndroidApp = null;

    /**
     * 品牌iOS落地页
     * @var string
     */
    protected ?string $brandUrlIosApp = null;

    /**
     * 品牌H5落地页
     * @var string
     */
    protected ?string $brandUrlMobile = null;

    /**
     * 品牌落地页universal link
     * @var string
     */
    protected ?string $brandUrlUniversalLink = null;

    /**
     * @var string
     */
    protected ?string $enBrand = null;

    /**
     * 品牌ID
     * @return string
     */
    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    /**
     * 品牌ID
     * @param string $brandId
     * @return self
     */
    public function setBrandId(?string $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * 品牌logo
     * @return string
     */
    public function getBrandLogo(): ?string
    {
        return $this->brandLogo;
    }

    /**
     * 品牌logo
     * @param string $brandLogo
     * @return self
     */
    public function setBrandLogo(?string $brandLogo): self
    {
        $this->brandLogo = $brandLogo;
        return $this;
    }

    /**
     * 品牌名称
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * 品牌名称
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * 品牌默认落地页
     * @return string
     */
    public function getBrandUrl(): ?string
    {
        return $this->brandUrl;
    }

    /**
     * 品牌默认落地页
     * @param string $brandUrl
     * @return self
     */
    public function setBrandUrl(?string $brandUrl): self
    {
        $this->brandUrl = $brandUrl;
        return $this;
    }

    /**
     * 品牌安卓落地页
     * @return string
     */
    public function getBrandUrlAndroidApp(): ?string
    {
        return $this->brandUrlAndroidApp;
    }

    /**
     * 品牌安卓落地页
     * @param string $brandUrlAndroidApp
     * @return self
     */
    public function setBrandUrlAndroidApp(?string $brandUrlAndroidApp): self
    {
        $this->brandUrlAndroidApp = $brandUrlAndroidApp;
        return $this;
    }

    /**
     * 品牌iOS落地页
     * @return string
     */
    public function getBrandUrlIosApp(): ?string
    {
        return $this->brandUrlIosApp;
    }

    /**
     * 品牌iOS落地页
     * @param string $brandUrlIosApp
     * @return self
     */
    public function setBrandUrlIosApp(?string $brandUrlIosApp): self
    {
        $this->brandUrlIosApp = $brandUrlIosApp;
        return $this;
    }

    /**
     * 品牌H5落地页
     * @return string
     */
    public function getBrandUrlMobile(): ?string
    {
        return $this->brandUrlMobile;
    }

    /**
     * 品牌H5落地页
     * @param string $brandUrlMobile
     * @return self
     */
    public function setBrandUrlMobile(?string $brandUrlMobile): self
    {
        $this->brandUrlMobile = $brandUrlMobile;
        return $this;
    }

    /**
     * 品牌落地页universal link
     * @return string
     */
    public function getBrandUrlUniversalLink(): ?string
    {
        return $this->brandUrlUniversalLink;
    }

    /**
     * 品牌落地页universal link
     * @param string $brandUrlUniversalLink
     * @return self
     */
    public function setBrandUrlUniversalLink(?string $brandUrlUniversalLink): self
    {
        $this->brandUrlUniversalLink = $brandUrlUniversalLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnBrand(): ?string
    {
        return $this->enBrand;
    }

    /**
     * @param string $enBrand
     * @return self
     */
    public function setEnBrand(?string $enBrand): self
    {
        $this->enBrand = $enBrand;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->brandLogo !== null) {
            $result['brand_logo'] = $this->brandLogo;
        }
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->brandUrl !== null) {
            $result['brand_url'] = $this->brandUrl;
        }
        if ($this->brandUrlAndroidApp !== null) {
            $result['brand_url_android_app'] = $this->brandUrlAndroidApp;
        }
        if ($this->brandUrlIosApp !== null) {
            $result['brand_url_ios_app'] = $this->brandUrlIosApp;
        }
        if ($this->brandUrlMobile !== null) {
            $result['brand_url_mobile'] = $this->brandUrlMobile;
        }
        if ($this->brandUrlUniversalLink !== null) {
            $result['brand_url_universal_link'] = $this->brandUrlUniversalLink;
        }
        if ($this->enBrand !== null) {
            $result['en_brand'] = $this->enBrand;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (string) $v;
        }
        if (($v = $data['brand_logo'] ?? null) !== null) {
            $obj->brandLogo = (string) $v;
        }
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['brand_url'] ?? null) !== null) {
            $obj->brandUrl = (string) $v;
        }
        if (($v = $data['brand_url_android_app'] ?? null) !== null) {
            $obj->brandUrlAndroidApp = (string) $v;
        }
        if (($v = $data['brand_url_ios_app'] ?? null) !== null) {
            $obj->brandUrlIosApp = (string) $v;
        }
        if (($v = $data['brand_url_mobile'] ?? null) !== null) {
            $obj->brandUrlMobile = (string) $v;
        }
        if (($v = $data['brand_url_universal_link'] ?? null) !== null) {
            $obj->brandUrlUniversalLink = (string) $v;
        }
        if (($v = $data['en_brand'] ?? null) !== null) {
            $obj->enBrand = (string) $v;
        }
        return $obj;
    }
}
