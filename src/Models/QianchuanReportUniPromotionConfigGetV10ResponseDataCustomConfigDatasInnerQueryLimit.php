<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportUniPromotionConfigGetV10ResponseDataCustomConfigDatasInnerQueryLimit implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $earliestDay = null;

    /**
     * @var string
     */
    protected ?string $maxDay = null;

    /**
     * @var string
     */
    protected ?string $maxDayByDay = null;

    /**
     * @var string
     */
    protected ?string $maxDayByHour = null;

    /**
     * @var string
     */
    protected ?string $maxDimensionLimit = null;

    /**
     * @return string
     */
    public function getEarliestDay(): ?string
    {
        return $this->earliestDay;
    }

    /**
     * @param string $earliestDay
     * @return self
     */
    public function setEarliestDay(?string $earliestDay): self
    {
        $this->earliestDay = $earliestDay;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxDay(): ?string
    {
        return $this->maxDay;
    }

    /**
     * @param string $maxDay
     * @return self
     */
    public function setMaxDay(?string $maxDay): self
    {
        $this->maxDay = $maxDay;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxDayByDay(): ?string
    {
        return $this->maxDayByDay;
    }

    /**
     * @param string $maxDayByDay
     * @return self
     */
    public function setMaxDayByDay(?string $maxDayByDay): self
    {
        $this->maxDayByDay = $maxDayByDay;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxDayByHour(): ?string
    {
        return $this->maxDayByHour;
    }

    /**
     * @param string $maxDayByHour
     * @return self
     */
    public function setMaxDayByHour(?string $maxDayByHour): self
    {
        $this->maxDayByHour = $maxDayByHour;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxDimensionLimit(): ?string
    {
        return $this->maxDimensionLimit;
    }

    /**
     * @param string $maxDimensionLimit
     * @return self
     */
    public function setMaxDimensionLimit(?string $maxDimensionLimit): self
    {
        $this->maxDimensionLimit = $maxDimensionLimit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->earliestDay !== null) {
            $result['earliest_day'] = $this->earliestDay;
        }
        if ($this->maxDay !== null) {
            $result['max_day'] = $this->maxDay;
        }
        if ($this->maxDayByDay !== null) {
            $result['max_day_by_day'] = $this->maxDayByDay;
        }
        if ($this->maxDayByHour !== null) {
            $result['max_day_by_hour'] = $this->maxDayByHour;
        }
        if ($this->maxDimensionLimit !== null) {
            $result['max_dimension_limit'] = $this->maxDimensionLimit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['earliest_day'] ?? null) !== null) {
            $obj->earliestDay = (string) $v;
        }
        if (($v = $data['max_day'] ?? null) !== null) {
            $obj->maxDay = (string) $v;
        }
        if (($v = $data['max_day_by_day'] ?? null) !== null) {
            $obj->maxDayByDay = (string) $v;
        }
        if (($v = $data['max_day_by_hour'] ?? null) !== null) {
            $obj->maxDayByHour = (string) $v;
        }
        if (($v = $data['max_dimension_limit'] ?? null) !== null) {
            $obj->maxDimensionLimit = (string) $v;
        }
        return $obj;
    }
}
