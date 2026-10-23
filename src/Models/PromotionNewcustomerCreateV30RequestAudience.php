<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionNewcustomerCreateV30RequestAudience implements \JsonSerializable
{
    /**
     * 年龄
     * @var \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceAge[]
     */
    protected ?array $age = null;

    /**
     * 定向城市
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceLocationType
     */
    protected ?string $locationType = null;

    /**
     * 行政区域版本号
     * @var string
     */
    protected ?string $regionVersion = null;

    /**
     * 年龄
     * @return \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * 定向城市
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 定向城市
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\PromotionNewcustomerCreateV30AudienceLocationType $locationType
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
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
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
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
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
