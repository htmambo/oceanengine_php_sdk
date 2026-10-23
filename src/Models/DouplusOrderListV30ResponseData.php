<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInner[]
     */
    protected ?array $orderList = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\DouplusOrderListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInner[]
     */
    public function getOrderList(): ?array
    {
        return $this->orderList;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInner[] $orderList
     * @return self
     */
    public function setOrderList(?array $orderList): self
    {
        $this->orderList = $orderList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\DouplusOrderListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\DouplusOrderListV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->orderList !== null) {
            $result['order_list'] = $this->orderList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_list'] ?? null) !== null && is_array($v)) {
            $obj->orderList = array_map(fn ($vv) => \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\DouplusOrderListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
