<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAgentGetV2V2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2DataListAccountSource
     */
    protected ?string $accountSource = null;

    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2DataListAccountStatus
     */
    protected ?string $accountStatus = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * @var string
     */
    protected ?string $agentName = null;

    /**
     * @var float
     */
    protected ?float $arpu3cd = null;

    /**
     * @var string
     */
    protected ?string $auditPassTime = null;

    /**
     * @var float
     */
    protected ?float $bidCost = null;

    /**
     * @var float
     */
    protected ?float $brandCost = null;

    /**
     * @var float
     */
    protected ?float $cashBalance = null;

    /**
     * @var float
     */
    protected ?float $cashCost = null;

    /**
     * @var int
     */
    protected ?int $click = null;

    /**
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var float
     */
    protected ?float $cpaCost = null;

    /**
     * @var float
     */
    protected ?float $cpc = null;

    /**
     * @var float
     */
    protected ?float $cpcCost = null;

    /**
     * @var float
     */
    protected ?float $cpm = null;

    /**
     * @var float
     */
    protected ?float $cpmCost = null;

    /**
     * @var float
     */
    protected ?float $cptCost = null;

    /**
     * @var float
     */
    protected ?float $cpvCost = null;

    /**
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2DataListCustomerType
     */
    protected ?string $customerType = null;

    /**
     * @var string
     */
    protected ?string $firstCostTime = null;

    /**
     * @var string
     */
    protected ?string $firstIndustry = null;

    /**
     * @var float
     */
    protected ?float $firstRechargeAmount = null;

    /**
     * @var string
     */
    protected ?string $firstRechargeTime = null;

    /**
     * @var float
     */
    protected ?float $gdCost = null;

    /**
     * @var float
     */
    protected ?float $grantBalance = null;

    /**
     * @var float
     */
    protected ?float $grantsCost = null;

    /**
     * @var float
     */
    protected ?float $historyCashCost = null;

    /**
     * @var float
     */
    protected ?float $historyCost = null;

    /**
     * @var string
     */
    protected ?string $lastRechargeTime = null;

    /**
     * @var float
     */
    protected ?float $lastRenewAmount = null;

    /**
     * @var string
     */
    protected ?string $lastRenewTime = null;

    /**
     * @var float
     */
    protected ?float $ocpcCost = null;

    /**
     * @var float
     */
    protected ?float $ocpmCost = null;

    /**
     * @var int
     */
    protected ?int $queryEndTime = null;

    /**
     * @var float
     */
    protected ?float $registerDays = null;

    /**
     * @var string
     */
    protected ?string $registerTime = null;

    /**
     * @var string
     */
    protected ?string $secondIndustry = null;

    /**
     * @var int
     */
    protected ?int $show = null;

    /**
     * @var float
     */
    protected ?float $todayCost = null;

    /**
     * @var int
     */
    protected ?int $todayXHourClick = null;

    /**
     * @var int
     */
    protected ?int $todayXHourConvert = null;

    /**
     * @var float
     */
    protected ?float $todayXHourCost = null;

    /**
     * @var float
     */
    protected ?float $todayXHourCpa = null;

    /**
     * @var float
     */
    protected ?float $todayXHourCpc = null;

    /**
     * @var float
     */
    protected ?float $totalBalance = null;

    /**
     * @var float
     */
    protected ?float $totalRenewAmount = null;

    /**
     * @var float
     */
    protected ?float $totalRenewNumber = null;

    /**
     * @var float
     */
    protected ?float $transferAmount = null;

    /**
     * @var int
     */
    protected ?int $transferCount = null;

    /**
     * @var float
     */
    protected ?float $validBalance = null;

    /**
     * @var int
     */
    protected ?int $xHourClickDiff = null;

    /**
     * @var int
     */
    protected ?int $xHourConvertDiff = null;

    /**
     * @var float
     */
    protected ?float $xHourCostDiff = null;

    /**
     * @var float
     */
    protected ?float $xHourCpaDiff = null;

    /**
     * @var float
     */
    protected ?float $xHourCpcDiff = null;

    /**
     * @var float
     */
    protected ?float $yesterdayAdNumber = null;

    /**
     * @var float
     */
    protected ?float $yesterdayBidCashCost = null;

    /**
     * @var float
     */
    protected ?float $yesterdayBrandCashCost = null;

    /**
     * @var float
     */
    protected ?float $yesterdayCashCost = null;

    /**
     * @var float
     */
    protected ?float $yesterdayCost = null;

    /**
     * @var float
     */
    protected ?float $yesterdayCostDiff = null;

    /**
     * @var float
     */
    protected ?float $yesterdayGrantsCost = null;

    /**
     * @var float
     */
    protected ?float $yesterdayMomCost = null;

    /**
     * @var int
     */
    protected ?int $yesterdayXHourClick = null;

    /**
     * @var int
     */
    protected ?int $yesterdayXHourConvert = null;

    /**
     * @var float
     */
    protected ?float $yesterdayXHourCost = null;

    /**
     * @var float
     */
    protected ?float $yesterdayXHourCpa = null;

    /**
     * @var float
     */
    protected ?float $yesterdayXHourCpc = null;

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2DataListAccountSource
     */
    public function getAccountSource(): ?string
    {
        return $this->accountSource;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2DataListAccountSource $accountSource
     * @return self
     */
    public function setAccountSource(?string $accountSource): self
    {
        $this->accountSource = $accountSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2DataListAccountStatus
     */
    public function getAccountStatus(): ?string
    {
        return $this->accountStatus;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2DataListAccountStatus $accountStatus
     * @return self
     */
    public function setAccountStatus(?string $accountStatus): self
    {
        $this->accountStatus = $accountStatus;
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
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgentName(): ?string
    {
        return $this->agentName;
    }

    /**
     * @param string $agentName
     * @return self
     */
    public function setAgentName(?string $agentName): self
    {
        $this->agentName = $agentName;
        return $this;
    }

    /**
     * @return float
     */
    public function getArpu3cd(): ?float
    {
        return $this->arpu3cd;
    }

    /**
     * @param float $arpu3cd
     * @return self
     */
    public function setArpu3cd(?float $arpu3cd): self
    {
        $this->arpu3cd = $arpu3cd;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuditPassTime(): ?string
    {
        return $this->auditPassTime;
    }

    /**
     * @param string $auditPassTime
     * @return self
     */
    public function setAuditPassTime(?string $auditPassTime): self
    {
        $this->auditPassTime = $auditPassTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getBidCost(): ?float
    {
        return $this->bidCost;
    }

    /**
     * @param float $bidCost
     * @return self
     */
    public function setBidCost(?float $bidCost): self
    {
        $this->bidCost = $bidCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getBrandCost(): ?float
    {
        return $this->brandCost;
    }

    /**
     * @param float $brandCost
     * @return self
     */
    public function setBrandCost(?float $brandCost): self
    {
        $this->brandCost = $brandCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashBalance(): ?float
    {
        return $this->cashBalance;
    }

    /**
     * @param float $cashBalance
     * @return self
     */
    public function setCashBalance(?float $cashBalance): self
    {
        $this->cashBalance = $cashBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashCost(): ?float
    {
        return $this->cashCost;
    }

    /**
     * @param float $cashCost
     * @return self
     */
    public function setCashCost(?float $cashCost): self
    {
        $this->cashCost = $cashCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getClick(): ?int
    {
        return $this->click;
    }

    /**
     * @param int $click
     * @return self
     */
    public function setClick(?int $click): self
    {
        $this->click = $click;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpaCost(): ?float
    {
        return $this->cpaCost;
    }

    /**
     * @param float $cpaCost
     * @return self
     */
    public function setCpaCost(?float $cpaCost): self
    {
        $this->cpaCost = $cpaCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpc(): ?float
    {
        return $this->cpc;
    }

    /**
     * @param float $cpc
     * @return self
     */
    public function setCpc(?float $cpc): self
    {
        $this->cpc = $cpc;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpcCost(): ?float
    {
        return $this->cpcCost;
    }

    /**
     * @param float $cpcCost
     * @return self
     */
    public function setCpcCost(?float $cpcCost): self
    {
        $this->cpcCost = $cpcCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpm(): ?float
    {
        return $this->cpm;
    }

    /**
     * @param float $cpm
     * @return self
     */
    public function setCpm(?float $cpm): self
    {
        $this->cpm = $cpm;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpmCost(): ?float
    {
        return $this->cpmCost;
    }

    /**
     * @param float $cpmCost
     * @return self
     */
    public function setCpmCost(?float $cpmCost): self
    {
        $this->cpmCost = $cpmCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCptCost(): ?float
    {
        return $this->cptCost;
    }

    /**
     * @param float $cptCost
     * @return self
     */
    public function setCptCost(?float $cptCost): self
    {
        $this->cptCost = $cptCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpvCost(): ?float
    {
        return $this->cpvCost;
    }

    /**
     * @param float $cpvCost
     * @return self
     */
    public function setCpvCost(?float $cpvCost): self
    {
        $this->cpvCost = $cpvCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    /**
     * @param float $ctr
     * @return self
     */
    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2DataListCustomerType
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2DataListCustomerType $customerType
     * @return self
     */
    public function setCustomerType(?string $customerType): self
    {
        $this->customerType = $customerType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstCostTime(): ?string
    {
        return $this->firstCostTime;
    }

    /**
     * @param string $firstCostTime
     * @return self
     */
    public function setFirstCostTime(?string $firstCostTime): self
    {
        $this->firstCostTime = $firstCostTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstIndustry(): ?string
    {
        return $this->firstIndustry;
    }

    /**
     * @param string $firstIndustry
     * @return self
     */
    public function setFirstIndustry(?string $firstIndustry): self
    {
        $this->firstIndustry = $firstIndustry;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstRechargeAmount(): ?float
    {
        return $this->firstRechargeAmount;
    }

    /**
     * @param float $firstRechargeAmount
     * @return self
     */
    public function setFirstRechargeAmount(?float $firstRechargeAmount): self
    {
        $this->firstRechargeAmount = $firstRechargeAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstRechargeTime(): ?string
    {
        return $this->firstRechargeTime;
    }

    /**
     * @param string $firstRechargeTime
     * @return self
     */
    public function setFirstRechargeTime(?string $firstRechargeTime): self
    {
        $this->firstRechargeTime = $firstRechargeTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getGdCost(): ?float
    {
        return $this->gdCost;
    }

    /**
     * @param float $gdCost
     * @return self
     */
    public function setGdCost(?float $gdCost): self
    {
        $this->gdCost = $gdCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrantBalance(): ?float
    {
        return $this->grantBalance;
    }

    /**
     * @param float $grantBalance
     * @return self
     */
    public function setGrantBalance(?float $grantBalance): self
    {
        $this->grantBalance = $grantBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrantsCost(): ?float
    {
        return $this->grantsCost;
    }

    /**
     * @param float $grantsCost
     * @return self
     */
    public function setGrantsCost(?float $grantsCost): self
    {
        $this->grantsCost = $grantsCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getHistoryCashCost(): ?float
    {
        return $this->historyCashCost;
    }

    /**
     * @param float $historyCashCost
     * @return self
     */
    public function setHistoryCashCost(?float $historyCashCost): self
    {
        $this->historyCashCost = $historyCashCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getHistoryCost(): ?float
    {
        return $this->historyCost;
    }

    /**
     * @param float $historyCost
     * @return self
     */
    public function setHistoryCost(?float $historyCost): self
    {
        $this->historyCost = $historyCost;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastRechargeTime(): ?string
    {
        return $this->lastRechargeTime;
    }

    /**
     * @param string $lastRechargeTime
     * @return self
     */
    public function setLastRechargeTime(?string $lastRechargeTime): self
    {
        $this->lastRechargeTime = $lastRechargeTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getLastRenewAmount(): ?float
    {
        return $this->lastRenewAmount;
    }

    /**
     * @param float $lastRenewAmount
     * @return self
     */
    public function setLastRenewAmount(?float $lastRenewAmount): self
    {
        $this->lastRenewAmount = $lastRenewAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastRenewTime(): ?string
    {
        return $this->lastRenewTime;
    }

    /**
     * @param string $lastRenewTime
     * @return self
     */
    public function setLastRenewTime(?string $lastRenewTime): self
    {
        $this->lastRenewTime = $lastRenewTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getOcpcCost(): ?float
    {
        return $this->ocpcCost;
    }

    /**
     * @param float $ocpcCost
     * @return self
     */
    public function setOcpcCost(?float $ocpcCost): self
    {
        $this->ocpcCost = $ocpcCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getOcpmCost(): ?float
    {
        return $this->ocpmCost;
    }

    /**
     * @param float $ocpmCost
     * @return self
     */
    public function setOcpmCost(?float $ocpmCost): self
    {
        $this->ocpmCost = $ocpmCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getQueryEndTime(): ?int
    {
        return $this->queryEndTime;
    }

    /**
     * @param int $queryEndTime
     * @return self
     */
    public function setQueryEndTime(?int $queryEndTime): self
    {
        $this->queryEndTime = $queryEndTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getRegisterDays(): ?float
    {
        return $this->registerDays;
    }

    /**
     * @param float $registerDays
     * @return self
     */
    public function setRegisterDays(?float $registerDays): self
    {
        $this->registerDays = $registerDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegisterTime(): ?string
    {
        return $this->registerTime;
    }

    /**
     * @param string $registerTime
     * @return self
     */
    public function setRegisterTime(?string $registerTime): self
    {
        $this->registerTime = $registerTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondIndustry(): ?string
    {
        return $this->secondIndustry;
    }

    /**
     * @param string $secondIndustry
     * @return self
     */
    public function setSecondIndustry(?string $secondIndustry): self
    {
        $this->secondIndustry = $secondIndustry;
        return $this;
    }

    /**
     * @return int
     */
    public function getShow(): ?int
    {
        return $this->show;
    }

    /**
     * @param int $show
     * @return self
     */
    public function setShow(?int $show): self
    {
        $this->show = $show;
        return $this;
    }

    /**
     * @return float
     */
    public function getTodayCost(): ?float
    {
        return $this->todayCost;
    }

    /**
     * @param float $todayCost
     * @return self
     */
    public function setTodayCost(?float $todayCost): self
    {
        $this->todayCost = $todayCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getTodayXHourClick(): ?int
    {
        return $this->todayXHourClick;
    }

    /**
     * @param int $todayXHourClick
     * @return self
     */
    public function setTodayXHourClick(?int $todayXHourClick): self
    {
        $this->todayXHourClick = $todayXHourClick;
        return $this;
    }

    /**
     * @return int
     */
    public function getTodayXHourConvert(): ?int
    {
        return $this->todayXHourConvert;
    }

    /**
     * @param int $todayXHourConvert
     * @return self
     */
    public function setTodayXHourConvert(?int $todayXHourConvert): self
    {
        $this->todayXHourConvert = $todayXHourConvert;
        return $this;
    }

    /**
     * @return float
     */
    public function getTodayXHourCost(): ?float
    {
        return $this->todayXHourCost;
    }

    /**
     * @param float $todayXHourCost
     * @return self
     */
    public function setTodayXHourCost(?float $todayXHourCost): self
    {
        $this->todayXHourCost = $todayXHourCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getTodayXHourCpa(): ?float
    {
        return $this->todayXHourCpa;
    }

    /**
     * @param float $todayXHourCpa
     * @return self
     */
    public function setTodayXHourCpa(?float $todayXHourCpa): self
    {
        $this->todayXHourCpa = $todayXHourCpa;
        return $this;
    }

    /**
     * @return float
     */
    public function getTodayXHourCpc(): ?float
    {
        return $this->todayXHourCpc;
    }

    /**
     * @param float $todayXHourCpc
     * @return self
     */
    public function setTodayXHourCpc(?float $todayXHourCpc): self
    {
        $this->todayXHourCpc = $todayXHourCpc;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalBalance(): ?float
    {
        return $this->totalBalance;
    }

    /**
     * @param float $totalBalance
     * @return self
     */
    public function setTotalBalance(?float $totalBalance): self
    {
        $this->totalBalance = $totalBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRenewAmount(): ?float
    {
        return $this->totalRenewAmount;
    }

    /**
     * @param float $totalRenewAmount
     * @return self
     */
    public function setTotalRenewAmount(?float $totalRenewAmount): self
    {
        $this->totalRenewAmount = $totalRenewAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRenewNumber(): ?float
    {
        return $this->totalRenewNumber;
    }

    /**
     * @param float $totalRenewNumber
     * @return self
     */
    public function setTotalRenewNumber(?float $totalRenewNumber): self
    {
        $this->totalRenewNumber = $totalRenewNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getTransferAmount(): ?float
    {
        return $this->transferAmount;
    }

    /**
     * @param float $transferAmount
     * @return self
     */
    public function setTransferAmount(?float $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransferCount(): ?int
    {
        return $this->transferCount;
    }

    /**
     * @param int $transferCount
     * @return self
     */
    public function setTransferCount(?int $transferCount): self
    {
        $this->transferCount = $transferCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getValidBalance(): ?float
    {
        return $this->validBalance;
    }

    /**
     * @param float $validBalance
     * @return self
     */
    public function setValidBalance(?float $validBalance): self
    {
        $this->validBalance = $validBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getXHourClickDiff(): ?int
    {
        return $this->xHourClickDiff;
    }

    /**
     * @param int $xHourClickDiff
     * @return self
     */
    public function setXHourClickDiff(?int $xHourClickDiff): self
    {
        $this->xHourClickDiff = $xHourClickDiff;
        return $this;
    }

    /**
     * @return int
     */
    public function getXHourConvertDiff(): ?int
    {
        return $this->xHourConvertDiff;
    }

    /**
     * @param int $xHourConvertDiff
     * @return self
     */
    public function setXHourConvertDiff(?int $xHourConvertDiff): self
    {
        $this->xHourConvertDiff = $xHourConvertDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getXHourCostDiff(): ?float
    {
        return $this->xHourCostDiff;
    }

    /**
     * @param float $xHourCostDiff
     * @return self
     */
    public function setXHourCostDiff(?float $xHourCostDiff): self
    {
        $this->xHourCostDiff = $xHourCostDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getXHourCpaDiff(): ?float
    {
        return $this->xHourCpaDiff;
    }

    /**
     * @param float $xHourCpaDiff
     * @return self
     */
    public function setXHourCpaDiff(?float $xHourCpaDiff): self
    {
        $this->xHourCpaDiff = $xHourCpaDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getXHourCpcDiff(): ?float
    {
        return $this->xHourCpcDiff;
    }

    /**
     * @param float $xHourCpcDiff
     * @return self
     */
    public function setXHourCpcDiff(?float $xHourCpcDiff): self
    {
        $this->xHourCpcDiff = $xHourCpcDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayAdNumber(): ?float
    {
        return $this->yesterdayAdNumber;
    }

    /**
     * @param float $yesterdayAdNumber
     * @return self
     */
    public function setYesterdayAdNumber(?float $yesterdayAdNumber): self
    {
        $this->yesterdayAdNumber = $yesterdayAdNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayBidCashCost(): ?float
    {
        return $this->yesterdayBidCashCost;
    }

    /**
     * @param float $yesterdayBidCashCost
     * @return self
     */
    public function setYesterdayBidCashCost(?float $yesterdayBidCashCost): self
    {
        $this->yesterdayBidCashCost = $yesterdayBidCashCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayBrandCashCost(): ?float
    {
        return $this->yesterdayBrandCashCost;
    }

    /**
     * @param float $yesterdayBrandCashCost
     * @return self
     */
    public function setYesterdayBrandCashCost(?float $yesterdayBrandCashCost): self
    {
        $this->yesterdayBrandCashCost = $yesterdayBrandCashCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayCashCost(): ?float
    {
        return $this->yesterdayCashCost;
    }

    /**
     * @param float $yesterdayCashCost
     * @return self
     */
    public function setYesterdayCashCost(?float $yesterdayCashCost): self
    {
        $this->yesterdayCashCost = $yesterdayCashCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayCost(): ?float
    {
        return $this->yesterdayCost;
    }

    /**
     * @param float $yesterdayCost
     * @return self
     */
    public function setYesterdayCost(?float $yesterdayCost): self
    {
        $this->yesterdayCost = $yesterdayCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayCostDiff(): ?float
    {
        return $this->yesterdayCostDiff;
    }

    /**
     * @param float $yesterdayCostDiff
     * @return self
     */
    public function setYesterdayCostDiff(?float $yesterdayCostDiff): self
    {
        $this->yesterdayCostDiff = $yesterdayCostDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayGrantsCost(): ?float
    {
        return $this->yesterdayGrantsCost;
    }

    /**
     * @param float $yesterdayGrantsCost
     * @return self
     */
    public function setYesterdayGrantsCost(?float $yesterdayGrantsCost): self
    {
        $this->yesterdayGrantsCost = $yesterdayGrantsCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayMomCost(): ?float
    {
        return $this->yesterdayMomCost;
    }

    /**
     * @param float $yesterdayMomCost
     * @return self
     */
    public function setYesterdayMomCost(?float $yesterdayMomCost): self
    {
        $this->yesterdayMomCost = $yesterdayMomCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getYesterdayXHourClick(): ?int
    {
        return $this->yesterdayXHourClick;
    }

    /**
     * @param int $yesterdayXHourClick
     * @return self
     */
    public function setYesterdayXHourClick(?int $yesterdayXHourClick): self
    {
        $this->yesterdayXHourClick = $yesterdayXHourClick;
        return $this;
    }

    /**
     * @return int
     */
    public function getYesterdayXHourConvert(): ?int
    {
        return $this->yesterdayXHourConvert;
    }

    /**
     * @param int $yesterdayXHourConvert
     * @return self
     */
    public function setYesterdayXHourConvert(?int $yesterdayXHourConvert): self
    {
        $this->yesterdayXHourConvert = $yesterdayXHourConvert;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayXHourCost(): ?float
    {
        return $this->yesterdayXHourCost;
    }

    /**
     * @param float $yesterdayXHourCost
     * @return self
     */
    public function setYesterdayXHourCost(?float $yesterdayXHourCost): self
    {
        $this->yesterdayXHourCost = $yesterdayXHourCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayXHourCpa(): ?float
    {
        return $this->yesterdayXHourCpa;
    }

    /**
     * @param float $yesterdayXHourCpa
     * @return self
     */
    public function setYesterdayXHourCpa(?float $yesterdayXHourCpa): self
    {
        $this->yesterdayXHourCpa = $yesterdayXHourCpa;
        return $this;
    }

    /**
     * @return float
     */
    public function getYesterdayXHourCpc(): ?float
    {
        return $this->yesterdayXHourCpc;
    }

    /**
     * @param float $yesterdayXHourCpc
     * @return self
     */
    public function setYesterdayXHourCpc(?float $yesterdayXHourCpc): self
    {
        $this->yesterdayXHourCpc = $yesterdayXHourCpc;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountSource !== null) {
            $result['account_source'] = $this->accountSource;
        }
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
        if ($this->arpu3cd !== null) {
            $result['arpu_3cd'] = $this->arpu3cd;
        }
        if ($this->auditPassTime !== null) {
            $result['audit_pass_time'] = $this->auditPassTime;
        }
        if ($this->bidCost !== null) {
            $result['bid_cost'] = $this->bidCost;
        }
        if ($this->brandCost !== null) {
            $result['brand_cost'] = $this->brandCost;
        }
        if ($this->cashBalance !== null) {
            $result['cash_balance'] = $this->cashBalance;
        }
        if ($this->cashCost !== null) {
            $result['cash_cost'] = $this->cashCost;
        }
        if ($this->click !== null) {
            $result['click'] = $this->click;
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
        if ($this->cpaCost !== null) {
            $result['cpa_cost'] = $this->cpaCost;
        }
        if ($this->cpc !== null) {
            $result['cpc'] = $this->cpc;
        }
        if ($this->cpcCost !== null) {
            $result['cpc_cost'] = $this->cpcCost;
        }
        if ($this->cpm !== null) {
            $result['cpm'] = $this->cpm;
        }
        if ($this->cpmCost !== null) {
            $result['cpm_cost'] = $this->cpmCost;
        }
        if ($this->cptCost !== null) {
            $result['cpt_cost'] = $this->cptCost;
        }
        if ($this->cpvCost !== null) {
            $result['cpv_cost'] = $this->cpvCost;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->customerType !== null) {
            $result['customer_type'] = $this->customerType;
        }
        if ($this->firstCostTime !== null) {
            $result['first_cost_time'] = $this->firstCostTime;
        }
        if ($this->firstIndustry !== null) {
            $result['first_industry'] = $this->firstIndustry;
        }
        if ($this->firstRechargeAmount !== null) {
            $result['first_recharge_amount'] = $this->firstRechargeAmount;
        }
        if ($this->firstRechargeTime !== null) {
            $result['first_recharge_time'] = $this->firstRechargeTime;
        }
        if ($this->gdCost !== null) {
            $result['gd_cost'] = $this->gdCost;
        }
        if ($this->grantBalance !== null) {
            $result['grant_balance'] = $this->grantBalance;
        }
        if ($this->grantsCost !== null) {
            $result['grants_cost'] = $this->grantsCost;
        }
        if ($this->historyCashCost !== null) {
            $result['history_cash_cost'] = $this->historyCashCost;
        }
        if ($this->historyCost !== null) {
            $result['history_cost'] = $this->historyCost;
        }
        if ($this->lastRechargeTime !== null) {
            $result['last_recharge_time'] = $this->lastRechargeTime;
        }
        if ($this->lastRenewAmount !== null) {
            $result['last_renew_amount'] = $this->lastRenewAmount;
        }
        if ($this->lastRenewTime !== null) {
            $result['last_renew_time'] = $this->lastRenewTime;
        }
        if ($this->ocpcCost !== null) {
            $result['ocpc_cost'] = $this->ocpcCost;
        }
        if ($this->ocpmCost !== null) {
            $result['ocpm_cost'] = $this->ocpmCost;
        }
        if ($this->queryEndTime !== null) {
            $result['query_end_time'] = $this->queryEndTime;
        }
        if ($this->registerDays !== null) {
            $result['register_days'] = $this->registerDays;
        }
        if ($this->registerTime !== null) {
            $result['register_time'] = $this->registerTime;
        }
        if ($this->secondIndustry !== null) {
            $result['second_industry'] = $this->secondIndustry;
        }
        if ($this->show !== null) {
            $result['show'] = $this->show;
        }
        if ($this->todayCost !== null) {
            $result['today_cost'] = $this->todayCost;
        }
        if ($this->todayXHourClick !== null) {
            $result['today_x_hour_click'] = $this->todayXHourClick;
        }
        if ($this->todayXHourConvert !== null) {
            $result['today_x_hour_convert'] = $this->todayXHourConvert;
        }
        if ($this->todayXHourCost !== null) {
            $result['today_x_hour_cost'] = $this->todayXHourCost;
        }
        if ($this->todayXHourCpa !== null) {
            $result['today_x_hour_cpa'] = $this->todayXHourCpa;
        }
        if ($this->todayXHourCpc !== null) {
            $result['today_x_hour_cpc'] = $this->todayXHourCpc;
        }
        if ($this->totalBalance !== null) {
            $result['total_balance'] = $this->totalBalance;
        }
        if ($this->totalRenewAmount !== null) {
            $result['total_renew_amount'] = $this->totalRenewAmount;
        }
        if ($this->totalRenewNumber !== null) {
            $result['total_renew_number'] = $this->totalRenewNumber;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        if ($this->transferCount !== null) {
            $result['transfer_count'] = $this->transferCount;
        }
        if ($this->validBalance !== null) {
            $result['valid_balance'] = $this->validBalance;
        }
        if ($this->xHourClickDiff !== null) {
            $result['x_hour_click_diff'] = $this->xHourClickDiff;
        }
        if ($this->xHourConvertDiff !== null) {
            $result['x_hour_convert_diff'] = $this->xHourConvertDiff;
        }
        if ($this->xHourCostDiff !== null) {
            $result['x_hour_cost_diff'] = $this->xHourCostDiff;
        }
        if ($this->xHourCpaDiff !== null) {
            $result['x_hour_cpa_diff'] = $this->xHourCpaDiff;
        }
        if ($this->xHourCpcDiff !== null) {
            $result['x_hour_cpc_diff'] = $this->xHourCpcDiff;
        }
        if ($this->yesterdayAdNumber !== null) {
            $result['yesterday_ad_number'] = $this->yesterdayAdNumber;
        }
        if ($this->yesterdayBidCashCost !== null) {
            $result['yesterday_bid_cash_cost'] = $this->yesterdayBidCashCost;
        }
        if ($this->yesterdayBrandCashCost !== null) {
            $result['yesterday_brand_cash_cost'] = $this->yesterdayBrandCashCost;
        }
        if ($this->yesterdayCashCost !== null) {
            $result['yesterday_cash_cost'] = $this->yesterdayCashCost;
        }
        if ($this->yesterdayCost !== null) {
            $result['yesterday_cost'] = $this->yesterdayCost;
        }
        if ($this->yesterdayCostDiff !== null) {
            $result['yesterday_cost_diff'] = $this->yesterdayCostDiff;
        }
        if ($this->yesterdayGrantsCost !== null) {
            $result['yesterday_grants_cost'] = $this->yesterdayGrantsCost;
        }
        if ($this->yesterdayMomCost !== null) {
            $result['yesterday_mom_cost'] = $this->yesterdayMomCost;
        }
        if ($this->yesterdayXHourClick !== null) {
            $result['yesterday_x_hour_click'] = $this->yesterdayXHourClick;
        }
        if ($this->yesterdayXHourConvert !== null) {
            $result['yesterday_x_hour_convert'] = $this->yesterdayXHourConvert;
        }
        if ($this->yesterdayXHourCost !== null) {
            $result['yesterday_x_hour_cost'] = $this->yesterdayXHourCost;
        }
        if ($this->yesterdayXHourCpa !== null) {
            $result['yesterday_x_hour_cpa'] = $this->yesterdayXHourCpa;
        }
        if ($this->yesterdayXHourCpc !== null) {
            $result['yesterday_x_hour_cpc'] = $this->yesterdayXHourCpc;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_source'] ?? null) !== null) {
            $obj->accountSource = (string) $v;
        }
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
        if (($v = $data['arpu_3cd'] ?? null) !== null) {
            $obj->arpu3cd = (float) $v;
        }
        if (($v = $data['audit_pass_time'] ?? null) !== null) {
            $obj->auditPassTime = (string) $v;
        }
        if (($v = $data['bid_cost'] ?? null) !== null) {
            $obj->bidCost = (float) $v;
        }
        if (($v = $data['brand_cost'] ?? null) !== null) {
            $obj->brandCost = (float) $v;
        }
        if (($v = $data['cash_balance'] ?? null) !== null) {
            $obj->cashBalance = (float) $v;
        }
        if (($v = $data['cash_cost'] ?? null) !== null) {
            $obj->cashCost = (float) $v;
        }
        if (($v = $data['click'] ?? null) !== null) {
            $obj->click = (int) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['cpa_cost'] ?? null) !== null) {
            $obj->cpaCost = (float) $v;
        }
        if (($v = $data['cpc'] ?? null) !== null) {
            $obj->cpc = (float) $v;
        }
        if (($v = $data['cpc_cost'] ?? null) !== null) {
            $obj->cpcCost = (float) $v;
        }
        if (($v = $data['cpm'] ?? null) !== null) {
            $obj->cpm = (float) $v;
        }
        if (($v = $data['cpm_cost'] ?? null) !== null) {
            $obj->cpmCost = (float) $v;
        }
        if (($v = $data['cpt_cost'] ?? null) !== null) {
            $obj->cptCost = (float) $v;
        }
        if (($v = $data['cpv_cost'] ?? null) !== null) {
            $obj->cpvCost = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['customer_type'] ?? null) !== null) {
            $obj->customerType = (string) $v;
        }
        if (($v = $data['first_cost_time'] ?? null) !== null) {
            $obj->firstCostTime = (string) $v;
        }
        if (($v = $data['first_industry'] ?? null) !== null) {
            $obj->firstIndustry = (string) $v;
        }
        if (($v = $data['first_recharge_amount'] ?? null) !== null) {
            $obj->firstRechargeAmount = (float) $v;
        }
        if (($v = $data['first_recharge_time'] ?? null) !== null) {
            $obj->firstRechargeTime = (string) $v;
        }
        if (($v = $data['gd_cost'] ?? null) !== null) {
            $obj->gdCost = (float) $v;
        }
        if (($v = $data['grant_balance'] ?? null) !== null) {
            $obj->grantBalance = (float) $v;
        }
        if (($v = $data['grants_cost'] ?? null) !== null) {
            $obj->grantsCost = (float) $v;
        }
        if (($v = $data['history_cash_cost'] ?? null) !== null) {
            $obj->historyCashCost = (float) $v;
        }
        if (($v = $data['history_cost'] ?? null) !== null) {
            $obj->historyCost = (float) $v;
        }
        if (($v = $data['last_recharge_time'] ?? null) !== null) {
            $obj->lastRechargeTime = (string) $v;
        }
        if (($v = $data['last_renew_amount'] ?? null) !== null) {
            $obj->lastRenewAmount = (float) $v;
        }
        if (($v = $data['last_renew_time'] ?? null) !== null) {
            $obj->lastRenewTime = (string) $v;
        }
        if (($v = $data['ocpc_cost'] ?? null) !== null) {
            $obj->ocpcCost = (float) $v;
        }
        if (($v = $data['ocpm_cost'] ?? null) !== null) {
            $obj->ocpmCost = (float) $v;
        }
        if (($v = $data['query_end_time'] ?? null) !== null) {
            $obj->queryEndTime = (int) $v;
        }
        if (($v = $data['register_days'] ?? null) !== null) {
            $obj->registerDays = (float) $v;
        }
        if (($v = $data['register_time'] ?? null) !== null) {
            $obj->registerTime = (string) $v;
        }
        if (($v = $data['second_industry'] ?? null) !== null) {
            $obj->secondIndustry = (string) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        if (($v = $data['today_cost'] ?? null) !== null) {
            $obj->todayCost = (float) $v;
        }
        if (($v = $data['today_x_hour_click'] ?? null) !== null) {
            $obj->todayXHourClick = (int) $v;
        }
        if (($v = $data['today_x_hour_convert'] ?? null) !== null) {
            $obj->todayXHourConvert = (int) $v;
        }
        if (($v = $data['today_x_hour_cost'] ?? null) !== null) {
            $obj->todayXHourCost = (float) $v;
        }
        if (($v = $data['today_x_hour_cpa'] ?? null) !== null) {
            $obj->todayXHourCpa = (float) $v;
        }
        if (($v = $data['today_x_hour_cpc'] ?? null) !== null) {
            $obj->todayXHourCpc = (float) $v;
        }
        if (($v = $data['total_balance'] ?? null) !== null) {
            $obj->totalBalance = (float) $v;
        }
        if (($v = $data['total_renew_amount'] ?? null) !== null) {
            $obj->totalRenewAmount = (float) $v;
        }
        if (($v = $data['total_renew_number'] ?? null) !== null) {
            $obj->totalRenewNumber = (float) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (float) $v;
        }
        if (($v = $data['transfer_count'] ?? null) !== null) {
            $obj->transferCount = (int) $v;
        }
        if (($v = $data['valid_balance'] ?? null) !== null) {
            $obj->validBalance = (float) $v;
        }
        if (($v = $data['x_hour_click_diff'] ?? null) !== null) {
            $obj->xHourClickDiff = (int) $v;
        }
        if (($v = $data['x_hour_convert_diff'] ?? null) !== null) {
            $obj->xHourConvertDiff = (int) $v;
        }
        if (($v = $data['x_hour_cost_diff'] ?? null) !== null) {
            $obj->xHourCostDiff = (float) $v;
        }
        if (($v = $data['x_hour_cpa_diff'] ?? null) !== null) {
            $obj->xHourCpaDiff = (float) $v;
        }
        if (($v = $data['x_hour_cpc_diff'] ?? null) !== null) {
            $obj->xHourCpcDiff = (float) $v;
        }
        if (($v = $data['yesterday_ad_number'] ?? null) !== null) {
            $obj->yesterdayAdNumber = (float) $v;
        }
        if (($v = $data['yesterday_bid_cash_cost'] ?? null) !== null) {
            $obj->yesterdayBidCashCost = (float) $v;
        }
        if (($v = $data['yesterday_brand_cash_cost'] ?? null) !== null) {
            $obj->yesterdayBrandCashCost = (float) $v;
        }
        if (($v = $data['yesterday_cash_cost'] ?? null) !== null) {
            $obj->yesterdayCashCost = (float) $v;
        }
        if (($v = $data['yesterday_cost'] ?? null) !== null) {
            $obj->yesterdayCost = (float) $v;
        }
        if (($v = $data['yesterday_cost_diff'] ?? null) !== null) {
            $obj->yesterdayCostDiff = (float) $v;
        }
        if (($v = $data['yesterday_grants_cost'] ?? null) !== null) {
            $obj->yesterdayGrantsCost = (float) $v;
        }
        if (($v = $data['yesterday_mom_cost'] ?? null) !== null) {
            $obj->yesterdayMomCost = (float) $v;
        }
        if (($v = $data['yesterday_x_hour_click'] ?? null) !== null) {
            $obj->yesterdayXHourClick = (int) $v;
        }
        if (($v = $data['yesterday_x_hour_convert'] ?? null) !== null) {
            $obj->yesterdayXHourConvert = (int) $v;
        }
        if (($v = $data['yesterday_x_hour_cost'] ?? null) !== null) {
            $obj->yesterdayXHourCost = (float) $v;
        }
        if (($v = $data['yesterday_x_hour_cpa'] ?? null) !== null) {
            $obj->yesterdayXHourCpa = (float) $v;
        }
        if (($v = $data['yesterday_x_hour_cpc'] ?? null) !== null) {
            $obj->yesterdayXHourCpc = (float) $v;
        }
        return $obj;
    }
}
