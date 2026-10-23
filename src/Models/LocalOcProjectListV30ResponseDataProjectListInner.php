<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcProjectListV30ResponseDataProjectListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListAdType
     */
    protected ?string $adType = null;

    /**
     * 定向包ID
     * @var int
     */
    protected ?int $audiencePackageId = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListBidType
     */
    protected ?string $bidType = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListDeliveryGoal
     */
    protected ?string $deliveryGoal = null;

    /**
     * 投放结束时间，如：2017-01-01 精确到天
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 营销跳转页，允许值：   - LOCAL_ASSET_TYPE_AWEME_PAGE 推抖音私信页 - LOCAL_ASSET_TYPE_MARKET_PAGE 推营销页 - LOCAL_ASSET_TYPE_PRODUCT_PAGE 商品投放详情页 - LOCAL_ASSET_TYPE_SHOP_PAGE 推门店页
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListLocalAssetType[]
     */
    protected ?array $localAssetType = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 项目启停状态
     * @var int
     */
    protected ?int $optStatus = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerPoiInfo
     */
    protected ?\Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerPoiInfo $poiInfo = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerProductInfo
     */
    protected ?\Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerProductInfo $productInfo = null;

    /**
     * 项目出价，单位为：元
     * @var string
     */
    protected ?string $projectBid = null;

    /**
     * 项目预算，单位为：元
     * @var string
     */
    protected ?string $projectBudget = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectBudgetMode
     */
    protected ?string $projectBudgetMode = null;

    /**
     * 项目创建时间，格式：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $projectCreateTime = null;

    /**
     * 项目id
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 项目更新时间，格式：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $projectModifyTime = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectStatusFirst
     */
    protected ?string $projectStatusFirst = null;

    /**
     * 项目二级状态
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectStatusSecond[]
     */
    protected ?array $projectStatusSecond = null;

    /**
     * 投放开始时间，如：2017-01-01 精确到天
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * 定向包ID
     * @return int
     */
    public function getAudiencePackageId(): ?int
    {
        return $this->audiencePackageId;
    }

    /**
     * 定向包ID
     * @param int $audiencePackageId
     * @return self
     */
    public function setAudiencePackageId(?int $audiencePackageId): self
    {
        $this->audiencePackageId = $audiencePackageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListDeliveryGoal
     */
    public function getDeliveryGoal(): ?string
    {
        return $this->deliveryGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListDeliveryGoal $deliveryGoal
     * @return self
     */
    public function setDeliveryGoal(?string $deliveryGoal): self
    {
        $this->deliveryGoal = $deliveryGoal;
        return $this;
    }

    /**
     * 投放结束时间，如：2017-01-01 精确到天
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 投放结束时间，如：2017-01-01 精确到天
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 营销跳转页，允许值：   - LOCAL_ASSET_TYPE_AWEME_PAGE 推抖音私信页 - LOCAL_ASSET_TYPE_MARKET_PAGE 推营销页 - LOCAL_ASSET_TYPE_PRODUCT_PAGE 商品投放详情页 - LOCAL_ASSET_TYPE_SHOP_PAGE 推门店页
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListLocalAssetType[]
     */
    public function getLocalAssetType(): ?array
    {
        return $this->localAssetType;
    }

    /**
     * 营销跳转页，允许值：   - LOCAL_ASSET_TYPE_AWEME_PAGE 推抖音私信页 - LOCAL_ASSET_TYPE_MARKET_PAGE 推营销页 - LOCAL_ASSET_TYPE_PRODUCT_PAGE 商品投放详情页 - LOCAL_ASSET_TYPE_SHOP_PAGE 推门店页
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListLocalAssetType[] $localAssetType
     * @return self
     */
    public function setLocalAssetType(?array $localAssetType): self
    {
        $this->localAssetType = $localAssetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 项目名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 项目启停状态
     * @return int
     */
    public function getOptStatus(): ?int
    {
        return $this->optStatus;
    }

    /**
     * 项目启停状态
     * @param int $optStatus
     * @return self
     */
    public function setOptStatus(?int $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerPoiInfo
     */
    public function getPoiInfo(): ?\Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerPoiInfo
    {
        return $this->poiInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerPoiInfo $poiInfo
     * @return self
     */
    public function setPoiInfo(?\Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerPoiInfo $poiInfo): self
    {
        $this->poiInfo = $poiInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * 项目出价，单位为：元
     * @return string
     */
    public function getProjectBid(): ?string
    {
        return $this->projectBid;
    }

    /**
     * 项目出价，单位为：元
     * @param string $projectBid
     * @return self
     */
    public function setProjectBid(?string $projectBid): self
    {
        $this->projectBid = $projectBid;
        return $this;
    }

    /**
     * 项目预算，单位为：元
     * @return string
     */
    public function getProjectBudget(): ?string
    {
        return $this->projectBudget;
    }

    /**
     * 项目预算，单位为：元
     * @param string $projectBudget
     * @return self
     */
    public function setProjectBudget(?string $projectBudget): self
    {
        $this->projectBudget = $projectBudget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectBudgetMode
     */
    public function getProjectBudgetMode(): ?string
    {
        return $this->projectBudgetMode;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectBudgetMode $projectBudgetMode
     * @return self
     */
    public function setProjectBudgetMode(?string $projectBudgetMode): self
    {
        $this->projectBudgetMode = $projectBudgetMode;
        return $this;
    }

    /**
     * 项目创建时间，格式：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getProjectCreateTime(): ?string
    {
        return $this->projectCreateTime;
    }

    /**
     * 项目创建时间，格式：yyyy-MM-dd HH:mm:ss
     * @param string $projectCreateTime
     * @return self
     */
    public function setProjectCreateTime(?string $projectCreateTime): self
    {
        $this->projectCreateTime = $projectCreateTime;
        return $this;
    }

    /**
     * 项目id
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目id
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 项目更新时间，格式：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getProjectModifyTime(): ?string
    {
        return $this->projectModifyTime;
    }

    /**
     * 项目更新时间，格式：yyyy-MM-dd HH:mm:ss
     * @param string $projectModifyTime
     * @return self
     */
    public function setProjectModifyTime(?string $projectModifyTime): self
    {
        $this->projectModifyTime = $projectModifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectStatusFirst
     */
    public function getProjectStatusFirst(): ?string
    {
        return $this->projectStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectStatusFirst $projectStatusFirst
     * @return self
     */
    public function setProjectStatusFirst(?string $projectStatusFirst): self
    {
        $this->projectStatusFirst = $projectStatusFirst;
        return $this;
    }

    /**
     * 项目二级状态
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectStatusSecond[]
     */
    public function getProjectStatusSecond(): ?array
    {
        return $this->projectStatusSecond;
    }

    /**
     * 项目二级状态
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListProjectStatusSecond[] $projectStatusSecond
     * @return self
     */
    public function setProjectStatusSecond(?array $projectStatusSecond): self
    {
        $this->projectStatusSecond = $projectStatusSecond;
        return $this;
    }

    /**
     * 投放开始时间，如：2017-01-01 精确到天
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 投放开始时间，如：2017-01-01 精确到天
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
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
        if ($this->audiencePackageId !== null) {
            $result['audience_package_id'] = $this->audiencePackageId;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->deliveryGoal !== null) {
            $result['delivery_goal'] = $this->deliveryGoal;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->localAssetType !== null) {
            $result['local_asset_type'] = $this->localAssetType;
        }
        if ($this->localDeliveryScene !== null) {
            $result['local_delivery_scene'] = $this->localDeliveryScene;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->poiInfo !== null) {
            $result['poi_info'] = $this->poiInfo;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->projectBid !== null) {
            $result['project_bid'] = $this->projectBid;
        }
        if ($this->projectBudget !== null) {
            $result['project_budget'] = $this->projectBudget;
        }
        if ($this->projectBudgetMode !== null) {
            $result['project_budget_mode'] = $this->projectBudgetMode;
        }
        if ($this->projectCreateTime !== null) {
            $result['project_create_time'] = $this->projectCreateTime;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->projectModifyTime !== null) {
            $result['project_modify_time'] = $this->projectModifyTime;
        }
        if ($this->projectStatusFirst !== null) {
            $result['project_status_first'] = $this->projectStatusFirst;
        }
        if ($this->projectStatusSecond !== null) {
            $result['project_status_second'] = $this->projectStatusSecond;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['audience_package_id'] ?? null) !== null) {
            $obj->audiencePackageId = (int) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['delivery_goal'] ?? null) !== null) {
            $obj->deliveryGoal = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['local_asset_type'] ?? null) !== null && is_array($v)) {
            $obj->localAssetType = $v;
        }
        if (($v = $data['local_delivery_scene'] ?? null) !== null) {
            $obj->localDeliveryScene = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (int) $v;
        }
        if (($v = $data['poi_info'] ?? null) !== null && is_array($v)) {
            $obj->poiInfo = \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerPoiInfo::fromArray($v);
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\LocalOcProjectListV30ResponseDataProjectListInnerProductInfo::fromArray($v);
        }
        if (($v = $data['project_bid'] ?? null) !== null) {
            $obj->projectBid = (string) $v;
        }
        if (($v = $data['project_budget'] ?? null) !== null) {
            $obj->projectBudget = (string) $v;
        }
        if (($v = $data['project_budget_mode'] ?? null) !== null) {
            $obj->projectBudgetMode = (string) $v;
        }
        if (($v = $data['project_create_time'] ?? null) !== null) {
            $obj->projectCreateTime = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['project_modify_time'] ?? null) !== null) {
            $obj->projectModifyTime = (string) $v;
        }
        if (($v = $data['project_status_first'] ?? null) !== null) {
            $obj->projectStatusFirst = (string) $v;
        }
        if (($v = $data['project_status_second'] ?? null) !== null && is_array($v)) {
            $obj->projectStatusSecond = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
