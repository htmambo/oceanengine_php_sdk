<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseMaterialIdsGetV30ResponseData implements \JsonSerializable
{
    /**
     * 项目下素材ID列表（仅返回项目下可用素材列表，若素材被删除 不在本接口返回）
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseMaterialIdsGetV30ResponseDataMaterialListInner[]
     */
    protected ?array $materialList = null;

    /**
     * 项目下素材ID列表（仅返回项目下可用素材列表，若素材被删除 不在本接口返回）
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 项目下素材ID列表（仅返回项目下可用素材列表，若素材被删除 不在本接口返回）
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseMaterialIdsGetV30ResponseDataMaterialListInner[]
     */
    public function getMaterialList(): ?array
    {
        return $this->materialList;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseMaterialIdsGetV30ResponseDataMaterialListInner[] $materialList
     * @return self
     */
    public function setMaterialList(?array $materialList): self
    {
        $this->materialList = $materialList;
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
        if ($this->materialList !== null) {
            $result['material_list'] = $this->materialList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['material_list'] ?? null) !== null && is_array($v)) {
            $obj->materialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsMaterialRaiseMaterialIdsGetV30ResponseDataMaterialListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
