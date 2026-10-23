<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceDeleteV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int[]
     */
    protected ?array $scheduleIds = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getScheduleIds(): ?array
    {
        return $this->scheduleIds;
    }

    /**
     * @param int[] $scheduleIds
     * @return self
     */
    public function setScheduleIds(?array $scheduleIds): self
    {
        $this->scheduleIds = $scheduleIds;
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
        if ($this->scheduleIds !== null) {
            $result['schedule_ids'] = $this->scheduleIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['schedule_ids'] ?? null) !== null && is_array($v)) {
            $obj->scheduleIds = $v;
        }
        return $obj;
    }
}
