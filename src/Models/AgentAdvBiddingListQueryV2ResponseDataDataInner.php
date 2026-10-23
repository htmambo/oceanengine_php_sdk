<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvBiddingListQueryV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvBiddingListQueryV2DataDataAccountStatus
     */
    protected ?string $accountStatus = null;

    /**
     * 广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 广告主账户名称
     * @var string
     */
    protected ?string $advertiserName = null;

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
     * 转账金额
     * @var int
     */
    protected ?int $agentTransAmount = null;

    /**
     * 转账次数
     * @var int
     */
    protected ?int $agentTransNum = null;

    /**
     * 非赠款消耗
     * @var int
     */
    protected ?int $cashCost = null;

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
     * 广告主账户一级行业ID
     * @var int
     */
    protected ?int $firstIndustryId = null;

    /**
     * 广告主账户一级行业名称
     * @var string
     */
    protected ?string $firstIndustryName = null;

    /**
     * 总竞价赠款可用余额
     * @var int
     */
    protected ?int $grantBalance = null;

    /**
     * 赠款消耗
     * @var int
     */
    protected ?int $grantCost = null;

    /**
     * 总竞价非赠款可用余额
     * @var int
     */
    protected ?int $nonGrantBalanceValid = null;

    /**
     * 注册时间
     * @var string
     */
    protected ?string $registerTime = null;

    /**
     * 全域推广消耗
     * @var int
     */
    protected ?int $roi2Cost = null;

    /**
     * 广告主账户二级行业ID
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * 广告主账户二级行业名称
     * @var string
     */
    protected ?string $secondIndustryName = null;

    /**
     * 竞价消耗
     * @var int
     */
    protected ?int $statCost = null;

    /**
     * 今日截止X点竞价消耗
     * @var int
     */
    protected ?int $todayDthCost = null;

    /**
     * 今日截止X点全域推广消耗
     * @var int
     */
    protected ?int $todayDthRoi2Cost = null;

    /**
     * 截止X点全域推广消耗升降值
     * @var int
     */
    protected ?int $todayDthRoi2CostDiff = null;

    /**
     * 截止X点竞价消耗升降值
     * @var int
     */
    protected ?int $todayYesDthCostDiff = null;

    /**
     * 总余额
     * @var int
     */
    protected ?int $totalBalance = null;

    /**
     * 总竞价可用余额
     * @var int
     */
    protected ?int $totalBalanceValid = null;

    /**
     * 昨日竞价非赠款消耗
     * @var int
     */
    protected ?int $yesCashCost = null;

    /**
     * 昨日竞价消耗
     * @var int
     */
    protected ?int $yesCost = null;

    /**
     * 昨日截止X点竞价消耗
     * @var int
     */
    protected ?int $yesDthCost = null;

    /**
     * 昨日截止X点全域推广消耗
     * @var int
     */
    protected ?int $yesDthRoi2Cost = null;

    /**
     * 昨日竞价赠款消耗
     * @var int
     */
    protected ?int $yesGrantCost = null;

    /**
     * 昨日全域推广消耗非赠款消耗
     * @var int
     */
    protected ?int $yesRoi2CashCost = null;

    /**
     * 昨日全域推广消耗
     * @var int
     */
    protected ?int $yesRoi2Cost = null;

    /**
     * 昨日全域推广消耗赠款消耗
     * @var int
     */
    protected ?int $yesRoi2GrantCost = null;

    /**
     * @return \Oceanengine\Models\AgentAdvBiddingListQueryV2DataDataAccountStatus
     */
    public function getAccountStatus(): ?string
    {
        return $this->accountStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvBiddingListQueryV2DataDataAccountStatus $accountStatus
     * @return self
     */
    public function setAccountStatus(?string $accountStatus): self
    {
        $this->accountStatus = $accountStatus;
        return $this;
    }

    /**
     * 广告主账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主账户ID
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
     * 转账金额
     * @return int
     */
    public function getAgentTransAmount(): ?int
    {
        return $this->agentTransAmount;
    }

    /**
     * 转账金额
     * @param int $agentTransAmount
     * @return self
     */
    public function setAgentTransAmount(?int $agentTransAmount): self
    {
        $this->agentTransAmount = $agentTransAmount;
        return $this;
    }

    /**
     * 转账次数
     * @return int
     */
    public function getAgentTransNum(): ?int
    {
        return $this->agentTransNum;
    }

    /**
     * 转账次数
     * @param int $agentTransNum
     * @return self
     */
    public function setAgentTransNum(?int $agentTransNum): self
    {
        $this->agentTransNum = $agentTransNum;
        return $this;
    }

    /**
     * 非赠款消耗
     * @return int
     */
    public function getCashCost(): ?int
    {
        return $this->cashCost;
    }

    /**
     * 非赠款消耗
     * @param int $cashCost
     * @return self
     */
    public function setCashCost(?int $cashCost): self
    {
        $this->cashCost = $cashCost;
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
     * 广告主账户一级行业ID
     * @return int
     */
    public function getFirstIndustryId(): ?int
    {
        return $this->firstIndustryId;
    }

    /**
     * 广告主账户一级行业ID
     * @param int $firstIndustryId
     * @return self
     */
    public function setFirstIndustryId(?int $firstIndustryId): self
    {
        $this->firstIndustryId = $firstIndustryId;
        return $this;
    }

    /**
     * 广告主账户一级行业名称
     * @return string
     */
    public function getFirstIndustryName(): ?string
    {
        return $this->firstIndustryName;
    }

    /**
     * 广告主账户一级行业名称
     * @param string $firstIndustryName
     * @return self
     */
    public function setFirstIndustryName(?string $firstIndustryName): self
    {
        $this->firstIndustryName = $firstIndustryName;
        return $this;
    }

    /**
     * 总竞价赠款可用余额
     * @return int
     */
    public function getGrantBalance(): ?int
    {
        return $this->grantBalance;
    }

    /**
     * 总竞价赠款可用余额
     * @param int $grantBalance
     * @return self
     */
    public function setGrantBalance(?int $grantBalance): self
    {
        $this->grantBalance = $grantBalance;
        return $this;
    }

    /**
     * 赠款消耗
     * @return int
     */
    public function getGrantCost(): ?int
    {
        return $this->grantCost;
    }

    /**
     * 赠款消耗
     * @param int $grantCost
     * @return self
     */
    public function setGrantCost(?int $grantCost): self
    {
        $this->grantCost = $grantCost;
        return $this;
    }

    /**
     * 总竞价非赠款可用余额
     * @return int
     */
    public function getNonGrantBalanceValid(): ?int
    {
        return $this->nonGrantBalanceValid;
    }

    /**
     * 总竞价非赠款可用余额
     * @param int $nonGrantBalanceValid
     * @return self
     */
    public function setNonGrantBalanceValid(?int $nonGrantBalanceValid): self
    {
        $this->nonGrantBalanceValid = $nonGrantBalanceValid;
        return $this;
    }

    /**
     * 注册时间
     * @return string
     */
    public function getRegisterTime(): ?string
    {
        return $this->registerTime;
    }

    /**
     * 注册时间
     * @param string $registerTime
     * @return self
     */
    public function setRegisterTime(?string $registerTime): self
    {
        $this->registerTime = $registerTime;
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
     * 广告主账户二级行业ID
     * @return int
     */
    public function getSecondIndustryId(): ?int
    {
        return $this->secondIndustryId;
    }

    /**
     * 广告主账户二级行业ID
     * @param int $secondIndustryId
     * @return self
     */
    public function setSecondIndustryId(?int $secondIndustryId): self
    {
        $this->secondIndustryId = $secondIndustryId;
        return $this;
    }

    /**
     * 广告主账户二级行业名称
     * @return string
     */
    public function getSecondIndustryName(): ?string
    {
        return $this->secondIndustryName;
    }

    /**
     * 广告主账户二级行业名称
     * @param string $secondIndustryName
     * @return self
     */
    public function setSecondIndustryName(?string $secondIndustryName): self
    {
        $this->secondIndustryName = $secondIndustryName;
        return $this;
    }

    /**
     * 竞价消耗
     * @return int
     */
    public function getStatCost(): ?int
    {
        return $this->statCost;
    }

    /**
     * 竞价消耗
     * @param int $statCost
     * @return self
     */
    public function setStatCost(?int $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 今日截止X点竞价消耗
     * @return int
     */
    public function getTodayDthCost(): ?int
    {
        return $this->todayDthCost;
    }

    /**
     * 今日截止X点竞价消耗
     * @param int $todayDthCost
     * @return self
     */
    public function setTodayDthCost(?int $todayDthCost): self
    {
        $this->todayDthCost = $todayDthCost;
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
     * @return int
     */
    public function getTodayDthRoi2CostDiff(): ?int
    {
        return $this->todayDthRoi2CostDiff;
    }

    /**
     * 截止X点全域推广消耗升降值
     * @param int $todayDthRoi2CostDiff
     * @return self
     */
    public function setTodayDthRoi2CostDiff(?int $todayDthRoi2CostDiff): self
    {
        $this->todayDthRoi2CostDiff = $todayDthRoi2CostDiff;
        return $this;
    }

    /**
     * 截止X点竞价消耗升降值
     * @return int
     */
    public function getTodayYesDthCostDiff(): ?int
    {
        return $this->todayYesDthCostDiff;
    }

    /**
     * 截止X点竞价消耗升降值
     * @param int $todayYesDthCostDiff
     * @return self
     */
    public function setTodayYesDthCostDiff(?int $todayYesDthCostDiff): self
    {
        $this->todayYesDthCostDiff = $todayYesDthCostDiff;
        return $this;
    }

    /**
     * 总余额
     * @return int
     */
    public function getTotalBalance(): ?int
    {
        return $this->totalBalance;
    }

    /**
     * 总余额
     * @param int $totalBalance
     * @return self
     */
    public function setTotalBalance(?int $totalBalance): self
    {
        $this->totalBalance = $totalBalance;
        return $this;
    }

    /**
     * 总竞价可用余额
     * @return int
     */
    public function getTotalBalanceValid(): ?int
    {
        return $this->totalBalanceValid;
    }

    /**
     * 总竞价可用余额
     * @param int $totalBalanceValid
     * @return self
     */
    public function setTotalBalanceValid(?int $totalBalanceValid): self
    {
        $this->totalBalanceValid = $totalBalanceValid;
        return $this;
    }

    /**
     * 昨日竞价非赠款消耗
     * @return int
     */
    public function getYesCashCost(): ?int
    {
        return $this->yesCashCost;
    }

    /**
     * 昨日竞价非赠款消耗
     * @param int $yesCashCost
     * @return self
     */
    public function setYesCashCost(?int $yesCashCost): self
    {
        $this->yesCashCost = $yesCashCost;
        return $this;
    }

    /**
     * 昨日竞价消耗
     * @return int
     */
    public function getYesCost(): ?int
    {
        return $this->yesCost;
    }

    /**
     * 昨日竞价消耗
     * @param int $yesCost
     * @return self
     */
    public function setYesCost(?int $yesCost): self
    {
        $this->yesCost = $yesCost;
        return $this;
    }

    /**
     * 昨日截止X点竞价消耗
     * @return int
     */
    public function getYesDthCost(): ?int
    {
        return $this->yesDthCost;
    }

    /**
     * 昨日截止X点竞价消耗
     * @param int $yesDthCost
     * @return self
     */
    public function setYesDthCost(?int $yesDthCost): self
    {
        $this->yesDthCost = $yesDthCost;
        return $this;
    }

    /**
     * 昨日截止X点全域推广消耗
     * @return int
     */
    public function getYesDthRoi2Cost(): ?int
    {
        return $this->yesDthRoi2Cost;
    }

    /**
     * 昨日截止X点全域推广消耗
     * @param int $yesDthRoi2Cost
     * @return self
     */
    public function setYesDthRoi2Cost(?int $yesDthRoi2Cost): self
    {
        $this->yesDthRoi2Cost = $yesDthRoi2Cost;
        return $this;
    }

    /**
     * 昨日竞价赠款消耗
     * @return int
     */
    public function getYesGrantCost(): ?int
    {
        return $this->yesGrantCost;
    }

    /**
     * 昨日竞价赠款消耗
     * @param int $yesGrantCost
     * @return self
     */
    public function setYesGrantCost(?int $yesGrantCost): self
    {
        $this->yesGrantCost = $yesGrantCost;
        return $this;
    }

    /**
     * 昨日全域推广消耗非赠款消耗
     * @return int
     */
    public function getYesRoi2CashCost(): ?int
    {
        return $this->yesRoi2CashCost;
    }

    /**
     * 昨日全域推广消耗非赠款消耗
     * @param int $yesRoi2CashCost
     * @return self
     */
    public function setYesRoi2CashCost(?int $yesRoi2CashCost): self
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
     * @return int
     */
    public function getYesRoi2GrantCost(): ?int
    {
        return $this->yesRoi2GrantCost;
    }

    /**
     * 昨日全域推广消耗赠款消耗
     * @param int $yesRoi2GrantCost
     * @return self
     */
    public function setYesRoi2GrantCost(?int $yesRoi2GrantCost): self
    {
        $this->yesRoi2GrantCost = $yesRoi2GrantCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountStatus !== null) {
            $result['account_status'] = $this->accountStatus;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->agentName !== null) {
            $result['agent_name'] = $this->agentName;
        }
        if ($this->agentTransAmount !== null) {
            $result['agent_trans_amount'] = $this->agentTransAmount;
        }
        if ($this->agentTransNum !== null) {
            $result['agent_trans_num'] = $this->agentTransNum;
        }
        if ($this->cashCost !== null) {
            $result['cash_cost'] = $this->cashCost;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->firstIndustryId !== null) {
            $result['first_industry_id'] = $this->firstIndustryId;
        }
        if ($this->firstIndustryName !== null) {
            $result['first_industry_name'] = $this->firstIndustryName;
        }
        if ($this->grantBalance !== null) {
            $result['grant_balance'] = $this->grantBalance;
        }
        if ($this->grantCost !== null) {
            $result['grant_cost'] = $this->grantCost;
        }
        if ($this->nonGrantBalanceValid !== null) {
            $result['non_grant_balance_valid'] = $this->nonGrantBalanceValid;
        }
        if ($this->registerTime !== null) {
            $result['register_time'] = $this->registerTime;
        }
        if ($this->roi2Cost !== null) {
            $result['roi2_cost'] = $this->roi2Cost;
        }
        if ($this->secondIndustryId !== null) {
            $result['second_industry_id'] = $this->secondIndustryId;
        }
        if ($this->secondIndustryName !== null) {
            $result['second_industry_name'] = $this->secondIndustryName;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->todayDthCost !== null) {
            $result['today_dth_cost'] = $this->todayDthCost;
        }
        if ($this->todayDthRoi2Cost !== null) {
            $result['today_dth_roi2_cost'] = $this->todayDthRoi2Cost;
        }
        if ($this->todayDthRoi2CostDiff !== null) {
            $result['today_dth_roi2_cost_diff'] = $this->todayDthRoi2CostDiff;
        }
        if ($this->todayYesDthCostDiff !== null) {
            $result['today_yes_dth_cost_diff'] = $this->todayYesDthCostDiff;
        }
        if ($this->totalBalance !== null) {
            $result['total_balance'] = $this->totalBalance;
        }
        if ($this->totalBalanceValid !== null) {
            $result['total_balance_valid'] = $this->totalBalanceValid;
        }
        if ($this->yesCashCost !== null) {
            $result['yes_cash_cost'] = $this->yesCashCost;
        }
        if ($this->yesCost !== null) {
            $result['yes_cost'] = $this->yesCost;
        }
        if ($this->yesDthCost !== null) {
            $result['yes_dth_cost'] = $this->yesDthCost;
        }
        if ($this->yesDthRoi2Cost !== null) {
            $result['yes_dth_roi2_cost'] = $this->yesDthRoi2Cost;
        }
        if ($this->yesGrantCost !== null) {
            $result['yes_grant_cost'] = $this->yesGrantCost;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_status'] ?? null) !== null) {
            $obj->accountStatus = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['agent_name'] ?? null) !== null) {
            $obj->agentName = (string) $v;
        }
        if (($v = $data['agent_trans_amount'] ?? null) !== null) {
            $obj->agentTransAmount = (int) $v;
        }
        if (($v = $data['agent_trans_num'] ?? null) !== null) {
            $obj->agentTransNum = (int) $v;
        }
        if (($v = $data['cash_cost'] ?? null) !== null) {
            $obj->cashCost = (int) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['first_industry_id'] ?? null) !== null) {
            $obj->firstIndustryId = (int) $v;
        }
        if (($v = $data['first_industry_name'] ?? null) !== null) {
            $obj->firstIndustryName = (string) $v;
        }
        if (($v = $data['grant_balance'] ?? null) !== null) {
            $obj->grantBalance = (int) $v;
        }
        if (($v = $data['grant_cost'] ?? null) !== null) {
            $obj->grantCost = (int) $v;
        }
        if (($v = $data['non_grant_balance_valid'] ?? null) !== null) {
            $obj->nonGrantBalanceValid = (int) $v;
        }
        if (($v = $data['register_time'] ?? null) !== null) {
            $obj->registerTime = (string) $v;
        }
        if (($v = $data['roi2_cost'] ?? null) !== null) {
            $obj->roi2Cost = (int) $v;
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['second_industry_name'] ?? null) !== null) {
            $obj->secondIndustryName = (string) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (int) $v;
        }
        if (($v = $data['today_dth_cost'] ?? null) !== null) {
            $obj->todayDthCost = (int) $v;
        }
        if (($v = $data['today_dth_roi2_cost'] ?? null) !== null) {
            $obj->todayDthRoi2Cost = (int) $v;
        }
        if (($v = $data['today_dth_roi2_cost_diff'] ?? null) !== null) {
            $obj->todayDthRoi2CostDiff = (int) $v;
        }
        if (($v = $data['today_yes_dth_cost_diff'] ?? null) !== null) {
            $obj->todayYesDthCostDiff = (int) $v;
        }
        if (($v = $data['total_balance'] ?? null) !== null) {
            $obj->totalBalance = (int) $v;
        }
        if (($v = $data['total_balance_valid'] ?? null) !== null) {
            $obj->totalBalanceValid = (int) $v;
        }
        if (($v = $data['yes_cash_cost'] ?? null) !== null) {
            $obj->yesCashCost = (int) $v;
        }
        if (($v = $data['yes_cost'] ?? null) !== null) {
            $obj->yesCost = (int) $v;
        }
        if (($v = $data['yes_dth_cost'] ?? null) !== null) {
            $obj->yesDthCost = (int) $v;
        }
        if (($v = $data['yes_dth_roi2_cost'] ?? null) !== null) {
            $obj->yesDthRoi2Cost = (int) $v;
        }
        if (($v = $data['yes_grant_cost'] ?? null) !== null) {
            $obj->yesGrantCost = (int) $v;
        }
        if (($v = $data['yes_roi2_cash_cost'] ?? null) !== null) {
            $obj->yesRoi2CashCost = (int) $v;
        }
        if (($v = $data['yes_roi2_cost'] ?? null) !== null) {
            $obj->yesRoi2Cost = (int) $v;
        }
        if (($v = $data['yes_roi2_grant_cost'] ?? null) !== null) {
            $obj->yesRoi2GrantCost = (int) $v;
        }
        return $obj;
    }
}
