<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringBlueFlowPackageSetting
     */
    protected ?string $blueFlowPackageSetting = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringDeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringHasCarryMaterial
     */
    protected ?string $hasCarryMaterial = null;

    /**
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringLearningPhase[]
     */
    protected ?array $learningPhase = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var string
     */
    protected ?string $promotionCreateTime = null;

    /**
     * @var string
     */
    protected ?string $promotionModifyEndTime = null;

    /**
     * @var string
     */
    protected ?string $promotionModifyStartTime = null;

    /**
     * @var string
     */
    protected ?string $promotionModifyTime = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringRejectReasonType[]
     */
    protected ?array $rejectReasonType = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringStarAutoDeliverySwitch
     */
    protected ?string $starAutoDeliverySwitch = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringStarDeliveryType
     */
    protected ?string $starDeliveryType = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringStatusFirst
     */
    protected ?string $statusFirst = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30FilteringStatusSecond
     */
    protected ?string $statusSecond = null;

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringBlueFlowPackageSetting
     */
    public function getBlueFlowPackageSetting(): ?string
    {
        return $this->blueFlowPackageSetting;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringBlueFlowPackageSetting $blueFlowPackageSetting
     * @return self
     */
    public function setBlueFlowPackageSetting(?string $blueFlowPackageSetting): self
    {
        $this->blueFlowPackageSetting = $blueFlowPackageSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringDeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringDeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringHasCarryMaterial
     */
    public function getHasCarryMaterial(): ?string
    {
        return $this->hasCarryMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringHasCarryMaterial $hasCarryMaterial
     * @return self
     */
    public function setHasCarryMaterial(?string $hasCarryMaterial): self
    {
        $this->hasCarryMaterial = $hasCarryMaterial;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param int[] $ids
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringLearningPhase[]
     */
    public function getLearningPhase(): ?array
    {
        return $this->learningPhase;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringLearningPhase[] $learningPhase
     * @return self
     */
    public function setLearningPhase(?array $learningPhase): self
    {
        $this->learningPhase = $learningPhase;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
     * @return string
     */
    public function getPromotionCreateTime(): ?string
    {
        return $this->promotionCreateTime;
    }

    /**
     * @param string $promotionCreateTime
     * @return self
     */
    public function setPromotionCreateTime(?string $promotionCreateTime): self
    {
        $this->promotionCreateTime = $promotionCreateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionModifyEndTime(): ?string
    {
        return $this->promotionModifyEndTime;
    }

    /**
     * @param string $promotionModifyEndTime
     * @return self
     */
    public function setPromotionModifyEndTime(?string $promotionModifyEndTime): self
    {
        $this->promotionModifyEndTime = $promotionModifyEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionModifyStartTime(): ?string
    {
        return $this->promotionModifyStartTime;
    }

    /**
     * @param string $promotionModifyStartTime
     * @return self
     */
    public function setPromotionModifyStartTime(?string $promotionModifyStartTime): self
    {
        $this->promotionModifyStartTime = $promotionModifyStartTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionModifyTime(): ?string
    {
        return $this->promotionModifyTime;
    }

    /**
     * @param string $promotionModifyTime
     * @return self
     */
    public function setPromotionModifyTime(?string $promotionModifyTime): self
    {
        $this->promotionModifyTime = $promotionModifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringRejectReasonType[]
     */
    public function getRejectReasonType(): ?array
    {
        return $this->rejectReasonType;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringRejectReasonType[] $rejectReasonType
     * @return self
     */
    public function setRejectReasonType(?array $rejectReasonType): self
    {
        $this->rejectReasonType = $rejectReasonType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringStarAutoDeliverySwitch
     */
    public function getStarAutoDeliverySwitch(): ?string
    {
        return $this->starAutoDeliverySwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringStarAutoDeliverySwitch $starAutoDeliverySwitch
     * @return self
     */
    public function setStarAutoDeliverySwitch(?string $starAutoDeliverySwitch): self
    {
        $this->starAutoDeliverySwitch = $starAutoDeliverySwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringStarDeliveryType
     */
    public function getStarDeliveryType(): ?string
    {
        return $this->starDeliveryType;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringStarDeliveryType $starDeliveryType
     * @return self
     */
    public function setStarDeliveryType(?string $starDeliveryType): self
    {
        $this->starDeliveryType = $starDeliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringStatusFirst
     */
    public function getStatusFirst(): ?string
    {
        return $this->statusFirst;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringStatusFirst $statusFirst
     * @return self
     */
    public function setStatusFirst(?string $statusFirst): self
    {
        $this->statusFirst = $statusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30FilteringStatusSecond
     */
    public function getStatusSecond(): ?string
    {
        return $this->statusSecond;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30FilteringStatusSecond $statusSecond
     * @return self
     */
    public function setStatusSecond(?string $statusSecond): self
    {
        $this->statusSecond = $statusSecond;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blueFlowPackageSetting !== null) {
            $result['blue_flow_package_setting'] = $this->blueFlowPackageSetting;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->hasCarryMaterial !== null) {
            $result['has_carry_material'] = $this->hasCarryMaterial;
        }
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->learningPhase !== null) {
            $result['learning_phase'] = $this->learningPhase;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionCreateTime !== null) {
            $result['promotion_create_time'] = $this->promotionCreateTime;
        }
        if ($this->promotionModifyEndTime !== null) {
            $result['promotion_modify_end_time'] = $this->promotionModifyEndTime;
        }
        if ($this->promotionModifyStartTime !== null) {
            $result['promotion_modify_start_time'] = $this->promotionModifyStartTime;
        }
        if ($this->promotionModifyTime !== null) {
            $result['promotion_modify_time'] = $this->promotionModifyTime;
        }
        if ($this->rejectReasonType !== null) {
            $result['reject_reason_type'] = $this->rejectReasonType;
        }
        if ($this->starAutoDeliverySwitch !== null) {
            $result['star_auto_delivery_switch'] = $this->starAutoDeliverySwitch;
        }
        if ($this->starDeliveryType !== null) {
            $result['star_delivery_type'] = $this->starDeliveryType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusFirst !== null) {
            $result['status_first'] = $this->statusFirst;
        }
        if ($this->statusSecond !== null) {
            $result['status_second'] = $this->statusSecond;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_package_setting'] ?? null) !== null) {
            $obj->blueFlowPackageSetting = (string) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null) {
            $obj->deliveryMode = (string) $v;
        }
        if (($v = $data['has_carry_material'] ?? null) !== null) {
            $obj->hasCarryMaterial = (string) $v;
        }
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        if (($v = $data['learning_phase'] ?? null) !== null && is_array($v)) {
            $obj->learningPhase = $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_create_time'] ?? null) !== null) {
            $obj->promotionCreateTime = (string) $v;
        }
        if (($v = $data['promotion_modify_end_time'] ?? null) !== null) {
            $obj->promotionModifyEndTime = (string) $v;
        }
        if (($v = $data['promotion_modify_start_time'] ?? null) !== null) {
            $obj->promotionModifyStartTime = (string) $v;
        }
        if (($v = $data['promotion_modify_time'] ?? null) !== null) {
            $obj->promotionModifyTime = (string) $v;
        }
        if (($v = $data['reject_reason_type'] ?? null) !== null && is_array($v)) {
            $obj->rejectReasonType = $v;
        }
        if (($v = $data['star_auto_delivery_switch'] ?? null) !== null) {
            $obj->starAutoDeliverySwitch = (string) $v;
        }
        if (($v = $data['star_delivery_type'] ?? null) !== null) {
            $obj->starDeliveryType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['status_first'] ?? null) !== null) {
            $obj->statusFirst = (string) $v;
        }
        if (($v = $data['status_second'] ?? null) !== null) {
            $obj->statusSecond = (string) $v;
        }
        return $obj;
    }
}
