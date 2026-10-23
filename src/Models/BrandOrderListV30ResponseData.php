<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseData implements \JsonSerializable
{
    /**
     * 预定单列表
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInner[]
     */
    protected ?array $orders = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 预定单列表
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInner[]
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * 预定单列表
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInner[] $orders
     * @return self
     */
    public function setOrders(?array $orders): self
    {
        $this->orders = $orders;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\BrandOrderListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orders !== null) {
            $result['orders'] = $this->orders;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['orders'] ?? null) !== null && is_array($v)) {
            $obj->orders = array_map(fn ($vv) => \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\BrandOrderListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
