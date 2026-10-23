<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletBalanceGetV30WalletBalanceFilters implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType
     */
    protected ?string $accountPlatformType = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType
     */
    protected ?string $capitalType = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType
     */
    public function getAccountPlatformType(): ?string
    {
        return $this->accountPlatformType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType $accountPlatformType
     * @return self
     */
    public function setAccountPlatformType(?string $accountPlatformType): self
    {
        $this->accountPlatformType = $accountPlatformType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType
     */
    public function getCapitalType(): ?string
    {
        return $this->capitalType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType $capitalType
     * @return self
     */
    public function setCapitalType(?string $capitalType): self
    {
        $this->capitalType = $capitalType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountPlatformType !== null) {
            $result['account_platform_type'] = $this->accountPlatformType;
        }
        if ($this->capitalType !== null) {
            $result['capital_type'] = $this->capitalType;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_platform_type'] ?? null) !== null) {
            $obj->accountPlatformType = (string) $v;
        }
        if (($v = $data['capital_type'] ?? null) !== null) {
            $obj->capitalType = (string) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        return $obj;
    }
}
