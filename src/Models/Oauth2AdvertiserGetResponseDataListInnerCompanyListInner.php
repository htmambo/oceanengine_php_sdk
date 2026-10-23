<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Oauth2AdvertiserGetResponseDataListInnerCompanyListInner implements \JsonSerializable
{
    /**
     * 客户公司ID
     * @var int
     */
    protected ?int $customerCompanyId = null;

    /**
     * 客户公司名称
     * @var string
     */
    protected ?string $customerCompanyName = null;

    /**
     * 客户公司ID
     * @return int
     */
    public function getCustomerCompanyId(): ?int
    {
        return $this->customerCompanyId;
    }

    /**
     * 客户公司ID
     * @param int $customerCompanyId
     * @return self
     */
    public function setCustomerCompanyId(?int $customerCompanyId): self
    {
        $this->customerCompanyId = $customerCompanyId;
        return $this;
    }

    /**
     * 客户公司名称
     * @return string
     */
    public function getCustomerCompanyName(): ?string
    {
        return $this->customerCompanyName;
    }

    /**
     * 客户公司名称
     * @param string $customerCompanyName
     * @return self
     */
    public function setCustomerCompanyName(?string $customerCompanyName): self
    {
        $this->customerCompanyName = $customerCompanyName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customerCompanyId !== null) {
            $result['customer_company_id'] = $this->customerCompanyId;
        }
        if ($this->customerCompanyName !== null) {
            $result['customer_company_name'] = $this->customerCompanyName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['customer_company_id'] ?? null) !== null) {
            $obj->customerCompanyId = (int) $v;
        }
        if (($v = $data['customer_company_name'] ?? null) !== null) {
            $obj->customerCompanyName = (string) $v;
        }
        return $obj;
    }
}
