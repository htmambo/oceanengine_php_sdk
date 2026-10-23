<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletSubWalletCreateV30RequestSharedRange implements \JsonSerializable
{
    /**
     * 业务线范围
     * @var \Oceanengine\Models\SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList[]
     */
    protected ?array $accountPlatformList = null;

    /**
     * 业务线范围
     * @return \Oceanengine\Models\SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList[]
     */
    public function getAccountPlatformList(): ?array
    {
        return $this->accountPlatformList;
    }

    /**
     * 业务线范围
     * @param \Oceanengine\Models\SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList[] $accountPlatformList
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
