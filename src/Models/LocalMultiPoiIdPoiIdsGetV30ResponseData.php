<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalMultiPoiIdPoiIdsGetV30ResponseData implements \JsonSerializable
{
    /**
     * key：multi_poi_id value: poi_ids
     * @var \Oceanengine\Models\LocalMultiPoiIdPoiIdsGetV30ResponseDataMultiPoiInfoInner[]
     */
    protected ?array $multiPoiInfo = null;

    /**
     * key：multi_poi_id value: poi_ids
     * @return \Oceanengine\Models\LocalMultiPoiIdPoiIdsGetV30ResponseDataMultiPoiInfoInner[]
     */
    public function getMultiPoiInfo(): ?array
    {
        return $this->multiPoiInfo;
    }

    /**
     * key：multi_poi_id value: poi_ids
     * @param \Oceanengine\Models\LocalMultiPoiIdPoiIdsGetV30ResponseDataMultiPoiInfoInner[] $multiPoiInfo
     * @return self
     */
    public function setMultiPoiInfo(?array $multiPoiInfo): self
    {
        $this->multiPoiInfo = $multiPoiInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->multiPoiInfo !== null) {
            $result['multi_poi_info'] = $this->multiPoiInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['multi_poi_info'] ?? null) !== null && is_array($v)) {
            $obj->multiPoiInfo = array_map(fn ($vv) => \Oceanengine\Models\LocalMultiPoiIdPoiIdsGetV30ResponseDataMultiPoiInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
