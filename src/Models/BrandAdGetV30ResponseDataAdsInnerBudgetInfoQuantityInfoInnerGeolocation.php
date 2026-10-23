<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInnerGeolocation implements \JsonSerializable
{
    /**
     * 城市
     * @var string
     */
    protected ?string $city = null;

    /**
     * 地区
     * @var string
     */
    protected ?string $district = null;

    /**
     * 维度
     * @var int
     */
    protected ?int $lat = null;

    /**
     * 精度
     * @var int
     */
    protected ?int $long = null;

    /**
     * 名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 省份
     * @var string
     */
    protected ?string $province = null;

    /**
     * 半径
     * @var int
     */
    protected ?int $radius = null;

    /**
     * 街道
     * @var string
     */
    protected ?string $street = null;

    /**
     * 门牌号码
     * @var string
     */
    protected ?string $streetNumber = null;

    /**
     * 城市
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * 城市
     * @param string $city
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * 地区
     * @return string
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * 地区
     * @param string $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * 维度
     * @return int
     */
    public function getLat(): ?int
    {
        return $this->lat;
    }

    /**
     * 维度
     * @param int $lat
     * @return self
     */
    public function setLat(?int $lat): self
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * 精度
     * @return int
     */
    public function getLong(): ?int
    {
        return $this->long;
    }

    /**
     * 精度
     * @param int $long
     * @return self
     */
    public function setLong(?int $long): self
    {
        $this->long = $long;
        return $this;
    }

    /**
     * 名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 省份
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * 省份
     * @param string $province
     * @return self
     */
    public function setProvince(?string $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * 半径
     * @return int
     */
    public function getRadius(): ?int
    {
        return $this->radius;
    }

    /**
     * 半径
     * @param int $radius
     * @return self
     */
    public function setRadius(?int $radius): self
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * 街道
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * 街道
     * @param string $street
     * @return self
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }

    /**
     * 门牌号码
     * @return string
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * 门牌号码
     * @param string $streetNumber
     * @return self
     */
    public function setStreetNumber(?string $streetNumber): self
    {
        $this->streetNumber = $streetNumber;
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
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->lat !== null) {
            $result['lat'] = $this->lat;
        }
        if ($this->long !== null) {
            $result['long'] = $this->long;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        if ($this->radius !== null) {
            $result['radius'] = $this->radius;
        }
        if ($this->street !== null) {
            $result['street'] = $this->street;
        }
        if ($this->streetNumber !== null) {
            $result['street_number'] = $this->streetNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['city'] ?? null) !== null) {
            $obj->city = (string) $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['lat'] ?? null) !== null) {
            $obj->lat = (int) $v;
        }
        if (($v = $data['long'] ?? null) !== null) {
            $obj->long = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['province'] ?? null) !== null) {
            $obj->province = (string) $v;
        }
        if (($v = $data['radius'] ?? null) !== null) {
            $obj->radius = (int) $v;
        }
        if (($v = $data['street'] ?? null) !== null) {
            $obj->street = (string) $v;
        }
        if (($v = $data['street_number'] ?? null) !== null) {
            $obj->streetNumber = (string) $v;
        }
        return $obj;
    }
}
