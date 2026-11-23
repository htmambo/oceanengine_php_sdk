<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfAdInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 半自助计划信息列表
     * @var \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInner[]
     */
    protected ?array $adInfos = null;

    /**
     * 半自助计划信息列表
     * @return \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInner[]
     */
    public function getAdInfos(): ?array
    {
        return $this->adInfos;
    }

    /**
     * 半自助计划信息列表
     * @param \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInner[] $adInfos
     * @return self
     */
    public function setAdInfos(?array $adInfos): self
    {
        $this->adInfos = $adInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adInfos !== null) {
            $result['ad_infos'] = $this->adInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_infos'] ?? null) !== null && is_array($v)) {
            $obj->adInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
