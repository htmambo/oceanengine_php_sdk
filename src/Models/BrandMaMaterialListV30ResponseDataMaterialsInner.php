<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaMaterialListV30ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * 投放创意信息
     * @var \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerCreativeDataInner[]
     */
    protected ?array $creativeData = null;

    /**
     * @var \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialDate
     */
    protected ?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialDate $materialDate = null;

    /**
     * @var \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialGroup
     */
    protected ?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialGroup $materialGroup = null;

    /**
     * 投放创意信息
     * @return \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerCreativeDataInner[]
     */
    public function getCreativeData(): ?array
    {
        return $this->creativeData;
    }

    /**
     * 投放创意信息
     * @param \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerCreativeDataInner[] $creativeData
     * @return self
     */
    public function setCreativeData(?array $creativeData): self
    {
        $this->creativeData = $creativeData;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialDate
     */
    public function getMaterialDate(): ?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialDate
    {
        return $this->materialDate;
    }

    /**
     * @param \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialDate $materialDate
     * @return self
     */
    public function setMaterialDate(?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialDate $materialDate): self
    {
        $this->materialDate = $materialDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialGroup
     */
    public function getMaterialGroup(): ?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialGroup
    {
        return $this->materialGroup;
    }

    /**
     * @param \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialGroup $materialGroup
     * @return self
     */
    public function setMaterialGroup(?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialGroup $materialGroup): self
    {
        $this->materialGroup = $materialGroup;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeData !== null) {
            $result['creative_data'] = $this->creativeData;
        }
        if ($this->materialDate !== null) {
            $result['material_date'] = $this->materialDate;
        }
        if ($this->materialGroup !== null) {
            $result['material_group'] = $this->materialGroup;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_data'] ?? null) !== null && is_array($v)) {
            $obj->creativeData = array_map(fn ($vv) => \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerCreativeDataInner::fromArray($vv), $v);
        }
        if (($v = $data['material_date'] ?? null) !== null && is_array($v)) {
            $obj->materialDate = \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialDate::fromArray($v);
        }
        if (($v = $data['material_group'] ?? null) !== null && is_array($v)) {
            $obj->materialGroup = \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialGroup::fromArray($v);
        }
        return $obj;
    }
}
