<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsNoBidSuggestBidV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $estimatedConvertNumMax = null;

    /**
     * @var int
     */
    protected ?int $estimatedConvertNumMin = null;

    /**
     * @var float
     */
    protected ?float $suggestBidMax = null;

    /**
     * @var float
     */
    protected ?float $suggestBidMin = null;

    /**
     * @return int
     */
    public function getEstimatedConvertNumMax(): ?int
    {
        return $this->estimatedConvertNumMax;
    }

    /**
     * @param int $estimatedConvertNumMax
     * @return self
     */
    public function setEstimatedConvertNumMax(?int $estimatedConvertNumMax): self
    {
        $this->estimatedConvertNumMax = $estimatedConvertNumMax;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstimatedConvertNumMin(): ?int
    {
        return $this->estimatedConvertNumMin;
    }

    /**
     * @param int $estimatedConvertNumMin
     * @return self
     */
    public function setEstimatedConvertNumMin(?int $estimatedConvertNumMin): self
    {
        $this->estimatedConvertNumMin = $estimatedConvertNumMin;
        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestBidMax(): ?float
    {
        return $this->suggestBidMax;
    }

    /**
     * @param float $suggestBidMax
     * @return self
     */
    public function setSuggestBidMax(?float $suggestBidMax): self
    {
        $this->suggestBidMax = $suggestBidMax;
        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestBidMin(): ?float
    {
        return $this->suggestBidMin;
    }

    /**
     * @param float $suggestBidMin
     * @return self
     */
    public function setSuggestBidMin(?float $suggestBidMin): self
    {
        $this->suggestBidMin = $suggestBidMin;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->estimatedConvertNumMax !== null) {
            $result['estimated_convert_num_max'] = $this->estimatedConvertNumMax;
        }
        if ($this->estimatedConvertNumMin !== null) {
            $result['estimated_convert_num_min'] = $this->estimatedConvertNumMin;
        }
        if ($this->suggestBidMax !== null) {
            $result['suggest_bid_max'] = $this->suggestBidMax;
        }
        if ($this->suggestBidMin !== null) {
            $result['suggest_bid_min'] = $this->suggestBidMin;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['estimated_convert_num_max'] ?? null) !== null) {
            $obj->estimatedConvertNumMax = (int) $v;
        }
        if (($v = $data['estimated_convert_num_min'] ?? null) !== null) {
            $obj->estimatedConvertNumMin = (int) $v;
        }
        if (($v = $data['suggest_bid_max'] ?? null) !== null) {
            $obj->suggestBidMax = (float) $v;
        }
        if (($v = $data['suggest_bid_min'] ?? null) !== null) {
            $obj->suggestBidMin = (float) $v;
        }
        return $obj;
    }
}
