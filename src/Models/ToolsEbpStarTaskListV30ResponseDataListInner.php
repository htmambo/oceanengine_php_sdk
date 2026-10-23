<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $androidConvertCnt = null;

    /**
     * @var int
     */
    protected ?int $iosConvertCnt = null;

    /**
     * @var float
     */
    protected ?float $nonAdStatCost = null;

    /**
     * @var float
     */
    protected ?float $starAdCostDivideRatio = null;

    /**
     * @var int
     */
    protected ?int $starAuthorPending = null;

    /**
     * @var float
     */
    protected ?float $starMaterialBid = null;

    /**
     * @var float[]
     */
    protected ?array $starMaterialBidRange = null;

    /**
     * @var float
     */
    protected ?float $starMaterialStatCost = null;

    /**
     * @var int
     */
    protected ?int $starPendingConfirmCount = null;

    /**
     * @var string
     */
    protected ?string $starSaleCostEndTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskAnchorType
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
     * @var string
     */
    protected ?string $starTaskCreateTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskExternalAction
     */
    protected ?string $starTaskExternalAction = null;

    /**
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskMaterialPurchaseMethod
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
     * @var \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskSource
     */
    protected ?string $starTaskSource = null;

    /**
     * @var string
     */
    protected ?string $starTaskStartTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskStatus
     */
    protected ?string $starTaskStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskSubStatus
     */
    protected ?string $starTaskSubStatus = null;

    /**
     * @var string
     */
    protected ?string $starTimeCostEndTime = null;

    /**
     * @var float
     */
    protected ?float $statAndroidCost = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @var float
     */
    protected ?float $statIosCost = null;

    /**
     * @return int
     */
    public function getAndroidConvertCnt(): ?int
    {
        return $this->androidConvertCnt;
    }

    /**
     * @param int $androidConvertCnt
     * @return self
     */
    public function setAndroidConvertCnt(?int $androidConvertCnt): self
    {
        $this->androidConvertCnt = $androidConvertCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getIosConvertCnt(): ?int
    {
        return $this->iosConvertCnt;
    }

    /**
     * @param int $iosConvertCnt
     * @return self
     */
    public function setIosConvertCnt(?int $iosConvertCnt): self
    {
        $this->iosConvertCnt = $iosConvertCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getNonAdStatCost(): ?float
    {
        return $this->nonAdStatCost;
    }

    /**
     * @param float $nonAdStatCost
     * @return self
     */
    public function setNonAdStatCost(?float $nonAdStatCost): self
    {
        $this->nonAdStatCost = $nonAdStatCost;
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
     * @return float
     */
    public function getStarMaterialStatCost(): ?float
    {
        return $this->starMaterialStatCost;
    }

    /**
     * @param float $starMaterialStatCost
     * @return self
     */
    public function setStarMaterialStatCost(?float $starMaterialStatCost): self
    {
        $this->starMaterialStatCost = $starMaterialStatCost;
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
     * @return \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskAnchorType
     */
    public function getStarTaskAnchorType(): ?string
    {
        return $this->starTaskAnchorType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskAnchorType $starTaskAnchorType
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
     * @return \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskExternalAction
     */
    public function getStarTaskExternalAction(): ?string
    {
        return $this->starTaskExternalAction;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskExternalAction $starTaskExternalAction
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
     * @return \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskMaterialPurchaseMethod
     */
    public function getStarTaskMaterialPurchaseMethod(): ?string
    {
        return $this->starTaskMaterialPurchaseMethod;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskMaterialPurchaseMethod $starTaskMaterialPurchaseMethod
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
     * @return \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskSource
     */
    public function getStarTaskSource(): ?string
    {
        return $this->starTaskSource;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskSource $starTaskSource
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
     * @return \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskStatus
     */
    public function getStarTaskStatus(): ?string
    {
        return $this->starTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskStatus $starTaskStatus
     * @return self
     */
    public function setStarTaskStatus(?string $starTaskStatus): self
    {
        $this->starTaskStatus = $starTaskStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskSubStatus
     */
    public function getStarTaskSubStatus(): ?string
    {
        return $this->starTaskSubStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskListV30DataListStarTaskSubStatus $starTaskSubStatus
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
     * @return float
     */
    public function getStatAndroidCost(): ?float
    {
        return $this->statAndroidCost;
    }

    /**
     * @param float $statAndroidCost
     * @return self
     */
    public function setStatAndroidCost(?float $statAndroidCost): self
    {
        $this->statAndroidCost = $statAndroidCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatIosCost(): ?float
    {
        return $this->statIosCost;
    }

    /**
     * @param float $statIosCost
     * @return self
     */
    public function setStatIosCost(?float $statIosCost): self
    {
        $this->statIosCost = $statIosCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidConvertCnt !== null) {
            $result['android_convert_cnt'] = $this->androidConvertCnt;
        }
        if ($this->iosConvertCnt !== null) {
            $result['ios_convert_cnt'] = $this->iosConvertCnt;
        }
        if ($this->nonAdStatCost !== null) {
            $result['non_ad_stat_cost'] = $this->nonAdStatCost;
        }
        if ($this->starAdCostDivideRatio !== null) {
            $result['star_ad_cost_divide_ratio'] = $this->starAdCostDivideRatio;
        }
        if ($this->starAuthorPending !== null) {
            $result['star_author_pending'] = $this->starAuthorPending;
        }
        if ($this->starMaterialBid !== null) {
            $result['star_material_bid'] = $this->starMaterialBid;
        }
        if ($this->starMaterialBidRange !== null) {
            $result['star_material_bid_range'] = $this->starMaterialBidRange;
        }
        if ($this->starMaterialStatCost !== null) {
            $result['star_material_stat_cost'] = $this->starMaterialStatCost;
        }
        if ($this->starPendingConfirmCount !== null) {
            $result['star_pending_confirm_count'] = $this->starPendingConfirmCount;
        }
        if ($this->starSaleCostEndTime !== null) {
            $result['star_sale_cost_end_time'] = $this->starSaleCostEndTime;
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
        if ($this->statAndroidCost !== null) {
            $result['stat_android_cost'] = $this->statAndroidCost;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->statIosCost !== null) {
            $result['stat_ios_cost'] = $this->statIosCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_convert_cnt'] ?? null) !== null) {
            $obj->androidConvertCnt = (int) $v;
        }
        if (($v = $data['ios_convert_cnt'] ?? null) !== null) {
            $obj->iosConvertCnt = (int) $v;
        }
        if (($v = $data['non_ad_stat_cost'] ?? null) !== null) {
            $obj->nonAdStatCost = (float) $v;
        }
        if (($v = $data['star_ad_cost_divide_ratio'] ?? null) !== null) {
            $obj->starAdCostDivideRatio = (float) $v;
        }
        if (($v = $data['star_author_pending'] ?? null) !== null) {
            $obj->starAuthorPending = (int) $v;
        }
        if (($v = $data['star_material_bid'] ?? null) !== null) {
            $obj->starMaterialBid = (float) $v;
        }
        if (($v = $data['star_material_bid_range'] ?? null) !== null && is_array($v)) {
            $obj->starMaterialBidRange = $v;
        }
        if (($v = $data['star_material_stat_cost'] ?? null) !== null) {
            $obj->starMaterialStatCost = (float) $v;
        }
        if (($v = $data['star_pending_confirm_count'] ?? null) !== null) {
            $obj->starPendingConfirmCount = (int) $v;
        }
        if (($v = $data['star_sale_cost_end_time'] ?? null) !== null) {
            $obj->starSaleCostEndTime = (string) $v;
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
        if (($v = $data['stat_android_cost'] ?? null) !== null) {
            $obj->statAndroidCost = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['stat_ios_cost'] ?? null) !== null) {
            $obj->statIosCost = (float) $v;
        }
        return $obj;
    }
}
