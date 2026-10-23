<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportAdMaterialGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportAdMaterialGetV10FilteringMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var int[]
     */
    protected ?array $objectIds = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportAdMaterialGetV10FilteringMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportAdMaterialGetV10FilteringMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getObjectIds(): ?array
    {
        return $this->objectIds;
    }

    /**
     * @param int[] $objectIds
     * @return self
     */
    public function setObjectIds(?array $objectIds): self
    {
        $this->objectIds = $objectIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->objectIds !== null) {
            $result['object_ids'] = $this->objectIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['object_ids'] ?? null) !== null && is_array($v)) {
            $obj->objectIds = $v;
        }
        return $obj;
    }
}
