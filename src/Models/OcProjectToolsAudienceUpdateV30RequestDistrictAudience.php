<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceUpdateV30RequestDistrictAudience implements \JsonSerializable
{
    /**
     * 省市或者区县列表
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict
     */
    protected ?string $district = null;

    /**
     * 从地图添加(地图位置)
     * @var \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudienceGeolocationInner[]
     */
    protected ?array $geolocation = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType
     */
    protected ?string $locationType = null;

    /**
     * 行政区域版本号
     * @var string
     */
    protected ?string $regionVersion = null;

    /**
     * 省市或者区县列表
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 省市或者区县列表
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceUpdateV30DistrictAudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * 从地图添加(地图位置)
     * @return \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudienceGeolocationInner[]
     */
    public function getGeolocation(): ?array
    {
        return $this->geolocation;
    }

    /**
     * 从地图添加(地图位置)
     * @param \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudienceGeolocationInner[] $geolocation
     * @return self
     */
    public function setGeolocation(?array $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType $locationType
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
    public function getRegionVersion(): ?string
    {
        return $this->regionVersion;
    }

    /**
     * 行政区域版本号
     * @param string $regionVersion
     * @return self
     */
    public function setRegionVersion(?string $regionVersion): self
    {
        $this->regionVersion = $regionVersion;
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
        if ($this->geolocation !== null) {
            $result['geolocation'] = $this->geolocation;
        }
        if ($this->locationType !== null) {
            $result['location_type'] = $this->locationType;
        }
        if ($this->regionVersion !== null) {
            $result['region_version'] = $this->regionVersion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['geolocation'] ?? null) !== null && is_array($v)) {
            $obj->geolocation = array_map(fn ($vv) => \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudienceGeolocationInner::fromArray($vv), $v);
        }
        if (($v = $data['location_type'] ?? null) !== null) {
            $obj->locationType = (string) $v;
        }
        if (($v = $data['region_version'] ?? null) !== null) {
            $obj->regionVersion = (string) $v;
        }
        return $obj;
    }
}
