<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialDetailV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileMaterialDetailV2ResponseDataMaterialsInner[]
     */
    protected ?array $materials = null;

    /**
     * @return \Oceanengine\Models\FileMaterialDetailV2ResponseDataMaterialsInner[]
     */
    public function getMaterials(): ?array
    {
        return $this->materials;
    }

    /**
     * @param \Oceanengine\Models\FileMaterialDetailV2ResponseDataMaterialsInner[] $materials
     * @return self
     */
    public function setMaterials(?array $materials): self
    {
        $this->materials = $materials;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materials !== null) {
            $result['materials'] = $this->materials;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['materials'] ?? null) !== null && is_array($v)) {
            $obj->materials = array_map(fn ($vv) => \Oceanengine\Models\FileMaterialDetailV2ResponseDataMaterialsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
