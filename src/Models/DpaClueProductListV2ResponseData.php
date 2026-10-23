<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaClueProductListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\DpaClueProductListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\DpaClueProductListV2ResponseDataProductsInner[]
     */
    protected ?array $products = null;

    /**
     * @return \Oceanengine\Models\DpaClueProductListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\DpaClueProductListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaClueProductListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\DpaClueProductListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaClueProductListV2ResponseDataProductsInner[]
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param \Oceanengine\Models\DpaClueProductListV2ResponseDataProductsInner[] $products
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
            $obj->pageInfo = \Oceanengine\Models\DpaClueProductListV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['products'] ?? null) !== null && is_array($v)) {
            $obj->products = array_map(fn ($vv) => \Oceanengine\Models\DpaClueProductListV2ResponseDataProductsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
