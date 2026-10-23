<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandRegionGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandRegionGetV30ResponseDataRegionsInner[]
     */
    protected ?array $regions = null;

    /**
     * @return \Oceanengine\Models\BrandRegionGetV30ResponseDataRegionsInner[]
     */
    public function getRegions(): ?array
    {
        return $this->regions;
    }

    /**
     * @param \Oceanengine\Models\BrandRegionGetV30ResponseDataRegionsInner[] $regions
     * @return self
     */
    public function setRegions(?array $regions): self
    {
        $this->regions = $regions;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->regions !== null) {
            $result['regions'] = $this->regions;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['regions'] ?? null) !== null && is_array($v)) {
            $obj->regions = array_map(fn ($vv) => \Oceanengine\Models\BrandRegionGetV30ResponseDataRegionsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
