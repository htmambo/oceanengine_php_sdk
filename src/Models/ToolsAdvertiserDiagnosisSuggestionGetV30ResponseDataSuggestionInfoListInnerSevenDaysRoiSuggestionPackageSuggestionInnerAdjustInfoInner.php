<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerAdjustInfoInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $adjustBidRate = null;

    /**
     * @var float
     */
    protected ?float $adjustRoiGoalRate = null;

    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSevenDaysRoiSuggestionPackageSuggestionAdjustInfoDeliveryOptimizationType
     */
    protected ?string $deliveryOptimizationType = null;

    /**
     * @return float
     */
    public function getAdjustBidRate(): ?float
    {
        return $this->adjustBidRate;
    }

    /**
     * @param float $adjustBidRate
     * @return self
     */
    public function setAdjustBidRate(?float $adjustBidRate): self
    {
        $this->adjustBidRate = $adjustBidRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustRoiGoalRate(): ?float
    {
        return $this->adjustRoiGoalRate;
    }

    /**
     * @param float $adjustRoiGoalRate
     * @return self
     */
    public function setAdjustRoiGoalRate(?float $adjustRoiGoalRate): self
    {
        $this->adjustRoiGoalRate = $adjustRoiGoalRate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSevenDaysRoiSuggestionPackageSuggestionAdjustInfoDeliveryOptimizationType
     */
    public function getDeliveryOptimizationType(): ?string
    {
        return $this->deliveryOptimizationType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30DataSuggestionInfoListSevenDaysRoiSuggestionPackageSuggestionAdjustInfoDeliveryOptimizationType $deliveryOptimizationType
     * @return self
     */
    public function setDeliveryOptimizationType(?string $deliveryOptimizationType): self
    {
        $this->deliveryOptimizationType = $deliveryOptimizationType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adjustBidRate !== null) {
            $result['adjust_bid_rate'] = $this->adjustBidRate;
        }
        if ($this->adjustRoiGoalRate !== null) {
            $result['adjust_roi_goal_rate'] = $this->adjustRoiGoalRate;
        }
        if ($this->deliveryOptimizationType !== null) {
            $result['delivery_optimization_type'] = $this->deliveryOptimizationType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adjust_bid_rate'] ?? null) !== null) {
            $obj->adjustBidRate = (float) $v;
        }
        if (($v = $data['adjust_roi_goal_rate'] ?? null) !== null) {
            $obj->adjustRoiGoalRate = (float) $v;
        }
        if (($v = $data['delivery_optimization_type'] ?? null) !== null) {
            $obj->deliveryOptimizationType = (string) $v;
        }
        return $obj;
    }
}
