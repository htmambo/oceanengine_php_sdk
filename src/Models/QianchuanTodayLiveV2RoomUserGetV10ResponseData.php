<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTodayLiveV2RoomUserGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataAgeInner[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataCityInner[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataGenderInner[]
     */
    protected ?array $gender = null;

    /**
     * @return \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataAgeInner[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataAgeInner[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataCityInner[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * @param \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataCityInner[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataGenderInner[]
     */
    public function getGender(): ?array
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataGenderInner[] $gender
     * @return self
     */
    public function setGender(?array $gender): self
    {
        $this->gender = $gender;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = array_map(fn ($vv) => \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataAgeInner::fromArray($vv), $v);
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = array_map(fn ($vv) => \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataCityInner::fromArray($vv), $v);
        }
        if (($v = $data['gender'] ?? null) !== null && is_array($v)) {
            $obj->gender = array_map(fn ($vv) => \Oceanengine\Models\QianchuanTodayLiveV2RoomUserGetV10ResponseDataGenderInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
