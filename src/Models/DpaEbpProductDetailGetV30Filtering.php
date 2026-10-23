<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpProductDetailGetV30Filtering implements \JsonSerializable
{
    /**
     * 商品ID
     * @var string
     */
    protected ?string $productId = null;

    /**
     * 商品ID
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * 商品ID
     * @param string $productId
     * @return self
     */
    public function setProductId(?string $productId): self
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
            $obj->productId = (string) $v;
        }
        return $obj;
    }
}
