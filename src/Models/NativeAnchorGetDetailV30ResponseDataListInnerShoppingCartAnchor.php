<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchor implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType
     */
    protected ?string $linkType = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchorProductImagesInner[]
     */
    protected ?array $productImages = null;

    /**
     * @var float
     */
    protected ?float $productPrice = null;

    /**
     * @var string
     */
    protected ?string $productSource = null;

    /**
     * @var string
     */
    protected ?string $productTitle = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType $linkType
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchorProductImagesInner[]
     */
    public function getProductImages(): ?array
    {
        return $this->productImages;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchorProductImagesInner[] $productImages
     * @return self
     */
    public function setProductImages(?array $productImages): self
    {
        $this->productImages = $productImages;
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
     * @return string
     */
    public function getProductSource(): ?string
    {
        return $this->productSource;
    }

    /**
     * @param string $productSource
     * @return self
     */
    public function setProductSource(?string $productSource): self
    {
        $this->productSource = $productSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    /**
     * @param string $productTitle
     * @return self
     */
    public function setProductTitle(?string $productTitle): self
    {
        $this->productTitle = $productTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
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
            $obj->productImages = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchorProductImagesInner::fromArray($vv), $v);
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
