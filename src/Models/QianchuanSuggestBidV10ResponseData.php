<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanSuggestBidV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $suggestBidHigh = null;

    /**
     * @var float
     */
    protected ?float $suggestBidLow = null;

    /**
     * @return float
     */
    public function getSuggestBidHigh(): ?float
    {
        return $this->suggestBidHigh;
    }

    /**
     * @param float $suggestBidHigh
     * @return self
     */
    public function setSuggestBidHigh(?float $suggestBidHigh): self
    {
        $this->suggestBidHigh = $suggestBidHigh;
        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestBidLow(): ?float
    {
        return $this->suggestBidLow;
    }

    /**
     * @param float $suggestBidLow
     * @return self
     */
    public function setSuggestBidLow(?float $suggestBidLow): self
    {
        $this->suggestBidLow = $suggestBidLow;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->suggestBidHigh !== null) {
            $result['suggest_bid_high'] = $this->suggestBidHigh;
        }
        if ($this->suggestBidLow !== null) {
            $result['suggest_bid_low'] = $this->suggestBidLow;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['suggest_bid_high'] ?? null) !== null) {
            $obj->suggestBidHigh = (float) $v;
        }
        if (($v = $data['suggest_bid_low'] ?? null) !== null) {
            $obj->suggestBidLow = (float) $v;
        }
        return $obj;
    }
}
