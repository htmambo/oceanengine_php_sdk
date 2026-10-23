<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInnerAppointTime implements \JsonSerializable
{
    /**
     * 起量时间， 重复周期不传时，格式为yyyy-mm-dd HH:MM 传重复周期时，格式为HH:MM
     * @var string
     */
    protected ?string $raiseTime = null;

    /**
     * 重复周期，不传则不重复，仅生效一次 允许值： PER_MONDAY；PER_TUESDAY；PER_WEDNESDAY；PER_THURSDAY；PER_FRIDAY：PER_SATURDAY；PER_SUNDAY；EVERY_DAY
     * @var \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay[]
     */
    protected ?array $repeatDay = null;

    /**
     * 起量时间， 重复周期不传时，格式为yyyy-mm-dd HH:MM 传重复周期时，格式为HH:MM
     * @return string
     */
    public function getRaiseTime(): ?string
    {
        return $this->raiseTime;
    }

    /**
     * 起量时间， 重复周期不传时，格式为yyyy-mm-dd HH:MM 传重复周期时，格式为HH:MM
     * @param string $raiseTime
     * @return self
     */
    public function setRaiseTime(?string $raiseTime): self
    {
        $this->raiseTime = $raiseTime;
        return $this;
    }

    /**
     * 重复周期，不传则不重复，仅生效一次 允许值： PER_MONDAY；PER_TUESDAY；PER_WEDNESDAY；PER_THURSDAY；PER_FRIDAY：PER_SATURDAY；PER_SUNDAY；EVERY_DAY
     * @return \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay[]
     */
    public function getRepeatDay(): ?array
    {
        return $this->repeatDay;
    }

    /**
     * 重复周期，不传则不重复，仅生效一次 允许值： PER_MONDAY；PER_TUESDAY；PER_WEDNESDAY；PER_THURSDAY；PER_FRIDAY：PER_SATURDAY；PER_SUNDAY；EVERY_DAY
     * @param \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay[] $repeatDay
     * @return self
     */
    public function setRepeatDay(?array $repeatDay): self
    {
        $this->repeatDay = $repeatDay;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->raiseTime !== null) {
            $result['raise_time'] = $this->raiseTime;
        }
        if ($this->repeatDay !== null) {
            $result['repeat_day'] = $this->repeatDay;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['raise_time'] ?? null) !== null) {
            $obj->raiseTime = (string) $v;
        }
        if (($v = $data['repeat_day'] ?? null) !== null && is_array($v)) {
            $obj->repeatDay = $v;
        }
        return $obj;
    }
}
