<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalChargeSubmitV30ResponseData implements \JsonSerializable
{
    /**
     * 支付链接，用来跳转收银台
     * @var string
     */
    protected ?string $cashierUrl = null;

    /**
     * 充值单ID，用来查询充值结果
     * @var int
     */
    protected ?int $chargeOrderId = null;

    /**
     * 支付链接，用来跳转收银台
     * @return string
     */
    public function getCashierUrl(): ?string
    {
        return $this->cashierUrl;
    }

    /**
     * 支付链接，用来跳转收银台
     * @param string $cashierUrl
     * @return self
     */
    public function setCashierUrl(?string $cashierUrl): self
    {
        $this->cashierUrl = $cashierUrl;
        return $this;
    }

    /**
     * 充值单ID，用来查询充值结果
     * @return int
     */
    public function getChargeOrderId(): ?int
    {
        return $this->chargeOrderId;
    }

    /**
     * 充值单ID，用来查询充值结果
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
