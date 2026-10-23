<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceApplyOrderListV30ResponseData implements \JsonSerializable
{
    /**
     * 开票申请单列表
     * @var \Oceanengine\Models\InvoiceApplyOrderListV30ResponseDataApplyOrderListInner[]
     */
    protected ?array $applyOrderList = null;

    /**
     * 开票申请单列表
     * @return \Oceanengine\Models\InvoiceApplyOrderListV30ResponseDataApplyOrderListInner[]
     */
    public function getApplyOrderList(): ?array
    {
        return $this->applyOrderList;
    }

    /**
     * 开票申请单列表
     * @param \Oceanengine\Models\InvoiceApplyOrderListV30ResponseDataApplyOrderListInner[] $applyOrderList
     * @return self
     */
    public function setApplyOrderList(?array $applyOrderList): self
    {
        $this->applyOrderList = $applyOrderList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyOrderList !== null) {
            $result['apply_order_list'] = $this->applyOrderList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_order_list'] ?? null) !== null && is_array($v)) {
            $obj->applyOrderList = array_map(fn ($vv) => \Oceanengine\Models\InvoiceApplyOrderListV30ResponseDataApplyOrderListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
