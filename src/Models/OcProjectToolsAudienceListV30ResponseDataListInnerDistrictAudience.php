<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudience implements \JsonSerializable
{
    /**
     * 城市定向设置
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict
     */
    protected ?string $district = null;

    /**
     * 地域定向设置详情
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudienceGeolocationInner[]
     */
    protected ?array $geolocation = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType
     */
    protected ?string $locationType = null;

    /**
     * @var string
     */
    protected ?string $regionVersion = null;

    /**
     * 城市定向设置
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 城市定向设置
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDistrictAudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * 地域定向设置详情
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudienceGeolocationInner[]
     */
    public function getGeolocation(): ?array
    {
        return $this->geolocation;
    }

    /**
     * 地域定向设置详情
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudienceGeolocationInner[] $geolocation
     * @return self
     */
    public function setGeolocation(?array $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType $locationType
     * @return self
     */
    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionVersion(): ?string
    {
        return $this->regionVersion;
    }

    /**
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
            $obj->geolocation = array_map(fn ($vv) => \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudienceGeolocationInner::fromArray($vv), $v);
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
