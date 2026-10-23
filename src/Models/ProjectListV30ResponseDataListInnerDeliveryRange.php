<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInnerDeliveryRange implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliveryRangeInventoryCatalog
     */
    protected ?string $inventoryCatalog = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliveryRangeInventoryType[]
     */
    protected ?array $inventoryType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliveryRangeUnionVideoType
     */
    protected ?string $unionVideoType = null;

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliveryRangeInventoryCatalog
     */
    public function getInventoryCatalog(): ?string
    {
        return $this->inventoryCatalog;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliveryRangeInventoryCatalog $inventoryCatalog
     * @return self
     */
    public function setInventoryCatalog(?string $inventoryCatalog): self
    {
        $this->inventoryCatalog = $inventoryCatalog;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliveryRangeInventoryType[]
     */
    public function getInventoryType(): ?array
    {
        return $this->inventoryType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliveryRangeInventoryType[] $inventoryType
     * @return self
     */
    public function setInventoryType(?array $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliveryRangeUnionVideoType
     */
    public function getUnionVideoType(): ?string
    {
        return $this->unionVideoType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliveryRangeUnionVideoType $unionVideoType
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
