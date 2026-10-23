<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProductGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProductGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalProductGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 商品信息
     * @var \Oceanengine\Models\LocalProductGetV30ResponseDataProductsInner[]
     */
    protected ?array $products = null;

    /**
     * @return \Oceanengine\Models\LocalProductGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalProductGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalProductGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalProductGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 商品信息
     * @return \Oceanengine\Models\LocalProductGetV30ResponseDataProductsInner[]
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * 商品信息
     * @param \Oceanengine\Models\LocalProductGetV30ResponseDataProductsInner[] $products
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
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->products !== null) {
            $result['products'] = $this->products;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalProductGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['products'] ?? null) !== null && is_array($v)) {
            $obj->products = array_map(fn ($vv) => \Oceanengine\Models\LocalProductGetV30ResponseDataProductsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
