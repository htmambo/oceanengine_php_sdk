<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AnalyticsAttributionV30Request implements \JsonSerializable
{
    /**
     * 开发者申请的应用APP_ID
     * @var int
     */
    protected ?int $appId = null;

    /**
     * 当前场景只支持convert，勿传其他值
     * @var string
     */
    protected ?string $attributeLabel = null;

    /**
     * 当前场景只支持4，勿传其他值
     * @var int
     */
    protected ?int $bizType = null;

    /**
     * @var \Oceanengine\Models\AnalyticsAttributionV30RequestContext
     */
    protected ?\Oceanengine\Models\AnalyticsAttributionV30RequestContext $context = null;

    /**
     * 事件类型
     * @var string
     */
    protected ?string $eventType = null;

    /**
     * @var \Oceanengine\Models\AnalyticsAttributionV30RequestProperties
     */
    protected ?\Oceanengine\Models\AnalyticsAttributionV30RequestProperties $properties = null;

    /**
     * 广告主标识，自定义值，用于标识数据来源，例如：tb
     * @var string
     */
    protected ?string $source = null;

    /**
     * 订单时间；这里timestamp指订单发生的时间，而不是数据上报时间，必须上报秒级时间戳；且回传超过1天的下单会返回错误
     * @var int
     */
    protected ?int $timestamp = null;

    /**
     * 开发者申请的应用APP_ID
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * 开发者申请的应用APP_ID
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 当前场景只支持convert，勿传其他值
     * @return string
     */
    public function getAttributeLabel(): ?string
    {
        return $this->attributeLabel;
    }

    /**
     * 当前场景只支持convert，勿传其他值
     * @param string $attributeLabel
     * @return self
     */
    public function setAttributeLabel(?string $attributeLabel): self
    {
        $this->attributeLabel = $attributeLabel;
        return $this;
    }

    /**
     * 当前场景只支持4，勿传其他值
     * @return int
     */
    public function getBizType(): ?int
    {
        return $this->bizType;
    }

    /**
     * 当前场景只支持4，勿传其他值
     * @param int $bizType
     * @return self
     */
    public function setBizType(?int $bizType): self
    {
        $this->bizType = $bizType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AnalyticsAttributionV30RequestContext
     */
    public function getContext(): ?\Oceanengine\Models\AnalyticsAttributionV30RequestContext
    {
        return $this->context;
    }

    /**
     * @param \Oceanengine\Models\AnalyticsAttributionV30RequestContext $context
     * @return self
     */
    public function setContext(?\Oceanengine\Models\AnalyticsAttributionV30RequestContext $context): self
    {
        $this->context = $context;
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
     * @return \Oceanengine\Models\AnalyticsAttributionV30RequestProperties
     */
    public function getProperties(): ?\Oceanengine\Models\AnalyticsAttributionV30RequestProperties
    {
        return $this->properties;
    }

    /**
     * @param \Oceanengine\Models\AnalyticsAttributionV30RequestProperties $properties
     * @return self
     */
    public function setProperties(?\Oceanengine\Models\AnalyticsAttributionV30RequestProperties $properties): self
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * 广告主标识，自定义值，用于标识数据来源，例如：tb
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * 广告主标识，自定义值，用于标识数据来源，例如：tb
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 订单时间；这里timestamp指订单发生的时间，而不是数据上报时间，必须上报秒级时间戳；且回传超过1天的下单会返回错误
     * @return int
     */
    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    /**
     * 订单时间；这里timestamp指订单发生的时间，而不是数据上报时间，必须上报秒级时间戳；且回传超过1天的下单会返回错误
     * @param int $timestamp
     * @return self
     */
    public function setTimestamp(?int $timestamp): self
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->attributeLabel !== null) {
            $result['attribute_label'] = $this->attributeLabel;
        }
        if ($this->bizType !== null) {
            $result['biz_type'] = $this->bizType;
        }
        if ($this->context !== null) {
            $result['context'] = $this->context;
        }
        if ($this->eventType !== null) {
            $result['event_type'] = $this->eventType;
        }
        if ($this->properties !== null) {
            $result['properties'] = $this->properties;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->timestamp !== null) {
            $result['timestamp'] = $this->timestamp;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['attribute_label'] ?? null) !== null) {
            $obj->attributeLabel = (string) $v;
        }
        if (($v = $data['biz_type'] ?? null) !== null) {
            $obj->bizType = (int) $v;
        }
        if (($v = $data['context'] ?? null) !== null && is_array($v)) {
            $obj->context = \Oceanengine\Models\AnalyticsAttributionV30RequestContext::fromArray($v);
        }
        if (($v = $data['event_type'] ?? null) !== null) {
            $obj->eventType = (string) $v;
        }
        if (($v = $data['properties'] ?? null) !== null && is_array($v)) {
            $obj->properties = \Oceanengine\Models\AnalyticsAttributionV30RequestProperties::fromArray($v);
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['timestamp'] ?? null) !== null) {
            $obj->timestamp = (int) $v;
        }
        return $obj;
    }
}
