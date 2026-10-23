<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringAdType
     */
    protected ?string $adType = null;

    /**
     * 应用asset_id，可通过【获取已创建资产详情（新）】获取
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 抖音号ID
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 竞价策略，枚举值：CUSTOM 稳定成本、NO_BID 最大转化投放
     * @var \Oceanengine\Models\StdProjectListV30FilteringBidType[]
     */
    protected ?array $bidType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringBlueFlowPackageSetting
     */
    protected ?string $blueFlowPackageSetting = null;

    /**
     * 品牌ID
     * @var int
     */
    protected ?int $brandId = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringDeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 关键行为ID
     * @var int
     */
    protected ?int $gameAddictionId = null;

    /**
     * 字节小游戏/小程序、微信小游戏/小程序ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 营销目的，允许值：APP 应用、LINK 销售线索、MICRO_GAME 小程序、SHOP 电商、QUICK_APP 快应用、NATIVE_ACTION 原生互动、DPA 商品目录
     * @var \Oceanengine\Models\StdProjectListV30FilteringLandingType[]
     */
    protected ?array $landingType = null;

    /**
     * 营销场景，允许值：VIDEO_AND_IMAGE 短视频/图片、LIVE 直播
     * @var \Oceanengine\Models\StdProjectListV30FilteringMarketingGoal[]
     */
    protected ?array $marketingGoal = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringNativeType
     */
    protected ?string $nativeType = null;

    /**
     * 按平台过滤，允许值：IOS、ANDROID、HARMONY
     * @var \Oceanengine\Models\StdProjectListV30FilteringPlatform[]
     */
    protected ?array $platform = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringPricing
     */
    protected ?string $pricing = null;

    /**
     * 商品ID
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var int
     */
    protected ?int $productPlatformId = null;

    /**
     * 项目创建结束时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @var string
     */
    protected ?string $projectCreateEndTime = null;

    /**
     * 项目创建开始时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @var string
     */
    protected ?string $projectCreateStartTime = null;

    /**
     * 项目IDs
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * 项目更新结束时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @var string
     */
    protected ?string $projectModifyEndTime = null;

    /**
     * 项目更新开始时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @var string
     */
    protected ?string $projectModifyStartTime = null;

    /**
     * 快应用资产id
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringRejectReasonType
     */
    protected ?string $rejectReasonType = null;

    /**
     * 是否为星广联投项目，STAR_DELIVERY 星广联投项目，NOT_STAR_DELIVERY 非星广联投项目
     * @var \Oceanengine\Models\StdProjectListV30FilteringStarDeliveryType[]
     */
    protected ?array $starDeliveryType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringStatusFirst
     */
    protected ?string $statusFirst = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30FilteringStatusSecond
     */
    protected ?string $statusSecond = null;

    /**
     * @var int
     */
    protected ?int $uniqueProductId = null;

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * 应用asset_id，可通过【获取已创建资产详情（新）】获取
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 应用asset_id，可通过【获取已创建资产详情（新）】获取
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 抖音号ID
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号ID
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 竞价策略，枚举值：CUSTOM 稳定成本、NO_BID 最大转化投放
     * @return \Oceanengine\Models\StdProjectListV30FilteringBidType[]
     */
    public function getBidType(): ?array
    {
        return $this->bidType;
    }

    /**
     * 竞价策略，枚举值：CUSTOM 稳定成本、NO_BID 最大转化投放
     * @param \Oceanengine\Models\StdProjectListV30FilteringBidType[] $bidType
     * @return self
     */
    public function setBidType(?array $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringBlueFlowPackageSetting
     */
    public function getBlueFlowPackageSetting(): ?string
    {
        return $this->blueFlowPackageSetting;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringBlueFlowPackageSetting $blueFlowPackageSetting
     * @return self
     */
    public function setBlueFlowPackageSetting(?string $blueFlowPackageSetting): self
    {
        $this->blueFlowPackageSetting = $blueFlowPackageSetting;
        return $this;
    }

    /**
     * 品牌ID
     * @return int
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * 品牌ID
     * @param int $brandId
     * @return self
     */
    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringDeepBidType $deepBidType
     * @return self
     */
    public function setDeepBidType(?string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 关键行为ID
     * @return int
     */
    public function getGameAddictionId(): ?int
    {
        return $this->gameAddictionId;
    }

    /**
     * 关键行为ID
     * @param int $gameAddictionId
     * @return self
     */
    public function setGameAddictionId(?int $gameAddictionId): self
    {
        $this->gameAddictionId = $gameAddictionId;
        return $this;
    }

    /**
     * 字节小游戏/小程序、微信小游戏/小程序ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 字节小游戏/小程序、微信小游戏/小程序ID
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 营销目的，允许值：APP 应用、LINK 销售线索、MICRO_GAME 小程序、SHOP 电商、QUICK_APP 快应用、NATIVE_ACTION 原生互动、DPA 商品目录
     * @return \Oceanengine\Models\StdProjectListV30FilteringLandingType[]
     */
    public function getLandingType(): ?array
    {
        return $this->landingType;
    }

    /**
     * 营销目的，允许值：APP 应用、LINK 销售线索、MICRO_GAME 小程序、SHOP 电商、QUICK_APP 快应用、NATIVE_ACTION 原生互动、DPA 商品目录
     * @param \Oceanengine\Models\StdProjectListV30FilteringLandingType[] $landingType
     * @return self
     */
    public function setLandingType(?array $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * 营销场景，允许值：VIDEO_AND_IMAGE 短视频/图片、LIVE 直播
     * @return \Oceanengine\Models\StdProjectListV30FilteringMarketingGoal[]
     */
    public function getMarketingGoal(): ?array
    {
        return $this->marketingGoal;
    }

    /**
     * 营销场景，允许值：VIDEO_AND_IMAGE 短视频/图片、LIVE 直播
     * @param \Oceanengine\Models\StdProjectListV30FilteringMarketingGoal[] $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?array $marketingGoal): self
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
     * @return \Oceanengine\Models\StdProjectListV30FilteringNativeType
     */
    public function getNativeType(): ?string
    {
        return $this->nativeType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringNativeType $nativeType
     * @return self
     */
    public function setNativeType(?string $nativeType): self
    {
        $this->nativeType = $nativeType;
        return $this;
    }

    /**
     * 按平台过滤，允许值：IOS、ANDROID、HARMONY
     * @return \Oceanengine\Models\StdProjectListV30FilteringPlatform[]
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * 按平台过滤，允许值：IOS、ANDROID、HARMONY
     * @param \Oceanengine\Models\StdProjectListV30FilteringPlatform[] $platform
     * @return self
     */
    public function setPlatform(?array $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductPlatformId(): ?int
    {
        return $this->productPlatformId;
    }

    /**
     * @param int $productPlatformId
     * @return self
     */
    public function setProductPlatformId(?int $productPlatformId): self
    {
        $this->productPlatformId = $productPlatformId;
        return $this;
    }

    /**
     * 项目创建结束时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @return string
     */
    public function getProjectCreateEndTime(): ?string
    {
        return $this->projectCreateEndTime;
    }

    /**
     * 项目创建结束时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @param string $projectCreateEndTime
     * @return self
     */
    public function setProjectCreateEndTime(?string $projectCreateEndTime): self
    {
        $this->projectCreateEndTime = $projectCreateEndTime;
        return $this;
    }

    /**
     * 项目创建开始时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @return string
     */
    public function getProjectCreateStartTime(): ?string
    {
        return $this->projectCreateStartTime;
    }

    /**
     * 项目创建开始时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @param string $projectCreateStartTime
     * @return self
     */
    public function setProjectCreateStartTime(?string $projectCreateStartTime): self
    {
        $this->projectCreateStartTime = $projectCreateStartTime;
        return $this;
    }

    /**
     * 项目IDs
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * 项目IDs
     * @param int[] $projectIds
     * @return self
     */
    public function setProjectIds(?array $projectIds): self
    {
        $this->projectIds = $projectIds;
        return $this;
    }

    /**
     * 项目更新结束时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @return string
     */
    public function getProjectModifyEndTime(): ?string
    {
        return $this->projectModifyEndTime;
    }

    /**
     * 项目更新结束时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @param string $projectModifyEndTime
     * @return self
     */
    public function setProjectModifyEndTime(?string $projectModifyEndTime): self
    {
        $this->projectModifyEndTime = $projectModifyEndTime;
        return $this;
    }

    /**
     * 项目更新开始时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @return string
     */
    public function getProjectModifyStartTime(): ?string
    {
        return $this->projectModifyStartTime;
    }

    /**
     * 项目更新开始时间，格式yyyy-mm-dd或者yyyy-mm-dd hh:mm:ss
     * @param string $projectModifyStartTime
     * @return self
     */
    public function setProjectModifyStartTime(?string $projectModifyStartTime): self
    {
        $this->projectModifyStartTime = $projectModifyStartTime;
        return $this;
    }

    /**
     * 快应用资产id
     * @return int
     */
    public function getQuickAppId(): ?int
    {
        return $this->quickAppId;
    }

    /**
     * 快应用资产id
     * @param int $quickAppId
     * @return self
     */
    public function setQuickAppId(?int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringRejectReasonType
     */
    public function getRejectReasonType(): ?string
    {
        return $this->rejectReasonType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringRejectReasonType $rejectReasonType
     * @return self
     */
    public function setRejectReasonType(?string $rejectReasonType): self
    {
        $this->rejectReasonType = $rejectReasonType;
        return $this;
    }

    /**
     * 是否为星广联投项目，STAR_DELIVERY 星广联投项目，NOT_STAR_DELIVERY 非星广联投项目
     * @return \Oceanengine\Models\StdProjectListV30FilteringStarDeliveryType[]
     */
    public function getStarDeliveryType(): ?array
    {
        return $this->starDeliveryType;
    }

    /**
     * 是否为星广联投项目，STAR_DELIVERY 星广联投项目，NOT_STAR_DELIVERY 非星广联投项目
     * @param \Oceanengine\Models\StdProjectListV30FilteringStarDeliveryType[] $starDeliveryType
     * @return self
     */
    public function setStarDeliveryType(?array $starDeliveryType): self
    {
        $this->starDeliveryType = $starDeliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringStatusFirst
     */
    public function getStatusFirst(): ?string
    {
        return $this->statusFirst;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringStatusFirst $statusFirst
     * @return self
     */
    public function setStatusFirst(?string $statusFirst): self
    {
        $this->statusFirst = $statusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30FilteringStatusSecond
     */
    public function getStatusSecond(): ?string
    {
        return $this->statusSecond;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30FilteringStatusSecond $statusSecond
     * @return self
     */
    public function setStatusSecond(?string $statusSecond): self
    {
        $this->statusSecond = $statusSecond;
        return $this;
    }

    /**
     * @return int
     */
    public function getUniqueProductId(): ?int
    {
        return $this->uniqueProductId;
    }

    /**
     * @param int $uniqueProductId
     * @return self
     */
    public function setUniqueProductId(?int $uniqueProductId): self
    {
        $this->uniqueProductId = $uniqueProductId;
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
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->blueFlowPackageSetting !== null) {
            $result['blue_flow_package_setting'] = $this->blueFlowPackageSetting;
        }
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->deepBidType !== null) {
            $result['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->gameAddictionId !== null) {
            $result['game_addiction_id'] = $this->gameAddictionId;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
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
        if ($this->nativeType !== null) {
            $result['native_type'] = $this->nativeType;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productPlatformId !== null) {
            $result['product_platform_id'] = $this->productPlatformId;
        }
        if ($this->projectCreateEndTime !== null) {
            $result['project_create_end_time'] = $this->projectCreateEndTime;
        }
        if ($this->projectCreateStartTime !== null) {
            $result['project_create_start_time'] = $this->projectCreateStartTime;
        }
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        if ($this->projectModifyEndTime !== null) {
            $result['project_modify_end_time'] = $this->projectModifyEndTime;
        }
        if ($this->projectModifyStartTime !== null) {
            $result['project_modify_start_time'] = $this->projectModifyStartTime;
        }
        if ($this->quickAppId !== null) {
            $result['quick_app_id'] = $this->quickAppId;
        }
        if ($this->rejectReasonType !== null) {
            $result['reject_reason_type'] = $this->rejectReasonType;
        }
        if ($this->starDeliveryType !== null) {
            $result['star_delivery_type'] = $this->starDeliveryType;
        }
        if ($this->statusFirst !== null) {
            $result['status_first'] = $this->statusFirst;
        }
        if ($this->statusSecond !== null) {
            $result['status_second'] = $this->statusSecond;
        }
        if ($this->uniqueProductId !== null) {
            $result['unique_product_id'] = $this->uniqueProductId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null && is_array($v)) {
            $obj->bidType = $v;
        }
        if (($v = $data['blue_flow_package_setting'] ?? null) !== null) {
            $obj->blueFlowPackageSetting = (string) $v;
        }
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (int) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['deep_bid_type'] ?? null) !== null) {
            $obj->deepBidType = (string) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['game_addiction_id'] ?? null) !== null) {
            $obj->gameAddictionId = (int) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null && is_array($v)) {
            $obj->landingType = $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null && is_array($v)) {
            $obj->marketingGoal = $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['native_type'] ?? null) !== null) {
            $obj->nativeType = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null && is_array($v)) {
            $obj->platform = $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_platform_id'] ?? null) !== null) {
            $obj->productPlatformId = (int) $v;
        }
        if (($v = $data['project_create_end_time'] ?? null) !== null) {
            $obj->projectCreateEndTime = (string) $v;
        }
        if (($v = $data['project_create_start_time'] ?? null) !== null) {
            $obj->projectCreateStartTime = (string) $v;
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        if (($v = $data['project_modify_end_time'] ?? null) !== null) {
            $obj->projectModifyEndTime = (string) $v;
        }
        if (($v = $data['project_modify_start_time'] ?? null) !== null) {
            $obj->projectModifyStartTime = (string) $v;
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
        }
        if (($v = $data['reject_reason_type'] ?? null) !== null) {
            $obj->rejectReasonType = (string) $v;
        }
        if (($v = $data['star_delivery_type'] ?? null) !== null && is_array($v)) {
            $obj->starDeliveryType = $v;
        }
        if (($v = $data['status_first'] ?? null) !== null) {
            $obj->statusFirst = (string) $v;
        }
        if (($v = $data['status_second'] ?? null) !== null) {
            $obj->statusSecond = (string) $v;
        }
        if (($v = $data['unique_product_id'] ?? null) !== null) {
            $obj->uniqueProductId = (int) $v;
        }
        return $obj;
    }
}
