<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInnerAppointTime
     */
    protected ?\Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInnerAppointTime $appointTime = null;

    /**
     * 是否立即生效
     * @var bool
     */
    protected ?bool $isEffectiveNow = null;

    /**
     * 起量预算
     * @var float
     */
    protected ?float $raiseBudget = null;

    /**
     * @return \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInnerAppointTime
     */
    public function getAppointTime(): ?\Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInnerAppointTime
    {
        return $this->appointTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInnerAppointTime $appointTime
     * @return self
     */
    public function setAppointTime(?\Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInnerAppointTime $appointTime): self
    {
        $this->appointTime = $appointTime;
        return $this;
    }

    /**
     * 是否立即生效
     * @return bool
     */
    public function getIsEffectiveNow(): ?bool
    {
        return $this->isEffectiveNow;
    }

    /**
     * 是否立即生效
     * @param bool $isEffectiveNow
     * @return self
     */
    public function setIsEffectiveNow(?bool $isEffectiveNow): self
    {
        $this->isEffectiveNow = $isEffectiveNow;
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
        if ($this->isEffectiveNow !== null) {
            $result['is_effective_now'] = $this->isEffectiveNow;
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
            $obj->appointTime = \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInnerAppointTime::fromArray($v);
        }
        if (($v = $data['is_effective_now'] ?? null) !== null) {
            $obj->isEffectiveNow = (bool) $v;
        }
        if (($v = $data['raise_budget'] ?? null) !== null) {
            $obj->raiseBudget = (float) $v;
        }
        return $obj;
    }
}
