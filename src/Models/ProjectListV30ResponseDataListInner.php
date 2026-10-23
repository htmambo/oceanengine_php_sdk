<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ProjectListV30DataListAdType
     */
    protected ?string $adType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListAigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListAppPromotionType
     */
    protected ?string $appPromotionType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListAssetType
     */
    protected ?string $assetType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerAudience
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerAudience $audience = null;

    /**
     * @var string
     */
    protected ?string $audienceExtend = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListAutoExtendTraffic
     */
    protected ?string $autoExtendTraffic = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerBlueFlowPackage
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerBlueFlowPackage $blueFlowPackage = null;

    /**
     * @var int
     */
    protected ?int $budgetGroupId = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliveryMedium
     */
    protected ?string $deliveryMedium = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliveryProduct
     */
    protected ?string $deliveryProduct = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliveryRange
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliveryRange $deliveryRange = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySetting
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDownloadMode
     */
    protected ?string $downloadMode = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDownloadType
     */
    protected ?string $downloadType = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListDpaAdtype
     */
    protected ?string $dpaAdtype = null;

    /**
     * @var int[]
     */
    protected ?array $dpaCategories = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerDpaProductTargetInner[]
     */
    protected ?array $dpaProductTarget = null;

    /**
     * @var int
     */
    protected ?int $durationCount = null;

    /**
     * @var string
     */
    protected ?string $feedDeliverySearch = null;

    /**
     * @var bool
     */
    protected ?bool $ifNewcustomerdelivery = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerInternalAdvertiserInfo
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerInternalAdvertiserInfo $internalAdvertiserInfo = null;

    /**
     * 关键词
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListLandingPageStayTime
     */
    protected ?string $landingPageStayTime = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListLaunchType
     */
    protected ?string $launchType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 对应「创建字节小程序」接口获取的instance_id
     * @var int
     */
    protected ?int $microAppInstanceId = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListMicroPromotionType
     */
    protected ?string $microPromotionType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListMultiAssetType
     */
    protected ?string $multiAssetType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListMultiDeliveryMedium
     */
    protected ?string $multiDeliveryMedium = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerNativeSetting
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerNativeSetting $nativeSetting = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var string
     */
    protected ?string $openUrlField = null;

    /**
     * @var string
     */
    protected ?string $openUrlParams = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListOpenUrlType
     */
    protected ?string $openUrlType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerOptimizeGoal
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerOptimizeGoal $optimizeGoal = null;

    /**
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListPricing
     */
    protected ?string $pricing = null;

    /**
     * @var string
     */
    protected ?string $projectCreateTime = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var string
     */
    protected ?string $projectModifyTime = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListPromotionType
     */
    protected ?string $promotionType = null;

    /**
     * 对应「查询快应用信息」接口获取的quick_app_id
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProduct
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProduct $relatedProduct = null;

    /**
     * @var float
     */
    protected ?float $searchBidRatio = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListStarAutoDeliverySwitch
     */
    protected ?string $starAutoDeliverySwitch = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListStarAutoMaterialAdditionSwitch
     */
    protected ?string $starAutoMaterialAdditionSwitch = null;

    /**
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListStarTaskVersion
     */
    protected ?string $starTaskVersion = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListStatusFirst
     */
    protected ?string $statusFirst = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListStatusSecond[]
     */
    protected ?array $statusSecond = null;

    /**
     * @var string
     */
    protected ?string $subscribeUrl = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerTrackUrlSetting
     */
    protected ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerTrackUrlSetting $trackUrlSetting = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListUlinkType
     */
    protected ?string $ulinkType = null;

    /**
     * @var string
     */
    protected ?string $ulinkUrl = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListValueOptimizedType
     */
    protected ?string $valueOptimizedType = null;

    /**
     * 云图品牌ID
     * @var int
     */
    protected ?int $yuntu5aBrandId = null;

    /**
     * 云图品牌版行业ID
     * @var int
     */
    protected ?int $yuntu5aBrandMainIndustryId = null;

    /**
     * 云图品牌名称
     * @var string
     */
    protected ?string $yuntu5aBrandName = null;

    /**
     * 云图品牌版行业名称
     * @var string
     */
    protected ?string $yuntu5aIndustryName = null;

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListAdType $adType
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
     * @return \Oceanengine\Models\ProjectListV30DataListAigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListAigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
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
     * @return \Oceanengine\Models\ProjectListV30DataListAppPromotionType
     */
    public function getAppPromotionType(): ?string
    {
        return $this->appPromotionType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListAppPromotionType $appPromotionType
     * @return self
     */
    public function setAppPromotionType(?string $appPromotionType): self
    {
        $this->appPromotionType = $appPromotionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListAssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListAssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerAudience
     */
    public function getAudience(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudienceExtend(): ?string
    {
        return $this->audienceExtend;
    }

    /**
     * @param string $audienceExtend
     * @return self
     */
    public function setAudienceExtend(?string $audienceExtend): self
    {
        $this->audienceExtend = $audienceExtend;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListAutoExtendTraffic
     */
    public function getAutoExtendTraffic(): ?string
    {
        return $this->autoExtendTraffic;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListAutoExtendTraffic $autoExtendTraffic
     * @return self
     */
    public function setAutoExtendTraffic(?string $autoExtendTraffic): self
    {
        $this->autoExtendTraffic = $autoExtendTraffic;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerBlueFlowPackage
     */
    public function getBlueFlowPackage(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerBlueFlowPackage
    {
        return $this->blueFlowPackage;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerBlueFlowPackage $blueFlowPackage
     * @return self
     */
    public function setBlueFlowPackage(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerBlueFlowPackage $blueFlowPackage): self
    {
        $this->blueFlowPackage = $blueFlowPackage;
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
     * @return \Oceanengine\Models\ProjectListV30DataListDeliveryMedium
     */
    public function getDeliveryMedium(): ?string
    {
        return $this->deliveryMedium;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliveryMedium $deliveryMedium
     * @return self
     */
    public function setDeliveryMedium(?string $deliveryMedium): self
    {
        $this->deliveryMedium = $deliveryMedium;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliveryProduct
     */
    public function getDeliveryProduct(): ?string
    {
        return $this->deliveryProduct;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliveryProduct $deliveryProduct
     * @return self
     */
    public function setDeliveryProduct(?string $deliveryProduct): self
    {
        $this->deliveryProduct = $deliveryProduct;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliveryRange
     */
    public function getDeliveryRange(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliveryRange
    {
        return $this->deliveryRange;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliveryRange $deliveryRange
     * @return self
     */
    public function setDeliveryRange(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliveryRange $deliveryRange): self
    {
        $this->deliveryRange = $deliveryRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDownloadMode
     */
    public function getDownloadMode(): ?string
    {
        return $this->downloadMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDownloadMode $downloadMode
     * @return self
     */
    public function setDownloadMode(?string $downloadMode): self
    {
        $this->downloadMode = $downloadMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListDownloadType
     */
    public function getDownloadType(): ?string
    {
        return $this->downloadType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDownloadType $downloadType
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
     * @return \Oceanengine\Models\ProjectListV30DataListDpaAdtype
     */
    public function getDpaAdtype(): ?string
    {
        return $this->dpaAdtype;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListDpaAdtype $dpaAdtype
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
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerDpaProductTargetInner[]
     */
    public function getDpaProductTarget(): ?array
    {
        return $this->dpaProductTarget;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerDpaProductTargetInner[] $dpaProductTarget
     * @return self
     */
    public function setDpaProductTarget(?array $dpaProductTarget): self
    {
        $this->dpaProductTarget = $dpaProductTarget;
        return $this;
    }

    /**
     * @return int
     */
    public function getDurationCount(): ?int
    {
        return $this->durationCount;
    }

    /**
     * @param int $durationCount
     * @return self
     */
    public function setDurationCount(?int $durationCount): self
    {
        $this->durationCount = $durationCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeedDeliverySearch(): ?string
    {
        return $this->feedDeliverySearch;
    }

    /**
     * @param string $feedDeliverySearch
     * @return self
     */
    public function setFeedDeliverySearch(?string $feedDeliverySearch): self
    {
        $this->feedDeliverySearch = $feedDeliverySearch;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIfNewcustomerdelivery(): ?bool
    {
        return $this->ifNewcustomerdelivery;
    }

    /**
     * @param bool $ifNewcustomerdelivery
     * @return self
     */
    public function setIfNewcustomerdelivery(?bool $ifNewcustomerdelivery): self
    {
        $this->ifNewcustomerdelivery = $ifNewcustomerdelivery;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerInternalAdvertiserInfo
     */
    public function getInternalAdvertiserInfo(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerInternalAdvertiserInfo
    {
        return $this->internalAdvertiserInfo;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerInternalAdvertiserInfo $internalAdvertiserInfo
     * @return self
     */
    public function setInternalAdvertiserInfo(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerInternalAdvertiserInfo $internalAdvertiserInfo): self
    {
        $this->internalAdvertiserInfo = $internalAdvertiserInfo;
        return $this;
    }

    /**
     * 关键词
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * 关键词
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListLandingPageStayTime
     */
    public function getLandingPageStayTime(): ?string
    {
        return $this->landingPageStayTime;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListLandingPageStayTime $landingPageStayTime
     * @return self
     */
    public function setLandingPageStayTime(?string $landingPageStayTime): self
    {
        $this->landingPageStayTime = $landingPageStayTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListLaunchType
     */
    public function getLaunchType(): ?string
    {
        return $this->launchType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListLaunchType $launchType
     * @return self
     */
    public function setLaunchType(?string $launchType): self
    {
        $this->launchType = $launchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 对应「创建字节小程序」接口获取的instance_id
     * @return int
     */
    public function getMicroAppInstanceId(): ?int
    {
        return $this->microAppInstanceId;
    }

    /**
     * 对应「创建字节小程序」接口获取的instance_id
     * @param int $microAppInstanceId
     * @return self
     */
    public function setMicroAppInstanceId(?int $microAppInstanceId): self
    {
        $this->microAppInstanceId = $microAppInstanceId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListMicroPromotionType
     */
    public function getMicroPromotionType(): ?string
    {
        return $this->microPromotionType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListMicroPromotionType $microPromotionType
     * @return self
     */
    public function setMicroPromotionType(?string $microPromotionType): self
    {
        $this->microPromotionType = $microPromotionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListMultiAssetType
     */
    public function getMultiAssetType(): ?string
    {
        return $this->multiAssetType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListMultiAssetType $multiAssetType
     * @return self
     */
    public function setMultiAssetType(?string $multiAssetType): self
    {
        $this->multiAssetType = $multiAssetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListMultiDeliveryMedium
     */
    public function getMultiDeliveryMedium(): ?string
    {
        return $this->multiDeliveryMedium;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListMultiDeliveryMedium $multiDeliveryMedium
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
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerNativeSetting
     */
    public function getNativeSetting(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerNativeSetting
    {
        return $this->nativeSetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerNativeSetting $nativeSetting
     * @return self
     */
    public function setNativeSetting(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerNativeSetting $nativeSetting): self
    {
        $this->nativeSetting = $nativeSetting;
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
    public function getOpenUrlField(): ?string
    {
        return $this->openUrlField;
    }

    /**
     * @param string $openUrlField
     * @return self
     */
    public function setOpenUrlField(?string $openUrlField): self
    {
        $this->openUrlField = $openUrlField;
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
     * @return \Oceanengine\Models\ProjectListV30DataListOpenUrlType
     */
    public function getOpenUrlType(): ?string
    {
        return $this->openUrlType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListOpenUrlType $openUrlType
     * @return self
     */
    public function setOpenUrlType(?string $openUrlType): self
    {
        $this->openUrlType = $openUrlType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerOptimizeGoal
     */
    public function getOptimizeGoal(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerOptimizeGoal
    {
        return $this->optimizeGoal;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerOptimizeGoal $optimizeGoal
     * @return self
     */
    public function setOptimizeGoal(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerOptimizeGoal $optimizeGoal): self
    {
        $this->optimizeGoal = $optimizeGoal;
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
     * @return \Oceanengine\Models\ProjectListV30DataListPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListPricing $pricing
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
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
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
     * @return \Oceanengine\Models\ProjectListV30DataListPromotionType
     */
    public function getPromotionType(): ?string
    {
        return $this->promotionType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListPromotionType $promotionType
     * @return self
     */
    public function setPromotionType(?string $promotionType): self
    {
        $this->promotionType = $promotionType;
        return $this;
    }

    /**
     * 对应「查询快应用信息」接口获取的quick_app_id
     * @return int
     */
    public function getQuickAppId(): ?int
    {
        return $this->quickAppId;
    }

    /**
     * 对应「查询快应用信息」接口获取的quick_app_id
     * @param int $quickAppId
     * @return self
     */
    public function setQuickAppId(?int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProduct
     */
    public function getRelatedProduct(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProduct
    {
        return $this->relatedProduct;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProduct $relatedProduct
     * @return self
     */
    public function setRelatedProduct(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProduct $relatedProduct): self
    {
        $this->relatedProduct = $relatedProduct;
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
     * @return \Oceanengine\Models\ProjectListV30DataListStarAutoDeliverySwitch
     */
    public function getStarAutoDeliverySwitch(): ?string
    {
        return $this->starAutoDeliverySwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListStarAutoDeliverySwitch $starAutoDeliverySwitch
     * @return self
     */
    public function setStarAutoDeliverySwitch(?string $starAutoDeliverySwitch): self
    {
        $this->starAutoDeliverySwitch = $starAutoDeliverySwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListStarAutoMaterialAdditionSwitch
     */
    public function getStarAutoMaterialAdditionSwitch(): ?string
    {
        return $this->starAutoMaterialAdditionSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListStarAutoMaterialAdditionSwitch $starAutoMaterialAdditionSwitch
     * @return self
     */
    public function setStarAutoMaterialAdditionSwitch(?string $starAutoMaterialAdditionSwitch): self
    {
        $this->starAutoMaterialAdditionSwitch = $starAutoMaterialAdditionSwitch;
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
     * @return \Oceanengine\Models\ProjectListV30DataListStarTaskVersion
     */
    public function getStarTaskVersion(): ?string
    {
        return $this->starTaskVersion;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListStarTaskVersion $starTaskVersion
     * @return self
     */
    public function setStarTaskVersion(?string $starTaskVersion): self
    {
        $this->starTaskVersion = $starTaskVersion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListStatusFirst
     */
    public function getStatusFirst(): ?string
    {
        return $this->statusFirst;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListStatusFirst $statusFirst
     * @return self
     */
    public function setStatusFirst(?string $statusFirst): self
    {
        $this->statusFirst = $statusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListStatusSecond[]
     */
    public function getStatusSecond(): ?array
    {
        return $this->statusSecond;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListStatusSecond[] $statusSecond
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
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerTrackUrlSetting
     */
    public function getTrackUrlSetting(): ?\Oceanengine\Models\ProjectListV30ResponseDataListInnerTrackUrlSetting
    {
        return $this->trackUrlSetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerTrackUrlSetting $trackUrlSetting
     * @return self
     */
    public function setTrackUrlSetting(?\Oceanengine\Models\ProjectListV30ResponseDataListInnerTrackUrlSetting $trackUrlSetting): self
    {
        $this->trackUrlSetting = $trackUrlSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListUlinkType
     */
    public function getUlinkType(): ?string
    {
        return $this->ulinkType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListUlinkType $ulinkType
     * @return self
     */
    public function setUlinkType(?string $ulinkType): self
    {
        $this->ulinkType = $ulinkType;
        return $this;
    }

    /**
     * @return string
     */
    public function getUlinkUrl(): ?string
    {
        return $this->ulinkUrl;
    }

    /**
     * @param string $ulinkUrl
     * @return self
     */
    public function setUlinkUrl(?string $ulinkUrl): self
    {
        $this->ulinkUrl = $ulinkUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListValueOptimizedType
     */
    public function getValueOptimizedType(): ?string
    {
        return $this->valueOptimizedType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListValueOptimizedType $valueOptimizedType
     * @return self
     */
    public function setValueOptimizedType(?string $valueOptimizedType): self
    {
        $this->valueOptimizedType = $valueOptimizedType;
        return $this;
    }

    /**
     * 云图品牌ID
     * @return int
     */
    public function getYuntu5aBrandId(): ?int
    {
        return $this->yuntu5aBrandId;
    }

    /**
     * 云图品牌ID
     * @param int $yuntu5aBrandId
     * @return self
     */
    public function setYuntu5aBrandId(?int $yuntu5aBrandId): self
    {
        $this->yuntu5aBrandId = $yuntu5aBrandId;
        return $this;
    }

    /**
     * 云图品牌版行业ID
     * @return int
     */
    public function getYuntu5aBrandMainIndustryId(): ?int
    {
        return $this->yuntu5aBrandMainIndustryId;
    }

    /**
     * 云图品牌版行业ID
     * @param int $yuntu5aBrandMainIndustryId
     * @return self
     */
    public function setYuntu5aBrandMainIndustryId(?int $yuntu5aBrandMainIndustryId): self
    {
        $this->yuntu5aBrandMainIndustryId = $yuntu5aBrandMainIndustryId;
        return $this;
    }

    /**
     * 云图品牌名称
     * @return string
     */
    public function getYuntu5aBrandName(): ?string
    {
        return $this->yuntu5aBrandName;
    }

    /**
     * 云图品牌名称
     * @param string $yuntu5aBrandName
     * @return self
     */
    public function setYuntu5aBrandName(?string $yuntu5aBrandName): self
    {
        $this->yuntu5aBrandName = $yuntu5aBrandName;
        return $this;
    }

    /**
     * 云图品牌版行业名称
     * @return string
     */
    public function getYuntu5aIndustryName(): ?string
    {
        return $this->yuntu5aIndustryName;
    }

    /**
     * 云图品牌版行业名称
     * @param string $yuntu5aIndustryName
     * @return self
     */
    public function setYuntu5aIndustryName(?string $yuntu5aIndustryName): self
    {
        $this->yuntu5aIndustryName = $yuntu5aIndustryName;
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
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->audienceExtend !== null) {
            $result['audience_extend'] = $this->audienceExtend;
        }
        if ($this->autoExtendTraffic !== null) {
            $result['auto_extend_traffic'] = $this->autoExtendTraffic;
        }
        if ($this->blueFlowPackage !== null) {
            $result['blue_flow_package'] = $this->blueFlowPackage;
        }
        if ($this->budgetGroupId !== null) {
            $result['budget_group_id'] = $this->budgetGroupId;
        }
        if ($this->deliveryMedium !== null) {
            $result['delivery_medium'] = $this->deliveryMedium;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->deliveryProduct !== null) {
            $result['delivery_product'] = $this->deliveryProduct;
        }
        if ($this->deliveryRange !== null) {
            $result['delivery_range'] = $this->deliveryRange;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
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
        if ($this->dpaAdtype !== null) {
            $result['dpa_adtype'] = $this->dpaAdtype;
        }
        if ($this->dpaCategories !== null) {
            $result['dpa_categories'] = $this->dpaCategories;
        }
        if ($this->dpaProductTarget !== null) {
            $result['dpa_product_target'] = $this->dpaProductTarget;
        }
        if ($this->durationCount !== null) {
            $result['duration_count'] = $this->durationCount;
        }
        if ($this->feedDeliverySearch !== null) {
            $result['feed_delivery_search'] = $this->feedDeliverySearch;
        }
        if ($this->ifNewcustomerdelivery !== null) {
            $result['if_newcustomerdelivery'] = $this->ifNewcustomerdelivery;
        }
        if ($this->internalAdvertiserInfo !== null) {
            $result['internal_advertiser_info'] = $this->internalAdvertiserInfo;
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
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->microAppInstanceId !== null) {
            $result['micro_app_instance_id'] = $this->microAppInstanceId;
        }
        if ($this->microPromotionType !== null) {
            $result['micro_promotion_type'] = $this->microPromotionType;
        }
        if ($this->multiAssetType !== null) {
            $result['multi_asset_type'] = $this->multiAssetType;
        }
        if ($this->multiDeliveryMedium !== null) {
            $result['multi_delivery_medium'] = $this->multiDeliveryMedium;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->nativeSetting !== null) {
            $result['native_setting'] = $this->nativeSetting;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->openUrlField !== null) {
            $result['open_url_field'] = $this->openUrlField;
        }
        if ($this->openUrlParams !== null) {
            $result['open_url_params'] = $this->openUrlParams;
        }
        if ($this->openUrlType !== null) {
            $result['open_url_type'] = $this->openUrlType;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->optimizeGoal !== null) {
            $result['optimize_goal'] = $this->optimizeGoal;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
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
        if ($this->promotionType !== null) {
            $result['promotion_type'] = $this->promotionType;
        }
        if ($this->quickAppId !== null) {
            $result['quick_app_id'] = $this->quickAppId;
        }
        if ($this->relatedProduct !== null) {
            $result['related_product'] = $this->relatedProduct;
        }
        if ($this->searchBidRatio !== null) {
            $result['search_bid_ratio'] = $this->searchBidRatio;
        }
        if ($this->starAutoDeliverySwitch !== null) {
            $result['star_auto_delivery_switch'] = $this->starAutoDeliverySwitch;
        }
        if ($this->starAutoMaterialAdditionSwitch !== null) {
            $result['star_auto_material_addition_switch'] = $this->starAutoMaterialAdditionSwitch;
        }
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        if ($this->starTaskVersion !== null) {
            $result['star_task_version'] = $this->starTaskVersion;
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
        if ($this->subscribeUrl !== null) {
            $result['subscribe_url'] = $this->subscribeUrl;
        }
        if ($this->trackUrlSetting !== null) {
            $result['track_url_setting'] = $this->trackUrlSetting;
        }
        if ($this->ulinkType !== null) {
            $result['ulink_type'] = $this->ulinkType;
        }
        if ($this->ulinkUrl !== null) {
            $result['ulink_url'] = $this->ulinkUrl;
        }
        if ($this->valueOptimizedType !== null) {
            $result['value_optimized_type'] = $this->valueOptimizedType;
        }
        if ($this->yuntu5aBrandId !== null) {
            $result['yuntu_5a_brand_id'] = $this->yuntu5aBrandId;
        }
        if ($this->yuntu5aBrandMainIndustryId !== null) {
            $result['yuntu_5a_brand_main_industry_id'] = $this->yuntu5aBrandMainIndustryId;
        }
        if ($this->yuntu5aBrandName !== null) {
            $result['yuntu_5a_brand_name'] = $this->yuntu5aBrandName;
        }
        if ($this->yuntu5aIndustryName !== null) {
            $result['yuntu_5a_industry_name'] = $this->yuntu5aIndustryName;
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
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\ProjectListV30ResponseDataListInnerAudience::fromArray($v);
        }
        if (($v = $data['audience_extend'] ?? null) !== null) {
            $obj->audienceExtend = (string) $v;
        }
        if (($v = $data['auto_extend_traffic'] ?? null) !== null) {
            $obj->autoExtendTraffic = (string) $v;
        }
        if (($v = $data['blue_flow_package'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowPackage = \Oceanengine\Models\ProjectListV30ResponseDataListInnerBlueFlowPackage::fromArray($v);
        }
        if (($v = $data['budget_group_id'] ?? null) !== null) {
            $obj->budgetGroupId = (int) $v;
        }
        if (($v = $data['delivery_medium'] ?? null) !== null) {
            $obj->deliveryMedium = (string) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null) {
            $obj->deliveryMode = (string) $v;
        }
        if (($v = $data['delivery_product'] ?? null) !== null) {
            $obj->deliveryProduct = (string) $v;
        }
        if (($v = $data['delivery_range'] ?? null) !== null && is_array($v)) {
            $obj->deliveryRange = \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliveryRange::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\ProjectListV30ResponseDataListInnerDeliverySetting::fromArray($v);
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
        if (($v = $data['dpa_adtype'] ?? null) !== null) {
            $obj->dpaAdtype = (string) $v;
        }
        if (($v = $data['dpa_categories'] ?? null) !== null && is_array($v)) {
            $obj->dpaCategories = $v;
        }
        if (($v = $data['dpa_product_target'] ?? null) !== null && is_array($v)) {
            $obj->dpaProductTarget = array_map(fn ($vv) => \Oceanengine\Models\ProjectListV30ResponseDataListInnerDpaProductTargetInner::fromArray($vv), $v);
        }
        if (($v = $data['duration_count'] ?? null) !== null) {
            $obj->durationCount = (int) $v;
        }
        if (($v = $data['feed_delivery_search'] ?? null) !== null) {
            $obj->feedDeliverySearch = (string) $v;
        }
        if (($v = $data['if_newcustomerdelivery'] ?? null) !== null) {
            $obj->ifNewcustomerdelivery = (bool) $v;
        }
        if (($v = $data['internal_advertiser_info'] ?? null) !== null && is_array($v)) {
            $obj->internalAdvertiserInfo = \Oceanengine\Models\ProjectListV30ResponseDataListInnerInternalAdvertiserInfo::fromArray($v);
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\ProjectListV30ResponseDataListInnerKeywordsInner::fromArray($vv), $v);
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
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['micro_app_instance_id'] ?? null) !== null) {
            $obj->microAppInstanceId = (int) $v;
        }
        if (($v = $data['micro_promotion_type'] ?? null) !== null) {
            $obj->microPromotionType = (string) $v;
        }
        if (($v = $data['multi_asset_type'] ?? null) !== null) {
            $obj->multiAssetType = (string) $v;
        }
        if (($v = $data['multi_delivery_medium'] ?? null) !== null) {
            $obj->multiDeliveryMedium = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['native_setting'] ?? null) !== null && is_array($v)) {
            $obj->nativeSetting = \Oceanengine\Models\ProjectListV30ResponseDataListInnerNativeSetting::fromArray($v);
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['open_url_field'] ?? null) !== null) {
            $obj->openUrlField = (string) $v;
        }
        if (($v = $data['open_url_params'] ?? null) !== null) {
            $obj->openUrlParams = (string) $v;
        }
        if (($v = $data['open_url_type'] ?? null) !== null) {
            $obj->openUrlType = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['optimize_goal'] ?? null) !== null && is_array($v)) {
            $obj->optimizeGoal = \Oceanengine\Models\ProjectListV30ResponseDataListInnerOptimizeGoal::fromArray($v);
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
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
        if (($v = $data['promotion_type'] ?? null) !== null) {
            $obj->promotionType = (string) $v;
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
        }
        if (($v = $data['related_product'] ?? null) !== null && is_array($v)) {
            $obj->relatedProduct = \Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProduct::fromArray($v);
        }
        if (($v = $data['search_bid_ratio'] ?? null) !== null) {
            $obj->searchBidRatio = (float) $v;
        }
        if (($v = $data['star_auto_delivery_switch'] ?? null) !== null) {
            $obj->starAutoDeliverySwitch = (string) $v;
        }
        if (($v = $data['star_auto_material_addition_switch'] ?? null) !== null) {
            $obj->starAutoMaterialAdditionSwitch = (string) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null) {
            $obj->starTaskId = (int) $v;
        }
        if (($v = $data['star_task_version'] ?? null) !== null) {
            $obj->starTaskVersion = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['status_first'] ?? null) !== null) {
            $obj->statusFirst = (string) $v;
        }
        if (($v = $data['status_second'] ?? null) !== null && is_array($v)) {
            $obj->statusSecond = $v;
        }
        if (($v = $data['subscribe_url'] ?? null) !== null) {
            $obj->subscribeUrl = (string) $v;
        }
        if (($v = $data['track_url_setting'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlSetting = \Oceanengine\Models\ProjectListV30ResponseDataListInnerTrackUrlSetting::fromArray($v);
        }
        if (($v = $data['ulink_type'] ?? null) !== null) {
            $obj->ulinkType = (string) $v;
        }
        if (($v = $data['ulink_url'] ?? null) !== null) {
            $obj->ulinkUrl = (string) $v;
        }
        if (($v = $data['value_optimized_type'] ?? null) !== null) {
            $obj->valueOptimizedType = (string) $v;
        }
        if (($v = $data['yuntu_5a_brand_id'] ?? null) !== null) {
            $obj->yuntu5aBrandId = (int) $v;
        }
        if (($v = $data['yuntu_5a_brand_main_industry_id'] ?? null) !== null) {
            $obj->yuntu5aBrandMainIndustryId = (int) $v;
        }
        if (($v = $data['yuntu_5a_brand_name'] ?? null) !== null) {
            $obj->yuntu5aBrandName = (string) $v;
        }
        if (($v = $data['yuntu_5a_industry_name'] ?? null) !== null) {
            $obj->yuntu5aIndustryName = (string) $v;
        }
        return $obj;
    }
}
