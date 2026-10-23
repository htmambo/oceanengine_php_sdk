<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerEventConfigsGetV2ResponseData implements \JsonSerializable
{
    /**
     * 已创建事件列表
     * @var \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInner[]
     */
    protected ?array $eventConfigs = null;

    /**
     * 已创建事件列表
     * @return \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInner[]
     */
    public function getEventConfigs(): ?array
    {
        return $this->eventConfigs;
    }

    /**
     * 已创建事件列表
     * @param \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInner[] $eventConfigs
     * @return self
     */
    public function setEventConfigs(?array $eventConfigs): self
    {
        $this->eventConfigs = $eventConfigs;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->eventConfigs !== null) {
            $result['event_configs'] = $this->eventConfigs;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['event_configs'] ?? null) !== null && is_array($v)) {
            $obj->eventConfigs = array_map(fn ($vv) => \Oceanengine\Models\EventManagerEventConfigsGetV2ResponseDataEventConfigsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
