<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfoAppointTime implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var string
     */
    protected ?string $raiseTime = null;

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaiseTime(): ?string
    {
        return $this->raiseTime;
    }

    /**
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
