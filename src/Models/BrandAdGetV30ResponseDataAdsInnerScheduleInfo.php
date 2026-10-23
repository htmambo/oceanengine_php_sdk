<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerScheduleInfo implements \JsonSerializable
{
    /**
     * 本次直播用到，投放日期和投放时段，{\"20200102\": [0800, 0900]}
     * @var array<string,string[]>
     */
    protected ?array $dateWithPeriod = null;

    /**
     * 投放结束时间 \"2020-03-01\"
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 投放开始时间 \"2020-03-01\"
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 本次直播用到，投放日期和投放时段，{\"20200102\": [0800, 0900]}
     * @return array<string,string[]>
     */
    public function getDateWithPeriod(): ?array
    {
        return $this->dateWithPeriod;
    }

    /**
     * 本次直播用到，投放日期和投放时段，{\"20200102\": [0800, 0900]}
     * @param array<string,string[]> $dateWithPeriod
     * @return self
     */
    public function setDateWithPeriod(?array $dateWithPeriod): self
    {
        $this->dateWithPeriod = $dateWithPeriod;
        return $this;
    }

    /**
     * 投放结束时间 \"2020-03-01\"
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 投放结束时间 \"2020-03-01\"
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 投放开始时间 \"2020-03-01\"
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 投放开始时间 \"2020-03-01\"
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
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
