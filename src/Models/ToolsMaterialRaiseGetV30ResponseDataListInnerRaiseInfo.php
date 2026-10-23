<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfoAppointTime
     */
    protected ?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfoAppointTime $appointTime = null;

    /**
     * @var float
     */
    protected ?float $raiseBudget = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseGetV30DataListRaiseInfoRaiseEffectiveType
     */
    protected ?string $raiseEffectiveType = null;

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfoAppointTime
     */
    public function getAppointTime(): ?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfoAppointTime
    {
        return $this->appointTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfoAppointTime $appointTime
     * @return self
     */
    public function setAppointTime(?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfoAppointTime $appointTime): self
    {
        $this->appointTime = $appointTime;
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
     * @return \Oceanengine\Models\ToolsMaterialRaiseGetV30DataListRaiseInfoRaiseEffectiveType
     */
    public function getRaiseEffectiveType(): ?string
    {
        return $this->raiseEffectiveType;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseGetV30DataListRaiseInfoRaiseEffectiveType $raiseEffectiveType
     * @return self
     */
    public function setRaiseEffectiveType(?string $raiseEffectiveType): self
    {
        $this->raiseEffectiveType = $raiseEffectiveType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appointTime !== null) {
            $result['appoint_time'] = $this->appointTime;
        }
        if ($this->raiseBudget !== null) {
            $result['raise_budget'] = $this->raiseBudget;
        }
        if ($this->raiseEffectiveType !== null) {
            $result['raise_effective_type'] = $this->raiseEffectiveType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['appoint_time'] ?? null) !== null && is_array($v)) {
            $obj->appointTime = \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfoAppointTime::fromArray($v);
        }
        if (($v = $data['raise_budget'] ?? null) !== null) {
            $obj->raiseBudget = (float) $v;
        }
        if (($v = $data['raise_effective_type'] ?? null) !== null) {
            $obj->raiseEffectiveType = (string) $v;
        }
        return $obj;
    }
}
