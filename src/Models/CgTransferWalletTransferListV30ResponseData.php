<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferListV30ResponseData implements \JsonSerializable
{
    /**
     * 转账记录列表
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInner[]
     */
    protected ?array $recordList = null;

    /**
     * 转账记录列表
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInner[]
     */
    public function getRecordList(): ?array
    {
        return $this->recordList;
    }

    /**
     * 转账记录列表
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInner[] $recordList
     * @return self
     */
    public function setRecordList(?array $recordList): self
    {
        $this->recordList = $recordList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->recordList !== null) {
            $result['record_list'] = $this->recordList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['record_list'] ?? null) !== null && is_array($v)) {
            $obj->recordList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
