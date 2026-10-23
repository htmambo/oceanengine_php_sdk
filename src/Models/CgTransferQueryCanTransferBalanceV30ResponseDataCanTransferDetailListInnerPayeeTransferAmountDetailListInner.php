<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner implements \JsonSerializable
{
    /**
     * 加款方可转资金列表
     * @var \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[]
     */
    protected ?array $capitalDetailList = null;

    /**
     * 加款方账户id
     * @var int
     */
    protected ?int $payeeAccountId = null;

    /**
     * 加款方可转资金列表
     * @return \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[]
     */
    public function getCapitalDetailList(): ?array
    {
        return $this->capitalDetailList;
    }

    /**
     * 加款方可转资金列表
     * @param \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[] $capitalDetailList
     * @return self
     */
    public function setCapitalDetailList(?array $capitalDetailList): self
    {
        $this->capitalDetailList = $capitalDetailList;
        return $this;
    }

    /**
     * 加款方账户id
     * @return int
     */
    public function getPayeeAccountId(): ?int
    {
        return $this->payeeAccountId;
    }

    /**
     * 加款方账户id
     * @param int $payeeAccountId
     * @return self
     */
    public function setPayeeAccountId(?int $payeeAccountId): self
    {
        $this->payeeAccountId = $payeeAccountId;
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
        if ($this->payeeAccountId !== null) {
            $result['payee_account_id'] = $this->payeeAccountId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['payee_account_id'] ?? null) !== null) {
            $obj->payeeAccountId = (int) $v;
        }
        return $obj;
    }
}
