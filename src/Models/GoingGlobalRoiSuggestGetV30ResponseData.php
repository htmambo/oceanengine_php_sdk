<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class GoingGlobalRoiSuggestGetV30ResponseData implements \JsonSerializable
{
    /**
     * 建议出海 ROI
     * @var float
     */
    protected ?float $goingGlobalRoiGoal = null;

    /**
     * 建议出海 ROI
     * @return float
     */
    public function getGoingGlobalRoiGoal(): ?float
    {
        return $this->goingGlobalRoiGoal;
    }

    /**
     * 建议出海 ROI
     * @param float $goingGlobalRoiGoal
     * @return self
     */
    public function setGoingGlobalRoiGoal(?float $goingGlobalRoiGoal): self
    {
        $this->goingGlobalRoiGoal = $goingGlobalRoiGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->goingGlobalRoiGoal !== null) {
            $result['going_global_roi_goal'] = $this->goingGlobalRoiGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['going_global_roi_goal'] ?? null) !== null) {
            $obj->goingGlobalRoiGoal = (float) $v;
        }
        return $obj;
    }
}
