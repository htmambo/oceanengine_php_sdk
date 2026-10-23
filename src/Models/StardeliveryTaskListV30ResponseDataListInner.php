<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $starAccountName = null;

    /**
     * @var float
     */
    protected ?float $starAdCostDivideRatio = null;

    /**
     * @var int
     */
    protected ?int $starAuthorPending = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var float
     */
    protected ?float $starMaterialBid = null;

    /**
     * @var float[]
     */
    protected ?array $starMaterialBidRange = null;

    /**
     * @var int
     */
    protected ?int $starPendingConfirmCount = null;

    /**
     * @var string
     */
    protected ?string $starSaleCostEndTime = null;

    /**
     * @var int
     */
    protected ?int $starTaskAlbumId = null;

    /**
     * @var string
     */
    protected ?string $starTaskAlbumName = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskAnchorType
     */
    protected ?string $starTaskAnchorType = null;

    /**
     * @var float
     */
    protected ?float $starTaskBid = null;

    /**
     * @var float
     */
    protected ?float $starTaskBidAndroid = null;

    /**
     * @var float
     */
    protected ?float $starTaskBidIos = null;

    /**
     * @var float
     */
    protected ?float $starTaskBudget = null;

    /**
     * @var int
     */
    protected ?int $starTaskCanDeliveryItemCount = null;

    /**
     * @var string
     */
    protected ?string $starTaskCategoryName = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskCategoryType
     */
    protected ?string $starTaskCategoryType = null;

    /**
     * @var string
     */
    protected ?string $starTaskCreateTime = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskExternalAction
     */
    protected ?string $starTaskExternalAction = null;

    /**
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskMaterialPurchaseMethod
     */
    protected ?string $starTaskMaterialPurchaseMethod = null;

    /**
     * @var string
     */
    protected ?string $starTaskModifyTime = null;

    /**
     * @var string
     */
    protected ?string $starTaskName = null;

    /**
     * @var string
     */
    protected ?string $starTaskPostEndTime = null;

    /**
     * @var int
     */
    protected ?int $starTaskPostItemCount = null;

    /**
     * @var int
     */
    protected ?int $starTaskRelateProjectCount = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskSource
     */
    protected ?string $starTaskSource = null;

    /**
     * @var string
     */
    protected ?string $starTaskStartTime = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskStatus
     */
    protected ?string $starTaskStatus = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskSubStatus
     */
    protected ?string $starTaskSubStatus = null;

    /**
     * @var string
     */
    protected ?string $starTimeCostEndTime = null;

    /**
     * @return string
     */
    public function getStarAccountName(): ?string
    {
        return $this->starAccountName;
    }

    /**
     * @param string $starAccountName
     * @return self
     */
    public function setStarAccountName(?string $starAccountName): self
    {
        $this->starAccountName = $starAccountName;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarAdCostDivideRatio(): ?float
    {
        return $this->starAdCostDivideRatio;
    }

    /**
     * @param float $starAdCostDivideRatio
     * @return self
     */
    public function setStarAdCostDivideRatio(?float $starAdCostDivideRatio): self
    {
        $this->starAdCostDivideRatio = $starAdCostDivideRatio;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarAuthorPending(): ?int
    {
        return $this->starAuthorPending;
    }

    /**
     * @param int $starAuthorPending
     * @return self
     */
    public function setStarAuthorPending(?int $starAuthorPending): self
    {
        $this->starAuthorPending = $starAuthorPending;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarMaterialBid(): ?float
    {
        return $this->starMaterialBid;
    }

    /**
     * @param float $starMaterialBid
     * @return self
     */
    public function setStarMaterialBid(?float $starMaterialBid): self
    {
        $this->starMaterialBid = $starMaterialBid;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getStarMaterialBidRange(): ?array
    {
        return $this->starMaterialBidRange;
    }

    /**
     * @param float[] $starMaterialBidRange
     * @return self
     */
    public function setStarMaterialBidRange(?array $starMaterialBidRange): self
    {
        $this->starMaterialBidRange = $starMaterialBidRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarPendingConfirmCount(): ?int
    {
        return $this->starPendingConfirmCount;
    }

    /**
     * @param int $starPendingConfirmCount
     * @return self
     */
    public function setStarPendingConfirmCount(?int $starPendingConfirmCount): self
    {
        $this->starPendingConfirmCount = $starPendingConfirmCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarSaleCostEndTime(): ?string
    {
        return $this->starSaleCostEndTime;
    }

    /**
     * @param string $starSaleCostEndTime
     * @return self
     */
    public function setStarSaleCostEndTime(?string $starSaleCostEndTime): self
    {
        $this->starSaleCostEndTime = $starSaleCostEndTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarTaskAlbumId(): ?int
    {
        return $this->starTaskAlbumId;
    }

    /**
     * @param int $starTaskAlbumId
     * @return self
     */
    public function setStarTaskAlbumId(?int $starTaskAlbumId): self
    {
        $this->starTaskAlbumId = $starTaskAlbumId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskAlbumName(): ?string
    {
        return $this->starTaskAlbumName;
    }

    /**
     * @param string $starTaskAlbumName
     * @return self
     */
    public function setStarTaskAlbumName(?string $starTaskAlbumName): self
    {
        $this->starTaskAlbumName = $starTaskAlbumName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskAnchorType
     */
    public function getStarTaskAnchorType(): ?string
    {
        return $this->starTaskAnchorType;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskAnchorType $starTaskAnchorType
     * @return self
     */
    public function setStarTaskAnchorType(?string $starTaskAnchorType): self
    {
        $this->starTaskAnchorType = $starTaskAnchorType;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarTaskBid(): ?float
    {
        return $this->starTaskBid;
    }

    /**
     * @param float $starTaskBid
     * @return self
     */
    public function setStarTaskBid(?float $starTaskBid): self
    {
        $this->starTaskBid = $starTaskBid;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarTaskBidAndroid(): ?float
    {
        return $this->starTaskBidAndroid;
    }

    /**
     * @param float $starTaskBidAndroid
     * @return self
     */
    public function setStarTaskBidAndroid(?float $starTaskBidAndroid): self
    {
        $this->starTaskBidAndroid = $starTaskBidAndroid;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarTaskBidIos(): ?float
    {
        return $this->starTaskBidIos;
    }

    /**
     * @param float $starTaskBidIos
     * @return self
     */
    public function setStarTaskBidIos(?float $starTaskBidIos): self
    {
        $this->starTaskBidIos = $starTaskBidIos;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarTaskBudget(): ?float
    {
        return $this->starTaskBudget;
    }

    /**
     * @param float $starTaskBudget
     * @return self
     */
    public function setStarTaskBudget(?float $starTaskBudget): self
    {
        $this->starTaskBudget = $starTaskBudget;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarTaskCanDeliveryItemCount(): ?int
    {
        return $this->starTaskCanDeliveryItemCount;
    }

    /**
     * @param int $starTaskCanDeliveryItemCount
     * @return self
     */
    public function setStarTaskCanDeliveryItemCount(?int $starTaskCanDeliveryItemCount): self
    {
        $this->starTaskCanDeliveryItemCount = $starTaskCanDeliveryItemCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskCategoryName(): ?string
    {
        return $this->starTaskCategoryName;
    }

    /**
     * @param string $starTaskCategoryName
     * @return self
     */
    public function setStarTaskCategoryName(?string $starTaskCategoryName): self
    {
        $this->starTaskCategoryName = $starTaskCategoryName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskCategoryType
     */
    public function getStarTaskCategoryType(): ?string
    {
        return $this->starTaskCategoryType;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskCategoryType $starTaskCategoryType
     * @return self
     */
    public function setStarTaskCategoryType(?string $starTaskCategoryType): self
    {
        $this->starTaskCategoryType = $starTaskCategoryType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskCreateTime(): ?string
    {
        return $this->starTaskCreateTime;
    }

    /**
     * @param string $starTaskCreateTime
     * @return self
     */
    public function setStarTaskCreateTime(?string $starTaskCreateTime): self
    {
        $this->starTaskCreateTime = $starTaskCreateTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskExternalAction
     */
    public function getStarTaskExternalAction(): ?string
    {
        return $this->starTaskExternalAction;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskExternalAction $starTaskExternalAction
     * @return self
     */
    public function setStarTaskExternalAction(?string $starTaskExternalAction): self
    {
        $this->starTaskExternalAction = $starTaskExternalAction;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarTaskId(): ?int
    {
        return $this->starTaskId;
    }

    /**
     * @param int $starTaskId
     * @return self
     */
    public function setStarTaskId(?int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskMaterialPurchaseMethod
     */
    public function getStarTaskMaterialPurchaseMethod(): ?string
    {
        return $this->starTaskMaterialPurchaseMethod;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskMaterialPurchaseMethod $starTaskMaterialPurchaseMethod
     * @return self
     */
    public function setStarTaskMaterialPurchaseMethod(?string $starTaskMaterialPurchaseMethod): self
    {
        $this->starTaskMaterialPurchaseMethod = $starTaskMaterialPurchaseMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskModifyTime(): ?string
    {
        return $this->starTaskModifyTime;
    }

    /**
     * @param string $starTaskModifyTime
     * @return self
     */
    public function setStarTaskModifyTime(?string $starTaskModifyTime): self
    {
        $this->starTaskModifyTime = $starTaskModifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskName(): ?string
    {
        return $this->starTaskName;
    }

    /**
     * @param string $starTaskName
     * @return self
     */
    public function setStarTaskName(?string $starTaskName): self
    {
        $this->starTaskName = $starTaskName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskPostEndTime(): ?string
    {
        return $this->starTaskPostEndTime;
    }

    /**
     * @param string $starTaskPostEndTime
     * @return self
     */
    public function setStarTaskPostEndTime(?string $starTaskPostEndTime): self
    {
        $this->starTaskPostEndTime = $starTaskPostEndTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarTaskPostItemCount(): ?int
    {
        return $this->starTaskPostItemCount;
    }

    /**
     * @param int $starTaskPostItemCount
     * @return self
     */
    public function setStarTaskPostItemCount(?int $starTaskPostItemCount): self
    {
        $this->starTaskPostItemCount = $starTaskPostItemCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarTaskRelateProjectCount(): ?int
    {
        return $this->starTaskRelateProjectCount;
    }

    /**
     * @param int $starTaskRelateProjectCount
     * @return self
     */
    public function setStarTaskRelateProjectCount(?int $starTaskRelateProjectCount): self
    {
        $this->starTaskRelateProjectCount = $starTaskRelateProjectCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskSource
     */
    public function getStarTaskSource(): ?string
    {
        return $this->starTaskSource;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskSource $starTaskSource
     * @return self
     */
    public function setStarTaskSource(?string $starTaskSource): self
    {
        $this->starTaskSource = $starTaskSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskStartTime(): ?string
    {
        return $this->starTaskStartTime;
    }

    /**
     * @param string $starTaskStartTime
     * @return self
     */
    public function setStarTaskStartTime(?string $starTaskStartTime): self
    {
        $this->starTaskStartTime = $starTaskStartTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskStatus
     */
    public function getStarTaskStatus(): ?string
    {
        return $this->starTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskStatus $starTaskStatus
     * @return self
     */
    public function setStarTaskStatus(?string $starTaskStatus): self
    {
        $this->starTaskStatus = $starTaskStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskSubStatus
     */
    public function getStarTaskSubStatus(): ?string
    {
        return $this->starTaskSubStatus;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskListV30DataListStarTaskSubStatus $starTaskSubStatus
     * @return self
     */
    public function setStarTaskSubStatus(?string $starTaskSubStatus): self
    {
        $this->starTaskSubStatus = $starTaskSubStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTimeCostEndTime(): ?string
    {
        return $this->starTimeCostEndTime;
    }

    /**
     * @param string $starTimeCostEndTime
     * @return self
     */
    public function setStarTimeCostEndTime(?string $starTimeCostEndTime): self
    {
        $this->starTimeCostEndTime = $starTimeCostEndTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->starAccountName !== null) {
            $result['star_account_name'] = $this->starAccountName;
        }
        if ($this->starAdCostDivideRatio !== null) {
            $result['star_ad_cost_divide_ratio'] = $this->starAdCostDivideRatio;
        }
        if ($this->starAuthorPending !== null) {
            $result['star_author_pending'] = $this->starAuthorPending;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->starMaterialBid !== null) {
            $result['star_material_bid'] = $this->starMaterialBid;
        }
        if ($this->starMaterialBidRange !== null) {
            $result['star_material_bid_range'] = $this->starMaterialBidRange;
        }
        if ($this->starPendingConfirmCount !== null) {
            $result['star_pending_confirm_count'] = $this->starPendingConfirmCount;
        }
        if ($this->starSaleCostEndTime !== null) {
            $result['star_sale_cost_end_time'] = $this->starSaleCostEndTime;
        }
        if ($this->starTaskAlbumId !== null) {
            $result['star_task_album_id'] = $this->starTaskAlbumId;
        }
        if ($this->starTaskAlbumName !== null) {
            $result['star_task_album_name'] = $this->starTaskAlbumName;
        }
        if ($this->starTaskAnchorType !== null) {
            $result['star_task_anchor_type'] = $this->starTaskAnchorType;
        }
        if ($this->starTaskBid !== null) {
            $result['star_task_bid'] = $this->starTaskBid;
        }
        if ($this->starTaskBidAndroid !== null) {
            $result['star_task_bid_android'] = $this->starTaskBidAndroid;
        }
        if ($this->starTaskBidIos !== null) {
            $result['star_task_bid_ios'] = $this->starTaskBidIos;
        }
        if ($this->starTaskBudget !== null) {
            $result['star_task_budget'] = $this->starTaskBudget;
        }
        if ($this->starTaskCanDeliveryItemCount !== null) {
            $result['star_task_can_delivery_item_count'] = $this->starTaskCanDeliveryItemCount;
        }
        if ($this->starTaskCategoryName !== null) {
            $result['star_task_category_name'] = $this->starTaskCategoryName;
        }
        if ($this->starTaskCategoryType !== null) {
            $result['star_task_category_type'] = $this->starTaskCategoryType;
        }
        if ($this->starTaskCreateTime !== null) {
            $result['star_task_create_time'] = $this->starTaskCreateTime;
        }
        if ($this->starTaskExternalAction !== null) {
            $result['star_task_external_action'] = $this->starTaskExternalAction;
        }
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        if ($this->starTaskMaterialPurchaseMethod !== null) {
            $result['star_task_material_purchase_method'] = $this->starTaskMaterialPurchaseMethod;
        }
        if ($this->starTaskModifyTime !== null) {
            $result['star_task_modify_time'] = $this->starTaskModifyTime;
        }
        if ($this->starTaskName !== null) {
            $result['star_task_name'] = $this->starTaskName;
        }
        if ($this->starTaskPostEndTime !== null) {
            $result['star_task_post_end_time'] = $this->starTaskPostEndTime;
        }
        if ($this->starTaskPostItemCount !== null) {
            $result['star_task_post_item_count'] = $this->starTaskPostItemCount;
        }
        if ($this->starTaskRelateProjectCount !== null) {
            $result['star_task_relate_project_count'] = $this->starTaskRelateProjectCount;
        }
        if ($this->starTaskSource !== null) {
            $result['star_task_source'] = $this->starTaskSource;
        }
        if ($this->starTaskStartTime !== null) {
            $result['star_task_start_time'] = $this->starTaskStartTime;
        }
        if ($this->starTaskStatus !== null) {
            $result['star_task_status'] = $this->starTaskStatus;
        }
        if ($this->starTaskSubStatus !== null) {
            $result['star_task_sub_status'] = $this->starTaskSubStatus;
        }
        if ($this->starTimeCostEndTime !== null) {
            $result['star_time_cost_end_time'] = $this->starTimeCostEndTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['star_account_name'] ?? null) !== null) {
            $obj->starAccountName = (string) $v;
        }
        if (($v = $data['star_ad_cost_divide_ratio'] ?? null) !== null) {
            $obj->starAdCostDivideRatio = (float) $v;
        }
        if (($v = $data['star_author_pending'] ?? null) !== null) {
            $obj->starAuthorPending = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['star_material_bid'] ?? null) !== null) {
            $obj->starMaterialBid = (float) $v;
        }
        if (($v = $data['star_material_bid_range'] ?? null) !== null && is_array($v)) {
            $obj->starMaterialBidRange = $v;
        }
        if (($v = $data['star_pending_confirm_count'] ?? null) !== null) {
            $obj->starPendingConfirmCount = (int) $v;
        }
        if (($v = $data['star_sale_cost_end_time'] ?? null) !== null) {
            $obj->starSaleCostEndTime = (string) $v;
        }
        if (($v = $data['star_task_album_id'] ?? null) !== null) {
            $obj->starTaskAlbumId = (int) $v;
        }
        if (($v = $data['star_task_album_name'] ?? null) !== null) {
            $obj->starTaskAlbumName = (string) $v;
        }
        if (($v = $data['star_task_anchor_type'] ?? null) !== null) {
            $obj->starTaskAnchorType = (string) $v;
        }
        if (($v = $data['star_task_bid'] ?? null) !== null) {
            $obj->starTaskBid = (float) $v;
        }
        if (($v = $data['star_task_bid_android'] ?? null) !== null) {
            $obj->starTaskBidAndroid = (float) $v;
        }
        if (($v = $data['star_task_bid_ios'] ?? null) !== null) {
            $obj->starTaskBidIos = (float) $v;
        }
        if (($v = $data['star_task_budget'] ?? null) !== null) {
            $obj->starTaskBudget = (float) $v;
        }
        if (($v = $data['star_task_can_delivery_item_count'] ?? null) !== null) {
            $obj->starTaskCanDeliveryItemCount = (int) $v;
        }
        if (($v = $data['star_task_category_name'] ?? null) !== null) {
            $obj->starTaskCategoryName = (string) $v;
        }
        if (($v = $data['star_task_category_type'] ?? null) !== null) {
            $obj->starTaskCategoryType = (string) $v;
        }
        if (($v = $data['star_task_create_time'] ?? null) !== null) {
            $obj->starTaskCreateTime = (string) $v;
        }
        if (($v = $data['star_task_external_action'] ?? null) !== null) {
            $obj->starTaskExternalAction = (string) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null) {
            $obj->starTaskId = (int) $v;
        }
        if (($v = $data['star_task_material_purchase_method'] ?? null) !== null) {
            $obj->starTaskMaterialPurchaseMethod = (string) $v;
        }
        if (($v = $data['star_task_modify_time'] ?? null) !== null) {
            $obj->starTaskModifyTime = (string) $v;
        }
        if (($v = $data['star_task_name'] ?? null) !== null) {
            $obj->starTaskName = (string) $v;
        }
        if (($v = $data['star_task_post_end_time'] ?? null) !== null) {
            $obj->starTaskPostEndTime = (string) $v;
        }
        if (($v = $data['star_task_post_item_count'] ?? null) !== null) {
            $obj->starTaskPostItemCount = (int) $v;
        }
        if (($v = $data['star_task_relate_project_count'] ?? null) !== null) {
            $obj->starTaskRelateProjectCount = (int) $v;
        }
        if (($v = $data['star_task_source'] ?? null) !== null) {
            $obj->starTaskSource = (string) $v;
        }
        if (($v = $data['star_task_start_time'] ?? null) !== null) {
            $obj->starTaskStartTime = (string) $v;
        }
        if (($v = $data['star_task_status'] ?? null) !== null) {
            $obj->starTaskStatus = (string) $v;
        }
        if (($v = $data['star_task_sub_status'] ?? null) !== null) {
            $obj->starTaskSubStatus = (string) $v;
        }
        if (($v = $data['star_time_cost_end_time'] ?? null) !== null) {
            $obj->starTimeCostEndTime = (string) $v;
        }
        return $obj;
    }
}
