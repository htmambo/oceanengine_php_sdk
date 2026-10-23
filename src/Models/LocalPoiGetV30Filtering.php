<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPoiGetV30Filtering implements \JsonSerializable
{
    /**
     * 根据门店所在城市id筛选
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * 商品ID，当需要获取商品适用门店时填入
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 根据门店所在省份id筛选
     * @var int[]
     */
    protected ?array $province = null;

    /**
     * 根据门店名称/门店ID筛选，门店名称支持模糊搜索，门店ID支持精确搜索。
     * @var string
     */
    protected ?string $searchKeyWord = null;

    /**
     * 根据门店所在城市id筛选
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 根据门店所在城市id筛选
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * 商品ID，当需要获取商品适用门店时填入
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID，当需要获取商品适用门店时填入
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 根据门店所在省份id筛选
     * @return int[]
     */
    public function getProvince(): ?array
    {
        return $this->province;
    }

    /**
     * 根据门店所在省份id筛选
     * @param int[] $province
     * @return self
     */
    public function setProvince(?array $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * 根据门店名称/门店ID筛选，门店名称支持模糊搜索，门店ID支持精确搜索。
     * @return string
     */
    public function getSearchKeyWord(): ?string
    {
        return $this->searchKeyWord;
    }

    /**
     * 根据门店名称/门店ID筛选，门店名称支持模糊搜索，门店ID支持精确搜索。
     * @param string $searchKeyWord
     * @return self
     */
    public function setSearchKeyWord(?string $searchKeyWord): self
    {
        $this->searchKeyWord = $searchKeyWord;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        if ($this->searchKeyWord !== null) {
            $result['search_key_word'] = $this->searchKeyWord;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['province'] ?? null) !== null && is_array($v)) {
            $obj->province = $v;
        }
        if (($v = $data['search_key_word'] ?? null) !== null) {
            $obj->searchKeyWord = (string) $v;
        }
        return $obj;
    }
}
