<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectCreateV30RequestDeliveryRange implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliveryRangeInventoryCatalog
     */
    protected ?string $inventoryCatalog = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliveryRangeInventoryType[]
     */
    protected ?array $inventoryType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliveryRangeUnionVideoType
     */
    protected ?string $unionVideoType = null;

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliveryRangeInventoryCatalog
     */
    public function getInventoryCatalog(): ?string
    {
        return $this->inventoryCatalog;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliveryRangeInventoryCatalog $inventoryCatalog
     * @return self
     */
    public function setInventoryCatalog(?string $inventoryCatalog): self
    {
        $this->inventoryCatalog = $inventoryCatalog;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliveryRangeInventoryType[]
     */
    public function getInventoryType(): ?array
    {
        return $this->inventoryType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliveryRangeInventoryType[] $inventoryType
     * @return self
     */
    public function setInventoryType(?array $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliveryRangeUnionVideoType
     */
    public function getUnionVideoType(): ?string
    {
        return $this->unionVideoType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliveryRangeUnionVideoType $unionVideoType
     * @return self
     */
    public function setUnionVideoType(?string $unionVideoType): self
    {
        $this->unionVideoType = $unionVideoType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->inventoryCatalog !== null) {
            $result['inventory_catalog'] = $this->inventoryCatalog;
        }
        if ($this->inventoryType !== null) {
            $result['inventory_type'] = $this->inventoryType;
        }
        if ($this->unionVideoType !== null) {
            $result['union_video_type'] = $this->unionVideoType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['inventory_catalog'] ?? null) !== null) {
            $obj->inventoryCatalog = (string) $v;
        }
        if (($v = $data['inventory_type'] ?? null) !== null && is_array($v)) {
            $obj->inventoryType = $v;
        }
        if (($v = $data['union_video_type'] ?? null) !== null) {
            $obj->unionVideoType = (string) $v;
        }
        return $obj;
    }
}
