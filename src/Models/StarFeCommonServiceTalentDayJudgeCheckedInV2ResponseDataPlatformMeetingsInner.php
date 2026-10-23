<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataPlatformMeetingsInner implements \JsonSerializable
{
    /**
     * 日程描述
     * @var string
     */
    protected ?string $scheduleDesc = null;

    /**
     * 日程详情链接
     * @var string
     */
    protected ?string $scheduleDetailUrl = null;

    /**
     * 日程结束时间
     * @var int
     */
    protected ?int $scheduleEndTime = null;

    /**
     * 日程名称
     * @var string
     */
    protected ?string $scheduleName = null;

    /**
     * 日程开始时间
     * @var int
     */
    protected ?int $scheduleStartTime = null;

    /**
     * 日程描述
     * @return string
     */
    public function getScheduleDesc(): ?string
    {
        return $this->scheduleDesc;
    }

    /**
     * 日程描述
     * @param string $scheduleDesc
     * @return self
     */
    public function setScheduleDesc(?string $scheduleDesc): self
    {
        $this->scheduleDesc = $scheduleDesc;
        return $this;
    }

    /**
     * 日程详情链接
     * @return string
     */
    public function getScheduleDetailUrl(): ?string
    {
        return $this->scheduleDetailUrl;
    }

    /**
     * 日程详情链接
     * @param string $scheduleDetailUrl
     * @return self
     */
    public function setScheduleDetailUrl(?string $scheduleDetailUrl): self
    {
        $this->scheduleDetailUrl = $scheduleDetailUrl;
        return $this;
    }

    /**
     * 日程结束时间
     * @return int
     */
    public function getScheduleEndTime(): ?int
    {
        return $this->scheduleEndTime;
    }

    /**
     * 日程结束时间
     * @param int $scheduleEndTime
     * @return self
     */
    public function setScheduleEndTime(?int $scheduleEndTime): self
    {
        $this->scheduleEndTime = $scheduleEndTime;
        return $this;
    }

    /**
     * 日程名称
     * @return string
     */
    public function getScheduleName(): ?string
    {
        return $this->scheduleName;
    }

    /**
     * 日程名称
     * @param string $scheduleName
     * @return self
     */
    public function setScheduleName(?string $scheduleName): self
    {
        $this->scheduleName = $scheduleName;
        return $this;
    }

    /**
     * 日程开始时间
     * @return int
     */
    public function getScheduleStartTime(): ?int
    {
        return $this->scheduleStartTime;
    }

    /**
     * 日程开始时间
     * @param int $scheduleStartTime
     * @return self
     */
    public function setScheduleStartTime(?int $scheduleStartTime): self
    {
        $this->scheduleStartTime = $scheduleStartTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->scheduleDesc !== null) {
            $result['schedule_desc'] = $this->scheduleDesc;
        }
        if ($this->scheduleDetailUrl !== null) {
            $result['schedule_detail_url'] = $this->scheduleDetailUrl;
        }
        if ($this->scheduleEndTime !== null) {
            $result['schedule_end_time'] = $this->scheduleEndTime;
        }
        if ($this->scheduleName !== null) {
            $result['schedule_name'] = $this->scheduleName;
        }
        if ($this->scheduleStartTime !== null) {
            $result['schedule_start_time'] = $this->scheduleStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['schedule_desc'] ?? null) !== null) {
            $obj->scheduleDesc = (string) $v;
        }
        if (($v = $data['schedule_detail_url'] ?? null) !== null) {
            $obj->scheduleDetailUrl = (string) $v;
        }
        if (($v = $data['schedule_end_time'] ?? null) !== null) {
            $obj->scheduleEndTime = (int) $v;
        }
        if (($v = $data['schedule_name'] ?? null) !== null) {
            $obj->scheduleName = (string) $v;
        }
        if (($v = $data['schedule_start_time'] ?? null) !== null) {
            $obj->scheduleStartTime = (int) $v;
        }
        return $obj;
    }
}
