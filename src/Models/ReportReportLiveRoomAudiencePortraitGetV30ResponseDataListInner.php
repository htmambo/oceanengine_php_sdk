<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $age = null;

    /**
     * @var string
     */
    protected ?string $city = null;

    /**
     * @var \Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInnerFields
     */
    protected ?\Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInnerFields $fields = null;

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
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInnerFields
     */
    public function getFields(): ?\Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInnerFields
    {
        return $this->fields;
    }

    /**
     * @param \Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInnerFields $fields
     * @return self
     */
    public function setFields(?\Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInnerFields $fields): self
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
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
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
        if (($v = $data['age'] ?? null) !== null) {
            $obj->age = (string) $v;
        }
        if (($v = $data['city'] ?? null) !== null) {
            $obj->city = (string) $v;
        }
        if (($v = $data['fields'] ?? null) !== null && is_array($v)) {
            $obj->fields = \Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInnerFields::fromArray($v);
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
