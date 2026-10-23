<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountCreateV30RequestAccountsInner implements \JsonSerializable
{
    /**
     * 通过指定账户方式绑定，上限1000个。
     * @var int[]
     */
    protected ?array $accountIds = null;

    /**
     * @var \Oceanengine\Models\EbpGroupBindAccountCreateV30AccountsAccountType
     */
    protected ?string $accountType = null;

    /**
     * 绑定主体ID下该业务线所有账户
     * @var bool
     */
    protected ?bool $allCompanyAccount = null;

    /**
     * 绑定客户ID下该业务线所有账户
     * @var bool
     */
    protected ?bool $allCustomerAccount = null;

    /**
     * 是否只绑活跃账户，仅针对ad账户生效，只能传true或不传改值
     * @var bool
     */
    protected ?bool $onlyActive = null;

    /**
     * 通过指定账户方式绑定，上限1000个。
     * @return int[]
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * 通过指定账户方式绑定，上限1000个。
     * @param int[] $accountIds
     * @return self
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpGroupBindAccountCreateV30AccountsAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\EbpGroupBindAccountCreateV30AccountsAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 绑定主体ID下该业务线所有账户
     * @return bool
     */
    public function getAllCompanyAccount(): ?bool
    {
        return $this->allCompanyAccount;
    }

    /**
     * 绑定主体ID下该业务线所有账户
     * @param bool $allCompanyAccount
     * @return self
     */
    public function setAllCompanyAccount(?bool $allCompanyAccount): self
    {
        $this->allCompanyAccount = $allCompanyAccount;
        return $this;
    }

    /**
     * 绑定客户ID下该业务线所有账户
     * @return bool
     */
    public function getAllCustomerAccount(): ?bool
    {
        return $this->allCustomerAccount;
    }

    /**
     * 绑定客户ID下该业务线所有账户
     * @param bool $allCustomerAccount
     * @return self
     */
    public function setAllCustomerAccount(?bool $allCustomerAccount): self
    {
        $this->allCustomerAccount = $allCustomerAccount;
        return $this;
    }

    /**
     * 是否只绑活跃账户，仅针对ad账户生效，只能传true或不传改值
     * @return bool
     */
    public function getOnlyActive(): ?bool
    {
        return $this->onlyActive;
    }

    /**
     * 是否只绑活跃账户，仅针对ad账户生效，只能传true或不传改值
     * @param bool $onlyActive
     * @return self
     */
    public function setOnlyActive(?bool $onlyActive): self
    {
        $this->onlyActive = $onlyActive;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountIds !== null) {
            $result['account_ids'] = $this->accountIds;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->allCompanyAccount !== null) {
            $result['all_company_account'] = $this->allCompanyAccount;
        }
        if ($this->allCustomerAccount !== null) {
            $result['all_customer_account'] = $this->allCustomerAccount;
        }
        if ($this->onlyActive !== null) {
            $result['only_active'] = $this->onlyActive;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_ids'] ?? null) !== null && is_array($v)) {
            $obj->accountIds = $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['all_company_account'] ?? null) !== null) {
            $obj->allCompanyAccount = (bool) $v;
        }
        if (($v = $data['all_customer_account'] ?? null) !== null) {
            $obj->allCustomerAccount = (bool) $v;
        }
        if (($v = $data['only_active'] ?? null) !== null) {
            $obj->onlyActive = (bool) $v;
        }
        return $obj;
    }
}
