<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 七日内留存天数
     * @var float
     */
    protected ?float $var7dRetention = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListAdDownloadStatus
     */
    protected ?string $adDownloadStatus = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListAigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListAutoExtendTraffic
     */
    protected ?string $autoExtendTraffic = null;

    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerBlueFlowPackage
     */
    protected ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerBlueFlowPackage $blueFlowPackage = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerBrandInfo
     */
    protected ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerBrandInfo $brandInfo = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var int
     */
    protected ?int $configId = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListCreativeAutoGenerateSwitch
     */
    protected ?string $creativeAutoGenerateSwitch = null;

    /**
     * @var float
     */
    protected ?float $deepCpabid = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoal = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListHasCarryMaterial
     */
    protected ?string $hasCarryMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $ifNewcustomerdelivery = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListIsCommentDisable
     */
    protected ?string $isCommentDisable = null;

    /**
     * 搜索广告关键词
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListLearningPhase
     */
    protected ?string $learningPhase = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfo
     */
    protected ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfo $materialScoreInfo = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListMaterialsType
     */
    protected ?string $materialsType = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerNativeSetting
     */
    protected ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerNativeSetting $nativeSetting = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var string
     */
    protected ?string $promotionCreateTime = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterials
     */
    protected ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterials $promotionMaterials = null;

    /**
     * @var string
     */
    protected ?string $promotionModifyTime = null;

    /**
     * @var string
     */
    protected ?string $promotionName = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInner[]
     */
    protected ?array $promotionRelatedProduct = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerShopMultiRoiGoalsInner[]
     */
    protected ?array $shopMultiRoiGoals = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListStarAutoDeliverySwitch
     */
    protected ?string $starAutoDeliverySwitch = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListStarAutoMaterialAdditionSwitch
     */
    protected ?string $starAutoMaterialAdditionSwitch = null;

    /**
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListStarTaskVersion
     */
    protected ?string $starTaskVersion = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListStatusFirst
     */
    protected ?string $statusFirst = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListStatusSecond[]
     */
    protected ?array $statusSecond = null;

    /**
     * @var float
     */
    protected ?float $unionBid = null;

    /**
     * @var float
     */
    protected ?float $unionBidRatio = null;

    /**
     * @var float
     */
    protected ?float $unionCpaBid = null;

    /**
     * @var float
     */
    protected ?float $unionDeepCpabid = null;

    /**
     * @var float
     */
    protected ?float $unionRoiGoal = null;

    /**
     * 七日内留存天数
     * @return float
     */
    public function getVar7dRetention(): ?float
    {
        return $this->var7dRetention;
    }

    /**
     * 七日内留存天数
     * @param float $var7dRetention
     * @return self
     */
    public function setVar7dRetention(?float $var7dRetention): self
    {
        $this->var7dRetention = $var7dRetention;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListAdDownloadStatus
     */
    public function getAdDownloadStatus(): ?string
    {
        return $this->adDownloadStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListAdDownloadStatus $adDownloadStatus
     * @return self
     */
    public function setAdDownloadStatus(?string $adDownloadStatus): self
    {
        $this->adDownloadStatus = $adDownloadStatus;
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
     * @return \Oceanengine\Models\PromotionListV30DataListAigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListAigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListAutoExtendTraffic
     */
    public function getAutoExtendTraffic(): ?string
    {
        return $this->autoExtendTraffic;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListAutoExtendTraffic $autoExtendTraffic
     * @return self
     */
    public function setAutoExtendTraffic(?string $autoExtendTraffic): self
    {
        $this->autoExtendTraffic = $autoExtendTraffic;
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
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerBlueFlowPackage
     */
    public function getBlueFlowPackage(): ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerBlueFlowPackage
    {
        return $this->blueFlowPackage;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerBlueFlowPackage $blueFlowPackage
     * @return self
     */
    public function setBlueFlowPackage(?\Oceanengine\Models\PromotionListV30ResponseDataListInnerBlueFlowPackage $blueFlowPackage): self
    {
        $this->blueFlowPackage = $blueFlowPackage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\PromotionListV30ResponseDataListInnerBrandInfo $brandInfo): self
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
     * @return \Oceanengine\Models\PromotionListV30DataListBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListBudgetMode $budgetMode
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
    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    /**
     * @param int $configId
     * @return self
     */
    public function setConfigId(?int $configId): self
    {
        $this->configId = $configId;
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
     * @return \Oceanengine\Models\PromotionListV30DataListCreativeAutoGenerateSwitch
     */
    public function getCreativeAutoGenerateSwitch(): ?string
    {
        return $this->creativeAutoGenerateSwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListCreativeAutoGenerateSwitch $creativeAutoGenerateSwitch
     * @return self
     */
    public function setCreativeAutoGenerateSwitch(?string $creativeAutoGenerateSwitch): self
    {
        $this->creativeAutoGenerateSwitch = $creativeAutoGenerateSwitch;
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
     * @return \Oceanengine\Models\PromotionListV30DataListHasCarryMaterial
     */
    public function getHasCarryMaterial(): ?string
    {
        return $this->hasCarryMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListHasCarryMaterial $hasCarryMaterial
     * @return self
     */
    public function setHasCarryMaterial(?string $hasCarryMaterial): self
    {
        $this->hasCarryMaterial = $hasCarryMaterial;
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
     * @return \Oceanengine\Models\PromotionListV30DataListIsCommentDisable
     */
    public function getIsCommentDisable(): ?string
    {
        return $this->isCommentDisable;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListIsCommentDisable $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?string $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * 搜索广告关键词
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * 搜索广告关键词
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListLearningPhase
     */
    public function getLearningPhase(): ?string
    {
        return $this->learningPhase;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListLearningPhase $learningPhase
     * @return self
     */
    public function setLearningPhase(?string $learningPhase): self
    {
        $this->learningPhase = $learningPhase;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfo
     */
    public function getMaterialScoreInfo(): ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfo
    {
        return $this->materialScoreInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfo $materialScoreInfo
     * @return self
     */
    public function setMaterialScoreInfo(?\Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfo $materialScoreInfo): self
    {
        $this->materialScoreInfo = $materialScoreInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListMaterialsType
     */
    public function getMaterialsType(): ?string
    {
        return $this->materialsType;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListMaterialsType $materialsType
     * @return self
     */
    public function setMaterialsType(?string $materialsType): self
    {
        $this->materialsType = $materialsType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerNativeSetting
     */
    public function getNativeSetting(): ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerNativeSetting
    {
        return $this->nativeSetting;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerNativeSetting $nativeSetting
     * @return self
     */
    public function setNativeSetting(?\Oceanengine\Models\PromotionListV30ResponseDataListInnerNativeSetting $nativeSetting): self
    {
        $this->nativeSetting = $nativeSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
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
    public function getPromotionCreateTime(): ?string
    {
        return $this->promotionCreateTime;
    }

    /**
     * @param string $promotionCreateTime
     * @return self
     */
    public function setPromotionCreateTime(?string $promotionCreateTime): self
    {
        $this->promotionCreateTime = $promotionCreateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterials
     */
    public function getPromotionMaterials(): ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterials
    {
        return $this->promotionMaterials;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterials $promotionMaterials
     * @return self
     */
    public function setPromotionMaterials(?\Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterials $promotionMaterials): self
    {
        $this->promotionMaterials = $promotionMaterials;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionModifyTime(): ?string
    {
        return $this->promotionModifyTime;
    }

    /**
     * @param string $promotionModifyTime
     * @return self
     */
    public function setPromotionModifyTime(?string $promotionModifyTime): self
    {
        $this->promotionModifyTime = $promotionModifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * @param string $promotionName
     * @return self
     */
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInner[]
     */
    public function getPromotionRelatedProduct(): ?array
    {
        return $this->promotionRelatedProduct;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInner[] $promotionRelatedProduct
     * @return self
     */
    public function setPromotionRelatedProduct(?array $promotionRelatedProduct): self
    {
        $this->promotionRelatedProduct = $promotionRelatedProduct;
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
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerShopMultiRoiGoalsInner[]
     */
    public function getShopMultiRoiGoals(): ?array
    {
        return $this->shopMultiRoiGoals;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerShopMultiRoiGoalsInner[] $shopMultiRoiGoals
     * @return self
     */
    public function setShopMultiRoiGoals(?array $shopMultiRoiGoals): self
    {
        $this->shopMultiRoiGoals = $shopMultiRoiGoals;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListStarAutoDeliverySwitch
     */
    public function getStarAutoDeliverySwitch(): ?string
    {
        return $this->starAutoDeliverySwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListStarAutoDeliverySwitch $starAutoDeliverySwitch
     * @return self
     */
    public function setStarAutoDeliverySwitch(?string $starAutoDeliverySwitch): self
    {
        $this->starAutoDeliverySwitch = $starAutoDeliverySwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListStarAutoMaterialAdditionSwitch
     */
    public function getStarAutoMaterialAdditionSwitch(): ?string
    {
        return $this->starAutoMaterialAdditionSwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListStarAutoMaterialAdditionSwitch $starAutoMaterialAdditionSwitch
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
     * @return \Oceanengine\Models\PromotionListV30DataListStarTaskVersion
     */
    public function getStarTaskVersion(): ?string
    {
        return $this->starTaskVersion;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListStarTaskVersion $starTaskVersion
     * @return self
     */
    public function setStarTaskVersion(?string $starTaskVersion): self
    {
        $this->starTaskVersion = $starTaskVersion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListStatusFirst
     */
    public function getStatusFirst(): ?string
    {
        return $this->statusFirst;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListStatusFirst $statusFirst
     * @return self
     */
    public function setStatusFirst(?string $statusFirst): self
    {
        $this->statusFirst = $statusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListStatusSecond[]
     */
    public function getStatusSecond(): ?array
    {
        return $this->statusSecond;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListStatusSecond[] $statusSecond
     * @return self
     */
    public function setStatusSecond(?array $statusSecond): self
    {
        $this->statusSecond = $statusSecond;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionBid(): ?float
    {
        return $this->unionBid;
    }

    /**
     * @param float $unionBid
     * @return self
     */
    public function setUnionBid(?float $unionBid): self
    {
        $this->unionBid = $unionBid;
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
     * @return float
     */
    public function getUnionCpaBid(): ?float
    {
        return $this->unionCpaBid;
    }

    /**
     * @param float $unionCpaBid
     * @return self
     */
    public function setUnionCpaBid(?float $unionCpaBid): self
    {
        $this->unionCpaBid = $unionCpaBid;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionDeepCpabid(): ?float
    {
        return $this->unionDeepCpabid;
    }

    /**
     * @param float $unionDeepCpabid
     * @return self
     */
    public function setUnionDeepCpabid(?float $unionDeepCpabid): self
    {
        $this->unionDeepCpabid = $unionDeepCpabid;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionRoiGoal(): ?float
    {
        return $this->unionRoiGoal;
    }

    /**
     * @param float $unionRoiGoal
     * @return self
     */
    public function setUnionRoiGoal(?float $unionRoiGoal): self
    {
        $this->unionRoiGoal = $unionRoiGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->var7dRetention !== null) {
            $result['7d_retention'] = $this->var7dRetention;
        }
        if ($this->adDownloadStatus !== null) {
            $result['ad_download_status'] = $this->adDownloadStatus;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->aigcDynamicCreativeSwitch !== null) {
            $result['aigc_dynamic_creative_switch'] = $this->aigcDynamicCreativeSwitch;
        }
        if ($this->autoExtendTraffic !== null) {
            $result['auto_extend_traffic'] = $this->autoExtendTraffic;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->blueFlowPackage !== null) {
            $result['blue_flow_package'] = $this->blueFlowPackage;
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
        if ($this->configId !== null) {
            $result['config_id'] = $this->configId;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->creativeAutoGenerateSwitch !== null) {
            $result['creative_auto_generate_switch'] = $this->creativeAutoGenerateSwitch;
        }
        if ($this->deepCpabid !== null) {
            $result['deep_cpabid'] = $this->deepCpabid;
        }
        if ($this->firstRoiGoal !== null) {
            $result['first_roi_goal'] = $this->firstRoiGoal;
        }
        if ($this->hasCarryMaterial !== null) {
            $result['has_carry_material'] = $this->hasCarryMaterial;
        }
        if ($this->ifNewcustomerdelivery !== null) {
            $result['if_newcustomerdelivery'] = $this->ifNewcustomerdelivery;
        }
        if ($this->isCommentDisable !== null) {
            $result['is_comment_disable'] = $this->isCommentDisable;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        if ($this->learningPhase !== null) {
            $result['learning_phase'] = $this->learningPhase;
        }
        if ($this->materialScoreInfo !== null) {
            $result['material_score_info'] = $this->materialScoreInfo;
        }
        if ($this->materialsType !== null) {
            $result['materials_type'] = $this->materialsType;
        }
        if ($this->nativeSetting !== null) {
            $result['native_setting'] = $this->nativeSetting;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionCreateTime !== null) {
            $result['promotion_create_time'] = $this->promotionCreateTime;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->promotionMaterials !== null) {
            $result['promotion_materials'] = $this->promotionMaterials;
        }
        if ($this->promotionModifyTime !== null) {
            $result['promotion_modify_time'] = $this->promotionModifyTime;
        }
        if ($this->promotionName !== null) {
            $result['promotion_name'] = $this->promotionName;
        }
        if ($this->promotionRelatedProduct !== null) {
            $result['promotion_related_product'] = $this->promotionRelatedProduct;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->shopMultiRoiGoals !== null) {
            $result['shop_multi_roi_goals'] = $this->shopMultiRoiGoals;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
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
        if ($this->unionBid !== null) {
            $result['union_bid'] = $this->unionBid;
        }
        if ($this->unionBidRatio !== null) {
            $result['union_bid_ratio'] = $this->unionBidRatio;
        }
        if ($this->unionCpaBid !== null) {
            $result['union_cpa_bid'] = $this->unionCpaBid;
        }
        if ($this->unionDeepCpabid !== null) {
            $result['union_deep_cpabid'] = $this->unionDeepCpabid;
        }
        if ($this->unionRoiGoal !== null) {
            $result['union_roi_goal'] = $this->unionRoiGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['7d_retention'] ?? null) !== null) {
            $obj->var7dRetention = (float) $v;
        }
        if (($v = $data['ad_download_status'] ?? null) !== null) {
            $obj->adDownloadStatus = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aigc_dynamic_creative_switch'] ?? null) !== null) {
            $obj->aigcDynamicCreativeSwitch = (string) $v;
        }
        if (($v = $data['auto_extend_traffic'] ?? null) !== null) {
            $obj->autoExtendTraffic = (string) $v;
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['blue_flow_package'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowPackage = \Oceanengine\Models\PromotionListV30ResponseDataListInnerBlueFlowPackage::fromArray($v);
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\PromotionListV30ResponseDataListInnerBrandInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['config_id'] ?? null) !== null) {
            $obj->configId = (int) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['creative_auto_generate_switch'] ?? null) !== null) {
            $obj->creativeAutoGenerateSwitch = (string) $v;
        }
        if (($v = $data['deep_cpabid'] ?? null) !== null) {
            $obj->deepCpabid = (float) $v;
        }
        if (($v = $data['first_roi_goal'] ?? null) !== null) {
            $obj->firstRoiGoal = (float) $v;
        }
        if (($v = $data['has_carry_material'] ?? null) !== null) {
            $obj->hasCarryMaterial = (string) $v;
        }
        if (($v = $data['if_newcustomerdelivery'] ?? null) !== null) {
            $obj->ifNewcustomerdelivery = (bool) $v;
        }
        if (($v = $data['is_comment_disable'] ?? null) !== null) {
            $obj->isCommentDisable = (string) $v;
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['learning_phase'] ?? null) !== null) {
            $obj->learningPhase = (string) $v;
        }
        if (($v = $data['material_score_info'] ?? null) !== null && is_array($v)) {
            $obj->materialScoreInfo = \Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfo::fromArray($v);
        }
        if (($v = $data['materials_type'] ?? null) !== null) {
            $obj->materialsType = (string) $v;
        }
        if (($v = $data['native_setting'] ?? null) !== null && is_array($v)) {
            $obj->nativeSetting = \Oceanengine\Models\PromotionListV30ResponseDataListInnerNativeSetting::fromArray($v);
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_create_time'] ?? null) !== null) {
            $obj->promotionCreateTime = (string) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['promotion_materials'] ?? null) !== null && is_array($v)) {
            $obj->promotionMaterials = \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterials::fromArray($v);
        }
        if (($v = $data['promotion_modify_time'] ?? null) !== null) {
            $obj->promotionModifyTime = (string) $v;
        }
        if (($v = $data['promotion_name'] ?? null) !== null) {
            $obj->promotionName = (string) $v;
        }
        if (($v = $data['promotion_related_product'] ?? null) !== null && is_array($v)) {
            $obj->promotionRelatedProduct = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInner::fromArray($vv), $v);
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['shop_multi_roi_goals'] ?? null) !== null && is_array($v)) {
            $obj->shopMultiRoiGoals = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerShopMultiRoiGoalsInner::fromArray($vv), $v);
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
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
        if (($v = $data['union_bid'] ?? null) !== null) {
            $obj->unionBid = (float) $v;
        }
        if (($v = $data['union_bid_ratio'] ?? null) !== null) {
            $obj->unionBidRatio = (float) $v;
        }
        if (($v = $data['union_cpa_bid'] ?? null) !== null) {
            $obj->unionCpaBid = (float) $v;
        }
        if (($v = $data['union_deep_cpabid'] ?? null) !== null) {
            $obj->unionDeepCpabid = (float) $v;
        }
        if (($v = $data['union_roi_goal'] ?? null) !== null) {
            $obj->unionRoiGoal = (float) $v;
        }
        return $obj;
    }
}
