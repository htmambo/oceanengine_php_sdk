<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerPoiAround implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius
     */
    protected ?string $poiAroundRadius = null;

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius
     */
    public function getPoiAroundRadius(): ?string
    {
        return $this->poiAroundRadius;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius $poiAroundRadius
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
