<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileCarouselAwemeGetV30Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        return $obj;
    }
}
