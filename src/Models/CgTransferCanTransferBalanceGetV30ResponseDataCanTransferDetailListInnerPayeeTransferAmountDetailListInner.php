<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner implements \JsonSerializable
{
    /**
     * 转入方可转资金列表
     * @var \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[]
     */
    protected ?array $capitalDetailList = null;

    /**
     * 转入方账户id
     * @var int
     */
    protected ?int $payeeTargetId = null;

    /**
     * 转入方可转资金列表
     * @return \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[]
     */
    public function getCapitalDetailList(): ?array
    {
        return $this->capitalDetailList;
    }

    /**
     * 转入方可转资金列表
     * @param \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner[] $capitalDetailList
     * @return self
     */
    public function setCapitalDetailList(?array $capitalDetailList): self
    {
        $this->capitalDetailList = $capitalDetailList;
        return $this;
    }

    /**
     * 转入方账户id
     * @return int
     */
    public function getPayeeTargetId(): ?int
    {
        return $this->payeeTargetId;
    }

    /**
     * 转入方账户id
     * @param int $payeeTargetId
     * @return self
     */
    public function setPayeeTargetId(?int $payeeTargetId): self
    {
        $this->payeeTargetId = $payeeTargetId;
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
        if ($this->payeeTargetId !== null) {
            $result['payee_target_id'] = $this->payeeTargetId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['payee_target_id'] ?? null) !== null) {
            $obj->payeeTargetId = (int) $v;
        }
        return $obj;
    }
}
