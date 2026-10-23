<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectUpdateV30RequestRelatedProduct implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestRelatedProductProductsInner[]
     */
    protected ?array $products = null;

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestRelatedProductProductsInner[]
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestRelatedProductProductsInner[] $products
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->products !== null) {
            $result['products'] = $this->products;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['products'] ?? null) !== null && is_array($v)) {
            $obj->products = array_map(fn ($vv) => \Oceanengine\Models\ProjectUpdateV30RequestRelatedProductProductsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
