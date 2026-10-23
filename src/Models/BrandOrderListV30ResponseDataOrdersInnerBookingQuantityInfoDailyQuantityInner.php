<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerBookingQuantityInfoDailyQuantityInner implements \JsonSerializable
{
    /**
     * 预定日期
     * @var string
     */
    protected ?string $date = null;

    /**
     * 分时段
     * @var string[]
     */
    protected ?array $period = null;

    /**
     * 预定量
     * @var int
     */
    protected ?int $quantity = null;

    /**
     * 预定日期
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 预定日期
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 分时段
     * @return string[]
     */
    public function getPeriod(): ?array
    {
        return $this->period;
    }

    /**
     * 分时段
     * @param string[] $period
     * @return self
     */
    public function setPeriod(?array $period): self
    {
        $this->period = $period;
        return $this;
    }

    /**
     * 预定量
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * 预定量
     * @param int $quantity
     * @return self
     */
    public function setQuantity(?int $quantity): self
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
            $obj->quantity = (int) $v;
        }
        return $obj;
    }
}
