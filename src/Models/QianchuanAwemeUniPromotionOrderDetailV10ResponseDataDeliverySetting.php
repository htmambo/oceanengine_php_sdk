<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderDetailV10ResponseDataDeliverySetting implements \JsonSerializable
{
    /**
     * 投放金额（用户在下单金额列表中）选择的金额.单位元。
     * @var int
     */
    protected ?int $amount = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType
     */
    protected ?string $bidType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * 预期投放时长，单位小时
     * @var float
     */
    protected ?float $deliveryTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * 支付ROI目标
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * 是否支持追加预算（追投）
     * @var bool
     */
    protected ?bool $supportAddBudget = null;

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
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
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
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingQcpxMode $qcpxMode
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
     * 是否支持追加预算（追投）
     * @return bool
     */
    public function getSupportAddBudget(): ?bool
    {
        return $this->supportAddBudget;
    }

    /**
     * 是否支持追加预算（追投）
     * @param bool $supportAddBudget
     * @return self
     */
    public function setSupportAddBudget(?bool $supportAddBudget): self
    {
        $this->supportAddBudget = $supportAddBudget;
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
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
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
        if ($this->supportAddBudget !== null) {
            $result['support_add_budget'] = $this->supportAddBudget;
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
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
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
        if (($v = $data['support_add_budget'] ?? null) !== null) {
            $obj->supportAddBudget = (bool) $v;
        }
        return $obj;
    }
}
