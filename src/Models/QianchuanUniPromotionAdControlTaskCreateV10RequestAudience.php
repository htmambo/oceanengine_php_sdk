<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskCreateV10RequestAudience implements \JsonSerializable
{
    /**
     * 年龄
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAge[]
     */
    protected ?array $age = null;

    /**
     * 抖音达人ID列表
     * @var int[]
     */
    protected ?array $awemeFanAccounts = null;

    /**
     * 抖音用户行为类型
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAwemeFanBehaviors[]
     */
    protected ?array $awemeFanBehaviors = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAwemeFanBehaviorsDays
     */
    protected ?string $awemeFanBehaviorsDays = null;

    /**
     * 抖音达人分类ID列表
     * @var int[]
     */
    protected ?array $awemeFanCategories = null;

    /**
     * 具体定向的城市列表
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict
     */
    protected ?string $district = null;

    /**
     * 定向or排除地域，允许值： true：排除地域 false：定向地域，默认
     * @var bool
     */
    protected ?bool $districtType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType
     */
    protected ?string $locationType = null;

    /**
     * 年龄
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * 抖音达人ID列表
     * @return int[]
     */
    public function getAwemeFanAccounts(): ?array
    {
        return $this->awemeFanAccounts;
    }

    /**
     * 抖音达人ID列表
     * @param int[] $awemeFanAccounts
     * @return self
     */
    public function setAwemeFanAccounts(?array $awemeFanAccounts): self
    {
        $this->awemeFanAccounts = $awemeFanAccounts;
        return $this;
    }

    /**
     * 抖音用户行为类型
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAwemeFanBehaviors[]
     */
    public function getAwemeFanBehaviors(): ?array
    {
        return $this->awemeFanBehaviors;
    }

    /**
     * 抖音用户行为类型
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAwemeFanBehaviors[] $awemeFanBehaviors
     * @return self
     */
    public function setAwemeFanBehaviors(?array $awemeFanBehaviors): self
    {
        $this->awemeFanBehaviors = $awemeFanBehaviors;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAwemeFanBehaviorsDays
     */
    public function getAwemeFanBehaviorsDays(): ?string
    {
        return $this->awemeFanBehaviorsDays;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceAwemeFanBehaviorsDays $awemeFanBehaviorsDays
     * @return self
     */
    public function setAwemeFanBehaviorsDays(?string $awemeFanBehaviorsDays): self
    {
        $this->awemeFanBehaviorsDays = $awemeFanBehaviorsDays;
        return $this;
    }

    /**
     * 抖音达人分类ID列表
     * @return int[]
     */
    public function getAwemeFanCategories(): ?array
    {
        return $this->awemeFanCategories;
    }

    /**
     * 抖音达人分类ID列表
     * @param int[] $awemeFanCategories
     * @return self
     */
    public function setAwemeFanCategories(?array $awemeFanCategories): self
    {
        $this->awemeFanCategories = $awemeFanCategories;
        return $this;
    }

    /**
     * 具体定向的城市列表
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 具体定向的城市列表
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * 定向or排除地域，允许值： true：排除地域 false：定向地域，默认
     * @return bool
     */
    public function getDistrictType(): ?bool
    {
        return $this->districtType;
    }

    /**
     * 定向or排除地域，允许值： true：排除地域 false：定向地域，默认
     * @param bool $districtType
     * @return self
     */
    public function setDistrictType(?bool $districtType): self
    {
        $this->districtType = $districtType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType $locationType
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
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->awemeFanAccounts !== null) {
            $result['aweme_fan_accounts'] = $this->awemeFanAccounts;
        }
        if ($this->awemeFanBehaviors !== null) {
            $result['aweme_fan_behaviors'] = $this->awemeFanBehaviors;
        }
        if ($this->awemeFanBehaviorsDays !== null) {
            $result['aweme_fan_behaviors_days'] = $this->awemeFanBehaviorsDays;
        }
        if ($this->awemeFanCategories !== null) {
            $result['aweme_fan_categories'] = $this->awemeFanCategories;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->districtType !== null) {
            $result['district_type'] = $this->districtType;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->locationType !== null) {
            $result['location_type'] = $this->locationType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['aweme_fan_accounts'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanAccounts = $v;
        }
        if (($v = $data['aweme_fan_behaviors'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanBehaviors = $v;
        }
        if (($v = $data['aweme_fan_behaviors_days'] ?? null) !== null) {
            $obj->awemeFanBehaviorsDays = (string) $v;
        }
        if (($v = $data['aweme_fan_categories'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanCategories = $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['district_type'] ?? null) !== null) {
            $obj->districtType = (bool) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['location_type'] ?? null) !== null) {
            $obj->locationType = (string) $v;
        }
        return $obj;
    }
}
