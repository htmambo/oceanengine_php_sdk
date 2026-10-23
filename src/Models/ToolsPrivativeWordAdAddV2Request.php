<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordAdAddV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordAdAddV2RequestAdListInner[]
     */
    protected ?array $adList = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordAdAddV2RequestAdListInner[]
     */
    public function getAdList(): ?array
    {
        return $this->adList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordAdAddV2RequestAdListInner[] $adList
     * @return self
     */
    public function setAdList(?array $adList): self
    {
        $this->adList = $adList;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adList !== null) {
            $result['ad_list'] = $this->adList;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_list'] ?? null) !== null && is_array($v)) {
            $obj->adList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordAdAddV2RequestAdListInner::fromArray($vv), $v);
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        return $obj;
    }
}
