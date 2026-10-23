<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerEventsCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 资产ID
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 事件ID
     * @var int
     */
    protected ?int $eventId = null;

    /**
     * 事件回传方式列表，允许值：`JSSDK` JS埋码 、`EXTERNAL_API` API回传 、`XPATH` XPath圈选
     * @var \Oceanengine\Models\EventManagerEventsCreateV2TrackTypes[]
     */
    protected ?array $trackTypes = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 资产ID
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 资产ID
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 事件ID
     * @return int
     */
    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    /**
     * 事件ID
     * @param int $eventId
     * @return self
     */
    public function setEventId(?int $eventId): self
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * 事件回传方式列表，允许值：`JSSDK` JS埋码 、`EXTERNAL_API` API回传 、`XPATH` XPath圈选
     * @return \Oceanengine\Models\EventManagerEventsCreateV2TrackTypes[]
     */
    public function getTrackTypes(): ?array
    {
        return $this->trackTypes;
    }

    /**
     * 事件回传方式列表，允许值：`JSSDK` JS埋码 、`EXTERNAL_API` API回传 、`XPATH` XPath圈选
     * @param \Oceanengine\Models\EventManagerEventsCreateV2TrackTypes[] $trackTypes
     * @return self
     */
    public function setTrackTypes(?array $trackTypes): self
    {
        $this->trackTypes = $trackTypes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->eventId !== null) {
            $result['event_id'] = $this->eventId;
        }
        if ($this->trackTypes !== null) {
            $result['track_types'] = $this->trackTypes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['event_id'] ?? null) !== null) {
            $obj->eventId = (int) $v;
        }
        if (($v = $data['track_types'] ?? null) !== null && is_array($v)) {
            $obj->trackTypes = $v;
        }
        return $obj;
    }
}
