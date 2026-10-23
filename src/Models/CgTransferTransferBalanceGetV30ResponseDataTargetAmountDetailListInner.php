<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInner implements \JsonSerializable
{
    /**
     * 可转资金列表
     * @var \Oceanengine\Models\CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInnerCapitalDetailListInner[]
     */
    protected ?array $capitalDetailList = null;

    /**
     * 竞价消耗保证金金额(单位：分)
     * @var int
     */
    protected ?int $depositAmount = null;

    /**
     * 账户id
     * @var int
     */
    protected ?int $targetId = null;

    /**
     * 总可转金额(单位：分)
     * @var int
     */
    protected ?int $totalTransferAmount = null;

    /**
     * 可转资金列表
     * @return \Oceanengine\Models\CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInnerCapitalDetailListInner[]
     */
    public function getCapitalDetailList(): ?array
    {
        return $this->capitalDetailList;
    }

    /**
     * 可转资金列表
     * @param \Oceanengine\Models\CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInnerCapitalDetailListInner[] $capitalDetailList
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
     * 账户id
     * @return int
     */
    public function getTargetId(): ?int
    {
        return $this->targetId;
    }

    /**
     * 账户id
     * @param int $targetId
     * @return self
     */
    public function setTargetId(?int $targetId): self
    {
        $this->targetId = $targetId;
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
        if ($this->capitalDetailList !== null) {
            $result['capital_detail_list'] = $this->capitalDetailList;
        }
        if ($this->depositAmount !== null) {
            $result['deposit_amount'] = $this->depositAmount;
        }
        if ($this->targetId !== null) {
            $result['target_id'] = $this->targetId;
        }
        if ($this->totalTransferAmount !== null) {
            $result['total_transfer_amount'] = $this->totalTransferAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInnerCapitalDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['deposit_amount'] ?? null) !== null) {
            $obj->depositAmount = (int) $v;
        }
        if (($v = $data['target_id'] ?? null) !== null) {
            $obj->targetId = (int) $v;
        }
        if (($v = $data['total_transfer_amount'] ?? null) !== null) {
            $obj->totalTransferAmount = (int) $v;
        }
        return $obj;
    }
}
