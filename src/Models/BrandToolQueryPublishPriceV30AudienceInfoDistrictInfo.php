<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandToolQueryPublishPriceV30AudienceInfoDistrictInfo implements \JsonSerializable
{
    /**
     * 选择的城市
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType
     */
    protected ?string $citySelectType = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoDistrictType
     */
    protected ?string $districtType = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoLocationType
     */
    protected ?string $locationType = null;

    /**
     * 选择的城市
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 选择的城市
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType
     */
    public function getCitySelectType(): ?string
    {
        return $this->citySelectType;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoCitySelectType $citySelectType
     * @return self
     */
    public function setCitySelectType(?string $citySelectType): self
    {
        $this->citySelectType = $citySelectType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoDistrictType
     */
    public function getDistrictType(): ?string
    {
        return $this->districtType;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoDistrictType $districtType
     * @return self
     */
    public function setDistrictType(?string $districtType): self
    {
        $this->districtType = $districtType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfoDistrictInfoLocationType $locationType
     * @return self
     */
    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
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
        if ($this->citySelectType !== null) {
            $result['city_select_type'] = $this->citySelectType;
        }
        if ($this->districtType !== null) {
            $result['district_type'] = $this->districtType;
        }
        if ($this->locationType !== null) {
            $result['location_type'] = $this->locationType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['city_select_type'] ?? null) !== null) {
            $obj->citySelectType = (string) $v;
        }
        if (($v = $data['district_type'] ?? null) !== null) {
            $obj->districtType = (string) $v;
        }
        if (($v = $data['location_type'] ?? null) !== null) {
            $obj->locationType = (string) $v;
        }
        return $obj;
    }
}
