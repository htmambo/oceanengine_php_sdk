<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileAutoGenerateSourceGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $isAutoGenerate = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var int[]
     */
    protected ?array $sourceMaterialIds = null;

    /**
     * @return int
     */
    public function getIsAutoGenerate(): ?int
    {
        return $this->isAutoGenerate;
    }

    /**
     * @param int $isAutoGenerate
     * @return self
     */
    public function setIsAutoGenerate(?int $isAutoGenerate): self
    {
        $this->isAutoGenerate = $isAutoGenerate;
        return $this;
    }

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
     * @return int[]
     */
    public function getSourceMaterialIds(): ?array
    {
        return $this->sourceMaterialIds;
    }

    /**
     * @param int[] $sourceMaterialIds
     * @return self
     */
    public function setSourceMaterialIds(?array $sourceMaterialIds): self
    {
        $this->sourceMaterialIds = $sourceMaterialIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isAutoGenerate !== null) {
            $result['is_auto_generate'] = $this->isAutoGenerate;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->sourceMaterialIds !== null) {
            $result['source_material_ids'] = $this->sourceMaterialIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_auto_generate'] ?? null) !== null) {
            $obj->isAutoGenerate = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['source_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->sourceMaterialIds = $v;
        }
        return $obj;
    }
}
