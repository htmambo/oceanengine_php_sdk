<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdStatusUpdateV10Request implements \JsonSerializable
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
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdStatusUpdateV10OptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var float
     */
    protected ?float $reviveBudget = null;

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
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdStatusUpdateV10OptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdStatusUpdateV10OptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return float
     */
    public function getReviveBudget(): ?float
    {
        return $this->reviveBudget;
    }

    /**
     * @param float $reviveBudget
     * @return self
     */
    public function setReviveBudget(?float $reviveBudget): self
    {
        $this->reviveBudget = $reviveBudget;
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
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->reviveBudget !== null) {
            $result['revive_budget'] = $this->reviveBudget;
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
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['revive_budget'] ?? null) !== null) {
            $obj->reviveBudget = (float) $v;
        }
        if (($v = $data['schedule_fixed_range'] ?? null) !== null) {
            $obj->scheduleFixedRange = (int) $v;
        }
        return $obj;
    }
}
