<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsKeywordUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        return $obj;
    }
}
