<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreViolationEventGetV30Filtering implements \JsonSerializable
{
    /**
     * 筛选时间（结束）
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 积分违规单
     * @var int
     */
    protected ?int $eventId = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreViolationEventGetV30FilteringIllegalType
     */
    protected ?string $illegalType = null;

    /**
     * 筛选时间（开始）
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreViolationEventGetV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * 筛选时间（结束）
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 筛选时间（结束）
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 积分违规单
     * @return int
     */
    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    /**
     * 积分违规单
     * @param int $eventId
     * @return self
     */
    public function setEventId(?int $eventId): self
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreViolationEventGetV30FilteringIllegalType
     */
    public function getIllegalType(): ?string
    {
        return $this->illegalType;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreViolationEventGetV30FilteringIllegalType $illegalType
     * @return self
     */
    public function setIllegalType(?string $illegalType): self
    {
        $this->illegalType = $illegalType;
        return $this;
    }

    /**
     * 筛选时间（开始）
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 筛选时间（开始）
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreViolationEventGetV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreViolationEventGetV30FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->eventId !== null) {
            $result['event_id'] = $this->eventId;
        }
        if ($this->illegalType !== null) {
            $result['illegal_type'] = $this->illegalType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['event_id'] ?? null) !== null) {
            $obj->eventId = (int) $v;
        }
        if (($v = $data['illegal_type'] ?? null) !== null) {
            $obj->illegalType = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
