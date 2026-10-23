<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceTicketListV30ResponseDataTicketListInner implements \JsonSerializable
{
    /**
     * 投放账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 可开票金额，单位为分
     * @var int
     */
    protected ?int $availableAmount = null;

    /**
     * 合同ID
     * @var int
     */
    protected ?int $contractId = null;

    /**
     * 合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 开票中金额，单位为分
     * @var int
     */
    protected ?int $frozenAmount = null;

    /**
     * 已开票金额，单位为分
     * @var int
     */
    protected ?int $invoicedAmount = null;

    /**
     * @var \Oceanengine\Models\InvoiceTicketListV30DataTicketListPlatform
     */
    protected ?string $platform = null;

    /**
     * 结算客户ID
     * @var int
     */
    protected ?int $settleCustomerId = null;

    /**
     * 结算客户名称
     * @var string
     */
    protected ?string $settleCustomerName = null;

    /**
     * 字节主体名称
     * @var string
     */
    protected ?string $subjectName = null;

    /**
     * 账单ID
     * @var int
     */
    protected ?int $ticketId = null;

    /**
     * @var \Oceanengine\Models\InvoiceTicketListV30DataTicketListTicketStatus
     */
    protected ?string $ticketStatus = null;

    /**
     * 账单状态名称
     * @var string
     */
    protected ?string $ticketStatusName = null;

    /**
     * @var \Oceanengine\Models\InvoiceTicketListV30DataTicketListTicketType
     */
    protected ?string $ticketType = null;

    /**
     * 账单类型名称
     * @var string
     */
    protected ?string $ticketTypeName = null;

    /**
     * 账单金额，单位为分
     * @var int
     */
    protected ?int $totalAmount = null;

    /**
     * 不可开票金额，单位为分
     * @var int
     */
    protected ?int $unavailableAmount = null;

    /**
     * 投放账户ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 投放账户ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 可开票金额，单位为分
     * @return int
     */
    public function getAvailableAmount(): ?int
    {
        return $this->availableAmount;
    }

    /**
     * 可开票金额，单位为分
     * @param int $availableAmount
     * @return self
     */
    public function setAvailableAmount(?int $availableAmount): self
    {
        $this->availableAmount = $availableAmount;
        return $this;
    }

    /**
     * 合同ID
     * @return int
     */
    public function getContractId(): ?int
    {
        return $this->contractId;
    }

    /**
     * 合同ID
     * @param int $contractId
     * @return self
     */
    public function setContractId(?int $contractId): self
    {
        $this->contractId = $contractId;
        return $this;
    }

    /**
     * 合同编号
     * @return string
     */
    public function getContractSerial(): ?string
    {
        return $this->contractSerial;
    }

    /**
     * 合同编号
     * @param string $contractSerial
     * @return self
     */
    public function setContractSerial(?string $contractSerial): self
    {
        $this->contractSerial = $contractSerial;
        return $this;
    }

    /**
     * 开票中金额，单位为分
     * @return int
     */
    public function getFrozenAmount(): ?int
    {
        return $this->frozenAmount;
    }

    /**
     * 开票中金额，单位为分
     * @param int $frozenAmount
     * @return self
     */
    public function setFrozenAmount(?int $frozenAmount): self
    {
        $this->frozenAmount = $frozenAmount;
        return $this;
    }

    /**
     * 已开票金额，单位为分
     * @return int
     */
    public function getInvoicedAmount(): ?int
    {
        return $this->invoicedAmount;
    }

    /**
     * 已开票金额，单位为分
     * @param int $invoicedAmount
     * @return self
     */
    public function setInvoicedAmount(?int $invoicedAmount): self
    {
        $this->invoicedAmount = $invoicedAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceTicketListV30DataTicketListPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\InvoiceTicketListV30DataTicketListPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 结算客户ID
     * @return int
     */
    public function getSettleCustomerId(): ?int
    {
        return $this->settleCustomerId;
    }

    /**
     * 结算客户ID
     * @param int $settleCustomerId
     * @return self
     */
    public function setSettleCustomerId(?int $settleCustomerId): self
    {
        $this->settleCustomerId = $settleCustomerId;
        return $this;
    }

    /**
     * 结算客户名称
     * @return string
     */
    public function getSettleCustomerName(): ?string
    {
        return $this->settleCustomerName;
    }

    /**
     * 结算客户名称
     * @param string $settleCustomerName
     * @return self
     */
    public function setSettleCustomerName(?string $settleCustomerName): self
    {
        $this->settleCustomerName = $settleCustomerName;
        return $this;
    }

    /**
     * 字节主体名称
     * @return string
     */
    public function getSubjectName(): ?string
    {
        return $this->subjectName;
    }

    /**
     * 字节主体名称
     * @param string $subjectName
     * @return self
     */
    public function setSubjectName(?string $subjectName): self
    {
        $this->subjectName = $subjectName;
        return $this;
    }

    /**
     * 账单ID
     * @return int
     */
    public function getTicketId(): ?int
    {
        return $this->ticketId;
    }

    /**
     * 账单ID
     * @param int $ticketId
     * @return self
     */
    public function setTicketId(?int $ticketId): self
    {
        $this->ticketId = $ticketId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceTicketListV30DataTicketListTicketStatus
     */
    public function getTicketStatus(): ?string
    {
        return $this->ticketStatus;
    }

    /**
     * @param \Oceanengine\Models\InvoiceTicketListV30DataTicketListTicketStatus $ticketStatus
     * @return self
     */
    public function setTicketStatus(?string $ticketStatus): self
    {
        $this->ticketStatus = $ticketStatus;
        return $this;
    }

    /**
     * 账单状态名称
     * @return string
     */
    public function getTicketStatusName(): ?string
    {
        return $this->ticketStatusName;
    }

    /**
     * 账单状态名称
     * @param string $ticketStatusName
     * @return self
     */
    public function setTicketStatusName(?string $ticketStatusName): self
    {
        $this->ticketStatusName = $ticketStatusName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceTicketListV30DataTicketListTicketType
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }

    /**
     * @param \Oceanengine\Models\InvoiceTicketListV30DataTicketListTicketType $ticketType
     * @return self
     */
    public function setTicketType(?string $ticketType): self
    {
        $this->ticketType = $ticketType;
        return $this;
    }

    /**
     * 账单类型名称
     * @return string
     */
    public function getTicketTypeName(): ?string
    {
        return $this->ticketTypeName;
    }

    /**
     * 账单类型名称
     * @param string $ticketTypeName
     * @return self
     */
    public function setTicketTypeName(?string $ticketTypeName): self
    {
        $this->ticketTypeName = $ticketTypeName;
        return $this;
    }

    /**
     * 账单金额，单位为分
     * @return int
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
     * 账单金额，单位为分
     * @param int $totalAmount
     * @return self
     */
    public function setTotalAmount(?int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * 不可开票金额，单位为分
     * @return int
     */
    public function getUnavailableAmount(): ?int
    {
        return $this->unavailableAmount;
    }

    /**
     * 不可开票金额，单位为分
     * @param int $unavailableAmount
     * @return self
     */
    public function setUnavailableAmount(?int $unavailableAmount): self
    {
        $this->unavailableAmount = $unavailableAmount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->availableAmount !== null) {
            $result['available_amount'] = $this->availableAmount;
        }
        if ($this->contractId !== null) {
            $result['contract_id'] = $this->contractId;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->frozenAmount !== null) {
            $result['frozen_amount'] = $this->frozenAmount;
        }
        if ($this->invoicedAmount !== null) {
            $result['invoiced_amount'] = $this->invoicedAmount;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->settleCustomerId !== null) {
            $result['settle_customer_id'] = $this->settleCustomerId;
        }
        if ($this->settleCustomerName !== null) {
            $result['settle_customer_name'] = $this->settleCustomerName;
        }
        if ($this->subjectName !== null) {
            $result['subject_name'] = $this->subjectName;
        }
        if ($this->ticketId !== null) {
            $result['ticket_id'] = $this->ticketId;
        }
        if ($this->ticketStatus !== null) {
            $result['ticket_status'] = $this->ticketStatus;
        }
        if ($this->ticketStatusName !== null) {
            $result['ticket_status_name'] = $this->ticketStatusName;
        }
        if ($this->ticketType !== null) {
            $result['ticket_type'] = $this->ticketType;
        }
        if ($this->ticketTypeName !== null) {
            $result['ticket_type_name'] = $this->ticketTypeName;
        }
        if ($this->totalAmount !== null) {
            $result['total_amount'] = $this->totalAmount;
        }
        if ($this->unavailableAmount !== null) {
            $result['unavailable_amount'] = $this->unavailableAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['available_amount'] ?? null) !== null) {
            $obj->availableAmount = (int) $v;
        }
        if (($v = $data['contract_id'] ?? null) !== null) {
            $obj->contractId = (int) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['frozen_amount'] ?? null) !== null) {
            $obj->frozenAmount = (int) $v;
        }
        if (($v = $data['invoiced_amount'] ?? null) !== null) {
            $obj->invoicedAmount = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['settle_customer_id'] ?? null) !== null) {
            $obj->settleCustomerId = (int) $v;
        }
        if (($v = $data['settle_customer_name'] ?? null) !== null) {
            $obj->settleCustomerName = (string) $v;
        }
        if (($v = $data['subject_name'] ?? null) !== null) {
            $obj->subjectName = (string) $v;
        }
        if (($v = $data['ticket_id'] ?? null) !== null) {
            $obj->ticketId = (int) $v;
        }
        if (($v = $data['ticket_status'] ?? null) !== null) {
            $obj->ticketStatus = (string) $v;
        }
        if (($v = $data['ticket_status_name'] ?? null) !== null) {
            $obj->ticketStatusName = (string) $v;
        }
        if (($v = $data['ticket_type'] ?? null) !== null) {
            $obj->ticketType = (string) $v;
        }
        if (($v = $data['ticket_type_name'] ?? null) !== null) {
            $obj->ticketTypeName = (string) $v;
        }
        if (($v = $data['total_amount'] ?? null) !== null) {
            $obj->totalAmount = (int) $v;
        }
        if (($v = $data['unavailable_amount'] ?? null) !== null) {
            $obj->unavailableAmount = (int) $v;
        }
        return $obj;
    }
}
