<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalance implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalance $availableBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalance $unavailableBalance = null;

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalance
     */
    public function getAvailableBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalance
    {
        return $this->availableBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalance $availableBalance
     * @return self
     */
    public function setAvailableBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalance $availableBalance): self
    {
        $this->availableBalance = $availableBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalance
     */
    public function getUnavailableBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalance
    {
        return $this->unavailableBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalance $unavailableBalance
     * @return self
     */
    public function setUnavailableBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalance $unavailableBalance): self
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
            $obj->availableBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceAvailableBalance::fromArray($v);
        }
        if (($v = $data['unavailable_balance'] ?? null) !== null && is_array($v)) {
            $obj->unavailableBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalanceUnavailableBalance::fromArray($v);
        }
        return $obj;
    }
}
