<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInner implements \JsonSerializable
{
    /**
     * 减款钱包非品牌资金最大可转出金额（单位：分）
     * @var int
     */
    protected ?int $nonBrandMaxTransferBalance = null;

    /**
     * 加款钱包可转余额信息列表
     * @var \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[]
     */
    protected ?array $payeeTransferAmountDetailList = null;

    /**
     * 减款钱包可转资金列表
     * @var \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInner[]
     */
    protected ?array $remitterCapitalDetailList = null;

    /**
     * 减款钱包id
     * @var int
     */
    protected ?int $remitterWalletId = null;

    /**
     * 减款钱包非品牌资金最大可转出金额（单位：分）
     * @return int
     */
    public function getNonBrandMaxTransferBalance(): ?int
    {
        return $this->nonBrandMaxTransferBalance;
    }

    /**
     * 减款钱包非品牌资金最大可转出金额（单位：分）
     * @param int $nonBrandMaxTransferBalance
     * @return self
     */
    public function setNonBrandMaxTransferBalance(?int $nonBrandMaxTransferBalance): self
    {
        $this->nonBrandMaxTransferBalance = $nonBrandMaxTransferBalance;
        return $this;
    }

    /**
     * 加款钱包可转余额信息列表
     * @return \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[]
     */
    public function getPayeeTransferAmountDetailList(): ?array
    {
        return $this->payeeTransferAmountDetailList;
    }

    /**
     * 加款钱包可转余额信息列表
     * @param \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[] $payeeTransferAmountDetailList
     * @return self
     */
    public function setPayeeTransferAmountDetailList(?array $payeeTransferAmountDetailList): self
    {
        $this->payeeTransferAmountDetailList = $payeeTransferAmountDetailList;
        return $this;
    }

    /**
     * 减款钱包可转资金列表
     * @return \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInner[]
     */
    public function getRemitterCapitalDetailList(): ?array
    {
        return $this->remitterCapitalDetailList;
    }

    /**
     * 减款钱包可转资金列表
     * @param \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInner[] $remitterCapitalDetailList
     * @return self
     */
    public function setRemitterCapitalDetailList(?array $remitterCapitalDetailList): self
    {
        $this->remitterCapitalDetailList = $remitterCapitalDetailList;
        return $this;
    }

    /**
     * 减款钱包id
     * @return int
     */
    public function getRemitterWalletId(): ?int
    {
        return $this->remitterWalletId;
    }

    /**
     * 减款钱包id
     * @param int $remitterWalletId
     * @return self
     */
    public function setRemitterWalletId(?int $remitterWalletId): self
    {
        $this->remitterWalletId = $remitterWalletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->nonBrandMaxTransferBalance !== null) {
            $result['non_brand_max_transfer_balance'] = $this->nonBrandMaxTransferBalance;
        }
        if ($this->payeeTransferAmountDetailList !== null) {
            $result['payee_transfer_amount_detail_list'] = $this->payeeTransferAmountDetailList;
        }
        if ($this->remitterCapitalDetailList !== null) {
            $result['remitter_capital_detail_list'] = $this->remitterCapitalDetailList;
        }
        if ($this->remitterWalletId !== null) {
            $result['remitter_wallet_id'] = $this->remitterWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['non_brand_max_transfer_balance'] ?? null) !== null) {
            $obj->nonBrandMaxTransferBalance = (int) $v;
        }
        if (($v = $data['payee_transfer_amount_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->payeeTransferAmountDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['remitter_capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->remitterCapitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['remitter_wallet_id'] ?? null) !== null) {
            $obj->remitterWalletId = (int) $v;
        }
        return $obj;
    }
}
