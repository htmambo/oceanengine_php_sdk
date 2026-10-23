<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AudiencePackageCreateV2RequestGeolocationInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $city = null;

    /**
     * @var string
     */
    protected ?string $district = null;

    /**
     * @var float
     */
    protected ?float $lat = null;

    /**
     * @var float
     */
    protected ?float $long = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $province = null;

    /**
     * @var int
     */
    protected ?int $radius = null;

    /**
     * @var string
     */
    protected ?string $street = null;

    /**
     * @var string
     */
    protected ?string $streetNumber = null;

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
     * @return string
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param string $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return float
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     * @return self
     */
    public function setLat(?float $lat): self
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @return float
     */
    public function getLong(): ?float
    {
        return $this->long;
    }

    /**
     * @param float $long
     * @return self
     */
    public function setLong(?float $long): self
    {
        $this->long = $long;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return self
     */
    public function setProvince(?string $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return int
     */
    public function getRadius(): ?int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     * @return self
     */
    public function setRadius(?int $radius): self
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return self
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return self
     */
    public function setStreetNumber(?string $streetNumber): self
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->lat !== null) {
            $result['lat'] = $this->lat;
        }
        if ($this->long !== null) {
            $result['long'] = $this->long;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        if ($this->radius !== null) {
            $result['radius'] = $this->radius;
        }
        if ($this->street !== null) {
            $result['street'] = $this->street;
        }
        if ($this->streetNumber !== null) {
            $result['street_number'] = $this->streetNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['city'] ?? null) !== null) {
            $obj->city = (string) $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['lat'] ?? null) !== null) {
            $obj->lat = (float) $v;
        }
        if (($v = $data['long'] ?? null) !== null) {
            $obj->long = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['province'] ?? null) !== null) {
            $obj->province = (string) $v;
        }
        if (($v = $data['radius'] ?? null) !== null) {
            $obj->radius = (int) $v;
        }
        if (($v = $data['street'] ?? null) !== null) {
            $obj->street = (string) $v;
        }
        if (($v = $data['street_number'] ?? null) !== null) {
            $obj->streetNumber = (string) $v;
        }
        return $obj;
    }
}
