<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPoiGetV30ResponseDataPoiListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInner[]
     */
    protected ?array $bindMarketPageInfos = null;

    /**
     * 所在城市
     * @var string
     */
    protected ?string $city = null;

    /**
     * 所在区
     * @var string
     */
    protected ?string $district = null;

    /**
     * 门店下有无商品
     * @var bool
     */
    protected ?bool $existsProduct = null;

    /**
     * 门店地址
     * @var string
     */
    protected ?string $poiAddress = null;

    /**
     * 门店ID
     * @var int
     */
    protected ?int $poiId = null;

    /**
     * 门店名称
     * @var string
     */
    protected ?string $poiName = null;

    /**
     * 所在省份
     * @var string
     */
    protected ?string $province = null;

    /**
     * @return \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInner[]
     */
    public function getBindMarketPageInfos(): ?array
    {
        return $this->bindMarketPageInfos;
    }

    /**
     * @param \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInner[] $bindMarketPageInfos
     * @return self
     */
    public function setBindMarketPageInfos(?array $bindMarketPageInfos): self
    {
        $this->bindMarketPageInfos = $bindMarketPageInfos;
        return $this;
    }

    /**
     * 所在城市
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * 所在城市
     * @param string $city
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * 所在区
     * @return string
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * 所在区
     * @param string $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * 门店下有无商品
     * @return bool
     */
    public function getExistsProduct(): ?bool
    {
        return $this->existsProduct;
    }

    /**
     * 门店下有无商品
     * @param bool $existsProduct
     * @return self
     */
    public function setExistsProduct(?bool $existsProduct): self
    {
        $this->existsProduct = $existsProduct;
        return $this;
    }

    /**
     * 门店地址
     * @return string
     */
    public function getPoiAddress(): ?string
    {
        return $this->poiAddress;
    }

    /**
     * 门店地址
     * @param string $poiAddress
     * @return self
     */
    public function setPoiAddress(?string $poiAddress): self
    {
        $this->poiAddress = $poiAddress;
        return $this;
    }

    /**
     * 门店ID
     * @return int
     */
    public function getPoiId(): ?int
    {
        return $this->poiId;
    }

    /**
     * 门店ID
     * @param int $poiId
     * @return self
     */
    public function setPoiId(?int $poiId): self
    {
        $this->poiId = $poiId;
        return $this;
    }

    /**
     * 门店名称
     * @return string
     */
    public function getPoiName(): ?string
    {
        return $this->poiName;
    }

    /**
     * 门店名称
     * @param string $poiName
     * @return self
     */
    public function setPoiName(?string $poiName): self
    {
        $this->poiName = $poiName;
        return $this;
    }

    /**
     * 所在省份
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * 所在省份
     * @param string $province
     * @return self
     */
    public function setProvince(?string $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bindMarketPageInfos !== null) {
            $result['bind_market_page_infos'] = $this->bindMarketPageInfos;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->existsProduct !== null) {
            $result['exists_product'] = $this->existsProduct;
        }
        if ($this->poiAddress !== null) {
            $result['poi_address'] = $this->poiAddress;
        }
        if ($this->poiId !== null) {
            $result['poi_id'] = $this->poiId;
        }
        if ($this->poiName !== null) {
            $result['poi_name'] = $this->poiName;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bind_market_page_infos'] ?? null) !== null && is_array($v)) {
            $obj->bindMarketPageInfos = array_map(fn ($vv) => \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['city'] ?? null) !== null) {
            $obj->city = (string) $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['exists_product'] ?? null) !== null) {
            $obj->existsProduct = (bool) $v;
        }
        if (($v = $data['poi_address'] ?? null) !== null) {
            $obj->poiAddress = (string) $v;
        }
        if (($v = $data['poi_id'] ?? null) !== null) {
            $obj->poiId = (int) $v;
        }
        if (($v = $data['poi_name'] ?? null) !== null) {
            $obj->poiName = (string) $v;
        }
        if (($v = $data['province'] ?? null) !== null) {
            $obj->province = (string) $v;
        }
        return $obj;
    }
}
