<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringAdType
     */
    protected ?string $adType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringAppPromotionType
     */
    protected ?string $appPromotionType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringBlueFlowPackageSetting
     */
    protected ?string $blueFlowPackageSetting = null;

    /**
     * @var int
     */
    protected ?int $budgetGroupId = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringDeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringDeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringInventoryType
     */
    protected ?string $inventoryType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringPlatform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringPricing
     */
    protected ?string $pricing = null;

    /**
     * @var string
     */
    protected ?string $projectCreateTime = null;

    /**
     * @var string
     */
    protected ?string $projectModifyEndTime = null;

    /**
     * @var string
     */
    protected ?string $projectModifyStartTime = null;

    /**
     * @var string
     */
    protected ?string $projectModifyTime = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringStarAutoDeliverySwitch
     */
    protected ?string $starAutoDeliverySwitch = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringStarDeliveryType
     */
    protected ?string $starDeliveryType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringStatusFirst
     */
    protected ?string $statusFirst = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30FilteringStatusSecond
     */
    protected ?string $statusSecond = null;

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringAppPromotionType
     */
    public function getAppPromotionType(): ?string
    {
        return $this->appPromotionType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringAppPromotionType $appPromotionType
     * @return self
     */
    public function setAppPromotionType(?string $appPromotionType): self
    {
        $this->appPromotionType = $appPromotionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringBlueFlowPackageSetting
     */
    public function getBlueFlowPackageSetting(): ?string
    {
        return $this->blueFlowPackageSetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringBlueFlowPackageSetting $blueFlowPackageSetting
     * @return self
     */
    public function setBlueFlowPackageSetting(?string $blueFlowPackageSetting): self
    {
        $this->blueFlowPackageSetting = $blueFlowPackageSetting;
        return $this;
    }

    /**
     * @return int
     */
    public function getBudgetGroupId(): ?int
    {
        return $this->budgetGroupId;
    }

    /**
     * @param int $budgetGroupId
     * @return self
     */
    public function setBudgetGroupId(?int $budgetGroupId): self
    {
        $this->budgetGroupId = $budgetGroupId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringDeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringDeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringDeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringDeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
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
     * @return \Oceanengine\Models\ProjectListV30FilteringInventoryType
     */
    public function getInventoryType(): ?string
    {
        return $this->inventoryType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringInventoryType $inventoryType
     * @return self
     */
    public function setInventoryType(?string $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
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
     * @return \Oceanengine\Models\ProjectListV30FilteringPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectCreateTime(): ?string
    {
        return $this->projectCreateTime;
    }

    /**
     * @param string $projectCreateTime
     * @return self
     */
    public function setProjectCreateTime(?string $projectCreateTime): self
    {
        $this->projectCreateTime = $projectCreateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectModifyEndTime(): ?string
    {
        return $this->projectModifyEndTime;
    }

    /**
     * @param string $projectModifyEndTime
     * @return self
     */
    public function setProjectModifyEndTime(?string $projectModifyEndTime): self
    {
        $this->projectModifyEndTime = $projectModifyEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectModifyStartTime(): ?string
    {
        return $this->projectModifyStartTime;
    }

    /**
     * @param string $projectModifyStartTime
     * @return self
     */
    public function setProjectModifyStartTime(?string $projectModifyStartTime): self
    {
        $this->projectModifyStartTime = $projectModifyStartTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectModifyTime(): ?string
    {
        return $this->projectModifyTime;
    }

    /**
     * @param string $projectModifyTime
     * @return self
     */
    public function setProjectModifyTime(?string $projectModifyTime): self
    {
        $this->projectModifyTime = $projectModifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringStarAutoDeliverySwitch
     */
    public function getStarAutoDeliverySwitch(): ?string
    {
        return $this->starAutoDeliverySwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringStarAutoDeliverySwitch $starAutoDeliverySwitch
     * @return self
     */
    public function setStarAutoDeliverySwitch(?string $starAutoDeliverySwitch): self
    {
        $this->starAutoDeliverySwitch = $starAutoDeliverySwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringStarDeliveryType
     */
    public function getStarDeliveryType(): ?string
    {
        return $this->starDeliveryType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringStarDeliveryType $starDeliveryType
     * @return self
     */
    public function setStarDeliveryType(?string $starDeliveryType): self
    {
        $this->starDeliveryType = $starDeliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringStatusFirst
     */
    public function getStatusFirst(): ?string
    {
        return $this->statusFirst;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringStatusFirst $statusFirst
     * @return self
     */
    public function setStatusFirst(?string $statusFirst): self
    {
        $this->statusFirst = $statusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30FilteringStatusSecond
     */
    public function getStatusSecond(): ?string
    {
        return $this->statusSecond;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30FilteringStatusSecond $statusSecond
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
        if ($this->adType !== null) {
            $result['ad_type'] = $this->adType;
        }
        if ($this->appPromotionType !== null) {
            $result['app_promotion_type'] = $this->appPromotionType;
        }
        if ($this->blueFlowPackageSetting !== null) {
            $result['blue_flow_package_setting'] = $this->blueFlowPackageSetting;
        }
        if ($this->budgetGroupId !== null) {
            $result['budget_group_id'] = $this->budgetGroupId;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->inventoryType !== null) {
            $result['inventory_type'] = $this->inventoryType;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        if ($this->projectCreateTime !== null) {
            $result['project_create_time'] = $this->projectCreateTime;
        }
        if ($this->projectModifyEndTime !== null) {
            $result['project_modify_end_time'] = $this->projectModifyEndTime;
        }
        if ($this->projectModifyStartTime !== null) {
            $result['project_modify_start_time'] = $this->projectModifyStartTime;
        }
        if ($this->projectModifyTime !== null) {
            $result['project_modify_time'] = $this->projectModifyTime;
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
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['app_promotion_type'] ?? null) !== null) {
            $obj->appPromotionType = (string) $v;
        }
        if (($v = $data['blue_flow_package_setting'] ?? null) !== null) {
            $obj->blueFlowPackageSetting = (string) $v;
        }
        if (($v = $data['budget_group_id'] ?? null) !== null) {
            $obj->budgetGroupId = (int) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null) {
            $obj->deliveryMode = (string) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        if (($v = $data['inventory_type'] ?? null) !== null) {
            $obj->inventoryType = (string) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
        }
        if (($v = $data['project_create_time'] ?? null) !== null) {
            $obj->projectCreateTime = (string) $v;
        }
        if (($v = $data['project_modify_end_time'] ?? null) !== null) {
            $obj->projectModifyEndTime = (string) $v;
        }
        if (($v = $data['project_modify_start_time'] ?? null) !== null) {
            $obj->projectModifyStartTime = (string) $v;
        }
        if (($v = $data['project_modify_time'] ?? null) !== null) {
            $obj->projectModifyTime = (string) $v;
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
