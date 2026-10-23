<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseData implements \JsonSerializable
{
    /**
     * 用户姓名
     * @var string
     */
    protected ?string $name = null;

    /**
     * 所有平台会议/行业交流会/vip晚会
     * @var \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataPlatformMeetingsInner[]
     */
    protected ?array $platformMeetings = null;

    /**
     * 用户角色
     * @var int
     */
    protected ?int $role = null;

    /**
     * 用户角色名称
     * @var string
     */
    protected ?string $roleName = null;

    /**
     * 用户日程列表
     * @var \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataSchedulesInner[]
     */
    protected ?array $schedules = null;

    /**
     * 用户uid
     * @var string
     */
    protected ?string $uid = null;

    /**
     * 用户姓名
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 用户姓名
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 所有平台会议/行业交流会/vip晚会
     * @return \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataPlatformMeetingsInner[]
     */
    public function getPlatformMeetings(): ?array
    {
        return $this->platformMeetings;
    }

    /**
     * 所有平台会议/行业交流会/vip晚会
     * @param \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataPlatformMeetingsInner[] $platformMeetings
     * @return self
     */
    public function setPlatformMeetings(?array $platformMeetings): self
    {
        $this->platformMeetings = $platformMeetings;
        return $this;
    }

    /**
     * 用户角色
     * @return int
     */
    public function getRole(): ?int
    {
        return $this->role;
    }

    /**
     * 用户角色
     * @param int $role
     * @return self
     */
    public function setRole(?int $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * 用户角色名称
     * @return string
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    /**
     * 用户角色名称
     * @param string $roleName
     * @return self
     */
    public function setRoleName(?string $roleName): self
    {
        $this->roleName = $roleName;
        return $this;
    }

    /**
     * 用户日程列表
     * @return \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataSchedulesInner[]
     */
    public function getSchedules(): ?array
    {
        return $this->schedules;
    }

    /**
     * 用户日程列表
     * @param \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataSchedulesInner[] $schedules
     * @return self
     */
    public function setSchedules(?array $schedules): self
    {
        $this->schedules = $schedules;
        return $this;
    }

    /**
     * 用户uid
     * @return string
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * 用户uid
     * @param string $uid
     * @return self
     */
    public function setUid(?string $uid): self
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->platformMeetings !== null) {
            $result['platform_meetings'] = $this->platformMeetings;
        }
        if ($this->role !== null) {
            $result['role'] = $this->role;
        }
        if ($this->roleName !== null) {
            $result['role_name'] = $this->roleName;
        }
        if ($this->schedules !== null) {
            $result['schedules'] = $this->schedules;
        }
        if ($this->uid !== null) {
            $result['uid'] = $this->uid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['platform_meetings'] ?? null) !== null && is_array($v)) {
            $obj->platformMeetings = array_map(fn ($vv) => \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataPlatformMeetingsInner::fromArray($vv), $v);
        }
        if (($v = $data['role'] ?? null) !== null) {
            $obj->role = (int) $v;
        }
        if (($v = $data['role_name'] ?? null) !== null) {
            $obj->roleName = (string) $v;
        }
        if (($v = $data['schedules'] ?? null) !== null && is_array($v)) {
            $obj->schedules = array_map(fn ($vv) => \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2ResponseDataSchedulesInner::fromArray($vv), $v);
        }
        if (($v = $data['uid'] ?? null) !== null) {
            $obj->uid = (string) $v;
        }
        return $obj;
    }
}
