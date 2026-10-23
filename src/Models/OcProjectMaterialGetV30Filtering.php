<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30Filtering implements \JsonSerializable
{
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
     * @var string
     */
    protected ?string $searchKeyword = null;

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
     * @return string
     */
    public function getSearchKeyword(): ?string
    {
        return $this->searchKeyword;
    }

    /**
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
