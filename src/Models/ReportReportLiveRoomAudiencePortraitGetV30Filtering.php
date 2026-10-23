<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportReportLiveRoomAudiencePortraitGetV30Filtering implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $roomId = null;

    /**
     * @return int
     */
    public function getRoomId(): ?int
    {
        return $this->roomId;
    }

    /**
     * @param int $roomId
     * @return self
     */
    public function setRoomId(?int $roomId): self
    {
        $this->roomId = $roomId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->roomId !== null) {
            $result['room_id'] = $this->roomId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['room_id'] ?? null) !== null) {
            $obj->roomId = (int) $v;
        }
        return $obj;
    }
}
