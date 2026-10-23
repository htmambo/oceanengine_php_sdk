<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectCreateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ProjectCreateV30AdType
     */
    protected ?string $adType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $advertisingVolume = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30AigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30AppPromotionType
     */
    protected ?string $appPromotionType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30AssetType
     */
    protected ?string $assetType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30RequestAudience
     */
    protected ?\Oceanengine\Models\ProjectCreateV30RequestAudience $audience = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30AudienceExtend
     */
    protected ?string $audienceExtend = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30AutoExtendTraffic
     */
    protected ?string $autoExtendTraffic = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30RequestBlueFlowPackage
     */
    protected ?\Oceanengine\Models\ProjectCreateV30RequestBlueFlowPackage $blueFlowPackage = null;

    /**
     * @var int
     */
    protected ?int $budgetGroupId = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30Classify
     */
    protected ?string $classify = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30RequestDeliveryRange
     */
    protected ?\Oceanengine\Models\ProjectCreateV30RequestDeliveryRange $deliveryRange = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\ProjectCreateV30RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DownloadMode
     */
    protected ?string $downloadMode = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DownloadType
     */
    protected ?string $downloadType = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30DpaAdtype
     */
    protected ?string $dpaAdtype = null;

    /**
     * 自定义筛选条件（商品投放条件）。用于圈定商品投放范围，结合商品库字段搭配判断条件，圈定商品投放范围。获取商品库元信息-商品广告-商业开放平台
     * @var \Oceanengine\Models\ProjectCreateV30RequestDpaProductTargetInner[]
     */
    protected ?array $dpaProductTarget = null;

    /**
     * @var string
     */
    protected ?string $itemNumber = null;

    /**
     * 关键词列表
     * @var \Oceanengine\Models\ProjectCreateV30RequestKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30LandingPageStayTime
     */
    protected ?string $landingPageStayTime = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30LandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30LaunchType
     */
    protected ?string $launchType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30MarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var int
     */
    protected ?int $microAppInstanceId = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30MicroPromotionType
     */
    protected ?string $microPromotionType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30MultiAssetType
     */
    protected ?string $multiAssetType = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30RequestNativeSetting
     */
    protected ?\Oceanengine\Models\ProjectCreateV30RequestNativeSetting $nativeSetting = null;

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
     * @var \Oceanengine\Models\ProjectCreateV30OpenUrlType
     */
    protected ?string $openUrlType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30Operation
     */
    protected ?string $operation = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30RequestOptimizeGoal
     */
    protected ?\Oceanengine\Models\ProjectCreateV30RequestOptimizeGoal $optimizeGoal = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30PromotionType
     */
    protected ?string $promotionType = null;

    /**
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30RequestRelatedProduct
     */
    protected ?\Oceanengine\Models\ProjectCreateV30RequestRelatedProduct $relatedProduct = null;

    /**
     * @var int
     */
    protected ?int $rtaId = null;

    /**
     * 出价系数
     * @var float
     */
    protected ?float $searchBidRatio = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30StarAutoDeliverySwitch
     */
    protected ?string $starAutoDeliverySwitch = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30StarAutoMaterialAdditionSwitch
     */
    protected ?string $starAutoMaterialAdditionSwitch = null;

    /**
     * 星广联投二期任务id
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * @var string
     */
    protected ?string $subscribeUrl = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30RequestTrackUrlSetting
     */
    protected ?\Oceanengine\Models\ProjectCreateV30RequestTrackUrlSetting $trackUrlSetting = null;

    /**
     * @var string
     */
    protected ?string $ulinkUrl = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30UlinkUrlType
     */
    protected ?string $ulinkUrlType = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30ValueOptimizedType
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
     * @return \Oceanengine\Models\ProjectCreateV30AdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30AdType $adType
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
     * @return int
     */
    public function getAdvertisingVolume(): ?int
    {
        return $this->advertisingVolume;
    }

    /**
     * @param int $advertisingVolume
     * @return self
     */
    public function setAdvertisingVolume(?int $advertisingVolume): self
    {
        $this->advertisingVolume = $advertisingVolume;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30AigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30AigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
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
     * @return \Oceanengine\Models\ProjectCreateV30AppPromotionType
     */
    public function getAppPromotionType(): ?string
    {
        return $this->appPromotionType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30AppPromotionType $appPromotionType
     * @return self
     */
    public function setAppPromotionType(?string $appPromotionType): self
    {
        $this->appPromotionType = $appPromotionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30AssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30AssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\ProjectCreateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\ProjectCreateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30AudienceExtend
     */
    public function getAudienceExtend(): ?string
    {
        return $this->audienceExtend;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30AudienceExtend $audienceExtend
     * @return self
     */
    public function setAudienceExtend(?string $audienceExtend): self
    {
        $this->audienceExtend = $audienceExtend;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30AutoExtendTraffic
     */
    public function getAutoExtendTraffic(): ?string
    {
        return $this->autoExtendTraffic;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30AutoExtendTraffic $autoExtendTraffic
     * @return self
     */
    public function setAutoExtendTraffic(?string $autoExtendTraffic): self
    {
        $this->autoExtendTraffic = $autoExtendTraffic;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30RequestBlueFlowPackage
     */
    public function getBlueFlowPackage(): ?\Oceanengine\Models\ProjectCreateV30RequestBlueFlowPackage
    {
        return $this->blueFlowPackage;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30RequestBlueFlowPackage $blueFlowPackage
     * @return self
     */
    public function setBlueFlowPackage(?\Oceanengine\Models\ProjectCreateV30RequestBlueFlowPackage $blueFlowPackage): self
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
     * @return \Oceanengine\Models\ProjectCreateV30Classify
     */
    public function getClassify(): ?string
    {
        return $this->classify;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30Classify $classify
     * @return self
     */
    public function setClassify(?string $classify): self
    {
        $this->classify = $classify;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30RequestDeliveryRange
     */
    public function getDeliveryRange(): ?\Oceanengine\Models\ProjectCreateV30RequestDeliveryRange
    {
        return $this->deliveryRange;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30RequestDeliveryRange $deliveryRange
     * @return self
     */
    public function setDeliveryRange(?\Oceanengine\Models\ProjectCreateV30RequestDeliveryRange $deliveryRange): self
    {
        $this->deliveryRange = $deliveryRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\ProjectCreateV30RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\ProjectCreateV30RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DownloadMode
     */
    public function getDownloadMode(): ?string
    {
        return $this->downloadMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DownloadMode $downloadMode
     * @return self
     */
    public function setDownloadMode(?string $downloadMode): self
    {
        $this->downloadMode = $downloadMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30DownloadType
     */
    public function getDownloadType(): ?string
    {
        return $this->downloadType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DownloadType $downloadType
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
     * @return \Oceanengine\Models\ProjectCreateV30DpaAdtype
     */
    public function getDpaAdtype(): ?string
    {
        return $this->dpaAdtype;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30DpaAdtype $dpaAdtype
     * @return self
     */
    public function setDpaAdtype(?string $dpaAdtype): self
    {
        $this->dpaAdtype = $dpaAdtype;
        return $this;
    }

    /**
     * 自定义筛选条件（商品投放条件）。用于圈定商品投放范围，结合商品库字段搭配判断条件，圈定商品投放范围。获取商品库元信息-商品广告-商业开放平台
     * @return \Oceanengine\Models\ProjectCreateV30RequestDpaProductTargetInner[]
     */
    public function getDpaProductTarget(): ?array
    {
        return $this->dpaProductTarget;
    }

    /**
     * 自定义筛选条件（商品投放条件）。用于圈定商品投放范围，结合商品库字段搭配判断条件，圈定商品投放范围。获取商品库元信息-商品广告-商业开放平台
     * @param \Oceanengine\Models\ProjectCreateV30RequestDpaProductTargetInner[] $dpaProductTarget
     * @return self
     */
    public function setDpaProductTarget(?array $dpaProductTarget): self
    {
        $this->dpaProductTarget = $dpaProductTarget;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemNumber(): ?string
    {
        return $this->itemNumber;
    }

    /**
     * @param string $itemNumber
     * @return self
     */
    public function setItemNumber(?string $itemNumber): self
    {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    /**
     * 关键词列表
     * @return \Oceanengine\Models\ProjectCreateV30RequestKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * 关键词列表
     * @param \Oceanengine\Models\ProjectCreateV30RequestKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30LandingPageStayTime
     */
    public function getLandingPageStayTime(): ?string
    {
        return $this->landingPageStayTime;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30LandingPageStayTime $landingPageStayTime
     * @return self
     */
    public function setLandingPageStayTime(?string $landingPageStayTime): self
    {
        $this->landingPageStayTime = $landingPageStayTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30LandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30LandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30LaunchType
     */
    public function getLaunchType(): ?string
    {
        return $this->launchType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30LaunchType $launchType
     * @return self
     */
    public function setLaunchType(?string $launchType): self
    {
        $this->launchType = $launchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return int
     */
    public function getMicroAppInstanceId(): ?int
    {
        return $this->microAppInstanceId;
    }

    /**
     * @param int $microAppInstanceId
     * @return self
     */
    public function setMicroAppInstanceId(?int $microAppInstanceId): self
    {
        $this->microAppInstanceId = $microAppInstanceId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30MicroPromotionType
     */
    public function getMicroPromotionType(): ?string
    {
        return $this->microPromotionType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30MicroPromotionType $microPromotionType
     * @return self
     */
    public function setMicroPromotionType(?string $microPromotionType): self
    {
        $this->microPromotionType = $microPromotionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30MultiAssetType
     */
    public function getMultiAssetType(): ?string
    {
        return $this->multiAssetType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30MultiAssetType $multiAssetType
     * @return self
     */
    public function setMultiAssetType(?string $multiAssetType): self
    {
        $this->multiAssetType = $multiAssetType;
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
     * @return \Oceanengine\Models\ProjectCreateV30RequestNativeSetting
     */
    public function getNativeSetting(): ?\Oceanengine\Models\ProjectCreateV30RequestNativeSetting
    {
        return $this->nativeSetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30RequestNativeSetting $nativeSetting
     * @return self
     */
    public function setNativeSetting(?\Oceanengine\Models\ProjectCreateV30RequestNativeSetting $nativeSetting): self
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
     * @return \Oceanengine\Models\ProjectCreateV30OpenUrlType
     */
    public function getOpenUrlType(): ?string
    {
        return $this->openUrlType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30OpenUrlType $openUrlType
     * @return self
     */
    public function setOpenUrlType(?string $openUrlType): self
    {
        $this->openUrlType = $openUrlType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30Operation
     */
    public function getOperation(): ?string
    {
        return $this->operation;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30Operation $operation
     * @return self
     */
    public function setOperation(?string $operation): self
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30RequestOptimizeGoal
     */
    public function getOptimizeGoal(): ?\Oceanengine\Models\ProjectCreateV30RequestOptimizeGoal
    {
        return $this->optimizeGoal;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30RequestOptimizeGoal $optimizeGoal
     * @return self
     */
    public function setOptimizeGoal(?\Oceanengine\Models\ProjectCreateV30RequestOptimizeGoal $optimizeGoal): self
    {
        $this->optimizeGoal = $optimizeGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30PromotionType
     */
    public function getPromotionType(): ?string
    {
        return $this->promotionType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30PromotionType $promotionType
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
     * @return \Oceanengine\Models\ProjectCreateV30RequestRelatedProduct
     */
    public function getRelatedProduct(): ?\Oceanengine\Models\ProjectCreateV30RequestRelatedProduct
    {
        return $this->relatedProduct;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30RequestRelatedProduct $relatedProduct
     * @return self
     */
    public function setRelatedProduct(?\Oceanengine\Models\ProjectCreateV30RequestRelatedProduct $relatedProduct): self
    {
        $this->relatedProduct = $relatedProduct;
        return $this;
    }

    /**
     * @return int
     */
    public function getRtaId(): ?int
    {
        return $this->rtaId;
    }

    /**
     * @param int $rtaId
     * @return self
     */
    public function setRtaId(?int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * 出价系数
     * @return float
     */
    public function getSearchBidRatio(): ?float
    {
        return $this->searchBidRatio;
    }

    /**
     * 出价系数
     * @param float $searchBidRatio
     * @return self
     */
    public function setSearchBidRatio(?float $searchBidRatio): self
    {
        $this->searchBidRatio = $searchBidRatio;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30StarAutoDeliverySwitch
     */
    public function getStarAutoDeliverySwitch(): ?string
    {
        return $this->starAutoDeliverySwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30StarAutoDeliverySwitch $starAutoDeliverySwitch
     * @return self
     */
    public function setStarAutoDeliverySwitch(?string $starAutoDeliverySwitch): self
    {
        $this->starAutoDeliverySwitch = $starAutoDeliverySwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30StarAutoMaterialAdditionSwitch
     */
    public function getStarAutoMaterialAdditionSwitch(): ?string
    {
        return $this->starAutoMaterialAdditionSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30StarAutoMaterialAdditionSwitch $starAutoMaterialAdditionSwitch
     * @return self
     */
    public function setStarAutoMaterialAdditionSwitch(?string $starAutoMaterialAdditionSwitch): self
    {
        $this->starAutoMaterialAdditionSwitch = $starAutoMaterialAdditionSwitch;
        return $this;
    }

    /**
     * 星广联投二期任务id
     * @return int
     */
    public function getStarTaskId(): ?int
    {
        return $this->starTaskId;
    }

    /**
     * 星广联投二期任务id
     * @param int $starTaskId
     * @return self
     */
    public function setStarTaskId(?int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
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
     * @return \Oceanengine\Models\ProjectCreateV30RequestTrackUrlSetting
     */
    public function getTrackUrlSetting(): ?\Oceanengine\Models\ProjectCreateV30RequestTrackUrlSetting
    {
        return $this->trackUrlSetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30RequestTrackUrlSetting $trackUrlSetting
     * @return self
     */
    public function setTrackUrlSetting(?\Oceanengine\Models\ProjectCreateV30RequestTrackUrlSetting $trackUrlSetting): self
    {
        $this->trackUrlSetting = $trackUrlSetting;
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
     * @return \Oceanengine\Models\ProjectCreateV30UlinkUrlType
     */
    public function getUlinkUrlType(): ?string
    {
        return $this->ulinkUrlType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30UlinkUrlType $ulinkUrlType
     * @return self
     */
    public function setUlinkUrlType(?string $ulinkUrlType): self
    {
        $this->ulinkUrlType = $ulinkUrlType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30ValueOptimizedType
     */
    public function getValueOptimizedType(): ?string
    {
        return $this->valueOptimizedType;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30ValueOptimizedType $valueOptimizedType
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
        if ($this->advertisingVolume !== null) {
            $result['advertising_volume'] = $this->advertisingVolume;
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
        if ($this->classify !== null) {
            $result['classify'] = $this->classify;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
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
        if ($this->dpaProductTarget !== null) {
            $result['dpa_product_target'] = $this->dpaProductTarget;
        }
        if ($this->itemNumber !== null) {
            $result['item_number'] = $this->itemNumber;
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
        if ($this->operation !== null) {
            $result['operation'] = $this->operation;
        }
        if ($this->optimizeGoal !== null) {
            $result['optimize_goal'] = $this->optimizeGoal;
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
        if ($this->rtaId !== null) {
            $result['rta_id'] = $this->rtaId;
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
        if ($this->subscribeUrl !== null) {
            $result['subscribe_url'] = $this->subscribeUrl;
        }
        if ($this->trackUrlSetting !== null) {
            $result['track_url_setting'] = $this->trackUrlSetting;
        }
        if ($this->ulinkUrl !== null) {
            $result['ulink_url'] = $this->ulinkUrl;
        }
        if ($this->ulinkUrlType !== null) {
            $result['ulink_url_type'] = $this->ulinkUrlType;
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
        if (($v = $data['advertising_volume'] ?? null) !== null) {
            $obj->advertisingVolume = (int) $v;
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
            $obj->audience = \Oceanengine\Models\ProjectCreateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['audience_extend'] ?? null) !== null) {
            $obj->audienceExtend = (string) $v;
        }
        if (($v = $data['auto_extend_traffic'] ?? null) !== null) {
            $obj->autoExtendTraffic = (string) $v;
        }
        if (($v = $data['blue_flow_package'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowPackage = \Oceanengine\Models\ProjectCreateV30RequestBlueFlowPackage::fromArray($v);
        }
        if (($v = $data['budget_group_id'] ?? null) !== null) {
            $obj->budgetGroupId = (int) $v;
        }
        if (($v = $data['classify'] ?? null) !== null) {
            $obj->classify = (string) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null) {
            $obj->deliveryMode = (string) $v;
        }
        if (($v = $data['delivery_range'] ?? null) !== null && is_array($v)) {
            $obj->deliveryRange = \Oceanengine\Models\ProjectCreateV30RequestDeliveryRange::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\ProjectCreateV30RequestDeliverySetting::fromArray($v);
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
        if (($v = $data['dpa_product_target'] ?? null) !== null && is_array($v)) {
            $obj->dpaProductTarget = array_map(fn ($vv) => \Oceanengine\Models\ProjectCreateV30RequestDpaProductTargetInner::fromArray($vv), $v);
        }
        if (($v = $data['item_number'] ?? null) !== null) {
            $obj->itemNumber = (string) $v;
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\ProjectCreateV30RequestKeywordsInner::fromArray($vv), $v);
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
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['native_setting'] ?? null) !== null && is_array($v)) {
            $obj->nativeSetting = \Oceanengine\Models\ProjectCreateV30RequestNativeSetting::fromArray($v);
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
        if (($v = $data['operation'] ?? null) !== null) {
            $obj->operation = (string) $v;
        }
        if (($v = $data['optimize_goal'] ?? null) !== null && is_array($v)) {
            $obj->optimizeGoal = \Oceanengine\Models\ProjectCreateV30RequestOptimizeGoal::fromArray($v);
        }
        if (($v = $data['promotion_type'] ?? null) !== null) {
            $obj->promotionType = (string) $v;
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
        }
        if (($v = $data['related_product'] ?? null) !== null && is_array($v)) {
            $obj->relatedProduct = \Oceanengine\Models\ProjectCreateV30RequestRelatedProduct::fromArray($v);
        }
        if (($v = $data['rta_id'] ?? null) !== null) {
            $obj->rtaId = (int) $v;
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
        if (($v = $data['subscribe_url'] ?? null) !== null) {
            $obj->subscribeUrl = (string) $v;
        }
        if (($v = $data['track_url_setting'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlSetting = \Oceanengine\Models\ProjectCreateV30RequestTrackUrlSetting::fromArray($v);
        }
        if (($v = $data['ulink_url'] ?? null) !== null) {
            $obj->ulinkUrl = (string) $v;
        }
        if (($v = $data['ulink_url_type'] ?? null) !== null) {
            $obj->ulinkUrlType = (string) $v;
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
        return $obj;
    }
}
