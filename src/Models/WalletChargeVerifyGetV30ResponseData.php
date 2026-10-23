<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class WalletChargeVerifyGetV30ResponseData implements \JsonSerializable
{
    /**
     * 允许的投放方式
     * @var \Oceanengine\Models\WalletChargeVerifyGetV30DataAllowDeliveryTypeList[]
     */
    protected ?array $allowDeliveryTypeList = null;

    /**
     * 公司ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 公司名称
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * 客户ID
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * 客户名称
     * @var string
     */
    protected ?string $customerName = null;

    /**
     * 字节主体名称
     * @var string
     */
    protected ?string $subjectName = null;

    /**
     * 钱包ID
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * 钱包名称
     * @var string
     */
    protected ?string $walletName = null;

    /**
     * 允许的投放方式
     * @return \Oceanengine\Models\WalletChargeVerifyGetV30DataAllowDeliveryTypeList[]
     */
    public function getAllowDeliveryTypeList(): ?array
    {
        return $this->allowDeliveryTypeList;
    }

    /**
     * 允许的投放方式
     * @param \Oceanengine\Models\WalletChargeVerifyGetV30DataAllowDeliveryTypeList[] $allowDeliveryTypeList
     * @return self
     */
    public function setAllowDeliveryTypeList(?array $allowDeliveryTypeList): self
    {
        $this->allowDeliveryTypeList = $allowDeliveryTypeList;
        return $this;
    }

    /**
     * 公司ID
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 公司ID
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 公司名称
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 公司名称
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * 客户ID
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 客户ID
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
     * 钱包ID
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * 钱包ID
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * 钱包名称
     * @return string
     */
    public function getWalletName(): ?string
    {
        return $this->walletName;
    }

    /**
     * 钱包名称
     * @param string $walletName
     * @return self
     */
    public function setWalletName(?string $walletName): self
    {
        $this->walletName = $walletName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allowDeliveryTypeList !== null) {
            $result['allow_delivery_type_list'] = $this->allowDeliveryTypeList;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->customerName !== null) {
            $result['customer_name'] = $this->customerName;
        }
        if ($this->subjectName !== null) {
            $result['subject_name'] = $this->subjectName;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        if ($this->walletName !== null) {
            $result['wallet_name'] = $this->walletName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_delivery_type_list'] ?? null) !== null && is_array($v)) {
            $obj->allowDeliveryTypeList = $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['customer_name'] ?? null) !== null) {
            $obj->customerName = (string) $v;
        }
        if (($v = $data['subject_name'] ?? null) !== null) {
            $obj->subjectName = (string) $v;
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        if (($v = $data['wallet_name'] ?? null) !== null) {
            $obj->walletName = (string) $v;
        }
        return $obj;
    }
}
