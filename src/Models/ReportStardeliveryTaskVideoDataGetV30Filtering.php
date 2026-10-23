<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportStardeliveryTaskVideoDataGetV30Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod
     */
    protected ?string $starMaterialPurchaseMethod = null;

    /**
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod
     */
    public function getStarMaterialPurchaseMethod(): ?string
    {
        return $this->starMaterialPurchaseMethod;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30FilteringStarMaterialPurchaseMethod $starMaterialPurchaseMethod
     * @return self
     */
    public function setStarMaterialPurchaseMethod(?string $starMaterialPurchaseMethod): self
    {
        $this->starMaterialPurchaseMethod = $starMaterialPurchaseMethod;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->starMaterialPurchaseMethod !== null) {
            $result['star_material_purchase_method'] = $this->starMaterialPurchaseMethod;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['star_material_purchase_method'] ?? null) !== null) {
            $obj->starMaterialPurchaseMethod = (string) $v;
        }
        return $obj;
    }
}
