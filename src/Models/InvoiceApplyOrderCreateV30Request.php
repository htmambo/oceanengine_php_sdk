<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceApplyOrderCreateV30Request implements \JsonSerializable
{
    /**
     * 投放账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceHeader
     */
    protected ?\Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceHeader $invoiceHeader = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceProjectInfo
     */
    protected ?\Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceProjectInfo $invoiceProjectInfo = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyOrderCreateV30InvoiceType
     */
    protected ?string $invoiceType = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyOrderCreateV30Platform
     */
    protected ?string $platform = null;

    /**
     * 接收邮箱
     * @var string
     */
    protected ?string $receiverEmail = null;

    /**
     * 发票备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 请求ID，幂等和查询开票结果使用
     * @var string
     */
    protected ?string $requestId = null;

    /**
     * 选择的账单列表
     * @var \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestTicketInfosInner[]
     */
    protected ?array $ticketInfos = null;

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
     * @return \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceHeader
     */
    public function getInvoiceHeader(): ?\Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceHeader
    {
        return $this->invoiceHeader;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceHeader $invoiceHeader
     * @return self
     */
    public function setInvoiceHeader(?\Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceHeader $invoiceHeader): self
    {
        $this->invoiceHeader = $invoiceHeader;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceProjectInfo
     */
    public function getInvoiceProjectInfo(): ?\Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceProjectInfo
    {
        return $this->invoiceProjectInfo;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceProjectInfo $invoiceProjectInfo
     * @return self
     */
    public function setInvoiceProjectInfo(?\Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceProjectInfo $invoiceProjectInfo): self
    {
        $this->invoiceProjectInfo = $invoiceProjectInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyOrderCreateV30InvoiceType
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyOrderCreateV30InvoiceType $invoiceType
     * @return self
     */
    public function setInvoiceType(?string $invoiceType): self
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyOrderCreateV30Platform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyOrderCreateV30Platform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 接收邮箱
     * @return string
     */
    public function getReceiverEmail(): ?string
    {
        return $this->receiverEmail;
    }

    /**
     * 接收邮箱
     * @param string $receiverEmail
     * @return self
     */
    public function setReceiverEmail(?string $receiverEmail): self
    {
        $this->receiverEmail = $receiverEmail;
        return $this;
    }

    /**
     * 发票备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 发票备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 请求ID，幂等和查询开票结果使用
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * 请求ID，幂等和查询开票结果使用
     * @param string $requestId
     * @return self
     */
    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * 选择的账单列表
     * @return \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestTicketInfosInner[]
     */
    public function getTicketInfos(): ?array
    {
        return $this->ticketInfos;
    }

    /**
     * 选择的账单列表
     * @param \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestTicketInfosInner[] $ticketInfos
     * @return self
     */
    public function setTicketInfos(?array $ticketInfos): self
    {
        $this->ticketInfos = $ticketInfos;
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
        if ($this->invoiceHeader !== null) {
            $result['invoice_header'] = $this->invoiceHeader;
        }
        if ($this->invoiceProjectInfo !== null) {
            $result['invoice_project_info'] = $this->invoiceProjectInfo;
        }
        if ($this->invoiceType !== null) {
            $result['invoice_type'] = $this->invoiceType;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->receiverEmail !== null) {
            $result['receiver_email'] = $this->receiverEmail;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->requestId !== null) {
            $result['request_id'] = $this->requestId;
        }
        if ($this->ticketInfos !== null) {
            $result['ticket_infos'] = $this->ticketInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['invoice_header'] ?? null) !== null && is_array($v)) {
            $obj->invoiceHeader = \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceHeader::fromArray($v);
        }
        if (($v = $data['invoice_project_info'] ?? null) !== null && is_array($v)) {
            $obj->invoiceProjectInfo = \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestInvoiceProjectInfo::fromArray($v);
        }
        if (($v = $data['invoice_type'] ?? null) !== null) {
            $obj->invoiceType = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['receiver_email'] ?? null) !== null) {
            $obj->receiverEmail = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['request_id'] ?? null) !== null) {
            $obj->requestId = (string) $v;
        }
        if (($v = $data['ticket_infos'] ?? null) !== null && is_array($v)) {
            $obj->ticketInfos = array_map(fn ($vv) => \Oceanengine\Models\InvoiceApplyOrderCreateV30RequestTicketInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
