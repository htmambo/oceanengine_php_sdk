<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProductGetV30ResponseDataProductsInner implements \JsonSerializable
{
    /**
     * 商品适用门店数
     * @var int
     */
    protected ?int $applicablePoiNum = null;

    /**
     * @var \Oceanengine\Models\LocalProductGetV30ResponseDataProductsInnerBindMarketPageInfosInner[]
     */
    protected ?array $bindMarketPageInfos = null;

    /**
     * 商品价格，单位元
     * @var int
     */
    protected ?int $price = null;

    /**
     * 商品ID
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 商品头图，有效期2h
     * @var string
     */
    protected ?string $productPics = null;

    /**
     * 商品适用门店数
     * @return int
     */
    public function getApplicablePoiNum(): ?int
    {
        return $this->applicablePoiNum;
    }

    /**
     * 商品适用门店数
     * @param int $applicablePoiNum
     * @return self
     */
    public function setApplicablePoiNum(?int $applicablePoiNum): self
    {
        $this->applicablePoiNum = $applicablePoiNum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProductGetV30ResponseDataProductsInnerBindMarketPageInfosInner[]
     */
    public function getBindMarketPageInfos(): ?array
    {
        return $this->bindMarketPageInfos;
    }

    /**
     * @param \Oceanengine\Models\LocalProductGetV30ResponseDataProductsInnerBindMarketPageInfosInner[] $bindMarketPageInfos
     * @return self
     */
    public function setBindMarketPageInfos(?array $bindMarketPageInfos): self
    {
        $this->bindMarketPageInfos = $bindMarketPageInfos;
        return $this;
    }

    /**
     * 商品价格，单位元
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * 商品价格，单位元
     * @param int $price
     * @return self
     */
    public function setPrice(?int $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 商品头图，有效期2h
     * @return string
     */
    public function getProductPics(): ?string
    {
        return $this->productPics;
    }

    /**
     * 商品头图，有效期2h
     * @param string $productPics
     * @return self
     */
    public function setProductPics(?string $productPics): self
    {
        $this->productPics = $productPics;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applicablePoiNum !== null) {
            $result['applicable_poi_num'] = $this->applicablePoiNum;
        }
        if ($this->bindMarketPageInfos !== null) {
            $result['bind_market_page_infos'] = $this->bindMarketPageInfos;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productPics !== null) {
            $result['product_pics'] = $this->productPics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['applicable_poi_num'] ?? null) !== null) {
            $obj->applicablePoiNum = (int) $v;
        }
        if (($v = $data['bind_market_page_infos'] ?? null) !== null && is_array($v)) {
            $obj->bindMarketPageInfos = array_map(fn ($vv) => \Oceanengine\Models\LocalProductGetV30ResponseDataProductsInnerBindMarketPageInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['price'] ?? null) !== null) {
            $obj->price = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_pics'] ?? null) !== null) {
            $obj->productPics = (string) $v;
        }
        return $obj;
    }
}
