<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerDeepBidTypeGetV30ResponseDataDeepBidTypeDetailInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerDeepBidTypeGetV30DataDeepBidTypeDetailDeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * @var string
     */
    protected ?string $deepBidTypeName = null;

    /**
     * @return \Oceanengine\Models\EventManagerDeepBidTypeGetV30DataDeepBidTypeDetailDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerDeepBidTypeGetV30DataDeepBidTypeDetailDeepBidType $deepBidType
     * @return self
     */
    public function setDeepBidType(?string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeepBidTypeName(): ?string
    {
        return $this->deepBidTypeName;
    }

    /**
     * @param string $deepBidTypeName
     * @return self
     */
    public function setDeepBidTypeName(?string $deepBidTypeName): self
    {
        $this->deepBidTypeName = $deepBidTypeName;
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
        if ($this->deepBidTypeName !== null) {
            $result['deep_bid_type_name'] = $this->deepBidTypeName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deep_bid_type'] ?? null) !== null) {
            $obj->deepBidType = (string) $v;
        }
        if (($v = $data['deep_bid_type_name'] ?? null) !== null) {
            $obj->deepBidTypeName = (string) $v;
        }
        return $obj;
    }
}
