<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner implements \JsonSerializable
{
    /**
     * 加款钱包可转资金列表
     * @var \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[]
     */
    protected ?array $capitalDetailList = null;

    /**
     * 加款钱包非品牌资金最小转入金额（单位：分）
     * @var int
     */
    protected ?int $nonBrandMinTransferBalance = null;

    /**
     * 加款钱包id
     * @var int
     */
    protected ?int $payeeWalletId = null;

    /**
     * 加款钱包可转资金列表
     * @return \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[]
     */
    public function getCapitalDetailList(): ?array
    {
        return $this->capitalDetailList;
    }

    /**
     * 加款钱包可转资金列表
     * @param \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[] $capitalDetailList
     * @return self
     */
    public function setCapitalDetailList(?array $capitalDetailList): self
    {
        $this->capitalDetailList = $capitalDetailList;
        return $this;
    }

    /**
     * 加款钱包非品牌资金最小转入金额（单位：分）
     * @return int
     */
    public function getNonBrandMinTransferBalance(): ?int
    {
        return $this->nonBrandMinTransferBalance;
    }

    /**
     * 加款钱包非品牌资金最小转入金额（单位：分）
     * @param int $nonBrandMinTransferBalance
     * @return self
     */
    public function setNonBrandMinTransferBalance(?int $nonBrandMinTransferBalance): self
    {
        $this->nonBrandMinTransferBalance = $nonBrandMinTransferBalance;
        return $this;
    }

    /**
     * 加款钱包id
     * @return int
     */
    public function getPayeeWalletId(): ?int
    {
        return $this->payeeWalletId;
    }

    /**
     * 加款钱包id
     * @param int $payeeWalletId
     * @return self
     */
    public function setPayeeWalletId(?int $payeeWalletId): self
    {
        $this->payeeWalletId = $payeeWalletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->capitalDetailList !== null) {
            $result['capital_detail_list'] = $this->capitalDetailList;
        }
        if ($this->nonBrandMinTransferBalance !== null) {
            $result['non_brand_min_transfer_balance'] = $this->nonBrandMinTransferBalance;
        }
        if ($this->payeeWalletId !== null) {
            $result['payee_wallet_id'] = $this->payeeWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['non_brand_min_transfer_balance'] ?? null) !== null) {
            $obj->nonBrandMinTransferBalance = (int) $v;
        }
        if (($v = $data['payee_wallet_id'] ?? null) !== null) {
            $obj->payeeWalletId = (int) $v;
        }
        return $obj;
    }
}
