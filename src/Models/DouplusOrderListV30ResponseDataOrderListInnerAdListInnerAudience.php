<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderListV30ResponseDataOrderListInnerAdListInnerAudience implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $age = null;

    /**
     * @var string[]
     */
    protected ?array $authorPkgs = null;

    /**
     * @var string[]
     */
    protected ?array $business = null;

    /**
     * @var string[]
     */
    protected ?array $city = null;

    /**
     * @var string
     */
    protected ?string $deliveryType = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListAudienceDistrict
     */
    protected ?string $district = null;

    /**
     * @var string
     */
    protected ?string $gender = null;

    /**
     * @var string[]
     */
    protected ?array $interestCategories = null;

    /**
     * @var string[]
     */
    protected ?array $platform = null;

    /**
     * @var string[]
     */
    protected ?array $province = null;

    /**
     * @return string[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param string[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAuthorPkgs(): ?array
    {
        return $this->authorPkgs;
    }

    /**
     * @param string[] $authorPkgs
     * @return self
     */
    public function setAuthorPkgs(?array $authorPkgs): self
    {
        $this->authorPkgs = $authorPkgs;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBusiness(): ?array
    {
        return $this->business;
    }

    /**
     * @param string[] $business
     * @return self
     */
    public function setBusiness(?array $business): self
    {
        $this->business = $business;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * @param string[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param string $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListAudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30DataOrderListAdListAudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
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
     * @return string[]
     */
    public function getInterestCategories(): ?array
    {
        return $this->interestCategories;
    }

    /**
     * @param string[] $interestCategories
     * @return self
     */
    public function setInterestCategories(?array $interestCategories): self
    {
        $this->interestCategories = $interestCategories;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * @param string[] $platform
     * @return self
     */
    public function setPlatform(?array $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProvince(): ?array
    {
        return $this->province;
    }

    /**
     * @param string[] $province
     * @return self
     */
    public function setProvince(?array $province): self
    {
        $this->province = $province;
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
        if ($this->authorPkgs !== null) {
            $result['author_pkgs'] = $this->authorPkgs;
        }
        if ($this->business !== null) {
            $result['business'] = $this->business;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->interestCategories !== null) {
            $result['interest_categories'] = $this->interestCategories;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['author_pkgs'] ?? null) !== null && is_array($v)) {
            $obj->authorPkgs = $v;
        }
        if (($v = $data['business'] ?? null) !== null && is_array($v)) {
            $obj->business = $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['interest_categories'] ?? null) !== null && is_array($v)) {
            $obj->interestCategories = $v;
        }
        if (($v = $data['platform'] ?? null) !== null && is_array($v)) {
            $obj->platform = $v;
        }
        if (($v = $data['province'] ?? null) !== null && is_array($v)) {
            $obj->province = $v;
        }
        return $obj;
    }
}
