<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdRejectReasonV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRejectReasonV10ResponseDataListInnerAuditRecordsInner[]
     */
    protected ?array $auditRecords = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRejectReasonV10ResponseDataListInnerAuditRecordsInner[]
     */
    public function getAuditRecords(): ?array
    {
        return $this->auditRecords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRejectReasonV10ResponseDataListInnerAuditRecordsInner[] $auditRecords
     * @return self
     */
    public function setAuditRecords(?array $auditRecords): self
    {
        $this->auditRecords = $auditRecords;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->auditRecords !== null) {
            $result['audit_records'] = $this->auditRecords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['audit_records'] ?? null) !== null && is_array($v)) {
            $obj->auditRecords = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdRejectReasonV10ResponseDataListInnerAuditRecordsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
