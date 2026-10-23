<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdRegionUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRegionUpdateV10District
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRegionUpdateV10ElectricFenceRegion
     */
    protected ?string $electricFenceRegion = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRegionUpdateV10ExcludeLimitedRegion
     */
    protected ?string $excludeLimitedRegion = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRegionUpdateV10LocationType
     */
    protected ?string $locationType = null;

    /**
     * @var string
     */
    protected ?string $regionVersion = null;

    /**
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRegionUpdateV10District
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRegionUpdateV10District $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRegionUpdateV10ElectricFenceRegion
     */
    public function getElectricFenceRegion(): ?string
    {
        return $this->electricFenceRegion;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRegionUpdateV10ElectricFenceRegion $electricFenceRegion
     * @return self
     */
    public function setElectricFenceRegion(?string $electricFenceRegion): self
    {
        $this->electricFenceRegion = $electricFenceRegion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRegionUpdateV10ExcludeLimitedRegion
     */
    public function getExcludeLimitedRegion(): ?string
    {
        return $this->excludeLimitedRegion;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRegionUpdateV10ExcludeLimitedRegion $excludeLimitedRegion
     * @return self
     */
    public function setExcludeLimitedRegion(?string $excludeLimitedRegion): self
    {
        $this->excludeLimitedRegion = $excludeLimitedRegion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRegionUpdateV10LocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRegionUpdateV10LocationType $locationType
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
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->electricFenceRegion !== null) {
            $result['electric_fence_region'] = $this->electricFenceRegion;
        }
        if ($this->excludeLimitedRegion !== null) {
            $result['exclude_limited_region'] = $this->excludeLimitedRegion;
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
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['electric_fence_region'] ?? null) !== null) {
            $obj->electricFenceRegion = (string) $v;
        }
        if (($v = $data['exclude_limited_region'] ?? null) !== null) {
            $obj->excludeLimitedRegion = (string) $v;
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
