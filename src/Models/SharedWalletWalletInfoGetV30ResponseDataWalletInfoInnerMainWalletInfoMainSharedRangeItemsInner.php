<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfoMainSharedRangeItemsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform
     */
    protected ?string $accountPlatform = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory
     */
    protected ?string $customerCategory = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform
     */
    public function getAccountPlatform(): ?string
    {
        return $this->accountPlatform;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform $accountPlatform
     * @return self
     */
    public function setAccountPlatform(?string $accountPlatform): self
    {
        $this->accountPlatform = $accountPlatform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory
     */
    public function getCustomerCategory(): ?string
    {
        return $this->customerCategory;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory $customerCategory
     * @return self
     */
    public function setCustomerCategory(?string $customerCategory): self
    {
        $this->customerCategory = $customerCategory;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountPlatform !== null) {
            $result['account_platform'] = $this->accountPlatform;
        }
        if ($this->customerCategory !== null) {
            $result['customer_category'] = $this->customerCategory;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_platform'] ?? null) !== null) {
            $obj->accountPlatform = (string) $v;
        }
        if (($v = $data['customer_category'] ?? null) !== null) {
            $obj->customerCategory = (string) $v;
        }
        return $obj;
    }
}
