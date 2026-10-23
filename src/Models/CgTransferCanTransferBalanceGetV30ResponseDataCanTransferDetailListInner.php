<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInner implements \JsonSerializable
{
    /**
     * 转出方可转资金列表
     * @var \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerCapitalDetailListInner[]
     */
    protected ?array $capitalDetailList = null;

    /**
     * 转入方可转余额信息列表
     * @var \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[]
     */
    protected ?array $payeeTransferAmountDetailList = null;

    /**
     * 转出方账户id
     * @var int
     */
    protected ?int $remitterTargetId = null;

    /**
     * 转出方可转资金列表
     * @return \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerCapitalDetailListInner[]
     */
    public function getCapitalDetailList(): ?array
    {
        return $this->capitalDetailList;
    }

    /**
     * 转出方可转资金列表
     * @param \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerCapitalDetailListInner[] $capitalDetailList
     * @return self
     */
    public function setCapitalDetailList(?array $capitalDetailList): self
    {
        $this->capitalDetailList = $capitalDetailList;
        return $this;
    }

    /**
     * 转入方可转余额信息列表
     * @return \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[]
     */
    public function getPayeeTransferAmountDetailList(): ?array
    {
        return $this->payeeTransferAmountDetailList;
    }

    /**
     * 转入方可转余额信息列表
     * @param \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner[] $payeeTransferAmountDetailList
     * @return self
     */
    public function setPayeeTransferAmountDetailList(?array $payeeTransferAmountDetailList): self
    {
        $this->payeeTransferAmountDetailList = $payeeTransferAmountDetailList;
        return $this;
    }

    /**
     * 转出方账户id
     * @return int
     */
    public function getRemitterTargetId(): ?int
    {
        return $this->remitterTargetId;
    }

    /**
     * 转出方账户id
     * @param int $remitterTargetId
     * @return self
     */
    public function setRemitterTargetId(?int $remitterTargetId): self
    {
        $this->remitterTargetId = $remitterTargetId;
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
        if ($this->remitterTargetId !== null) {
            $result['remitter_target_id'] = $this->remitterTargetId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerCapitalDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['payee_transfer_amount_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->payeeTransferAmountDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['remitter_target_id'] ?? null) !== null) {
            $obj->remitterTargetId = (int) $v;
        }
        return $obj;
    }
}
