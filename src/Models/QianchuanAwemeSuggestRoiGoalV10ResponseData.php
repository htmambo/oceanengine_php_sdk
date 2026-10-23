<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeSuggestRoiGoalV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $ecpRoiGoal = null;

    /**
     * @return float
     */
    public function getEcpRoiGoal(): ?float
    {
        return $this->ecpRoiGoal;
    }

    /**
     * @param float $ecpRoiGoal
     * @return self
     */
    public function setEcpRoiGoal(?float $ecpRoiGoal): self
    {
        $this->ecpRoiGoal = $ecpRoiGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ecpRoiGoal !== null) {
            $result['ecp_roi_goal'] = $this->ecpRoiGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ecp_roi_goal'] ?? null) !== null) {
            $obj->ecpRoiGoal = (float) $v;
        }
        return $obj;
    }
}
