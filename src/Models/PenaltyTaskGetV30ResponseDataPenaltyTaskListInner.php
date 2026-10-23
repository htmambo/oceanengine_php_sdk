<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PenaltyTaskGetV30ResponseDataPenaltyTaskListInner implements \JsonSerializable
{
    /**
     * 扣罚广告主金额(单位是分)
     * @var float
     */
    protected ?float $accountPenaltyAmount = null;

    /**
     * 扣罚倍数
     * @var float
     */
    protected ?float $accountPenaltyMultiple = null;

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
     * 对客封停原因
     * @var string
     */
    protected ?string $banAdvReason = null;

    /**
     * 封停期限
     * @var string
     */
    protected ?string $banAdvTerm = null;

    /**
     * @var \Oceanengine\Models\PenaltyTaskGetV30DataPenaltyTaskListBusinessLine
     */
    protected ?string $businessLine = null;

    /**
     * 广告主公司ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 客户id
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * 客户名称
     * @var string
     */
    protected ?string $customerName = null;

    /**
     * 封停日期
     * @var string
     */
    protected ?string $diposalDate = null;

    /**
     * 违规等级
     * @var string
     */
    protected ?string $disposalLevel = null;

    /**
     * 扣罚任务单号
     * @var string
     */
    protected ?string $id = null;

    /**
     * @var \Oceanengine\Models\PenaltyTaskGetV30DataPenaltyTaskListTaskStatus
     */
    protected ?string $taskStatus = null;

    /**
     * 商安工单id
     * @var int
     */
    protected ?int $ticketId = null;

    /**
     * 扣罚广告主金额(单位是分)
     * @return float
     */
    public function getAccountPenaltyAmount(): ?float
    {
        return $this->accountPenaltyAmount;
    }

    /**
     * 扣罚广告主金额(单位是分)
     * @param float $accountPenaltyAmount
     * @return self
     */
    public function setAccountPenaltyAmount(?float $accountPenaltyAmount): self
    {
        $this->accountPenaltyAmount = $accountPenaltyAmount;
        return $this;
    }

    /**
     * 扣罚倍数
     * @return float
     */
    public function getAccountPenaltyMultiple(): ?float
    {
        return $this->accountPenaltyMultiple;
    }

    /**
     * 扣罚倍数
     * @param float $accountPenaltyMultiple
     * @return self
     */
    public function setAccountPenaltyMultiple(?float $accountPenaltyMultiple): self
    {
        $this->accountPenaltyMultiple = $accountPenaltyMultiple;
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
     * 对客封停原因
     * @return string
     */
    public function getBanAdvReason(): ?string
    {
        return $this->banAdvReason;
    }

    /**
     * 对客封停原因
     * @param string $banAdvReason
     * @return self
     */
    public function setBanAdvReason(?string $banAdvReason): self
    {
        $this->banAdvReason = $banAdvReason;
        return $this;
    }

    /**
     * 封停期限
     * @return string
     */
    public function getBanAdvTerm(): ?string
    {
        return $this->banAdvTerm;
    }

    /**
     * 封停期限
     * @param string $banAdvTerm
     * @return self
     */
    public function setBanAdvTerm(?string $banAdvTerm): self
    {
        $this->banAdvTerm = $banAdvTerm;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PenaltyTaskGetV30DataPenaltyTaskListBusinessLine
     */
    public function getBusinessLine(): ?string
    {
        return $this->businessLine;
    }

    /**
     * @param \Oceanengine\Models\PenaltyTaskGetV30DataPenaltyTaskListBusinessLine $businessLine
     * @return self
     */
    public function setBusinessLine(?string $businessLine): self
    {
        $this->businessLine = $businessLine;
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
     * 客户id
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 客户id
     * @param int $customerId
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * 客户名称
     * @return string
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * 客户名称
     * @param string $customerName
     * @return self
     */
    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * 封停日期
     * @return string
     */
    public function getDiposalDate(): ?string
    {
        return $this->diposalDate;
    }

    /**
     * 封停日期
     * @param string $diposalDate
     * @return self
     */
    public function setDiposalDate(?string $diposalDate): self
    {
        $this->diposalDate = $diposalDate;
        return $this;
    }

    /**
     * 违规等级
     * @return string
     */
    public function getDisposalLevel(): ?string
    {
        return $this->disposalLevel;
    }

    /**
     * 违规等级
     * @param string $disposalLevel
     * @return self
     */
    public function setDisposalLevel(?string $disposalLevel): self
    {
        $this->disposalLevel = $disposalLevel;
        return $this;
    }

    /**
     * 扣罚任务单号
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 扣罚任务单号
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PenaltyTaskGetV30DataPenaltyTaskListTaskStatus
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param \Oceanengine\Models\PenaltyTaskGetV30DataPenaltyTaskListTaskStatus $taskStatus
     * @return self
     */
    public function setTaskStatus(?string $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }

    /**
     * 商安工单id
     * @return int
     */
    public function getTicketId(): ?int
    {
        return $this->ticketId;
    }

    /**
     * 商安工单id
     * @param int $ticketId
     * @return self
     */
    public function setTicketId(?int $ticketId): self
    {
        $this->ticketId = $ticketId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountPenaltyAmount !== null) {
            $result['account_penalty_amount'] = $this->accountPenaltyAmount;
        }
        if ($this->accountPenaltyMultiple !== null) {
            $result['account_penalty_multiple'] = $this->accountPenaltyMultiple;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->banAdvReason !== null) {
            $result['ban_adv_reason'] = $this->banAdvReason;
        }
        if ($this->banAdvTerm !== null) {
            $result['ban_adv_term'] = $this->banAdvTerm;
        }
        if ($this->businessLine !== null) {
            $result['business_line'] = $this->businessLine;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->customerName !== null) {
            $result['customer_name'] = $this->customerName;
        }
        if ($this->diposalDate !== null) {
            $result['diposal_date'] = $this->diposalDate;
        }
        if ($this->disposalLevel !== null) {
            $result['disposal_level'] = $this->disposalLevel;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        if ($this->ticketId !== null) {
            $result['ticket_id'] = $this->ticketId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_penalty_amount'] ?? null) !== null) {
            $obj->accountPenaltyAmount = (float) $v;
        }
        if (($v = $data['account_penalty_multiple'] ?? null) !== null) {
            $obj->accountPenaltyMultiple = (float) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['ban_adv_reason'] ?? null) !== null) {
            $obj->banAdvReason = (string) $v;
        }
        if (($v = $data['ban_adv_term'] ?? null) !== null) {
            $obj->banAdvTerm = (string) $v;
        }
        if (($v = $data['business_line'] ?? null) !== null) {
            $obj->businessLine = (string) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['customer_name'] ?? null) !== null) {
            $obj->customerName = (string) $v;
        }
        if (($v = $data['diposal_date'] ?? null) !== null) {
            $obj->diposalDate = (string) $v;
        }
        if (($v = $data['disposal_level'] ?? null) !== null) {
            $obj->disposalLevel = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (string) $v;
        }
        if (($v = $data['ticket_id'] ?? null) !== null) {
            $obj->ticketId = (int) $v;
        }
        return $obj;
    }
}
