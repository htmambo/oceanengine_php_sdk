<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30Filtering implements \JsonSerializable
{
    /**
     * 素材ID精确过滤（MID），服务端去重；仅支持五类主素材(VIDEO/IMAGE/CAROUSEL/TRIAL_PLAY_MATERIAL/INSTANT_PLAY_MATERIAL)。省略表示不按MID过滤；显式传空数组报错；单次最多500个
     * @var string[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialStatusFirst
     */
    protected ?string $materialStatusFirst = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialStatusSecond
     */
    protected ?string $materialStatusSecond = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialType
     */
    protected ?string $materialType = null;

    /**
     * 搜索关键词；有值时必须同时指定material_type
     * @var string
     */
    protected ?string $searchKeyword = null;

    /**
     * 素材ID精确过滤（MID），服务端去重；仅支持五类主素材(VIDEO/IMAGE/CAROUSEL/TRIAL_PLAY_MATERIAL/INSTANT_PLAY_MATERIAL)。省略表示不按MID过滤；显式传空数组报错；单次最多500个
     * @return string[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材ID精确过滤（MID），服务端去重；仅支持五类主素材(VIDEO/IMAGE/CAROUSEL/TRIAL_PLAY_MATERIAL/INSTANT_PLAY_MATERIAL)。省略表示不按MID过滤；显式传空数组报错；单次最多500个
     * @param string[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialStatusFirst
     */
    public function getMaterialStatusFirst(): ?string
    {
        return $this->materialStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialStatusFirst $materialStatusFirst
     * @return self
     */
    public function setMaterialStatusFirst(?string $materialStatusFirst): self
    {
        $this->materialStatusFirst = $materialStatusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialStatusSecond
     */
    public function getMaterialStatusSecond(): ?string
    {
        return $this->materialStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialStatusSecond $materialStatusSecond
     * @return self
     */
    public function setMaterialStatusSecond(?string $materialStatusSecond): self
    {
        $this->materialStatusSecond = $materialStatusSecond;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30FilteringMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * 搜索关键词；有值时必须同时指定material_type
     * @return string
     */
    public function getSearchKeyword(): ?string
    {
        return $this->searchKeyword;
    }

    /**
     * 搜索关键词；有值时必须同时指定material_type
     * @param string $searchKeyword
     * @return self
     */
    public function setSearchKeyword(?string $searchKeyword): self
    {
        $this->searchKeyword = $searchKeyword;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialStatusFirst !== null) {
            $result['material_status_first'] = $this->materialStatusFirst;
        }
        if ($this->materialStatusSecond !== null) {
            $result['material_status_second'] = $this->materialStatusSecond;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->searchKeyword !== null) {
            $result['search_keyword'] = $this->searchKeyword;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['material_status_first'] ?? null) !== null) {
            $obj->materialStatusFirst = (string) $v;
        }
        if (($v = $data['material_status_second'] ?? null) !== null) {
            $obj->materialStatusSecond = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['search_keyword'] ?? null) !== null) {
            $obj->searchKeyword = (string) $v;
        }
        return $obj;
    }
}
