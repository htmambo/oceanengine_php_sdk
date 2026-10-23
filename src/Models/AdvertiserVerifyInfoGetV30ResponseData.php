<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserVerifyInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 账户对公记录信息列表
     * @var \Oceanengine\Models\AdvertiserVerifyInfoGetV30ResponseDataRecordsInner[]
     */
    protected ?array $records = null;

    /**
     * 账户对公记录信息列表
     * @return \Oceanengine\Models\AdvertiserVerifyInfoGetV30ResponseDataRecordsInner[]
     */
    public function getRecords(): ?array
    {
        return $this->records;
    }

    /**
     * 账户对公记录信息列表
     * @param \Oceanengine\Models\AdvertiserVerifyInfoGetV30ResponseDataRecordsInner[] $records
     * @return self
     */
    public function setRecords(?array $records): self
    {
        $this->records = $records;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->records !== null) {
            $result['records'] = $this->records;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['records'] ?? null) !== null && is_array($v)) {
            $obj->records = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserVerifyInfoGetV30ResponseDataRecordsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
