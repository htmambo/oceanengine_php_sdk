<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeExpandRangeV2RequestParticipateAuthorRangeAuthorWatcherTag implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $ageRange = null;

    /**
     * @var string[]
     */
    protected ?array $cityLevel = null;

    /**
     * @var string[]
     */
    protected ?array $deviceBrands = null;

    /**
     * @var string[]
     */
    protected ?array $gender = null;

    /**
     * @return string[]
     */
    public function getAgeRange(): ?array
    {
        return $this->ageRange;
    }

    /**
     * @param string[] $ageRange
     * @return self
     */
    public function setAgeRange(?array $ageRange): self
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCityLevel(): ?array
    {
        return $this->cityLevel;
    }

    /**
     * @param string[] $cityLevel
     * @return self
     */
    public function setCityLevel(?array $cityLevel): self
    {
        $this->cityLevel = $cityLevel;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDeviceBrands(): ?array
    {
        return $this->deviceBrands;
    }

    /**
     * @param string[] $deviceBrands
     * @return self
     */
    public function setDeviceBrands(?array $deviceBrands): self
    {
        $this->deviceBrands = $deviceBrands;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGender(): ?array
    {
        return $this->gender;
    }

    /**
     * @param string[] $gender
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
        if ($this->ageRange !== null) {
            $result['age_range'] = $this->ageRange;
        }
        if ($this->cityLevel !== null) {
            $result['city_level'] = $this->cityLevel;
        }
        if ($this->deviceBrands !== null) {
            $result['device_brands'] = $this->deviceBrands;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age_range'] ?? null) !== null && is_array($v)) {
            $obj->ageRange = $v;
        }
        if (($v = $data['city_level'] ?? null) !== null && is_array($v)) {
            $obj->cityLevel = $v;
        }
        if (($v = $data['device_brands'] ?? null) !== null && is_array($v)) {
            $obj->deviceBrands = $v;
        }
        if (($v = $data['gender'] ?? null) !== null && is_array($v)) {
            $obj->gender = $v;
        }
        return $obj;
    }
}
