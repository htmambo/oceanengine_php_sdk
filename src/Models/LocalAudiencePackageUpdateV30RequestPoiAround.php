<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageUpdateV30RequestPoiAround implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius
     */
    protected ?string $poiAroundRadius = null;

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius
     */
    public function getPoiAroundRadius(): ?string
    {
        return $this->poiAroundRadius;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius $poiAroundRadius
     * @return self
     */
    public function setPoiAroundRadius(?string $poiAroundRadius): self
    {
        $this->poiAroundRadius = $poiAroundRadius;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->poiAroundRadius !== null) {
            $result['poi_around_radius'] = $this->poiAroundRadius;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['poi_around_radius'] ?? null) !== null) {
            $obj->poiAroundRadius = (string) $v;
        }
        return $obj;
    }
}
