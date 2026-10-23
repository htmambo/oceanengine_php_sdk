<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderCreateV10RequestDeliverySetting implements \JsonSerializable
{
    /**
     * 投放金额（用户在下单金额列表中）选择的金额.单位元。
     * @var int
     */
    protected ?int $amount = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10DeliverySettingBidType
     */
    protected ?string $bidType = null;

    /**
     * 预期投放时长，单位小时
     * @var float
     */
    protected ?float $deliveryTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10DeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * 支付ROI目标
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * 投放金额（用户在下单金额列表中）选择的金额.单位元。
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 投放金额（用户在下单金额列表中）选择的金额.单位元。
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10DeliverySettingBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10DeliverySettingBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * 预期投放时长，单位小时
     * @return float
     */
    public function getDeliveryTime(): ?float
    {
        return $this->deliveryTime;
    }

    /**
     * 预期投放时长，单位小时
     * @param float $deliveryTime
     * @return self
     */
    public function setDeliveryTime(?float $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10DeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10DeliverySettingQcpxMode $qcpxMode
     * @return self
     */
    public function setQcpxMode(?string $qcpxMode): self
    {
        $this->qcpxMode = $qcpxMode;
        return $this;
    }

    /**
     * 支付ROI目标
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * 支付ROI目标
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->deliveryTime !== null) {
            $result['delivery_time'] = $this->deliveryTime;
        }
        if ($this->qcpxMode !== null) {
            $result['qcpx_mode'] = $this->qcpxMode;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['delivery_time'] ?? null) !== null) {
            $obj->deliveryTime = (float) $v;
        }
        if (($v = $data['qcpx_mode'] ?? null) !== null) {
            $obj->qcpxMode = (string) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        return $obj;
    }
}
