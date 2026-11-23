<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30AdTimeRange implements \JsonSerializable
{
    /**
     * 计划投放结束时间，格式 yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 计划投放开始时间，格式 yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 计划投放结束时间，格式 yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 计划投放结束时间，格式 yyyy-MM-dd HH:mm:ss
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 计划投放开始时间，格式 yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 计划投放开始时间，格式 yyyy-MM-dd HH:mm:ss
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
