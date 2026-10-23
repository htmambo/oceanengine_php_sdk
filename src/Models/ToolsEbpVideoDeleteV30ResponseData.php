<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $failMaterialIds = null;

    /**
     * @return int[]
     */
    public function getFailMaterialIds(): ?array
    {
        return $this->failMaterialIds;
    }

    /**
     * @param int[] $failMaterialIds
     * @return self
     */
    public function setFailMaterialIds(?array $failMaterialIds): self
    {
        $this->failMaterialIds = $failMaterialIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failMaterialIds !== null) {
            $result['fail_material_ids'] = $this->failMaterialIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->failMaterialIds = $v;
        }
        return $obj;
    }
}
