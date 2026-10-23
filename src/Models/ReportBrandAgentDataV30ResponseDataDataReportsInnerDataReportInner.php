<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandAgentDataV30ResponseDataDataReportsInnerDataReportInner implements \JsonSerializable
{
    /**
     * 指标名
     * @var string
     */
    protected ?string $metric = null;

    /**
     * 指标值-float类型
     * @var float
     */
    protected ?float $value = null;

    /**
     * 指标值-string类型
     * @var string
     */
    protected ?string $valueStr = null;

    /**
     * 指标名
     * @return string
     */
    public function getMetric(): ?string
    {
        return $this->metric;
    }

    /**
     * 指标名
     * @param string $metric
     * @return self
     */
    public function setMetric(?string $metric): self
    {
        $this->metric = $metric;
        return $this;
    }

    /**
     * 指标值-float类型
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * 指标值-float类型
     * @param float $value
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * 指标值-string类型
     * @return string
     */
    public function getValueStr(): ?string
    {
        return $this->valueStr;
    }

    /**
     * 指标值-string类型
     * @param string $valueStr
     * @return self
     */
    public function setValueStr(?string $valueStr): self
    {
        $this->valueStr = $valueStr;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->metric !== null) {
            $result['metric'] = $this->metric;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->valueStr !== null) {
            $result['value_str'] = $this->valueStr;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['metric'] ?? null) !== null) {
            $obj->metric = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (float) $v;
        }
        if (($v = $data['value_str'] ?? null) !== null) {
            $obj->valueStr = (string) $v;
        }
        return $obj;
    }
}
