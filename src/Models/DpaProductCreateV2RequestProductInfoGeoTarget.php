<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaProductCreateV2RequestProductInfoGeoTarget implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $latitude = null;

    /**
     * @var float
     */
    protected ?float $longitude = null;

    /**
     * @var int
     */
    protected ?int $range = null;

    /**
     * @return float
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return self
     */
    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return self
     */
    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return int
     */
    public function getRange(): ?int
    {
        return $this->range;
    }

    /**
     * @param int $range
     * @return self
     */
    public function setRange(?int $range): self
    {
        $this->range = $range;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->latitude !== null) {
            $result['latitude'] = $this->latitude;
        }
        if ($this->longitude !== null) {
            $result['longitude'] = $this->longitude;
        }
        if ($this->range !== null) {
            $result['range'] = $this->range;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['latitude'] ?? null) !== null) {
            $obj->latitude = (float) $v;
        }
        if (($v = $data['longitude'] ?? null) !== null) {
            $obj->longitude = (float) $v;
        }
        if (($v = $data['range'] ?? null) !== null) {
            $obj->range = (int) $v;
        }
        return $obj;
    }
}
