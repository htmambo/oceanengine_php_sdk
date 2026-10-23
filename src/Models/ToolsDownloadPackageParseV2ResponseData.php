<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsDownloadPackageParseV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $eventId = null;

    /**
     * @return string
     */
    public function getEventId(): ?string
    {
        return $this->eventId;
    }

    /**
     * @param string $eventId
     * @return self
     */
    public function setEventId(?string $eventId): self
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->eventId !== null) {
            $result['event_id'] = $this->eventId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['event_id'] ?? null) !== null) {
            $obj->eventId = (string) $v;
        }
        return $obj;
    }
}
