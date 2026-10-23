<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanRoiGoalUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanRoiGoalUpdateV10RequestRoiGoalUpdatesInner[]
     */
    protected ?array $roiGoalUpdates = null;

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
     * @return \Oceanengine\Models\QianchuanRoiGoalUpdateV10RequestRoiGoalUpdatesInner[]
     */
    public function getRoiGoalUpdates(): ?array
    {
        return $this->roiGoalUpdates;
    }

    /**
     * @param \Oceanengine\Models\QianchuanRoiGoalUpdateV10RequestRoiGoalUpdatesInner[] $roiGoalUpdates
     * @return self
     */
    public function setRoiGoalUpdates(?array $roiGoalUpdates): self
    {
        $this->roiGoalUpdates = $roiGoalUpdates;
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
        if ($this->roiGoalUpdates !== null) {
            $result['roi_goal_updates'] = $this->roiGoalUpdates;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['roi_goal_updates'] ?? null) !== null && is_array($v)) {
            $obj->roiGoalUpdates = array_map(fn ($vv) => \Oceanengine\Models\QianchuanRoiGoalUpdateV10RequestRoiGoalUpdatesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
