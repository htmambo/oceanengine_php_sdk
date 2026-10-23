<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceDownloadUrlListV30ResponseData implements \JsonSerializable
{
    /**
     * 发票下载地址列表
     * @var \Oceanengine\Models\InvoiceDownloadUrlListV30ResponseDataApplyOrderListInner[]
     */
    protected ?array $applyOrderList = null;

    /**
     * 发票下载地址列表
     * @return \Oceanengine\Models\InvoiceDownloadUrlListV30ResponseDataApplyOrderListInner[]
     */
    public function getApplyOrderList(): ?array
    {
        return $this->applyOrderList;
    }

    /**
     * 发票下载地址列表
     * @param \Oceanengine\Models\InvoiceDownloadUrlListV30ResponseDataApplyOrderListInner[] $applyOrderList
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
            $obj->applyOrderList = array_map(fn ($vv) => \Oceanengine\Models\InvoiceDownloadUrlListV30ResponseDataApplyOrderListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
