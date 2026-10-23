<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $adjustDuration = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch
     */
    protected ?string $adjustMaterialSwitch = null;

    /**
     * @var string
     */
    protected ?string $planEndTime = null;

    /**
     * @var float
     */
    protected ?float $raiseBudget = null;

    /**
     * @var string
     */
    protected ?string $realEndTime = null;

    /**
     * @var string
     */
    protected ?string $scheduleName = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return string
     */
    public function getAdjustDuration(): ?string
    {
        return $this->adjustDuration;
    }

    /**
     * @param string $adjustDuration
     * @return self
     */
    public function setAdjustDuration(?string $adjustDuration): self
    {
        $this->adjustDuration = $adjustDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch
     */
    public function getAdjustMaterialSwitch(): ?string
    {
        return $this->adjustMaterialSwitch;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch $adjustMaterialSwitch
     * @return self
     */
    public function setAdjustMaterialSwitch(?string $adjustMaterialSwitch): self
    {
        $this->adjustMaterialSwitch = $adjustMaterialSwitch;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanEndTime(): ?string
    {
        return $this->planEndTime;
    }

    /**
     * @param string $planEndTime
     * @return self
     */
    public function setPlanEndTime(?string $planEndTime): self
    {
        $this->planEndTime = $planEndTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getRaiseBudget(): ?float
    {
        return $this->raiseBudget;
    }

    /**
     * @param float $raiseBudget
     * @return self
     */
    public function setRaiseBudget(?float $raiseBudget): self
    {
        $this->raiseBudget = $raiseBudget;
        return $this;
    }

    /**
     * @return string
     */
    public function getRealEndTime(): ?string
    {
        return $this->realEndTime;
    }

    /**
     * @param string $realEndTime
     * @return self
     */
    public function setRealEndTime(?string $realEndTime): self
    {
        $this->realEndTime = $realEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleName(): ?string
    {
        return $this->scheduleName;
    }

    /**
     * @param string $scheduleName
     * @return self
     */
    public function setScheduleName(?string $scheduleName): self
    {
        $this->scheduleName = $scheduleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adjustDuration !== null) {
            $result['adjust_duration'] = $this->adjustDuration;
        }
        if ($this->adjustMaterialSwitch !== null) {
            $result['adjust_material_switch'] = $this->adjustMaterialSwitch;
        }
        if ($this->planEndTime !== null) {
            $result['plan_end_time'] = $this->planEndTime;
        }
        if ($this->raiseBudget !== null) {
            $result['raise_budget'] = $this->raiseBudget;
        }
        if ($this->realEndTime !== null) {
            $result['real_end_time'] = $this->realEndTime;
        }
        if ($this->scheduleName !== null) {
            $result['schedule_name'] = $this->scheduleName;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adjust_duration'] ?? null) !== null) {
            $obj->adjustDuration = (string) $v;
        }
        if (($v = $data['adjust_material_switch'] ?? null) !== null) {
            $obj->adjustMaterialSwitch = (string) $v;
        }
        if (($v = $data['plan_end_time'] ?? null) !== null) {
            $obj->planEndTime = (string) $v;
        }
        if (($v = $data['raise_budget'] ?? null) !== null) {
            $obj->raiseBudget = (float) $v;
        }
        if (($v = $data['real_end_time'] ?? null) !== null) {
            $obj->realEndTime = (string) $v;
        }
        if (($v = $data['schedule_name'] ?? null) !== null) {
            $obj->scheduleName = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
