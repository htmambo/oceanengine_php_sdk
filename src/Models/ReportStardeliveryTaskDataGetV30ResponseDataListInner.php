<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportStardeliveryTaskDataGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $active = null;

    /**
     * @var int
     */
    protected ?int $activePay = null;

    /**
     * @var int
     */
    protected ?int $activeRegister = null;

    /**
     * @var int
     */
    protected ?int $androidConvertCnt = null;

    /**
     * @var int
     */
    protected ?int $gamePayCount = null;

    /**
     * @var int
     */
    protected ?int $installFinishCnt = null;

    /**
     * @var int
     */
    protected ?int $iosConvertCnt = null;

    /**
     * @var float
     */
    protected ?float $nonAdStatCost = null;

    /**
     * @var int
     */
    protected ?int $starActiveCount = null;

    /**
     * @var int
     */
    protected ?int $starActivePayCount = null;

    /**
     * @var int
     */
    protected ?int $starActiveRegisterCount = null;

    /**
     * @var int
     */
    protected ?int $starConvertCnt = null;

    /**
     * @var int
     */
    protected ?int $starDeepPurchaseCount = null;

    /**
     * @var int
     */
    protected ?int $starInstallFinishCount = null;

    /**
     * @var float
     */
    protected ?float $starMaterialStatCost = null;

    /**
     * @var float
     */
    protected ?float $starSaleMaterialStatCost = null;

    /**
     * @var float
     */
    protected ?float $starStatCost = null;

    /**
     * @var int
     */
    protected ?int $starTaskAlbumId = null;

    /**
     * @var string
     */
    protected ?string $starTaskAlbumName = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType
     */
    protected ?string $starTaskAnchorType = null;

    /**
     * @var int
     */
    protected ?int $starTaskApproachingBudgetLimitIsvCount = null;

    /**
     * @var float
     */
    protected ?float $starTaskBudget = null;

    /**
     * @var float
     */
    protected ?float $starTaskBudgetCostRate = null;

    /**
     * @var int
     */
    protected ?int $starTaskCanDeliveryItemCount = null;

    /**
     * @var string
     */
    protected ?string $starTaskCategoryName = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType
     */
    protected ?string $starTaskCategoryType = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction
     */
    protected ?string $starTaskExternalAction = null;

    /**
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * @var float
     */
    protected ?float $starTaskLockAmount = null;

    /**
     * @var string
     */
    protected ?string $starTaskName = null;

    /**
     * @var int
     */
    protected ?int $starTaskPostItemCount = null;

    /**
     * @var int
     */
    protected ?int $starTaskRelateProjectCount = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskSource
     */
    protected ?string $starTaskSource = null;

    /**
     * @var string
     */
    protected ?string $starTaskStartTime = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskStatus
     */
    protected ?string $starTaskStatus = null;

    /**
     * @var float
     */
    protected ?float $starTaskUnfrozenAmount = null;

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
    public function getActive(): ?int
    {
        return $this->active;
    }

    /**
     * @param int $active
     * @return self
     */
    public function setActive(?int $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivePay(): ?int
    {
        return $this->activePay;
    }

    /**
     * @param int $activePay
     * @return self
     */
    public function setActivePay(?int $activePay): self
    {
        $this->activePay = $activePay;
        return $this;
    }

    /**
     * @return int
     */
    public function getActiveRegister(): ?int
    {
        return $this->activeRegister;
    }

    /**
     * @param int $activeRegister
     * @return self
     */
    public function setActiveRegister(?int $activeRegister): self
    {
        $this->activeRegister = $activeRegister;
        return $this;
    }

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
    public function getGamePayCount(): ?int
    {
        return $this->gamePayCount;
    }

    /**
     * @param int $gamePayCount
     * @return self
     */
    public function setGamePayCount(?int $gamePayCount): self
    {
        $this->gamePayCount = $gamePayCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallFinishCnt(): ?int
    {
        return $this->installFinishCnt;
    }

    /**
     * @param int $installFinishCnt
     * @return self
     */
    public function setInstallFinishCnt(?int $installFinishCnt): self
    {
        $this->installFinishCnt = $installFinishCnt;
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
     * @return int
     */
    public function getStarActiveCount(): ?int
    {
        return $this->starActiveCount;
    }

    /**
     * @param int $starActiveCount
     * @return self
     */
    public function setStarActiveCount(?int $starActiveCount): self
    {
        $this->starActiveCount = $starActiveCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarActivePayCount(): ?int
    {
        return $this->starActivePayCount;
    }

    /**
     * @param int $starActivePayCount
     * @return self
     */
    public function setStarActivePayCount(?int $starActivePayCount): self
    {
        $this->starActivePayCount = $starActivePayCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarActiveRegisterCount(): ?int
    {
        return $this->starActiveRegisterCount;
    }

    /**
     * @param int $starActiveRegisterCount
     * @return self
     */
    public function setStarActiveRegisterCount(?int $starActiveRegisterCount): self
    {
        $this->starActiveRegisterCount = $starActiveRegisterCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarConvertCnt(): ?int
    {
        return $this->starConvertCnt;
    }

    /**
     * @param int $starConvertCnt
     * @return self
     */
    public function setStarConvertCnt(?int $starConvertCnt): self
    {
        $this->starConvertCnt = $starConvertCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarDeepPurchaseCount(): ?int
    {
        return $this->starDeepPurchaseCount;
    }

    /**
     * @param int $starDeepPurchaseCount
     * @return self
     */
    public function setStarDeepPurchaseCount(?int $starDeepPurchaseCount): self
    {
        $this->starDeepPurchaseCount = $starDeepPurchaseCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarInstallFinishCount(): ?int
    {
        return $this->starInstallFinishCount;
    }

    /**
     * @param int $starInstallFinishCount
     * @return self
     */
    public function setStarInstallFinishCount(?int $starInstallFinishCount): self
    {
        $this->starInstallFinishCount = $starInstallFinishCount;
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
     * @return float
     */
    public function getStarSaleMaterialStatCost(): ?float
    {
        return $this->starSaleMaterialStatCost;
    }

    /**
     * @param float $starSaleMaterialStatCost
     * @return self
     */
    public function setStarSaleMaterialStatCost(?float $starSaleMaterialStatCost): self
    {
        $this->starSaleMaterialStatCost = $starSaleMaterialStatCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarStatCost(): ?float
    {
        return $this->starStatCost;
    }

    /**
     * @param float $starStatCost
     * @return self
     */
    public function setStarStatCost(?float $starStatCost): self
    {
        $this->starStatCost = $starStatCost;
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
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType
     */
    public function getStarTaskAnchorType(): ?string
    {
        return $this->starTaskAnchorType;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType $starTaskAnchorType
     * @return self
     */
    public function setStarTaskAnchorType(?string $starTaskAnchorType): self
    {
        $this->starTaskAnchorType = $starTaskAnchorType;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarTaskApproachingBudgetLimitIsvCount(): ?int
    {
        return $this->starTaskApproachingBudgetLimitIsvCount;
    }

    /**
     * @param int $starTaskApproachingBudgetLimitIsvCount
     * @return self
     */
    public function setStarTaskApproachingBudgetLimitIsvCount(?int $starTaskApproachingBudgetLimitIsvCount): self
    {
        $this->starTaskApproachingBudgetLimitIsvCount = $starTaskApproachingBudgetLimitIsvCount;
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
     * @return float
     */
    public function getStarTaskBudgetCostRate(): ?float
    {
        return $this->starTaskBudgetCostRate;
    }

    /**
     * @param float $starTaskBudgetCostRate
     * @return self
     */
    public function setStarTaskBudgetCostRate(?float $starTaskBudgetCostRate): self
    {
        $this->starTaskBudgetCostRate = $starTaskBudgetCostRate;
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
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType
     */
    public function getStarTaskCategoryType(): ?string
    {
        return $this->starTaskCategoryType;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskCategoryType $starTaskCategoryType
     * @return self
     */
    public function setStarTaskCategoryType(?string $starTaskCategoryType): self
    {
        $this->starTaskCategoryType = $starTaskCategoryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction
     */
    public function getStarTaskExternalAction(): ?string
    {
        return $this->starTaskExternalAction;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction $starTaskExternalAction
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
     * @return float
     */
    public function getStarTaskLockAmount(): ?float
    {
        return $this->starTaskLockAmount;
    }

    /**
     * @param float $starTaskLockAmount
     * @return self
     */
    public function setStarTaskLockAmount(?float $starTaskLockAmount): self
    {
        $this->starTaskLockAmount = $starTaskLockAmount;
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
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskSource
     */
    public function getStarTaskSource(): ?string
    {
        return $this->starTaskSource;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskSource $starTaskSource
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
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskStatus
     */
    public function getStarTaskStatus(): ?string
    {
        return $this->starTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30DataListStarTaskStatus $starTaskStatus
     * @return self
     */
    public function setStarTaskStatus(?string $starTaskStatus): self
    {
        $this->starTaskStatus = $starTaskStatus;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarTaskUnfrozenAmount(): ?float
    {
        return $this->starTaskUnfrozenAmount;
    }

    /**
     * @param float $starTaskUnfrozenAmount
     * @return self
     */
    public function setStarTaskUnfrozenAmount(?float $starTaskUnfrozenAmount): self
    {
        $this->starTaskUnfrozenAmount = $starTaskUnfrozenAmount;
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
        if ($this->active !== null) {
            $result['active'] = $this->active;
        }
        if ($this->activePay !== null) {
            $result['active_pay'] = $this->activePay;
        }
        if ($this->activeRegister !== null) {
            $result['active_register'] = $this->activeRegister;
        }
        if ($this->androidConvertCnt !== null) {
            $result['android_convert_cnt'] = $this->androidConvertCnt;
        }
        if ($this->gamePayCount !== null) {
            $result['game_pay_count'] = $this->gamePayCount;
        }
        if ($this->installFinishCnt !== null) {
            $result['install_finish_cnt'] = $this->installFinishCnt;
        }
        if ($this->iosConvertCnt !== null) {
            $result['ios_convert_cnt'] = $this->iosConvertCnt;
        }
        if ($this->nonAdStatCost !== null) {
            $result['non_ad_stat_cost'] = $this->nonAdStatCost;
        }
        if ($this->starActiveCount !== null) {
            $result['star_active_count'] = $this->starActiveCount;
        }
        if ($this->starActivePayCount !== null) {
            $result['star_active_pay_count'] = $this->starActivePayCount;
        }
        if ($this->starActiveRegisterCount !== null) {
            $result['star_active_register_count'] = $this->starActiveRegisterCount;
        }
        if ($this->starConvertCnt !== null) {
            $result['star_convert_cnt'] = $this->starConvertCnt;
        }
        if ($this->starDeepPurchaseCount !== null) {
            $result['star_deep_purchase_count'] = $this->starDeepPurchaseCount;
        }
        if ($this->starInstallFinishCount !== null) {
            $result['star_install_finish_count'] = $this->starInstallFinishCount;
        }
        if ($this->starMaterialStatCost !== null) {
            $result['star_material_stat_cost'] = $this->starMaterialStatCost;
        }
        if ($this->starSaleMaterialStatCost !== null) {
            $result['star_sale_material_stat_cost'] = $this->starSaleMaterialStatCost;
        }
        if ($this->starStatCost !== null) {
            $result['star_stat_cost'] = $this->starStatCost;
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
        if ($this->starTaskApproachingBudgetLimitIsvCount !== null) {
            $result['star_task_approaching_budget_limit_isv_count'] = $this->starTaskApproachingBudgetLimitIsvCount;
        }
        if ($this->starTaskBudget !== null) {
            $result['star_task_budget'] = $this->starTaskBudget;
        }
        if ($this->starTaskBudgetCostRate !== null) {
            $result['star_task_budget_cost_rate'] = $this->starTaskBudgetCostRate;
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
        if ($this->starTaskExternalAction !== null) {
            $result['star_task_external_action'] = $this->starTaskExternalAction;
        }
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        if ($this->starTaskLockAmount !== null) {
            $result['star_task_lock_amount'] = $this->starTaskLockAmount;
        }
        if ($this->starTaskName !== null) {
            $result['star_task_name'] = $this->starTaskName;
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
        if ($this->starTaskUnfrozenAmount !== null) {
            $result['star_task_unfrozen_amount'] = $this->starTaskUnfrozenAmount;
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
        if (($v = $data['active'] ?? null) !== null) {
            $obj->active = (int) $v;
        }
        if (($v = $data['active_pay'] ?? null) !== null) {
            $obj->activePay = (int) $v;
        }
        if (($v = $data['active_register'] ?? null) !== null) {
            $obj->activeRegister = (int) $v;
        }
        if (($v = $data['android_convert_cnt'] ?? null) !== null) {
            $obj->androidConvertCnt = (int) $v;
        }
        if (($v = $data['game_pay_count'] ?? null) !== null) {
            $obj->gamePayCount = (int) $v;
        }
        if (($v = $data['install_finish_cnt'] ?? null) !== null) {
            $obj->installFinishCnt = (int) $v;
        }
        if (($v = $data['ios_convert_cnt'] ?? null) !== null) {
            $obj->iosConvertCnt = (int) $v;
        }
        if (($v = $data['non_ad_stat_cost'] ?? null) !== null) {
            $obj->nonAdStatCost = (float) $v;
        }
        if (($v = $data['star_active_count'] ?? null) !== null) {
            $obj->starActiveCount = (int) $v;
        }
        if (($v = $data['star_active_pay_count'] ?? null) !== null) {
            $obj->starActivePayCount = (int) $v;
        }
        if (($v = $data['star_active_register_count'] ?? null) !== null) {
            $obj->starActiveRegisterCount = (int) $v;
        }
        if (($v = $data['star_convert_cnt'] ?? null) !== null) {
            $obj->starConvertCnt = (int) $v;
        }
        if (($v = $data['star_deep_purchase_count'] ?? null) !== null) {
            $obj->starDeepPurchaseCount = (int) $v;
        }
        if (($v = $data['star_install_finish_count'] ?? null) !== null) {
            $obj->starInstallFinishCount = (int) $v;
        }
        if (($v = $data['star_material_stat_cost'] ?? null) !== null) {
            $obj->starMaterialStatCost = (float) $v;
        }
        if (($v = $data['star_sale_material_stat_cost'] ?? null) !== null) {
            $obj->starSaleMaterialStatCost = (float) $v;
        }
        if (($v = $data['star_stat_cost'] ?? null) !== null) {
            $obj->starStatCost = (float) $v;
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
        if (($v = $data['star_task_approaching_budget_limit_isv_count'] ?? null) !== null) {
            $obj->starTaskApproachingBudgetLimitIsvCount = (int) $v;
        }
        if (($v = $data['star_task_budget'] ?? null) !== null) {
            $obj->starTaskBudget = (float) $v;
        }
        if (($v = $data['star_task_budget_cost_rate'] ?? null) !== null) {
            $obj->starTaskBudgetCostRate = (float) $v;
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
        if (($v = $data['star_task_external_action'] ?? null) !== null) {
            $obj->starTaskExternalAction = (string) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null) {
            $obj->starTaskId = (int) $v;
        }
        if (($v = $data['star_task_lock_amount'] ?? null) !== null) {
            $obj->starTaskLockAmount = (float) $v;
        }
        if (($v = $data['star_task_name'] ?? null) !== null) {
            $obj->starTaskName = (string) $v;
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
        if (($v = $data['star_task_unfrozen_amount'] ?? null) !== null) {
            $obj->starTaskUnfrozenAmount = (float) $v;
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
