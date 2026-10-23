<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRangeAuthorWatcherTag implements \JsonSerializable
{
    /**
     * 观众年龄范围 「投稿任务创建数据字典」中返回的age_range中的项 形如  \"18-23岁居多\"，\"24-30岁居多\"
     * @var string[]
     */
    protected ?array $ageRange = null;

    /**
     * 观众地域 「投稿任务创建数据字典」返回的city_level中的项 形如“一线城市居多”，“二线城市居多”，“全部”
     * @var string[]
     */
    protected ?array $cityLevel = null;

    /**
     * 观众设备品牌 「投稿任务创建数据字典」返回的device_brands中的项 形如“苹果居多”，“华为居多”
     * @var string[]
     */
    protected ?array $deviceBrands = null;

    /**
     * 观众性别 “男”，“女”
     * @var string[]
     */
    protected ?array $gender = null;

    /**
     * 观众年龄范围 「投稿任务创建数据字典」中返回的age_range中的项 形如  \"18-23岁居多\"，\"24-30岁居多\"
     * @return string[]
     */
    public function getAgeRange(): ?array
    {
        return $this->ageRange;
    }

    /**
     * 观众年龄范围 「投稿任务创建数据字典」中返回的age_range中的项 形如  \"18-23岁居多\"，\"24-30岁居多\"
     * @param string[] $ageRange
     * @return self
     */
    public function setAgeRange(?array $ageRange): self
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * 观众地域 「投稿任务创建数据字典」返回的city_level中的项 形如“一线城市居多”，“二线城市居多”，“全部”
     * @return string[]
     */
    public function getCityLevel(): ?array
    {
        return $this->cityLevel;
    }

    /**
     * 观众地域 「投稿任务创建数据字典」返回的city_level中的项 形如“一线城市居多”，“二线城市居多”，“全部”
     * @param string[] $cityLevel
     * @return self
     */
    public function setCityLevel(?array $cityLevel): self
    {
        $this->cityLevel = $cityLevel;
        return $this;
    }

    /**
     * 观众设备品牌 「投稿任务创建数据字典」返回的device_brands中的项 形如“苹果居多”，“华为居多”
     * @return string[]
     */
    public function getDeviceBrands(): ?array
    {
        return $this->deviceBrands;
    }

    /**
     * 观众设备品牌 「投稿任务创建数据字典」返回的device_brands中的项 形如“苹果居多”，“华为居多”
     * @param string[] $deviceBrands
     * @return self
     */
    public function setDeviceBrands(?array $deviceBrands): self
    {
        $this->deviceBrands = $deviceBrands;
        return $this;
    }

    /**
     * 观众性别 “男”，“女”
     * @return string[]
     */
    public function getGender(): ?array
    {
        return $this->gender;
    }

    /**
     * 观众性别 “男”，“女”
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
