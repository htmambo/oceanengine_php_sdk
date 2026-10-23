<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringAdType
     */
    protected ?string $adType = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringBidType
     */
    protected ?string $bidType = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringLearningPhase
     */
    protected ?string $learningPhase = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 项目ID筛选
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 广告创建结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @var string
     */
    protected ?string $promotionCreateTimeEnd = null;

    /**
     * 广告创建开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @var string
     */
    protected ?string $promotionCreateTimeStart = null;

    /**
     * 广告IDs筛选，最多100个
     * @var int[]
     */
    protected ?array $promotionIds = null;

    /**
     * 广告更新结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @var string
     */
    protected ?string $promotionModifyTimeEnd = null;

    /**
     * 广告更新开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @var string
     */
    protected ?string $promotionModifyTimeStart = null;

    /**
     * 广告名称模糊搜索
     * @var string
     */
    protected ?string $promotionName = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringPromotionStatusFirst
     */
    protected ?string $promotionStatusFirst = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringPromotionStatusSecond
     */
    protected ?string $promotionStatusSecond = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30FilteringRejectReasonType
     */
    protected ?string $rejectReasonType = null;

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringLearningPhase
     */
    public function getLearningPhase(): ?string
    {
        return $this->learningPhase;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringLearningPhase $learningPhase
     * @return self
     */
    public function setLearningPhase(?string $learningPhase): self
    {
        $this->learningPhase = $learningPhase;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 项目ID筛选
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID筛选
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 广告创建结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @return string
     */
    public function getPromotionCreateTimeEnd(): ?string
    {
        return $this->promotionCreateTimeEnd;
    }

    /**
     * 广告创建结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @param string $promotionCreateTimeEnd
     * @return self
     */
    public function setPromotionCreateTimeEnd(?string $promotionCreateTimeEnd): self
    {
        $this->promotionCreateTimeEnd = $promotionCreateTimeEnd;
        return $this;
    }

    /**
     * 广告创建开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @return string
     */
    public function getPromotionCreateTimeStart(): ?string
    {
        return $this->promotionCreateTimeStart;
    }

    /**
     * 广告创建开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @param string $promotionCreateTimeStart
     * @return self
     */
    public function setPromotionCreateTimeStart(?string $promotionCreateTimeStart): self
    {
        $this->promotionCreateTimeStart = $promotionCreateTimeStart;
        return $this;
    }

    /**
     * 广告IDs筛选，最多100个
     * @return int[]
     */
    public function getPromotionIds(): ?array
    {
        return $this->promotionIds;
    }

    /**
     * 广告IDs筛选，最多100个
     * @param int[] $promotionIds
     * @return self
     */
    public function setPromotionIds(?array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    /**
     * 广告更新结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @return string
     */
    public function getPromotionModifyTimeEnd(): ?string
    {
        return $this->promotionModifyTimeEnd;
    }

    /**
     * 广告更新结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @param string $promotionModifyTimeEnd
     * @return self
     */
    public function setPromotionModifyTimeEnd(?string $promotionModifyTimeEnd): self
    {
        $this->promotionModifyTimeEnd = $promotionModifyTimeEnd;
        return $this;
    }

    /**
     * 广告更新开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @return string
     */
    public function getPromotionModifyTimeStart(): ?string
    {
        return $this->promotionModifyTimeStart;
    }

    /**
     * 广告更新开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @param string $promotionModifyTimeStart
     * @return self
     */
    public function setPromotionModifyTimeStart(?string $promotionModifyTimeStart): self
    {
        $this->promotionModifyTimeStart = $promotionModifyTimeStart;
        return $this;
    }

    /**
     * 广告名称模糊搜索
     * @return string
     */
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * 广告名称模糊搜索
     * @param string $promotionName
     * @return self
     */
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringPromotionStatusFirst
     */
    public function getPromotionStatusFirst(): ?string
    {
        return $this->promotionStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringPromotionStatusFirst $promotionStatusFirst
     * @return self
     */
    public function setPromotionStatusFirst(?string $promotionStatusFirst): self
    {
        $this->promotionStatusFirst = $promotionStatusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringPromotionStatusSecond
     */
    public function getPromotionStatusSecond(): ?string
    {
        return $this->promotionStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringPromotionStatusSecond $promotionStatusSecond
     * @return self
     */
    public function setPromotionStatusSecond(?string $promotionStatusSecond): self
    {
        $this->promotionStatusSecond = $promotionStatusSecond;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30FilteringRejectReasonType
     */
    public function getRejectReasonType(): ?string
    {
        return $this->rejectReasonType;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30FilteringRejectReasonType $rejectReasonType
     * @return self
     */
    public function setRejectReasonType(?string $rejectReasonType): self
    {
        $this->rejectReasonType = $rejectReasonType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adType !== null) {
            $result['ad_type'] = $this->adType;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->learningPhase !== null) {
            $result['learning_phase'] = $this->learningPhase;
        }
        if ($this->localDeliveryScene !== null) {
            $result['local_delivery_scene'] = $this->localDeliveryScene;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionCreateTimeEnd !== null) {
            $result['promotion_create_time_end'] = $this->promotionCreateTimeEnd;
        }
        if ($this->promotionCreateTimeStart !== null) {
            $result['promotion_create_time_start'] = $this->promotionCreateTimeStart;
        }
        if ($this->promotionIds !== null) {
            $result['promotion_ids'] = $this->promotionIds;
        }
        if ($this->promotionModifyTimeEnd !== null) {
            $result['promotion_modify_time_end'] = $this->promotionModifyTimeEnd;
        }
        if ($this->promotionModifyTimeStart !== null) {
            $result['promotion_modify_time_start'] = $this->promotionModifyTimeStart;
        }
        if ($this->promotionName !== null) {
            $result['promotion_name'] = $this->promotionName;
        }
        if ($this->promotionStatusFirst !== null) {
            $result['promotion_status_first'] = $this->promotionStatusFirst;
        }
        if ($this->promotionStatusSecond !== null) {
            $result['promotion_status_second'] = $this->promotionStatusSecond;
        }
        if ($this->rejectReasonType !== null) {
            $result['reject_reason_type'] = $this->rejectReasonType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['learning_phase'] ?? null) !== null) {
            $obj->learningPhase = (string) $v;
        }
        if (($v = $data['local_delivery_scene'] ?? null) !== null) {
            $obj->localDeliveryScene = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_create_time_end'] ?? null) !== null) {
            $obj->promotionCreateTimeEnd = (string) $v;
        }
        if (($v = $data['promotion_create_time_start'] ?? null) !== null) {
            $obj->promotionCreateTimeStart = (string) $v;
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        if (($v = $data['promotion_modify_time_end'] ?? null) !== null) {
            $obj->promotionModifyTimeEnd = (string) $v;
        }
        if (($v = $data['promotion_modify_time_start'] ?? null) !== null) {
            $obj->promotionModifyTimeStart = (string) $v;
        }
        if (($v = $data['promotion_name'] ?? null) !== null) {
            $obj->promotionName = (string) $v;
        }
        if (($v = $data['promotion_status_first'] ?? null) !== null) {
            $obj->promotionStatusFirst = (string) $v;
        }
        if (($v = $data['promotion_status_second'] ?? null) !== null) {
            $obj->promotionStatusSecond = (string) $v;
        }
        if (($v = $data['reject_reason_type'] ?? null) !== null) {
            $obj->rejectReasonType = (string) $v;
        }
        return $obj;
    }
}
