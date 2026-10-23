<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpLibraryListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\DpaEbpLibraryListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 商品库list
     * @var \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInner[]
     */
    protected ?array $productLibraryList = null;

    /**
     * @return \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\DpaEbpLibraryListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\DpaEbpLibraryListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 商品库list
     * @return \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInner[]
     */
    public function getProductLibraryList(): ?array
    {
        return $this->productLibraryList;
    }

    /**
     * 商品库list
     * @param \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInner[] $productLibraryList
     * @return self
     */
    public function setProductLibraryList(?array $productLibraryList): self
    {
        $this->productLibraryList = $productLibraryList;
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
        if ($this->productLibraryList !== null) {
            $result['product_library_list'] = $this->productLibraryList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['product_library_list'] ?? null) !== null && is_array($v)) {
            $obj->productLibraryList = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
