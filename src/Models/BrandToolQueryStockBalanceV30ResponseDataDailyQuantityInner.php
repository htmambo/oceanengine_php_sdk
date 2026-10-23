<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandToolQueryStockBalanceV30ResponseDataDailyQuantityInner implements \JsonSerializable
{
    /**
     * 日期
     * @var string
     */
    protected ?string $date = null;

    /**
     * 可预定量
     * @var int
     */
    protected ?int $quantity = null;

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
     * 可预定量
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * 可预定量
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
        if (($v = $data['quantity'] ?? null) !== null) {
            $obj->quantity = (int) $v;
        }
        return $obj;
    }
}
