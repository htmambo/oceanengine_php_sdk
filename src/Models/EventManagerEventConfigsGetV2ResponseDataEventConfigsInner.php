<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerEventConfigsGetV2ResponseDataEventConfigsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerAttributionConfiguration
     */
    protected ?\Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerAttributionConfiguration $attributionConfiguration = null;

    /**
     * 事件创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus
     */
    protected ?string $debuggingStatus = null;

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
     * @var \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerPropertiesInner[]
     */
    protected ?array $properties = null;

    /**
     * 事件回传方式列表，允许值:落地页支持:`JSSDK` JS埋码 、`EXTERNAL_API` API回传、`XPATH` XPath圈选应用支持：`APPLICATION_API` 应用API、`APPLICATION_SDK` 应用SDK、快应用支持：`QUICK_APP_API` 快应用API
     * @var \Oceanengine\Models\EventManagerEventConfigsGetV2DataEventConfigsTrackTypes[]
     */
    protected ?array $trackTypes = null;

    /**
     * @return \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerAttributionConfiguration
     */
    public function getAttributionConfiguration(): ?\Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerAttributionConfiguration
    {
        return $this->attributionConfiguration;
    }

    /**
     * @param \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerAttributionConfiguration $attributionConfiguration
     * @return self
     */
    public function setAttributionConfiguration(?\Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerAttributionConfiguration $attributionConfiguration): self
    {
        $this->attributionConfiguration = $attributionConfiguration;
        return $this;
    }

    /**
     * 事件创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 事件创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus
     */
    public function getDebuggingStatus(): ?string
    {
        return $this->debuggingStatus;
    }

    /**
     * @param \Oceanengine\Models\EventManagerEventConfigsGetV2DataEventConfigsDebuggingStatus $debuggingStatus
     * @return self
     */
    public function setDebuggingStatus(?string $debuggingStatus): self
    {
        $this->debuggingStatus = $debuggingStatus;
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
     * @return \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerPropertiesInner[]
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * 事件的附加属性
     * @param \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerPropertiesInner[] $properties
     * @return self
     */
    public function setProperties(?array $properties): self
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * 事件回传方式列表，允许值:落地页支持:`JSSDK` JS埋码 、`EXTERNAL_API` API回传、`XPATH` XPath圈选应用支持：`APPLICATION_API` 应用API、`APPLICATION_SDK` 应用SDK、快应用支持：`QUICK_APP_API` 快应用API
     * @return \Oceanengine\Models\EventManagerEventConfigsGetV2DataEventConfigsTrackTypes[]
     */
    public function getTrackTypes(): ?array
    {
        return $this->trackTypes;
    }

    /**
     * 事件回传方式列表，允许值:落地页支持:`JSSDK` JS埋码 、`EXTERNAL_API` API回传、`XPATH` XPath圈选应用支持：`APPLICATION_API` 应用API、`APPLICATION_SDK` 应用SDK、快应用支持：`QUICK_APP_API` 快应用API
     * @param \Oceanengine\Models\EventManagerEventConfigsGetV2DataEventConfigsTrackTypes[] $trackTypes
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
        if ($this->attributionConfiguration !== null) {
            $result['attribution_configuration'] = $this->attributionConfiguration;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->debuggingStatus !== null) {
            $result['debugging_status'] = $this->debuggingStatus;
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
        if (($v = $data['attribution_configuration'] ?? null) !== null && is_array($v)) {
            $obj->attributionConfiguration = \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerAttributionConfiguration::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['debugging_status'] ?? null) !== null) {
            $obj->debuggingStatus = (string) $v;
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
            $obj->properties = array_map(fn ($vv) => \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerPropertiesInner::fromArray($vv), $v);
        }
        if (($v = $data['track_types'] ?? null) !== null && is_array($v)) {
            $obj->trackTypes = $v;
        }
        return $obj;
    }
}
