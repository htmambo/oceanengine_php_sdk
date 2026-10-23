<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInner[]
     */
    protected ?array $items = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataPagination
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataPagination $pagination = null;

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInner[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInner[] $items
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
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
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['items'] ?? null) !== null && is_array($v)) {
            $obj->items = array_map(fn ($vv) => \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
