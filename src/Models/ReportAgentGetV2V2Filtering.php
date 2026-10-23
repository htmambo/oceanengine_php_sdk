<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAgentGetV2V2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2FilteringAccountSource
     */
    protected ?string $accountSource = null;

    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2FilteringAccountStatus
     */
    protected ?string $accountStatus = null;

    /**
     * @var \Oceanengine\Models\ReportAgentGetV2V2FilteringActive
     */
    protected ?string $active = null;

    /**
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * @var string
     */
    protected ?string $endAuditPassTime = null;

    /**
     * @var string
     */
    protected ?string $firstIndustry = null;

    /**
     * @var string
     */
    protected ?string $secondIndustry = null;

    /**
     * @var string
     */
    protected ?string $startAuditPassTime = null;

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2FilteringAccountSource
     */
    public function getAccountSource(): ?string
    {
        return $this->accountSource;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2FilteringAccountSource $accountSource
     * @return self
     */
    public function setAccountSource(?string $accountSource): self
    {
        $this->accountSource = $accountSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2FilteringAccountStatus
     */
    public function getAccountStatus(): ?string
    {
        return $this->accountStatus;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2FilteringAccountStatus $accountStatus
     * @return self
     */
    public function setAccountStatus(?string $accountStatus): self
    {
        $this->accountStatus = $accountStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAgentGetV2V2FilteringActive
     */
    public function getActive(): ?string
    {
        return $this->active;
    }

    /**
     * @param \Oceanengine\Models\ReportAgentGetV2V2FilteringActive $active
     * @return self
     */
    public function setActive(?string $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
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
     * @return string
     */
    public function getEndAuditPassTime(): ?string
    {
        return $this->endAuditPassTime;
    }

    /**
     * @param string $endAuditPassTime
     * @return self
     */
    public function setEndAuditPassTime(?string $endAuditPassTime): self
    {
        $this->endAuditPassTime = $endAuditPassTime;
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
     * @return string
     */
    public function getStartAuditPassTime(): ?string
    {
        return $this->startAuditPassTime;
    }

    /**
     * @param string $startAuditPassTime
     * @return self
     */
    public function setStartAuditPassTime(?string $startAuditPassTime): self
    {
        $this->startAuditPassTime = $startAuditPassTime;
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
        if ($this->active !== null) {
            $result['active'] = $this->active;
        }
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->endAuditPassTime !== null) {
            $result['end_audit_pass_time'] = $this->endAuditPassTime;
        }
        if ($this->firstIndustry !== null) {
            $result['first_industry'] = $this->firstIndustry;
        }
        if ($this->secondIndustry !== null) {
            $result['second_industry'] = $this->secondIndustry;
        }
        if ($this->startAuditPassTime !== null) {
            $result['start_audit_pass_time'] = $this->startAuditPassTime;
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
        if (($v = $data['active'] ?? null) !== null) {
            $obj->active = (string) $v;
        }
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['end_audit_pass_time'] ?? null) !== null) {
            $obj->endAuditPassTime = (string) $v;
        }
        if (($v = $data['first_industry'] ?? null) !== null) {
            $obj->firstIndustry = (string) $v;
        }
        if (($v = $data['second_industry'] ?? null) !== null) {
            $obj->secondIndustry = (string) $v;
        }
        if (($v = $data['start_audit_pass_time'] ?? null) !== null) {
            $obj->startAuditPassTime = (string) $v;
        }
        return $obj;
    }
}
