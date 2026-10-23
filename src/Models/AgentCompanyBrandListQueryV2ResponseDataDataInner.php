<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCompanyBrandListQueryV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * 品牌非赠款消耗
     * @var int
     */
    protected ?int $agentCashCost = null;

    /**
     * 品牌赠款消耗
     * @var int
     */
    protected ?int $agentGrantCost = null;

    /**
     * 协作者
     * @var \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerCollaboratorsInner[]
     */
    protected ?array $collaborators = null;

    /**
     * 总余额
     * @var int
     */
    protected ?int $companyBalance = null;

    /**
     * 总品牌赠款可用余额
     * @var int
     */
    protected ?int $companyGrantBalance = null;

    /**
     * 广告主公司ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 广告主公司名称
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * 总品牌非赠款可用余额
     * @var int
     */
    protected ?int $companyNonGrantBalance = null;

    /**
     * 总品牌可用余额
     * @var int
     */
    protected ?int $companyValidBalance = null;

    /**
     * @var \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner[]
     */
    protected ?array $optimizerDepartments = null;

    /**
     * 负责人
     * @var \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizersInner[]
     */
    protected ?array $optimizers = null;

    /**
     * 品牌消耗
     * @var int
     */
    protected ?int $statCost = null;

    /**
     * 品牌非赠款消耗
     * @return int
     */
    public function getAgentCashCost(): ?int
    {
        return $this->agentCashCost;
    }

    /**
     * 品牌非赠款消耗
     * @param int $agentCashCost
     * @return self
     */
    public function setAgentCashCost(?int $agentCashCost): self
    {
        $this->agentCashCost = $agentCashCost;
        return $this;
    }

    /**
     * 品牌赠款消耗
     * @return int
     */
    public function getAgentGrantCost(): ?int
    {
        return $this->agentGrantCost;
    }

    /**
     * 品牌赠款消耗
     * @param int $agentGrantCost
     * @return self
     */
    public function setAgentGrantCost(?int $agentGrantCost): self
    {
        $this->agentGrantCost = $agentGrantCost;
        return $this;
    }

    /**
     * 协作者
     * @return \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerCollaboratorsInner[]
     */
    public function getCollaborators(): ?array
    {
        return $this->collaborators;
    }

    /**
     * 协作者
     * @param \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerCollaboratorsInner[] $collaborators
     * @return self
     */
    public function setCollaborators(?array $collaborators): self
    {
        $this->collaborators = $collaborators;
        return $this;
    }

    /**
     * 总余额
     * @return int
     */
    public function getCompanyBalance(): ?int
    {
        return $this->companyBalance;
    }

    /**
     * 总余额
     * @param int $companyBalance
     * @return self
     */
    public function setCompanyBalance(?int $companyBalance): self
    {
        $this->companyBalance = $companyBalance;
        return $this;
    }

    /**
     * 总品牌赠款可用余额
     * @return int
     */
    public function getCompanyGrantBalance(): ?int
    {
        return $this->companyGrantBalance;
    }

    /**
     * 总品牌赠款可用余额
     * @param int $companyGrantBalance
     * @return self
     */
    public function setCompanyGrantBalance(?int $companyGrantBalance): self
    {
        $this->companyGrantBalance = $companyGrantBalance;
        return $this;
    }

    /**
     * 广告主公司ID
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 广告主公司ID
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
     * 总品牌非赠款可用余额
     * @return int
     */
    public function getCompanyNonGrantBalance(): ?int
    {
        return $this->companyNonGrantBalance;
    }

    /**
     * 总品牌非赠款可用余额
     * @param int $companyNonGrantBalance
     * @return self
     */
    public function setCompanyNonGrantBalance(?int $companyNonGrantBalance): self
    {
        $this->companyNonGrantBalance = $companyNonGrantBalance;
        return $this;
    }

    /**
     * 总品牌可用余额
     * @return int
     */
    public function getCompanyValidBalance(): ?int
    {
        return $this->companyValidBalance;
    }

    /**
     * 总品牌可用余额
     * @param int $companyValidBalance
     * @return self
     */
    public function setCompanyValidBalance(?int $companyValidBalance): self
    {
        $this->companyValidBalance = $companyValidBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner[]
     */
    public function getOptimizerDepartments(): ?array
    {
        return $this->optimizerDepartments;
    }

    /**
     * @param \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner[] $optimizerDepartments
     * @return self
     */
    public function setOptimizerDepartments(?array $optimizerDepartments): self
    {
        $this->optimizerDepartments = $optimizerDepartments;
        return $this;
    }

    /**
     * 负责人
     * @return \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizersInner[]
     */
    public function getOptimizers(): ?array
    {
        return $this->optimizers;
    }

    /**
     * 负责人
     * @param \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizersInner[] $optimizers
     * @return self
     */
    public function setOptimizers(?array $optimizers): self
    {
        $this->optimizers = $optimizers;
        return $this;
    }

    /**
     * 品牌消耗
     * @return int
     */
    public function getStatCost(): ?int
    {
        return $this->statCost;
    }

    /**
     * 品牌消耗
     * @param int $statCost
     * @return self
     */
    public function setStatCost(?int $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agentCashCost !== null) {
            $result['agent_cash_cost'] = $this->agentCashCost;
        }
        if ($this->agentGrantCost !== null) {
            $result['agent_grant_cost'] = $this->agentGrantCost;
        }
        if ($this->collaborators !== null) {
            $result['collaborators'] = $this->collaborators;
        }
        if ($this->companyBalance !== null) {
            $result['company_balance'] = $this->companyBalance;
        }
        if ($this->companyGrantBalance !== null) {
            $result['company_grant_balance'] = $this->companyGrantBalance;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->companyNonGrantBalance !== null) {
            $result['company_non_grant_balance'] = $this->companyNonGrantBalance;
        }
        if ($this->companyValidBalance !== null) {
            $result['company_valid_balance'] = $this->companyValidBalance;
        }
        if ($this->optimizerDepartments !== null) {
            $result['optimizer_departments'] = $this->optimizerDepartments;
        }
        if ($this->optimizers !== null) {
            $result['optimizers'] = $this->optimizers;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_cash_cost'] ?? null) !== null) {
            $obj->agentCashCost = (int) $v;
        }
        if (($v = $data['agent_grant_cost'] ?? null) !== null) {
            $obj->agentGrantCost = (int) $v;
        }
        if (($v = $data['collaborators'] ?? null) !== null && is_array($v)) {
            $obj->collaborators = array_map(fn ($vv) => \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerCollaboratorsInner::fromArray($vv), $v);
        }
        if (($v = $data['company_balance'] ?? null) !== null) {
            $obj->companyBalance = (int) $v;
        }
        if (($v = $data['company_grant_balance'] ?? null) !== null) {
            $obj->companyGrantBalance = (int) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['company_non_grant_balance'] ?? null) !== null) {
            $obj->companyNonGrantBalance = (int) $v;
        }
        if (($v = $data['company_valid_balance'] ?? null) !== null) {
            $obj->companyValidBalance = (int) $v;
        }
        if (($v = $data['optimizer_departments'] ?? null) !== null && is_array($v)) {
            $obj->optimizerDepartments = array_map(fn ($vv) => \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner::fromArray($vv), $v);
        }
        if (($v = $data['optimizers'] ?? null) !== null && is_array($v)) {
            $obj->optimizers = array_map(fn ($vv) => \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInnerOptimizersInner::fromArray($vv), $v);
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (int) $v;
        }
        return $obj;
    }
}
