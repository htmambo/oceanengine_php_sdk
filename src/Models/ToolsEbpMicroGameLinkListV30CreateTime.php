<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMicroGameLinkListV30CreateTime implements \JsonSerializable
{
    /**
     * 结束时间 <= 格林威治时间（GMT）的秒
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 开始时间 >= 格林威治时间（GMT）的秒
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 结束时间 <= 格林威治时间（GMT）的秒
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束时间 <= 格林威治时间（GMT）的秒
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 开始时间 >= 格林威治时间（GMT）的秒
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 开始时间 >= 格林威治时间（GMT）的秒
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
