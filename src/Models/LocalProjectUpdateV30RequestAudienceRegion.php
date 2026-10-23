<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectUpdateV30RequestAudienceRegion implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceRegionCityDivide
     */
    protected ?string $cityDivide = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceRegionLocationType
     */
    protected ?string $locationType = null;

    /**
     * @var string
     */
    protected ?string $regionVer = null;

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
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceRegionCityDivide
     */
    public function getCityDivide(): ?string
    {
        return $this->cityDivide;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceRegionCityDivide $cityDivide
     * @return self
     */
    public function setCityDivide(?string $cityDivide): self
    {
        $this->cityDivide = $cityDivide;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceRegionLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceRegionLocationType $locationType
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
    public function getRegionVer(): ?string
    {
        return $this->regionVer;
    }

    /**
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
