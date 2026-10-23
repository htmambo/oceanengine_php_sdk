<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFileVideoOriginalGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $originalMaterialIds = null;

    /**
     * @return string[]
     */
    public function getOriginalMaterialIds(): ?array
    {
        return $this->originalMaterialIds;
    }

    /**
     * @param string[] $originalMaterialIds
     * @return self
     */
    public function setOriginalMaterialIds(?array $originalMaterialIds): self
    {
        $this->originalMaterialIds = $originalMaterialIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->originalMaterialIds !== null) {
            $result['original_material_ids'] = $this->originalMaterialIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['original_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->originalMaterialIds = $v;
        }
        return $obj;
    }
}
