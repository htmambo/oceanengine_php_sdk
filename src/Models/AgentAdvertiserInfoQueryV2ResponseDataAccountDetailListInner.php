<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInner implements \JsonSerializable
{
    /**
     * 广告主公司ID
     * @var int
     */
    protected ?int $advCompanyId = null;

    /**
     * 广告主公司名称
     * @var string
     */
    protected ?string $advCompanyName = null;

    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 广告主账户名称
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus
     */
    protected ?string $advertiserStatus = null;

    /**
     * 对公认证过期时间
     * @var string
     */
    protected ?string $authExpireDate = null;

    /**
     * 广告主账户与代理商账户的绑定时间
     * @var string
     */
    protected ?string $bindTime = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerBrandCollaboratorsInner[]
     */
    protected ?array $brandCollaborators = null;

    /**
     * 品牌权限负责人id
     * @var int
     */
    protected ?int $brandOptimizerId = null;

    /**
     * 品牌权限负责人姓名
     * @var string
     */
    protected ?string $brandOptimizerName = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerCollaboratorsInner[]
     */
    protected ?array $collaborators = null;

    /**
     * 联系人姓名
     * @var string
     */
    protected ?string $contactName = null;

    /**
     * 广告主账户创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 直客销售名称
     * @var string
     */
    protected ?string $customerSaleName = null;

    /**
     * 一代代理商公司ID
     * @var int
     */
    protected ?int $firstAgentCompanyId = null;

    /**
     * 一代代理商公司名称
     * @var string
     */
    protected ?string $firstAgentCompanyName = null;

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
     * 一级行业名称
     * @var string
     */
    protected ?string $firstIndustryName = null;

    /**
     * 竞价权限负责人id
     * @var int
     */
    protected ?int $optimizerId = null;

    /**
     * 竞价权限负责人姓名
     * @var string
     */
    protected ?string $optimizerName = null;

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
     * 二级行业名称
     * @var string
     */
    protected ?string $secondIndustryName = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag
     */
    protected ?string $selfOperationTag = null;

    /**
     * 广告主公司ID
     * @return int
     */
    public function getAdvCompanyId(): ?int
    {
        return $this->advCompanyId;
    }

    /**
     * 广告主公司ID
     * @param int $advCompanyId
     * @return self
     */
    public function setAdvCompanyId(?int $advCompanyId): self
    {
        $this->advCompanyId = $advCompanyId;
        return $this;
    }

    /**
     * 广告主公司名称
     * @return string
     */
    public function getAdvCompanyName(): ?string
    {
        return $this->advCompanyName;
    }

    /**
     * 广告主公司名称
     * @param string $advCompanyName
     * @return self
     */
    public function setAdvCompanyName(?string $advCompanyName): self
    {
        $this->advCompanyName = $advCompanyName;
        return $this;
    }

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告主账户名称
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 广告主账户名称
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus
     */
    public function getAdvertiserStatus(): ?string
    {
        return $this->advertiserStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus $advertiserStatus
     * @return self
     */
    public function setAdvertiserStatus(?string $advertiserStatus): self
    {
        $this->advertiserStatus = $advertiserStatus;
        return $this;
    }

    /**
     * 对公认证过期时间
     * @return string
     */
    public function getAuthExpireDate(): ?string
    {
        return $this->authExpireDate;
    }

    /**
     * 对公认证过期时间
     * @param string $authExpireDate
     * @return self
     */
    public function setAuthExpireDate(?string $authExpireDate): self
    {
        $this->authExpireDate = $authExpireDate;
        return $this;
    }

    /**
     * 广告主账户与代理商账户的绑定时间
     * @return string
     */
    public function getBindTime(): ?string
    {
        return $this->bindTime;
    }

    /**
     * 广告主账户与代理商账户的绑定时间
     * @param string $bindTime
     * @return self
     */
    public function setBindTime(?string $bindTime): self
    {
        $this->bindTime = $bindTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerBrandCollaboratorsInner[]
     */
    public function getBrandCollaborators(): ?array
    {
        return $this->brandCollaborators;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerBrandCollaboratorsInner[] $brandCollaborators
     * @return self
     */
    public function setBrandCollaborators(?array $brandCollaborators): self
    {
        $this->brandCollaborators = $brandCollaborators;
        return $this;
    }

    /**
     * 品牌权限负责人id
     * @return int
     */
    public function getBrandOptimizerId(): ?int
    {
        return $this->brandOptimizerId;
    }

    /**
     * 品牌权限负责人id
     * @param int $brandOptimizerId
     * @return self
     */
    public function setBrandOptimizerId(?int $brandOptimizerId): self
    {
        $this->brandOptimizerId = $brandOptimizerId;
        return $this;
    }

    /**
     * 品牌权限负责人姓名
     * @return string
     */
    public function getBrandOptimizerName(): ?string
    {
        return $this->brandOptimizerName;
    }

    /**
     * 品牌权限负责人姓名
     * @param string $brandOptimizerName
     * @return self
     */
    public function setBrandOptimizerName(?string $brandOptimizerName): self
    {
        $this->brandOptimizerName = $brandOptimizerName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerCollaboratorsInner[]
     */
    public function getCollaborators(): ?array
    {
        return $this->collaborators;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerCollaboratorsInner[] $collaborators
     * @return self
     */
    public function setCollaborators(?array $collaborators): self
    {
        $this->collaborators = $collaborators;
        return $this;
    }

    /**
     * 联系人姓名
     * @return string
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * 联系人姓名
     * @param string $contactName
     * @return self
     */
    public function setContactName(?string $contactName): self
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * 广告主账户创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 广告主账户创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 直客销售名称
     * @return string
     */
    public function getCustomerSaleName(): ?string
    {
        return $this->customerSaleName;
    }

    /**
     * 直客销售名称
     * @param string $customerSaleName
     * @return self
     */
    public function setCustomerSaleName(?string $customerSaleName): self
    {
        $this->customerSaleName = $customerSaleName;
        return $this;
    }

    /**
     * 一代代理商公司ID
     * @return int
     */
    public function getFirstAgentCompanyId(): ?int
    {
        return $this->firstAgentCompanyId;
    }

    /**
     * 一代代理商公司ID
     * @param int $firstAgentCompanyId
     * @return self
     */
    public function setFirstAgentCompanyId(?int $firstAgentCompanyId): self
    {
        $this->firstAgentCompanyId = $firstAgentCompanyId;
        return $this;
    }

    /**
     * 一代代理商公司名称
     * @return string
     */
    public function getFirstAgentCompanyName(): ?string
    {
        return $this->firstAgentCompanyName;
    }

    /**
     * 一代代理商公司名称
     * @param string $firstAgentCompanyName
     * @return self
     */
    public function setFirstAgentCompanyName(?string $firstAgentCompanyName): self
    {
        $this->firstAgentCompanyName = $firstAgentCompanyName;
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
     * 一级行业名称
     * @return string
     */
    public function getFirstIndustryName(): ?string
    {
        return $this->firstIndustryName;
    }

    /**
     * 一级行业名称
     * @param string $firstIndustryName
     * @return self
     */
    public function setFirstIndustryName(?string $firstIndustryName): self
    {
        $this->firstIndustryName = $firstIndustryName;
        return $this;
    }

    /**
     * 竞价权限负责人id
     * @return int
     */
    public function getOptimizerId(): ?int
    {
        return $this->optimizerId;
    }

    /**
     * 竞价权限负责人id
     * @param int $optimizerId
     * @return self
     */
    public function setOptimizerId(?int $optimizerId): self
    {
        $this->optimizerId = $optimizerId;
        return $this;
    }

    /**
     * 竞价权限负责人姓名
     * @return string
     */
    public function getOptimizerName(): ?string
    {
        return $this->optimizerName;
    }

    /**
     * 竞价权限负责人姓名
     * @param string $optimizerName
     * @return self
     */
    public function setOptimizerName(?string $optimizerName): self
    {
        $this->optimizerName = $optimizerName;
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
     * 二级行业名称
     * @return string
     */
    public function getSecondIndustryName(): ?string
    {
        return $this->secondIndustryName;
    }

    /**
     * 二级行业名称
     * @param string $secondIndustryName
     * @return self
     */
    public function setSecondIndustryName(?string $secondIndustryName): self
    {
        $this->secondIndustryName = $secondIndustryName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag
     */
    public function getSelfOperationTag(): ?string
    {
        return $this->selfOperationTag;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag $selfOperationTag
     * @return self
     */
    public function setSelfOperationTag(?string $selfOperationTag): self
    {
        $this->selfOperationTag = $selfOperationTag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advCompanyId !== null) {
            $result['adv_company_id'] = $this->advCompanyId;
        }
        if ($this->advCompanyName !== null) {
            $result['adv_company_name'] = $this->advCompanyName;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->advertiserStatus !== null) {
            $result['advertiser_status'] = $this->advertiserStatus;
        }
        if ($this->authExpireDate !== null) {
            $result['auth_expire_date'] = $this->authExpireDate;
        }
        if ($this->bindTime !== null) {
            $result['bind_time'] = $this->bindTime;
        }
        if ($this->brandCollaborators !== null) {
            $result['brand_collaborators'] = $this->brandCollaborators;
        }
        if ($this->brandOptimizerId !== null) {
            $result['brand_optimizer_id'] = $this->brandOptimizerId;
        }
        if ($this->brandOptimizerName !== null) {
            $result['brand_optimizer_name'] = $this->brandOptimizerName;
        }
        if ($this->collaborators !== null) {
            $result['collaborators'] = $this->collaborators;
        }
        if ($this->contactName !== null) {
            $result['contact_name'] = $this->contactName;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->customerSaleName !== null) {
            $result['customer_sale_name'] = $this->customerSaleName;
        }
        if ($this->firstAgentCompanyId !== null) {
            $result['first_agent_company_id'] = $this->firstAgentCompanyId;
        }
        if ($this->firstAgentCompanyName !== null) {
            $result['first_agent_company_name'] = $this->firstAgentCompanyName;
        }
        if ($this->firstAgentId !== null) {
            $result['first_agent_id'] = $this->firstAgentId;
        }
        if ($this->firstAgentName !== null) {
            $result['first_agent_name'] = $this->firstAgentName;
        }
        if ($this->firstIndustryName !== null) {
            $result['first_industry_name'] = $this->firstIndustryName;
        }
        if ($this->optimizerId !== null) {
            $result['optimizer_id'] = $this->optimizerId;
        }
        if ($this->optimizerName !== null) {
            $result['optimizer_name'] = $this->optimizerName;
        }
        if ($this->saleId !== null) {
            $result['sale_id'] = $this->saleId;
        }
        if ($this->saleName !== null) {
            $result['sale_name'] = $this->saleName;
        }
        if ($this->secondIndustryName !== null) {
            $result['second_industry_name'] = $this->secondIndustryName;
        }
        if ($this->selfOperationTag !== null) {
            $result['self_operation_tag'] = $this->selfOperationTag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_company_id'] ?? null) !== null) {
            $obj->advCompanyId = (int) $v;
        }
        if (($v = $data['adv_company_name'] ?? null) !== null) {
            $obj->advCompanyName = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['advertiser_status'] ?? null) !== null) {
            $obj->advertiserStatus = (string) $v;
        }
        if (($v = $data['auth_expire_date'] ?? null) !== null) {
            $obj->authExpireDate = (string) $v;
        }
        if (($v = $data['bind_time'] ?? null) !== null) {
            $obj->bindTime = (string) $v;
        }
        if (($v = $data['brand_collaborators'] ?? null) !== null && is_array($v)) {
            $obj->brandCollaborators = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerBrandCollaboratorsInner::fromArray($vv), $v);
        }
        if (($v = $data['brand_optimizer_id'] ?? null) !== null) {
            $obj->brandOptimizerId = (int) $v;
        }
        if (($v = $data['brand_optimizer_name'] ?? null) !== null) {
            $obj->brandOptimizerName = (string) $v;
        }
        if (($v = $data['collaborators'] ?? null) !== null && is_array($v)) {
            $obj->collaborators = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInnerCollaboratorsInner::fromArray($vv), $v);
        }
        if (($v = $data['contact_name'] ?? null) !== null) {
            $obj->contactName = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['customer_sale_name'] ?? null) !== null) {
            $obj->customerSaleName = (string) $v;
        }
        if (($v = $data['first_agent_company_id'] ?? null) !== null) {
            $obj->firstAgentCompanyId = (int) $v;
        }
        if (($v = $data['first_agent_company_name'] ?? null) !== null) {
            $obj->firstAgentCompanyName = (string) $v;
        }
        if (($v = $data['first_agent_id'] ?? null) !== null) {
            $obj->firstAgentId = (int) $v;
        }
        if (($v = $data['first_agent_name'] ?? null) !== null) {
            $obj->firstAgentName = (string) $v;
        }
        if (($v = $data['first_industry_name'] ?? null) !== null) {
            $obj->firstIndustryName = (string) $v;
        }
        if (($v = $data['optimizer_id'] ?? null) !== null) {
            $obj->optimizerId = (int) $v;
        }
        if (($v = $data['optimizer_name'] ?? null) !== null) {
            $obj->optimizerName = (string) $v;
        }
        if (($v = $data['sale_id'] ?? null) !== null) {
            $obj->saleId = (int) $v;
        }
        if (($v = $data['sale_name'] ?? null) !== null) {
            $obj->saleName = (string) $v;
        }
        if (($v = $data['second_industry_name'] ?? null) !== null) {
            $obj->secondIndustryName = (string) $v;
        }
        if (($v = $data['self_operation_tag'] ?? null) !== null) {
            $obj->selfOperationTag = (string) $v;
        }
        return $obj;
    }
}
