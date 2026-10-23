<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandQueryStockV30ScheduleInfoScheduleListInner implements \JsonSerializable
{
    /**
     * 日期
     * @var string
     */
    protected ?string $date = null;

    /**
     * 时段
     * @var string[]
     */
    protected ?array $period = null;

    /**
     * 日期
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 日期
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 时段
     * @return string[]
     */
    public function getPeriod(): ?array
    {
        return $this->period;
    }

    /**
     * 时段
     * @param string[] $period
     * @return self
     */
    public function setPeriod(?array $period): self
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->period !== null) {
            $result['period'] = $this->period;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['period'] ?? null) !== null && is_array($v)) {
            $obj->period = $v;
        }
        return $obj;
    }
}
