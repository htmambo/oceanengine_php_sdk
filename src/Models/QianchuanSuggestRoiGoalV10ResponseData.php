<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanSuggestRoiGoalV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $ecpRoiGoal = null;

    /**
     * @var float
     */
    protected ?float $roiLowerBound = null;

    /**
     * @var float
     */
    protected ?float $roiUpperBound = null;

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
     * @return float
     */
    public function getRoiLowerBound(): ?float
    {
        return $this->roiLowerBound;
    }

    /**
     * @param float $roiLowerBound
     * @return self
     */
    public function setRoiLowerBound(?float $roiLowerBound): self
    {
        $this->roiLowerBound = $roiLowerBound;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoiUpperBound(): ?float
    {
        return $this->roiUpperBound;
    }

    /**
     * @param float $roiUpperBound
     * @return self
     */
    public function setRoiUpperBound(?float $roiUpperBound): self
    {
        $this->roiUpperBound = $roiUpperBound;
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
        if ($this->roiLowerBound !== null) {
            $result['roi_lower_bound'] = $this->roiLowerBound;
        }
        if ($this->roiUpperBound !== null) {
            $result['roi_upper_bound'] = $this->roiUpperBound;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ecp_roi_goal'] ?? null) !== null) {
            $obj->ecpRoiGoal = (float) $v;
        }
        if (($v = $data['roi_lower_bound'] ?? null) !== null) {
            $obj->roiLowerBound = (float) $v;
        }
        if (($v = $data['roi_upper_bound'] ?? null) !== null) {
            $obj->roiUpperBound = (float) $v;
        }
        return $obj;
    }
}
