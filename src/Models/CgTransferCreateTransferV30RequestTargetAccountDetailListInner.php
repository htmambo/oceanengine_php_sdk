<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCreateTransferV30RequestTargetAccountDetailListInner implements \JsonSerializable
{
    /**
     * 目标账户id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 锚定账户与目标账户转账资金列表
     * @var \Oceanengine\Models\CgTransferCreateTransferV30RequestTargetAccountDetailListInnerTransferCapitalDetailListInner[]
     */
    protected ?array $transferCapitalDetailList = null;

    /**
     * 目标账户id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 目标账户id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 锚定账户与目标账户转账资金列表
     * @return \Oceanengine\Models\CgTransferCreateTransferV30RequestTargetAccountDetailListInnerTransferCapitalDetailListInner[]
     */
    public function getTransferCapitalDetailList(): ?array
    {
        return $this->transferCapitalDetailList;
    }

    /**
     * 锚定账户与目标账户转账资金列表
     * @param \Oceanengine\Models\CgTransferCreateTransferV30RequestTargetAccountDetailListInnerTransferCapitalDetailListInner[] $transferCapitalDetailList
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
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->transferCapitalDetailList !== null) {
            $result['transfer_capital_detail_list'] = $this->transferCapitalDetailList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['transfer_capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->transferCapitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferCreateTransferV30RequestTargetAccountDetailListInnerTransferCapitalDetailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
