<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletBalanceGetV30ResponseData implements \JsonSerializable
{
    /**
     * 共享钱包余额信息
     * @var array<string,\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValue>
     */
    protected ?array $sharedWalletBalanceInfo = null;

    /**
     * 共享钱包余额信息
     * @return array<string,\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValue>
     */
    public function getSharedWalletBalanceInfo(): ?array
    {
        return $this->sharedWalletBalanceInfo;
    }

    /**
     * 共享钱包余额信息
     * @param array<string,\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValue> $sharedWalletBalanceInfo
     * @return self
     */
    public function setSharedWalletBalanceInfo(?array $sharedWalletBalanceInfo): self
    {
        $this->sharedWalletBalanceInfo = $sharedWalletBalanceInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->sharedWalletBalanceInfo !== null) {
            $result['shared_wallet_balance_info'] = $this->sharedWalletBalanceInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['shared_wallet_balance_info'] ?? null) !== null && is_array($v)) {
            $obj->sharedWalletBalanceInfo = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValue::fromArray($vv), $v);
        }
        return $obj;
    }
}
