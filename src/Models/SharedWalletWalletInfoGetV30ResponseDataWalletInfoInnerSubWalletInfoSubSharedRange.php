<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfoSubSharedRange implements \JsonSerializable
{
    /**
     * 账户业务线范围
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList[]
     */
    protected ?array $accountPlatformList = null;

    /**
     * 账户业务线范围
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList[]
     */
    public function getAccountPlatformList(): ?array
    {
        return $this->accountPlatformList;
    }

    /**
     * 账户业务线范围
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList[] $accountPlatformList
     * @return self
     */
    public function setAccountPlatformList(?array $accountPlatformList): self
    {
        $this->accountPlatformList = $accountPlatformList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountPlatformList !== null) {
            $result['account_platform_list'] = $this->accountPlatformList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_platform_list'] ?? null) !== null && is_array($v)) {
            $obj->accountPlatformList = $v;
        }
        return $obj;
    }
}
