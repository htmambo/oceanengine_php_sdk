<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseSetV30RequestRaiseInfoInnerAppointedTime implements \JsonSerializable
{
    /**
     * 起量时间， 重复周期不传时，格式为yyyy-mm-dd HH:MM 传重复周期时，格式为HH:MM
     * @var string
     */
    protected ?string $raiseTime = null;

    /**
     * 重复周期，不传则不重复，仅生效一次，所有枚举传入则每天重复
     * @var \Oceanengine\Models\ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay[]
     */
    protected ?array $repeatedDay = null;

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
     * 重复周期，不传则不重复，仅生效一次，所有枚举传入则每天重复
     * @return \Oceanengine\Models\ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay[]
     */
    public function getRepeatedDay(): ?array
    {
        return $this->repeatedDay;
    }

    /**
     * 重复周期，不传则不重复，仅生效一次，所有枚举传入则每天重复
     * @param \Oceanengine\Models\ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay[] $repeatedDay
     * @return self
     */
    public function setRepeatedDay(?array $repeatedDay): self
    {
        $this->repeatedDay = $repeatedDay;
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
        if ($this->repeatedDay !== null) {
            $result['repeated_day'] = $this->repeatedDay;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['raise_time'] ?? null) !== null) {
            $obj->raiseTime = (string) $v;
        }
        if (($v = $data['repeated_day'] ?? null) !== null && is_array($v)) {
            $obj->repeatedDay = $v;
        }
        return $obj;
    }
}
