<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 预订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 预订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 预订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        return $obj;
    }
}
