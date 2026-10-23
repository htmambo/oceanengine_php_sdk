<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileQualitySubmitV30ResponseData implements \JsonSerializable
{
    /**
     * 预审ID
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 预审ID
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 预审ID
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
