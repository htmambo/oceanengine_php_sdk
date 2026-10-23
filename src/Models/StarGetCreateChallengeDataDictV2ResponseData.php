<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarGetCreateChallengeDataDictV2ResponseData implements \JsonSerializable
{
    /**
     * 观众年龄范围可选项
     * @var string[]
     */
    protected ?array $ageRange = null;

    /**
     * 观众地域可选项
     * @var string[]
     */
    protected ?array $cityLevel = null;

    /**
     * 内容类型可选项
     * @var \Oceanengine\Models\StarGetCreateChallengeDataDictV2ResponseDataContentTagsInner[]
     */
    protected ?array $contentTags = null;

    /**
     * 观众设备品牌可选项
     * @var string[]
     */
    protected ?array $deviceBrands = null;

    /**
     * 达人省份可选项
     * @var string[]
     */
    protected ?array $provinces = null;

    /**
     * 观众年龄范围可选项
     * @return string[]
     */
    public function getAgeRange(): ?array
    {
        return $this->ageRange;
    }

    /**
     * 观众年龄范围可选项
     * @param string[] $ageRange
     * @return self
     */
    public function setAgeRange(?array $ageRange): self
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * 观众地域可选项
     * @return string[]
     */
    public function getCityLevel(): ?array
    {
        return $this->cityLevel;
    }

    /**
     * 观众地域可选项
     * @param string[] $cityLevel
     * @return self
     */
    public function setCityLevel(?array $cityLevel): self
    {
        $this->cityLevel = $cityLevel;
        return $this;
    }

    /**
     * 内容类型可选项
     * @return \Oceanengine\Models\StarGetCreateChallengeDataDictV2ResponseDataContentTagsInner[]
     */
    public function getContentTags(): ?array
    {
        return $this->contentTags;
    }

    /**
     * 内容类型可选项
     * @param \Oceanengine\Models\StarGetCreateChallengeDataDictV2ResponseDataContentTagsInner[] $contentTags
     * @return self
     */
    public function setContentTags(?array $contentTags): self
    {
        $this->contentTags = $contentTags;
        return $this;
    }

    /**
     * 观众设备品牌可选项
     * @return string[]
     */
    public function getDeviceBrands(): ?array
    {
        return $this->deviceBrands;
    }

    /**
     * 观众设备品牌可选项
     * @param string[] $deviceBrands
     * @return self
     */
    public function setDeviceBrands(?array $deviceBrands): self
    {
        $this->deviceBrands = $deviceBrands;
        return $this;
    }

    /**
     * 达人省份可选项
     * @return string[]
     */
    public function getProvinces(): ?array
    {
        return $this->provinces;
    }

    /**
     * 达人省份可选项
     * @param string[] $provinces
     * @return self
     */
    public function setProvinces(?array $provinces): self
    {
        $this->provinces = $provinces;
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
        if ($this->contentTags !== null) {
            $result['content_tags'] = $this->contentTags;
        }
        if ($this->deviceBrands !== null) {
            $result['device_brands'] = $this->deviceBrands;
        }
        if ($this->provinces !== null) {
            $result['provinces'] = $this->provinces;
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
        if (($v = $data['content_tags'] ?? null) !== null && is_array($v)) {
            $obj->contentTags = array_map(fn ($vv) => \Oceanengine\Models\StarGetCreateChallengeDataDictV2ResponseDataContentTagsInner::fromArray($vv), $v);
        }
        if (($v = $data['device_brands'] ?? null) !== null && is_array($v)) {
            $obj->deviceBrands = $v;
        }
        if (($v = $data['provinces'] ?? null) !== null && is_array($v)) {
            $obj->provinces = $v;
        }
        return $obj;
    }
}
