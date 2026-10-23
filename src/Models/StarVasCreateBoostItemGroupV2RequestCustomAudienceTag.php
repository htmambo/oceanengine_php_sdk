<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasCreateBoostItemGroupV2RequestCustomAudienceTag implements \JsonSerializable
{
    /**
     * 年龄，空则为不限 可选值: 18_TO_23 18-23; 24_TO_30 24-30; 31_TO_40 31-40; 41_TO_50 41-50; INFINITE 不限;
     * @var \Oceanengine\Models\StarVasCreateBoostItemGroupV2CustomAudienceTagAge[]
     */
    protected ?array $age = null;

    /**
     * 地域 code，空则为全国。如果填值，要么都是CITY类型的地域，要么都是COUNTY类型的地域。枚举值见/open_api/2/star/vas/get_boost_group_options/接口里的district/city_level字段下的地域代码code
     * @var string[]
     */
    protected ?array $district = null;

    /**
     * @var \Oceanengine\Models\StarVasCreateBoostItemGroupV2CustomAudienceTagGender
     */
    protected ?string $gender = null;

    /**
     * 兴趣标签，空则不限。仅支持SECOND类型的标签。枚举值见/open_api/2/star/vas/get_boost_group_options/接口里的interest_tag字段下的标签代码code
     * @var int[]
     */
    protected ?array $interestTag = null;

    /**
     * 年龄，空则为不限 可选值: 18_TO_23 18-23; 24_TO_30 24-30; 31_TO_40 31-40; 41_TO_50 41-50; INFINITE 不限;
     * @return \Oceanengine\Models\StarVasCreateBoostItemGroupV2CustomAudienceTagAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄，空则为不限 可选值: 18_TO_23 18-23; 24_TO_30 24-30; 31_TO_40 31-40; 41_TO_50 41-50; INFINITE 不限;
     * @param \Oceanengine\Models\StarVasCreateBoostItemGroupV2CustomAudienceTagAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * 地域 code，空则为全国。如果填值，要么都是CITY类型的地域，要么都是COUNTY类型的地域。枚举值见/open_api/2/star/vas/get_boost_group_options/接口里的district/city_level字段下的地域代码code
     * @return string[]
     */
    public function getDistrict(): ?array
    {
        return $this->district;
    }

    /**
     * 地域 code，空则为全国。如果填值，要么都是CITY类型的地域，要么都是COUNTY类型的地域。枚举值见/open_api/2/star/vas/get_boost_group_options/接口里的district/city_level字段下的地域代码code
     * @param string[] $district
     * @return self
     */
    public function setDistrict(?array $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasCreateBoostItemGroupV2CustomAudienceTagGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\StarVasCreateBoostItemGroupV2CustomAudienceTagGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * 兴趣标签，空则不限。仅支持SECOND类型的标签。枚举值见/open_api/2/star/vas/get_boost_group_options/接口里的interest_tag字段下的标签代码code
     * @return int[]
     */
    public function getInterestTag(): ?array
    {
        return $this->interestTag;
    }

    /**
     * 兴趣标签，空则不限。仅支持SECOND类型的标签。枚举值见/open_api/2/star/vas/get_boost_group_options/接口里的interest_tag字段下的标签代码code
     * @param int[] $interestTag
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
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->interestTag !== null) {
            $result['interest_tag'] = $this->interestTag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['district'] ?? null) !== null && is_array($v)) {
            $obj->district = $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['interest_tag'] ?? null) !== null && is_array($v)) {
            $obj->interestTag = $v;
        }
        return $obj;
    }
}
