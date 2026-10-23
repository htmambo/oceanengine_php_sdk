<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInnerSpreadStatFrequencyStatsInner implements \JsonSerializable
{
    /**
     * 触达频次 eq_1 -> eq_6 代表触达1 - 6次 ge_7 代表触达7次及以上
     * @var string
     */
    protected ?string $frequency = null;

    /**
     * 周期
     * @var int
     */
    protected ?int $period = null;

    /**
     * 触达人数占总人数的比例
     * @var float
     */
    protected ?float $proportion = null;

    /**
     * 触达人数
     * @var int
     */
    protected ?int $uv = null;

    /**
     * 触达频次 eq_1 -> eq_6 代表触达1 - 6次 ge_7 代表触达7次及以上
     * @return string
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    /**
     * 触达频次 eq_1 -> eq_6 代表触达1 - 6次 ge_7 代表触达7次及以上
     * @param string $frequency
     * @return self
     */
    public function setFrequency(?string $frequency): self
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * 周期
     * @return int
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }

    /**
     * 周期
     * @param int $period
     * @return self
     */
    public function setPeriod(?int $period): self
    {
        $this->period = $period;
        return $this;
    }

    /**
     * 触达人数占总人数的比例
     * @return float
     */
    public function getProportion(): ?float
    {
        return $this->proportion;
    }

    /**
     * 触达人数占总人数的比例
     * @param float $proportion
     * @return self
     */
    public function setProportion(?float $proportion): self
    {
        $this->proportion = $proportion;
        return $this;
    }

    /**
     * 触达人数
     * @return int
     */
    public function getUv(): ?int
    {
        return $this->uv;
    }

    /**
     * 触达人数
     * @param int $uv
     * @return self
     */
    public function setUv(?int $uv): self
    {
        $this->uv = $uv;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->frequency !== null) {
            $result['frequency'] = $this->frequency;
        }
        if ($this->period !== null) {
            $result['period'] = $this->period;
        }
        if ($this->proportion !== null) {
            $result['proportion'] = $this->proportion;
        }
        if ($this->uv !== null) {
            $result['uv'] = $this->uv;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['frequency'] ?? null) !== null) {
            $obj->frequency = (string) $v;
        }
        if (($v = $data['period'] ?? null) !== null) {
            $obj->period = (int) $v;
        }
        if (($v = $data['proportion'] ?? null) !== null) {
            $obj->proportion = (float) $v;
        }
        if (($v = $data['uv'] ?? null) !== null) {
            $obj->uv = (int) $v;
        }
        return $obj;
    }
}
