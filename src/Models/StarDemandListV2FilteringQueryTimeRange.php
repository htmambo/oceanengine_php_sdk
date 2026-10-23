<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandListV2FilteringQueryTimeRange implements \JsonSerializable
{
    /**
     * 查询时间范围的终止时间。格式yyyy-MM-dd HH:mm:ss，如 2024-08-07 01:01:01
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 查询时间范围的起始时间。 格式yyyy-MM-dd HH:mm:ss，如 2024-08-01 01:01:01
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 查询时间范围的终止时间。格式yyyy-MM-dd HH:mm:ss，如 2024-08-07 01:01:01
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 查询时间范围的终止时间。格式yyyy-MM-dd HH:mm:ss，如 2024-08-07 01:01:01
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 查询时间范围的起始时间。 格式yyyy-MM-dd HH:mm:ss，如 2024-08-01 01:01:01
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 查询时间范围的起始时间。 格式yyyy-MM-dd HH:mm:ss，如 2024-08-01 01:01:01
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
