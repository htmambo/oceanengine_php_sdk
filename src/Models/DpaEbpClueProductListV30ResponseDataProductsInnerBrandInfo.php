<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $brandId = null;

    /**
     * @var string
     */
    protected ?string $brandLogo = null;

    /**
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * 所属集团名称
     * @var string
     */
    protected ?string $brandOwner = null;

    /**
     * @var string
     */
    protected ?string $enBrand = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfoTargetUrl
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfoTargetUrl $targetUrl = null;

    /**
     * @return string
     */
    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    /**
     * @param string $brandId
     * @return self
     */
    public function setBrandId(?string $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandLogo(): ?string
    {
        return $this->brandLogo;
    }

    /**
     * @param string $brandLogo
     * @return self
     */
    public function setBrandLogo(?string $brandLogo): self
    {
        $this->brandLogo = $brandLogo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * 所属集团名称
     * @return string
     */
    public function getBrandOwner(): ?string
    {
        return $this->brandOwner;
    }

    /**
     * 所属集团名称
     * @param string $brandOwner
     * @return self
     */
    public function setBrandOwner(?string $brandOwner): self
    {
        $this->brandOwner = $brandOwner;
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
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfoTargetUrl
     */
    public function getTargetUrl(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfoTargetUrl
    {
        return $this->targetUrl;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfoTargetUrl $targetUrl
     * @return self
     */
    public function setTargetUrl(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfoTargetUrl $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
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
        if ($this->brandOwner !== null) {
            $result['brand_owner'] = $this->brandOwner;
        }
        if ($this->enBrand !== null) {
            $result['en_brand'] = $this->enBrand;
        }
        if ($this->targetUrl !== null) {
            $result['target_url'] = $this->targetUrl;
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
        if (($v = $data['brand_owner'] ?? null) !== null) {
            $obj->brandOwner = (string) $v;
        }
        if (($v = $data['en_brand'] ?? null) !== null) {
            $obj->enBrand = (string) $v;
        }
        if (($v = $data['target_url'] ?? null) !== null && is_array($v)) {
            $obj->targetUrl = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfoTargetUrl::fromArray($v);
        }
        return $obj;
    }
}
