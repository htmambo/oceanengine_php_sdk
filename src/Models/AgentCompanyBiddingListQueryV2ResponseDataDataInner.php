<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCompanyBiddingListQueryV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * 协作者
     * @var \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerCollaboratorsInner[]
     */
    protected ?array $collaborators = null;

    /**
     * 已审核账户数
     * @var int
     */
    protected ?int $companyAllAuditAdvCnt = null;

    /**
     * 可见已审账户数
     * @var int
     */
    protected ?int $companyAuditAdvCnt = null;

    /**
     * 总余额
     * @var int
     */
    protected ?int $companyBalance = null;

    /**
     * 总竞价赠款可用余额
     * @var int
     */
    protected ?int $companyGrantBalance = null;

    /**
     * 广告主公司ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 最近一次续费日期
     * @var string
     */
    protected ?string $companyLastRenewDate = null;

    /**
     * 广告主公司名称
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * 总竞价非赠款可用余额
     * @var int
     */
    protected ?int $companyNonGrantBalance = null;

    /**
     * 续费金额
     * @var int
     */
    protected ?int $companyRenewAmount = null;

    /**
     * 续费次数
     * @var int
     */
    protected ?int $companyRenewNum = null;

    /**
     * 转账金额
     * @var int
     */
    protected ?int $companyTransAmount = null;

    /**
     * 转账次数
     * @var int
     */
    protected ?int $companyTransNum = null;

    /**
     * 总竞价可用余额
     * @var int
     */
    protected ?int $companyValidBalance = null;

    /**
     * @var \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner[]
     */
    protected ?array $optimizerDepartments = null;

    /**
     * 负责人
     * @var \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerOptimizersInner[]
     */
    protected ?array $optimizers = null;

    /**
     * 全域推广非赠款消耗
     * @var int
     */
    protected ?int $roi2CashCost = null;

    /**
     * 全域推广消耗
     * @var int
     */
    protected ?int $roi2Cost = null;

    /**
     * 全域推广赠款消耗
     * @var int
     */
    protected ?int $roi2GrantCost = null;

    /**
     * 标准推广非赠款消耗
     * @var int
     */
    protected ?int $standardCashCost = null;

    /**
     * 标准推广消耗
     * @var int
     */
    protected ?int $standardCost = null;

    /**
     * 标准推广赠款消耗
     * @var int
     */
    protected ?int $standardGrantCost = null;

    /**
     * 今日截止X点全域推广消耗
     * @var int
     */
    protected ?int $todayDthRoi2Cost = null;

    /**
     * 截止X点全域推广消耗升降值
     * @var string
     */
    protected ?string $todayDthRoi2CostDiff = null;

    /**
     * 今日截止X点标准推广消耗
     * @var int
     */
    protected ?int $todayDthStandardCost = null;

    /**
     * 截止X点标准推广消耗升降值
     * @var int
     */
    protected ?int $todayDthStandardCostDiff = null;

    /**
     * 昨日截止X点全域推广消耗
     * @var string
     */
    protected ?string $yesDthRoi2Cost = null;

    /**
     * 昨日截止X点标准推广消耗
     * @var int
     */
    protected ?int $yesDthStandardCost = null;

    /**
     * 昨日全域推广消耗非赠款消耗
     * @var string
     */
    protected ?string $yesRoi2CashCost = null;

    /**
     * 昨日全域推广消耗
     * @var int
     */
    protected ?int $yesRoi2Cost = null;

    /**
     * 昨日全域推广消耗赠款消耗
     * @var string
     */
    protected ?string $yesRoi2GrantCost = null;

    /**
     * 昨日标准推广非赠款消耗
     * @var int
     */
    protected ?int $yesStandardCashCost = null;

    /**
     * 昨日标准推广消耗
     * @var int
     */
    protected ?int $yesStandardCost = null;

    /**
     * 昨日标准推广赠款消耗
     * @var int
     */
    protected ?int $yesStandardGrantCost = null;

    /**
     * 协作者
     * @return \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerCollaboratorsInner[]
     */
    public function getCollaborators(): ?array
    {
        return $this->collaborators;
    }

    /**
     * 协作者
     * @param \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerCollaboratorsInner[] $collaborators
     * @return self
     */
    public function setCollaborators(?array $collaborators): self
    {
        $this->collaborators = $collaborators;
        return $this;
    }

    /**
     * 已审核账户数
     * @return int
     */
    public function getCompanyAllAuditAdvCnt(): ?int
    {
        return $this->companyAllAuditAdvCnt;
    }

    /**
     * 已审核账户数
     * @param int $companyAllAuditAdvCnt
     * @return self
     */
    public function setCompanyAllAuditAdvCnt(?int $companyAllAuditAdvCnt): self
    {
        $this->companyAllAuditAdvCnt = $companyAllAuditAdvCnt;
        return $this;
    }

    /**
     * 可见已审账户数
     * @return int
     */
    public function getCompanyAuditAdvCnt(): ?int
    {
        return $this->companyAuditAdvCnt;
    }

    /**
     * 可见已审账户数
     * @param int $companyAuditAdvCnt
     * @return self
     */
    public function setCompanyAuditAdvCnt(?int $companyAuditAdvCnt): self
    {
        $this->companyAuditAdvCnt = $companyAuditAdvCnt;
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
     * 总竞价赠款可用余额
     * @return int
     */
    public function getCompanyGrantBalance(): ?int
    {
        return $this->companyGrantBalance;
    }

    /**
     * 总竞价赠款可用余额
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
     * 最近一次续费日期
     * @return string
     */
    public function getCompanyLastRenewDate(): ?string
    {
        return $this->companyLastRenewDate;
    }

    /**
     * 最近一次续费日期
     * @param string $companyLastRenewDate
     * @return self
     */
    public function setCompanyLastRenewDate(?string $companyLastRenewDate): self
    {
        $this->companyLastRenewDate = $companyLastRenewDate;
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
     * 总竞价非赠款可用余额
     * @return int
     */
    public function getCompanyNonGrantBalance(): ?int
    {
        return $this->companyNonGrantBalance;
    }

    /**
     * 总竞价非赠款可用余额
     * @param int $companyNonGrantBalance
     * @return self
     */
    public function setCompanyNonGrantBalance(?int $companyNonGrantBalance): self
    {
        $this->companyNonGrantBalance = $companyNonGrantBalance;
        return $this;
    }

    /**
     * 续费金额
     * @return int
     */
    public function getCompanyRenewAmount(): ?int
    {
        return $this->companyRenewAmount;
    }

    /**
     * 续费金额
     * @param int $companyRenewAmount
     * @return self
     */
    public function setCompanyRenewAmount(?int $companyRenewAmount): self
    {
        $this->companyRenewAmount = $companyRenewAmount;
        return $this;
    }

    /**
     * 续费次数
     * @return int
     */
    public function getCompanyRenewNum(): ?int
    {
        return $this->companyRenewNum;
    }

    /**
     * 续费次数
     * @param int $companyRenewNum
     * @return self
     */
    public function setCompanyRenewNum(?int $companyRenewNum): self
    {
        $this->companyRenewNum = $companyRenewNum;
        return $this;
    }

    /**
     * 转账金额
     * @return int
     */
    public function getCompanyTransAmount(): ?int
    {
        return $this->companyTransAmount;
    }

    /**
     * 转账金额
     * @param int $companyTransAmount
     * @return self
     */
    public function setCompanyTransAmount(?int $companyTransAmount): self
    {
        $this->companyTransAmount = $companyTransAmount;
        return $this;
    }

    /**
     * 转账次数
     * @return int
     */
    public function getCompanyTransNum(): ?int
    {
        return $this->companyTransNum;
    }

    /**
     * 转账次数
     * @param int $companyTransNum
     * @return self
     */
    public function setCompanyTransNum(?int $companyTransNum): self
    {
        $this->companyTransNum = $companyTransNum;
        return $this;
    }

    /**
     * 总竞价可用余额
     * @return int
     */
    public function getCompanyValidBalance(): ?int
    {
        return $this->companyValidBalance;
    }

    /**
     * 总竞价可用余额
     * @param int $companyValidBalance
     * @return self
     */
    public function setCompanyValidBalance(?int $companyValidBalance): self
    {
        $this->companyValidBalance = $companyValidBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner[]
     */
    public function getOptimizerDepartments(): ?array
    {
        return $this->optimizerDepartments;
    }

    /**
     * @param \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner[] $optimizerDepartments
     * @return self
     */
    public function setOptimizerDepartments(?array $optimizerDepartments): self
    {
        $this->optimizerDepartments = $optimizerDepartments;
        return $this;
    }

    /**
     * 负责人
     * @return \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerOptimizersInner[]
     */
    public function getOptimizers(): ?array
    {
        return $this->optimizers;
    }

    /**
     * 负责人
     * @param \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerOptimizersInner[] $optimizers
     * @return self
     */
    public function setOptimizers(?array $optimizers): self
    {
        $this->optimizers = $optimizers;
        return $this;
    }

    /**
     * 全域推广非赠款消耗
     * @return int
     */
    public function getRoi2CashCost(): ?int
    {
        return $this->roi2CashCost;
    }

    /**
     * 全域推广非赠款消耗
     * @param int $roi2CashCost
     * @return self
     */
    public function setRoi2CashCost(?int $roi2CashCost): self
    {
        $this->roi2CashCost = $roi2CashCost;
        return $this;
    }

    /**
     * 全域推广消耗
     * @return int
     */
    public function getRoi2Cost(): ?int
    {
        return $this->roi2Cost;
    }

    /**
     * 全域推广消耗
     * @param int $roi2Cost
     * @return self
     */
    public function setRoi2Cost(?int $roi2Cost): self
    {
        $this->roi2Cost = $roi2Cost;
        return $this;
    }

    /**
     * 全域推广赠款消耗
     * @return int
     */
    public function getRoi2GrantCost(): ?int
    {
        return $this->roi2GrantCost;
    }

    /**
     * 全域推广赠款消耗
     * @param int $roi2GrantCost
     * @return self
     */
    public function setRoi2GrantCost(?int $roi2GrantCost): self
    {
        $this->roi2GrantCost = $roi2GrantCost;
        return $this;
    }

    /**
     * 标准推广非赠款消耗
     * @return int
     */
    public function getStandardCashCost(): ?int
    {
        return $this->standardCashCost;
    }

    /**
     * 标准推广非赠款消耗
     * @param int $standardCashCost
     * @return self
     */
    public function setStandardCashCost(?int $standardCashCost): self
    {
        $this->standardCashCost = $standardCashCost;
        return $this;
    }

    /**
     * 标准推广消耗
     * @return int
     */
    public function getStandardCost(): ?int
    {
        return $this->standardCost;
    }

    /**
     * 标准推广消耗
     * @param int $standardCost
     * @return self
     */
    public function setStandardCost(?int $standardCost): self
    {
        $this->standardCost = $standardCost;
        return $this;
    }

    /**
     * 标准推广赠款消耗
     * @return int
     */
    public function getStandardGrantCost(): ?int
    {
        return $this->standardGrantCost;
    }

    /**
     * 标准推广赠款消耗
     * @param int $standardGrantCost
     * @return self
     */
    public function setStandardGrantCost(?int $standardGrantCost): self
    {
        $this->standardGrantCost = $standardGrantCost;
        return $this;
    }

    /**
     * 今日截止X点全域推广消耗
     * @return int
     */
    public function getTodayDthRoi2Cost(): ?int
    {
        return $this->todayDthRoi2Cost;
    }

    /**
     * 今日截止X点全域推广消耗
     * @param int $todayDthRoi2Cost
     * @return self
     */
    public function setTodayDthRoi2Cost(?int $todayDthRoi2Cost): self
    {
        $this->todayDthRoi2Cost = $todayDthRoi2Cost;
        return $this;
    }

    /**
     * 截止X点全域推广消耗升降值
     * @return string
     */
    public function getTodayDthRoi2CostDiff(): ?string
    {
        return $this->todayDthRoi2CostDiff;
    }

    /**
     * 截止X点全域推广消耗升降值
     * @param string $todayDthRoi2CostDiff
     * @return self
     */
    public function setTodayDthRoi2CostDiff(?string $todayDthRoi2CostDiff): self
    {
        $this->todayDthRoi2CostDiff = $todayDthRoi2CostDiff;
        return $this;
    }

    /**
     * 今日截止X点标准推广消耗
     * @return int
     */
    public function getTodayDthStandardCost(): ?int
    {
        return $this->todayDthStandardCost;
    }

    /**
     * 今日截止X点标准推广消耗
     * @param int $todayDthStandardCost
     * @return self
     */
    public function setTodayDthStandardCost(?int $todayDthStandardCost): self
    {
        $this->todayDthStandardCost = $todayDthStandardCost;
        return $this;
    }

    /**
     * 截止X点标准推广消耗升降值
     * @return int
     */
    public function getTodayDthStandardCostDiff(): ?int
    {
        return $this->todayDthStandardCostDiff;
    }

    /**
     * 截止X点标准推广消耗升降值
     * @param int $todayDthStandardCostDiff
     * @return self
     */
    public function setTodayDthStandardCostDiff(?int $todayDthStandardCostDiff): self
    {
        $this->todayDthStandardCostDiff = $todayDthStandardCostDiff;
        return $this;
    }

    /**
     * 昨日截止X点全域推广消耗
     * @return string
     */
    public function getYesDthRoi2Cost(): ?string
    {
        return $this->yesDthRoi2Cost;
    }

    /**
     * 昨日截止X点全域推广消耗
     * @param string $yesDthRoi2Cost
     * @return self
     */
    public function setYesDthRoi2Cost(?string $yesDthRoi2Cost): self
    {
        $this->yesDthRoi2Cost = $yesDthRoi2Cost;
        return $this;
    }

    /**
     * 昨日截止X点标准推广消耗
     * @return int
     */
    public function getYesDthStandardCost(): ?int
    {
        return $this->yesDthStandardCost;
    }

    /**
     * 昨日截止X点标准推广消耗
     * @param int $yesDthStandardCost
     * @return self
     */
    public function setYesDthStandardCost(?int $yesDthStandardCost): self
    {
        $this->yesDthStandardCost = $yesDthStandardCost;
        return $this;
    }

    /**
     * 昨日全域推广消耗非赠款消耗
     * @return string
     */
    public function getYesRoi2CashCost(): ?string
    {
        return $this->yesRoi2CashCost;
    }

    /**
     * 昨日全域推广消耗非赠款消耗
     * @param string $yesRoi2CashCost
     * @return self
     */
    public function setYesRoi2CashCost(?string $yesRoi2CashCost): self
    {
        $this->yesRoi2CashCost = $yesRoi2CashCost;
        return $this;
    }

    /**
     * 昨日全域推广消耗
     * @return int
     */
    public function getYesRoi2Cost(): ?int
    {
        return $this->yesRoi2Cost;
    }

    /**
     * 昨日全域推广消耗
     * @param int $yesRoi2Cost
     * @return self
     */
    public function setYesRoi2Cost(?int $yesRoi2Cost): self
    {
        $this->yesRoi2Cost = $yesRoi2Cost;
        return $this;
    }

    /**
     * 昨日全域推广消耗赠款消耗
     * @return string
     */
    public function getYesRoi2GrantCost(): ?string
    {
        return $this->yesRoi2GrantCost;
    }

    /**
     * 昨日全域推广消耗赠款消耗
     * @param string $yesRoi2GrantCost
     * @return self
     */
    public function setYesRoi2GrantCost(?string $yesRoi2GrantCost): self
    {
        $this->yesRoi2GrantCost = $yesRoi2GrantCost;
        return $this;
    }

    /**
     * 昨日标准推广非赠款消耗
     * @return int
     */
    public function getYesStandardCashCost(): ?int
    {
        return $this->yesStandardCashCost;
    }

    /**
     * 昨日标准推广非赠款消耗
     * @param int $yesStandardCashCost
     * @return self
     */
    public function setYesStandardCashCost(?int $yesStandardCashCost): self
    {
        $this->yesStandardCashCost = $yesStandardCashCost;
        return $this;
    }

    /**
     * 昨日标准推广消耗
     * @return int
     */
    public function getYesStandardCost(): ?int
    {
        return $this->yesStandardCost;
    }

    /**
     * 昨日标准推广消耗
     * @param int $yesStandardCost
     * @return self
     */
    public function setYesStandardCost(?int $yesStandardCost): self
    {
        $this->yesStandardCost = $yesStandardCost;
        return $this;
    }

    /**
     * 昨日标准推广赠款消耗
     * @return int
     */
    public function getYesStandardGrantCost(): ?int
    {
        return $this->yesStandardGrantCost;
    }

    /**
     * 昨日标准推广赠款消耗
     * @param int $yesStandardGrantCost
     * @return self
     */
    public function setYesStandardGrantCost(?int $yesStandardGrantCost): self
    {
        $this->yesStandardGrantCost = $yesStandardGrantCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->collaborators !== null) {
            $result['collaborators'] = $this->collaborators;
        }
        if ($this->companyAllAuditAdvCnt !== null) {
            $result['company_all_audit_adv_cnt'] = $this->companyAllAuditAdvCnt;
        }
        if ($this->companyAuditAdvCnt !== null) {
            $result['company_audit_adv_cnt'] = $this->companyAuditAdvCnt;
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
        if ($this->companyLastRenewDate !== null) {
            $result['company_last_renew_date'] = $this->companyLastRenewDate;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->companyNonGrantBalance !== null) {
            $result['company_non_grant_balance'] = $this->companyNonGrantBalance;
        }
        if ($this->companyRenewAmount !== null) {
            $result['company_renew_amount'] = $this->companyRenewAmount;
        }
        if ($this->companyRenewNum !== null) {
            $result['company_renew_num'] = $this->companyRenewNum;
        }
        if ($this->companyTransAmount !== null) {
            $result['company_trans_amount'] = $this->companyTransAmount;
        }
        if ($this->companyTransNum !== null) {
            $result['company_trans_num'] = $this->companyTransNum;
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
        if ($this->roi2CashCost !== null) {
            $result['roi2_cash_cost'] = $this->roi2CashCost;
        }
        if ($this->roi2Cost !== null) {
            $result['roi2_cost'] = $this->roi2Cost;
        }
        if ($this->roi2GrantCost !== null) {
            $result['roi2_grant_cost'] = $this->roi2GrantCost;
        }
        if ($this->standardCashCost !== null) {
            $result['standard_cash_cost'] = $this->standardCashCost;
        }
        if ($this->standardCost !== null) {
            $result['standard_cost'] = $this->standardCost;
        }
        if ($this->standardGrantCost !== null) {
            $result['standard_grant_cost'] = $this->standardGrantCost;
        }
        if ($this->todayDthRoi2Cost !== null) {
            $result['today_dth_roi2_cost'] = $this->todayDthRoi2Cost;
        }
        if ($this->todayDthRoi2CostDiff !== null) {
            $result['today_dth_roi2_cost_diff'] = $this->todayDthRoi2CostDiff;
        }
        if ($this->todayDthStandardCost !== null) {
            $result['today_dth_standard_cost'] = $this->todayDthStandardCost;
        }
        if ($this->todayDthStandardCostDiff !== null) {
            $result['today_dth_standard_cost_diff'] = $this->todayDthStandardCostDiff;
        }
        if ($this->yesDthRoi2Cost !== null) {
            $result['yes_dth_roi2_cost'] = $this->yesDthRoi2Cost;
        }
        if ($this->yesDthStandardCost !== null) {
            $result['yes_dth_standard_cost'] = $this->yesDthStandardCost;
        }
        if ($this->yesRoi2CashCost !== null) {
            $result['yes_roi2_cash_cost'] = $this->yesRoi2CashCost;
        }
        if ($this->yesRoi2Cost !== null) {
            $result['yes_roi2_cost'] = $this->yesRoi2Cost;
        }
        if ($this->yesRoi2GrantCost !== null) {
            $result['yes_roi2_grant_cost'] = $this->yesRoi2GrantCost;
        }
        if ($this->yesStandardCashCost !== null) {
            $result['yes_standard_cash_cost'] = $this->yesStandardCashCost;
        }
        if ($this->yesStandardCost !== null) {
            $result['yes_standard_cost'] = $this->yesStandardCost;
        }
        if ($this->yesStandardGrantCost !== null) {
            $result['yes_standard_grant_cost'] = $this->yesStandardGrantCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['collaborators'] ?? null) !== null && is_array($v)) {
            $obj->collaborators = array_map(fn ($vv) => \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerCollaboratorsInner::fromArray($vv), $v);
        }
        if (($v = $data['company_all_audit_adv_cnt'] ?? null) !== null) {
            $obj->companyAllAuditAdvCnt = (int) $v;
        }
        if (($v = $data['company_audit_adv_cnt'] ?? null) !== null) {
            $obj->companyAuditAdvCnt = (int) $v;
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
        if (($v = $data['company_last_renew_date'] ?? null) !== null) {
            $obj->companyLastRenewDate = (string) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['company_non_grant_balance'] ?? null) !== null) {
            $obj->companyNonGrantBalance = (int) $v;
        }
        if (($v = $data['company_renew_amount'] ?? null) !== null) {
            $obj->companyRenewAmount = (int) $v;
        }
        if (($v = $data['company_renew_num'] ?? null) !== null) {
            $obj->companyRenewNum = (int) $v;
        }
        if (($v = $data['company_trans_amount'] ?? null) !== null) {
            $obj->companyTransAmount = (int) $v;
        }
        if (($v = $data['company_trans_num'] ?? null) !== null) {
            $obj->companyTransNum = (int) $v;
        }
        if (($v = $data['company_valid_balance'] ?? null) !== null) {
            $obj->companyValidBalance = (int) $v;
        }
        if (($v = $data['optimizer_departments'] ?? null) !== null && is_array($v)) {
            $obj->optimizerDepartments = array_map(fn ($vv) => \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerOptimizerDepartmentsInner::fromArray($vv), $v);
        }
        if (($v = $data['optimizers'] ?? null) !== null && is_array($v)) {
            $obj->optimizers = array_map(fn ($vv) => \Oceanengine\Models\AgentCompanyBiddingListQueryV2ResponseDataDataInnerOptimizersInner::fromArray($vv), $v);
        }
        if (($v = $data['roi2_cash_cost'] ?? null) !== null) {
            $obj->roi2CashCost = (int) $v;
        }
        if (($v = $data['roi2_cost'] ?? null) !== null) {
            $obj->roi2Cost = (int) $v;
        }
        if (($v = $data['roi2_grant_cost'] ?? null) !== null) {
            $obj->roi2GrantCost = (int) $v;
        }
        if (($v = $data['standard_cash_cost'] ?? null) !== null) {
            $obj->standardCashCost = (int) $v;
        }
        if (($v = $data['standard_cost'] ?? null) !== null) {
            $obj->standardCost = (int) $v;
        }
        if (($v = $data['standard_grant_cost'] ?? null) !== null) {
            $obj->standardGrantCost = (int) $v;
        }
        if (($v = $data['today_dth_roi2_cost'] ?? null) !== null) {
            $obj->todayDthRoi2Cost = (int) $v;
        }
        if (($v = $data['today_dth_roi2_cost_diff'] ?? null) !== null) {
            $obj->todayDthRoi2CostDiff = (string) $v;
        }
        if (($v = $data['today_dth_standard_cost'] ?? null) !== null) {
            $obj->todayDthStandardCost = (int) $v;
        }
        if (($v = $data['today_dth_standard_cost_diff'] ?? null) !== null) {
            $obj->todayDthStandardCostDiff = (int) $v;
        }
        if (($v = $data['yes_dth_roi2_cost'] ?? null) !== null) {
            $obj->yesDthRoi2Cost = (string) $v;
        }
        if (($v = $data['yes_dth_standard_cost'] ?? null) !== null) {
            $obj->yesDthStandardCost = (int) $v;
        }
        if (($v = $data['yes_roi2_cash_cost'] ?? null) !== null) {
            $obj->yesRoi2CashCost = (string) $v;
        }
        if (($v = $data['yes_roi2_cost'] ?? null) !== null) {
            $obj->yesRoi2Cost = (int) $v;
        }
        if (($v = $data['yes_roi2_grant_cost'] ?? null) !== null) {
            $obj->yesRoi2GrantCost = (string) $v;
        }
        if (($v = $data['yes_standard_cash_cost'] ?? null) !== null) {
            $obj->yesStandardCashCost = (int) $v;
        }
        if (($v = $data['yes_standard_cost'] ?? null) !== null) {
            $obj->yesStandardCost = (int) $v;
        }
        if (($v = $data['yes_standard_grant_cost'] ?? null) !== null) {
            $obj->yesStandardGrantCost = (int) $v;
        }
        return $obj;
    }
}
