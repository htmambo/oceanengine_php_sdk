<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderReportV30FilterOrderCreateTime implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $beginTime = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @return string
     */
    public function getBeginTime(): ?string
    {
        return $this->beginTime;
    }

    /**
     * @param string $beginTime
     * @return self
     */
    public function setBeginTime(?string $beginTime): self
    {
        $this->beginTime = $beginTime;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->beginTime !== null) {
            $result['begin_time'] = $this->beginTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['begin_time'] ?? null) !== null) {
            $obj->beginTime = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        return $obj;
    }
}
