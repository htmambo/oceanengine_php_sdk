<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaProductUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        return $obj;
    }
}
