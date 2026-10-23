<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallLiveUpdateV10Request implements \JsonSerializable
{
    /**
     * 计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestCreativeSetting
     */
    protected ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestCreativeSetting $creativeSetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestProgrammaticCreativeMediaList
     */
    protected ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList = null;

    /**
     * 计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id
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
     * @return \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestCreativeSetting
     */
    public function getCreativeSetting(): ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestCreativeSetting
    {
        return $this->creativeSetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestCreativeSetting $creativeSetting
     * @return self
     */
    public function setCreativeSetting(?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestCreativeSetting $creativeSetting): self
    {
        $this->creativeSetting = $creativeSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestProgrammaticCreativeMediaList
     */
    public function getProgrammaticCreativeMediaList(): ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestProgrammaticCreativeMediaList
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?\Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->creativeSetting !== null) {
            $result['creative_setting'] = $this->creativeSetting;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->programmaticCreativeMediaList !== null) {
            $result['programmatic_creative_media_list'] = $this->programmaticCreativeMediaList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['creative_setting'] ?? null) !== null && is_array($v)) {
            $obj->creativeSetting = \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestCreativeSetting::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = \Oceanengine\Models\QianchuanOverallLiveUpdateV10RequestProgrammaticCreativeMediaList::fromArray($v);
        }
        return $obj;
    }
}
