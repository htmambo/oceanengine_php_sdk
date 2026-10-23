<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCountryInfoV2ResponseData implements \JsonSerializable
{
    /**
     * 行政区域信息
     * @var \Oceanengine\Models\ToolsCountryInfoV2ResponseDataDistrictsInner[]
     */
    protected ?array $districts = null;

    /**
     * 行政区域信息
     * @return \Oceanengine\Models\ToolsCountryInfoV2ResponseDataDistrictsInner[]
     */
    public function getDistricts(): ?array
    {
        return $this->districts;
    }

    /**
     * 行政区域信息
     * @param \Oceanengine\Models\ToolsCountryInfoV2ResponseDataDistrictsInner[] $districts
     * @return self
     */
    public function setDistricts(?array $districts): self
    {
        $this->districts = $districts;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->districts !== null) {
            $result['districts'] = $this->districts;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['districts'] ?? null) !== null && is_array($v)) {
            $obj->districts = array_map(fn ($vv) => \Oceanengine\Models\ToolsCountryInfoV2ResponseDataDistrictsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
