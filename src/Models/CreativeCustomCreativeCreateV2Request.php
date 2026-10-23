<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestAdData
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestAdData $adData = null;

    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInner[]
     */
    protected ?array $creativeList = null;

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestAdData
     */
    public function getAdData(): ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestAdData
    {
        return $this->adData;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestAdData $adData
     * @return self
     */
    public function setAdData(?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestAdData $adData): self
    {
        $this->adData = $adData;
        return $this;
    }

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
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInner[]
     */
    public function getCreativeList(): ?array
    {
        return $this->creativeList;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInner[] $creativeList
     * @return self
     */
    public function setCreativeList(?array $creativeList): self
    {
        $this->creativeList = $creativeList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adData !== null) {
            $result['ad_data'] = $this->adData;
        }
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->creativeList !== null) {
            $result['creative_list'] = $this->creativeList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_data'] ?? null) !== null && is_array($v)) {
            $obj->adData = \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestAdData::fromArray($v);
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['creative_list'] ?? null) !== null && is_array($v)) {
            $obj->creativeList = array_map(fn ($vv) => \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
