<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseCreateV30RequestRaiseInfoAppointTime implements \JsonSerializable
{
    /**
     * 结束时间 格式：yyyy-mm-dd hh:mm
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 结束时间 格式：yyyy-mm-dd hh:mm
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束时间 格式：yyyy-mm-dd hh:mm
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        return $obj;
    }
}
