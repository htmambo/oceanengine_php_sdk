<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvCostReportListQueryV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 账户ID
     * @var int
     */
    protected ?int $advId = null;

    /**
     * 账户名称
     * @var string
     */
    protected ?string $advName = null;

    /**
     * 代理商客户ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 代理商客户名称
     * @var string
     */
    protected ?string $agentName = null;

    /**
     * 代理商业绩消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $agentPerformanceCost = null;

    /**
     * 赠款消耗（计返点）(单位：千分之一分)
     * @var int
     */
    protected ?int $agentPerformanceGrantCost = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListAppName
     */
    protected ?string $appName = null;

    /**
     * 时间(格式：YYYY-MM-DD)
     * @var string
     */
    protected ?string $attributionDate = null;

    /**
     * 品牌二级类别code
     * @var int
     */
    protected ?int $brandProductSecondType = null;

    /**
     * 品牌二级类别名称
     * @var string
     */
    protected ?string $brandProductSecondTypeName = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListBusinessType
     */
    protected ?string $businessType = null;

    /**
     * 业务来源名称
     * @var string
     */
    protected ?string $businessTypeName = null;

    /**
     * 排期 ID
     * @var int
     */
    protected ?int $cartId = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCashbackType
     */
    protected ?string $cashbackType = null;

    /**
     * 资源包类型名称
     * @var string
     */
    protected ?string $cashbackTypeName = null;

    /**
     * 广告主公司id
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 广告主公司名称
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * 总消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $cost = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCostSource
     */
    protected ?string $costSource = null;

    /**
     * 消耗来源名称
     * @var string
     */
    protected ?string $costSourceName = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCpt
     */
    protected ?string $cpt = null;

    /**
     * 是否CPT描述
     * @var string
     */
    protected ?string $cptName = null;

    /**
     * 授信消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $creditCost = null;

    /**
     * 广告主客户ID
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * 广告主客户名称
     * @var string
     */
    protected ?string $customerName = null;

    /**
     * 赠款消耗（计返货）(单位：千分之一分)
     * @var int
     */
    protected ?int $customerPerformanceGrantCost = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListEcommerceType
     */
    protected ?string $ecommerceType = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListFeedslive
     */
    protected ?string $feedslive = null;

    /**
     * 是否FeedsLive描述
     * @var string
     */
    protected ?string $feedsliveName = null;

    /**
     * 一级代理商账户ID
     * @var int
     */
    protected ?int $firstAgentId = null;

    /**
     * 一级代理商账户名称
     * @var string
     */
    protected ?string $firstAgentName = null;

    /**
     * 客户一级行业
     * @var string
     */
    protected ?string $firstIndustry = null;

    /**
     * 赠款消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $grantCost = null;

    /**
     * 招商意向编号
     * @var string
     */
    protected ?string $intentionNo = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListIsMatchingProvince
     */
    protected ?string $isMatchingProvince = null;

    /**
     * 招商项目编号
     * @var string
     */
    protected ?string $merchNo = null;

    /**
     * 非赠款消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $noGrantCost = null;

    /**
     * 预付消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $prepayCost = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListPricingCategory
     */
    protected ?string $pricingCategory = null;

    /**
     * 广告类型名称
     * @var string
     */
    protected ?string $pricingCategoryName = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $projectName = null;

    /**
     * 项目编号
     * @var string
     */
    protected ?string $projectSerial = null;

    /**
     * 推广形式(1: 直播计划, 2: 非直播计划)
     * @var int
     */
    protected ?int $promotionType = null;

    /**
     * 注册时间(格式：YYYY-MM-DD HH:MM:SS)
     * @var string
     */
    protected ?string $registerTime = null;

    /**
     * 销售ID
     * @var int
     */
    protected ?int $saleId = null;

    /**
     * 销售名称
     * @var string
     */
    protected ?string $saleName = null;

    /**
     * 代理商子账户ID
     * @var int
     */
    protected ?int $secondAgentId = null;

    /**
     * 代理商子账户名称
     * @var string
     */
    protected ?string $secondAgentName = null;

    /**
     * 客户二级行业
     * @var string
     */
    protected ?string $secondIndustry = null;

    /**
     * 当月结算一级行业
     * @var string
     */
    protected ?string $settlementFirstIndustryName = null;

    /**
     * 结算行业内部行业分类
     * @var string
     */
    protected ?string $settlementInternalIndustryCategory = null;

    /**
     * 当月结算二级行业
     * @var string
     */
    protected ?string $settlementSecondIndustryName = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSettlementStatsType
     */
    protected ?string $settlementStatsType = null;

    /**
     * 商品ID
     * @var int
     */
    protected ?int $spuId = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSpuLabelName
     */
    protected ?string $spuLabelName = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $spuName = null;

    /**
     * 共享钱包消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $subSharedWalletCost = null;

    /**
     * 共享授信消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $subSharedWalletCreditCost = null;

    /**
     * 共享子钱包ID
     * @var int
     */
    protected ?int $subSharedWalletId = null;

    /**
     * 共享子钱包名称
     * @var string
     */
    protected ?string $subSharedWalletName = null;

    /**
     * 共享预付消耗(单位：千分之一分)
     * @var int
     */
    protected ?int $subSharedWalletPrepayCost = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSystemOrigin
     */
    protected ?string $systemOrigin = null;

    /**
     * 唯一键，用于游标方式分页查询
     * @var string
     */
    protected ?string $uniqueKey = null;

    /**
     * 账户ID
     * @return int
     */
    public function getAdvId(): ?int
    {
        return $this->advId;
    }

    /**
     * 账户ID
     * @param int $advId
     * @return self
     */
    public function setAdvId(?int $advId): self
    {
        $this->advId = $advId;
        return $this;
    }

    /**
     * 账户名称
     * @return string
     */
    public function getAdvName(): ?string
    {
        return $this->advName;
    }

    /**
     * 账户名称
     * @param string $advName
     * @return self
     */
    public function setAdvName(?string $advName): self
    {
        $this->advName = $advName;
        return $this;
    }

    /**
     * 代理商客户ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商客户ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 代理商客户名称
     * @return string
     */
    public function getAgentName(): ?string
    {
        return $this->agentName;
    }

    /**
     * 代理商客户名称
     * @param string $agentName
     * @return self
     */
    public function setAgentName(?string $agentName): self
    {
        $this->agentName = $agentName;
        return $this;
    }

    /**
     * 代理商业绩消耗(单位：千分之一分)
     * @return int
     */
    public function getAgentPerformanceCost(): ?int
    {
        return $this->agentPerformanceCost;
    }

    /**
     * 代理商业绩消耗(单位：千分之一分)
     * @param int $agentPerformanceCost
     * @return self
     */
    public function setAgentPerformanceCost(?int $agentPerformanceCost): self
    {
        $this->agentPerformanceCost = $agentPerformanceCost;
        return $this;
    }

    /**
     * 赠款消耗（计返点）(单位：千分之一分)
     * @return int
     */
    public function getAgentPerformanceGrantCost(): ?int
    {
        return $this->agentPerformanceGrantCost;
    }

    /**
     * 赠款消耗（计返点）(单位：千分之一分)
     * @param int $agentPerformanceGrantCost
     * @return self
     */
    public function setAgentPerformanceGrantCost(?int $agentPerformanceGrantCost): self
    {
        $this->agentPerformanceGrantCost = $agentPerformanceGrantCost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListAppName
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListAppName $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * 时间(格式：YYYY-MM-DD)
     * @return string
     */
    public function getAttributionDate(): ?string
    {
        return $this->attributionDate;
    }

    /**
     * 时间(格式：YYYY-MM-DD)
     * @param string $attributionDate
     * @return self
     */
    public function setAttributionDate(?string $attributionDate): self
    {
        $this->attributionDate = $attributionDate;
        return $this;
    }

    /**
     * 品牌二级类别code
     * @return int
     */
    public function getBrandProductSecondType(): ?int
    {
        return $this->brandProductSecondType;
    }

    /**
     * 品牌二级类别code
     * @param int $brandProductSecondType
     * @return self
     */
    public function setBrandProductSecondType(?int $brandProductSecondType): self
    {
        $this->brandProductSecondType = $brandProductSecondType;
        return $this;
    }

    /**
     * 品牌二级类别名称
     * @return string
     */
    public function getBrandProductSecondTypeName(): ?string
    {
        return $this->brandProductSecondTypeName;
    }

    /**
     * 品牌二级类别名称
     * @param string $brandProductSecondTypeName
     * @return self
     */
    public function setBrandProductSecondTypeName(?string $brandProductSecondTypeName): self
    {
        $this->brandProductSecondTypeName = $brandProductSecondTypeName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListBusinessType
     */
    public function getBusinessType(): ?string
    {
        return $this->businessType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListBusinessType $businessType
     * @return self
     */
    public function setBusinessType(?string $businessType): self
    {
        $this->businessType = $businessType;
        return $this;
    }

    /**
     * 业务来源名称
     * @return string
     */
    public function getBusinessTypeName(): ?string
    {
        return $this->businessTypeName;
    }

    /**
     * 业务来源名称
     * @param string $businessTypeName
     * @return self
     */
    public function setBusinessTypeName(?string $businessTypeName): self
    {
        $this->businessTypeName = $businessTypeName;
        return $this;
    }

    /**
     * 排期 ID
     * @return int
     */
    public function getCartId(): ?int
    {
        return $this->cartId;
    }

    /**
     * 排期 ID
     * @param int $cartId
     * @return self
     */
    public function setCartId(?int $cartId): self
    {
        $this->cartId = $cartId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCashbackType
     */
    public function getCashbackType(): ?string
    {
        return $this->cashbackType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCashbackType $cashbackType
     * @return self
     */
    public function setCashbackType(?string $cashbackType): self
    {
        $this->cashbackType = $cashbackType;
        return $this;
    }

    /**
     * 资源包类型名称
     * @return string
     */
    public function getCashbackTypeName(): ?string
    {
        return $this->cashbackTypeName;
    }

    /**
     * 资源包类型名称
     * @param string $cashbackTypeName
     * @return self
     */
    public function setCashbackTypeName(?string $cashbackTypeName): self
    {
        $this->cashbackTypeName = $cashbackTypeName;
        return $this;
    }

    /**
     * 广告主公司id
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 广告主公司id
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 广告主公司名称
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 广告主公司名称
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * 总消耗(单位：千分之一分)
     * @return int
     */
    public function getCost(): ?int
    {
        return $this->cost;
    }

    /**
     * 总消耗(单位：千分之一分)
     * @param int $cost
     * @return self
     */
    public function setCost(?int $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCostSource
     */
    public function getCostSource(): ?string
    {
        return $this->costSource;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCostSource $costSource
     * @return self
     */
    public function setCostSource(?string $costSource): self
    {
        $this->costSource = $costSource;
        return $this;
    }

    /**
     * 消耗来源名称
     * @return string
     */
    public function getCostSourceName(): ?string
    {
        return $this->costSourceName;
    }

    /**
     * 消耗来源名称
     * @param string $costSourceName
     * @return self
     */
    public function setCostSourceName(?string $costSourceName): self
    {
        $this->costSourceName = $costSourceName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCpt
     */
    public function getCpt(): ?string
    {
        return $this->cpt;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListCpt $cpt
     * @return self
     */
    public function setCpt(?string $cpt): self
    {
        $this->cpt = $cpt;
        return $this;
    }

    /**
     * 是否CPT描述
     * @return string
     */
    public function getCptName(): ?string
    {
        return $this->cptName;
    }

    /**
     * 是否CPT描述
     * @param string $cptName
     * @return self
     */
    public function setCptName(?string $cptName): self
    {
        $this->cptName = $cptName;
        return $this;
    }

    /**
     * 授信消耗(单位：千分之一分)
     * @return int
     */
    public function getCreditCost(): ?int
    {
        return $this->creditCost;
    }

    /**
     * 授信消耗(单位：千分之一分)
     * @param int $creditCost
     * @return self
     */
    public function setCreditCost(?int $creditCost): self
    {
        $this->creditCost = $creditCost;
        return $this;
    }

    /**
     * 广告主客户ID
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 广告主客户ID
     * @param int $customerId
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * 广告主客户名称
     * @return string
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * 广告主客户名称
     * @param string $customerName
     * @return self
     */
    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * 赠款消耗（计返货）(单位：千分之一分)
     * @return int
     */
    public function getCustomerPerformanceGrantCost(): ?int
    {
        return $this->customerPerformanceGrantCost;
    }

    /**
     * 赠款消耗（计返货）(单位：千分之一分)
     * @param int $customerPerformanceGrantCost
     * @return self
     */
    public function setCustomerPerformanceGrantCost(?int $customerPerformanceGrantCost): self
    {
        $this->customerPerformanceGrantCost = $customerPerformanceGrantCost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListEcommerceType
     */
    public function getEcommerceType(): ?string
    {
        return $this->ecommerceType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListEcommerceType $ecommerceType
     * @return self
     */
    public function setEcommerceType(?string $ecommerceType): self
    {
        $this->ecommerceType = $ecommerceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListFeedslive
     */
    public function getFeedslive(): ?string
    {
        return $this->feedslive;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListFeedslive $feedslive
     * @return self
     */
    public function setFeedslive(?string $feedslive): self
    {
        $this->feedslive = $feedslive;
        return $this;
    }

    /**
     * 是否FeedsLive描述
     * @return string
     */
    public function getFeedsliveName(): ?string
    {
        return $this->feedsliveName;
    }

    /**
     * 是否FeedsLive描述
     * @param string $feedsliveName
     * @return self
     */
    public function setFeedsliveName(?string $feedsliveName): self
    {
        $this->feedsliveName = $feedsliveName;
        return $this;
    }

    /**
     * 一级代理商账户ID
     * @return int
     */
    public function getFirstAgentId(): ?int
    {
        return $this->firstAgentId;
    }

    /**
     * 一级代理商账户ID
     * @param int $firstAgentId
     * @return self
     */
    public function setFirstAgentId(?int $firstAgentId): self
    {
        $this->firstAgentId = $firstAgentId;
        return $this;
    }

    /**
     * 一级代理商账户名称
     * @return string
     */
    public function getFirstAgentName(): ?string
    {
        return $this->firstAgentName;
    }

    /**
     * 一级代理商账户名称
     * @param string $firstAgentName
     * @return self
     */
    public function setFirstAgentName(?string $firstAgentName): self
    {
        $this->firstAgentName = $firstAgentName;
        return $this;
    }

    /**
     * 客户一级行业
     * @return string
     */
    public function getFirstIndustry(): ?string
    {
        return $this->firstIndustry;
    }

    /**
     * 客户一级行业
     * @param string $firstIndustry
     * @return self
     */
    public function setFirstIndustry(?string $firstIndustry): self
    {
        $this->firstIndustry = $firstIndustry;
        return $this;
    }

    /**
     * 赠款消耗(单位：千分之一分)
     * @return int
     */
    public function getGrantCost(): ?int
    {
        return $this->grantCost;
    }

    /**
     * 赠款消耗(单位：千分之一分)
     * @param int $grantCost
     * @return self
     */
    public function setGrantCost(?int $grantCost): self
    {
        $this->grantCost = $grantCost;
        return $this;
    }

    /**
     * 招商意向编号
     * @return string
     */
    public function getIntentionNo(): ?string
    {
        return $this->intentionNo;
    }

    /**
     * 招商意向编号
     * @param string $intentionNo
     * @return self
     */
    public function setIntentionNo(?string $intentionNo): self
    {
        $this->intentionNo = $intentionNo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListIsMatchingProvince
     */
    public function getIsMatchingProvince(): ?string
    {
        return $this->isMatchingProvince;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListIsMatchingProvince $isMatchingProvince
     * @return self
     */
    public function setIsMatchingProvince(?string $isMatchingProvince): self
    {
        $this->isMatchingProvince = $isMatchingProvince;
        return $this;
    }

    /**
     * 招商项目编号
     * @return string
     */
    public function getMerchNo(): ?string
    {
        return $this->merchNo;
    }

    /**
     * 招商项目编号
     * @param string $merchNo
     * @return self
     */
    public function setMerchNo(?string $merchNo): self
    {
        $this->merchNo = $merchNo;
        return $this;
    }

    /**
     * 非赠款消耗(单位：千分之一分)
     * @return int
     */
    public function getNoGrantCost(): ?int
    {
        return $this->noGrantCost;
    }

    /**
     * 非赠款消耗(单位：千分之一分)
     * @param int $noGrantCost
     * @return self
     */
    public function setNoGrantCost(?int $noGrantCost): self
    {
        $this->noGrantCost = $noGrantCost;
        return $this;
    }

    /**
     * 预付消耗(单位：千分之一分)
     * @return int
     */
    public function getPrepayCost(): ?int
    {
        return $this->prepayCost;
    }

    /**
     * 预付消耗(单位：千分之一分)
     * @param int $prepayCost
     * @return self
     */
    public function setPrepayCost(?int $prepayCost): self
    {
        $this->prepayCost = $prepayCost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListPricingCategory
     */
    public function getPricingCategory(): ?string
    {
        return $this->pricingCategory;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListPricingCategory $pricingCategory
     * @return self
     */
    public function setPricingCategory(?string $pricingCategory): self
    {
        $this->pricingCategory = $pricingCategory;
        return $this;
    }

    /**
     * 广告类型名称
     * @return string
     */
    public function getPricingCategoryName(): ?string
    {
        return $this->pricingCategoryName;
    }

    /**
     * 广告类型名称
     * @param string $pricingCategoryName
     * @return self
     */
    public function setPricingCategoryName(?string $pricingCategoryName): self
    {
        $this->pricingCategoryName = $pricingCategoryName;
        return $this;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * 项目名称
     * @param string $projectName
     * @return self
     */
    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;
        return $this;
    }

    /**
     * 项目编号
     * @return string
     */
    public function getProjectSerial(): ?string
    {
        return $this->projectSerial;
    }

    /**
     * 项目编号
     * @param string $projectSerial
     * @return self
     */
    public function setProjectSerial(?string $projectSerial): self
    {
        $this->projectSerial = $projectSerial;
        return $this;
    }

    /**
     * 推广形式(1: 直播计划, 2: 非直播计划)
     * @return int
     */
    public function getPromotionType(): ?int
    {
        return $this->promotionType;
    }

    /**
     * 推广形式(1: 直播计划, 2: 非直播计划)
     * @param int $promotionType
     * @return self
     */
    public function setPromotionType(?int $promotionType): self
    {
        $this->promotionType = $promotionType;
        return $this;
    }

    /**
     * 注册时间(格式：YYYY-MM-DD HH:MM:SS)
     * @return string
     */
    public function getRegisterTime(): ?string
    {
        return $this->registerTime;
    }

    /**
     * 注册时间(格式：YYYY-MM-DD HH:MM:SS)
     * @param string $registerTime
     * @return self
     */
    public function setRegisterTime(?string $registerTime): self
    {
        $this->registerTime = $registerTime;
        return $this;
    }

    /**
     * 销售ID
     * @return int
     */
    public function getSaleId(): ?int
    {
        return $this->saleId;
    }

    /**
     * 销售ID
     * @param int $saleId
     * @return self
     */
    public function setSaleId(?int $saleId): self
    {
        $this->saleId = $saleId;
        return $this;
    }

    /**
     * 销售名称
     * @return string
     */
    public function getSaleName(): ?string
    {
        return $this->saleName;
    }

    /**
     * 销售名称
     * @param string $saleName
     * @return self
     */
    public function setSaleName(?string $saleName): self
    {
        $this->saleName = $saleName;
        return $this;
    }

    /**
     * 代理商子账户ID
     * @return int
     */
    public function getSecondAgentId(): ?int
    {
        return $this->secondAgentId;
    }

    /**
     * 代理商子账户ID
     * @param int $secondAgentId
     * @return self
     */
    public function setSecondAgentId(?int $secondAgentId): self
    {
        $this->secondAgentId = $secondAgentId;
        return $this;
    }

    /**
     * 代理商子账户名称
     * @return string
     */
    public function getSecondAgentName(): ?string
    {
        return $this->secondAgentName;
    }

    /**
     * 代理商子账户名称
     * @param string $secondAgentName
     * @return self
     */
    public function setSecondAgentName(?string $secondAgentName): self
    {
        $this->secondAgentName = $secondAgentName;
        return $this;
    }

    /**
     * 客户二级行业
     * @return string
     */
    public function getSecondIndustry(): ?string
    {
        return $this->secondIndustry;
    }

    /**
     * 客户二级行业
     * @param string $secondIndustry
     * @return self
     */
    public function setSecondIndustry(?string $secondIndustry): self
    {
        $this->secondIndustry = $secondIndustry;
        return $this;
    }

    /**
     * 当月结算一级行业
     * @return string
     */
    public function getSettlementFirstIndustryName(): ?string
    {
        return $this->settlementFirstIndustryName;
    }

    /**
     * 当月结算一级行业
     * @param string $settlementFirstIndustryName
     * @return self
     */
    public function setSettlementFirstIndustryName(?string $settlementFirstIndustryName): self
    {
        $this->settlementFirstIndustryName = $settlementFirstIndustryName;
        return $this;
    }

    /**
     * 结算行业内部行业分类
     * @return string
     */
    public function getSettlementInternalIndustryCategory(): ?string
    {
        return $this->settlementInternalIndustryCategory;
    }

    /**
     * 结算行业内部行业分类
     * @param string $settlementInternalIndustryCategory
     * @return self
     */
    public function setSettlementInternalIndustryCategory(?string $settlementInternalIndustryCategory): self
    {
        $this->settlementInternalIndustryCategory = $settlementInternalIndustryCategory;
        return $this;
    }

    /**
     * 当月结算二级行业
     * @return string
     */
    public function getSettlementSecondIndustryName(): ?string
    {
        return $this->settlementSecondIndustryName;
    }

    /**
     * 当月结算二级行业
     * @param string $settlementSecondIndustryName
     * @return self
     */
    public function setSettlementSecondIndustryName(?string $settlementSecondIndustryName): self
    {
        $this->settlementSecondIndustryName = $settlementSecondIndustryName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSettlementStatsType
     */
    public function getSettlementStatsType(): ?string
    {
        return $this->settlementStatsType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSettlementStatsType $settlementStatsType
     * @return self
     */
    public function setSettlementStatsType(?string $settlementStatsType): self
    {
        $this->settlementStatsType = $settlementStatsType;
        return $this;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getSpuId(): ?int
    {
        return $this->spuId;
    }

    /**
     * 商品ID
     * @param int $spuId
     * @return self
     */
    public function setSpuId(?int $spuId): self
    {
        $this->spuId = $spuId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSpuLabelName
     */
    public function getSpuLabelName(): ?string
    {
        return $this->spuLabelName;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSpuLabelName $spuLabelName
     * @return self
     */
    public function setSpuLabelName(?string $spuLabelName): self
    {
        $this->spuLabelName = $spuLabelName;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getSpuName(): ?string
    {
        return $this->spuName;
    }

    /**
     * 商品名称
     * @param string $spuName
     * @return self
     */
    public function setSpuName(?string $spuName): self
    {
        $this->spuName = $spuName;
        return $this;
    }

    /**
     * 共享钱包消耗(单位：千分之一分)
     * @return int
     */
    public function getSubSharedWalletCost(): ?int
    {
        return $this->subSharedWalletCost;
    }

    /**
     * 共享钱包消耗(单位：千分之一分)
     * @param int $subSharedWalletCost
     * @return self
     */
    public function setSubSharedWalletCost(?int $subSharedWalletCost): self
    {
        $this->subSharedWalletCost = $subSharedWalletCost;
        return $this;
    }

    /**
     * 共享授信消耗(单位：千分之一分)
     * @return int
     */
    public function getSubSharedWalletCreditCost(): ?int
    {
        return $this->subSharedWalletCreditCost;
    }

    /**
     * 共享授信消耗(单位：千分之一分)
     * @param int $subSharedWalletCreditCost
     * @return self
     */
    public function setSubSharedWalletCreditCost(?int $subSharedWalletCreditCost): self
    {
        $this->subSharedWalletCreditCost = $subSharedWalletCreditCost;
        return $this;
    }

    /**
     * 共享子钱包ID
     * @return int
     */
    public function getSubSharedWalletId(): ?int
    {
        return $this->subSharedWalletId;
    }

    /**
     * 共享子钱包ID
     * @param int $subSharedWalletId
     * @return self
     */
    public function setSubSharedWalletId(?int $subSharedWalletId): self
    {
        $this->subSharedWalletId = $subSharedWalletId;
        return $this;
    }

    /**
     * 共享子钱包名称
     * @return string
     */
    public function getSubSharedWalletName(): ?string
    {
        return $this->subSharedWalletName;
    }

    /**
     * 共享子钱包名称
     * @param string $subSharedWalletName
     * @return self
     */
    public function setSubSharedWalletName(?string $subSharedWalletName): self
    {
        $this->subSharedWalletName = $subSharedWalletName;
        return $this;
    }

    /**
     * 共享预付消耗(单位：千分之一分)
     * @return int
     */
    public function getSubSharedWalletPrepayCost(): ?int
    {
        return $this->subSharedWalletPrepayCost;
    }

    /**
     * 共享预付消耗(单位：千分之一分)
     * @param int $subSharedWalletPrepayCost
     * @return self
     */
    public function setSubSharedWalletPrepayCost(?int $subSharedWalletPrepayCost): self
    {
        $this->subSharedWalletPrepayCost = $subSharedWalletPrepayCost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSystemOrigin
     */
    public function getSystemOrigin(): ?string
    {
        return $this->systemOrigin;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2DataListSystemOrigin $systemOrigin
     * @return self
     */
    public function setSystemOrigin(?string $systemOrigin): self
    {
        $this->systemOrigin = $systemOrigin;
        return $this;
    }

    /**
     * 唯一键，用于游标方式分页查询
     * @return string
     */
    public function getUniqueKey(): ?string
    {
        return $this->uniqueKey;
    }

    /**
     * 唯一键，用于游标方式分页查询
     * @param string $uniqueKey
     * @return self
     */
    public function setUniqueKey(?string $uniqueKey): self
    {
        $this->uniqueKey = $uniqueKey;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advId !== null) {
            $result['adv_id'] = $this->advId;
        }
        if ($this->advName !== null) {
            $result['adv_name'] = $this->advName;
        }
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->agentName !== null) {
            $result['agent_name'] = $this->agentName;
        }
        if ($this->agentPerformanceCost !== null) {
            $result['agent_performance_cost'] = $this->agentPerformanceCost;
        }
        if ($this->agentPerformanceGrantCost !== null) {
            $result['agent_performance_grant_cost'] = $this->agentPerformanceGrantCost;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->attributionDate !== null) {
            $result['attribution_date'] = $this->attributionDate;
        }
        if ($this->brandProductSecondType !== null) {
            $result['brand_product_second_type'] = $this->brandProductSecondType;
        }
        if ($this->brandProductSecondTypeName !== null) {
            $result['brand_product_second_type_name'] = $this->brandProductSecondTypeName;
        }
        if ($this->businessType !== null) {
            $result['business_type'] = $this->businessType;
        }
        if ($this->businessTypeName !== null) {
            $result['business_type_name'] = $this->businessTypeName;
        }
        if ($this->cartId !== null) {
            $result['cart_id'] = $this->cartId;
        }
        if ($this->cashbackType !== null) {
            $result['cashback_type'] = $this->cashbackType;
        }
        if ($this->cashbackTypeName !== null) {
            $result['cashback_type_name'] = $this->cashbackTypeName;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->costSource !== null) {
            $result['cost_source'] = $this->costSource;
        }
        if ($this->costSourceName !== null) {
            $result['cost_source_name'] = $this->costSourceName;
        }
        if ($this->cpt !== null) {
            $result['cpt'] = $this->cpt;
        }
        if ($this->cptName !== null) {
            $result['cpt_name'] = $this->cptName;
        }
        if ($this->creditCost !== null) {
            $result['credit_cost'] = $this->creditCost;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->customerName !== null) {
            $result['customer_name'] = $this->customerName;
        }
        if ($this->customerPerformanceGrantCost !== null) {
            $result['customer_performance_grant_cost'] = $this->customerPerformanceGrantCost;
        }
        if ($this->ecommerceType !== null) {
            $result['ecommerce_type'] = $this->ecommerceType;
        }
        if ($this->feedslive !== null) {
            $result['feedslive'] = $this->feedslive;
        }
        if ($this->feedsliveName !== null) {
            $result['feedslive_name'] = $this->feedsliveName;
        }
        if ($this->firstAgentId !== null) {
            $result['first_agent_id'] = $this->firstAgentId;
        }
        if ($this->firstAgentName !== null) {
            $result['first_agent_name'] = $this->firstAgentName;
        }
        if ($this->firstIndustry !== null) {
            $result['first_industry'] = $this->firstIndustry;
        }
        if ($this->grantCost !== null) {
            $result['grant_cost'] = $this->grantCost;
        }
        if ($this->intentionNo !== null) {
            $result['intention_no'] = $this->intentionNo;
        }
        if ($this->isMatchingProvince !== null) {
            $result['is_matching_province'] = $this->isMatchingProvince;
        }
        if ($this->merchNo !== null) {
            $result['merch_no'] = $this->merchNo;
        }
        if ($this->noGrantCost !== null) {
            $result['no_grant_cost'] = $this->noGrantCost;
        }
        if ($this->prepayCost !== null) {
            $result['prepay_cost'] = $this->prepayCost;
        }
        if ($this->pricingCategory !== null) {
            $result['pricing_category'] = $this->pricingCategory;
        }
        if ($this->pricingCategoryName !== null) {
            $result['pricing_category_name'] = $this->pricingCategoryName;
        }
        if ($this->projectName !== null) {
            $result['project_name'] = $this->projectName;
        }
        if ($this->projectSerial !== null) {
            $result['project_serial'] = $this->projectSerial;
        }
        if ($this->promotionType !== null) {
            $result['promotion_type'] = $this->promotionType;
        }
        if ($this->registerTime !== null) {
            $result['register_time'] = $this->registerTime;
        }
        if ($this->saleId !== null) {
            $result['sale_id'] = $this->saleId;
        }
        if ($this->saleName !== null) {
            $result['sale_name'] = $this->saleName;
        }
        if ($this->secondAgentId !== null) {
            $result['second_agent_id'] = $this->secondAgentId;
        }
        if ($this->secondAgentName !== null) {
            $result['second_agent_name'] = $this->secondAgentName;
        }
        if ($this->secondIndustry !== null) {
            $result['second_industry'] = $this->secondIndustry;
        }
        if ($this->settlementFirstIndustryName !== null) {
            $result['settlement_first_industry_name'] = $this->settlementFirstIndustryName;
        }
        if ($this->settlementInternalIndustryCategory !== null) {
            $result['settlement_internal_industry_category'] = $this->settlementInternalIndustryCategory;
        }
        if ($this->settlementSecondIndustryName !== null) {
            $result['settlement_second_industry_name'] = $this->settlementSecondIndustryName;
        }
        if ($this->settlementStatsType !== null) {
            $result['settlement_stats_type'] = $this->settlementStatsType;
        }
        if ($this->spuId !== null) {
            $result['spu_id'] = $this->spuId;
        }
        if ($this->spuLabelName !== null) {
            $result['spu_label_name'] = $this->spuLabelName;
        }
        if ($this->spuName !== null) {
            $result['spu_name'] = $this->spuName;
        }
        if ($this->subSharedWalletCost !== null) {
            $result['sub_shared_wallet_cost'] = $this->subSharedWalletCost;
        }
        if ($this->subSharedWalletCreditCost !== null) {
            $result['sub_shared_wallet_credit_cost'] = $this->subSharedWalletCreditCost;
        }
        if ($this->subSharedWalletId !== null) {
            $result['sub_shared_wallet_id'] = $this->subSharedWalletId;
        }
        if ($this->subSharedWalletName !== null) {
            $result['sub_shared_wallet_name'] = $this->subSharedWalletName;
        }
        if ($this->subSharedWalletPrepayCost !== null) {
            $result['sub_shared_wallet_prepay_cost'] = $this->subSharedWalletPrepayCost;
        }
        if ($this->systemOrigin !== null) {
            $result['system_origin'] = $this->systemOrigin;
        }
        if ($this->uniqueKey !== null) {
            $result['unique_key'] = $this->uniqueKey;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_id'] ?? null) !== null) {
            $obj->advId = (int) $v;
        }
        if (($v = $data['adv_name'] ?? null) !== null) {
            $obj->advName = (string) $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['agent_name'] ?? null) !== null) {
            $obj->agentName = (string) $v;
        }
        if (($v = $data['agent_performance_cost'] ?? null) !== null) {
            $obj->agentPerformanceCost = (int) $v;
        }
        if (($v = $data['agent_performance_grant_cost'] ?? null) !== null) {
            $obj->agentPerformanceGrantCost = (int) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['attribution_date'] ?? null) !== null) {
            $obj->attributionDate = (string) $v;
        }
        if (($v = $data['brand_product_second_type'] ?? null) !== null) {
            $obj->brandProductSecondType = (int) $v;
        }
        if (($v = $data['brand_product_second_type_name'] ?? null) !== null) {
            $obj->brandProductSecondTypeName = (string) $v;
        }
        if (($v = $data['business_type'] ?? null) !== null) {
            $obj->businessType = (string) $v;
        }
        if (($v = $data['business_type_name'] ?? null) !== null) {
            $obj->businessTypeName = (string) $v;
        }
        if (($v = $data['cart_id'] ?? null) !== null) {
            $obj->cartId = (int) $v;
        }
        if (($v = $data['cashback_type'] ?? null) !== null) {
            $obj->cashbackType = (string) $v;
        }
        if (($v = $data['cashback_type_name'] ?? null) !== null) {
            $obj->cashbackTypeName = (string) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (int) $v;
        }
        if (($v = $data['cost_source'] ?? null) !== null) {
            $obj->costSource = (string) $v;
        }
        if (($v = $data['cost_source_name'] ?? null) !== null) {
            $obj->costSourceName = (string) $v;
        }
        if (($v = $data['cpt'] ?? null) !== null) {
            $obj->cpt = (string) $v;
        }
        if (($v = $data['cpt_name'] ?? null) !== null) {
            $obj->cptName = (string) $v;
        }
        if (($v = $data['credit_cost'] ?? null) !== null) {
            $obj->creditCost = (int) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['customer_name'] ?? null) !== null) {
            $obj->customerName = (string) $v;
        }
        if (($v = $data['customer_performance_grant_cost'] ?? null) !== null) {
            $obj->customerPerformanceGrantCost = (int) $v;
        }
        if (($v = $data['ecommerce_type'] ?? null) !== null) {
            $obj->ecommerceType = (string) $v;
        }
        if (($v = $data['feedslive'] ?? null) !== null) {
            $obj->feedslive = (string) $v;
        }
        if (($v = $data['feedslive_name'] ?? null) !== null) {
            $obj->feedsliveName = (string) $v;
        }
        if (($v = $data['first_agent_id'] ?? null) !== null) {
            $obj->firstAgentId = (int) $v;
        }
        if (($v = $data['first_agent_name'] ?? null) !== null) {
            $obj->firstAgentName = (string) $v;
        }
        if (($v = $data['first_industry'] ?? null) !== null) {
            $obj->firstIndustry = (string) $v;
        }
        if (($v = $data['grant_cost'] ?? null) !== null) {
            $obj->grantCost = (int) $v;
        }
        if (($v = $data['intention_no'] ?? null) !== null) {
            $obj->intentionNo = (string) $v;
        }
        if (($v = $data['is_matching_province'] ?? null) !== null) {
            $obj->isMatchingProvince = (string) $v;
        }
        if (($v = $data['merch_no'] ?? null) !== null) {
            $obj->merchNo = (string) $v;
        }
        if (($v = $data['no_grant_cost'] ?? null) !== null) {
            $obj->noGrantCost = (int) $v;
        }
        if (($v = $data['prepay_cost'] ?? null) !== null) {
            $obj->prepayCost = (int) $v;
        }
        if (($v = $data['pricing_category'] ?? null) !== null) {
            $obj->pricingCategory = (string) $v;
        }
        if (($v = $data['pricing_category_name'] ?? null) !== null) {
            $obj->pricingCategoryName = (string) $v;
        }
        if (($v = $data['project_name'] ?? null) !== null) {
            $obj->projectName = (string) $v;
        }
        if (($v = $data['project_serial'] ?? null) !== null) {
            $obj->projectSerial = (string) $v;
        }
        if (($v = $data['promotion_type'] ?? null) !== null) {
            $obj->promotionType = (int) $v;
        }
        if (($v = $data['register_time'] ?? null) !== null) {
            $obj->registerTime = (string) $v;
        }
        if (($v = $data['sale_id'] ?? null) !== null) {
            $obj->saleId = (int) $v;
        }
        if (($v = $data['sale_name'] ?? null) !== null) {
            $obj->saleName = (string) $v;
        }
        if (($v = $data['second_agent_id'] ?? null) !== null) {
            $obj->secondAgentId = (int) $v;
        }
        if (($v = $data['second_agent_name'] ?? null) !== null) {
            $obj->secondAgentName = (string) $v;
        }
        if (($v = $data['second_industry'] ?? null) !== null) {
            $obj->secondIndustry = (string) $v;
        }
        if (($v = $data['settlement_first_industry_name'] ?? null) !== null) {
            $obj->settlementFirstIndustryName = (string) $v;
        }
        if (($v = $data['settlement_internal_industry_category'] ?? null) !== null) {
            $obj->settlementInternalIndustryCategory = (string) $v;
        }
        if (($v = $data['settlement_second_industry_name'] ?? null) !== null) {
            $obj->settlementSecondIndustryName = (string) $v;
        }
        if (($v = $data['settlement_stats_type'] ?? null) !== null) {
            $obj->settlementStatsType = (string) $v;
        }
        if (($v = $data['spu_id'] ?? null) !== null) {
            $obj->spuId = (int) $v;
        }
        if (($v = $data['spu_label_name'] ?? null) !== null) {
            $obj->spuLabelName = (string) $v;
        }
        if (($v = $data['spu_name'] ?? null) !== null) {
            $obj->spuName = (string) $v;
        }
        if (($v = $data['sub_shared_wallet_cost'] ?? null) !== null) {
            $obj->subSharedWalletCost = (int) $v;
        }
        if (($v = $data['sub_shared_wallet_credit_cost'] ?? null) !== null) {
            $obj->subSharedWalletCreditCost = (int) $v;
        }
        if (($v = $data['sub_shared_wallet_id'] ?? null) !== null) {
            $obj->subSharedWalletId = (int) $v;
        }
        if (($v = $data['sub_shared_wallet_name'] ?? null) !== null) {
            $obj->subSharedWalletName = (string) $v;
        }
        if (($v = $data['sub_shared_wallet_prepay_cost'] ?? null) !== null) {
            $obj->subSharedWalletPrepayCost = (int) $v;
        }
        if (($v = $data['system_origin'] ?? null) !== null) {
            $obj->systemOrigin = (string) $v;
        }
        if (($v = $data['unique_key'] ?? null) !== null) {
            $obj->uniqueKey = (string) $v;
        }
        return $obj;
    }
}
