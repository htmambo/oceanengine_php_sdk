<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInnerAudienceGeolocationInner implements \JsonSerializable
{
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
     * @var int
     */
    protected ?int $radius = null;

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
