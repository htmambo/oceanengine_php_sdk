<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialListV2ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\FileMaterialListV2DataMaterialsMaterialProperties[]
     */
    protected ?array $materialProperties = null;

    /**
     * @var int
     */
    protected ?int $matetrialId = null;

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
     * @return \Oceanengine\Models\FileMaterialListV2DataMaterialsMaterialProperties[]
     */
    public function getMaterialProperties(): ?array
    {
        return $this->materialProperties;
    }

    /**
     * @param \Oceanengine\Models\FileMaterialListV2DataMaterialsMaterialProperties[] $materialProperties
     * @return self
     */
    public function setMaterialProperties(?array $materialProperties): self
    {
        $this->materialProperties = $materialProperties;
        return $this;
    }

    /**
     * @return int
     */
    public function getMatetrialId(): ?int
    {
        return $this->matetrialId;
    }

    /**
     * @param int $matetrialId
     * @return self
     */
    public function setMatetrialId(?int $matetrialId): self
    {
        $this->matetrialId = $matetrialId;
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
        if ($this->materialProperties !== null) {
            $result['material_properties'] = $this->materialProperties;
        }
        if ($this->matetrialId !== null) {
            $result['matetrial_id'] = $this->matetrialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_properties'] ?? null) !== null && is_array($v)) {
            $obj->materialProperties = $v;
        }
        if (($v = $data['matetrial_id'] ?? null) !== null) {
            $obj->matetrialId = (int) $v;
        }
        return $obj;
    }
}
