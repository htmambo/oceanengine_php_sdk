<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarProviderTaskItemListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarProviderTaskItemListV2ResponseDataItemListInner[]
     */
    protected ?array $itemList = null;

    /**
     * @var \Oceanengine\Models\StarProviderTaskItemListV2ResponseDataPagination
     */
    protected ?\Oceanengine\Models\StarProviderTaskItemListV2ResponseDataPagination $pagination = null;

    /**
     * @return \Oceanengine\Models\StarProviderTaskItemListV2ResponseDataItemListInner[]
     */
    public function getItemList(): ?array
    {
        return $this->itemList;
    }

    /**
     * @param \Oceanengine\Models\StarProviderTaskItemListV2ResponseDataItemListInner[] $itemList
     * @return self
     */
    public function setItemList(?array $itemList): self
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarProviderTaskItemListV2ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\StarProviderTaskItemListV2ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\StarProviderTaskItemListV2ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\StarProviderTaskItemListV2ResponseDataPagination $pagination): self
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
        if ($this->itemList !== null) {
            $result['item_list'] = $this->itemList;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_list'] ?? null) !== null && is_array($v)) {
            $obj->itemList = array_map(fn ($vv) => \Oceanengine\Models\StarProviderTaskItemListV2ResponseDataItemListInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\StarProviderTaskItemListV2ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
