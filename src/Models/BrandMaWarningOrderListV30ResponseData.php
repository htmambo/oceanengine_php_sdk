<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaWarningOrderListV30ResponseData implements \JsonSerializable
{
    /**
     * 所有订单信息
     * @var \Oceanengine\Models\BrandMaWarningOrderListV30ResponseDataOrdersInner[]
     */
    protected ?array $orders = null;

    /**
     * 所有订单信息
     * @return \Oceanengine\Models\BrandMaWarningOrderListV30ResponseDataOrdersInner[]
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * 所有订单信息
     * @param \Oceanengine\Models\BrandMaWarningOrderListV30ResponseDataOrdersInner[] $orders
     * @return self
     */
    public function setOrders(?array $orders): self
    {
        $this->orders = $orders;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['orders'] ?? null) !== null && is_array($v)) {
            $obj->orders = array_map(fn ($vv) => \Oceanengine\Models\BrandMaWarningOrderListV30ResponseDataOrdersInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
