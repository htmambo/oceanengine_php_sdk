<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBidSuggestV2ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $bidHigh50 = null;

    /**
     * @var float
     */
    protected ?float $bidHigh90 = null;

    /**
     * @var float[]
     */
    protected ?array $smartBidRange = null;

    /**
     * @var int
     */
    protected ?int $smartBidSuggestBudget = null;

    /**
     * @var int[]
     */
    protected ?array $smartBudgetRange = null;

    /**
     * @var float
     */
    protected ?float $suggestedBid = null;

    /**
     * @return float
     */
    public function getBidHigh50(): ?float
    {
        return $this->bidHigh50;
    }

    /**
     * @param float $bidHigh50
     * @return self
     */
    public function setBidHigh50(?float $bidHigh50): self
    {
        $this->bidHigh50 = $bidHigh50;
        return $this;
    }

    /**
     * @return float
     */
    public function getBidHigh90(): ?float
    {
        return $this->bidHigh90;
    }

    /**
     * @param float $bidHigh90
     * @return self
     */
    public function setBidHigh90(?float $bidHigh90): self
    {
        $this->bidHigh90 = $bidHigh90;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getSmartBidRange(): ?array
    {
        return $this->smartBidRange;
    }

    /**
     * @param float[] $smartBidRange
     * @return self
     */
    public function setSmartBidRange(?array $smartBidRange): self
    {
        $this->smartBidRange = $smartBidRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getSmartBidSuggestBudget(): ?int
    {
        return $this->smartBidSuggestBudget;
    }

    /**
     * @param int $smartBidSuggestBudget
     * @return self
     */
    public function setSmartBidSuggestBudget(?int $smartBidSuggestBudget): self
    {
        $this->smartBidSuggestBudget = $smartBidSuggestBudget;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getSmartBudgetRange(): ?array
    {
        return $this->smartBudgetRange;
    }

    /**
     * @param int[] $smartBudgetRange
     * @return self
     */
    public function setSmartBudgetRange(?array $smartBudgetRange): self
    {
        $this->smartBudgetRange = $smartBudgetRange;
        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestedBid(): ?float
    {
        return $this->suggestedBid;
    }

    /**
     * @param float $suggestedBid
     * @return self
     */
    public function setSuggestedBid(?float $suggestedBid): self
    {
        $this->suggestedBid = $suggestedBid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bidHigh50 !== null) {
            $result['bid_high_50'] = $this->bidHigh50;
        }
        if ($this->bidHigh90 !== null) {
            $result['bid_high_90'] = $this->bidHigh90;
        }
        if ($this->smartBidRange !== null) {
            $result['smart_bid_range'] = $this->smartBidRange;
        }
        if ($this->smartBidSuggestBudget !== null) {
            $result['smart_bid_suggest_budget'] = $this->smartBidSuggestBudget;
        }
        if ($this->smartBudgetRange !== null) {
            $result['smart_budget_range'] = $this->smartBudgetRange;
        }
        if ($this->suggestedBid !== null) {
            $result['suggested_bid'] = $this->suggestedBid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid_high_50'] ?? null) !== null) {
            $obj->bidHigh50 = (float) $v;
        }
        if (($v = $data['bid_high_90'] ?? null) !== null) {
            $obj->bidHigh90 = (float) $v;
        }
        if (($v = $data['smart_bid_range'] ?? null) !== null && is_array($v)) {
            $obj->smartBidRange = $v;
        }
        if (($v = $data['smart_bid_suggest_budget'] ?? null) !== null) {
            $obj->smartBidSuggestBudget = (int) $v;
        }
        if (($v = $data['smart_budget_range'] ?? null) !== null && is_array($v)) {
            $obj->smartBudgetRange = $v;
        }
        if (($v = $data['suggested_bid'] ?? null) !== null) {
            $obj->suggestedBid = (float) $v;
        }
        return $obj;
    }
}
