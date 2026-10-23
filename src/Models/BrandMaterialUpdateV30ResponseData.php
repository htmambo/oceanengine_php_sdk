<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * 创意ID-创意名称映射关系
     * @var array<string,string>
     */
    protected ?array $materialIdNameMap = null;

    /**
     * 新增创意ID
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 创意ID-创意名称映射关系
     * @return array<string,string>
     */
    public function getMaterialIdNameMap(): ?array
    {
        return $this->materialIdNameMap;
    }

    /**
     * 创意ID-创意名称映射关系
     * @param array<string,string> $materialIdNameMap
     * @return self
     */
    public function setMaterialIdNameMap(?array $materialIdNameMap): self
    {
        $this->materialIdNameMap = $materialIdNameMap;
        return $this;
    }

    /**
     * 新增创意ID
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 新增创意ID
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialIdNameMap !== null) {
            $result['material_id_name_map'] = $this->materialIdNameMap;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id_name_map'] ?? null) !== null && is_array($v)) {
            $obj->materialIdNameMap = $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        return $obj;
    }
}
