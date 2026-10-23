<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectCreateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StdProjectCreateV30AdType
     */
    protected ?string $adType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30AigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30AppPromotionType
     */
    protected ?string $appPromotionType = null;

    /**
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30RequestAudience
     */
    protected ?\Oceanengine\Models\StdProjectCreateV30RequestAudience $audience = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30AudienceType
     */
    protected ?string $audienceType = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30AutoExtendTraffic
     */
    protected ?string $autoExtendTraffic = null;

    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30BidType
     */
    protected ?string $bidType = null;

    /**
     * @var string[]
     */
    protected ?array $blueFlowKeywordName = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30RequestBrandInfo
     */
    protected ?\Oceanengine\Models\StdProjectCreateV30RequestBrandInfo $brandInfo = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30BudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30DeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * @var float
     */
    protected ?float $deepCpabid = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30DeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30DeliveryMedium
     */
    protected ?string $deliveryMedium = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30DeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30DeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30DownloadMode
     */
    protected ?string $downloadMode = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30DownloadType
     */
    protected ?string $downloadType = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30ExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoal = null;

    /**
     * @var string
     */
    protected ?string $gameAddictionId = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30RequestInternalAdvertiserInfo
     */
    protected ?\Oceanengine\Models\StdProjectCreateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30InventoryCatalog
     */
    protected ?string $inventoryCatalog = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30InventoryType[]
     */
    protected ?array $inventoryType = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30IsCommentDisable
     */
    protected ?string $isCommentDisable = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30RequestKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30LandingPageStayTime
     */
    protected ?string $landingPageStayTime = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30LandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30LaunchType
     */
    protected ?string $launchType = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30LayerRoiSwitch
     */
    protected ?string $layerRoiSwitch = null;

    /**
     * @var float
     */
    protected ?float $liveDuration = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30MarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30MultiDeliveryMedium
     */
    protected ?string $multiDeliveryMedium = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30NativeType
     */
    protected ?string $nativeType = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30Pricing
     */
    protected ?string $pricing = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var int
     */
    protected ?int $productPlatformId = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30RequestProjectMaterials
     */
    protected ?\Oceanengine\Models\StdProjectCreateV30RequestProjectMaterials $projectMaterials = null;

    /**
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30ScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30SearchContinueDelivery
     */
    protected ?string $searchContinueDelivery = null;

    /**
     * @var float
     */
    protected ?float $sevenRoiGoal = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30ShopPlatform
     */
    protected ?string $shopPlatform = null;

    /**
     * @var int[]
     */
    protected ?array $starTaskIdList = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var string
     */
    protected ?string $subscribeUrl = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30RequestTrackUrlSetting
     */
    protected ?\Oceanengine\Models\StdProjectCreateV30RequestTrackUrlSetting $trackUrlSetting = null;

    /**
     * @var float
     */
    protected ?float $unionBidRatio = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30UnionVideoType
     */
    protected ?string $unionVideoType = null;

    /**
     * @var int
     */
    protected ?int $uniqueProductId = null;

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30AdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30AdType $adType
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
     * @return \Oceanengine\Models\StdProjectCreateV30AigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30AigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
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
     * @return \Oceanengine\Models\StdProjectCreateV30AppPromotionType
     */
    public function getAppPromotionType(): ?string
    {
        return $this->appPromotionType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30AppPromotionType $appPromotionType
     * @return self
     */
    public function setAppPromotionType(?string $appPromotionType): self
    {
        $this->appPromotionType = $appPromotionType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\StdProjectCreateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\StdProjectCreateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30AudienceType
     */
    public function getAudienceType(): ?string
    {
        return $this->audienceType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30AudienceType $audienceType
     * @return self
     */
    public function setAudienceType(?string $audienceType): self
    {
        $this->audienceType = $audienceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30AutoExtendTraffic
     */
    public function getAutoExtendTraffic(): ?string
    {
        return $this->autoExtendTraffic;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30AutoExtendTraffic $autoExtendTraffic
     * @return self
     */
    public function setAutoExtendTraffic(?string $autoExtendTraffic): self
    {
        $this->autoExtendTraffic = $autoExtendTraffic;
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
     * @return \Oceanengine\Models\StdProjectCreateV30BidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30BidType $bidType
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
     * @return \Oceanengine\Models\StdProjectCreateV30RequestBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\StdProjectCreateV30RequestBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30RequestBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\StdProjectCreateV30RequestBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30BudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30BudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30DeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30DeepBidType $deepBidType
     * @return self
     */
    public function setDeepBidType(?string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeepCpabid(): ?float
    {
        return $this->deepCpabid;
    }

    /**
     * @param float $deepCpabid
     * @return self
     */
    public function setDeepCpabid(?float $deepCpabid): self
    {
        $this->deepCpabid = $deepCpabid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30DeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30DeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30DeliveryMedium
     */
    public function getDeliveryMedium(): ?string
    {
        return $this->deliveryMedium;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30DeliveryMedium $deliveryMedium
     * @return self
     */
    public function setDeliveryMedium(?string $deliveryMedium): self
    {
        $this->deliveryMedium = $deliveryMedium;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30DeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30DeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30DeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30DeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30DownloadMode
     */
    public function getDownloadMode(): ?string
    {
        return $this->downloadMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30DownloadMode $downloadMode
     * @return self
     */
    public function setDownloadMode(?string $downloadMode): self
    {
        $this->downloadMode = $downloadMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30DownloadType
     */
    public function getDownloadType(): ?string
    {
        return $this->downloadType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30DownloadType $downloadType
     * @return self
     */
    public function setDownloadType(?string $downloadType): self
    {
        $this->downloadType = $downloadType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
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
     * @return \Oceanengine\Models\StdProjectCreateV30ExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30ExternalAction $externalAction
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
     * @return string
     */
    public function getGameAddictionId(): ?string
    {
        return $this->gameAddictionId;
    }

    /**
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
     * @return \Oceanengine\Models\StdProjectCreateV30RequestInternalAdvertiserInfo
     */
    public function getInternalAdvertiserInfo(): ?\Oceanengine\Models\StdProjectCreateV30RequestInternalAdvertiserInfo
    {
        return $this->internalAdvertiserInfo;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo
     * @return self
     */
    public function setInternalAdvertiserInfo(?\Oceanengine\Models\StdProjectCreateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo): self
    {
        $this->internalAdvertiserInfo = $internalAdvertiserInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30InventoryCatalog
     */
    public function getInventoryCatalog(): ?string
    {
        return $this->inventoryCatalog;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30InventoryCatalog $inventoryCatalog
     * @return self
     */
    public function setInventoryCatalog(?string $inventoryCatalog): self
    {
        $this->inventoryCatalog = $inventoryCatalog;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30InventoryType[]
     */
    public function getInventoryType(): ?array
    {
        return $this->inventoryType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30InventoryType[] $inventoryType
     * @return self
     */
    public function setInventoryType(?array $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30IsCommentDisable
     */
    public function getIsCommentDisable(): ?string
    {
        return $this->isCommentDisable;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30IsCommentDisable $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?string $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30RequestKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30RequestKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30LandingPageStayTime
     */
    public function getLandingPageStayTime(): ?string
    {
        return $this->landingPageStayTime;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30LandingPageStayTime $landingPageStayTime
     * @return self
     */
    public function setLandingPageStayTime(?string $landingPageStayTime): self
    {
        $this->landingPageStayTime = $landingPageStayTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30LandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30LandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30LaunchType
     */
    public function getLaunchType(): ?string
    {
        return $this->launchType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30LaunchType $launchType
     * @return self
     */
    public function setLaunchType(?string $launchType): self
    {
        $this->launchType = $launchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30LayerRoiSwitch
     */
    public function getLayerRoiSwitch(): ?string
    {
        return $this->layerRoiSwitch;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30LayerRoiSwitch $layerRoiSwitch
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
     * @return \Oceanengine\Models\StdProjectCreateV30MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30MultiDeliveryMedium
     */
    public function getMultiDeliveryMedium(): ?string
    {
        return $this->multiDeliveryMedium;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30MultiDeliveryMedium $multiDeliveryMedium
     * @return self
     */
    public function setMultiDeliveryMedium(?string $multiDeliveryMedium): self
    {
        $this->multiDeliveryMedium = $multiDeliveryMedium;
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
     * @return \Oceanengine\Models\StdProjectCreateV30NativeType
     */
    public function getNativeType(): ?string
    {
        return $this->nativeType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30NativeType $nativeType
     * @return self
     */
    public function setNativeType(?string $nativeType): self
    {
        $this->nativeType = $nativeType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30Pricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30Pricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
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
     * @return \Oceanengine\Models\StdProjectCreateV30RequestProjectMaterials
     */
    public function getProjectMaterials(): ?\Oceanengine\Models\StdProjectCreateV30RequestProjectMaterials
    {
        return $this->projectMaterials;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30RequestProjectMaterials $projectMaterials
     * @return self
     */
    public function setProjectMaterials(?\Oceanengine\Models\StdProjectCreateV30RequestProjectMaterials $projectMaterials): self
    {
        $this->projectMaterials = $projectMaterials;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuickAppId(): ?int
    {
        return $this->quickAppId;
    }

    /**
     * @param int $quickAppId
     * @return self
     */
    public function setQuickAppId(?int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
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
     * @return \Oceanengine\Models\StdProjectCreateV30ScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30ScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30SearchContinueDelivery
     */
    public function getSearchContinueDelivery(): ?string
    {
        return $this->searchContinueDelivery;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30SearchContinueDelivery $searchContinueDelivery
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
     * @return \Oceanengine\Models\StdProjectCreateV30ShopPlatform
     */
    public function getShopPlatform(): ?string
    {
        return $this->shopPlatform;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30ShopPlatform $shopPlatform
     * @return self
     */
    public function setShopPlatform(?string $shopPlatform): self
    {
        $this->shopPlatform = $shopPlatform;
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
     * @return string
     */
    public function getSubscribeUrl(): ?string
    {
        return $this->subscribeUrl;
    }

    /**
     * @param string $subscribeUrl
     * @return self
     */
    public function setSubscribeUrl(?string $subscribeUrl): self
    {
        $this->subscribeUrl = $subscribeUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30RequestTrackUrlSetting
     */
    public function getTrackUrlSetting(): ?\Oceanengine\Models\StdProjectCreateV30RequestTrackUrlSetting
    {
        return $this->trackUrlSetting;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30RequestTrackUrlSetting $trackUrlSetting
     * @return self
     */
    public function setTrackUrlSetting(?\Oceanengine\Models\StdProjectCreateV30RequestTrackUrlSetting $trackUrlSetting): self
    {
        $this->trackUrlSetting = $trackUrlSetting;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionBidRatio(): ?float
    {
        return $this->unionBidRatio;
    }

    /**
     * @param float $unionBidRatio
     * @return self
     */
    public function setUnionBidRatio(?float $unionBidRatio): self
    {
        $this->unionBidRatio = $unionBidRatio;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30UnionVideoType
     */
    public function getUnionVideoType(): ?string
    {
        return $this->unionVideoType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30UnionVideoType $unionVideoType
     * @return self
     */
    public function setUnionVideoType(?string $unionVideoType): self
    {
        $this->unionVideoType = $unionVideoType;
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
        if ($this->audienceType !== null) {
            $result['audience_type'] = $this->audienceType;
        }
        if ($this->autoExtendTraffic !== null) {
            $result['auto_extend_traffic'] = $this->autoExtendTraffic;
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
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
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
        if ($this->internalAdvertiserInfo !== null) {
            $result['internal_advertiser_info'] = $this->internalAdvertiserInfo;
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
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
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
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productPlatformId !== null) {
            $result['product_platform_id'] = $this->productPlatformId;
        }
        if ($this->projectMaterials !== null) {
            $result['project_materials'] = $this->projectMaterials;
        }
        if ($this->quickAppId !== null) {
            $result['quick_app_id'] = $this->quickAppId;
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
        if ($this->starTaskIdList !== null) {
            $result['star_task_id_list'] = $this->starTaskIdList;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
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
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\StdProjectCreateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['audience_type'] ?? null) !== null) {
            $obj->audienceType = (string) $v;
        }
        if (($v = $data['auto_extend_traffic'] ?? null) !== null) {
            $obj->autoExtendTraffic = (string) $v;
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
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\StdProjectCreateV30RequestBrandInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
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
        if (($v = $data['internal_advertiser_info'] ?? null) !== null && is_array($v)) {
            $obj->internalAdvertiserInfo = \Oceanengine\Models\StdProjectCreateV30RequestInternalAdvertiserInfo::fromArray($v);
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
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\StdProjectCreateV30RequestKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['landing_page_stay_time'] ?? null) !== null) {
            $obj->landingPageStayTime = (string) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['launch_type'] ?? null) !== null) {
            $obj->launchType = (string) $v;
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
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_platform_id'] ?? null) !== null) {
            $obj->productPlatformId = (int) $v;
        }
        if (($v = $data['project_materials'] ?? null) !== null && is_array($v)) {
            $obj->projectMaterials = \Oceanengine\Models\StdProjectCreateV30RequestProjectMaterials::fromArray($v);
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
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
        if (($v = $data['star_task_id_list'] ?? null) !== null && is_array($v)) {
            $obj->starTaskIdList = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['subscribe_url'] ?? null) !== null) {
            $obj->subscribeUrl = (string) $v;
        }
        if (($v = $data['track_url_setting'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlSetting = \Oceanengine\Models\StdProjectCreateV30RequestTrackUrlSetting::fromArray($v);
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
