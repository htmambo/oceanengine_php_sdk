<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsMaterialRaiseCreateV30RequestRaiseInfo implements \JsonSerializable
{
    /**
     * 调控时长，单位：小时，限制范围：[0.5,24]，支持小数点后一位
     * @var string
     */
    protected ?string $adjustDuration = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch
     */
    protected ?string $adjustMaterialSwitch = null;

    /**
     * 起量预算，单位：元，允许小数点后两位，范围[100,9999999]
     * @var float
     */
    protected ?float $raiseBudget = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $scheduleName = null;

    /**
     * 调控时长，单位：小时，限制范围：[0.5,24]，支持小数点后一位
     * @return string
     */
    public function getAdjustDuration(): ?string
    {
        return $this->adjustDuration;
    }

    /**
     * 调控时长，单位：小时，限制范围：[0.5,24]，支持小数点后一位
     * @param string $adjustDuration
     * @return self
     */
    public function setAdjustDuration(?string $adjustDuration): self
    {
        $this->adjustDuration = $adjustDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch
     */
    public function getAdjustMaterialSwitch(): ?string
    {
        return $this->adjustMaterialSwitch;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch $adjustMaterialSwitch
     * @return self
     */
    public function setAdjustMaterialSwitch(?string $adjustMaterialSwitch): self
    {
        $this->adjustMaterialSwitch = $adjustMaterialSwitch;
        return $this;
    }

    /**
     * 起量预算，单位：元，允许小数点后两位，范围[100,9999999]
     * @return float
     */
    public function getRaiseBudget(): ?float
    {
        return $this->raiseBudget;
    }

    /**
     * 起量预算，单位：元，允许小数点后两位，范围[100,9999999]
     * @param float $raiseBudget
     * @return self
     */
    public function setRaiseBudget(?float $raiseBudget): self
    {
        $this->raiseBudget = $raiseBudget;
        return $this;
    }

    /**
     * 任务名称
     * @return string
     */
    public function getScheduleName(): ?string
    {
        return $this->scheduleName;
    }

    /**
     * 任务名称
     * @param string $scheduleName
     * @return self
     */
    public function setScheduleName(?string $scheduleName): self
    {
        $this->scheduleName = $scheduleName;
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
        if ($this->raiseBudget !== null) {
            $result['raise_budget'] = $this->raiseBudget;
        }
        if ($this->scheduleName !== null) {
            $result['schedule_name'] = $this->scheduleName;
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
        if (($v = $data['raise_budget'] ?? null) !== null) {
            $obj->raiseBudget = (float) $v;
        }
        if (($v = $data['schedule_name'] ?? null) !== null) {
            $obj->scheduleName = (string) $v;
        }
        return $obj;
    }
}
