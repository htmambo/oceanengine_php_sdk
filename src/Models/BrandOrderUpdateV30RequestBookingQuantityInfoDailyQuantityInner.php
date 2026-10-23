<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderUpdateV30RequestBookingQuantityInfoDailyQuantityInner implements \JsonSerializable
{
    /**
     * 投放日期，格式：yyyy-MM-dd，例：2023-09-08
     * @var string
     */
    protected ?string $date = null;

    /**
     * 分时段信息，格式：[\"09:00\",\"24:00\"]
     * @var string[]
     */
    protected ?array $period = null;

    /**
     * 预订量
     * @var float
     */
    protected ?float $quantity = null;

    /**
     * 投放日期，格式：yyyy-MM-dd，例：2023-09-08
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 投放日期，格式：yyyy-MM-dd，例：2023-09-08
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 分时段信息，格式：[\"09:00\",\"24:00\"]
     * @return string[]
     */
    public function getPeriod(): ?array
    {
        return $this->period;
    }

    /**
     * 分时段信息，格式：[\"09:00\",\"24:00\"]
     * @param string[] $period
     * @return self
     */
    public function setPeriod(?array $period): self
    {
        $this->period = $period;
        return $this;
    }

    /**
     * 预订量
     * @return float
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * 预订量
     * @param float $quantity
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;
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
        if ($this->quantity !== null) {
            $result['quantity'] = $this->quantity;
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
        if (($v = $data['quantity'] ?? null) !== null) {
            $obj->quantity = (float) $v;
        }
        return $obj;
    }
}
