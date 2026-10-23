<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInner[]
     */
    protected ?array $products = null;

    /**
     * @var int
     */
    protected ?int $total = null;

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInner[]
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInner[] $products
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;
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
        if ($this->products !== null) {
            $result['products'] = $this->products;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['products'] ?? null) !== null && is_array($v)) {
            $obj->products = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
