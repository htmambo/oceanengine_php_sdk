<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferTransferCreateV30RequestTargetDetailListInner implements \JsonSerializable
{
    /**
     * 目标账户id
     * @var int
     */
    protected ?int $targetId = null;

    /**
     * 锚定账户与目标账户转账资金列表
     * @var \Oceanengine\Models\CgTransferTransferCreateV30RequestTargetDetailListInnerTransferCapitalDetailListInner[]
     */
    protected ?array $transferCapitalDetailList = null;

    /**
     * 目标账户id
     * @return int
     */
    public function getTargetId(): ?int
    {
        return $this->targetId;
    }

    /**
     * 目标账户id
     * @param int $targetId
     * @return self
     */
    public function setTargetId(?int $targetId): self
    {
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * 锚定账户与目标账户转账资金列表
     * @return \Oceanengine\Models\CgTransferTransferCreateV30RequestTargetDetailListInnerTransferCapitalDetailListInner[]
     */
    public function getTransferCapitalDetailList(): ?array
    {
        return $this->transferCapitalDetailList;
    }

    /**
     * 锚定账户与目标账户转账资金列表
     * @param \Oceanengine\Models\CgTransferTransferCreateV30RequestTargetDetailListInnerTransferCapitalDetailListInner[] $transferCapitalDetailList
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
        if ($this->targetId !== null) {
            $result['target_id'] = $this->targetId;
        }
        if ($this->transferCapitalDetailList !== null) {
            $result['transfer_capital_detail_list'] = $this->transferCapitalDetailList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['target_id'] ?? null) !== null) {
            $obj->targetId = (int) $v;
        }
        if (($v = $data['transfer_capital_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->transferCapitalDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferTransferCreateV30RequestTargetDetailListInnerTransferCapitalDetailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
