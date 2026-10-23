<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRange implements \JsonSerializable
{
    /**
     * 共享范围的 list
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRangeItemsInner[]
     */
    protected ?array $items = null;

    /**
     * 共享范围的 list
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRangeItemsInner[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * 共享范围的 list
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRangeItemsInner[] $items
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['items'] ?? null) !== null && is_array($v)) {
            $obj->items = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRangeItemsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
