<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskPostEndTimeUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * @var string
     */
    protected ?string $starTaskPostEndTime = null;

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
    public function getStarTaskId(): ?int
    {
        return $this->starTaskId;
    }

    /**
     * @param int $starTaskId
     * @return self
     */
    public function setStarTaskId(?int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskPostEndTime(): ?string
    {
        return $this->starTaskPostEndTime;
    }

    /**
     * @param string $starTaskPostEndTime
     * @return self
     */
    public function setStarTaskPostEndTime(?string $starTaskPostEndTime): self
    {
        $this->starTaskPostEndTime = $starTaskPostEndTime;
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
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        if ($this->starTaskPostEndTime !== null) {
            $result['star_task_post_end_time'] = $this->starTaskPostEndTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null) {
            $obj->starTaskId = (int) $v;
        }
        if (($v = $data['star_task_post_end_time'] ?? null) !== null) {
            $obj->starTaskPostEndTime = (string) $v;
        }
        return $obj;
    }
}
