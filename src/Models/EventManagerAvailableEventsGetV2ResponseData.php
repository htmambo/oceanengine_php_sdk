<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAvailableEventsGetV2ResponseData implements \JsonSerializable
{
    /**
     * 可创建事件列表
     * @var \Oceanengine\Models\EventManagerAvailableEventsGetV2ResponseDataEventConfigsInner[]
     */
    protected ?array $eventConfigs = null;

    /**
     * 可创建事件列表
     * @return \Oceanengine\Models\EventManagerAvailableEventsGetV2ResponseDataEventConfigsInner[]
     */
    public function getEventConfigs(): ?array
    {
        return $this->eventConfigs;
    }

    /**
     * 可创建事件列表
     * @param \Oceanengine\Models\EventManagerAvailableEventsGetV2ResponseDataEventConfigsInner[] $eventConfigs
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
            $obj->eventConfigs = array_map(fn ($vv) => \Oceanengine\Models\EventManagerAvailableEventsGetV2ResponseDataEventConfigsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
