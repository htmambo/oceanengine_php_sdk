<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class IosAppListV30PublishTime implements \JsonSerializable
{
    /**
     * 发布结束时间，格式为秒时间戳
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * 查询起始日期，格式为秒时间戳
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * 发布结束时间，格式为秒时间戳
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * 发布结束时间，格式为秒时间戳
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 查询起始日期，格式为秒时间戳
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * 查询起始日期，格式为秒时间戳
     * @param int $startTime
     * @return self
     */
    public function setStartTime(?int $startTime): self
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
            $obj->endTime = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (int) $v;
        }
        return $obj;
    }
}
