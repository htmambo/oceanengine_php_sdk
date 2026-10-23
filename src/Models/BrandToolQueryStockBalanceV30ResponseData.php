<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandToolQueryStockBalanceV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandToolQueryStockBalanceV30ResponseDataDailyQuantityInner[]
     */
    protected ?array $dailyQuantity = null;

    /**
     * @return \Oceanengine\Models\BrandToolQueryStockBalanceV30ResponseDataDailyQuantityInner[]
     */
    public function getDailyQuantity(): ?array
    {
        return $this->dailyQuantity;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryStockBalanceV30ResponseDataDailyQuantityInner[] $dailyQuantity
     * @return self
     */
    public function setDailyQuantity(?array $dailyQuantity): self
    {
        $this->dailyQuantity = $dailyQuantity;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dailyQuantity !== null) {
            $result['daily_quantity'] = $this->dailyQuantity;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['daily_quantity'] ?? null) !== null && is_array($v)) {
            $obj->dailyQuantity = array_map(fn ($vv) => \Oceanengine\Models\BrandToolQueryStockBalanceV30ResponseDataDailyQuantityInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
