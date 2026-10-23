<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerOptimizedGoalGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $assetIds = null;

    /**
     * @var \Oceanengine\Models\EventManagerOptimizedGoalGetV30ResponseDataGoalsInner[]
     */
    protected ?array $goals = null;

    /**
     * @return int[]
     */
    public function getAssetIds(): ?array
    {
        return $this->assetIds;
    }

    /**
     * @param int[] $assetIds
     * @return self
     */
    public function setAssetIds(?array $assetIds): self
    {
        $this->assetIds = $assetIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerOptimizedGoalGetV30ResponseDataGoalsInner[]
     */
    public function getGoals(): ?array
    {
        return $this->goals;
    }

    /**
     * @param \Oceanengine\Models\EventManagerOptimizedGoalGetV30ResponseDataGoalsInner[] $goals
     * @return self
     */
    public function setGoals(?array $goals): self
    {
        $this->goals = $goals;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetIds !== null) {
            $result['asset_ids'] = $this->assetIds;
        }
        if ($this->goals !== null) {
            $result['goals'] = $this->goals;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_ids'] ?? null) !== null && is_array($v)) {
            $obj->assetIds = $v;
        }
        if (($v = $data['goals'] ?? null) !== null && is_array($v)) {
            $obj->goals = array_map(fn ($vv) => \Oceanengine\Models\EventManagerOptimizedGoalGetV30ResponseDataGoalsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
