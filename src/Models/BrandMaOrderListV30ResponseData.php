<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaOrderListV30ResponseData implements \JsonSerializable
{
    /**
     * 返回预订单数组
     * @var \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInner[]
     */
    protected ?array $orders = null;

    /**
     * @var \Oceanengine\Models\BrandMaOrderListV30ResponseDataPageResp
     */
    protected ?\Oceanengine\Models\BrandMaOrderListV30ResponseDataPageResp $pageResp = null;

    /**
     * 返回预订单数组
     * @return \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInner[]
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * 返回预订单数组
     * @param \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInner[] $orders
     * @return self
     */
    public function setOrders(?array $orders): self
    {
        $this->orders = $orders;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaOrderListV30ResponseDataPageResp
     */
    public function getPageResp(): ?\Oceanengine\Models\BrandMaOrderListV30ResponseDataPageResp
    {
        return $this->pageResp;
    }

    /**
     * @param \Oceanengine\Models\BrandMaOrderListV30ResponseDataPageResp $pageResp
     * @return self
     */
    public function setPageResp(?\Oceanengine\Models\BrandMaOrderListV30ResponseDataPageResp $pageResp): self
    {
        $this->pageResp = $pageResp;
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
        if ($this->pageResp !== null) {
            $result['page_resp'] = $this->pageResp;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['orders'] ?? null) !== null && is_array($v)) {
            $obj->orders = array_map(fn ($vv) => \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInner::fromArray($vv), $v);
        }
        if (($v = $data['page_resp'] ?? null) !== null && is_array($v)) {
            $obj->pageResp = \Oceanengine\Models\BrandMaOrderListV30ResponseDataPageResp::fromArray($v);
        }
        return $obj;
    }
}
