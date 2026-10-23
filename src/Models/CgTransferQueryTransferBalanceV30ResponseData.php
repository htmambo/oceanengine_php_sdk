<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryTransferBalanceV30ResponseData implements \JsonSerializable
{
    /**
     * 账户金额列表
     * @var \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInner[]
     */
    protected ?array $accontAmountDetailList = null;

    /**
     * 账户金额列表
     * @return \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInner[]
     */
    public function getAccontAmountDetailList(): ?array
    {
        return $this->accontAmountDetailList;
    }

    /**
     * 账户金额列表
     * @param \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInner[] $accontAmountDetailList
     * @return self
     */
    public function setAccontAmountDetailList(?array $accontAmountDetailList): self
    {
        $this->accontAmountDetailList = $accontAmountDetailList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accontAmountDetailList !== null) {
            $result['accont_amount_detail_list'] = $this->accontAmountDetailList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accont_amount_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->accontAmountDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
