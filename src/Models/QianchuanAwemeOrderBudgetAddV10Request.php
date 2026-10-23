<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderBudgetAddV10Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 需要追加预算的订单id
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 追加的预算
     * @var int
     */
    protected ?int $renewalBudget = null;

    /**
     * 延长的投放时间 1. 短视频，0-7天（步进单位为1天） 2. 0-24小时（步进单位为0.5小时）
     * @var float
     */
    protected ?float $renewalDeliverySeconds = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
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
     * 追加的预算
     * @return int
     */
    public function getRenewalBudget(): ?int
    {
        return $this->renewalBudget;
    }

    /**
     * 追加的预算
     * @param int $renewalBudget
     * @return self
     */
    public function setRenewalBudget(?int $renewalBudget): self
    {
        $this->renewalBudget = $renewalBudget;
        return $this;
    }

    /**
     * 延长的投放时间 1. 短视频，0-7天（步进单位为1天） 2. 0-24小时（步进单位为0.5小时）
     * @return float
     */
    public function getRenewalDeliverySeconds(): ?float
    {
        return $this->renewalDeliverySeconds;
    }

    /**
     * 延长的投放时间 1. 短视频，0-7天（步进单位为1天） 2. 0-24小时（步进单位为0.5小时）
     * @param float $renewalDeliverySeconds
     * @return self
     */
    public function setRenewalDeliverySeconds(?float $renewalDeliverySeconds): self
    {
        $this->renewalDeliverySeconds = $renewalDeliverySeconds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->renewalBudget !== null) {
            $result['renewal_budget'] = $this->renewalBudget;
        }
        if ($this->renewalDeliverySeconds !== null) {
            $result['renewal_delivery_seconds'] = $this->renewalDeliverySeconds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['renewal_budget'] ?? null) !== null) {
            $obj->renewalBudget = (int) $v;
        }
        if (($v = $data['renewal_delivery_seconds'] ?? null) !== null) {
            $obj->renewalDeliverySeconds = (float) $v;
        }
        return $obj;
    }
}
