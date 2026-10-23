<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectListV30ResponseDataListInnerLayerRoiGoalInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $lower = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var int
     */
    protected ?int $upper = null;

    /**
     * @return int
     */
    public function getLower(): ?int
    {
        return $this->lower;
    }

    /**
     * @param int $lower
     * @return self
     */
    public function setLower(?int $lower): self
    {
        $this->lower = $lower;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpper(): ?int
    {
        return $this->upper;
    }

    /**
     * @param int $upper
     * @return self
     */
    public function setUpper(?int $upper): self
    {
        $this->upper = $upper;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->lower !== null) {
            $result['lower'] = $this->lower;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->upper !== null) {
            $result['upper'] = $this->upper;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['lower'] ?? null) !== null) {
            $obj->lower = (int) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['upper'] ?? null) !== null) {
            $obj->upper = (int) $v;
        }
        return $obj;
    }
}
