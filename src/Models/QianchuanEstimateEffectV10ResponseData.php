<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanEstimateEffectV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $estimateEffectHigh = null;

    /**
     * @var float
     */
    protected ?float $estimateEffectLow = null;

    /**
     * @return float
     */
    public function getEstimateEffectHigh(): ?float
    {
        return $this->estimateEffectHigh;
    }

    /**
     * @param float $estimateEffectHigh
     * @return self
     */
    public function setEstimateEffectHigh(?float $estimateEffectHigh): self
    {
        $this->estimateEffectHigh = $estimateEffectHigh;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimateEffectLow(): ?float
    {
        return $this->estimateEffectLow;
    }

    /**
     * @param float $estimateEffectLow
     * @return self
     */
    public function setEstimateEffectLow(?float $estimateEffectLow): self
    {
        $this->estimateEffectLow = $estimateEffectLow;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->estimateEffectHigh !== null) {
            $result['estimate_effect_high'] = $this->estimateEffectHigh;
        }
        if ($this->estimateEffectLow !== null) {
            $result['estimate_effect_low'] = $this->estimateEffectLow;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['estimate_effect_high'] ?? null) !== null) {
            $obj->estimateEffectHigh = (float) $v;
        }
        if (($v = $data['estimate_effect_low'] ?? null) !== null) {
            $obj->estimateEffectLow = (float) $v;
        }
        return $obj;
    }
}
