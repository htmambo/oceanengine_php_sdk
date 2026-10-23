<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFileVideoEfficiencyGetV10ResponseData implements \JsonSerializable
{
    /**
     * 低效素材id列表
     * @var string[]
     */
    protected ?array $inefficientMaterialIds = null;

    /**
     * 低效素材id列表
     * @return string[]
     */
    public function getInefficientMaterialIds(): ?array
    {
        return $this->inefficientMaterialIds;
    }

    /**
     * 低效素材id列表
     * @param string[] $inefficientMaterialIds
     * @return self
     */
    public function setInefficientMaterialIds(?array $inefficientMaterialIds): self
    {
        $this->inefficientMaterialIds = $inefficientMaterialIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->inefficientMaterialIds !== null) {
            $result['inefficient_material_ids'] = $this->inefficientMaterialIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['inefficient_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->inefficientMaterialIds = $v;
        }
        return $obj;
    }
}
