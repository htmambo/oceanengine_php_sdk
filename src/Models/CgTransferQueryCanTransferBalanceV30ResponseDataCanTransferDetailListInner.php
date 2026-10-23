<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInner implements \JsonSerializable
{
    /**
     * 减款方可转资金列表
     * @var \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerCapitalDetailListInner[]
     */
    protected ?array $capitalDetailList = null;

    /**
     * 加款方可转余额信息列表
     * @var \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[]
     */
    protected ?array $payeeTransferAmountDetailList = null;

    /**
     * 减款方账户id
     * @var int
     */
    protected ?int $remitterAccountId = null;

    /**
     * 减款方可转资金列表
     * @return \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerCapitalDetailListInner[]
     */
    public function getCapitalDetailList(): ?array
    {
        return $this->capitalDetailList;
    }

    /**
     * 减款方可转资金列表
     * @param \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerCapitalDetailListInner[] $capitalDetailList
     * @return self
     */
    public function setCapitalDetailList(?array $capitalDetailList): self
    {
        $this->capitalDetailList = $capitalDetailList;
        return $this;
    }

    /**
     * 加款方可转余额信息列表
     * @return \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[]
     */
    public function getPayeeTransferAmountDetailList(): ?array
    {
        return $this->payeeTransferAmountDetailList;
    }

    /**
     * 加款方可转余额信息列表
     * @param \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[] $payeeTransferAmountDetailList
     * @return self
     */
    public function setPayeeTransferAmountDetailList(?array $payeeTransferAmountDetailList): self
    {
        $this->payeeTransferAmountDetailList = $payeeTransferAmountDetailList;
        return $this;
    }

    /**
     * 减款方账户id
     * @return int
     */
    public function getRemitterAccountId(): ?int
    {
        return $this->remitterAccountId;
    }

    /**
     * 减款方账户id
     * @param int $remitterAccountId
     * @return self
     */
    public function setRemitterAccountId(?int $remitterAccountId): self
    {
        $this->remitterAccountId = $remitterAccountId;
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
        if ($this->payeeTransferAmountDetailList !== null) {
            $result['payee_transfer_amount_detail_list'] = $this->payeeTransferAmountDetailList;
        }
        if ($this->remitterAccountId !== null) {
            $result['remitter_account_id'] = $this->remitterAccountId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerCapitalDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['payee_transfer_amount_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->payeeTransferAmountDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['remitter_account_id'] ?? null) !== null) {
            $obj->remitterAccountId = (int) $v;
        }
        return $obj;
    }
}
