<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceDetailV2ResponseDataElectronicReceiveInfo implements \JsonSerializable
{
    /**
     * 客户邮箱
     * @var string
     */
    protected ?string $customerEmail = null;

    /**
     * 客户短信电话
     * @var string
     */
    protected ?string $customerSmsPhones = null;

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
     * 客户短信电话
     * @return string
     */
    public function getCustomerSmsPhones(): ?string
    {
        return $this->customerSmsPhones;
    }

    /**
     * 客户短信电话
     * @param string $customerSmsPhones
     * @return self
     */
    public function setCustomerSmsPhones(?string $customerSmsPhones): self
    {
        $this->customerSmsPhones = $customerSmsPhones;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customerEmail !== null) {
            $result['customer_email'] = $this->customerEmail;
        }
        if ($this->customerSmsPhones !== null) {
            $result['customer_sms_phones'] = $this->customerSmsPhones;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['customer_email'] ?? null) !== null) {
            $obj->customerEmail = (string) $v;
        }
        if (($v = $data['customer_sms_phones'] ?? null) !== null) {
            $obj->customerSmsPhones = (string) $v;
        }
        return $obj;
    }
}
