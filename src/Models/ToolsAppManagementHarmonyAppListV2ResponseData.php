<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementHarmonyAppListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2ResponseDataItemsInner[]
     */
    protected ?array $items = null;

    /**
     * @var int
     */
    protected ?int $page = null;

    /**
     * @var int
     */
    protected ?int $size = null;

    /**
     * @var int
     */
    protected ?int $total = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2ResponseDataItemsInner[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2ResponseDataItemsInner[] $items
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->items !== null) {
            $result['items'] = $this->items;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->size !== null) {
            $result['size'] = $this->size;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['items'] ?? null) !== null && is_array($v)) {
            $obj->items = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2ResponseDataItemsInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['size'] ?? null) !== null) {
            $obj->size = (int) $v;
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
