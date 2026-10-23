<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceApplyOrderListV30ResponseDataApplyOrderListInner implements \JsonSerializable
{
    /**
     * 申请金额，单位为分（即实际金额*100）
     * @var int
     */
    protected ?int $applyAmount = null;

    /**
     * 开票编号
     * @var string
     */
    protected ?string $applySerial = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceDirection
     */
    protected ?string $invoiceDirection = null;

    /**
     * 发票方向名称
     * @var string
     */
    protected ?string $invoiceDirectionName = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus
     */
    protected ?string $invoiceStatus = null;

    /**
     * @var string
     */
    protected ?string $invoiceStatusName = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceType
     */
    protected ?string $invoiceType = null;

    /**
     * 发票类型名称
     * @var string
     */
    protected ?string $invoiceTypeName = null;

    /**
     * @var \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListReverseStatus
     */
    protected ?string $reverseStatus = null;

    /**
     * 红冲状态名称
     * @var string
     */
    protected ?string $reverseStatusName = null;

    /**
     * 申请金额，单位为分（即实际金额*100）
     * @return int
     */
    public function getApplyAmount(): ?int
    {
        return $this->applyAmount;
    }

    /**
     * 申请金额，单位为分（即实际金额*100）
     * @param int $applyAmount
     * @return self
     */
    public function setApplyAmount(?int $applyAmount): self
    {
        $this->applyAmount = $applyAmount;
        return $this;
    }

    /**
     * 开票编号
     * @return string
     */
    public function getApplySerial(): ?string
    {
        return $this->applySerial;
    }

    /**
     * 开票编号
     * @param string $applySerial
     * @return self
     */
    public function setApplySerial(?string $applySerial): self
    {
        $this->applySerial = $applySerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceDirection
     */
    public function getInvoiceDirection(): ?string
    {
        return $this->invoiceDirection;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceDirection $invoiceDirection
     * @return self
     */
    public function setInvoiceDirection(?string $invoiceDirection): self
    {
        $this->invoiceDirection = $invoiceDirection;
        return $this;
    }

    /**
     * 发票方向名称
     * @return string
     */
    public function getInvoiceDirectionName(): ?string
    {
        return $this->invoiceDirectionName;
    }

    /**
     * 发票方向名称
     * @param string $invoiceDirectionName
     * @return self
     */
    public function setInvoiceDirectionName(?string $invoiceDirectionName): self
    {
        $this->invoiceDirectionName = $invoiceDirectionName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus
     */
    public function getInvoiceStatus(): ?string
    {
        return $this->invoiceStatus;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceStatus $invoiceStatus
     * @return self
     */
    public function setInvoiceStatus(?string $invoiceStatus): self
    {
        $this->invoiceStatus = $invoiceStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceStatusName(): ?string
    {
        return $this->invoiceStatusName;
    }

    /**
     * @param string $invoiceStatusName
     * @return self
     */
    public function setInvoiceStatusName(?string $invoiceStatusName): self
    {
        $this->invoiceStatusName = $invoiceStatusName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceType
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListInvoiceType $invoiceType
     * @return self
     */
    public function setInvoiceType(?string $invoiceType): self
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * 发票类型名称
     * @return string
     */
    public function getInvoiceTypeName(): ?string
    {
        return $this->invoiceTypeName;
    }

    /**
     * 发票类型名称
     * @param string $invoiceTypeName
     * @return self
     */
    public function setInvoiceTypeName(?string $invoiceTypeName): self
    {
        $this->invoiceTypeName = $invoiceTypeName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListReverseStatus
     */
    public function getReverseStatus(): ?string
    {
        return $this->reverseStatus;
    }

    /**
     * @param \Oceanengine\Models\InvoiceApplyOrderListV30DataApplyOrderListReverseStatus $reverseStatus
     * @return self
     */
    public function setReverseStatus(?string $reverseStatus): self
    {
        $this->reverseStatus = $reverseStatus;
        return $this;
    }

    /**
     * 红冲状态名称
     * @return string
     */
    public function getReverseStatusName(): ?string
    {
        return $this->reverseStatusName;
    }

    /**
     * 红冲状态名称
     * @param string $reverseStatusName
     * @return self
     */
    public function setReverseStatusName(?string $reverseStatusName): self
    {
        $this->reverseStatusName = $reverseStatusName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyAmount !== null) {
            $result['apply_amount'] = $this->applyAmount;
        }
        if ($this->applySerial !== null) {
            $result['apply_serial'] = $this->applySerial;
        }
        if ($this->invoiceDirection !== null) {
            $result['invoice_direction'] = $this->invoiceDirection;
        }
        if ($this->invoiceDirectionName !== null) {
            $result['invoice_direction_name'] = $this->invoiceDirectionName;
        }
        if ($this->invoiceStatus !== null) {
            $result['invoice_status'] = $this->invoiceStatus;
        }
        if ($this->invoiceStatusName !== null) {
            $result['invoice_status_name'] = $this->invoiceStatusName;
        }
        if ($this->invoiceType !== null) {
            $result['invoice_type'] = $this->invoiceType;
        }
        if ($this->invoiceTypeName !== null) {
            $result['invoice_type_name'] = $this->invoiceTypeName;
        }
        if ($this->reverseStatus !== null) {
            $result['reverse_status'] = $this->reverseStatus;
        }
        if ($this->reverseStatusName !== null) {
            $result['reverse_status_name'] = $this->reverseStatusName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_amount'] ?? null) !== null) {
            $obj->applyAmount = (int) $v;
        }
        if (($v = $data['apply_serial'] ?? null) !== null) {
            $obj->applySerial = (string) $v;
        }
        if (($v = $data['invoice_direction'] ?? null) !== null) {
            $obj->invoiceDirection = (string) $v;
        }
        if (($v = $data['invoice_direction_name'] ?? null) !== null) {
            $obj->invoiceDirectionName = (string) $v;
        }
        if (($v = $data['invoice_status'] ?? null) !== null) {
            $obj->invoiceStatus = (string) $v;
        }
        if (($v = $data['invoice_status_name'] ?? null) !== null) {
            $obj->invoiceStatusName = (string) $v;
        }
        if (($v = $data['invoice_type'] ?? null) !== null) {
            $obj->invoiceType = (string) $v;
        }
        if (($v = $data['invoice_type_name'] ?? null) !== null) {
            $obj->invoiceTypeName = (string) $v;
        }
        if (($v = $data['reverse_status'] ?? null) !== null) {
            $obj->reverseStatus = (string) $v;
        }
        if (($v = $data['reverse_status_name'] ?? null) !== null) {
            $obj->reverseStatusName = (string) $v;
        }
        return $obj;
    }
}
