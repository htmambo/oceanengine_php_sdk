<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBidsSuggestV30ResponseDataData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $bidHigh30 = null;

    /**
     * @var float
     */
    protected ?float $bidHigh50 = null;

    /**
     * @var float
     */
    protected ?float $bidHigh90 = null;

    /**
     * 建议出价（0表示无建议出价）
     * @var float
     */
    protected ?float $suggestBid = null;

    /**
     * 建议ROI系数（0表示无建议出价）
     * @var float
     */
    protected ?float $suggestRoiGoal = null;

    /**
     * @return float
     */
    public function getBidHigh30(): ?float
    {
        return $this->bidHigh30;
    }

    /**
     * @param float $bidHigh30
     * @return self
     */
    public function setBidHigh30(?float $bidHigh30): self
    {
        $this->bidHigh30 = $bidHigh30;
        return $this;
    }

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
     * 建议出价（0表示无建议出价）
     * @return float
     */
    public function getSuggestBid(): ?float
    {
        return $this->suggestBid;
    }

    /**
     * 建议出价（0表示无建议出价）
     * @param float $suggestBid
     * @return self
     */
    public function setSuggestBid(?float $suggestBid): self
    {
        $this->suggestBid = $suggestBid;
        return $this;
    }

    /**
     * 建议ROI系数（0表示无建议出价）
     * @return float
     */
    public function getSuggestRoiGoal(): ?float
    {
        return $this->suggestRoiGoal;
    }

    /**
     * 建议ROI系数（0表示无建议出价）
     * @param float $suggestRoiGoal
     * @return self
     */
    public function setSuggestRoiGoal(?float $suggestRoiGoal): self
    {
        $this->suggestRoiGoal = $suggestRoiGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bidHigh30 !== null) {
            $result['bid_high_30'] = $this->bidHigh30;
        }
        if ($this->bidHigh50 !== null) {
            $result['bid_high_50'] = $this->bidHigh50;
        }
        if ($this->bidHigh90 !== null) {
            $result['bid_high_90'] = $this->bidHigh90;
        }
        if ($this->suggestBid !== null) {
            $result['suggest_bid'] = $this->suggestBid;
        }
        if ($this->suggestRoiGoal !== null) {
            $result['suggest_roi_goal'] = $this->suggestRoiGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid_high_30'] ?? null) !== null) {
            $obj->bidHigh30 = (float) $v;
        }
        if (($v = $data['bid_high_50'] ?? null) !== null) {
            $obj->bidHigh50 = (float) $v;
        }
        if (($v = $data['bid_high_90'] ?? null) !== null) {
            $obj->bidHigh90 = (float) $v;
        }
        if (($v = $data['suggest_bid'] ?? null) !== null) {
            $obj->suggestBid = (float) $v;
        }
        if (($v = $data['suggest_roi_goal'] ?? null) !== null) {
            $obj->suggestRoiGoal = (float) $v;
        }
        return $obj;
    }
}
