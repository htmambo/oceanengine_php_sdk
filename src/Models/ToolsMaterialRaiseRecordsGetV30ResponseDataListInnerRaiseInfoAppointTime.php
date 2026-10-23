<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseRecordsGetV30ResponseDataListInnerRaiseInfoAppointTime implements \JsonSerializable
{
    /**
     * 起量任务预计结束时间（若状态为结束起量，返回的是实际结束时间）
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 创建起量任务成功的时间
     * @var string
     */
    protected ?string $raiseTime = null;

    /**
     * 起量任务预计结束时间（若状态为结束起量，返回的是实际结束时间）
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 起量任务预计结束时间（若状态为结束起量，返回的是实际结束时间）
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 创建起量任务成功的时间
     * @return string
     */
    public function getRaiseTime(): ?string
    {
        return $this->raiseTime;
    }

    /**
     * 创建起量任务成功的时间
     * @param string $raiseTime
     * @return self
     */
    public function setRaiseTime(?string $raiseTime): self
    {
        $this->raiseTime = $raiseTime;
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
        if ($this->raiseTime !== null) {
            $result['raise_time'] = $this->raiseTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['raise_time'] ?? null) !== null) {
            $obj->raiseTime = (string) $v;
        }
        return $obj;
    }
}
