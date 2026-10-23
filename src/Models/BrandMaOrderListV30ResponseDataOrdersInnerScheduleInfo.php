<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaOrderListV30ResponseDataOrdersInnerScheduleInfo implements \JsonSerializable
{
    /**
     * 日期类型
     * @var int
     */
    protected ?int $dateType = null;

    /**
     * 投放时段。key=yyyy-MM-dd，value=[HH:mm, HH:mm]
     * @var array<string,string[]>
     */
    protected ?array $dateWithPeriod = null;

    /**
     * 投放日期，yyyy-MM-dd
     * @var string[]
     */
    protected ?array $dates = null;

    /**
     * 日期类型
     * @return int
     */
    public function getDateType(): ?int
    {
        return $this->dateType;
    }

    /**
     * 日期类型
     * @param int $dateType
     * @return self
     */
    public function setDateType(?int $dateType): self
    {
        $this->dateType = $dateType;
        return $this;
    }

    /**
     * 投放时段。key=yyyy-MM-dd，value=[HH:mm, HH:mm]
     * @return array<string,string[]>
     */
    public function getDateWithPeriod(): ?array
    {
        return $this->dateWithPeriod;
    }

    /**
     * 投放时段。key=yyyy-MM-dd，value=[HH:mm, HH:mm]
     * @param array<string,string[]> $dateWithPeriod
     * @return self
     */
    public function setDateWithPeriod(?array $dateWithPeriod): self
    {
        $this->dateWithPeriod = $dateWithPeriod;
        return $this;
    }

    /**
     * 投放日期，yyyy-MM-dd
     * @return string[]
     */
    public function getDates(): ?array
    {
        return $this->dates;
    }

    /**
     * 投放日期，yyyy-MM-dd
     * @param string[] $dates
     * @return self
     */
    public function setDates(?array $dates): self
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dateType !== null) {
            $result['date_type'] = $this->dateType;
        }
        if ($this->dateWithPeriod !== null) {
            $result['date_with_period'] = $this->dateWithPeriod;
        }
        if ($this->dates !== null) {
            $result['dates'] = $this->dates;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['date_type'] ?? null) !== null) {
            $obj->dateType = (int) $v;
        }
        if (($v = $data['date_with_period'] ?? null) !== null && is_array($v)) {
            $obj->dateWithPeriod = $v;
        }
        if (($v = $data['dates'] ?? null) !== null && is_array($v)) {
            $obj->dates = $v;
        }
        return $obj;
    }
}
