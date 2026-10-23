<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcProjectGetV30ResponseDataAudiencePoiAround implements \JsonSerializable
{
    /**
     * 定向门店id列表
     * @var int[]
     */
    protected ?array $poiAroundIds = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectGetV30DataAudiencePoiAroundPoiAroundRadius
     */
    protected ?string $poiAroundRadius = null;

    /**
     * 定向门店id列表
     * @return int[]
     */
    public function getPoiAroundIds(): ?array
    {
        return $this->poiAroundIds;
    }

    /**
     * 定向门店id列表
     * @param int[] $poiAroundIds
     * @return self
     */
    public function setPoiAroundIds(?array $poiAroundIds): self
    {
        $this->poiAroundIds = $poiAroundIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectGetV30DataAudiencePoiAroundPoiAroundRadius
     */
    public function getPoiAroundRadius(): ?string
    {
        return $this->poiAroundRadius;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectGetV30DataAudiencePoiAroundPoiAroundRadius $poiAroundRadius
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
        if ($this->poiAroundIds !== null) {
            $result['poi_around_ids'] = $this->poiAroundIds;
        }
        if ($this->poiAroundRadius !== null) {
            $result['poi_around_radius'] = $this->poiAroundRadius;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['poi_around_ids'] ?? null) !== null && is_array($v)) {
            $obj->poiAroundIds = $v;
        }
        if (($v = $data['poi_around_radius'] ?? null) !== null) {
            $obj->poiAroundRadius = (string) $v;
        }
        return $obj;
    }
}
