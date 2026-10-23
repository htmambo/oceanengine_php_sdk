<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceUpdateV30RequestDistrictAudienceGeolocationInner implements \JsonSerializable
{
    /**
     * 纬度
     * @var float
     */
    protected ?float $lat = null;

    /**
     * 经度
     * @var float
     */
    protected ?float $long = null;

    /**
     * 地点名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 半径，单位为m，允许值为：3000～30000，默认值为6000
     * @var int
     */
    protected ?int $radius = null;

    /**
     * 纬度
     * @return float
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }

    /**
     * 纬度
     * @param float $lat
     * @return self
     */
    public function setLat(?float $lat): self
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * 经度
     * @return float
     */
    public function getLong(): ?float
    {
        return $this->long;
    }

    /**
     * 经度
     * @param float $long
     * @return self
     */
    public function setLong(?float $long): self
    {
        $this->long = $long;
        return $this;
    }

    /**
     * 地点名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 地点名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 半径，单位为m，允许值为：3000～30000，默认值为6000
     * @return int
     */
    public function getRadius(): ?int
    {
        return $this->radius;
    }

    /**
     * 半径，单位为m，允许值为：3000～30000，默认值为6000
     * @param int $radius
     * @return self
     */
    public function setRadius(?int $radius): self
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->lat !== null) {
            $result['lat'] = $this->lat;
        }
        if ($this->long !== null) {
            $result['long'] = $this->long;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->radius !== null) {
            $result['radius'] = $this->radius;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['lat'] ?? null) !== null) {
            $obj->lat = (float) $v;
        }
        if (($v = $data['long'] ?? null) !== null) {
            $obj->long = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['radius'] ?? null) !== null) {
            $obj->radius = (int) $v;
        }
        return $obj;
    }
}
