<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerDbtGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerDbtGetV30DataDeepBidType[]
     */
    protected ?array $deepBidType = null;

    /**
     * @var \Oceanengine\Models\EventManagerDbtGetV30ResponseDataDeepBidTypeDetailInner[]
     */
    protected ?array $deepBidTypeDetail = null;

    /**
     * @return \Oceanengine\Models\EventManagerDbtGetV30DataDeepBidType[]
     */
    public function getDeepBidType(): ?array
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerDbtGetV30DataDeepBidType[] $deepBidType
     * @return self
     */
    public function setDeepBidType(?array $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerDbtGetV30ResponseDataDeepBidTypeDetailInner[]
     */
    public function getDeepBidTypeDetail(): ?array
    {
        return $this->deepBidTypeDetail;
    }

    /**
     * @param \Oceanengine\Models\EventManagerDbtGetV30ResponseDataDeepBidTypeDetailInner[] $deepBidTypeDetail
     * @return self
     */
    public function setDeepBidTypeDetail(?array $deepBidTypeDetail): self
    {
        $this->deepBidTypeDetail = $deepBidTypeDetail;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deepBidType !== null) {
            $result['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->deepBidTypeDetail !== null) {
            $result['deep_bid_type_detail'] = $this->deepBidTypeDetail;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deep_bid_type'] ?? null) !== null && is_array($v)) {
            $obj->deepBidType = $v;
        }
        if (($v = $data['deep_bid_type_detail'] ?? null) !== null && is_array($v)) {
            $obj->deepBidTypeDetail = array_map(fn ($vv) => \Oceanengine\Models\EventManagerDbtGetV30ResponseDataDeepBidTypeDetailInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
