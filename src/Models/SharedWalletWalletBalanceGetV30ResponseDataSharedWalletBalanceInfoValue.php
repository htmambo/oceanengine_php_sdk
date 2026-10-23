<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValue implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueBasicBalanceInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueBasicBalanceInfo $basicBalanceInfo = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfo $generalBalanceInfo = null;

    /**
     * 共享钱包ID
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueBasicBalanceInfo
     */
    public function getBasicBalanceInfo(): ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueBasicBalanceInfo
    {
        return $this->basicBalanceInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueBasicBalanceInfo $basicBalanceInfo
     * @return self
     */
    public function setBasicBalanceInfo(?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueBasicBalanceInfo $basicBalanceInfo): self
    {
        $this->basicBalanceInfo = $basicBalanceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfo
     */
    public function getGeneralBalanceInfo(): ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfo
    {
        return $this->generalBalanceInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfo $generalBalanceInfo
     * @return self
     */
    public function setGeneralBalanceInfo(?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfo $generalBalanceInfo): self
    {
        $this->generalBalanceInfo = $generalBalanceInfo;
        return $this;
    }

    /**
     * 共享钱包ID
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * 共享钱包ID
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->basicBalanceInfo !== null) {
            $result['basic_balance_info'] = $this->basicBalanceInfo;
        }
        if ($this->generalBalanceInfo !== null) {
            $result['general_balance_info'] = $this->generalBalanceInfo;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['basic_balance_info'] ?? null) !== null && is_array($v)) {
            $obj->basicBalanceInfo = \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueBasicBalanceInfo::fromArray($v);
        }
        if (($v = $data['general_balance_info'] ?? null) !== null && is_array($v)) {
            $obj->generalBalanceInfo = \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfo::fromArray($v);
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        return $obj;
    }
}
