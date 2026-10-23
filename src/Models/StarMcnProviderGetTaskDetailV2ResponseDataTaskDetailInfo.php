<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfo implements \JsonSerializable
{
    /**
     * 小程序cps 分账周期
     * @var int
     */
    protected ?int $accountDivideDay = null;

    /**
     * 达人定向类型
     * @var int
     */
    protected ?int $authorScope = null;

    /**
     * @var string
     */
    protected ?string $brand = null;

    /**
     * 任务预算
     * @var int
     */
    protected ?int $budget = null;

    /**
     * 任务玩法
     * @var int
     */
    protected ?int $challengePlayType = null;

    /**
     * @var int
     */
    protected ?int $challengeStatus = null;

    /**
     * 网盘链接
     * @var string
     */
    protected ?string $cloudLink = null;

    /**
     * @var int
     */
    protected ?int $commissionRate = null;

    /**
     * @var string
     */
    protected ?string $commissionRateIaap = null;

    /**
     * @var int
     */
    protected ?int $componentType = null;

    /**
     * cpa转化单价
     * @var int
     */
    protected ?int $convertUnitAmount = null;

    /**
     * cpm单价
     * @var int
     */
    protected ?int $cpmVvPrice = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 任务介绍
     * @var string
     */
    protected ?string $demandDesc = null;

    /**
     * @var string
     */
    protected ?string $demandIcon = null;

    /**
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * 用户名称
     * @var string
     */
    protected ?string $demanderName = null;

    /**
     * @var int
     */
    protected ?int $evaluateType = null;

    /**
     * @var string
     */
    protected ?string $expirationTime = null;

    /**
     * @var string
     */
    protected ?string $expirationTimeEnd = null;

    /**
     * @var int
     */
    protected ?int $firstClassCategory = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfo $gameIndustryInfo = null;

    /**
     * @var bool
     */
    protected ?bool $highProfitChallenge = null;

    /**
     * @var int
     */
    protected ?int $mcnProfitRate = null;

    /**
     * 需求要求
     * @var string
     */
    protected ?string $other = null;

    /**
     * @var int
     */
    protected ?int $payType = null;

    /**
     * @var int
     */
    protected ?int $playletCategory = null;

    /**
     * @var int
     */
    protected ?int $playletFirstWeek = null;

    /**
     * @var int[]
     */
    protected ?array $playletGender = null;

    /**
     * @var bool
     */
    protected ?bool $playletHot = null;

    /**
     * @var int
     */
    protected ?int $playletSecondWeek = null;

    /**
     * @var int[]
     */
    protected ?array $playletTheme = null;

    /**
     * @var int
     */
    protected ?int $productCategory = null;

    /**
     * 产品介绍
     * @var string
     */
    protected ?string $productInformation = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var string
     */
    protected ?string $productReleaseTime = null;

    /**
     * @var array<string,int>
     */
    protected ?array $profitRateChannel = null;

    /**
     * 服务商任务类型
     * @var int
     */
    protected ?int $providerTaskType = null;

    /**
     * 任务关联实体信息
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInner[]
     */
    protected ?array $relationObjectInfo = null;

    /**
     * @var int
     */
    protected ?int $secondClassCategory = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoSmallAppInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoSmallAppInfo $smallAppInfo = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoStarMicroGameUniteExtraInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoStarMicroGameUniteExtraInfo $starMicroGameUniteExtraInfo = null;

    /**
     * 任务类型
     * @var int
     */
    protected ?int $taskCategory = null;

    /**
     * 任务类型
     * @var int
     */
    protected ?int $taskClassification = null;

    /**
     * @var string
     */
    protected ?string $taskDetailUrl = null;

    /**
     * 任务头图
     * @var string
     */
    protected ?string $taskHeadImage = null;

    /**
     * @var string
     */
    protected ?string $taskParticipateUrl = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoTaskRequirementInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoTaskRequirementInfo $taskRequirementInfo = null;

    /**
     * @var bool
     */
    protected ?bool $taskSupportAd = null;

    /**
     * @var int
     */
    protected ?int $videoType = null;

    /**
     * 小程序cps 分账周期
     * @return int
     */
    public function getAccountDivideDay(): ?int
    {
        return $this->accountDivideDay;
    }

    /**
     * 小程序cps 分账周期
     * @param int $accountDivideDay
     * @return self
     */
    public function setAccountDivideDay(?int $accountDivideDay): self
    {
        $this->accountDivideDay = $accountDivideDay;
        return $this;
    }

    /**
     * 达人定向类型
     * @return int
     */
    public function getAuthorScope(): ?int
    {
        return $this->authorScope;
    }

    /**
     * 达人定向类型
     * @param int $authorScope
     * @return self
     */
    public function setAuthorScope(?int $authorScope): self
    {
        $this->authorScope = $authorScope;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return self
     */
    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * 任务预算
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 任务预算
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 任务玩法
     * @return int
     */
    public function getChallengePlayType(): ?int
    {
        return $this->challengePlayType;
    }

    /**
     * 任务玩法
     * @param int $challengePlayType
     * @return self
     */
    public function setChallengePlayType(?int $challengePlayType): self
    {
        $this->challengePlayType = $challengePlayType;
        return $this;
    }

    /**
     * @return int
     */
    public function getChallengeStatus(): ?int
    {
        return $this->challengeStatus;
    }

    /**
     * @param int $challengeStatus
     * @return self
     */
    public function setChallengeStatus(?int $challengeStatus): self
    {
        $this->challengeStatus = $challengeStatus;
        return $this;
    }

    /**
     * 网盘链接
     * @return string
     */
    public function getCloudLink(): ?string
    {
        return $this->cloudLink;
    }

    /**
     * 网盘链接
     * @param string $cloudLink
     * @return self
     */
    public function setCloudLink(?string $cloudLink): self
    {
        $this->cloudLink = $cloudLink;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommissionRate(): ?int
    {
        return $this->commissionRate;
    }

    /**
     * @param int $commissionRate
     * @return self
     */
    public function setCommissionRate(?int $commissionRate): self
    {
        $this->commissionRate = $commissionRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommissionRateIaap(): ?string
    {
        return $this->commissionRateIaap;
    }

    /**
     * @param string $commissionRateIaap
     * @return self
     */
    public function setCommissionRateIaap(?string $commissionRateIaap): self
    {
        $this->commissionRateIaap = $commissionRateIaap;
        return $this;
    }

    /**
     * @return int
     */
    public function getComponentType(): ?int
    {
        return $this->componentType;
    }

    /**
     * @param int $componentType
     * @return self
     */
    public function setComponentType(?int $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    /**
     * cpa转化单价
     * @return int
     */
    public function getConvertUnitAmount(): ?int
    {
        return $this->convertUnitAmount;
    }

    /**
     * cpa转化单价
     * @param int $convertUnitAmount
     * @return self
     */
    public function setConvertUnitAmount(?int $convertUnitAmount): self
    {
        $this->convertUnitAmount = $convertUnitAmount;
        return $this;
    }

    /**
     * cpm单价
     * @return int
     */
    public function getCpmVvPrice(): ?int
    {
        return $this->cpmVvPrice;
    }

    /**
     * cpm单价
     * @param int $cpmVvPrice
     * @return self
     */
    public function setCpmVvPrice(?int $cpmVvPrice): self
    {
        $this->cpmVvPrice = $cpmVvPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 任务介绍
     * @return string
     */
    public function getDemandDesc(): ?string
    {
        return $this->demandDesc;
    }

    /**
     * 任务介绍
     * @param string $demandDesc
     * @return self
     */
    public function setDemandDesc(?string $demandDesc): self
    {
        $this->demandDesc = $demandDesc;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemandIcon(): ?string
    {
        return $this->demandIcon;
    }

    /**
     * @param string $demandIcon
     * @return self
     */
    public function setDemandIcon(?string $demandIcon): self
    {
        $this->demandIcon = $demandIcon;
        return $this;
    }

    /**
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * 用户名称
     * @return string
     */
    public function getDemanderName(): ?string
    {
        return $this->demanderName;
    }

    /**
     * 用户名称
     * @param string $demanderName
     * @return self
     */
    public function setDemanderName(?string $demanderName): self
    {
        $this->demanderName = $demanderName;
        return $this;
    }

    /**
     * @return int
     */
    public function getEvaluateType(): ?int
    {
        return $this->evaluateType;
    }

    /**
     * @param int $evaluateType
     * @return self
     */
    public function setEvaluateType(?int $evaluateType): self
    {
        $this->evaluateType = $evaluateType;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationTime(): ?string
    {
        return $this->expirationTime;
    }

    /**
     * @param string $expirationTime
     * @return self
     */
    public function setExpirationTime(?string $expirationTime): self
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationTimeEnd(): ?string
    {
        return $this->expirationTimeEnd;
    }

    /**
     * @param string $expirationTimeEnd
     * @return self
     */
    public function setExpirationTimeEnd(?string $expirationTimeEnd): self
    {
        $this->expirationTimeEnd = $expirationTimeEnd;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstClassCategory(): ?int
    {
        return $this->firstClassCategory;
    }

    /**
     * @param int $firstClassCategory
     * @return self
     */
    public function setFirstClassCategory(?int $firstClassCategory): self
    {
        $this->firstClassCategory = $firstClassCategory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfo
     */
    public function getGameIndustryInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfo
    {
        return $this->gameIndustryInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfo $gameIndustryInfo
     * @return self
     */
    public function setGameIndustryInfo(?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfo $gameIndustryInfo): self
    {
        $this->gameIndustryInfo = $gameIndustryInfo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHighProfitChallenge(): ?bool
    {
        return $this->highProfitChallenge;
    }

    /**
     * @param bool $highProfitChallenge
     * @return self
     */
    public function setHighProfitChallenge(?bool $highProfitChallenge): self
    {
        $this->highProfitChallenge = $highProfitChallenge;
        return $this;
    }

    /**
     * @return int
     */
    public function getMcnProfitRate(): ?int
    {
        return $this->mcnProfitRate;
    }

    /**
     * @param int $mcnProfitRate
     * @return self
     */
    public function setMcnProfitRate(?int $mcnProfitRate): self
    {
        $this->mcnProfitRate = $mcnProfitRate;
        return $this;
    }

    /**
     * 需求要求
     * @return string
     */
    public function getOther(): ?string
    {
        return $this->other;
    }

    /**
     * 需求要求
     * @param string $other
     * @return self
     */
    public function setOther(?string $other): self
    {
        $this->other = $other;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayType(): ?int
    {
        return $this->payType;
    }

    /**
     * @param int $payType
     * @return self
     */
    public function setPayType(?int $payType): self
    {
        $this->payType = $payType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayletCategory(): ?int
    {
        return $this->playletCategory;
    }

    /**
     * @param int $playletCategory
     * @return self
     */
    public function setPlayletCategory(?int $playletCategory): self
    {
        $this->playletCategory = $playletCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayletFirstWeek(): ?int
    {
        return $this->playletFirstWeek;
    }

    /**
     * @param int $playletFirstWeek
     * @return self
     */
    public function setPlayletFirstWeek(?int $playletFirstWeek): self
    {
        $this->playletFirstWeek = $playletFirstWeek;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPlayletGender(): ?array
    {
        return $this->playletGender;
    }

    /**
     * @param int[] $playletGender
     * @return self
     */
    public function setPlayletGender(?array $playletGender): self
    {
        $this->playletGender = $playletGender;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPlayletHot(): ?bool
    {
        return $this->playletHot;
    }

    /**
     * @param bool $playletHot
     * @return self
     */
    public function setPlayletHot(?bool $playletHot): self
    {
        $this->playletHot = $playletHot;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayletSecondWeek(): ?int
    {
        return $this->playletSecondWeek;
    }

    /**
     * @param int $playletSecondWeek
     * @return self
     */
    public function setPlayletSecondWeek(?int $playletSecondWeek): self
    {
        $this->playletSecondWeek = $playletSecondWeek;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPlayletTheme(): ?array
    {
        return $this->playletTheme;
    }

    /**
     * @param int[] $playletTheme
     * @return self
     */
    public function setPlayletTheme(?array $playletTheme): self
    {
        $this->playletTheme = $playletTheme;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductCategory(): ?int
    {
        return $this->productCategory;
    }

    /**
     * @param int $productCategory
     * @return self
     */
    public function setProductCategory(?int $productCategory): self
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * 产品介绍
     * @return string
     */
    public function getProductInformation(): ?string
    {
        return $this->productInformation;
    }

    /**
     * 产品介绍
     * @param string $productInformation
     * @return self
     */
    public function setProductInformation(?string $productInformation): self
    {
        $this->productInformation = $productInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductReleaseTime(): ?string
    {
        return $this->productReleaseTime;
    }

    /**
     * @param string $productReleaseTime
     * @return self
     */
    public function setProductReleaseTime(?string $productReleaseTime): self
    {
        $this->productReleaseTime = $productReleaseTime;
        return $this;
    }

    /**
     * @return array<string,int>
     */
    public function getProfitRateChannel(): ?array
    {
        return $this->profitRateChannel;
    }

    /**
     * @param array<string,int> $profitRateChannel
     * @return self
     */
    public function setProfitRateChannel(?array $profitRateChannel): self
    {
        $this->profitRateChannel = $profitRateChannel;
        return $this;
    }

    /**
     * 服务商任务类型
     * @return int
     */
    public function getProviderTaskType(): ?int
    {
        return $this->providerTaskType;
    }

    /**
     * 服务商任务类型
     * @param int $providerTaskType
     * @return self
     */
    public function setProviderTaskType(?int $providerTaskType): self
    {
        $this->providerTaskType = $providerTaskType;
        return $this;
    }

    /**
     * 任务关联实体信息
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInner[]
     */
    public function getRelationObjectInfo(): ?array
    {
        return $this->relationObjectInfo;
    }

    /**
     * 任务关联实体信息
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInner[] $relationObjectInfo
     * @return self
     */
    public function setRelationObjectInfo(?array $relationObjectInfo): self
    {
        $this->relationObjectInfo = $relationObjectInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecondClassCategory(): ?int
    {
        return $this->secondClassCategory;
    }

    /**
     * @param int $secondClassCategory
     * @return self
     */
    public function setSecondClassCategory(?int $secondClassCategory): self
    {
        $this->secondClassCategory = $secondClassCategory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoSmallAppInfo
     */
    public function getSmallAppInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoSmallAppInfo
    {
        return $this->smallAppInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoSmallAppInfo $smallAppInfo
     * @return self
     */
    public function setSmallAppInfo(?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoSmallAppInfo $smallAppInfo): self
    {
        $this->smallAppInfo = $smallAppInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoStarMicroGameUniteExtraInfo
     */
    public function getStarMicroGameUniteExtraInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoStarMicroGameUniteExtraInfo
    {
        return $this->starMicroGameUniteExtraInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoStarMicroGameUniteExtraInfo $starMicroGameUniteExtraInfo
     * @return self
     */
    public function setStarMicroGameUniteExtraInfo(?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoStarMicroGameUniteExtraInfo $starMicroGameUniteExtraInfo): self
    {
        $this->starMicroGameUniteExtraInfo = $starMicroGameUniteExtraInfo;
        return $this;
    }

    /**
     * 任务类型
     * @return int
     */
    public function getTaskCategory(): ?int
    {
        return $this->taskCategory;
    }

    /**
     * 任务类型
     * @param int $taskCategory
     * @return self
     */
    public function setTaskCategory(?int $taskCategory): self
    {
        $this->taskCategory = $taskCategory;
        return $this;
    }

    /**
     * 任务类型
     * @return int
     */
    public function getTaskClassification(): ?int
    {
        return $this->taskClassification;
    }

    /**
     * 任务类型
     * @param int $taskClassification
     * @return self
     */
    public function setTaskClassification(?int $taskClassification): self
    {
        $this->taskClassification = $taskClassification;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskDetailUrl(): ?string
    {
        return $this->taskDetailUrl;
    }

    /**
     * @param string $taskDetailUrl
     * @return self
     */
    public function setTaskDetailUrl(?string $taskDetailUrl): self
    {
        $this->taskDetailUrl = $taskDetailUrl;
        return $this;
    }

    /**
     * 任务头图
     * @return string
     */
    public function getTaskHeadImage(): ?string
    {
        return $this->taskHeadImage;
    }

    /**
     * 任务头图
     * @param string $taskHeadImage
     * @return self
     */
    public function setTaskHeadImage(?string $taskHeadImage): self
    {
        $this->taskHeadImage = $taskHeadImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskParticipateUrl(): ?string
    {
        return $this->taskParticipateUrl;
    }

    /**
     * @param string $taskParticipateUrl
     * @return self
     */
    public function setTaskParticipateUrl(?string $taskParticipateUrl): self
    {
        $this->taskParticipateUrl = $taskParticipateUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoTaskRequirementInfo
     */
    public function getTaskRequirementInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoTaskRequirementInfo
    {
        return $this->taskRequirementInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoTaskRequirementInfo $taskRequirementInfo
     * @return self
     */
    public function setTaskRequirementInfo(?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoTaskRequirementInfo $taskRequirementInfo): self
    {
        $this->taskRequirementInfo = $taskRequirementInfo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaskSupportAd(): ?bool
    {
        return $this->taskSupportAd;
    }

    /**
     * @param bool $taskSupportAd
     * @return self
     */
    public function setTaskSupportAd(?bool $taskSupportAd): self
    {
        $this->taskSupportAd = $taskSupportAd;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoType(): ?int
    {
        return $this->videoType;
    }

    /**
     * @param int $videoType
     * @return self
     */
    public function setVideoType(?int $videoType): self
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountDivideDay !== null) {
            $result['account_divide_day'] = $this->accountDivideDay;
        }
        if ($this->authorScope !== null) {
            $result['author_scope'] = $this->authorScope;
        }
        if ($this->brand !== null) {
            $result['brand'] = $this->brand;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->challengePlayType !== null) {
            $result['challenge_play_type'] = $this->challengePlayType;
        }
        if ($this->challengeStatus !== null) {
            $result['challenge_status'] = $this->challengeStatus;
        }
        if ($this->cloudLink !== null) {
            $result['cloud_link'] = $this->cloudLink;
        }
        if ($this->commissionRate !== null) {
            $result['commission_rate'] = $this->commissionRate;
        }
        if ($this->commissionRateIaap !== null) {
            $result['commission_rate_iaap'] = $this->commissionRateIaap;
        }
        if ($this->componentType !== null) {
            $result['component_type'] = $this->componentType;
        }
        if ($this->convertUnitAmount !== null) {
            $result['convert_unit_amount'] = $this->convertUnitAmount;
        }
        if ($this->cpmVvPrice !== null) {
            $result['cpm_vv_price'] = $this->cpmVvPrice;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandDesc !== null) {
            $result['demand_desc'] = $this->demandDesc;
        }
        if ($this->demandIcon !== null) {
            $result['demand_icon'] = $this->demandIcon;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->demanderName !== null) {
            $result['demander_name'] = $this->demanderName;
        }
        if ($this->evaluateType !== null) {
            $result['evaluate_type'] = $this->evaluateType;
        }
        if ($this->expirationTime !== null) {
            $result['expiration_time'] = $this->expirationTime;
        }
        if ($this->expirationTimeEnd !== null) {
            $result['expiration_time_end'] = $this->expirationTimeEnd;
        }
        if ($this->firstClassCategory !== null) {
            $result['first_class_category'] = $this->firstClassCategory;
        }
        if ($this->gameIndustryInfo !== null) {
            $result['game_industry_info'] = $this->gameIndustryInfo;
        }
        if ($this->highProfitChallenge !== null) {
            $result['high_profit_challenge'] = $this->highProfitChallenge;
        }
        if ($this->mcnProfitRate !== null) {
            $result['mcn_profit_rate'] = $this->mcnProfitRate;
        }
        if ($this->other !== null) {
            $result['other'] = $this->other;
        }
        if ($this->payType !== null) {
            $result['pay_type'] = $this->payType;
        }
        if ($this->playletCategory !== null) {
            $result['playlet_category'] = $this->playletCategory;
        }
        if ($this->playletFirstWeek !== null) {
            $result['playlet_first_week'] = $this->playletFirstWeek;
        }
        if ($this->playletGender !== null) {
            $result['playlet_gender'] = $this->playletGender;
        }
        if ($this->playletHot !== null) {
            $result['playlet_hot'] = $this->playletHot;
        }
        if ($this->playletSecondWeek !== null) {
            $result['playlet_second_week'] = $this->playletSecondWeek;
        }
        if ($this->playletTheme !== null) {
            $result['playlet_theme'] = $this->playletTheme;
        }
        if ($this->productCategory !== null) {
            $result['product_category'] = $this->productCategory;
        }
        if ($this->productInformation !== null) {
            $result['product_information'] = $this->productInformation;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productReleaseTime !== null) {
            $result['product_release_time'] = $this->productReleaseTime;
        }
        if ($this->profitRateChannel !== null) {
            $result['profit_rate_channel'] = $this->profitRateChannel;
        }
        if ($this->providerTaskType !== null) {
            $result['provider_task_type'] = $this->providerTaskType;
        }
        if ($this->relationObjectInfo !== null) {
            $result['relation_object_info'] = $this->relationObjectInfo;
        }
        if ($this->secondClassCategory !== null) {
            $result['second_class_category'] = $this->secondClassCategory;
        }
        if ($this->smallAppInfo !== null) {
            $result['small_app_info'] = $this->smallAppInfo;
        }
        if ($this->starMicroGameUniteExtraInfo !== null) {
            $result['star_micro_game_unite_extra_info'] = $this->starMicroGameUniteExtraInfo;
        }
        if ($this->taskCategory !== null) {
            $result['task_category'] = $this->taskCategory;
        }
        if ($this->taskClassification !== null) {
            $result['task_classification'] = $this->taskClassification;
        }
        if ($this->taskDetailUrl !== null) {
            $result['task_detail_url'] = $this->taskDetailUrl;
        }
        if ($this->taskHeadImage !== null) {
            $result['task_head_image'] = $this->taskHeadImage;
        }
        if ($this->taskParticipateUrl !== null) {
            $result['task_participate_url'] = $this->taskParticipateUrl;
        }
        if ($this->taskRequirementInfo !== null) {
            $result['task_requirement_info'] = $this->taskRequirementInfo;
        }
        if ($this->taskSupportAd !== null) {
            $result['task_support_ad'] = $this->taskSupportAd;
        }
        if ($this->videoType !== null) {
            $result['video_type'] = $this->videoType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_divide_day'] ?? null) !== null) {
            $obj->accountDivideDay = (int) $v;
        }
        if (($v = $data['author_scope'] ?? null) !== null) {
            $obj->authorScope = (int) $v;
        }
        if (($v = $data['brand'] ?? null) !== null) {
            $obj->brand = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['challenge_play_type'] ?? null) !== null) {
            $obj->challengePlayType = (int) $v;
        }
        if (($v = $data['challenge_status'] ?? null) !== null) {
            $obj->challengeStatus = (int) $v;
        }
        if (($v = $data['cloud_link'] ?? null) !== null) {
            $obj->cloudLink = (string) $v;
        }
        if (($v = $data['commission_rate'] ?? null) !== null) {
            $obj->commissionRate = (int) $v;
        }
        if (($v = $data['commission_rate_iaap'] ?? null) !== null) {
            $obj->commissionRateIaap = (string) $v;
        }
        if (($v = $data['component_type'] ?? null) !== null) {
            $obj->componentType = (int) $v;
        }
        if (($v = $data['convert_unit_amount'] ?? null) !== null) {
            $obj->convertUnitAmount = (int) $v;
        }
        if (($v = $data['cpm_vv_price'] ?? null) !== null) {
            $obj->cpmVvPrice = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['demand_desc'] ?? null) !== null) {
            $obj->demandDesc = (string) $v;
        }
        if (($v = $data['demand_icon'] ?? null) !== null) {
            $obj->demandIcon = (string) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['demander_name'] ?? null) !== null) {
            $obj->demanderName = (string) $v;
        }
        if (($v = $data['evaluate_type'] ?? null) !== null) {
            $obj->evaluateType = (int) $v;
        }
        if (($v = $data['expiration_time'] ?? null) !== null) {
            $obj->expirationTime = (string) $v;
        }
        if (($v = $data['expiration_time_end'] ?? null) !== null) {
            $obj->expirationTimeEnd = (string) $v;
        }
        if (($v = $data['first_class_category'] ?? null) !== null) {
            $obj->firstClassCategory = (int) $v;
        }
        if (($v = $data['game_industry_info'] ?? null) !== null && is_array($v)) {
            $obj->gameIndustryInfo = \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfo::fromArray($v);
        }
        if (($v = $data['high_profit_challenge'] ?? null) !== null) {
            $obj->highProfitChallenge = (bool) $v;
        }
        if (($v = $data['mcn_profit_rate'] ?? null) !== null) {
            $obj->mcnProfitRate = (int) $v;
        }
        if (($v = $data['other'] ?? null) !== null) {
            $obj->other = (string) $v;
        }
        if (($v = $data['pay_type'] ?? null) !== null) {
            $obj->payType = (int) $v;
        }
        if (($v = $data['playlet_category'] ?? null) !== null) {
            $obj->playletCategory = (int) $v;
        }
        if (($v = $data['playlet_first_week'] ?? null) !== null) {
            $obj->playletFirstWeek = (int) $v;
        }
        if (($v = $data['playlet_gender'] ?? null) !== null && is_array($v)) {
            $obj->playletGender = $v;
        }
        if (($v = $data['playlet_hot'] ?? null) !== null) {
            $obj->playletHot = (bool) $v;
        }
        if (($v = $data['playlet_second_week'] ?? null) !== null) {
            $obj->playletSecondWeek = (int) $v;
        }
        if (($v = $data['playlet_theme'] ?? null) !== null && is_array($v)) {
            $obj->playletTheme = $v;
        }
        if (($v = $data['product_category'] ?? null) !== null) {
            $obj->productCategory = (int) $v;
        }
        if (($v = $data['product_information'] ?? null) !== null) {
            $obj->productInformation = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_release_time'] ?? null) !== null) {
            $obj->productReleaseTime = (string) $v;
        }
        if (($v = $data['profit_rate_channel'] ?? null) !== null && is_array($v)) {
            $obj->profitRateChannel = $v;
        }
        if (($v = $data['provider_task_type'] ?? null) !== null) {
            $obj->providerTaskType = (int) $v;
        }
        if (($v = $data['relation_object_info'] ?? null) !== null && is_array($v)) {
            $obj->relationObjectInfo = array_map(fn ($vv) => \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['second_class_category'] ?? null) !== null) {
            $obj->secondClassCategory = (int) $v;
        }
        if (($v = $data['small_app_info'] ?? null) !== null && is_array($v)) {
            $obj->smallAppInfo = \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoSmallAppInfo::fromArray($v);
        }
        if (($v = $data['star_micro_game_unite_extra_info'] ?? null) !== null && is_array($v)) {
            $obj->starMicroGameUniteExtraInfo = \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoStarMicroGameUniteExtraInfo::fromArray($v);
        }
        if (($v = $data['task_category'] ?? null) !== null) {
            $obj->taskCategory = (int) $v;
        }
        if (($v = $data['task_classification'] ?? null) !== null) {
            $obj->taskClassification = (int) $v;
        }
        if (($v = $data['task_detail_url'] ?? null) !== null) {
            $obj->taskDetailUrl = (string) $v;
        }
        if (($v = $data['task_head_image'] ?? null) !== null) {
            $obj->taskHeadImage = (string) $v;
        }
        if (($v = $data['task_participate_url'] ?? null) !== null) {
            $obj->taskParticipateUrl = (string) $v;
        }
        if (($v = $data['task_requirement_info'] ?? null) !== null && is_array($v)) {
            $obj->taskRequirementInfo = \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoTaskRequirementInfo::fromArray($v);
        }
        if (($v = $data['task_support_ad'] ?? null) !== null) {
            $obj->taskSupportAd = (bool) $v;
        }
        if (($v = $data['video_type'] ?? null) !== null) {
            $obj->videoType = (int) $v;
        }
        return $obj;
    }
}
