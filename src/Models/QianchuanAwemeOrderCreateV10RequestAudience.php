<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderCreateV10RequestAudience implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceAge[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceAudienceMode
     */
    protected ?string $audienceMode = null;

    /**
     * @var int[]
     */
    protected ?array $authorIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceBehaviors[]
     */
    protected ?array $behaviors = null;

    /**
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceDistrict
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceExcludeLimitedRegion
     */
    protected ?string $excludeLimitedRegion = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceGender
     */
    protected ?string $gender = null;

    /**
     * @var int[]
     */
    protected ?array $interestCategories = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceRegionVersion
     */
    protected ?string $regionVersion = null;

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceAudienceMode
     */
    public function getAudienceMode(): ?string
    {
        return $this->audienceMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceAudienceMode $audienceMode
     * @return self
     */
    public function setAudienceMode(?string $audienceMode): self
    {
        $this->audienceMode = $audienceMode;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAuthorIds(): ?array
    {
        return $this->authorIds;
    }

    /**
     * @param int[] $authorIds
     * @return self
     */
    public function setAuthorIds(?array $authorIds): self
    {
        $this->authorIds = $authorIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceBehaviors[]
     */
    public function getBehaviors(): ?array
    {
        return $this->behaviors;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceBehaviors[] $behaviors
     * @return self
     */
    public function setBehaviors(?array $behaviors): self
    {
        $this->behaviors = $behaviors;
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
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceExcludeLimitedRegion
     */
    public function getExcludeLimitedRegion(): ?string
    {
        return $this->excludeLimitedRegion;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceExcludeLimitedRegion $excludeLimitedRegion
     * @return self
     */
    public function setExcludeLimitedRegion(?string $excludeLimitedRegion): self
    {
        $this->excludeLimitedRegion = $excludeLimitedRegion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getInterestCategories(): ?array
    {
        return $this->interestCategories;
    }

    /**
     * @param int[] $interestCategories
     * @return self
     */
    public function setInterestCategories(?array $interestCategories): self
    {
        $this->interestCategories = $interestCategories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceRegionVersion
     */
    public function getRegionVersion(): ?string
    {
        return $this->regionVersion;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10AudienceRegionVersion $regionVersion
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
        if ($this->authorIds !== null) {
            $result['author_ids'] = $this->authorIds;
        }
        if ($this->behaviors !== null) {
            $result['behaviors'] = $this->behaviors;
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
        if (($v = $data['author_ids'] ?? null) !== null && is_array($v)) {
            $obj->authorIds = $v;
        }
        if (($v = $data['behaviors'] ?? null) !== null && is_array($v)) {
            $obj->behaviors = $v;
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
