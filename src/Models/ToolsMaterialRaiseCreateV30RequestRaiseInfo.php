<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseCreateV30RequestRaiseInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseCreateV30RequestRaiseInfoAppointTime
     */
    protected ?\Oceanengine\Models\ToolsMaterialRaiseCreateV30RequestRaiseInfoAppointTime $appointTime = null;

    /**
     * 起量预算，单位：元，允许小数点后两位 起量预算上下限制校验[100,9999999.99]
     * @var float
     */
    protected ?float $raiseBudget = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseCreateV30RaiseInfoRaiseEffectiveType
     */
    protected ?string $raiseEffectiveType = null;

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseCreateV30RequestRaiseInfoAppointTime
     */
    public function getAppointTime(): ?\Oceanengine\Models\ToolsMaterialRaiseCreateV30RequestRaiseInfoAppointTime
    {
        return $this->appointTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseCreateV30RequestRaiseInfoAppointTime $appointTime
     * @return self
     */
    public function setAppointTime(?\Oceanengine\Models\ToolsMaterialRaiseCreateV30RequestRaiseInfoAppointTime $appointTime): self
    {
        $this->appointTime = $appointTime;
        return $this;
    }

    /**
     * 起量预算，单位：元，允许小数点后两位 起量预算上下限制校验[100,9999999.99]
     * @return float
     */
    public function getRaiseBudget(): ?float
    {
        return $this->raiseBudget;
    }

    /**
     * 起量预算，单位：元，允许小数点后两位 起量预算上下限制校验[100,9999999.99]
     * @param float $raiseBudget
     * @return self
     */
    public function setRaiseBudget(?float $raiseBudget): self
    {
        $this->raiseBudget = $raiseBudget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseCreateV30RaiseInfoRaiseEffectiveType
     */
    public function getRaiseEffectiveType(): ?string
    {
        return $this->raiseEffectiveType;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseCreateV30RaiseInfoRaiseEffectiveType $raiseEffectiveType
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
            $obj->appointTime = \Oceanengine\Models\ToolsMaterialRaiseCreateV30RequestRaiseInfoAppointTime::fromArray($v);
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
