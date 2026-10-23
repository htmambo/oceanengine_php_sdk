<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletEbpRelationGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 组织id
     * @var int
     */
    protected ?int $ebpId = null;

    /**
     * 备款钱包集合
     * @var \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInnerManageWalletsInner[]
     */
    protected ?array $manageWallets = null;

    /**
     * 投放钱包集合
     * @var \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInnerSubWalletsInner[]
     */
    protected ?array $subWallets = null;

    /**
     * 组织id
     * @return int
     */
    public function getEbpId(): ?int
    {
        return $this->ebpId;
    }

    /**
     * 组织id
     * @param int $ebpId
     * @return self
     */
    public function setEbpId(?int $ebpId): self
    {
        $this->ebpId = $ebpId;
        return $this;
    }

    /**
     * 备款钱包集合
     * @return \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInnerManageWalletsInner[]
     */
    public function getManageWallets(): ?array
    {
        return $this->manageWallets;
    }

    /**
     * 备款钱包集合
     * @param \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInnerManageWalletsInner[] $manageWallets
     * @return self
     */
    public function setManageWallets(?array $manageWallets): self
    {
        $this->manageWallets = $manageWallets;
        return $this;
    }

    /**
     * 投放钱包集合
     * @return \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInnerSubWalletsInner[]
     */
    public function getSubWallets(): ?array
    {
        return $this->subWallets;
    }

    /**
     * 投放钱包集合
     * @param \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInnerSubWalletsInner[] $subWallets
     * @return self
     */
    public function setSubWallets(?array $subWallets): self
    {
        $this->subWallets = $subWallets;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ebpId !== null) {
            $result['ebp_id'] = $this->ebpId;
        }
        if ($this->manageWallets !== null) {
            $result['manage_wallets'] = $this->manageWallets;
        }
        if ($this->subWallets !== null) {
            $result['sub_wallets'] = $this->subWallets;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ebp_id'] ?? null) !== null) {
            $obj->ebpId = (int) $v;
        }
        if (($v = $data['manage_wallets'] ?? null) !== null && is_array($v)) {
            $obj->manageWallets = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInnerManageWalletsInner::fromArray($vv), $v);
        }
        if (($v = $data['sub_wallets'] ?? null) !== null && is_array($v)) {
            $obj->subWallets = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInnerSubWalletsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
