<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalance implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalance $adOnlyAllocatedBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdSharedAllocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdSharedAllocatedBalance $adSharedAllocatedBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalance $ecpOnlyAllocatedBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalance $localOnlyAllocatedBalance = null;

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalance
     */
    public function getAdOnlyAllocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalance
    {
        return $this->adOnlyAllocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalance $adOnlyAllocatedBalance
     * @return self
     */
    public function setAdOnlyAllocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalance $adOnlyAllocatedBalance): self
    {
        $this->adOnlyAllocatedBalance = $adOnlyAllocatedBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdSharedAllocatedBalance
     */
    public function getAdSharedAllocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdSharedAllocatedBalance
    {
        return $this->adSharedAllocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdSharedAllocatedBalance $adSharedAllocatedBalance
     * @return self
     */
    public function setAdSharedAllocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdSharedAllocatedBalance $adSharedAllocatedBalance): self
    {
        $this->adSharedAllocatedBalance = $adSharedAllocatedBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalance
     */
    public function getEcpOnlyAllocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalance
    {
        return $this->ecpOnlyAllocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalance $ecpOnlyAllocatedBalance
     * @return self
     */
    public function setEcpOnlyAllocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalance $ecpOnlyAllocatedBalance): self
    {
        $this->ecpOnlyAllocatedBalance = $ecpOnlyAllocatedBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalance
     */
    public function getLocalOnlyAllocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalance
    {
        return $this->localOnlyAllocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalance $localOnlyAllocatedBalance
     * @return self
     */
    public function setLocalOnlyAllocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalance $localOnlyAllocatedBalance): self
    {
        $this->localOnlyAllocatedBalance = $localOnlyAllocatedBalance;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adOnlyAllocatedBalance !== null) {
            $result['ad_only_allocated_balance'] = $this->adOnlyAllocatedBalance;
        }
        if ($this->adSharedAllocatedBalance !== null) {
            $result['ad_shared_allocated_balance'] = $this->adSharedAllocatedBalance;
        }
        if ($this->ecpOnlyAllocatedBalance !== null) {
            $result['ecp_only_allocated_balance'] = $this->ecpOnlyAllocatedBalance;
        }
        if ($this->localOnlyAllocatedBalance !== null) {
            $result['local_only_allocated_balance'] = $this->localOnlyAllocatedBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_only_allocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->adOnlyAllocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdOnlyAllocatedBalance::fromArray($v);
        }
        if (($v = $data['ad_shared_allocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->adSharedAllocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdSharedAllocatedBalance::fromArray($v);
        }
        if (($v = $data['ecp_only_allocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->ecpOnlyAllocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceEcpOnlyAllocatedBalance::fromArray($v);
        }
        if (($v = $data['local_only_allocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->localOnlyAllocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceLocalOnlyAllocatedBalance::fromArray($v);
        }
        return $obj;
    }
}
