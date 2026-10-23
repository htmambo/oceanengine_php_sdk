<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportCustomGetV10ResponseDataRowsInner implements \JsonSerializable
{
    /**
     * @var array<string,string>
     */
    protected ?array $dimensions = null;

    /**
     * @var array<string,string>
     */
    protected ?array $metrics = null;

    /**
     * @return array<string,string>
     */
    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    /**
     * @param array<string,string> $dimensions
     * @return self
     */
    public function setDimensions(?array $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return array<string,string>
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param array<string,string> $metrics
     * @return self
     */
    public function setMetrics(?array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dimensions !== null) {
            $result['dimensions'] = $this->dimensions;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dimensions'] ?? null) !== null && is_array($v)) {
            $obj->dimensions = $v;
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = $v;
        }
        return $obj;
    }
}
