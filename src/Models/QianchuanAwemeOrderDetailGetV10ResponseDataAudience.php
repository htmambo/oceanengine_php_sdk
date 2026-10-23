<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderDetailGetV10ResponseDataAudience implements \JsonSerializable
{
    /**
     * 年龄定向
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAge[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode
     */
    protected ?string $audienceMode = null;

    /**
     * 抖音达人ID列表
     * @var int[]
     */
    protected ?array $awemeFanAccounts = null;

    /**
     * 抖音用户行为类型 ，
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors[]
     */
    protected ?array $awemeFanBehaviors = null;

    /**
     * 具体定向的城市列表
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceDistrict
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceExcludeLimitedRegion
     */
    protected ?string $excludeLimitedRegion = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceGender
     */
    protected ?string $gender = null;

    /**
     * 兴趣类目词
     * @var int[]
     */
    protected ?array $interestCategories = null;

    /**
     * 定向版本
     * @var string
     */
    protected ?string $regionVersion = null;

    /**
     * 年龄定向
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄定向
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode
     */
    public function getAudienceMode(): ?string
    {
        return $this->audienceMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode $audienceMode
     * @return self
     */
    public function setAudienceMode(?string $audienceMode): self
    {
        $this->audienceMode = $audienceMode;
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
     * 抖音用户行为类型 ，
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors[]
     */
    public function getAwemeFanBehaviors(): ?array
    {
        return $this->awemeFanBehaviors;
    }

    /**
     * 抖音用户行为类型 ，
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors[] $awemeFanBehaviors
     * @return self
     */
    public function setAwemeFanBehaviors(?array $awemeFanBehaviors): self
    {
        $this->awemeFanBehaviors = $awemeFanBehaviors;
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
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceExcludeLimitedRegion
     */
    public function getExcludeLimitedRegion(): ?string
    {
        return $this->excludeLimitedRegion;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceExcludeLimitedRegion $excludeLimitedRegion
     * @return self
     */
    public function setExcludeLimitedRegion(?string $excludeLimitedRegion): self
    {
        $this->excludeLimitedRegion = $excludeLimitedRegion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataAudienceGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * 兴趣类目词
     * @return int[]
     */
    public function getInterestCategories(): ?array
    {
        return $this->interestCategories;
    }

    /**
     * 兴趣类目词
     * @param int[] $interestCategories
     * @return self
     */
    public function setInterestCategories(?array $interestCategories): self
    {
        $this->interestCategories = $interestCategories;
        return $this;
    }

    /**
     * 定向版本
     * @return string
     */
    public function getRegionVersion(): ?string
    {
        return $this->regionVersion;
    }

    /**
     * 定向版本
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
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->audienceMode !== null) {
            $result['audience_mode'] = $this->audienceMode;
        }
        if ($this->awemeFanAccounts !== null) {
            $result['aweme_fan_accounts'] = $this->awemeFanAccounts;
        }
        if ($this->awemeFanBehaviors !== null) {
            $result['aweme_fan_behaviors'] = $this->awemeFanBehaviors;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->excludeLimitedRegion !== null) {
            $result['exclude_limited_region'] = $this->excludeLimitedRegion;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->interestCategories !== null) {
            $result['interest_categories'] = $this->interestCategories;
        }
        if ($this->regionVersion !== null) {
            $result['region_version'] = $this->regionVersion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['audience_mode'] ?? null) !== null) {
            $obj->audienceMode = (string) $v;
        }
        if (($v = $data['aweme_fan_accounts'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanAccounts = $v;
        }
        if (($v = $data['aweme_fan_behaviors'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanBehaviors = $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['exclude_limited_region'] ?? null) !== null) {
            $obj->excludeLimitedRegion = (string) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['interest_categories'] ?? null) !== null && is_array($v)) {
            $obj->interestCategories = $v;
        }
        if (($v = $data['region_version'] ?? null) !== null) {
            $obj->regionVersion = (string) $v;
        }
        return $obj;
    }
}
