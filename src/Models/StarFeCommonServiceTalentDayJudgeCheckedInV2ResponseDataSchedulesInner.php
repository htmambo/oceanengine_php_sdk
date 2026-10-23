<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataSchedulesInner implements \JsonSerializable
{
    /**
     * 结束时间戳(毫秒)
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * 会议ID or 撮合会议ID
     * @var string
     */
    protected ?string $id = null;

    /**
     * 会议名称
     * @var string
     */
    protected ?string $meetingName = null;

    /**
     * 会议类型
     * @var int
     */
    protected ?int $meetingType = null;

    /**
     * 开始时间戳(毫秒)
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * 结束时间戳(毫秒)
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * 结束时间戳(毫秒)
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 会议ID or 撮合会议ID
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 会议ID or 撮合会议ID
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 会议名称
     * @return string
     */
    public function getMeetingName(): ?string
    {
        return $this->meetingName;
    }

    /**
     * 会议名称
     * @param string $meetingName
     * @return self
     */
    public function setMeetingName(?string $meetingName): self
    {
        $this->meetingName = $meetingName;
        return $this;
    }

    /**
     * 会议类型
     * @return int
     */
    public function getMeetingType(): ?int
    {
        return $this->meetingType;
    }

    /**
     * 会议类型
     * @param int $meetingType
     * @return self
     */
    public function setMeetingType(?int $meetingType): self
    {
        $this->meetingType = $meetingType;
        return $this;
    }

    /**
     * 开始时间戳(毫秒)
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * 开始时间戳(毫秒)
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->meetingName !== null) {
            $result['meeting_name'] = $this->meetingName;
        }
        if ($this->meetingType !== null) {
            $result['meeting_type'] = $this->meetingType;
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
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['meeting_name'] ?? null) !== null) {
            $obj->meetingName = (string) $v;
        }
        if (($v = $data['meeting_type'] ?? null) !== null) {
            $obj->meetingType = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (int) $v;
        }
        return $obj;
    }
}
