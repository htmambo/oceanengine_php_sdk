<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdScheduleFixedRangeUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $scheduleFixedRange = null;

    /**
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

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
     * @return int
     */
    public function getScheduleFixedRange(): ?int
    {
        return $this->scheduleFixedRange;
    }

    /**
     * @param int $scheduleFixedRange
     * @return self
     */
    public function setScheduleFixedRange(?int $scheduleFixedRange): self
    {
        $this->scheduleFixedRange = $scheduleFixedRange;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->scheduleFixedRange !== null) {
            $result['schedule_fixed_range'] = $this->scheduleFixedRange;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['schedule_fixed_range'] ?? null) !== null) {
            $obj->scheduleFixedRange = (int) $v;
        }
        return $obj;
    }
}
