<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderDetailGetV10ResponseDataDeliverySetting implements \JsonSerializable
{
    /**
     * 投放金额
     * @var int
     */
    protected ?int $amount = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode
     */
    protected ?string $bidMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType
     */
    protected ?string $bidType = null;

    /**
     * 手动出价金额
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * 期望曝光时长
     * @var float
     */
    protected ?float $deliveryTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode
     */
    protected ?string $liveroomHeatMode = null;

    /**
     * 实际支付金额
     * @var float
     */
    protected ?float $paymentAmount = null;

    /**
     * 支付ROI目标
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * 投放金额
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 投放金额
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode
     */
    public function getBidMode(): ?string
    {
        return $this->bidMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode $bidMode
     * @return self
     */
    public function setBidMode(?string $bidMode): self
    {
        $this->bidMode = $bidMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * 手动出价金额
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * 手动出价金额
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * 期望曝光时长
     * @return float
     */
    public function getDeliveryTime(): ?float
    {
        return $this->deliveryTime;
    }

    /**
     * 期望曝光时长
     * @param float $deliveryTime
     * @return self
     */
    public function setDeliveryTime(?float $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode
     */
    public function getLiveroomHeatMode(): ?string
    {
        return $this->liveroomHeatMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode $liveroomHeatMode
     * @return self
     */
    public function setLiveroomHeatMode(?string $liveroomHeatMode): self
    {
        $this->liveroomHeatMode = $liveroomHeatMode;
        return $this;
    }

    /**
     * 实际支付金额
     * @return float
     */
    public function getPaymentAmount(): ?float
    {
        return $this->paymentAmount;
    }

    /**
     * 实际支付金额
     * @param float $paymentAmount
     * @return self
     */
    public function setPaymentAmount(?float $paymentAmount): self
    {
        $this->paymentAmount = $paymentAmount;
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
        if ($this->bidMode !== null) {
            $result['bid_mode'] = $this->bidMode;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->deliveryTime !== null) {
            $result['delivery_time'] = $this->deliveryTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->liveroomHeatMode !== null) {
            $result['liveroom_heat_mode'] = $this->liveroomHeatMode;
        }
        if ($this->paymentAmount !== null) {
            $result['payment_amount'] = $this->paymentAmount;
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
        if (($v = $data['bid_mode'] ?? null) !== null) {
            $obj->bidMode = (string) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['delivery_time'] ?? null) !== null) {
            $obj->deliveryTime = (float) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['liveroom_heat_mode'] ?? null) !== null) {
            $obj->liveroomHeatMode = (string) $v;
        }
        if (($v = $data['payment_amount'] ?? null) !== null) {
            $obj->paymentAmount = (float) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        return $obj;
    }
}
