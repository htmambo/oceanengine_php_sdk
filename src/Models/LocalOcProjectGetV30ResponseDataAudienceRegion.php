<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcProjectGetV30ResponseDataAudienceRegion implements \JsonSerializable
{
    /**
     * 地域定向省市或者区县列表
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataAudienceRegionCityDivide
     */
    protected ?string $cityDivide = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataAudienceRegionLocationTpe
     */
    protected ?string $locationTpe = null;

    /**
     * 行政区域版本号
     * @var string
     */
    protected ?string $regionVer = null;

    /**
     * 地域定向省市或者区县列表
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 地域定向省市或者区县列表
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataAudienceRegionCityDivide
     */
    public function getCityDivide(): ?string
    {
        return $this->cityDivide;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataAudienceRegionCityDivide $cityDivide
     * @return self
     */
    public function setCityDivide(?string $cityDivide): self
    {
        $this->cityDivide = $cityDivide;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataAudienceRegionLocationTpe
     */
    public function getLocationTpe(): ?string
    {
        return $this->locationTpe;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataAudienceRegionLocationTpe $locationTpe
     * @return self
     */
    public function setLocationTpe(?string $locationTpe): self
    {
        $this->locationTpe = $locationTpe;
        return $this;
    }

    /**
     * 行政区域版本号
     * @return string
     */
    public function getRegionVer(): ?string
    {
        return $this->regionVer;
    }

    /**
     * 行政区域版本号
     * @param string $regionVer
     * @return self
     */
    public function setRegionVer(?string $regionVer): self
    {
        $this->regionVer = $regionVer;
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
        if ($this->cityDivide !== null) {
            $result['city_divide'] = $this->cityDivide;
        }
        if ($this->locationTpe !== null) {
            $result['location_tpe'] = $this->locationTpe;
        }
        if ($this->regionVer !== null) {
            $result['region_ver'] = $this->regionVer;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['city_divide'] ?? null) !== null) {
            $obj->cityDivide = (string) $v;
        }
        if (($v = $data['location_tpe'] ?? null) !== null) {
            $obj->locationTpe = (string) $v;
        }
        if (($v = $data['region_ver'] ?? null) !== null) {
            $obj->regionVer = (string) $v;
        }
        return $obj;
    }
}
