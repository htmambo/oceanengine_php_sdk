<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcMaterialGetV30Filter implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30FilterMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30FilterMaterialTypes
     */
    protected ?string $materialTypes = null;

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30FilterMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30FilterMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30FilterMaterialTypes
     */
    public function getMaterialTypes(): ?string
    {
        return $this->materialTypes;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30FilterMaterialTypes $materialTypes
     * @return self
     */
    public function setMaterialTypes(?string $materialTypes): self
    {
        $this->materialTypes = $materialTypes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
        }
        if ($this->materialTypes !== null) {
            $result['material_types'] = $this->materialTypes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        if (($v = $data['material_types'] ?? null) !== null) {
            $obj->materialTypes = (string) $v;
        }
        return $obj;
    }
}
