<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalance implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalance $availableBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalance $unavailableBalance = null;

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalance
     */
    public function getAvailableBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalance
    {
        return $this->availableBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalance $availableBalance
     * @return self
     */
    public function setAvailableBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalance $availableBalance): self
    {
        $this->availableBalance = $availableBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalance
     */
    public function getUnavailableBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalance
    {
        return $this->unavailableBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalance $unavailableBalance
     * @return self
     */
    public function setUnavailableBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalance $unavailableBalance): self
    {
        $this->unavailableBalance = $unavailableBalance;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->availableBalance !== null) {
            $result['available_balance'] = $this->availableBalance;
        }
        if ($this->unavailableBalance !== null) {
            $result['unavailable_balance'] = $this->unavailableBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['available_balance'] ?? null) !== null && is_array($v)) {
            $obj->availableBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceAvailableBalance::fromArray($v);
        }
        if (($v = $data['unavailable_balance'] ?? null) !== null && is_array($v)) {
            $obj->unavailableBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalanceUnavailableBalance::fromArray($v);
        }
        return $obj;
    }
}
