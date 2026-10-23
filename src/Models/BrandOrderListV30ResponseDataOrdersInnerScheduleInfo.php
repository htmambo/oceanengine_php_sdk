<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerScheduleInfo implements \JsonSerializable
{
    /**
     * 投放时段
     * @var array<string,string[]>
     */
    protected ?array $dateWithPeriod = null;

    /**
     * 投放日期
     * @var string[]
     */
    protected ?array $dates = null;

    /**
     * 投放结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 投放开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 投放时段
     * @return array<string,string[]>
     */
    public function getDateWithPeriod(): ?array
    {
        return $this->dateWithPeriod;
    }

    /**
     * 投放时段
     * @param array<string,string[]> $dateWithPeriod
     * @return self
     */
    public function setDateWithPeriod(?array $dateWithPeriod): self
    {
        $this->dateWithPeriod = $dateWithPeriod;
        return $this;
    }

    /**
     * 投放日期
     * @return string[]
     */
    public function getDates(): ?array
    {
        return $this->dates;
    }

    /**
     * 投放日期
     * @param string[] $dates
     * @return self
     */
    public function setDates(?array $dates): self
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * 投放结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 投放结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 投放开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 投放开始时间
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
        if ($this->dateWithPeriod !== null) {
            $result['date_with_period'] = $this->dateWithPeriod;
        }
        if ($this->dates !== null) {
            $result['dates'] = $this->dates;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['date_with_period'] ?? null) !== null && is_array($v)) {
            $obj->dateWithPeriod = $v;
        }
        if (($v = $data['dates'] ?? null) !== null && is_array($v)) {
            $obj->dates = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
