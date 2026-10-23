<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectDetailV30ResponseDataAudienceCustomAreaInner implements \JsonSerializable
{
    /**
     * 自定义区域半径，单位为m
     * @var int
     */
    protected ?int $areaRadius = null;

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
     * 自定义区域半径，单位为m
     * @return int
     */
    public function getAreaRadius(): ?int
    {
        return $this->areaRadius;
    }

    /**
     * 自定义区域半径，单位为m
     * @param int $areaRadius
     * @return self
     */
    public function setAreaRadius(?int $areaRadius): self
    {
        $this->areaRadius = $areaRadius;
        return $this;
    }

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
