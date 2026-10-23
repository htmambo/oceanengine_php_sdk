<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DcdChargeSubmitV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $cashierUrl = null;

    /**
     * @var int
     */
    protected ?int $chargeOrderId = null;

    /**
     * @return string
     */
    public function getCashierUrl(): ?string
    {
        return $this->cashierUrl;
    }

    /**
     * @param string $cashierUrl
     * @return self
     */
    public function setCashierUrl(?string $cashierUrl): self
    {
        $this->cashierUrl = $cashierUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getChargeOrderId(): ?int
    {
        return $this->chargeOrderId;
    }

    /**
     * @param int $chargeOrderId
     * @return self
     */
    public function setChargeOrderId(?int $chargeOrderId): self
    {
        $this->chargeOrderId = $chargeOrderId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cashierUrl !== null) {
            $result['cashier_url'] = $this->cashierUrl;
        }
        if ($this->chargeOrderId !== null) {
            $result['charge_order_id'] = $this->chargeOrderId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cashier_url'] ?? null) !== null) {
            $obj->cashierUrl = (string) $v;
        }
        if (($v = $data['charge_order_id'] ?? null) !== null) {
            $obj->chargeOrderId = (int) $v;
        }
        return $obj;
    }
}
