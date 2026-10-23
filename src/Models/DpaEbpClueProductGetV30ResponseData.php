<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaEbpClueProductGetV30ResponseDataProductsInner[]
     */
    protected ?array $products = null;

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductGetV30ResponseDataProductsInner[]
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductGetV30ResponseDataProductsInner[] $products
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
            $obj->products = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpClueProductGetV30ResponseDataProductsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
