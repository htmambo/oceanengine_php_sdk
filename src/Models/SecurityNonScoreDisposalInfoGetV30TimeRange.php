<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityNonScoreDisposalInfoGetV30TimeRange implements \JsonSerializable
{
    /**
     * 秒级时间戳，最早26年初
     * @var int
     */
    protected ?int $beginTime = null;

    /**
     * 秒级时间戳
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * 秒级时间戳，最早26年初
     * @return int
     */
    public function getBeginTime(): ?int
    {
        return $this->beginTime;
    }

    /**
     * 秒级时间戳，最早26年初
     * @param int $beginTime
     * @return self
     */
    public function setBeginTime(?int $beginTime): self
    {
        $this->beginTime = $beginTime;
        return $this;
    }

    /**
     * 秒级时间戳
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * 秒级时间戳
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
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
            $obj->beginTime = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        return $obj;
    }
}
