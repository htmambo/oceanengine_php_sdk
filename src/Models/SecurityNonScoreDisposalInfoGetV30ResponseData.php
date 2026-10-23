<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityNonScoreDisposalInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SecurityNonScoreDisposalInfoGetV30ResponseDataDisposalRecordInfoInner[]
     */
    protected ?array $disposalRecordInfo = null;

    /**
     * @return \Oceanengine\Models\SecurityNonScoreDisposalInfoGetV30ResponseDataDisposalRecordInfoInner[]
     */
    public function getDisposalRecordInfo(): ?array
    {
        return $this->disposalRecordInfo;
    }

    /**
     * @param \Oceanengine\Models\SecurityNonScoreDisposalInfoGetV30ResponseDataDisposalRecordInfoInner[] $disposalRecordInfo
     * @return self
     */
    public function setDisposalRecordInfo(?array $disposalRecordInfo): self
    {
        $this->disposalRecordInfo = $disposalRecordInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->disposalRecordInfo !== null) {
            $result['disposal_record_info'] = $this->disposalRecordInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['disposal_record_info'] ?? null) !== null && is_array($v)) {
            $obj->disposalRecordInfo = array_map(fn ($vv) => \Oceanengine\Models\SecurityNonScoreDisposalInfoGetV30ResponseDataDisposalRecordInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
