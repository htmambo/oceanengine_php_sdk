<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInner implements \JsonSerializable
{
    /**
     * 账户id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 可转资金列表
     * @var \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInner[]
     */
    protected ?array $capitalDetailList = null;

    /**
     * 竞价消耗保证金金额(单位：分)
     * @var int
     */
    protected ?int $depositAmount = null;

    /**
     * 总可转金额(单位：分)
     * @var int
     */
    protected ?int $totalTransferAmount = null;

    /**
     * 账户id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 可转资金列表
     * @return \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInner[]
     */
    public function getCapitalDetailList(): ?array
    {
        return $this->capitalDetailList;
    }

    /**
     * 可转资金列表
     * @param \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInner[] $capitalDetailList
     * @return self
     */
    public function setCapitalDetailList(?array $capitalDetailList): self
    {
        $this->capitalDetailList = $capitalDetailList;
        return $this;
    }

    /**
     * 竞价消耗保证金金额(单位：分)
     * @return int
     */
    public function getDepositAmount(): ?int
    {
        return $this->depositAmount;
    }

    /**
     * 竞价消耗保证金金额(单位：分)
     * @param int $depositAmount
     * @return self
     */
    public function setDepositAmount(?int $depositAmount): self
    {
        $this->depositAmount = $depositAmount;
        return $this;
    }

    /**
     * 总可转金额(单位：分)
     * @return int
     */
    public function getTotalTransferAmount(): ?int
    {
        return $this->totalTransferAmount;
    }

    /**
     * 总可转金额(单位：分)
     * @param int $totalTransferAmount
     * @return self
     */
    public function setTotalTransferAmount(?int $totalTransferAmount): self
    {
        $this->totalTransferAmount = $totalTransferAmount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->capitalDetailList !== null) {
            $result['capital_detail_list'] = $this->capitalDetailList;
        }
        if ($this->depositAmount !== null) {
            $result['deposit_amount'] = $this->depositAmount;
        }
        if ($this->totalTransferAmount !== null) {
            $result['total_transfer_amount'] = $this->totalTransferAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['deposit_amount'] ?? null) !== null) {
            $obj->depositAmount = (int) $v;
        }
        if (($v = $data['total_transfer_amount'] ?? null) !== null) {
            $obj->totalTransferAmount = (int) $v;
        }
        return $obj;
    }
}
