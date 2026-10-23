<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskShareableListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StardeliveryTaskShareableListV30ResponseDataAdvertiserListInner[]
     */
    protected ?array $advertiserList = null;

    /**
     * @return \Oceanengine\Models\StardeliveryTaskShareableListV30ResponseDataAdvertiserListInner[]
     */
    public function getAdvertiserList(): ?array
    {
        return $this->advertiserList;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskShareableListV30ResponseDataAdvertiserListInner[] $advertiserList
     * @return self
     */
    public function setAdvertiserList(?array $advertiserList): self
    {
        $this->advertiserList = $advertiserList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserList !== null) {
            $result['advertiser_list'] = $this->advertiserList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_list'] ?? null) !== null && is_array($v)) {
            $obj->advertiserList = array_map(fn ($vv) => \Oceanengine\Models\StardeliveryTaskShareableListV30ResponseDataAdvertiserListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
