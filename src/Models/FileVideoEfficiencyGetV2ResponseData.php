<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoEfficiencyGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $inefficientMaterialIds = null;

    /**
     * @return string[]
     */
    public function getInefficientMaterialIds(): ?array
    {
        return $this->inefficientMaterialIds;
    }

    /**
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
