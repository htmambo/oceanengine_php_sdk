<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeEstimateProfitV10ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $maxProfit = null;

    /**
     * @var int
     */
    protected ?int $minProfit = null;

    /**
     * @return int
     */
    public function getMaxProfit(): ?int
    {
        return $this->maxProfit;
    }

    /**
     * @param int $maxProfit
     * @return self
     */
    public function setMaxProfit(?int $maxProfit): self
    {
        $this->maxProfit = $maxProfit;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinProfit(): ?int
    {
        return $this->minProfit;
    }

    /**
     * @param int $minProfit
     * @return self
     */
    public function setMinProfit(?int $minProfit): self
    {
        $this->minProfit = $minProfit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->maxProfit !== null) {
            $result['max_profit'] = $this->maxProfit;
        }
        if ($this->minProfit !== null) {
            $result['min_profit'] = $this->minProfit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['max_profit'] ?? null) !== null) {
            $obj->maxProfit = (int) $v;
        }
        if (($v = $data['min_profit'] ?? null) !== null) {
            $obj->minProfit = (int) $v;
        }
        return $obj;
    }
}
