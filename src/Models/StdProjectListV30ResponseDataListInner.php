<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListAdType
     */
    protected ?string $adType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListAigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListAppPromotionType
     */
    protected ?string $appPromotionType = null;

    /**
     * 事件资产id
     * @var int[]
     */
    protected ?array $assetId = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30ResponseDataListInnerAudience
     */
    protected ?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerAudience $audience = null;

    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListBidType
     */
    protected ?string $bidType = null;

    /**
     * @var string[]
     */
    protected ?array $blueFlowKeywordName = null;

    /**
     * @var int
     */
    protected ?int $brandId = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30ResponseDataListInnerBrandInfo
     */
    protected ?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerBrandInfo $brandInfo = null;

    /**
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * 预算
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var string
     */
    protected ?string $categoryId = null;

    /**
     * 出价
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListDeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * 深度转化出价
     * @var float
     */
    protected ?float $deepCpabid = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListDeliveryMedium
     */
    protected ?string $deliveryMedium = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListDeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListDeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListDownloadMode
     */
    protected ?string $downloadMode = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListDownloadType
     */
    protected ?string $downloadType = null;

    /**
     * 下载链接
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListDpaImageMode[]
     */
    protected ?array $dpaImageMode = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoal = null;

    /**
     * 关键行为ID
     * @var string
     */
    protected ?string $gameAddictionId = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListInventoryCatalog
     */
    protected ?string $inventoryCatalog = null;

    /**
     * 首选媒体 枚举值： - 今日头条 - 西瓜视频 - 抖音 - 番茄系媒体 - 穿山甲
     * @var \Oceanengine\Models\StdProjectListV30DataListInventoryType[]
     */
    protected ?array $inventoryType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListIsCommentDisable
     */
    protected ?string $isCommentDisable = null;

    /**
     * @var int
     */
    protected ?int $landingPageStayTime = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListLaunchType
     */
    protected ?string $launchType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30ResponseDataListInnerLayerRoiGoalInner[]
     */
    protected ?array $layerRoiGoal = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListLayerRoiSwitch
     */
    protected ?string $layerRoiSwitch = null;

    /**
     * @var float
     */
    protected ?float $liveDuration = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListMultiDeliveryMedium
     */
    protected ?string $multiDeliveryMedium = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 投放身份
     * @var string
     */
    protected ?string $nativeType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListPricing
     */
    protected ?string $pricing = null;

    /**
     * 产品ID
     * @var string
     */
    protected ?string $productId = null;

    /**
     * 商品库ID
     * @var int
     */
    protected ?int $productPlatformId = null;

    /**
     * @var string
     */
    protected ?string $projectCreateTime = null;

    /**
     * 项目id
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var string
     */
    protected ?string $projectModifyTime = null;

    /**
     * ROI系数
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListSearchContinueDelivery
     */
    protected ?string $searchContinueDelivery = null;

    /**
     * @var float
     */
    protected ?float $sevenRoiGoal = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListShopPlatform
     */
    protected ?string $shopPlatform = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListStarAutoDeliverySwitch
     */
    protected ?string $starAutoDeliverySwitch = null;

    /**
     * @var int[]
     */
    protected ?array $starTaskIdList = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListStatusFirst
     */
    protected ?string $statusFirst = null;

    /**
     * 项目状态(二级)
     * @var \Oceanengine\Models\StdProjectListV30DataListStatusSecond[]
     */
    protected ?array $statusSecond = null;

    /**
     * @var string
     */
    protected ?string $subBrandId = null;

    /**
     * @var string
     */
    protected ?string $subBrandName = null;

    /**
     * 预约链接
     * @var string
     */
    protected ?string $subscribeUrl = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30ResponseDataListInnerTrackUrlSetting
     */
    protected ?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerTrackUrlSetting $trackUrlSetting = null;

    /**
     * 穿山甲ROI系数
     * @var float
     */
    protected ?float $unionBidRatio = null;

    /**
     * @var \Oceanengine\Models\StdProjectListV30DataListUnionVideoType
     */
    protected ?string $unionVideoType = null;

    /**
     * 升级版商品库产品ID
     * @var int
     */
    protected ?int $uniqueProductId = null;

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListAigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListAigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListAppPromotionType
     */
    public function getAppPromotionType(): ?string
    {
        return $this->appPromotionType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListAppPromotionType $appPromotionType
     * @return self
     */
    public function setAppPromotionType(?string $appPromotionType): self
    {
        $this->appPromotionType = $appPromotionType;
        return $this;
    }

    /**
     * 事件资产id
     * @return int[]
     */
    public function getAssetId(): ?array
    {
        return $this->assetId;
    }

    /**
     * 事件资产id
     * @param int[] $assetId
     * @return self
     */
    public function setAssetId(?array $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30ResponseDataListInnerAudience
     */
    public function getAudience(): ?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30ResponseDataListInnerAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBlueFlowKeywordName(): ?array
    {
        return $this->blueFlowKeywordName;
    }

    /**
     * @param string[] $blueFlowKeywordName
     * @return self
     */
    public function setBlueFlowKeywordName(?array $blueFlowKeywordName): self
    {
        $this->blueFlowKeywordName = $blueFlowKeywordName;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @param int $brandId
     * @return self
     */
    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30ResponseDataListInnerBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30ResponseDataListInnerBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * 预算
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 预算
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    /**
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId(?string $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * 出价
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * 出价
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListDeepBidType $deepBidType
     * @return self
     */
    public function setDeepBidType(?string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * 深度转化出价
     * @return float
     */
    public function getDeepCpabid(): ?float
    {
        return $this->deepCpabid;
    }

    /**
     * 深度转化出价
     * @param float $deepCpabid
     * @return self
     */
    public function setDeepCpabid(?float $deepCpabid): self
    {
        $this->deepCpabid = $deepCpabid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListDeliveryMedium
     */
    public function getDeliveryMedium(): ?string
    {
        return $this->deliveryMedium;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListDeliveryMedium $deliveryMedium
     * @return self
     */
    public function setDeliveryMedium(?string $deliveryMedium): self
    {
        $this->deliveryMedium = $deliveryMedium;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListDeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListDeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListDeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListDeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListDownloadMode
     */
    public function getDownloadMode(): ?string
    {
        return $this->downloadMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListDownloadMode $downloadMode
     * @return self
     */
    public function setDownloadMode(?string $downloadMode): self
    {
        $this->downloadMode = $downloadMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListDownloadType
     */
    public function getDownloadType(): ?string
    {
        return $this->downloadType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListDownloadType $downloadType
     * @return self
     */
    public function setDownloadType(?string $downloadType): self
    {
        $this->downloadType = $downloadType;
        return $this;
    }

    /**
     * 下载链接
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 下载链接
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListDpaImageMode[]
     */
    public function getDpaImageMode(): ?array
    {
        return $this->dpaImageMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListDpaImageMode[] $dpaImageMode
     * @return self
     */
    public function setDpaImageMode(?array $dpaImageMode): self
    {
        $this->dpaImageMode = $dpaImageMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstRoiGoal(): ?float
    {
        return $this->firstRoiGoal;
    }

    /**
     * @param float $firstRoiGoal
     * @return self
     */
    public function setFirstRoiGoal(?float $firstRoiGoal): self
    {
        $this->firstRoiGoal = $firstRoiGoal;
        return $this;
    }

    /**
     * 关键行为ID
     * @return string
     */
    public function getGameAddictionId(): ?string
    {
        return $this->gameAddictionId;
    }

    /**
     * 关键行为ID
     * @param string $gameAddictionId
     * @return self
     */
    public function setGameAddictionId(?string $gameAddictionId): self
    {
        $this->gameAddictionId = $gameAddictionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListInventoryCatalog
     */
    public function getInventoryCatalog(): ?string
    {
        return $this->inventoryCatalog;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListInventoryCatalog $inventoryCatalog
     * @return self
     */
    public function setInventoryCatalog(?string $inventoryCatalog): self
    {
        $this->inventoryCatalog = $inventoryCatalog;
        return $this;
    }

    /**
     * 首选媒体 枚举值： - 今日头条 - 西瓜视频 - 抖音 - 番茄系媒体 - 穿山甲
     * @return \Oceanengine\Models\StdProjectListV30DataListInventoryType[]
     */
    public function getInventoryType(): ?array
    {
        return $this->inventoryType;
    }

    /**
     * 首选媒体 枚举值： - 今日头条 - 西瓜视频 - 抖音 - 番茄系媒体 - 穿山甲
     * @param \Oceanengine\Models\StdProjectListV30DataListInventoryType[] $inventoryType
     * @return self
     */
    public function setInventoryType(?array $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListIsCommentDisable
     */
    public function getIsCommentDisable(): ?string
    {
        return $this->isCommentDisable;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListIsCommentDisable $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?string $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * @return int
     */
    public function getLandingPageStayTime(): ?int
    {
        return $this->landingPageStayTime;
    }

    /**
     * @param int $landingPageStayTime
     * @return self
     */
    public function setLandingPageStayTime(?int $landingPageStayTime): self
    {
        $this->landingPageStayTime = $landingPageStayTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListLaunchType
     */
    public function getLaunchType(): ?string
    {
        return $this->launchType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListLaunchType $launchType
     * @return self
     */
    public function setLaunchType(?string $launchType): self
    {
        $this->launchType = $launchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30ResponseDataListInnerLayerRoiGoalInner[]
     */
    public function getLayerRoiGoal(): ?array
    {
        return $this->layerRoiGoal;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30ResponseDataListInnerLayerRoiGoalInner[] $layerRoiGoal
     * @return self
     */
    public function setLayerRoiGoal(?array $layerRoiGoal): self
    {
        $this->layerRoiGoal = $layerRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListLayerRoiSwitch
     */
    public function getLayerRoiSwitch(): ?string
    {
        return $this->layerRoiSwitch;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListLayerRoiSwitch $layerRoiSwitch
     * @return self
     */
    public function setLayerRoiSwitch(?string $layerRoiSwitch): self
    {
        $this->layerRoiSwitch = $layerRoiSwitch;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveDuration(): ?float
    {
        return $this->liveDuration;
    }

    /**
     * @param float $liveDuration
     * @return self
     */
    public function setLiveDuration(?float $liveDuration): self
    {
        $this->liveDuration = $liveDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListMultiDeliveryMedium
     */
    public function getMultiDeliveryMedium(): ?string
    {
        return $this->multiDeliveryMedium;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListMultiDeliveryMedium $multiDeliveryMedium
     * @return self
     */
    public function setMultiDeliveryMedium(?string $multiDeliveryMedium): self
    {
        $this->multiDeliveryMedium = $multiDeliveryMedium;
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
     * 投放身份
     * @return string
     */
    public function getNativeType(): ?string
    {
        return $this->nativeType;
    }

    /**
     * 投放身份
     * @param string $nativeType
     * @return self
     */
    public function setNativeType(?string $nativeType): self
    {
        $this->nativeType = $nativeType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * 产品ID
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * 产品ID
     * @param string $productId
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 商品库ID
     * @return int
     */
    public function getProductPlatformId(): ?int
    {
        return $this->productPlatformId;
    }

    /**
     * 商品库ID
     * @param int $productPlatformId
     * @return self
     */
    public function setProductPlatformId(?int $productPlatformId): self
    {
        $this->productPlatformId = $productPlatformId;
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
     * ROI系数
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * ROI系数
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListSearchContinueDelivery
     */
    public function getSearchContinueDelivery(): ?string
    {
        return $this->searchContinueDelivery;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListSearchContinueDelivery $searchContinueDelivery
     * @return self
     */
    public function setSearchContinueDelivery(?string $searchContinueDelivery): self
    {
        $this->searchContinueDelivery = $searchContinueDelivery;
        return $this;
    }

    /**
     * @return float
     */
    public function getSevenRoiGoal(): ?float
    {
        return $this->sevenRoiGoal;
    }

    /**
     * @param float $sevenRoiGoal
     * @return self
     */
    public function setSevenRoiGoal(?float $sevenRoiGoal): self
    {
        $this->sevenRoiGoal = $sevenRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListShopPlatform
     */
    public function getShopPlatform(): ?string
    {
        return $this->shopPlatform;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListShopPlatform $shopPlatform
     * @return self
     */
    public function setShopPlatform(?string $shopPlatform): self
    {
        $this->shopPlatform = $shopPlatform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListStarAutoDeliverySwitch
     */
    public function getStarAutoDeliverySwitch(): ?string
    {
        return $this->starAutoDeliverySwitch;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListStarAutoDeliverySwitch $starAutoDeliverySwitch
     * @return self
     */
    public function setStarAutoDeliverySwitch(?string $starAutoDeliverySwitch): self
    {
        $this->starAutoDeliverySwitch = $starAutoDeliverySwitch;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getStarTaskIdList(): ?array
    {
        return $this->starTaskIdList;
    }

    /**
     * @param int[] $starTaskIdList
     * @return self
     */
    public function setStarTaskIdList(?array $starTaskIdList): self
    {
        $this->starTaskIdList = $starTaskIdList;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListStatusFirst
     */
    public function getStatusFirst(): ?string
    {
        return $this->statusFirst;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListStatusFirst $statusFirst
     * @return self
     */
    public function setStatusFirst(?string $statusFirst): self
    {
        $this->statusFirst = $statusFirst;
        return $this;
    }

    /**
     * 项目状态(二级)
     * @return \Oceanengine\Models\StdProjectListV30DataListStatusSecond[]
     */
    public function getStatusSecond(): ?array
    {
        return $this->statusSecond;
    }

    /**
     * 项目状态(二级)
     * @param \Oceanengine\Models\StdProjectListV30DataListStatusSecond[] $statusSecond
     * @return self
     */
    public function setStatusSecond(?array $statusSecond): self
    {
        $this->statusSecond = $statusSecond;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubBrandId(): ?string
    {
        return $this->subBrandId;
    }

    /**
     * @param string $subBrandId
     * @return self
     */
    public function setSubBrandId(?string $subBrandId): self
    {
        $this->subBrandId = $subBrandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubBrandName(): ?string
    {
        return $this->subBrandName;
    }

    /**
     * @param string $subBrandName
     * @return self
     */
    public function setSubBrandName(?string $subBrandName): self
    {
        $this->subBrandName = $subBrandName;
        return $this;
    }

    /**
     * 预约链接
     * @return string
     */
    public function getSubscribeUrl(): ?string
    {
        return $this->subscribeUrl;
    }

    /**
     * 预约链接
     * @param string $subscribeUrl
     * @return self
     */
    public function setSubscribeUrl(?string $subscribeUrl): self
    {
        $this->subscribeUrl = $subscribeUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30ResponseDataListInnerTrackUrlSetting
     */
    public function getTrackUrlSetting(): ?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerTrackUrlSetting
    {
        return $this->trackUrlSetting;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30ResponseDataListInnerTrackUrlSetting $trackUrlSetting
     * @return self
     */
    public function setTrackUrlSetting(?\Oceanengine\Models\StdProjectListV30ResponseDataListInnerTrackUrlSetting $trackUrlSetting): self
    {
        $this->trackUrlSetting = $trackUrlSetting;
        return $this;
    }

    /**
     * 穿山甲ROI系数
     * @return float
     */
    public function getUnionBidRatio(): ?float
    {
        return $this->unionBidRatio;
    }

    /**
     * 穿山甲ROI系数
     * @param float $unionBidRatio
     * @return self
     */
    public function setUnionBidRatio(?float $unionBidRatio): self
    {
        $this->unionBidRatio = $unionBidRatio;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectListV30DataListUnionVideoType
     */
    public function getUnionVideoType(): ?string
    {
        return $this->unionVideoType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectListV30DataListUnionVideoType $unionVideoType
     * @return self
     */
    public function setUnionVideoType(?string $unionVideoType): self
    {
        $this->unionVideoType = $unionVideoType;
        return $this;
    }

    /**
     * 升级版商品库产品ID
     * @return int
     */
    public function getUniqueProductId(): ?int
    {
        return $this->uniqueProductId;
    }

    /**
     * 升级版商品库产品ID
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->aigcDynamicCreativeSwitch !== null) {
            $result['aigc_dynamic_creative_switch'] = $this->aigcDynamicCreativeSwitch;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->appPromotionType !== null) {
            $result['app_promotion_type'] = $this->appPromotionType;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->blueFlowKeywordName !== null) {
            $result['blue_flow_keyword_name'] = $this->blueFlowKeywordName;
        }
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->categoryId !== null) {
            $result['category_id'] = $this->categoryId;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->deepBidType !== null) {
            $result['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->deepCpabid !== null) {
            $result['deep_cpabid'] = $this->deepCpabid;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->deliveryMedium !== null) {
            $result['delivery_medium'] = $this->deliveryMedium;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        if ($this->downloadMode !== null) {
            $result['download_mode'] = $this->downloadMode;
        }
        if ($this->downloadType !== null) {
            $result['download_type'] = $this->downloadType;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->dpaImageMode !== null) {
            $result['dpa_image_mode'] = $this->dpaImageMode;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->firstRoiGoal !== null) {
            $result['first_roi_goal'] = $this->firstRoiGoal;
        }
        if ($this->gameAddictionId !== null) {
            $result['game_addiction_id'] = $this->gameAddictionId;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->inventoryCatalog !== null) {
            $result['inventory_catalog'] = $this->inventoryCatalog;
        }
        if ($this->inventoryType !== null) {
            $result['inventory_type'] = $this->inventoryType;
        }
        if ($this->isCommentDisable !== null) {
            $result['is_comment_disable'] = $this->isCommentDisable;
        }
        if ($this->landingPageStayTime !== null) {
            $result['landing_page_stay_time'] = $this->landingPageStayTime;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->launchType !== null) {
            $result['launch_type'] = $this->launchType;
        }
        if ($this->layerRoiGoal !== null) {
            $result['layer_roi_goal'] = $this->layerRoiGoal;
        }
        if ($this->layerRoiSwitch !== null) {
            $result['layer_roi_switch'] = $this->layerRoiSwitch;
        }
        if ($this->liveDuration !== null) {
            $result['live_duration'] = $this->liveDuration;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->multiDeliveryMedium !== null) {
            $result['multi_delivery_medium'] = $this->multiDeliveryMedium;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->nativeType !== null) {
            $result['native_type'] = $this->nativeType;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
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
        if ($this->projectCreateTime !== null) {
            $result['project_create_time'] = $this->projectCreateTime;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->projectModifyTime !== null) {
            $result['project_modify_time'] = $this->projectModifyTime;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->searchContinueDelivery !== null) {
            $result['search_continue_delivery'] = $this->searchContinueDelivery;
        }
        if ($this->sevenRoiGoal !== null) {
            $result['seven_roi_goal'] = $this->sevenRoiGoal;
        }
        if ($this->shopPlatform !== null) {
            $result['shop_platform'] = $this->shopPlatform;
        }
        if ($this->starAutoDeliverySwitch !== null) {
            $result['star_auto_delivery_switch'] = $this->starAutoDeliverySwitch;
        }
        if ($this->starTaskIdList !== null) {
            $result['star_task_id_list'] = $this->starTaskIdList;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->statusFirst !== null) {
            $result['status_first'] = $this->statusFirst;
        }
        if ($this->statusSecond !== null) {
            $result['status_second'] = $this->statusSecond;
        }
        if ($this->subBrandId !== null) {
            $result['sub_brand_id'] = $this->subBrandId;
        }
        if ($this->subBrandName !== null) {
            $result['sub_brand_name'] = $this->subBrandName;
        }
        if ($this->subscribeUrl !== null) {
            $result['subscribe_url'] = $this->subscribeUrl;
        }
        if ($this->trackUrlSetting !== null) {
            $result['track_url_setting'] = $this->trackUrlSetting;
        }
        if ($this->unionBidRatio !== null) {
            $result['union_bid_ratio'] = $this->unionBidRatio;
        }
        if ($this->unionVideoType !== null) {
            $result['union_video_type'] = $this->unionVideoType;
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
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aigc_dynamic_creative_switch'] ?? null) !== null) {
            $obj->aigcDynamicCreativeSwitch = (string) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['app_promotion_type'] ?? null) !== null) {
            $obj->appPromotionType = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null && is_array($v)) {
            $obj->assetId = $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\StdProjectListV30ResponseDataListInnerAudience::fromArray($v);
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['blue_flow_keyword_name'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowKeywordName = $v;
        }
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (int) $v;
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\StdProjectListV30ResponseDataListInnerBrandInfo::fromArray($v);
        }
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['category_id'] ?? null) !== null) {
            $obj->categoryId = (string) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['deep_bid_type'] ?? null) !== null) {
            $obj->deepBidType = (string) $v;
        }
        if (($v = $data['deep_cpabid'] ?? null) !== null) {
            $obj->deepCpabid = (float) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['delivery_medium'] ?? null) !== null) {
            $obj->deliveryMedium = (string) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null) {
            $obj->deliveryMode = (string) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        if (($v = $data['download_mode'] ?? null) !== null) {
            $obj->downloadMode = (string) $v;
        }
        if (($v = $data['download_type'] ?? null) !== null) {
            $obj->downloadType = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['dpa_image_mode'] ?? null) !== null && is_array($v)) {
            $obj->dpaImageMode = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['first_roi_goal'] ?? null) !== null) {
            $obj->firstRoiGoal = (float) $v;
        }
        if (($v = $data['game_addiction_id'] ?? null) !== null) {
            $obj->gameAddictionId = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['inventory_catalog'] ?? null) !== null) {
            $obj->inventoryCatalog = (string) $v;
        }
        if (($v = $data['inventory_type'] ?? null) !== null && is_array($v)) {
            $obj->inventoryType = $v;
        }
        if (($v = $data['is_comment_disable'] ?? null) !== null) {
            $obj->isCommentDisable = (string) $v;
        }
        if (($v = $data['landing_page_stay_time'] ?? null) !== null) {
            $obj->landingPageStayTime = (int) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['launch_type'] ?? null) !== null) {
            $obj->launchType = (string) $v;
        }
        if (($v = $data['layer_roi_goal'] ?? null) !== null && is_array($v)) {
            $obj->layerRoiGoal = array_map(fn ($vv) => \Oceanengine\Models\StdProjectListV30ResponseDataListInnerLayerRoiGoalInner::fromArray($vv), $v);
        }
        if (($v = $data['layer_roi_switch'] ?? null) !== null) {
            $obj->layerRoiSwitch = (string) $v;
        }
        if (($v = $data['live_duration'] ?? null) !== null) {
            $obj->liveDuration = (float) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['multi_delivery_medium'] ?? null) !== null) {
            $obj->multiDeliveryMedium = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['native_type'] ?? null) !== null) {
            $obj->nativeType = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (string) $v;
        }
        if (($v = $data['product_platform_id'] ?? null) !== null) {
            $obj->productPlatformId = (int) $v;
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
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['search_continue_delivery'] ?? null) !== null) {
            $obj->searchContinueDelivery = (string) $v;
        }
        if (($v = $data['seven_roi_goal'] ?? null) !== null) {
            $obj->sevenRoiGoal = (float) $v;
        }
        if (($v = $data['shop_platform'] ?? null) !== null) {
            $obj->shopPlatform = (string) $v;
        }
        if (($v = $data['star_auto_delivery_switch'] ?? null) !== null) {
            $obj->starAutoDeliverySwitch = (string) $v;
        }
        if (($v = $data['star_task_id_list'] ?? null) !== null && is_array($v)) {
            $obj->starTaskIdList = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['status_first'] ?? null) !== null) {
            $obj->statusFirst = (string) $v;
        }
        if (($v = $data['status_second'] ?? null) !== null && is_array($v)) {
            $obj->statusSecond = $v;
        }
        if (($v = $data['sub_brand_id'] ?? null) !== null) {
            $obj->subBrandId = (string) $v;
        }
        if (($v = $data['sub_brand_name'] ?? null) !== null) {
            $obj->subBrandName = (string) $v;
        }
        if (($v = $data['subscribe_url'] ?? null) !== null) {
            $obj->subscribeUrl = (string) $v;
        }
        if (($v = $data['track_url_setting'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlSetting = \Oceanengine\Models\StdProjectListV30ResponseDataListInnerTrackUrlSetting::fromArray($v);
        }
        if (($v = $data['union_bid_ratio'] ?? null) !== null) {
            $obj->unionBidRatio = (float) $v;
        }
        if (($v = $data['union_video_type'] ?? null) !== null) {
            $obj->unionVideoType = (string) $v;
        }
        if (($v = $data['unique_product_id'] ?? null) !== null) {
            $obj->uniqueProductId = (int) $v;
        }
        return $obj;
    }
}
