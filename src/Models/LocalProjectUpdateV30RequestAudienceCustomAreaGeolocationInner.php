<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectUpdateV30RequestAudienceCustomAreaGeolocationInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $areaRadius = null;

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
     * @return int
     */
    public function getAreaRadius(): ?int
    {
        return $this->areaRadius;
    }

    /**
     * @param int $areaRadius
     * @return self
     */
    public function setAreaRadius(?int $areaRadius): self
    {
        $this->areaRadius = $areaRadius;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->areaRadius !== null) {
            $result['area_radius'] = $this->areaRadius;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['area_radius'] ?? null) !== null) {
            $obj->areaRadius = (int) $v;
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
        return $obj;
    }
}
