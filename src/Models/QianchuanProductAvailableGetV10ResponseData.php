<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanProductAvailableGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataProductListInner[]
     */
    protected ?array $productList = null;

    /**
     * @return \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataProductListInner[]
     */
    public function getProductList(): ?array
    {
        return $this->productList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataProductListInner[] $productList
     * @return self
     */
    public function setProductList(?array $productList): self
    {
        $this->productList = $productList;
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
        if ($this->productList !== null) {
            $result['product_list'] = $this->productList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['product_list'] ?? null) !== null && is_array($v)) {
            $obj->productList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataProductListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
