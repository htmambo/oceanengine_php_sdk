<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseSetV30RequestRaiseInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInnerAppointedTime
     */
    protected ?\Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInnerAppointedTime $appointedTime = null;

    /**
     * 是否立即生效，仅支持广告状态为“投放中”的广告，仅支持1个方案设置“立即生效”，传入True时不支持填写appointed_time
     * @var bool
     */
    protected ?bool $isEffectiveNow = null;

    /**
     * 起量预算，单位：元，允许小数点后两位 起量预算需大于等于计划出价，小于等于计划预算
     * @var float
     */
    protected ?float $raiseBudget = null;

    /**
     * @return \Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInnerAppointedTime
     */
    public function getAppointedTime(): ?\Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInnerAppointedTime
    {
        return $this->appointedTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInnerAppointedTime $appointedTime
     * @return self
     */
    public function setAppointedTime(?\Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInnerAppointedTime $appointedTime): self
    {
        $this->appointedTime = $appointedTime;
        return $this;
    }

    /**
     * 是否立即生效，仅支持广告状态为“投放中”的广告，仅支持1个方案设置“立即生效”，传入True时不支持填写appointed_time
     * @return bool
     */
    public function getIsEffectiveNow(): ?bool
    {
        return $this->isEffectiveNow;
    }

    /**
     * 是否立即生效，仅支持广告状态为“投放中”的广告，仅支持1个方案设置“立即生效”，传入True时不支持填写appointed_time
     * @param bool $isEffectiveNow
     * @return self
     */
    public function setIsEffectiveNow(?bool $isEffectiveNow): self
    {
        $this->isEffectiveNow = $isEffectiveNow;
        return $this;
    }

    /**
     * 起量预算，单位：元，允许小数点后两位 起量预算需大于等于计划出价，小于等于计划预算
     * @return float
     */
    public function getRaiseBudget(): ?float
    {
        return $this->raiseBudget;
    }

    /**
     * 起量预算，单位：元，允许小数点后两位 起量预算需大于等于计划出价，小于等于计划预算
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
        if ($this->appointedTime !== null) {
            $result['appointed_time'] = $this->appointedTime;
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
        if (($v = $data['appointed_time'] ?? null) !== null && is_array($v)) {
            $obj->appointedTime = \Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInnerAppointedTime::fromArray($v);
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
