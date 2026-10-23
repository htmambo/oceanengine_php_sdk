<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfoAppointTime
     */
    protected ?\Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfoAppointTime $appointTime = null;

    /**
     * 起量预算
     * @var float
     */
    protected ?float $raiseBudget = null;

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfoAppointTime
     */
    public function getAppointTime(): ?\Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfoAppointTime
    {
        return $this->appointTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfoAppointTime $appointTime
     * @return self
     */
    public function setAppointTime(?\Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfoAppointTime $appointTime): self
    {
        $this->appointTime = $appointTime;
        return $this;
    }

    /**
     * 起量预算
     * @return float
     */
    public function getRaiseBudget(): ?float
    {
        return $this->raiseBudget;
    }

    /**
     * 起量预算
     * @param float $raiseBudget
     * @return self
     */
    public function setRaiseBudget(?float $raiseBudget): self
    {
        $this->raiseBudget = $raiseBudget;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['appoint_time'] ?? null) !== null && is_array($v)) {
            $obj->appointTime = \Oceanengine\Models\ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfoAppointTime::fromArray($v);
        }
        if (($v = $data['raise_budget'] ?? null) !== null) {
            $obj->raiseBudget = (float) $v;
        }
        return $obj;
    }
}
