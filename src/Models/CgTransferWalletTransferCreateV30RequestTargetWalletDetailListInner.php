<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInner implements \JsonSerializable
{
    /**
     * 申请转账的小钱包id
     * @var int
     */
    protected ?int $subWalletId = null;

    /**
     * 申请转账资金列表
     * @var \Oceanengine\Models\CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInnerTransferCapitalDetailListInner[]
     */
    protected ?array $transferCapitalDetailList = null;

    /**
     * 申请转账的小钱包id
     * @return int
     */
    public function getSubWalletId(): ?int
    {
        return $this->subWalletId;
    }

    /**
     * 申请转账的小钱包id
     * @param int $subWalletId
     * @return self
     */
    public function setSubWalletId(?int $subWalletId): self
    {
        $this->subWalletId = $subWalletId;
        return $this;
    }

    /**
     * 申请转账资金列表
     * @return \Oceanengine\Models\CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInnerTransferCapitalDetailListInner[]
     */
    public function getTransferCapitalDetailList(): ?array
    {
        return $this->transferCapitalDetailList;
    }

    /**
     * 申请转账资金列表
     * @param \Oceanengine\Models\CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInnerTransferCapitalDetailListInner[] $transferCapitalDetailList
     * @return self
     */
    public function setTransferCapitalDetailList(?array $transferCapitalDetailList): self
    {
        $this->transferCapitalDetailList = $transferCapitalDetailList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->subWalletId !== null) {
            $result['sub_wallet_id'] = $this->subWalletId;
        }
        if ($this->transferCapitalDetailList !== null) {
            $result['transfer_capital_detail_list'] = $this->transferCapitalDetailList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['sub_wallet_id'] ?? null) !== null) {
            $obj->subWalletId = (int) $v;
        }
        if (($v = $data['transfer_capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->transferCapitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInnerTransferCapitalDetailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
