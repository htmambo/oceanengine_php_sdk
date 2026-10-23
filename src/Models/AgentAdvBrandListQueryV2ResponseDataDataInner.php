<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvBrandListQueryV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvBrandListQueryV2DataDataAccountStatus
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
     * 品牌余额
     * @var int
     */
    protected ?int $brandBalance = null;

    /**
     * 品牌可用余额
     * @var int
     */
    protected ?int $brandBalanceValid = null;

    /**
     * 品牌赠款余额
     * @var int
     */
    protected ?int $brandGrantBalance = null;

    /**
     * 品牌非赠款可用余额
     * @var int
     */
    protected ?int $brandNonGrantBalanceValid = null;

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
     * 广告主账户一级行业名称
     * @var string
     */
    protected ?string $firstIndustry = null;

    /**
     * 广告主账户一级行业ID
     * @var int
     */
    protected ?int $firstIndustryId = null;

    /**
     * 赠款消耗
     * @var int
     */
    protected ?int $grantCost = null;

    /**
     * 广告主账户二级行业名称
     * @var string
     */
    protected ?string $secondIndustry = null;

    /**
     * 广告主账户二级行业ID
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * 总消耗
     * @var int
     */
    protected ?int $statCost = null;

    /**
     * @return \Oceanengine\Models\AgentAdvBrandListQueryV2DataDataAccountStatus
     */
    public function getAccountStatus(): ?string
    {
        return $this->accountStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvBrandListQueryV2DataDataAccountStatus $accountStatus
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
     * 品牌余额
     * @return int
     */
    public function getBrandBalance(): ?int
    {
        return $this->brandBalance;
    }

    /**
     * 品牌余额
     * @param int $brandBalance
     * @return self
     */
    public function setBrandBalance(?int $brandBalance): self
    {
        $this->brandBalance = $brandBalance;
        return $this;
    }

    /**
     * 品牌可用余额
     * @return int
     */
    public function getBrandBalanceValid(): ?int
    {
        return $this->brandBalanceValid;
    }

    /**
     * 品牌可用余额
     * @param int $brandBalanceValid
     * @return self
     */
    public function setBrandBalanceValid(?int $brandBalanceValid): self
    {
        $this->brandBalanceValid = $brandBalanceValid;
        return $this;
    }

    /**
     * 品牌赠款余额
     * @return int
     */
    public function getBrandGrantBalance(): ?int
    {
        return $this->brandGrantBalance;
    }

    /**
     * 品牌赠款余额
     * @param int $brandGrantBalance
     * @return self
     */
    public function setBrandGrantBalance(?int $brandGrantBalance): self
    {
        $this->brandGrantBalance = $brandGrantBalance;
        return $this;
    }

    /**
     * 品牌非赠款可用余额
     * @return int
     */
    public function getBrandNonGrantBalanceValid(): ?int
    {
        return $this->brandNonGrantBalanceValid;
    }

    /**
     * 品牌非赠款可用余额
     * @param int $brandNonGrantBalanceValid
     * @return self
     */
    public function setBrandNonGrantBalanceValid(?int $brandNonGrantBalanceValid): self
    {
        $this->brandNonGrantBalanceValid = $brandNonGrantBalanceValid;
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
     * 广告主账户一级行业名称
     * @return string
     */
    public function getFirstIndustry(): ?string
    {
        return $this->firstIndustry;
    }

    /**
     * 广告主账户一级行业名称
     * @param string $firstIndustry
     * @return self
     */
    public function setFirstIndustry(?string $firstIndustry): self
    {
        $this->firstIndustry = $firstIndustry;
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
     * 广告主账户二级行业名称
     * @return string
     */
    public function getSecondIndustry(): ?string
    {
        return $this->secondIndustry;
    }

    /**
     * 广告主账户二级行业名称
     * @param string $secondIndustry
     * @return self
     */
    public function setSecondIndustry(?string $secondIndustry): self
    {
        $this->secondIndustry = $secondIndustry;
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
     * 总消耗
     * @return int
     */
    public function getStatCost(): ?int
    {
        return $this->statCost;
    }

    /**
     * 总消耗
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
        if ($this->brandBalance !== null) {
            $result['brand_balance'] = $this->brandBalance;
        }
        if ($this->brandBalanceValid !== null) {
            $result['brand_balance_valid'] = $this->brandBalanceValid;
        }
        if ($this->brandGrantBalance !== null) {
            $result['brand_grant_balance'] = $this->brandGrantBalance;
        }
        if ($this->brandNonGrantBalanceValid !== null) {
            $result['brand_non_grant_balance_valid'] = $this->brandNonGrantBalanceValid;
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
        if ($this->firstIndustry !== null) {
            $result['first_industry'] = $this->firstIndustry;
        }
        if ($this->firstIndustryId !== null) {
            $result['first_industry_id'] = $this->firstIndustryId;
        }
        if ($this->grantCost !== null) {
            $result['grant_cost'] = $this->grantCost;
        }
        if ($this->secondIndustry !== null) {
            $result['second_industry'] = $this->secondIndustry;
        }
        if ($this->secondIndustryId !== null) {
            $result['second_industry_id'] = $this->secondIndustryId;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
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
        if (($v = $data['brand_balance'] ?? null) !== null) {
            $obj->brandBalance = (int) $v;
        }
        if (($v = $data['brand_balance_valid'] ?? null) !== null) {
            $obj->brandBalanceValid = (int) $v;
        }
        if (($v = $data['brand_grant_balance'] ?? null) !== null) {
            $obj->brandGrantBalance = (int) $v;
        }
        if (($v = $data['brand_non_grant_balance_valid'] ?? null) !== null) {
            $obj->brandNonGrantBalanceValid = (int) $v;
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
        if (($v = $data['first_industry'] ?? null) !== null) {
            $obj->firstIndustry = (string) $v;
        }
        if (($v = $data['first_industry_id'] ?? null) !== null) {
            $obj->firstIndustryId = (int) $v;
        }
        if (($v = $data['grant_cost'] ?? null) !== null) {
            $obj->grantCost = (int) $v;
        }
        if (($v = $data['second_industry'] ?? null) !== null) {
            $obj->secondIndustry = (string) $v;
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (int) $v;
        }
        return $obj;
    }
}
