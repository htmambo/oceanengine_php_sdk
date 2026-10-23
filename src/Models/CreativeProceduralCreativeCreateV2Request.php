<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeCreateV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestAdData
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestAdData $adData = null;

    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreative
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreative $creative = null;

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestAdData
     */
    public function getAdData(): ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestAdData
    {
        return $this->adData;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestAdData $adData
     * @return self
     */
    public function setAdData(?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestAdData $adData): self
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
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreative
     */
    public function getCreative(): ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreative
    {
        return $this->creative;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreative $creative
     * @return self
     */
    public function setCreative(?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreative $creative): self
    {
        $this->creative = $creative;
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
        if ($this->creative !== null) {
            $result['creative'] = $this->creative;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_data'] ?? null) !== null && is_array($v)) {
            $obj->adData = \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestAdData::fromArray($v);
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['creative'] ?? null) !== null && is_array($v)) {
            $obj->creative = \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreative::fromArray($v);
        }
        return $obj;
    }
}
