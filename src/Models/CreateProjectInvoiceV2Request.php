<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreateProjectInvoiceV2Request implements \JsonSerializable
{
    /**
     * 企业注册地址
     * @var string
     */
    protected ?string $customerAddress = null;

    /**
     * 企业开户银行
     * @var string
     */
    protected ?string $customerBank = null;

    /**
     * 企业银行账号
     * @var string
     */
    protected ?string $customerBankAccount = null;

    /**
     * 客户邮箱
     * @var string
     */
    protected ?string $customerEmail = null;

    /**
     * 企业注册电话
     * @var string
     */
    protected ?string $customerPhone = null;

    /**
     * 客户短信电话
     * @var string
     */
    protected ?string $customerSmsPhone = null;

    /**
     * 开票客户名称
     * @var string
     */
    protected ?string $customerSubjectName = null;

    /**
     * 纳税人识别号
     * @var string
     */
    protected ?string $customerTaxNo = null;

    /**
     * 发票票据列表
     * @var \Oceanengine\Models\CreateProjectInvoiceV2RequestInvoiceBillListInner[]
     */
    protected ?array $invoiceBillList = null;

    /**
     * @var \Oceanengine\Models\CreateProjectInvoiceV2InvoiceType
     */
    protected ?string $invoiceType = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 项目编号列表
     * @var string[]
     */
    protected ?array $projectSerialList = null;

    /**
     * 数电发票，是否勾选企业注册地址、电话
     * @var bool
     */
    protected ?bool $selectAddressAndPhone = null;

    /**
     * 数电发票，是否勾选开户行、开户账号
     * @var bool
     */
    protected ?bool $selectBankAndAccount = null;

    /**
     * 非打印备注
     * @var string
     */
    protected ?string $unprintableRemark = null;

    /**
     * 企业注册地址
     * @return string
     */
    public function getCustomerAddress(): ?string
    {
        return $this->customerAddress;
    }

    /**
     * 企业注册地址
     * @param string $customerAddress
     * @return self
     */
    public function setCustomerAddress(?string $customerAddress): self
    {
        $this->customerAddress = $customerAddress;
        return $this;
    }

    /**
     * 企业开户银行
     * @return string
     */
    public function getCustomerBank(): ?string
    {
        return $this->customerBank;
    }

    /**
     * 企业开户银行
     * @param string $customerBank
     * @return self
     */
    public function setCustomerBank(?string $customerBank): self
    {
        $this->customerBank = $customerBank;
        return $this;
    }

    /**
     * 企业银行账号
     * @return string
     */
    public function getCustomerBankAccount(): ?string
    {
        return $this->customerBankAccount;
    }

    /**
     * 企业银行账号
     * @param string $customerBankAccount
     * @return self
     */
    public function setCustomerBankAccount(?string $customerBankAccount): self
    {
        $this->customerBankAccount = $customerBankAccount;
        return $this;
    }

    /**
     * 客户邮箱
     * @return string
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    /**
     * 客户邮箱
     * @param string $customerEmail
     * @return self
     */
    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }

    /**
     * 企业注册电话
     * @return string
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }

    /**
     * 企业注册电话
     * @param string $customerPhone
     * @return self
     */
    public function setCustomerPhone(?string $customerPhone): self
    {
        $this->customerPhone = $customerPhone;
        return $this;
    }

    /**
     * 客户短信电话
     * @return string
     */
    public function getCustomerSmsPhone(): ?string
    {
        return $this->customerSmsPhone;
    }

    /**
     * 客户短信电话
     * @param string $customerSmsPhone
     * @return self
     */
    public function setCustomerSmsPhone(?string $customerSmsPhone): self
    {
        $this->customerSmsPhone = $customerSmsPhone;
        return $this;
    }

    /**
     * 开票客户名称
     * @return string
     */
    public function getCustomerSubjectName(): ?string
    {
        return $this->customerSubjectName;
    }

    /**
     * 开票客户名称
     * @param string $customerSubjectName
     * @return self
     */
    public function setCustomerSubjectName(?string $customerSubjectName): self
    {
        $this->customerSubjectName = $customerSubjectName;
        return $this;
    }

    /**
     * 纳税人识别号
     * @return string
     */
    public function getCustomerTaxNo(): ?string
    {
        return $this->customerTaxNo;
    }

    /**
     * 纳税人识别号
     * @param string $customerTaxNo
     * @return self
     */
    public function setCustomerTaxNo(?string $customerTaxNo): self
    {
        $this->customerTaxNo = $customerTaxNo;
        return $this;
    }

    /**
     * 发票票据列表
     * @return \Oceanengine\Models\CreateProjectInvoiceV2RequestInvoiceBillListInner[]
     */
    public function getInvoiceBillList(): ?array
    {
        return $this->invoiceBillList;
    }

    /**
     * 发票票据列表
     * @param \Oceanengine\Models\CreateProjectInvoiceV2RequestInvoiceBillListInner[] $invoiceBillList
     * @return self
     */
    public function setInvoiceBillList(?array $invoiceBillList): self
    {
        $this->invoiceBillList = $invoiceBillList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreateProjectInvoiceV2InvoiceType
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }

    /**
     * @param \Oceanengine\Models\CreateProjectInvoiceV2InvoiceType $invoiceType
     * @return self
     */
    public function setInvoiceType(?string $invoiceType): self
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 项目编号列表
     * @return string[]
     */
    public function getProjectSerialList(): ?array
    {
        return $this->projectSerialList;
    }

    /**
     * 项目编号列表
     * @param string[] $projectSerialList
     * @return self
     */
    public function setProjectSerialList(?array $projectSerialList): self
    {
        $this->projectSerialList = $projectSerialList;
        return $this;
    }

    /**
     * 数电发票，是否勾选企业注册地址、电话
     * @return bool
     */
    public function getSelectAddressAndPhone(): ?bool
    {
        return $this->selectAddressAndPhone;
    }

    /**
     * 数电发票，是否勾选企业注册地址、电话
     * @param bool $selectAddressAndPhone
     * @return self
     */
    public function setSelectAddressAndPhone(?bool $selectAddressAndPhone): self
    {
        $this->selectAddressAndPhone = $selectAddressAndPhone;
        return $this;
    }

    /**
     * 数电发票，是否勾选开户行、开户账号
     * @return bool
     */
    public function getSelectBankAndAccount(): ?bool
    {
        return $this->selectBankAndAccount;
    }

    /**
     * 数电发票，是否勾选开户行、开户账号
     * @param bool $selectBankAndAccount
     * @return self
     */
    public function setSelectBankAndAccount(?bool $selectBankAndAccount): self
    {
        $this->selectBankAndAccount = $selectBankAndAccount;
        return $this;
    }

    /**
     * 非打印备注
     * @return string
     */
    public function getUnprintableRemark(): ?string
    {
        return $this->unprintableRemark;
    }

    /**
     * 非打印备注
     * @param string $unprintableRemark
     * @return self
     */
    public function setUnprintableRemark(?string $unprintableRemark): self
    {
        $this->unprintableRemark = $unprintableRemark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customerAddress !== null) {
            $result['customer_address'] = $this->customerAddress;
        }
        if ($this->customerBank !== null) {
            $result['customer_bank'] = $this->customerBank;
        }
        if ($this->customerBankAccount !== null) {
            $result['customer_bank_account'] = $this->customerBankAccount;
        }
        if ($this->customerEmail !== null) {
            $result['customer_email'] = $this->customerEmail;
        }
        if ($this->customerPhone !== null) {
            $result['customer_phone'] = $this->customerPhone;
        }
        if ($this->customerSmsPhone !== null) {
            $result['customer_sms_phone'] = $this->customerSmsPhone;
        }
        if ($this->customerSubjectName !== null) {
            $result['customer_subject_name'] = $this->customerSubjectName;
        }
        if ($this->customerTaxNo !== null) {
            $result['customer_tax_no'] = $this->customerTaxNo;
        }
        if ($this->invoiceBillList !== null) {
            $result['invoice_bill_list'] = $this->invoiceBillList;
        }
        if ($this->invoiceType !== null) {
            $result['invoice_type'] = $this->invoiceType;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->projectSerialList !== null) {
            $result['project_serial_list'] = $this->projectSerialList;
        }
        if ($this->selectAddressAndPhone !== null) {
            $result['select_address_and_phone'] = $this->selectAddressAndPhone;
        }
        if ($this->selectBankAndAccount !== null) {
            $result['select_bank_and_account'] = $this->selectBankAndAccount;
        }
        if ($this->unprintableRemark !== null) {
            $result['unprintable_remark'] = $this->unprintableRemark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['customer_address'] ?? null) !== null) {
            $obj->customerAddress = (string) $v;
        }
        if (($v = $data['customer_bank'] ?? null) !== null) {
            $obj->customerBank = (string) $v;
        }
        if (($v = $data['customer_bank_account'] ?? null) !== null) {
            $obj->customerBankAccount = (string) $v;
        }
        if (($v = $data['customer_email'] ?? null) !== null) {
            $obj->customerEmail = (string) $v;
        }
        if (($v = $data['customer_phone'] ?? null) !== null) {
            $obj->customerPhone = (string) $v;
        }
        if (($v = $data['customer_sms_phone'] ?? null) !== null) {
            $obj->customerSmsPhone = (string) $v;
        }
        if (($v = $data['customer_subject_name'] ?? null) !== null) {
            $obj->customerSubjectName = (string) $v;
        }
        if (($v = $data['customer_tax_no'] ?? null) !== null) {
            $obj->customerTaxNo = (string) $v;
        }
        if (($v = $data['invoice_bill_list'] ?? null) !== null && is_array($v)) {
            $obj->invoiceBillList = array_map(fn ($vv) => \Oceanengine\Models\CreateProjectInvoiceV2RequestInvoiceBillListInner::fromArray($vv), $v);
        }
        if (($v = $data['invoice_type'] ?? null) !== null) {
            $obj->invoiceType = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['project_serial_list'] ?? null) !== null && is_array($v)) {
            $obj->projectSerialList = $v;
        }
        if (($v = $data['select_address_and_phone'] ?? null) !== null) {
            $obj->selectAddressAndPhone = (bool) $v;
        }
        if (($v = $data['select_bank_and_account'] ?? null) !== null) {
            $obj->selectBankAndAccount = (bool) $v;
        }
        if (($v = $data['unprintable_remark'] ?? null) !== null) {
            $obj->unprintableRemark = (string) $v;
        }
        return $obj;
    }
}
