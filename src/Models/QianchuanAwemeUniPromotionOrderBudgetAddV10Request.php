<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderBudgetAddV10Request implements \JsonSerializable
{
    /**
     * 追加的预算，单位元
     * @var int
     */
    protected ?int $addAmount = null;

    /**
     * 延长的投放时间，单位小时，允许值：：0、24、48、72、96、120、144、168 0、24、48、72、96、120、144、168
     * @var float
     */
    protected ?float $addDeliveryTime = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 需要追加预算的订单id
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 追加的预算，单位元
     * @return int
     */
    public function getAddAmount(): ?int
    {
        return $this->addAmount;
    }

    /**
     * 追加的预算，单位元
     * @param int $addAmount
     * @return self
     */
    public function setAddAmount(?int $addAmount): self
    {
        $this->addAmount = $addAmount;
        return $this;
    }

    /**
     * 延长的投放时间，单位小时，允许值：：0、24、48、72、96、120、144、168 0、24、48、72、96、120、144、168
     * @return float
     */
    public function getAddDeliveryTime(): ?float
    {
        return $this->addDeliveryTime;
    }

    /**
     * 延长的投放时间，单位小时，允许值：：0、24、48、72、96、120、144、168 0、24、48、72、96、120、144、168
     * @param float $addDeliveryTime
     * @return self
     */
    public function setAddDeliveryTime(?float $addDeliveryTime): self
    {
        $this->addDeliveryTime = $addDeliveryTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 需要追加预算的订单id
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 需要追加预算的订单id
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
        if ($this->addAmount !== null) {
            $result['add_amount'] = $this->addAmount;
        }
        if ($this->addDeliveryTime !== null) {
            $result['add_delivery_time'] = $this->addDeliveryTime;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['add_amount'] ?? null) !== null) {
            $obj->addAmount = (int) $v;
        }
        if (($v = $data['add_delivery_time'] ?? null) !== null) {
            $obj->addDeliveryTime = (float) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        return $obj;
    }
}
