<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalance implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceAvailableBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceAvailableBalance $availableBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceUnavailableBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceUnavailableBalance $unavailableBalance = null;

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceAvailableBalance
     */
    public function getAvailableBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceAvailableBalance
    {
        return $this->availableBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceAvailableBalance $availableBalance
     * @return self
     */
    public function setAvailableBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceAvailableBalance $availableBalance): self
    {
        $this->availableBalance = $availableBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceUnavailableBalance
     */
    public function getUnavailableBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceUnavailableBalance
    {
        return $this->unavailableBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceUnavailableBalance $unavailableBalance
     * @return self
     */
    public function setUnavailableBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceUnavailableBalance $unavailableBalance): self
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
            $obj->availableBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceAvailableBalance::fromArray($v);
        }
        if (($v = $data['unavailable_balance'] ?? null) !== null && is_array($v)) {
            $obj->unavailableBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceUnavailableBalance::fromArray($v);
        }
        return $obj;
    }
}
