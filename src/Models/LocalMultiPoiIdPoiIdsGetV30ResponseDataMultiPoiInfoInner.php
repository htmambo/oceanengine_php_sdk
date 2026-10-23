<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalMultiPoiIdPoiIdsGetV30ResponseDataMultiPoiInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $multiPoiId = null;

    /**
     * @var int[]
     */
    protected ?array $poiIds = null;

    /**
     * @return int
     */
    public function getMultiPoiId(): ?int
    {
        return $this->multiPoiId;
    }

    /**
     * @param int $multiPoiId
     * @return self
     */
    public function setMultiPoiId(?int $multiPoiId): self
    {
        $this->multiPoiId = $multiPoiId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPoiIds(): ?array
    {
        return $this->poiIds;
    }

    /**
     * @param int[] $poiIds
     * @return self
     */
    public function setPoiIds(?array $poiIds): self
    {
        $this->poiIds = $poiIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->multiPoiId !== null) {
            $result['multi_poi_id'] = $this->multiPoiId;
        }
        if ($this->poiIds !== null) {
            $result['poi_ids'] = $this->poiIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['multi_poi_id'] ?? null) !== null) {
            $obj->multiPoiId = (int) $v;
        }
        if (($v = $data['poi_ids'] ?? null) !== null && is_array($v)) {
            $obj->poiIds = $v;
        }
        return $obj;
    }
}
