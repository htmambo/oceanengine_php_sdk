<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCanTransferBalanceGetV30ResponseData implements \JsonSerializable
{
    /**
     * 可转余额信息列表
     * @var \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInner[]
     */
    protected ?array $canTransferDetailList = null;

    /**
     * 可转余额信息列表
     * @return \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInner[]
     */
    public function getCanTransferDetailList(): ?array
    {
        return $this->canTransferDetailList;
    }

    /**
     * 可转余额信息列表
     * @param \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInner[] $canTransferDetailList
     * @return self
     */
    public function setCanTransferDetailList(?array $canTransferDetailList): self
    {
        $this->canTransferDetailList = $canTransferDetailList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canTransferDetailList !== null) {
            $result['can_transfer_detail_list'] = $this->canTransferDetailList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_transfer_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->canTransferDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
