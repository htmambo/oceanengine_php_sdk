<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 钱包信息列表
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInner[]
     */
    protected ?array $walletInfo = null;

    /**
     * 钱包信息列表
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInner[]
     */
    public function getWalletInfo(): ?array
    {
        return $this->walletInfo;
    }

    /**
     * 钱包信息列表
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInner[] $walletInfo
     * @return self
     */
    public function setWalletInfo(?array $walletInfo): self
    {
        $this->walletInfo = $walletInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->walletInfo !== null) {
            $result['wallet_info'] = $this->walletInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['wallet_info'] ?? null) !== null && is_array($v)) {
            $obj->walletInfo = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
