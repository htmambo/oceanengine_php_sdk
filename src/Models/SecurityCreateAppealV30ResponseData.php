<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityCreateAppealV30ResponseData implements \JsonSerializable
{
    /**
     * 申诉跟踪 ID
     * @var int
     */
    protected ?int $appealTrackId = null;

    /**
     * 申诉跟踪 ID
     * @return int
     */
    public function getAppealTrackId(): ?int
    {
        return $this->appealTrackId;
    }

    /**
     * 申诉跟踪 ID
     * @param int $appealTrackId
     * @return self
     */
    public function setAppealTrackId(?int $appealTrackId): self
    {
        $this->appealTrackId = $appealTrackId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appealTrackId !== null) {
            $result['appeal_track_id'] = $this->appealTrackId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['appeal_track_id'] ?? null) !== null) {
            $obj->appealTrackId = (int) $v;
        }
        return $obj;
    }
}
