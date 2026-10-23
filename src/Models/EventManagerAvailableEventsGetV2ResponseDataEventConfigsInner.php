<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAvailableEventsGetV2ResponseDataEventConfigsInner implements \JsonSerializable
{
    /**
     * 事件描述信息
     * @var string
     */
    protected ?string $description = null;

    /**
     * 事件中文名称
     * @var string
     */
    protected ?string $eventCnName = null;

    /**
     * 事件ID
     * @var int
     */
    protected ?int $eventId = null;

    /**
     * 事件类型
     * @var string
     */
    protected ?string $eventType = null;

    /**
     * 事件的附加属性
     * @var \Oceanengine\Models\EventManagerAvailableEventsGetV2ResponseDataEventConfigsInnerPropertiesInner[]
     */
    protected ?array $properties = null;

    /**
     * 事件回传方式列表，枚举值：`JSSDK` JS埋码 、`EXTERNAL_API` API回传 、`XPATH` XPath圈选
     * @var \Oceanengine\Models\EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes[]
     */
    protected ?array $trackTypes = null;

    /**
     * 事件描述信息
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 事件描述信息
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 事件中文名称
     * @return string
     */
    public function getEventCnName(): ?string
    {
        return $this->eventCnName;
    }

    /**
     * 事件中文名称
     * @param string $eventCnName
     * @return self
     */
    public function setEventCnName(?string $eventCnName): self
    {
        $this->eventCnName = $eventCnName;
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
     * 事件类型
     * @return string
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * 事件类型
     * @param string $eventType
     * @return self
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * 事件的附加属性
     * @return \Oceanengine\Models\EventManagerAvailableEventsGetV2ResponseDataEventConfigsInnerPropertiesInner[]
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * 事件的附加属性
     * @param \Oceanengine\Models\EventManagerAvailableEventsGetV2ResponseDataEventConfigsInnerPropertiesInner[] $properties
     * @return self
     */
    public function setProperties(?array $properties): self
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * 事件回传方式列表，枚举值：`JSSDK` JS埋码 、`EXTERNAL_API` API回传 、`XPATH` XPath圈选
     * @return \Oceanengine\Models\EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes[]
     */
    public function getTrackTypes(): ?array
    {
        return $this->trackTypes;
    }

    /**
     * 事件回传方式列表，枚举值：`JSSDK` JS埋码 、`EXTERNAL_API` API回传 、`XPATH` XPath圈选
     * @param \Oceanengine\Models\EventManagerAvailableEventsGetV2DataEventConfigsTrackTypes[] $trackTypes
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->eventCnName !== null) {
            $result['event_cn_name'] = $this->eventCnName;
        }
        if ($this->eventId !== null) {
            $result['event_id'] = $this->eventId;
        }
        if ($this->eventType !== null) {
            $result['event_type'] = $this->eventType;
        }
        if ($this->properties !== null) {
            $result['properties'] = $this->properties;
        }
        if ($this->trackTypes !== null) {
            $result['track_types'] = $this->trackTypes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['event_cn_name'] ?? null) !== null) {
            $obj->eventCnName = (string) $v;
        }
        if (($v = $data['event_id'] ?? null) !== null) {
            $obj->eventId = (int) $v;
        }
        if (($v = $data['event_type'] ?? null) !== null) {
            $obj->eventType = (string) $v;
        }
        if (($v = $data['properties'] ?? null) !== null && is_array($v)) {
            $obj->properties = array_map(fn ($vv) => \Oceanengine\Models\EventManagerAvailableEventsGetV2ResponseDataEventConfigsInnerPropertiesInner::fromArray($vv), $v);
        }
        if (($v = $data['track_types'] ?? null) !== null && is_array($v)) {
            $obj->trackTypes = $v;
        }
        return $obj;
    }
}
