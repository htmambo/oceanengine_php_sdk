<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileAutoGenerateSourceGetV2MaterialsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\FileAutoGenerateSourceGetV2MaterialsMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileAutoGenerateSourceGetV2MaterialsMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\FileAutoGenerateSourceGetV2MaterialsMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
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
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        return $obj;
    }
}
