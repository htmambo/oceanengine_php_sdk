<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvCostReportListQueryV2RequestFiltering implements \JsonSerializable
{
    /**
     * 广告主 id
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 代理商客户id
     * @var int
     */
    protected ?int $agentCustomerId = null;

    /**
     * 代理商客户id列表，支持多选查询
     * @var int[]
     */
    protected ?array $agentCustomerIds = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringAppName
     */
    protected ?string $appName = null;

    /**
     * 排期 ID
     * @var int
     */
    protected ?int $cartId = null;

    /**
     * 广告主所属公司Id列表，支持多选查询。
     * @var int[]
     */
    protected ?array $companyIds = null;

    /**
     * 广告主所属公司名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询。
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringCostSource
     */
    protected ?string $costSource = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringEcommerceType
     */
    protected ?string $ecommerceType = null;

    /**
     * 一级行业名称。可从【获取行业列表】接口获取。
     * @var string
     */
    protected ?string $firstIndustry = null;

    /**
     * 招商意向编号
     * @var string
     */
    protected ?string $intentionNo = null;

    /**
     * 招商项目编号
     * @var string
     */
    protected ?string $merchNo = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringPricingCategory
     */
    protected ?string $pricingCategory = null;

    /**
     * 项目名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询
     * @var string
     */
    protected ?string $projectName = null;

    /**
     * 项目编号
     * @var string
     */
    protected ?string $projectSerial = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringPromotionType
     */
    protected ?string $promotionType = null;

    /**
     * 代理商子账户id
     * @var int
     */
    protected ?int $secondAdAgentId = null;

    /**
     * 二级行业名称。可从【获取行业列表】接口获取。
     * @var string
     */
    protected ?string $secondIndustry = null;

    /**
     * 二级行业列表，支持多个行业查询。可从【获取行业列表】接口获取。
     * @var string[]
     */
    protected ?array $secondIndustryList = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringSpuLabelName[]
     */
    protected ?array $spuLabelName = null;

    /**
     * 广告主 id
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 广告主 id
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 代理商客户id
     * @return int
     */
    public function getAgentCustomerId(): ?int
    {
        return $this->agentCustomerId;
    }

    /**
     * 代理商客户id
     * @param int $agentCustomerId
     * @return self
     */
    public function setAgentCustomerId(?int $agentCustomerId): self
    {
        $this->agentCustomerId = $agentCustomerId;
        return $this;
    }

    /**
     * 代理商客户id列表，支持多选查询
     * @return int[]
     */
    public function getAgentCustomerIds(): ?array
    {
        return $this->agentCustomerIds;
    }

    /**
     * 代理商客户id列表，支持多选查询
     * @param int[] $agentCustomerIds
     * @return self
     */
    public function setAgentCustomerIds(?array $agentCustomerIds): self
    {
        $this->agentCustomerIds = $agentCustomerIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringAppName
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringAppName $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
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
     * 广告主所属公司Id列表，支持多选查询。
     * @return int[]
     */
    public function getCompanyIds(): ?array
    {
        return $this->companyIds;
    }

    /**
     * 广告主所属公司Id列表，支持多选查询。
     * @param int[] $companyIds
     * @return self
     */
    public function setCompanyIds(?array $companyIds): self
    {
        $this->companyIds = $companyIds;
        return $this;
    }

    /**
     * 广告主所属公司名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询。
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 广告主所属公司名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询。
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringCostSource
     */
    public function getCostSource(): ?string
    {
        return $this->costSource;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringCostSource $costSource
     * @return self
     */
    public function setCostSource(?string $costSource): self
    {
        $this->costSource = $costSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringEcommerceType
     */
    public function getEcommerceType(): ?string
    {
        return $this->ecommerceType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringEcommerceType $ecommerceType
     * @return self
     */
    public function setEcommerceType(?string $ecommerceType): self
    {
        $this->ecommerceType = $ecommerceType;
        return $this;
    }

    /**
     * 一级行业名称。可从【获取行业列表】接口获取。
     * @return string
     */
    public function getFirstIndustry(): ?string
    {
        return $this->firstIndustry;
    }

    /**
     * 一级行业名称。可从【获取行业列表】接口获取。
     * @param string $firstIndustry
     * @return self
     */
    public function setFirstIndustry(?string $firstIndustry): self
    {
        $this->firstIndustry = $firstIndustry;
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
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringPricingCategory
     */
    public function getPricingCategory(): ?string
    {
        return $this->pricingCategory;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringPricingCategory $pricingCategory
     * @return self
     */
    public function setPricingCategory(?string $pricingCategory): self
    {
        $this->pricingCategory = $pricingCategory;
        return $this;
    }

    /**
     * 项目名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询
     * @return string
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * 项目名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询
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
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringPromotionType
     */
    public function getPromotionType(): ?string
    {
        return $this->promotionType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringPromotionType $promotionType
     * @return self
     */
    public function setPromotionType(?string $promotionType): self
    {
        $this->promotionType = $promotionType;
        return $this;
    }

    /**
     * 代理商子账户id
     * @return int
     */
    public function getSecondAdAgentId(): ?int
    {
        return $this->secondAdAgentId;
    }

    /**
     * 代理商子账户id
     * @param int $secondAdAgentId
     * @return self
     */
    public function setSecondAdAgentId(?int $secondAdAgentId): self
    {
        $this->secondAdAgentId = $secondAdAgentId;
        return $this;
    }

    /**
     * 二级行业名称。可从【获取行业列表】接口获取。
     * @return string
     */
    public function getSecondIndustry(): ?string
    {
        return $this->secondIndustry;
    }

    /**
     * 二级行业名称。可从【获取行业列表】接口获取。
     * @param string $secondIndustry
     * @return self
     */
    public function setSecondIndustry(?string $secondIndustry): self
    {
        $this->secondIndustry = $secondIndustry;
        return $this;
    }

    /**
     * 二级行业列表，支持多个行业查询。可从【获取行业列表】接口获取。
     * @return string[]
     */
    public function getSecondIndustryList(): ?array
    {
        return $this->secondIndustryList;
    }

    /**
     * 二级行业列表，支持多个行业查询。可从【获取行业列表】接口获取。
     * @param string[] $secondIndustryList
     * @return self
     */
    public function setSecondIndustryList(?array $secondIndustryList): self
    {
        $this->secondIndustryList = $secondIndustryList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringSpuLabelName[]
     */
    public function getSpuLabelName(): ?array
    {
        return $this->spuLabelName;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2FilteringSpuLabelName[] $spuLabelName
     * @return self
     */
    public function setSpuLabelName(?array $spuLabelName): self
    {
        $this->spuLabelName = $spuLabelName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->agentCustomerId !== null) {
            $result['agent_customer_id'] = $this->agentCustomerId;
        }
        if ($this->agentCustomerIds !== null) {
            $result['agent_customer_ids'] = $this->agentCustomerIds;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->cartId !== null) {
            $result['cart_id'] = $this->cartId;
        }
        if ($this->companyIds !== null) {
            $result['company_ids'] = $this->companyIds;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->costSource !== null) {
            $result['cost_source'] = $this->costSource;
        }
        if ($this->ecommerceType !== null) {
            $result['ecommerce_type'] = $this->ecommerceType;
        }
        if ($this->firstIndustry !== null) {
            $result['first_industry'] = $this->firstIndustry;
        }
        if ($this->intentionNo !== null) {
            $result['intention_no'] = $this->intentionNo;
        }
        if ($this->merchNo !== null) {
            $result['merch_no'] = $this->merchNo;
        }
        if ($this->pricingCategory !== null) {
            $result['pricing_category'] = $this->pricingCategory;
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
        if ($this->secondAdAgentId !== null) {
            $result['second_ad_agent_id'] = $this->secondAdAgentId;
        }
        if ($this->secondIndustry !== null) {
            $result['second_industry'] = $this->secondIndustry;
        }
        if ($this->secondIndustryList !== null) {
            $result['second_industry_list'] = $this->secondIndustryList;
        }
        if ($this->spuLabelName !== null) {
            $result['spu_label_name'] = $this->spuLabelName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['agent_customer_id'] ?? null) !== null) {
            $obj->agentCustomerId = (int) $v;
        }
        if (($v = $data['agent_customer_ids'] ?? null) !== null && is_array($v)) {
            $obj->agentCustomerIds = $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['cart_id'] ?? null) !== null) {
            $obj->cartId = (int) $v;
        }
        if (($v = $data['company_ids'] ?? null) !== null && is_array($v)) {
            $obj->companyIds = $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['cost_source'] ?? null) !== null) {
            $obj->costSource = (string) $v;
        }
        if (($v = $data['ecommerce_type'] ?? null) !== null) {
            $obj->ecommerceType = (string) $v;
        }
        if (($v = $data['first_industry'] ?? null) !== null) {
            $obj->firstIndustry = (string) $v;
        }
        if (($v = $data['intention_no'] ?? null) !== null) {
            $obj->intentionNo = (string) $v;
        }
        if (($v = $data['merch_no'] ?? null) !== null) {
            $obj->merchNo = (string) $v;
        }
        if (($v = $data['pricing_category'] ?? null) !== null) {
            $obj->pricingCategory = (string) $v;
        }
        if (($v = $data['project_name'] ?? null) !== null) {
            $obj->projectName = (string) $v;
        }
        if (($v = $data['project_serial'] ?? null) !== null) {
            $obj->projectSerial = (string) $v;
        }
        if (($v = $data['promotion_type'] ?? null) !== null) {
            $obj->promotionType = (string) $v;
        }
        if (($v = $data['second_ad_agent_id'] ?? null) !== null) {
            $obj->secondAdAgentId = (int) $v;
        }
        if (($v = $data['second_industry'] ?? null) !== null) {
            $obj->secondIndustry = (string) $v;
        }
        if (($v = $data['second_industry_list'] ?? null) !== null && is_array($v)) {
            $obj->secondIndustryList = $v;
        }
        if (($v = $data['spu_label_name'] ?? null) !== null && is_array($v)) {
            $obj->spuLabelName = $v;
        }
        return $obj;
    }
}
