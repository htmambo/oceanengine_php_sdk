<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportAudienceGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $ac = null;

    /**
     * @var string
     */
    protected ?string $age = null;

    /**
     * @var string
     */
    protected ?string $cityName = null;

    /**
     * @var string
     */
    protected ?string $districtName = null;

    /**
     * @var string
     */
    protected ?string $eightGroupLabel = null;

    /**
     * @var \Oceanengine\Models\LocalReportAudienceGetV30ResponseDataListInnerFields
     */
    protected ?\Oceanengine\Models\LocalReportAudienceGetV30ResponseDataListInnerFields $fields = null;

    /**
     * @var string
     */
    protected ?string $gender = null;

    /**
     * @var string
     */
    protected ?string $platform = null;

    /**
     * @var string
     */
    protected ?string $provinceName = null;

    /**
     * @return string
     */
    public function getAc(): ?string
    {
        return $this->ac;
    }

    /**
     * @param string $ac
     * @return self
     */
    public function setAc(?string $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * @return string
     */
    public function getAge(): ?string
    {
        return $this->age;
    }

    /**
     * @param string $age
     * @return self
     */
    public function setAge(?string $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return self
     */
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrictName(): ?string
    {
        return $this->districtName;
    }

    /**
     * @param string $districtName
     * @return self
     */
    public function setDistrictName(?string $districtName): self
    {
        $this->districtName = $districtName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEightGroupLabel(): ?string
    {
        return $this->eightGroupLabel;
    }

    /**
     * @param string $eightGroupLabel
     * @return self
     */
    public function setEightGroupLabel(?string $eightGroupLabel): self
    {
        $this->eightGroupLabel = $eightGroupLabel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAudienceGetV30ResponseDataListInnerFields
     */
    public function getFields(): ?\Oceanengine\Models\LocalReportAudienceGetV30ResponseDataListInnerFields
    {
        return $this->fields;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAudienceGetV30ResponseDataListInnerFields $fields
     * @return self
     */
    public function setFields(?\Oceanengine\Models\LocalReportAudienceGetV30ResponseDataListInnerFields $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceName(): ?string
    {
        return $this->provinceName;
    }

    /**
     * @param string $provinceName
     * @return self
     */
    public function setProvinceName(?string $provinceName): self
    {
        $this->provinceName = $provinceName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ac !== null) {
            $result['ac'] = $this->ac;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->cityName !== null) {
            $result['city_name'] = $this->cityName;
        }
        if ($this->districtName !== null) {
            $result['district_name'] = $this->districtName;
        }
        if ($this->eightGroupLabel !== null) {
            $result['eight_group_label'] = $this->eightGroupLabel;
        }
        if ($this->fields !== null) {
            $result['fields'] = $this->fields;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->provinceName !== null) {
            $result['province_name'] = $this->provinceName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ac'] ?? null) !== null) {
            $obj->ac = (string) $v;
        }
        if (($v = $data['age'] ?? null) !== null) {
            $obj->age = (string) $v;
        }
        if (($v = $data['city_name'] ?? null) !== null) {
            $obj->cityName = (string) $v;
        }
        if (($v = $data['district_name'] ?? null) !== null) {
            $obj->districtName = (string) $v;
        }
        if (($v = $data['eight_group_label'] ?? null) !== null) {
            $obj->eightGroupLabel = (string) $v;
        }
        if (($v = $data['fields'] ?? null) !== null && is_array($v)) {
            $obj->fields = \Oceanengine\Models\LocalReportAudienceGetV30ResponseDataListInnerFields::fromArray($v);
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['province_name'] ?? null) !== null) {
            $obj->provinceName = (string) $v;
        }
        return $obj;
    }
}
