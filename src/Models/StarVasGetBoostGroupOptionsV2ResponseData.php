<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostGroupOptionsV2ResponseData implements \JsonSerializable
{
    /**
     * 城市级别选项
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInner[]
     */
    protected ?array $cityLevel = null;

    /**
     * 地域选项
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataDistrictInner[]
     */
    protected ?array $district = null;

    /**
     * 兴趣标签选项
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInner[]
     */
    protected ?array $interestTag = null;

    /**
     * 城市级别选项
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInner[]
     */
    public function getCityLevel(): ?array
    {
        return $this->cityLevel;
    }

    /**
     * 城市级别选项
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInner[] $cityLevel
     * @return self
     */
    public function setCityLevel(?array $cityLevel): self
    {
        $this->cityLevel = $cityLevel;
        return $this;
    }

    /**
     * 地域选项
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataDistrictInner[]
     */
    public function getDistrict(): ?array
    {
        return $this->district;
    }

    /**
     * 地域选项
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataDistrictInner[] $district
     * @return self
     */
    public function setDistrict(?array $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * 兴趣标签选项
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInner[]
     */
    public function getInterestTag(): ?array
    {
        return $this->interestTag;
    }

    /**
     * 兴趣标签选项
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInner[] $interestTag
     * @return self
     */
    public function setInterestTag(?array $interestTag): self
    {
        $this->interestTag = $interestTag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cityLevel !== null) {
            $result['city_level'] = $this->cityLevel;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->interestTag !== null) {
            $result['interest_tag'] = $this->interestTag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['city_level'] ?? null) !== null && is_array($v)) {
            $obj->cityLevel = array_map(fn ($vv) => \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInner::fromArray($vv), $v);
        }
        if (($v = $data['district'] ?? null) !== null && is_array($v)) {
            $obj->district = array_map(fn ($vv) => \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataDistrictInner::fromArray($vv), $v);
        }
        if (($v = $data['interest_tag'] ?? null) !== null && is_array($v)) {
            $obj->interestTag = array_map(fn ($vv) => \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
