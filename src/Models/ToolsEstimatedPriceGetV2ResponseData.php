<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEstimatedPriceGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $cpcPrice = null;

    /**
     * @var float
     */
    protected ?float $lowerBound = null;

    /**
     * @var float
     */
    protected ?float $upperBound = null;

    /**
     * @return float
     */
    public function getCpcPrice(): ?float
    {
        return $this->cpcPrice;
    }

    /**
     * @param float $cpcPrice
     * @return self
     */
    public function setCpcPrice(?float $cpcPrice): self
    {
        $this->cpcPrice = $cpcPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getLowerBound(): ?float
    {
        return $this->lowerBound;
    }

    /**
     * @param float $lowerBound
     * @return self
     */
    public function setLowerBound(?float $lowerBound): self
    {
        $this->lowerBound = $lowerBound;
        return $this;
    }

    /**
     * @return float
     */
    public function getUpperBound(): ?float
    {
        return $this->upperBound;
    }

    /**
     * @param float $upperBound
     * @return self
     */
    public function setUpperBound(?float $upperBound): self
    {
        $this->upperBound = $upperBound;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cpcPrice !== null) {
            $result['cpc_price'] = $this->cpcPrice;
        }
        if ($this->lowerBound !== null) {
            $result['lower_bound'] = $this->lowerBound;
        }
        if ($this->upperBound !== null) {
            $result['upper_bound'] = $this->upperBound;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cpc_price'] ?? null) !== null) {
            $obj->cpcPrice = (float) $v;
        }
        if (($v = $data['lower_bound'] ?? null) !== null) {
            $obj->lowerBound = (float) $v;
        }
        if (($v = $data['upper_bound'] ?? null) !== null) {
            $obj->upperBound = (float) $v;
        }
        return $obj;
    }
}
