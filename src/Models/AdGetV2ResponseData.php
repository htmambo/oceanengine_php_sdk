<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $actionTrackUrl = null;

    /**
     * @var string
     */
    protected ?string $adCreateTime = null;

    /**
     * @var int
     */
    protected ?int $adGroupId = null;

    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string
     */
    protected ?string $adModifyTime = null;

    /**
     * @var int
     */
    protected ?int $adjustCpa = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAdvancedCreativeType
     */
    protected ?string $advancedCreativeType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int[]
     */
    protected ?array $advertiserStoreIds = null;

    /**
     * @var string
     */
    protected ?string $appDesc = null;

    /**
     * @var int
     */
    protected ?int $appIntroduction = null;

    /**
     * @var string[]
     */
    protected ?array $appThumbnails = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAppType
     */
    protected ?string $appType = null;

    /**
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * @var int[]
     */
    protected ?array $assetIds = null;

    /**
     * @var \Oceanengine\Models\AdGetV2ResponseDataAudience
     */
    protected ?\Oceanengine\Models\AdGetV2ResponseDataAudience $audience = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceExtend
     */
    protected ?string $audienceExtend = null;

    /**
     * @var int
     */
    protected ?int $audiencePackageId = null;

    /**
     * @var string
     */
    protected ?string $auditRejectReason = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAutoInheritSwitch
     */
    protected ?string $autoInheritSwitch = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAutoUpdateKeyword
     */
    protected ?string $autoUpdateKeyword = null;

    /**
     * @var string
     */
    protected ?string $awemeAccount = null;

    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataCategoryType
     */
    protected ?string $categoryType = null;

    /**
     * @var int
     */
    protected ?int $convertId = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataConvertedTimeDuration
     */
    protected ?string $convertedTimeDuration = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataDeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * @var float
     */
    protected ?float $deepCpabid = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataDeliveryPhase
     */
    protected ?string $deliveryPhase = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataDeliveryRange
     */
    protected ?string $deliveryRange = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataDownloadMode
     */
    protected ?string $downloadMode = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataDownloadType
     */
    protected ?string $downloadType = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataDpaAdtype
     */
    protected ?string $dpaAdtype = null;

    /**
     * @var int[]
     */
    protected ?array $dpaCategories = null;

    /**
     * @var int
     */
    protected ?int $dpaCity = null;

    /**
     * @var string
     */
    protected ?string $dpaExternalUrlField = null;

    /**
     * @var string[]
     */
    protected ?array $dpaExternalUrls = null;

    /**
     * @var int
     */
    protected ?int $dpaLbs = null;

    /**
     * @var string
     */
    protected ?string $dpaOpenUrlField = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataDpaOpenUrlType
     */
    protected ?string $dpaOpenUrlType = null;

    /**
     * @var string[]
     */
    protected ?array $dpaOpenUrls = null;

    /**
     * @var \Oceanengine\Models\AdGetV2ResponseDataDpaProductTargetInner[]
     */
    protected ?array $dpaProductTarget = null;

    /**
     * @var int[]
     */
    protected ?array $dpaProducts = null;

    /**
     * @var int
     */
    protected ?int $dpaProvince = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataExternalActions[]
     */
    protected ?array $externalActions = null;

    /**
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @var string
     */
    protected ?string $externalUrlParams = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataFeedDeliverySearch
     */
    protected ?string $feedDeliverySearch = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataFlowControlMode
     */
    protected ?string $flowControlMode = null;

    /**
     * @var int
     */
    protected ?int $formId = null;

    /**
     * @var int
     */
    protected ?int $formIndex = null;

    /**
     * @var int
     */
    protected ?int $gamePackageBatchId = null;

    /**
     * @var string
     */
    protected ?string $gamePackageDesc = null;

    /**
     * @var string[]
     */
    protected ?array $gamePackageThumbnailIds = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataHideIfConverted
     */
    protected ?string $hideIfConverted = null;

    /**
     * @var int
     */
    protected ?int $hideIfExists = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataInheritType
     */
    protected ?string $inheritType = null;

    /**
     * @var int[]
     */
    protected ?array $inheritedAdvertiserId = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataIntelligentFlowSwitch
     */
    protected ?string $intelligentFlowSwitch = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataInventoryCatalog
     */
    protected ?string $inventoryCatalog = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataInventoryType[]
     */
    protected ?array $inventoryType = null;

    /**
     * @var int
     */
    protected ?int $landingPageStayTime = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataLaunchTargetType
     */
    protected ?string $launchTargetType = null;

    /**
     * @var float
     */
    protected ?float $lubanRoiGoal = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var string
     */
    protected ?string $openUrlParams = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var string
     */
    protected ?string $package = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataParamsType
     */
    protected ?string $paramsType = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataPricing
     */
    protected ?string $pricing = null;

    /**
     * @var string
     */
    protected ?string $productId = null;

    /**
     * @var int
     */
    protected ?int $productPlatformId = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataPromotionType
     */
    protected ?string $promotionType = null;

    /**
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * @var string
     */
    protected ?string $quickAppUrl = null;

    /**
     * @var float
     */
    protected ?float $retentionBid = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataSceneInventory
     */
    protected ?string $sceneInventory = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var float
     */
    protected ?float $searchBidRatio = null;

    /**
     * @var \Oceanengine\Models\AdGetV2ResponseDataShopInfo
     */
    protected ?\Oceanengine\Models\AdGetV2ResponseDataShopInfo $shopInfo = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataSmartInventory
     */
    protected ?string $smartInventory = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataStoreType
     */
    protected ?string $storeType = null;

    /**
     * @var int
     */
    protected ?int $storeproPackId = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataStoreproUnit
     */
    protected ?string $storeproUnit = null;

    /**
     * @var string
     */
    protected ?string $subscribeUrl = null;

    /**
     * @var int
     */
    protected ?int $targetCvr = null;

    /**
     * @var string[]
     */
    protected ?array $trackUrl = null;

    /**
     * @var int
     */
    protected ?int $trackUrlGroupId = null;

    /**
     * @var string
     */
    protected ?string $trackUrlGroupType = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataTrackUrlSendType
     */
    protected ?string $trackUrlSendType = null;

    /**
     * @var \Oceanengine\Models\AdGetV2ResponseDataUdShop
     */
    protected ?\Oceanengine\Models\AdGetV2ResponseDataUdShop $udShop = null;

    /**
     * @var string
     */
    protected ?string $ulink = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataUnionVideoType
     */
    protected ?string $unionVideoType = null;

    /**
     * @var int
     */
    protected ?int $valueOptimizedOpen = null;

    /**
     * @var int
     */
    protected ?int $valueOptimizedType = null;

    /**
     * @var string[]
     */
    protected ?array $videoPlayDoneTrackUrl = null;

    /**
     * @var string[]
     */
    protected ?array $videoPlayEffectiveTrackUrl = null;

    /**
     * @var string[]
     */
    protected ?array $videoPlayTrackUrl = null;

    /**
     * @return string[]
     */
    public function getActionTrackUrl(): ?array
    {
        return $this->actionTrackUrl;
    }

    /**
     * @param string[] $actionTrackUrl
     * @return self
     */
    public function setActionTrackUrl(?array $actionTrackUrl): self
    {
        $this->actionTrackUrl = $actionTrackUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdCreateTime(): ?string
    {
        return $this->adCreateTime;
    }

    /**
     * @param string $adCreateTime
     * @return self
     */
    public function setAdCreateTime(?string $adCreateTime): self
    {
        $this->adCreateTime = $adCreateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId(): ?int
    {
        return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return self
     */
    public function setAdGroupId(?int $adGroupId): self
    {
        $this->adGroupId = $adGroupId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdModifyTime(): ?string
    {
        return $this->adModifyTime;
    }

    /**
     * @param string $adModifyTime
     * @return self
     */
    public function setAdModifyTime(?string $adModifyTime): self
    {
        $this->adModifyTime = $adModifyTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdjustCpa(): ?int
    {
        return $this->adjustCpa;
    }

    /**
     * @param int $adjustCpa
     * @return self
     */
    public function setAdjustCpa(?int $adjustCpa): self
    {
        $this->adjustCpa = $adjustCpa;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAdvancedCreativeType
     */
    public function getAdvancedCreativeType(): ?string
    {
        return $this->advancedCreativeType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAdvancedCreativeType $advancedCreativeType
     * @return self
     */
    public function setAdvancedCreativeType(?string $advancedCreativeType): self
    {
        $this->advancedCreativeType = $advancedCreativeType;
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
     * @return int[]
     */
    public function getAdvertiserStoreIds(): ?array
    {
        return $this->advertiserStoreIds;
    }

    /**
     * @param int[] $advertiserStoreIds
     * @return self
     */
    public function setAdvertiserStoreIds(?array $advertiserStoreIds): self
    {
        $this->advertiserStoreIds = $advertiserStoreIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppDesc(): ?string
    {
        return $this->appDesc;
    }

    /**
     * @param string $appDesc
     * @return self
     */
    public function setAppDesc(?string $appDesc): self
    {
        $this->appDesc = $appDesc;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppIntroduction(): ?int
    {
        return $this->appIntroduction;
    }

    /**
     * @param int $appIntroduction
     * @return self
     */
    public function setAppIntroduction(?int $appIntroduction): self
    {
        $this->appIntroduction = $appIntroduction;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAppThumbnails(): ?array
    {
        return $this->appThumbnails;
    }

    /**
     * @param string[] $appThumbnails
     * @return self
     */
    public function setAppThumbnails(?array $appThumbnails): self
    {
        $this->appThumbnails = $appThumbnails;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAppType
     */
    public function getAppType(): ?string
    {
        return $this->appType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAppType $appType
     * @return self
     */
    public function setAppType(?string $appType): self
    {
        $this->appType = $appType;
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
     * @return int[]
     */
    public function getAssetIds(): ?array
    {
        return $this->assetIds;
    }

    /**
     * @param int[] $assetIds
     * @return self
     */
    public function setAssetIds(?array $assetIds): self
    {
        $this->assetIds = $assetIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2ResponseDataAudience
     */
    public function getAudience(): ?\Oceanengine\Models\AdGetV2ResponseDataAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2ResponseDataAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\AdGetV2ResponseDataAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceExtend
     */
    public function getAudienceExtend(): ?string
    {
        return $this->audienceExtend;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceExtend $audienceExtend
     * @return self
     */
    public function setAudienceExtend(?string $audienceExtend): self
    {
        $this->audienceExtend = $audienceExtend;
        return $this;
    }

    /**
     * @return int
     */
    public function getAudiencePackageId(): ?int
    {
        return $this->audiencePackageId;
    }

    /**
     * @param int $audiencePackageId
     * @return self
     */
    public function setAudiencePackageId(?int $audiencePackageId): self
    {
        $this->audiencePackageId = $audiencePackageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuditRejectReason(): ?string
    {
        return $this->auditRejectReason;
    }

    /**
     * @param string $auditRejectReason
     * @return self
     */
    public function setAuditRejectReason(?string $auditRejectReason): self
    {
        $this->auditRejectReason = $auditRejectReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAutoInheritSwitch
     */
    public function getAutoInheritSwitch(): ?string
    {
        return $this->autoInheritSwitch;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAutoInheritSwitch $autoInheritSwitch
     * @return self
     */
    public function setAutoInheritSwitch(?string $autoInheritSwitch): self
    {
        $this->autoInheritSwitch = $autoInheritSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAutoUpdateKeyword
     */
    public function getAutoUpdateKeyword(): ?string
    {
        return $this->autoUpdateKeyword;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAutoUpdateKeyword $autoUpdateKeyword
     * @return self
     */
    public function setAutoUpdateKeyword(?string $autoUpdateKeyword): self
    {
        $this->autoUpdateKeyword = $autoUpdateKeyword;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeAccount(): ?string
    {
        return $this->awemeAccount;
    }

    /**
     * @param string $awemeAccount
     * @return self
     */
    public function setAwemeAccount(?string $awemeAccount): self
    {
        $this->awemeAccount = $awemeAccount;
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
     * @return \Oceanengine\Models\AdGetV2DataBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataCategoryType
     */
    public function getCategoryType(): ?string
    {
        return $this->categoryType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataCategoryType $categoryType
     * @return self
     */
    public function setCategoryType(?string $categoryType): self
    {
        $this->categoryType = $categoryType;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvertId(): ?int
    {
        return $this->convertId;
    }

    /**
     * @param int $convertId
     * @return self
     */
    public function setConvertId(?int $convertId): self
    {
        $this->convertId = $convertId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataConvertedTimeDuration
     */
    public function getConvertedTimeDuration(): ?string
    {
        return $this->convertedTimeDuration;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataConvertedTimeDuration $convertedTimeDuration
     * @return self
     */
    public function setConvertedTimeDuration(?string $convertedTimeDuration): self
    {
        $this->convertedTimeDuration = $convertedTimeDuration;
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
     * @return \Oceanengine\Models\AdGetV2DataDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataDeepBidType $deepBidType
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
     * @return \Oceanengine\Models\AdGetV2DataDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataDeliveryPhase
     */
    public function getDeliveryPhase(): ?string
    {
        return $this->deliveryPhase;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataDeliveryPhase $deliveryPhase
     * @return self
     */
    public function setDeliveryPhase(?string $deliveryPhase): self
    {
        $this->deliveryPhase = $deliveryPhase;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataDeliveryRange
     */
    public function getDeliveryRange(): ?string
    {
        return $this->deliveryRange;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataDeliveryRange $deliveryRange
     * @return self
     */
    public function setDeliveryRange(?string $deliveryRange): self
    {
        $this->deliveryRange = $deliveryRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataDownloadMode
     */
    public function getDownloadMode(): ?string
    {
        return $this->downloadMode;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataDownloadMode $downloadMode
     * @return self
     */
    public function setDownloadMode(?string $downloadMode): self
    {
        $this->downloadMode = $downloadMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataDownloadType
     */
    public function getDownloadType(): ?string
    {
        return $this->downloadType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataDownloadType $downloadType
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
     * @return \Oceanengine\Models\AdGetV2DataDpaAdtype
     */
    public function getDpaAdtype(): ?string
    {
        return $this->dpaAdtype;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataDpaAdtype $dpaAdtype
     * @return self
     */
    public function setDpaAdtype(?string $dpaAdtype): self
    {
        $this->dpaAdtype = $dpaAdtype;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getDpaCategories(): ?array
    {
        return $this->dpaCategories;
    }

    /**
     * @param int[] $dpaCategories
     * @return self
     */
    public function setDpaCategories(?array $dpaCategories): self
    {
        $this->dpaCategories = $dpaCategories;
        return $this;
    }

    /**
     * @return int
     */
    public function getDpaCity(): ?int
    {
        return $this->dpaCity;
    }

    /**
     * @param int $dpaCity
     * @return self
     */
    public function setDpaCity(?int $dpaCity): self
    {
        $this->dpaCity = $dpaCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getDpaExternalUrlField(): ?string
    {
        return $this->dpaExternalUrlField;
    }

    /**
     * @param string $dpaExternalUrlField
     * @return self
     */
    public function setDpaExternalUrlField(?string $dpaExternalUrlField): self
    {
        $this->dpaExternalUrlField = $dpaExternalUrlField;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDpaExternalUrls(): ?array
    {
        return $this->dpaExternalUrls;
    }

    /**
     * @param string[] $dpaExternalUrls
     * @return self
     */
    public function setDpaExternalUrls(?array $dpaExternalUrls): self
    {
        $this->dpaExternalUrls = $dpaExternalUrls;
        return $this;
    }

    /**
     * @return int
     */
    public function getDpaLbs(): ?int
    {
        return $this->dpaLbs;
    }

    /**
     * @param int $dpaLbs
     * @return self
     */
    public function setDpaLbs(?int $dpaLbs): self
    {
        $this->dpaLbs = $dpaLbs;
        return $this;
    }

    /**
     * @return string
     */
    public function getDpaOpenUrlField(): ?string
    {
        return $this->dpaOpenUrlField;
    }

    /**
     * @param string $dpaOpenUrlField
     * @return self
     */
    public function setDpaOpenUrlField(?string $dpaOpenUrlField): self
    {
        $this->dpaOpenUrlField = $dpaOpenUrlField;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataDpaOpenUrlType
     */
    public function getDpaOpenUrlType(): ?string
    {
        return $this->dpaOpenUrlType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataDpaOpenUrlType $dpaOpenUrlType
     * @return self
     */
    public function setDpaOpenUrlType(?string $dpaOpenUrlType): self
    {
        $this->dpaOpenUrlType = $dpaOpenUrlType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDpaOpenUrls(): ?array
    {
        return $this->dpaOpenUrls;
    }

    /**
     * @param string[] $dpaOpenUrls
     * @return self
     */
    public function setDpaOpenUrls(?array $dpaOpenUrls): self
    {
        $this->dpaOpenUrls = $dpaOpenUrls;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2ResponseDataDpaProductTargetInner[]
     */
    public function getDpaProductTarget(): ?array
    {
        return $this->dpaProductTarget;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2ResponseDataDpaProductTargetInner[] $dpaProductTarget
     * @return self
     */
    public function setDpaProductTarget(?array $dpaProductTarget): self
    {
        $this->dpaProductTarget = $dpaProductTarget;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getDpaProducts(): ?array
    {
        return $this->dpaProducts;
    }

    /**
     * @param int[] $dpaProducts
     * @return self
     */
    public function setDpaProducts(?array $dpaProducts): self
    {
        $this->dpaProducts = $dpaProducts;
        return $this;
    }

    /**
     * @return int
     */
    public function getDpaProvince(): ?int
    {
        return $this->dpaProvince;
    }

    /**
     * @param int $dpaProvince
     * @return self
     */
    public function setDpaProvince(?int $dpaProvince): self
    {
        $this->dpaProvince = $dpaProvince;
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
     * @return \Oceanengine\Models\AdGetV2DataExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataExternalActions[]
     */
    public function getExternalActions(): ?array
    {
        return $this->externalActions;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataExternalActions[] $externalActions
     * @return self
     */
    public function setExternalActions(?array $externalActions): self
    {
        $this->externalActions = $externalActions;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalUrlParams(): ?string
    {
        return $this->externalUrlParams;
    }

    /**
     * @param string $externalUrlParams
     * @return self
     */
    public function setExternalUrlParams(?string $externalUrlParams): self
    {
        $this->externalUrlParams = $externalUrlParams;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataFeedDeliverySearch
     */
    public function getFeedDeliverySearch(): ?string
    {
        return $this->feedDeliverySearch;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataFeedDeliverySearch $feedDeliverySearch
     * @return self
     */
    public function setFeedDeliverySearch(?string $feedDeliverySearch): self
    {
        $this->feedDeliverySearch = $feedDeliverySearch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataFlowControlMode
     */
    public function getFlowControlMode(): ?string
    {
        return $this->flowControlMode;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataFlowControlMode $flowControlMode
     * @return self
     */
    public function setFlowControlMode(?string $flowControlMode): self
    {
        $this->flowControlMode = $flowControlMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getFormId(): ?int
    {
        return $this->formId;
    }

    /**
     * @param int $formId
     * @return self
     */
    public function setFormId(?int $formId): self
    {
        $this->formId = $formId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFormIndex(): ?int
    {
        return $this->formIndex;
    }

    /**
     * @param int $formIndex
     * @return self
     */
    public function setFormIndex(?int $formIndex): self
    {
        $this->formIndex = $formIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getGamePackageBatchId(): ?int
    {
        return $this->gamePackageBatchId;
    }

    /**
     * @param int $gamePackageBatchId
     * @return self
     */
    public function setGamePackageBatchId(?int $gamePackageBatchId): self
    {
        $this->gamePackageBatchId = $gamePackageBatchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGamePackageDesc(): ?string
    {
        return $this->gamePackageDesc;
    }

    /**
     * @param string $gamePackageDesc
     * @return self
     */
    public function setGamePackageDesc(?string $gamePackageDesc): self
    {
        $this->gamePackageDesc = $gamePackageDesc;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGamePackageThumbnailIds(): ?array
    {
        return $this->gamePackageThumbnailIds;
    }

    /**
     * @param string[] $gamePackageThumbnailIds
     * @return self
     */
    public function setGamePackageThumbnailIds(?array $gamePackageThumbnailIds): self
    {
        $this->gamePackageThumbnailIds = $gamePackageThumbnailIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataHideIfConverted
     */
    public function getHideIfConverted(): ?string
    {
        return $this->hideIfConverted;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataHideIfConverted $hideIfConverted
     * @return self
     */
    public function setHideIfConverted(?string $hideIfConverted): self
    {
        $this->hideIfConverted = $hideIfConverted;
        return $this;
    }

    /**
     * @return int
     */
    public function getHideIfExists(): ?int
    {
        return $this->hideIfExists;
    }

    /**
     * @param int $hideIfExists
     * @return self
     */
    public function setHideIfExists(?int $hideIfExists): self
    {
        $this->hideIfExists = $hideIfExists;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataInheritType
     */
    public function getInheritType(): ?string
    {
        return $this->inheritType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataInheritType $inheritType
     * @return self
     */
    public function setInheritType(?string $inheritType): self
    {
        $this->inheritType = $inheritType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getInheritedAdvertiserId(): ?array
    {
        return $this->inheritedAdvertiserId;
    }

    /**
     * @param int[] $inheritedAdvertiserId
     * @return self
     */
    public function setInheritedAdvertiserId(?array $inheritedAdvertiserId): self
    {
        $this->inheritedAdvertiserId = $inheritedAdvertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataIntelligentFlowSwitch
     */
    public function getIntelligentFlowSwitch(): ?string
    {
        return $this->intelligentFlowSwitch;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataIntelligentFlowSwitch $intelligentFlowSwitch
     * @return self
     */
    public function setIntelligentFlowSwitch(?string $intelligentFlowSwitch): self
    {
        $this->intelligentFlowSwitch = $intelligentFlowSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataInventoryCatalog
     */
    public function getInventoryCatalog(): ?string
    {
        return $this->inventoryCatalog;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataInventoryCatalog $inventoryCatalog
     * @return self
     */
    public function setInventoryCatalog(?string $inventoryCatalog): self
    {
        $this->inventoryCatalog = $inventoryCatalog;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataInventoryType[]
     */
    public function getInventoryType(): ?array
    {
        return $this->inventoryType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataInventoryType[] $inventoryType
     * @return self
     */
    public function setInventoryType(?array $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
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
     * @return \Oceanengine\Models\AdGetV2DataLaunchTargetType
     */
    public function getLaunchTargetType(): ?string
    {
        return $this->launchTargetType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataLaunchTargetType $launchTargetType
     * @return self
     */
    public function setLaunchTargetType(?string $launchTargetType): self
    {
        $this->launchTargetType = $launchTargetType;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanRoiGoal(): ?float
    {
        return $this->lubanRoiGoal;
    }

    /**
     * @param float $lubanRoiGoal
     * @return self
     */
    public function setLubanRoiGoal(?float $lubanRoiGoal): self
    {
        $this->lubanRoiGoal = $lubanRoiGoal;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
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
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrlParams(): ?string
    {
        return $this->openUrlParams;
    }

    /**
     * @param string $openUrlParams
     * @return self
     */
    public function setOpenUrlParams(?string $openUrlParams): self
    {
        $this->openUrlParams = $openUrlParams;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataOptStatus $optStatus
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
    public function getPackage(): ?string
    {
        return $this->package;
    }

    /**
     * @param string $package
     * @return self
     */
    public function setPackage(?string $package): self
    {
        $this->package = $package;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataParamsType
     */
    public function getParamsType(): ?string
    {
        return $this->paramsType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataParamsType $paramsType
     * @return self
     */
    public function setParamsType(?string $paramsType): self
    {
        $this->paramsType = $paramsType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataPricing $pricing
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
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     * @return self
     */
    public function setProductId(?string $productId): self
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
     * @return \Oceanengine\Models\AdGetV2DataPromotionType
     */
    public function getPromotionType(): ?string
    {
        return $this->promotionType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataPromotionType $promotionType
     * @return self
     */
    public function setPromotionType(?string $promotionType): self
    {
        $this->promotionType = $promotionType;
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
     * @return string
     */
    public function getQuickAppUrl(): ?string
    {
        return $this->quickAppUrl;
    }

    /**
     * @param string $quickAppUrl
     * @return self
     */
    public function setQuickAppUrl(?string $quickAppUrl): self
    {
        $this->quickAppUrl = $quickAppUrl;
        return $this;
    }

    /**
     * @return float
     */
    public function getRetentionBid(): ?float
    {
        return $this->retentionBid;
    }

    /**
     * @param float $retentionBid
     * @return self
     */
    public function setRetentionBid(?float $retentionBid): self
    {
        $this->retentionBid = $retentionBid;
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
     * @return \Oceanengine\Models\AdGetV2DataSceneInventory
     */
    public function getSceneInventory(): ?string
    {
        return $this->sceneInventory;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataSceneInventory $sceneInventory
     * @return self
     */
    public function setSceneInventory(?string $sceneInventory): self
    {
        $this->sceneInventory = $sceneInventory;
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
     * @return \Oceanengine\Models\AdGetV2DataScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return float
     */
    public function getSearchBidRatio(): ?float
    {
        return $this->searchBidRatio;
    }

    /**
     * @param float $searchBidRatio
     * @return self
     */
    public function setSearchBidRatio(?float $searchBidRatio): self
    {
        $this->searchBidRatio = $searchBidRatio;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2ResponseDataShopInfo
     */
    public function getShopInfo(): ?\Oceanengine\Models\AdGetV2ResponseDataShopInfo
    {
        return $this->shopInfo;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2ResponseDataShopInfo $shopInfo
     * @return self
     */
    public function setShopInfo(?\Oceanengine\Models\AdGetV2ResponseDataShopInfo $shopInfo): self
    {
        $this->shopInfo = $shopInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataSmartInventory
     */
    public function getSmartInventory(): ?string
    {
        return $this->smartInventory;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataSmartInventory $smartInventory
     * @return self
     */
    public function setSmartInventory(?string $smartInventory): self
    {
        $this->smartInventory = $smartInventory;
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
     * @return \Oceanengine\Models\AdGetV2DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataStoreType
     */
    public function getStoreType(): ?string
    {
        return $this->storeType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataStoreType $storeType
     * @return self
     */
    public function setStoreType(?string $storeType): self
    {
        $this->storeType = $storeType;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreproPackId(): ?int
    {
        return $this->storeproPackId;
    }

    /**
     * @param int $storeproPackId
     * @return self
     */
    public function setStoreproPackId(?int $storeproPackId): self
    {
        $this->storeproPackId = $storeproPackId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataStoreproUnit
     */
    public function getStoreproUnit(): ?string
    {
        return $this->storeproUnit;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataStoreproUnit $storeproUnit
     * @return self
     */
    public function setStoreproUnit(?string $storeproUnit): self
    {
        $this->storeproUnit = $storeproUnit;
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
     * @return int
     */
    public function getTargetCvr(): ?int
    {
        return $this->targetCvr;
    }

    /**
     * @param int $targetCvr
     * @return self
     */
    public function setTargetCvr(?int $targetCvr): self
    {
        $this->targetCvr = $targetCvr;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTrackUrl(): ?array
    {
        return $this->trackUrl;
    }

    /**
     * @param string[] $trackUrl
     * @return self
     */
    public function setTrackUrl(?array $trackUrl): self
    {
        $this->trackUrl = $trackUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrackUrlGroupId(): ?int
    {
        return $this->trackUrlGroupId;
    }

    /**
     * @param int $trackUrlGroupId
     * @return self
     */
    public function setTrackUrlGroupId(?int $trackUrlGroupId): self
    {
        $this->trackUrlGroupId = $trackUrlGroupId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackUrlGroupType(): ?string
    {
        return $this->trackUrlGroupType;
    }

    /**
     * @param string $trackUrlGroupType
     * @return self
     */
    public function setTrackUrlGroupType(?string $trackUrlGroupType): self
    {
        $this->trackUrlGroupType = $trackUrlGroupType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataTrackUrlSendType
     */
    public function getTrackUrlSendType(): ?string
    {
        return $this->trackUrlSendType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataTrackUrlSendType $trackUrlSendType
     * @return self
     */
    public function setTrackUrlSendType(?string $trackUrlSendType): self
    {
        $this->trackUrlSendType = $trackUrlSendType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2ResponseDataUdShop
     */
    public function getUdShop(): ?\Oceanengine\Models\AdGetV2ResponseDataUdShop
    {
        return $this->udShop;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2ResponseDataUdShop $udShop
     * @return self
     */
    public function setUdShop(?\Oceanengine\Models\AdGetV2ResponseDataUdShop $udShop): self
    {
        $this->udShop = $udShop;
        return $this;
    }

    /**
     * @return string
     */
    public function getUlink(): ?string
    {
        return $this->ulink;
    }

    /**
     * @param string $ulink
     * @return self
     */
    public function setUlink(?string $ulink): self
    {
        $this->ulink = $ulink;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataUnionVideoType
     */
    public function getUnionVideoType(): ?string
    {
        return $this->unionVideoType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataUnionVideoType $unionVideoType
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
    public function getValueOptimizedOpen(): ?int
    {
        return $this->valueOptimizedOpen;
    }

    /**
     * @param int $valueOptimizedOpen
     * @return self
     */
    public function setValueOptimizedOpen(?int $valueOptimizedOpen): self
    {
        $this->valueOptimizedOpen = $valueOptimizedOpen;
        return $this;
    }

    /**
     * @return int
     */
    public function getValueOptimizedType(): ?int
    {
        return $this->valueOptimizedType;
    }

    /**
     * @param int $valueOptimizedType
     * @return self
     */
    public function setValueOptimizedType(?int $valueOptimizedType): self
    {
        $this->valueOptimizedType = $valueOptimizedType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoPlayDoneTrackUrl(): ?array
    {
        return $this->videoPlayDoneTrackUrl;
    }

    /**
     * @param string[] $videoPlayDoneTrackUrl
     * @return self
     */
    public function setVideoPlayDoneTrackUrl(?array $videoPlayDoneTrackUrl): self
    {
        $this->videoPlayDoneTrackUrl = $videoPlayDoneTrackUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoPlayEffectiveTrackUrl(): ?array
    {
        return $this->videoPlayEffectiveTrackUrl;
    }

    /**
     * @param string[] $videoPlayEffectiveTrackUrl
     * @return self
     */
    public function setVideoPlayEffectiveTrackUrl(?array $videoPlayEffectiveTrackUrl): self
    {
        $this->videoPlayEffectiveTrackUrl = $videoPlayEffectiveTrackUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getVideoPlayTrackUrl(): ?array
    {
        return $this->videoPlayTrackUrl;
    }

    /**
     * @param string[] $videoPlayTrackUrl
     * @return self
     */
    public function setVideoPlayTrackUrl(?array $videoPlayTrackUrl): self
    {
        $this->videoPlayTrackUrl = $videoPlayTrackUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionTrackUrl !== null) {
            $result['action_track_url'] = $this->actionTrackUrl;
        }
        if ($this->adCreateTime !== null) {
            $result['ad_create_time'] = $this->adCreateTime;
        }
        if ($this->adGroupId !== null) {
            $result['ad_group_id'] = $this->adGroupId;
        }
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adModifyTime !== null) {
            $result['ad_modify_time'] = $this->adModifyTime;
        }
        if ($this->adjustCpa !== null) {
            $result['adjust_cpa'] = $this->adjustCpa;
        }
        if ($this->advancedCreativeType !== null) {
            $result['advanced_creative_type'] = $this->advancedCreativeType;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserStoreIds !== null) {
            $result['advertiser_store_ids'] = $this->advertiserStoreIds;
        }
        if ($this->appDesc !== null) {
            $result['app_desc'] = $this->appDesc;
        }
        if ($this->appIntroduction !== null) {
            $result['app_introduction'] = $this->appIntroduction;
        }
        if ($this->appThumbnails !== null) {
            $result['app_thumbnails'] = $this->appThumbnails;
        }
        if ($this->appType !== null) {
            $result['app_type'] = $this->appType;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetIds !== null) {
            $result['asset_ids'] = $this->assetIds;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->audienceExtend !== null) {
            $result['audience_extend'] = $this->audienceExtend;
        }
        if ($this->audiencePackageId !== null) {
            $result['audience_package_id'] = $this->audiencePackageId;
        }
        if ($this->auditRejectReason !== null) {
            $result['audit_reject_reason'] = $this->auditRejectReason;
        }
        if ($this->autoInheritSwitch !== null) {
            $result['auto_inherit_switch'] = $this->autoInheritSwitch;
        }
        if ($this->autoUpdateKeyword !== null) {
            $result['auto_update_keyword'] = $this->autoUpdateKeyword;
        }
        if ($this->awemeAccount !== null) {
            $result['aweme_account'] = $this->awemeAccount;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->categoryType !== null) {
            $result['category_type'] = $this->categoryType;
        }
        if ($this->convertId !== null) {
            $result['convert_id'] = $this->convertId;
        }
        if ($this->convertedTimeDuration !== null) {
            $result['converted_time_duration'] = $this->convertedTimeDuration;
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
        if ($this->deliveryPhase !== null) {
            $result['delivery_phase'] = $this->deliveryPhase;
        }
        if ($this->deliveryRange !== null) {
            $result['delivery_range'] = $this->deliveryRange;
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
        if ($this->dpaAdtype !== null) {
            $result['dpa_adtype'] = $this->dpaAdtype;
        }
        if ($this->dpaCategories !== null) {
            $result['dpa_categories'] = $this->dpaCategories;
        }
        if ($this->dpaCity !== null) {
            $result['dpa_city'] = $this->dpaCity;
        }
        if ($this->dpaExternalUrlField !== null) {
            $result['dpa_external_url_field'] = $this->dpaExternalUrlField;
        }
        if ($this->dpaExternalUrls !== null) {
            $result['dpa_external_urls'] = $this->dpaExternalUrls;
        }
        if ($this->dpaLbs !== null) {
            $result['dpa_lbs'] = $this->dpaLbs;
        }
        if ($this->dpaOpenUrlField !== null) {
            $result['dpa_open_url_field'] = $this->dpaOpenUrlField;
        }
        if ($this->dpaOpenUrlType !== null) {
            $result['dpa_open_url_type'] = $this->dpaOpenUrlType;
        }
        if ($this->dpaOpenUrls !== null) {
            $result['dpa_open_urls'] = $this->dpaOpenUrls;
        }
        if ($this->dpaProductTarget !== null) {
            $result['dpa_product_target'] = $this->dpaProductTarget;
        }
        if ($this->dpaProducts !== null) {
            $result['dpa_products'] = $this->dpaProducts;
        }
        if ($this->dpaProvince !== null) {
            $result['dpa_province'] = $this->dpaProvince;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->externalActions !== null) {
            $result['external_actions'] = $this->externalActions;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->externalUrlParams !== null) {
            $result['external_url_params'] = $this->externalUrlParams;
        }
        if ($this->feedDeliverySearch !== null) {
            $result['feed_delivery_search'] = $this->feedDeliverySearch;
        }
        if ($this->flowControlMode !== null) {
            $result['flow_control_mode'] = $this->flowControlMode;
        }
        if ($this->formId !== null) {
            $result['form_id'] = $this->formId;
        }
        if ($this->formIndex !== null) {
            $result['form_index'] = $this->formIndex;
        }
        if ($this->gamePackageBatchId !== null) {
            $result['game_package_batch_id'] = $this->gamePackageBatchId;
        }
        if ($this->gamePackageDesc !== null) {
            $result['game_package_desc'] = $this->gamePackageDesc;
        }
        if ($this->gamePackageThumbnailIds !== null) {
            $result['game_package_thumbnail_ids'] = $this->gamePackageThumbnailIds;
        }
        if ($this->hideIfConverted !== null) {
            $result['hide_if_converted'] = $this->hideIfConverted;
        }
        if ($this->hideIfExists !== null) {
            $result['hide_if_exists'] = $this->hideIfExists;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->inheritType !== null) {
            $result['inherit_type'] = $this->inheritType;
        }
        if ($this->inheritedAdvertiserId !== null) {
            $result['inherited_advertiser_id'] = $this->inheritedAdvertiserId;
        }
        if ($this->intelligentFlowSwitch !== null) {
            $result['intelligent_flow_switch'] = $this->intelligentFlowSwitch;
        }
        if ($this->inventoryCatalog !== null) {
            $result['inventory_catalog'] = $this->inventoryCatalog;
        }
        if ($this->inventoryType !== null) {
            $result['inventory_type'] = $this->inventoryType;
        }
        if ($this->landingPageStayTime !== null) {
            $result['landing_page_stay_time'] = $this->landingPageStayTime;
        }
        if ($this->launchTargetType !== null) {
            $result['launch_target_type'] = $this->launchTargetType;
        }
        if ($this->lubanRoiGoal !== null) {
            $result['luban_roi_goal'] = $this->lubanRoiGoal;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->openUrlParams !== null) {
            $result['open_url_params'] = $this->openUrlParams;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->package !== null) {
            $result['package'] = $this->package;
        }
        if ($this->paramsType !== null) {
            $result['params_type'] = $this->paramsType;
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
        if ($this->promotionType !== null) {
            $result['promotion_type'] = $this->promotionType;
        }
        if ($this->quickAppId !== null) {
            $result['quick_app_id'] = $this->quickAppId;
        }
        if ($this->quickAppUrl !== null) {
            $result['quick_app_url'] = $this->quickAppUrl;
        }
        if ($this->retentionBid !== null) {
            $result['retention_bid'] = $this->retentionBid;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->sceneInventory !== null) {
            $result['scene_inventory'] = $this->sceneInventory;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->searchBidRatio !== null) {
            $result['search_bid_ratio'] = $this->searchBidRatio;
        }
        if ($this->shopInfo !== null) {
            $result['shop_info'] = $this->shopInfo;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        if ($this->smartInventory !== null) {
            $result['smart_inventory'] = $this->smartInventory;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->storeType !== null) {
            $result['store_type'] = $this->storeType;
        }
        if ($this->storeproPackId !== null) {
            $result['storepro_pack_id'] = $this->storeproPackId;
        }
        if ($this->storeproUnit !== null) {
            $result['storepro_unit'] = $this->storeproUnit;
        }
        if ($this->subscribeUrl !== null) {
            $result['subscribe_url'] = $this->subscribeUrl;
        }
        if ($this->targetCvr !== null) {
            $result['target_cvr'] = $this->targetCvr;
        }
        if ($this->trackUrl !== null) {
            $result['track_url'] = $this->trackUrl;
        }
        if ($this->trackUrlGroupId !== null) {
            $result['track_url_group_id'] = $this->trackUrlGroupId;
        }
        if ($this->trackUrlGroupType !== null) {
            $result['track_url_group_type'] = $this->trackUrlGroupType;
        }
        if ($this->trackUrlSendType !== null) {
            $result['track_url_send_type'] = $this->trackUrlSendType;
        }
        if ($this->udShop !== null) {
            $result['ud_shop'] = $this->udShop;
        }
        if ($this->ulink !== null) {
            $result['ulink'] = $this->ulink;
        }
        if ($this->unionVideoType !== null) {
            $result['union_video_type'] = $this->unionVideoType;
        }
        if ($this->valueOptimizedOpen !== null) {
            $result['value_optimized_open'] = $this->valueOptimizedOpen;
        }
        if ($this->valueOptimizedType !== null) {
            $result['value_optimized_type'] = $this->valueOptimizedType;
        }
        if ($this->videoPlayDoneTrackUrl !== null) {
            $result['video_play_done_track_url'] = $this->videoPlayDoneTrackUrl;
        }
        if ($this->videoPlayEffectiveTrackUrl !== null) {
            $result['video_play_effective_track_url'] = $this->videoPlayEffectiveTrackUrl;
        }
        if ($this->videoPlayTrackUrl !== null) {
            $result['video_play_track_url'] = $this->videoPlayTrackUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_url'] ?? null) !== null && is_array($v)) {
            $obj->actionTrackUrl = $v;
        }
        if (($v = $data['ad_create_time'] ?? null) !== null) {
            $obj->adCreateTime = (string) $v;
        }
        if (($v = $data['ad_group_id'] ?? null) !== null) {
            $obj->adGroupId = (int) $v;
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_modify_time'] ?? null) !== null) {
            $obj->adModifyTime = (string) $v;
        }
        if (($v = $data['adjust_cpa'] ?? null) !== null) {
            $obj->adjustCpa = (int) $v;
        }
        if (($v = $data['advanced_creative_type'] ?? null) !== null) {
            $obj->advancedCreativeType = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_store_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserStoreIds = $v;
        }
        if (($v = $data['app_desc'] ?? null) !== null) {
            $obj->appDesc = (string) $v;
        }
        if (($v = $data['app_introduction'] ?? null) !== null) {
            $obj->appIntroduction = (int) $v;
        }
        if (($v = $data['app_thumbnails'] ?? null) !== null && is_array($v)) {
            $obj->appThumbnails = $v;
        }
        if (($v = $data['app_type'] ?? null) !== null) {
            $obj->appType = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['asset_ids'] ?? null) !== null && is_array($v)) {
            $obj->assetIds = $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\AdGetV2ResponseDataAudience::fromArray($v);
        }
        if (($v = $data['audience_extend'] ?? null) !== null) {
            $obj->audienceExtend = (string) $v;
        }
        if (($v = $data['audience_package_id'] ?? null) !== null) {
            $obj->audiencePackageId = (int) $v;
        }
        if (($v = $data['audit_reject_reason'] ?? null) !== null) {
            $obj->auditRejectReason = (string) $v;
        }
        if (($v = $data['auto_inherit_switch'] ?? null) !== null) {
            $obj->autoInheritSwitch = (string) $v;
        }
        if (($v = $data['auto_update_keyword'] ?? null) !== null) {
            $obj->autoUpdateKeyword = (string) $v;
        }
        if (($v = $data['aweme_account'] ?? null) !== null) {
            $obj->awemeAccount = (string) $v;
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['category_type'] ?? null) !== null) {
            $obj->categoryType = (string) $v;
        }
        if (($v = $data['convert_id'] ?? null) !== null) {
            $obj->convertId = (int) $v;
        }
        if (($v = $data['converted_time_duration'] ?? null) !== null) {
            $obj->convertedTimeDuration = (string) $v;
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
        if (($v = $data['delivery_phase'] ?? null) !== null) {
            $obj->deliveryPhase = (string) $v;
        }
        if (($v = $data['delivery_range'] ?? null) !== null) {
            $obj->deliveryRange = (string) $v;
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
        if (($v = $data['dpa_adtype'] ?? null) !== null) {
            $obj->dpaAdtype = (string) $v;
        }
        if (($v = $data['dpa_categories'] ?? null) !== null && is_array($v)) {
            $obj->dpaCategories = $v;
        }
        if (($v = $data['dpa_city'] ?? null) !== null) {
            $obj->dpaCity = (int) $v;
        }
        if (($v = $data['dpa_external_url_field'] ?? null) !== null) {
            $obj->dpaExternalUrlField = (string) $v;
        }
        if (($v = $data['dpa_external_urls'] ?? null) !== null && is_array($v)) {
            $obj->dpaExternalUrls = $v;
        }
        if (($v = $data['dpa_lbs'] ?? null) !== null) {
            $obj->dpaLbs = (int) $v;
        }
        if (($v = $data['dpa_open_url_field'] ?? null) !== null) {
            $obj->dpaOpenUrlField = (string) $v;
        }
        if (($v = $data['dpa_open_url_type'] ?? null) !== null) {
            $obj->dpaOpenUrlType = (string) $v;
        }
        if (($v = $data['dpa_open_urls'] ?? null) !== null && is_array($v)) {
            $obj->dpaOpenUrls = $v;
        }
        if (($v = $data['dpa_product_target'] ?? null) !== null && is_array($v)) {
            $obj->dpaProductTarget = array_map(fn ($vv) => \Oceanengine\Models\AdGetV2ResponseDataDpaProductTargetInner::fromArray($vv), $v);
        }
        if (($v = $data['dpa_products'] ?? null) !== null && is_array($v)) {
            $obj->dpaProducts = $v;
        }
        if (($v = $data['dpa_province'] ?? null) !== null) {
            $obj->dpaProvince = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['external_actions'] ?? null) !== null && is_array($v)) {
            $obj->externalActions = $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['external_url_params'] ?? null) !== null) {
            $obj->externalUrlParams = (string) $v;
        }
        if (($v = $data['feed_delivery_search'] ?? null) !== null) {
            $obj->feedDeliverySearch = (string) $v;
        }
        if (($v = $data['flow_control_mode'] ?? null) !== null) {
            $obj->flowControlMode = (string) $v;
        }
        if (($v = $data['form_id'] ?? null) !== null) {
            $obj->formId = (int) $v;
        }
        if (($v = $data['form_index'] ?? null) !== null) {
            $obj->formIndex = (int) $v;
        }
        if (($v = $data['game_package_batch_id'] ?? null) !== null) {
            $obj->gamePackageBatchId = (int) $v;
        }
        if (($v = $data['game_package_desc'] ?? null) !== null) {
            $obj->gamePackageDesc = (string) $v;
        }
        if (($v = $data['game_package_thumbnail_ids'] ?? null) !== null && is_array($v)) {
            $obj->gamePackageThumbnailIds = $v;
        }
        if (($v = $data['hide_if_converted'] ?? null) !== null) {
            $obj->hideIfConverted = (string) $v;
        }
        if (($v = $data['hide_if_exists'] ?? null) !== null) {
            $obj->hideIfExists = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['inherit_type'] ?? null) !== null) {
            $obj->inheritType = (string) $v;
        }
        if (($v = $data['inherited_advertiser_id'] ?? null) !== null && is_array($v)) {
            $obj->inheritedAdvertiserId = $v;
        }
        if (($v = $data['intelligent_flow_switch'] ?? null) !== null) {
            $obj->intelligentFlowSwitch = (string) $v;
        }
        if (($v = $data['inventory_catalog'] ?? null) !== null) {
            $obj->inventoryCatalog = (string) $v;
        }
        if (($v = $data['inventory_type'] ?? null) !== null && is_array($v)) {
            $obj->inventoryType = $v;
        }
        if (($v = $data['landing_page_stay_time'] ?? null) !== null) {
            $obj->landingPageStayTime = (int) $v;
        }
        if (($v = $data['launch_target_type'] ?? null) !== null) {
            $obj->launchTargetType = (string) $v;
        }
        if (($v = $data['luban_roi_goal'] ?? null) !== null) {
            $obj->lubanRoiGoal = (float) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['open_url_params'] ?? null) !== null) {
            $obj->openUrlParams = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['package'] ?? null) !== null) {
            $obj->package = (string) $v;
        }
        if (($v = $data['params_type'] ?? null) !== null) {
            $obj->paramsType = (string) $v;
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
        if (($v = $data['promotion_type'] ?? null) !== null) {
            $obj->promotionType = (string) $v;
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
        }
        if (($v = $data['quick_app_url'] ?? null) !== null) {
            $obj->quickAppUrl = (string) $v;
        }
        if (($v = $data['retention_bid'] ?? null) !== null) {
            $obj->retentionBid = (float) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['scene_inventory'] ?? null) !== null) {
            $obj->sceneInventory = (string) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['search_bid_ratio'] ?? null) !== null) {
            $obj->searchBidRatio = (float) $v;
        }
        if (($v = $data['shop_info'] ?? null) !== null && is_array($v)) {
            $obj->shopInfo = \Oceanengine\Models\AdGetV2ResponseDataShopInfo::fromArray($v);
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        if (($v = $data['smart_inventory'] ?? null) !== null) {
            $obj->smartInventory = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['store_type'] ?? null) !== null) {
            $obj->storeType = (string) $v;
        }
        if (($v = $data['storepro_pack_id'] ?? null) !== null) {
            $obj->storeproPackId = (int) $v;
        }
        if (($v = $data['storepro_unit'] ?? null) !== null) {
            $obj->storeproUnit = (string) $v;
        }
        if (($v = $data['subscribe_url'] ?? null) !== null) {
            $obj->subscribeUrl = (string) $v;
        }
        if (($v = $data['target_cvr'] ?? null) !== null) {
            $obj->targetCvr = (int) $v;
        }
        if (($v = $data['track_url'] ?? null) !== null && is_array($v)) {
            $obj->trackUrl = $v;
        }
        if (($v = $data['track_url_group_id'] ?? null) !== null) {
            $obj->trackUrlGroupId = (int) $v;
        }
        if (($v = $data['track_url_group_type'] ?? null) !== null) {
            $obj->trackUrlGroupType = (string) $v;
        }
        if (($v = $data['track_url_send_type'] ?? null) !== null) {
            $obj->trackUrlSendType = (string) $v;
        }
        if (($v = $data['ud_shop'] ?? null) !== null && is_array($v)) {
            $obj->udShop = \Oceanengine\Models\AdGetV2ResponseDataUdShop::fromArray($v);
        }
        if (($v = $data['ulink'] ?? null) !== null) {
            $obj->ulink = (string) $v;
        }
        if (($v = $data['union_video_type'] ?? null) !== null) {
            $obj->unionVideoType = (string) $v;
        }
        if (($v = $data['value_optimized_open'] ?? null) !== null) {
            $obj->valueOptimizedOpen = (int) $v;
        }
        if (($v = $data['value_optimized_type'] ?? null) !== null) {
            $obj->valueOptimizedType = (int) $v;
        }
        if (($v = $data['video_play_done_track_url'] ?? null) !== null && is_array($v)) {
            $obj->videoPlayDoneTrackUrl = $v;
        }
        if (($v = $data['video_play_effective_track_url'] ?? null) !== null && is_array($v)) {
            $obj->videoPlayEffectiveTrackUrl = $v;
        }
        if (($v = $data['video_play_track_url'] ?? null) !== null && is_array($v)) {
            $obj->videoPlayTrackUrl = $v;
        }
        return $obj;
    }
}
