<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchor implements \JsonSerializable
{
    /**
     * 必填，落地页链接
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorCreateV30AnchorInfoShoppingCartAnchorLinkType
     */
    protected ?string $linkType = null;

    /**
     * 直达链接，选填
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 必填，商品图片，比例1:1，至少1张
     * @var \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchorProductImagesInner[]
     */
    protected ?array $productImages = null;

    /**
     * 必填，商品价格，最多两位小数
     * @var float
     */
    protected ?float $productPrice = null;

    /**
     * 必填，商品来源，只支持填写淘宝/天猫/京东/拼多多/唯品会/得物
     * @var string
     */
    protected ?string $productSource = null;

    /**
     * 必填，商品标题，不超过35个字
     * @var string
     */
    protected ?string $productTitle = null;

    /**
     * 必填，购物车小标题，不超过10个字
     * @var string
     */
    protected ?string $title = null;

    /**
     * 必填，落地页链接
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * 必填，落地页链接
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorCreateV30AnchorInfoShoppingCartAnchorLinkType
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorCreateV30AnchorInfoShoppingCartAnchorLinkType $linkType
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    /**
     * 直达链接，选填
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * 直达链接，选填
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * 必填，商品图片，比例1:1，至少1张
     * @return \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchorProductImagesInner[]
     */
    public function getProductImages(): ?array
    {
        return $this->productImages;
    }

    /**
     * 必填，商品图片，比例1:1，至少1张
     * @param \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchorProductImagesInner[] $productImages
     * @return self
     */
    public function setProductImages(?array $productImages): self
    {
        $this->productImages = $productImages;
        return $this;
    }

    /**
     * 必填，商品价格，最多两位小数
     * @return float
     */
    public function getProductPrice(): ?float
    {
        return $this->productPrice;
    }

    /**
     * 必填，商品价格，最多两位小数
     * @param float $productPrice
     * @return self
     */
    public function setProductPrice(?float $productPrice): self
    {
        $this->productPrice = $productPrice;
        return $this;
    }

    /**
     * 必填，商品来源，只支持填写淘宝/天猫/京东/拼多多/唯品会/得物
     * @return string
     */
    public function getProductSource(): ?string
    {
        return $this->productSource;
    }

    /**
     * 必填，商品来源，只支持填写淘宝/天猫/京东/拼多多/唯品会/得物
     * @param string $productSource
     * @return self
     */
    public function setProductSource(?string $productSource): self
    {
        $this->productSource = $productSource;
        return $this;
    }

    /**
     * 必填，商品标题，不超过35个字
     * @return string
     */
    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    /**
     * 必填，商品标题，不超过35个字
     * @param string $productTitle
     * @return self
     */
    public function setProductTitle(?string $productTitle): self
    {
        $this->productTitle = $productTitle;
        return $this;
    }

    /**
     * 必填，购物车小标题，不超过10个字
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 必填，购物车小标题，不超过10个字
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->linkType !== null) {
            $result['link_type'] = $this->linkType;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->productImages !== null) {
            $result['product_images'] = $this->productImages;
        }
        if ($this->productPrice !== null) {
            $result['product_price'] = $this->productPrice;
        }
        if ($this->productSource !== null) {
            $result['product_source'] = $this->productSource;
        }
        if ($this->productTitle !== null) {
            $result['product_title'] = $this->productTitle;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['link_type'] ?? null) !== null) {
            $obj->linkType = (string) $v;
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['product_images'] ?? null) !== null && is_array($v)) {
            $obj->productImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchorProductImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['product_price'] ?? null) !== null) {
            $obj->productPrice = (float) $v;
        }
        if (($v = $data['product_source'] ?? null) !== null) {
            $obj->productSource = (string) $v;
        }
        if (($v = $data['product_title'] ?? null) !== null) {
            $obj->productTitle = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
