<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerRegion implements \JsonSerializable
{
    /**
     * 地域定向省市或区县列表
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide
     */
    protected ?string $cityDivide = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType
     */
    protected ?string $locationType = null;

    /**
     * 行政区域版本号
     * @var string
     */
    protected ?string $regionVer = null;

    /**
     * 地域定向省市或区县列表
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 地域定向省市或区县列表
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide
     */
    public function getCityDivide(): ?string
    {
        return $this->cityDivide;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide $cityDivide
     * @return self
     */
    public function setCityDivide(?string $cityDivide): self
    {
        $this->cityDivide = $cityDivide;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType $locationType
     * @return self
     */
    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
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
        if ($this->locationType !== null) {
            $result['location_type'] = $this->locationType;
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
        if (($v = $data['location_type'] ?? null) !== null) {
            $obj->locationType = (string) $v;
        }
        if (($v = $data['region_ver'] ?? null) !== null) {
            $obj->regionVer = (string) $v;
        }
        return $obj;
    }
}
