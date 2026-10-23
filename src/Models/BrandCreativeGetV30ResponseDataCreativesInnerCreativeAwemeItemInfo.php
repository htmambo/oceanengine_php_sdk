<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeAwemeItemInfo implements \JsonSerializable
{
    /**
     * 视频ID
     * @var string
     */
    protected ?string $itemId = null;

    /**
     * 视频ID
     * @return string
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    /**
     * 视频ID
     * @param string $itemId
     * @return self
     */
    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (string) $v;
        }
        return $obj;
    }
}
