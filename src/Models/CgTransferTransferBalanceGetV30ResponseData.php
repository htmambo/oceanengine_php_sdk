<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferTransferBalanceGetV30ResponseData implements \JsonSerializable
{
    /**
     * 账户金额列表
     * @var \Oceanengine\Models\CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInner[]
     */
    protected ?array $targetAmountDetailList = null;

    /**
     * 账户金额列表
     * @return \Oceanengine\Models\CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInner[]
     */
    public function getTargetAmountDetailList(): ?array
    {
        return $this->targetAmountDetailList;
    }

    /**
     * 账户金额列表
     * @param \Oceanengine\Models\CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInner[] $targetAmountDetailList
     * @return self
     */
    public function setTargetAmountDetailList(?array $targetAmountDetailList): self
    {
        $this->targetAmountDetailList = $targetAmountDetailList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->targetAmountDetailList !== null) {
            $result['target_amount_detail_list'] = $this->targetAmountDetailList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['target_amount_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->targetAmountDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferTransferBalanceGetV30ResponseDataTargetAmountDetailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
