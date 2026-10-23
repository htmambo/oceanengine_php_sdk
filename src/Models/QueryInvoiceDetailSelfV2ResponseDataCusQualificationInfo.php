<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceDetailSelfV2ResponseDataCusQualificationInfo implements \JsonSerializable
{
    /**
     * 注册地址
     * @var string
     */
    protected ?string $customerAddress = null;

    /**
     * 开户行
     * @var string
     */
    protected ?string $customerBank = null;

    /**
     * 开户账号
     * @var string
     */
    protected ?string $customerBankAccount = null;

    /**
     * 注册电话
     * @var string
     */
    protected ?string $customerPhone = null;

    /**
     * 开票客户名称
     * @var string
     */
    protected ?string $customerSubjectName = null;

    /**
     * 纳税人识别号
     * @var string
     */
    protected ?string $customerTaxTo = null;

    /**
     * 注册地址
     * @return string
     */
    public function getCustomerAddress(): ?string
    {
        return $this->customerAddress;
    }

    /**
     * 注册地址
     * @param string $customerAddress
     * @return self
     */
    public function setCustomerAddress(?string $customerAddress): self
    {
        $this->customerAddress = $customerAddress;
        return $this;
    }

    /**
     * 开户行
     * @return string
     */
    public function getCustomerBank(): ?string
    {
        return $this->customerBank;
    }

    /**
     * 开户行
     * @param string $customerBank
     * @return self
     */
    public function setCustomerBank(?string $customerBank): self
    {
        $this->customerBank = $customerBank;
        return $this;
    }

    /**
     * 开户账号
     * @return string
     */
    public function getCustomerBankAccount(): ?string
    {
        return $this->customerBankAccount;
    }

    /**
     * 开户账号
     * @param string $customerBankAccount
     * @return self
     */
    public function setCustomerBankAccount(?string $customerBankAccount): self
    {
        $this->customerBankAccount = $customerBankAccount;
        return $this;
    }

    /**
     * 注册电话
     * @return string
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }

    /**
     * 注册电话
     * @param string $customerPhone
     * @return self
     */
    public function setCustomerPhone(?string $customerPhone): self
    {
        $this->customerPhone = $customerPhone;
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
    public function getCustomerTaxTo(): ?string
    {
        return $this->customerTaxTo;
    }

    /**
     * 纳税人识别号
     * @param string $customerTaxTo
     * @return self
     */
    public function setCustomerTaxTo(?string $customerTaxTo): self
    {
        $this->customerTaxTo = $customerTaxTo;
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
        if ($this->customerPhone !== null) {
            $result['customer_phone'] = $this->customerPhone;
        }
        if ($this->customerSubjectName !== null) {
            $result['customer_subject_name'] = $this->customerSubjectName;
        }
        if ($this->customerTaxTo !== null) {
            $result['customer_tax_to'] = $this->customerTaxTo;
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
        if (($v = $data['customer_phone'] ?? null) !== null) {
            $obj->customerPhone = (string) $v;
        }
        if (($v = $data['customer_subject_name'] ?? null) !== null) {
            $obj->customerSubjectName = (string) $v;
        }
        if (($v = $data['customer_tax_to'] ?? null) !== null) {
            $obj->customerTaxTo = (string) $v;
        }
        return $obj;
    }
}
