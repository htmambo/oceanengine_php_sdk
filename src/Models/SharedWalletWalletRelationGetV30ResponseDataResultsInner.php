<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletRelationGetV30ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advId = null;

    /**
     * 共享钱包ID
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvId(): ?int
    {
        return $this->advId;
    }

    /**
     * 广告主ID
     * @param int $advId
     * @return self
     */
    public function setAdvId(?int $advId): self
    {
        $this->advId = $advId;
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
        if ($this->advId !== null) {
            $result['adv_id'] = $this->advId;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_id'] ?? null) !== null) {
            $obj->advId = (int) $v;
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        return $obj;
    }
}
