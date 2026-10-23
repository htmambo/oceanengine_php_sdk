<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentQueryRiskPromotionListV2ResponseDataDataInner implements \JsonSerializable
{
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
     * 代理商公司ID
     * @var int
     */
    protected ?int $agentCompanyId = null;

    /**
     * 代理商公司名称
     * @var string
     */
    protected ?string $agentCompanyName = null;

    /**
     * 代理商账户ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 代理商账户名称
     * @var string
     */
    protected ?string $agentName = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataBusinessType
     */
    protected ?string $businessType = null;

    /**
     * 协作者ID
     * @var int[]
     */
    protected ?array $collaboratorIds = null;

    /**
     * 协作者姓名
     * @var string[]
     */
    protected ?array $collaboratorNames = null;

    /**
     * 客户公司ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 客户公司名称
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataFinalOperatorTag
     */
    protected ?string $finalOperatorTag = null;

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
     * 记录的唯一ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataLocalAdStatus
     */
    protected ?string $localAdStatus = null;

    /**
     * 违规素材列表，包含广告下投前+投中拒审的素材信息
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInner[]
     */
    protected ?array $materialList = null;

    /**
     * 优化师ID
     * @var int
     */
    protected ?int $optimizerId = null;

    /**
     * 优化师姓名
     * @var string
     */
    protected ?string $optimizerName = null;

    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 广告名称
     * @var string
     */
    protected ?string $promotionName = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataPromotionStatus
     */
    protected ?string $promotionStatus = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataPromotionStatusNew
     */
    protected ?string $promotionStatusNew = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus
     */
    protected ?string $qianchuanAdStatus = null;

    /**
     * 推送时间，比如：
     * @var string
     */
    protected ?string $sendTime = null;

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
     * 代理商公司ID
     * @return int
     */
    public function getAgentCompanyId(): ?int
    {
        return $this->agentCompanyId;
    }

    /**
     * 代理商公司ID
     * @param int $agentCompanyId
     * @return self
     */
    public function setAgentCompanyId(?int $agentCompanyId): self
    {
        $this->agentCompanyId = $agentCompanyId;
        return $this;
    }

    /**
     * 代理商公司名称
     * @return string
     */
    public function getAgentCompanyName(): ?string
    {
        return $this->agentCompanyName;
    }

    /**
     * 代理商公司名称
     * @param string $agentCompanyName
     * @return self
     */
    public function setAgentCompanyName(?string $agentCompanyName): self
    {
        $this->agentCompanyName = $agentCompanyName;
        return $this;
    }

    /**
     * 代理商账户ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商账户ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 代理商账户名称
     * @return string
     */
    public function getAgentName(): ?string
    {
        return $this->agentName;
    }

    /**
     * 代理商账户名称
     * @param string $agentName
     * @return self
     */
    public function setAgentName(?string $agentName): self
    {
        $this->agentName = $agentName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataBusinessType
     */
    public function getBusinessType(): ?string
    {
        return $this->businessType;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataBusinessType $businessType
     * @return self
     */
    public function setBusinessType(?string $businessType): self
    {
        $this->businessType = $businessType;
        return $this;
    }

    /**
     * 协作者ID
     * @return int[]
     */
    public function getCollaboratorIds(): ?array
    {
        return $this->collaboratorIds;
    }

    /**
     * 协作者ID
     * @param int[] $collaboratorIds
     * @return self
     */
    public function setCollaboratorIds(?array $collaboratorIds): self
    {
        $this->collaboratorIds = $collaboratorIds;
        return $this;
    }

    /**
     * 协作者姓名
     * @return string[]
     */
    public function getCollaboratorNames(): ?array
    {
        return $this->collaboratorNames;
    }

    /**
     * 协作者姓名
     * @param string[] $collaboratorNames
     * @return self
     */
    public function setCollaboratorNames(?array $collaboratorNames): self
    {
        $this->collaboratorNames = $collaboratorNames;
        return $this;
    }

    /**
     * 客户公司ID
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 客户公司ID
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 客户公司名称
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 客户公司名称
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataFinalOperatorTag
     */
    public function getFinalOperatorTag(): ?string
    {
        return $this->finalOperatorTag;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataFinalOperatorTag $finalOperatorTag
     * @return self
     */
    public function setFinalOperatorTag(?string $finalOperatorTag): self
    {
        $this->finalOperatorTag = $finalOperatorTag;
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
     * 记录的唯一ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 记录的唯一ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataLocalAdStatus
     */
    public function getLocalAdStatus(): ?string
    {
        return $this->localAdStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataLocalAdStatus $localAdStatus
     * @return self
     */
    public function setLocalAdStatus(?string $localAdStatus): self
    {
        $this->localAdStatus = $localAdStatus;
        return $this;
    }

    /**
     * 违规素材列表，包含广告下投前+投中拒审的素材信息
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInner[]
     */
    public function getMaterialList(): ?array
    {
        return $this->materialList;
    }

    /**
     * 违规素材列表，包含广告下投前+投中拒审的素材信息
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInner[] $materialList
     * @return self
     */
    public function setMaterialList(?array $materialList): self
    {
        $this->materialList = $materialList;
        return $this;
    }

    /**
     * 优化师ID
     * @return int
     */
    public function getOptimizerId(): ?int
    {
        return $this->optimizerId;
    }

    /**
     * 优化师ID
     * @param int $optimizerId
     * @return self
     */
    public function setOptimizerId(?int $optimizerId): self
    {
        $this->optimizerId = $optimizerId;
        return $this;
    }

    /**
     * 优化师姓名
     * @return string
     */
    public function getOptimizerName(): ?string
    {
        return $this->optimizerName;
    }

    /**
     * 优化师姓名
     * @param string $optimizerName
     * @return self
     */
    public function setOptimizerName(?string $optimizerName): self
    {
        $this->optimizerName = $optimizerName;
        return $this;
    }

    /**
     * 广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 广告名称
     * @return string
     */
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * 广告名称
     * @param string $promotionName
     * @return self
     */
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataPromotionStatus
     */
    public function getPromotionStatus(): ?string
    {
        return $this->promotionStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataPromotionStatus $promotionStatus
     * @return self
     */
    public function setPromotionStatus(?string $promotionStatus): self
    {
        $this->promotionStatus = $promotionStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataPromotionStatusNew
     */
    public function getPromotionStatusNew(): ?string
    {
        return $this->promotionStatusNew;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataPromotionStatusNew $promotionStatusNew
     * @return self
     */
    public function setPromotionStatusNew(?string $promotionStatusNew): self
    {
        $this->promotionStatusNew = $promotionStatusNew;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus
     */
    public function getQianchuanAdStatus(): ?string
    {
        return $this->qianchuanAdStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus $qianchuanAdStatus
     * @return self
     */
    public function setQianchuanAdStatus(?string $qianchuanAdStatus): self
    {
        $this->qianchuanAdStatus = $qianchuanAdStatus;
        return $this;
    }

    /**
     * 推送时间，比如：
     * @return string
     */
    public function getSendTime(): ?string
    {
        return $this->sendTime;
    }

    /**
     * 推送时间，比如：
     * @param string $sendTime
     * @return self
     */
    public function setSendTime(?string $sendTime): self
    {
        $this->sendTime = $sendTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->agentCompanyId !== null) {
            $result['agent_company_id'] = $this->agentCompanyId;
        }
        if ($this->agentCompanyName !== null) {
            $result['agent_company_name'] = $this->agentCompanyName;
        }
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->agentName !== null) {
            $result['agent_name'] = $this->agentName;
        }
        if ($this->businessType !== null) {
            $result['business_type'] = $this->businessType;
        }
        if ($this->collaboratorIds !== null) {
            $result['collaborator_ids'] = $this->collaboratorIds;
        }
        if ($this->collaboratorNames !== null) {
            $result['collaborator_names'] = $this->collaboratorNames;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->finalOperatorTag !== null) {
            $result['final_operator_tag'] = $this->finalOperatorTag;
        }
        if ($this->firstAgentCompanyId !== null) {
            $result['first_agent_company_id'] = $this->firstAgentCompanyId;
        }
        if ($this->firstAgentCompanyName !== null) {
            $result['first_agent_company_name'] = $this->firstAgentCompanyName;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->localAdStatus !== null) {
            $result['local_ad_status'] = $this->localAdStatus;
        }
        if ($this->materialList !== null) {
            $result['material_list'] = $this->materialList;
        }
        if ($this->optimizerId !== null) {
            $result['optimizer_id'] = $this->optimizerId;
        }
        if ($this->optimizerName !== null) {
            $result['optimizer_name'] = $this->optimizerName;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->promotionName !== null) {
            $result['promotion_name'] = $this->promotionName;
        }
        if ($this->promotionStatus !== null) {
            $result['promotion_status'] = $this->promotionStatus;
        }
        if ($this->promotionStatusNew !== null) {
            $result['promotion_status_new'] = $this->promotionStatusNew;
        }
        if ($this->qianchuanAdStatus !== null) {
            $result['qianchuan_ad_status'] = $this->qianchuanAdStatus;
        }
        if ($this->sendTime !== null) {
            $result['send_time'] = $this->sendTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['agent_company_id'] ?? null) !== null) {
            $obj->agentCompanyId = (int) $v;
        }
        if (($v = $data['agent_company_name'] ?? null) !== null) {
            $obj->agentCompanyName = (string) $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['agent_name'] ?? null) !== null) {
            $obj->agentName = (string) $v;
        }
        if (($v = $data['business_type'] ?? null) !== null) {
            $obj->businessType = (string) $v;
        }
        if (($v = $data['collaborator_ids'] ?? null) !== null && is_array($v)) {
            $obj->collaboratorIds = $v;
        }
        if (($v = $data['collaborator_names'] ?? null) !== null && is_array($v)) {
            $obj->collaboratorNames = $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['final_operator_tag'] ?? null) !== null) {
            $obj->finalOperatorTag = (string) $v;
        }
        if (($v = $data['first_agent_company_id'] ?? null) !== null) {
            $obj->firstAgentCompanyId = (int) $v;
        }
        if (($v = $data['first_agent_company_name'] ?? null) !== null) {
            $obj->firstAgentCompanyName = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['local_ad_status'] ?? null) !== null) {
            $obj->localAdStatus = (string) $v;
        }
        if (($v = $data['material_list'] ?? null) !== null && is_array($v)) {
            $obj->materialList = array_map(fn ($vv) => \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['optimizer_id'] ?? null) !== null) {
            $obj->optimizerId = (int) $v;
        }
        if (($v = $data['optimizer_name'] ?? null) !== null) {
            $obj->optimizerName = (string) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['promotion_name'] ?? null) !== null) {
            $obj->promotionName = (string) $v;
        }
        if (($v = $data['promotion_status'] ?? null) !== null) {
            $obj->promotionStatus = (string) $v;
        }
        if (($v = $data['promotion_status_new'] ?? null) !== null) {
            $obj->promotionStatusNew = (string) $v;
        }
        if (($v = $data['qianchuan_ad_status'] ?? null) !== null) {
            $obj->qianchuanAdStatus = (string) $v;
        }
        if (($v = $data['send_time'] ?? null) !== null) {
            $obj->sendTime = (string) $v;
        }
        return $obj;
    }
}
