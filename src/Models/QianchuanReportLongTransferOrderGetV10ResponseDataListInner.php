<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportLongTransferOrderGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string
     */
    protected ?string $adName = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListIsPay
     */
    protected ?string $isPay = null;

    /**
     * @var float
     */
    protected ?float $orderAmount = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource
     */
    protected ?string $orderFlowSource = null;

    /**
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var string
     */
    protected ?string $orderPlaceTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListPayType
     */
    protected ?string $payType = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListIsPay
     */
    public function getIsPay(): ?string
    {
        return $this->isPay;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListIsPay $isPay
     * @return self
     */
    public function setIsPay(?string $isPay): self
    {
        $this->isPay = $isPay;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderAmount(): ?float
    {
        return $this->orderAmount;
    }

    /**
     * @param float $orderAmount
     * @return self
     */
    public function setOrderAmount(?float $orderAmount): self
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource
     */
    public function getOrderFlowSource(): ?string
    {
        return $this->orderFlowSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource $orderFlowSource
     * @return self
     */
    public function setOrderFlowSource(?string $orderFlowSource): self
    {
        $this->orderFlowSource = $orderFlowSource;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderPlaceTime(): ?string
    {
        return $this->orderPlaceTime;
    }

    /**
     * @param string $orderPlaceTime
     * @return self
     */
    public function setOrderPlaceTime(?string $orderPlaceTime): self
    {
        $this->orderPlaceTime = $orderPlaceTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListPayType
     */
    public function getPayType(): ?string
    {
        return $this->payType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10DataListPayType $payType
     * @return self
     */
    public function setPayType(?string $payType): self
    {
        $this->payType = $payType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->isPay !== null) {
            $result['is_pay'] = $this->isPay;
        }
        if ($this->orderAmount !== null) {
            $result['order_amount'] = $this->orderAmount;
        }
        if ($this->orderFlowSource !== null) {
            $result['order_flow_source'] = $this->orderFlowSource;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderPlaceTime !== null) {
            $result['order_place_time'] = $this->orderPlaceTime;
        }
        if ($this->payType !== null) {
            $result['pay_type'] = $this->payType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['is_pay'] ?? null) !== null) {
            $obj->isPay = (string) $v;
        }
        if (($v = $data['order_amount'] ?? null) !== null) {
            $obj->orderAmount = (float) $v;
        }
        if (($v = $data['order_flow_source'] ?? null) !== null) {
            $obj->orderFlowSource = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_place_time'] ?? null) !== null) {
            $obj->orderPlaceTime = (string) $v;
        }
        if (($v = $data['pay_type'] ?? null) !== null) {
            $obj->payType = (string) $v;
        }
        return $obj;
    }
}
