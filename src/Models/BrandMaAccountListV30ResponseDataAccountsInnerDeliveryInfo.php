<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaAccountListV30ResponseDataAccountsInnerDeliveryInfo implements \JsonSerializable
{
    /**
     * 投放中预定单数
     * @var int
     */
    protected ?int $deliveringOrderCount = null;

    /**
     * 待投放预定单数
     * @var int
     */
    protected ?int $waitingDeliveryOrderCount = null;

    /**
     * 投放中预定单数
     * @return int
     */
    public function getDeliveringOrderCount(): ?int
    {
        return $this->deliveringOrderCount;
    }

    /**
     * 投放中预定单数
     * @param int $deliveringOrderCount
     * @return self
     */
    public function setDeliveringOrderCount(?int $deliveringOrderCount): self
    {
        $this->deliveringOrderCount = $deliveringOrderCount;
        return $this;
    }

    /**
     * 待投放预定单数
     * @return int
     */
    public function getWaitingDeliveryOrderCount(): ?int
    {
        return $this->waitingDeliveryOrderCount;
    }

    /**
     * 待投放预定单数
     * @param int $waitingDeliveryOrderCount
     * @return self
     */
    public function setWaitingDeliveryOrderCount(?int $waitingDeliveryOrderCount): self
    {
        $this->waitingDeliveryOrderCount = $waitingDeliveryOrderCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deliveringOrderCount !== null) {
            $result['delivering_order_count'] = $this->deliveringOrderCount;
        }
        if ($this->waitingDeliveryOrderCount !== null) {
            $result['waiting_delivery_order_count'] = $this->waitingDeliveryOrderCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['delivering_order_count'] ?? null) !== null) {
            $obj->deliveringOrderCount = (int) $v;
        }
        if (($v = $data['waiting_delivery_order_count'] ?? null) !== null) {
            $obj->waitingDeliveryOrderCount = (int) $v;
        }
        return $obj;
    }
}
