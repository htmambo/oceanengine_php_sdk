<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataCityLevelLevel
     */
    protected ?string $level = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInnerRegionsInner[]
     */
    protected ?array $regions = null;

    /**
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataCityLevelLevel
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataCityLevelLevel $level
     * @return self
     */
    public function setLevel(?string $level): self
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInnerRegionsInner[]
     */
    public function getRegions(): ?array
    {
        return $this->regions;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInnerRegionsInner[] $regions
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
        if ($this->level !== null) {
            $result['level'] = $this->level;
        }
        if ($this->regions !== null) {
            $result['regions'] = $this->regions;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['level'] ?? null) !== null) {
            $obj->level = (string) $v;
        }
        if (($v = $data['regions'] ?? null) !== null && is_array($v)) {
            $obj->regions = array_map(fn ($vv) => \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataCityLevelInnerRegionsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
