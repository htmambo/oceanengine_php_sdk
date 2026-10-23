<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30RequestProjectAdjustListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType
     */
    protected ?string $deliveryOptimizationType = null;

    /**
     * 对齐创编 *100000
     * @var float
     */
    protected ?float $paramBidValue = null;

    /**
     * 对齐创编 *100000
     * @var float
     */
    protected ?float $paramRoiGoalValue = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType
     */
    public function getDeliveryOptimizationType(): ?string
    {
        return $this->deliveryOptimizationType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType $deliveryOptimizationType
     * @return self
     */
    public function setDeliveryOptimizationType(?string $deliveryOptimizationType): self
    {
        $this->deliveryOptimizationType = $deliveryOptimizationType;
        return $this;
    }

    /**
     * 对齐创编 *100000
     * @return float
     */
    public function getParamBidValue(): ?float
    {
        return $this->paramBidValue;
    }

    /**
     * 对齐创编 *100000
     * @param float $paramBidValue
     * @return self
     */
    public function setParamBidValue(?float $paramBidValue): self
    {
        $this->paramBidValue = $paramBidValue;
        return $this;
    }

    /**
     * 对齐创编 *100000
     * @return float
     */
    public function getParamRoiGoalValue(): ?float
    {
        return $this->paramRoiGoalValue;
    }

    /**
     * 对齐创编 *100000
     * @param float $paramRoiGoalValue
     * @return self
     */
    public function setParamRoiGoalValue(?float $paramRoiGoalValue): self
    {
        $this->paramRoiGoalValue = $paramRoiGoalValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deliveryOptimizationType !== null) {
            $result['delivery_optimization_type'] = $this->deliveryOptimizationType;
        }
        if ($this->paramBidValue !== null) {
            $result['param_bid_value'] = $this->paramBidValue;
        }
        if ($this->paramRoiGoalValue !== null) {
            $result['param_roi_goal_value'] = $this->paramRoiGoalValue;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['delivery_optimization_type'] ?? null) !== null) {
            $obj->deliveryOptimizationType = (string) $v;
        }
        if (($v = $data['param_bid_value'] ?? null) !== null) {
            $obj->paramBidValue = (float) $v;
        }
        if (($v = $data['param_roi_goal_value'] ?? null) !== null) {
            $obj->paramRoiGoalValue = (float) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
