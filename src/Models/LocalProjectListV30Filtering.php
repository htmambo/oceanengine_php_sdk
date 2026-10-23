<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectListV30FilteringAdType
     */
    protected ?string $adType = null;

    /**
     * @var \Oceanengine\Models\LocalProjectListV30FilteringBidType
     */
    protected ?string $bidType = null;

    /**
     * @var \Oceanengine\Models\LocalProjectListV30FilteringDeliveryPackage
     */
    protected ?string $deliveryPackage = null;

    /**
     * @var \Oceanengine\Models\LocalProjectListV30FilteringLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * @var \Oceanengine\Models\LocalProjectListV30FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 商品IDs筛选，最多10个
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * 项目创建结束时间，格式\"yyyy-MM-dd HH:mm:ss\"与time_start搭配使用
     * @var string
     */
    protected ?string $projectCreateTimeEnd = null;

    /**
     * 项目创建开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @var string
     */
    protected ?string $projectCreateTimeStart = null;

    /**
     * 项目IDs筛选，最多100个
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * 项目更新结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @var string
     */
    protected ?string $projectModifyTimeEnd = null;

    /**
     * 项目更新开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @var string
     */
    protected ?string $projectModifyTimeStart = null;

    /**
     * 项目名称模糊搜索
     * @var string
     */
    protected ?string $projectName = null;

    /**
     * @var \Oceanengine\Models\LocalProjectListV30FilteringProjectStatusFirst
     */
    protected ?string $projectStatusFirst = null;

    /**
     * @var \Oceanengine\Models\LocalProjectListV30FilteringProjectStatusSecond
     */
    protected ?string $projectStatusSecond = null;

    /**
     * 门店IDs筛选，最多10个
     * @var int[]
     */
    protected ?array $shopIds = null;

    /**
     * @return \Oceanengine\Models\LocalProjectListV30FilteringAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30FilteringAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectListV30FilteringBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30FilteringBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectListV30FilteringDeliveryPackage
     */
    public function getDeliveryPackage(): ?string
    {
        return $this->deliveryPackage;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30FilteringDeliveryPackage $deliveryPackage
     * @return self
     */
    public function setDeliveryPackage(?string $deliveryPackage): self
    {
        $this->deliveryPackage = $deliveryPackage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectListV30FilteringLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30FilteringLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectListV30FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 商品IDs筛选，最多10个
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * 商品IDs筛选，最多10个
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * 项目创建结束时间，格式\"yyyy-MM-dd HH:mm:ss\"与time_start搭配使用
     * @return string
     */
    public function getProjectCreateTimeEnd(): ?string
    {
        return $this->projectCreateTimeEnd;
    }

    /**
     * 项目创建结束时间，格式\"yyyy-MM-dd HH:mm:ss\"与time_start搭配使用
     * @param string $projectCreateTimeEnd
     * @return self
     */
    public function setProjectCreateTimeEnd(?string $projectCreateTimeEnd): self
    {
        $this->projectCreateTimeEnd = $projectCreateTimeEnd;
        return $this;
    }

    /**
     * 项目创建开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @return string
     */
    public function getProjectCreateTimeStart(): ?string
    {
        return $this->projectCreateTimeStart;
    }

    /**
     * 项目创建开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @param string $projectCreateTimeStart
     * @return self
     */
    public function setProjectCreateTimeStart(?string $projectCreateTimeStart): self
    {
        $this->projectCreateTimeStart = $projectCreateTimeStart;
        return $this;
    }

    /**
     * 项目IDs筛选，最多100个
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * 项目IDs筛选，最多100个
     * @param int[] $projectIds
     * @return self
     */
    public function setProjectIds(?array $projectIds): self
    {
        $this->projectIds = $projectIds;
        return $this;
    }

    /**
     * 项目更新结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @return string
     */
    public function getProjectModifyTimeEnd(): ?string
    {
        return $this->projectModifyTimeEnd;
    }

    /**
     * 项目更新结束时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_start搭配使用
     * @param string $projectModifyTimeEnd
     * @return self
     */
    public function setProjectModifyTimeEnd(?string $projectModifyTimeEnd): self
    {
        $this->projectModifyTimeEnd = $projectModifyTimeEnd;
        return $this;
    }

    /**
     * 项目更新开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @return string
     */
    public function getProjectModifyTimeStart(): ?string
    {
        return $this->projectModifyTimeStart;
    }

    /**
     * 项目更新开始时间，格式\"yyyy-MM-dd HH:mm:ss\",与time_end搭配使用
     * @param string $projectModifyTimeStart
     * @return self
     */
    public function setProjectModifyTimeStart(?string $projectModifyTimeStart): self
    {
        $this->projectModifyTimeStart = $projectModifyTimeStart;
        return $this;
    }

    /**
     * 项目名称模糊搜索
     * @return string
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * 项目名称模糊搜索
     * @param string $projectName
     * @return self
     */
    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectListV30FilteringProjectStatusFirst
     */
    public function getProjectStatusFirst(): ?string
    {
        return $this->projectStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30FilteringProjectStatusFirst $projectStatusFirst
     * @return self
     */
    public function setProjectStatusFirst(?string $projectStatusFirst): self
    {
        $this->projectStatusFirst = $projectStatusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectListV30FilteringProjectStatusSecond
     */
    public function getProjectStatusSecond(): ?string
    {
        return $this->projectStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30FilteringProjectStatusSecond $projectStatusSecond
     * @return self
     */
    public function setProjectStatusSecond(?string $projectStatusSecond): self
    {
        $this->projectStatusSecond = $projectStatusSecond;
        return $this;
    }

    /**
     * 门店IDs筛选，最多10个
     * @return int[]
     */
    public function getShopIds(): ?array
    {
        return $this->shopIds;
    }

    /**
     * 门店IDs筛选，最多10个
     * @param int[] $shopIds
     * @return self
     */
    public function setShopIds(?array $shopIds): self
    {
        $this->shopIds = $shopIds;
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
        if ($this->deliveryPackage !== null) {
            $result['delivery_package'] = $this->deliveryPackage;
        }
        if ($this->localDeliveryScene !== null) {
            $result['local_delivery_scene'] = $this->localDeliveryScene;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        if ($this->projectCreateTimeEnd !== null) {
            $result['project_create_time_end'] = $this->projectCreateTimeEnd;
        }
        if ($this->projectCreateTimeStart !== null) {
            $result['project_create_time_start'] = $this->projectCreateTimeStart;
        }
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        if ($this->projectModifyTimeEnd !== null) {
            $result['project_modify_time_end'] = $this->projectModifyTimeEnd;
        }
        if ($this->projectModifyTimeStart !== null) {
            $result['project_modify_time_start'] = $this->projectModifyTimeStart;
        }
        if ($this->projectName !== null) {
            $result['project_name'] = $this->projectName;
        }
        if ($this->projectStatusFirst !== null) {
            $result['project_status_first'] = $this->projectStatusFirst;
        }
        if ($this->projectStatusSecond !== null) {
            $result['project_status_second'] = $this->projectStatusSecond;
        }
        if ($this->shopIds !== null) {
            $result['shop_ids'] = $this->shopIds;
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
        if (($v = $data['delivery_package'] ?? null) !== null) {
            $obj->deliveryPackage = (string) $v;
        }
        if (($v = $data['local_delivery_scene'] ?? null) !== null) {
            $obj->localDeliveryScene = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        if (($v = $data['project_create_time_end'] ?? null) !== null) {
            $obj->projectCreateTimeEnd = (string) $v;
        }
        if (($v = $data['project_create_time_start'] ?? null) !== null) {
            $obj->projectCreateTimeStart = (string) $v;
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        if (($v = $data['project_modify_time_end'] ?? null) !== null) {
            $obj->projectModifyTimeEnd = (string) $v;
        }
        if (($v = $data['project_modify_time_start'] ?? null) !== null) {
            $obj->projectModifyTimeStart = (string) $v;
        }
        if (($v = $data['project_name'] ?? null) !== null) {
            $obj->projectName = (string) $v;
        }
        if (($v = $data['project_status_first'] ?? null) !== null) {
            $obj->projectStatusFirst = (string) $v;
        }
        if (($v = $data['project_status_second'] ?? null) !== null) {
            $obj->projectStatusSecond = (string) $v;
        }
        if (($v = $data['shop_ids'] ?? null) !== null && is_array($v)) {
            $obj->shopIds = $v;
        }
        return $obj;
    }
}
