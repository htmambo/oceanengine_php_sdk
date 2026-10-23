<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletEbpRelationGetV30ResponseDataListInnerManageWalletsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * @var string
     */
    protected ?string $walletName = null;

    /**
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWalletName(): ?string
    {
        return $this->walletName;
    }

    /**
     * @param string $walletName
     * @return self
     */
    public function setWalletName(?string $walletName): self
    {
        $this->walletName = $walletName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        if ($this->walletName !== null) {
            $result['wallet_name'] = $this->walletName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        if (($v = $data['wallet_name'] ?? null) !== null) {
            $obj->walletName = (string) $v;
        }
        return $obj;
    }
}
