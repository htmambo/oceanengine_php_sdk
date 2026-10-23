<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderUserDistributionGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataActivityInner[]
     */
    protected ?array $activity = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataAgeInner[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataCityInner[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataDeviceInner[]
     */
    protected ?array $device = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataGenderInner[]
     */
    protected ?array $gender = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataInterestInner[]
     */
    protected ?array $interest = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataProvinceInner[]
     */
    protected ?array $province = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @return \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataActivityInner[]
     */
    public function getActivity(): ?array
    {
        return $this->activity;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataActivityInner[] $activity
     * @return self
     */
    public function setActivity(?array $activity): self
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataAgeInner[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataAgeInner[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataCityInner[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataCityInner[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataDeviceInner[]
     */
    public function getDevice(): ?array
    {
        return $this->device;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataDeviceInner[] $device
     * @return self
     */
    public function setDevice(?array $device): self
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataGenderInner[]
     */
    public function getGender(): ?array
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataGenderInner[] $gender
     * @return self
     */
    public function setGender(?array $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataInterestInner[]
     */
    public function getInterest(): ?array
    {
        return $this->interest;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataInterestInner[] $interest
     * @return self
     */
    public function setInterest(?array $interest): self
    {
        $this->interest = $interest;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataProvinceInner[]
     */
    public function getProvince(): ?array
    {
        return $this->province;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataProvinceInner[] $province
     * @return self
     */
    public function setProvince(?array $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activity !== null) {
            $result['activity'] = $this->activity;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->device !== null) {
            $result['device'] = $this->device;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->interest !== null) {
            $result['interest'] = $this->interest;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity'] ?? null) !== null && is_array($v)) {
            $obj->activity = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataActivityInner::fromArray($vv), $v);
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataAgeInner::fromArray($vv), $v);
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataCityInner::fromArray($vv), $v);
        }
        if (($v = $data['device'] ?? null) !== null && is_array($v)) {
            $obj->device = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataDeviceInner::fromArray($vv), $v);
        }
        if (($v = $data['gender'] ?? null) !== null && is_array($v)) {
            $obj->gender = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataGenderInner::fromArray($vv), $v);
        }
        if (($v = $data['interest'] ?? null) !== null && is_array($v)) {
            $obj->interest = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataInterestInner::fromArray($vv), $v);
        }
        if (($v = $data['province'] ?? null) !== null && is_array($v)) {
            $obj->province = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderUserDistributionGetV2ResponseDataProvinceInner::fromArray($vv), $v);
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        return $obj;
    }
}
