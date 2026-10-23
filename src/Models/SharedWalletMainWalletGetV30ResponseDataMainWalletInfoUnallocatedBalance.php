<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalance implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalance $adOnlyUnallocatedBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalance $adSharedUnallocatedBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalance $ecpOnlyUnallocatedBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalance $localOnlyUnallocatedBalance = null;

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalance
     */
    public function getAdOnlyUnallocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalance
    {
        return $this->adOnlyUnallocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalance $adOnlyUnallocatedBalance
     * @return self
     */
    public function setAdOnlyUnallocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalance $adOnlyUnallocatedBalance): self
    {
        $this->adOnlyUnallocatedBalance = $adOnlyUnallocatedBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalance
     */
    public function getAdSharedUnallocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalance
    {
        return $this->adSharedUnallocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalance $adSharedUnallocatedBalance
     * @return self
     */
    public function setAdSharedUnallocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalance $adSharedUnallocatedBalance): self
    {
        $this->adSharedUnallocatedBalance = $adSharedUnallocatedBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalance
     */
    public function getEcpOnlyUnallocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalance
    {
        return $this->ecpOnlyUnallocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalance $ecpOnlyUnallocatedBalance
     * @return self
     */
    public function setEcpOnlyUnallocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalance $ecpOnlyUnallocatedBalance): self
    {
        $this->ecpOnlyUnallocatedBalance = $ecpOnlyUnallocatedBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalance
     */
    public function getLocalOnlyUnallocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalance
    {
        return $this->localOnlyUnallocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalance $localOnlyUnallocatedBalance
     * @return self
     */
    public function setLocalOnlyUnallocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalance $localOnlyUnallocatedBalance): self
    {
        $this->localOnlyUnallocatedBalance = $localOnlyUnallocatedBalance;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adOnlyUnallocatedBalance !== null) {
            $result['ad_only_unallocated_balance'] = $this->adOnlyUnallocatedBalance;
        }
        if ($this->adSharedUnallocatedBalance !== null) {
            $result['ad_shared_unallocated_balance'] = $this->adSharedUnallocatedBalance;
        }
        if ($this->ecpOnlyUnallocatedBalance !== null) {
            $result['ecp_only_unallocated_balance'] = $this->ecpOnlyUnallocatedBalance;
        }
        if ($this->localOnlyUnallocatedBalance !== null) {
            $result['local_only_unallocated_balance'] = $this->localOnlyUnallocatedBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_only_unallocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->adOnlyUnallocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdOnlyUnallocatedBalance::fromArray($v);
        }
        if (($v = $data['ad_shared_unallocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->adSharedUnallocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceAdSharedUnallocatedBalance::fromArray($v);
        }
        if (($v = $data['ecp_only_unallocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->ecpOnlyUnallocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceEcpOnlyUnallocatedBalance::fromArray($v);
        }
        if (($v = $data['local_only_unallocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->localOnlyUnallocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalance::fromArray($v);
        }
        return $obj;
    }
}
