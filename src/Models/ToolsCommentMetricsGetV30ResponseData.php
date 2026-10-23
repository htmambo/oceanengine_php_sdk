<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentMetricsGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $negativeCount = null;

    /**
     * @var float
     */
    protected ?float $negativeRate = null;

    /**
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * @return int
     */
    public function getNegativeCount(): ?int
    {
        return $this->negativeCount;
    }

    /**
     * @param int $negativeCount
     * @return self
     */
    public function setNegativeCount(?int $negativeCount): self
    {
        $this->negativeCount = $negativeCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getNegativeRate(): ?float
    {
        return $this->negativeRate;
    }

    /**
     * @param float $negativeRate
     * @return self
     */
    public function setNegativeRate(?float $negativeRate): self
    {
        $this->negativeRate = $negativeRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->negativeCount !== null) {
            $result['negative_count'] = $this->negativeCount;
        }
        if ($this->negativeRate !== null) {
            $result['negative_rate'] = $this->negativeRate;
        }
        if ($this->totalCount !== null) {
            $result['total_count'] = $this->totalCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['negative_count'] ?? null) !== null) {
            $obj->negativeCount = (int) $v;
        }
        if (($v = $data['negative_rate'] ?? null) !== null) {
            $obj->negativeRate = (float) $v;
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        return $obj;
    }
}
