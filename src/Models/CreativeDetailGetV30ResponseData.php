<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdData
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataAdData $adData = null;

    /**
     * 计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 广告账户id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreative
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreative $creative = null;

    /**
     * 自定义素材信息
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInner[]
     */
    protected ?array $creativeList = null;

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdData
     */
    public function getAdData(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataAdData
    {
        return $this->adData;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdData $adData
     * @return self
     */
    public function setAdData(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataAdData $adData): self
    {
        $this->adData = $adData;
        return $this;
    }

    /**
     * 计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 广告账户id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告账户id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreative
     */
    public function getCreative(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreative
    {
        return $this->creative;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreative $creative
     * @return self
     */
    public function setCreative(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreative $creative): self
    {
        $this->creative = $creative;
        return $this;
    }

    /**
     * 自定义素材信息
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInner[]
     */
    public function getCreativeList(): ?array
    {
        return $this->creativeList;
    }

    /**
     * 自定义素材信息
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInner[] $creativeList
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
        if ($this->creative !== null) {
            $result['creative'] = $this->creative;
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
            $obj->adData = \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdData::fromArray($v);
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['creative'] ?? null) !== null && is_array($v)) {
            $obj->creative = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreative::fromArray($v);
        }
        if (($v = $data['creative_list'] ?? null) !== null && is_array($v)) {
            $obj->creativeList = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
