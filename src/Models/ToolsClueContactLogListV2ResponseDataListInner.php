<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueContactLogListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 坐席ID
     * @var string
     */
    protected ?string $agentId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueContactLogListV2DataListCallDirection
     */
    protected ?string $callDirection = null;

    /**
     * 呼叫时长 （注：呼叫时长不包含通话时长）
     * @var float
     */
    protected ?float $callDuration = null;

    /**
     * 被叫号码
     * @var string
     */
    protected ?string $calleeNumber = null;

    /**
     * 主叫号码
     * @var string
     */
    protected ?string $callerNumber = null;

    /**
     * 线索ID
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * 通话记录ID
     * @var string
     */
    protected ?string $contactId = null;

    /**
     * 通话类型
     * @var int
     */
    protected ?int $contactType = null;

    /**
     * 通话时长
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 通话结束状态
     * @var int
     */
    protected ?int $endStateShowCode = null;

    /**
     * 通话状态信息
     * @var string
     */
    protected ?string $endStateShowMsg = null;

    /**
     * 结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 员工ID
     * @var int
     */
    protected ?int $userId = null;

    /**
     * 中间号
     * @var string
     */
    protected ?string $virtualNumber = null;

    /**
     * 坐席ID
     * @return string
     */
    public function getAgentId(): ?string
    {
        return $this->agentId;
    }

    /**
     * 坐席ID
     * @param string $agentId
     * @return self
     */
    public function setAgentId(?string $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueContactLogListV2DataListCallDirection
     */
    public function getCallDirection(): ?string
    {
        return $this->callDirection;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueContactLogListV2DataListCallDirection $callDirection
     * @return self
     */
    public function setCallDirection(?string $callDirection): self
    {
        $this->callDirection = $callDirection;
        return $this;
    }

    /**
     * 呼叫时长 （注：呼叫时长不包含通话时长）
     * @return float
     */
    public function getCallDuration(): ?float
    {
        return $this->callDuration;
    }

    /**
     * 呼叫时长 （注：呼叫时长不包含通话时长）
     * @param float $callDuration
     * @return self
     */
    public function setCallDuration(?float $callDuration): self
    {
        $this->callDuration = $callDuration;
        return $this;
    }

    /**
     * 被叫号码
     * @return string
     */
    public function getCalleeNumber(): ?string
    {
        return $this->calleeNumber;
    }

    /**
     * 被叫号码
     * @param string $calleeNumber
     * @return self
     */
    public function setCalleeNumber(?string $calleeNumber): self
    {
        $this->calleeNumber = $calleeNumber;
        return $this;
    }

    /**
     * 主叫号码
     * @return string
     */
    public function getCallerNumber(): ?string
    {
        return $this->callerNumber;
    }

    /**
     * 主叫号码
     * @param string $callerNumber
     * @return self
     */
    public function setCallerNumber(?string $callerNumber): self
    {
        $this->callerNumber = $callerNumber;
        return $this;
    }

    /**
     * 线索ID
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * 线索ID
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * 通话记录ID
     * @return string
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * 通话记录ID
     * @param string $contactId
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * 通话类型
     * @return int
     */
    public function getContactType(): ?int
    {
        return $this->contactType;
    }

    /**
     * 通话类型
     * @param int $contactType
     * @return self
     */
    public function setContactType(?int $contactType): self
    {
        $this->contactType = $contactType;
        return $this;
    }

    /**
     * 通话时长
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 通话时长
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 通话结束状态
     * @return int
     */
    public function getEndStateShowCode(): ?int
    {
        return $this->endStateShowCode;
    }

    /**
     * 通话结束状态
     * @param int $endStateShowCode
     * @return self
     */
    public function setEndStateShowCode(?int $endStateShowCode): self
    {
        $this->endStateShowCode = $endStateShowCode;
        return $this;
    }

    /**
     * 通话状态信息
     * @return string
     */
    public function getEndStateShowMsg(): ?string
    {
        return $this->endStateShowMsg;
    }

    /**
     * 通话状态信息
     * @param string $endStateShowMsg
     * @return self
     */
    public function setEndStateShowMsg(?string $endStateShowMsg): self
    {
        $this->endStateShowMsg = $endStateShowMsg;
        return $this;
    }

    /**
     * 结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 开始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 员工ID
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * 员工ID
     * @param int $userId
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * 中间号
     * @return string
     */
    public function getVirtualNumber(): ?string
    {
        return $this->virtualNumber;
    }

    /**
     * 中间号
     * @param string $virtualNumber
     * @return self
     */
    public function setVirtualNumber(?string $virtualNumber): self
    {
        $this->virtualNumber = $virtualNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->callDirection !== null) {
            $result['call_direction'] = $this->callDirection;
        }
        if ($this->callDuration !== null) {
            $result['call_duration'] = $this->callDuration;
        }
        if ($this->calleeNumber !== null) {
            $result['callee_number'] = $this->calleeNumber;
        }
        if ($this->callerNumber !== null) {
            $result['caller_number'] = $this->callerNumber;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->contactId !== null) {
            $result['contact_id'] = $this->contactId;
        }
        if ($this->contactType !== null) {
            $result['contact_type'] = $this->contactType;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->endStateShowCode !== null) {
            $result['end_state_show_code'] = $this->endStateShowCode;
        }
        if ($this->endStateShowMsg !== null) {
            $result['end_state_show_msg'] = $this->endStateShowMsg;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->userId !== null) {
            $result['user_id'] = $this->userId;
        }
        if ($this->virtualNumber !== null) {
            $result['virtual_number'] = $this->virtualNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (string) $v;
        }
        if (($v = $data['call_direction'] ?? null) !== null) {
            $obj->callDirection = (string) $v;
        }
        if (($v = $data['call_duration'] ?? null) !== null) {
            $obj->callDuration = (float) $v;
        }
        if (($v = $data['callee_number'] ?? null) !== null) {
            $obj->calleeNumber = (string) $v;
        }
        if (($v = $data['caller_number'] ?? null) !== null) {
            $obj->callerNumber = (string) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (int) $v;
        }
        if (($v = $data['contact_id'] ?? null) !== null) {
            $obj->contactId = (string) $v;
        }
        if (($v = $data['contact_type'] ?? null) !== null) {
            $obj->contactType = (int) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['end_state_show_code'] ?? null) !== null) {
            $obj->endStateShowCode = (int) $v;
        }
        if (($v = $data['end_state_show_msg'] ?? null) !== null) {
            $obj->endStateShowMsg = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['user_id'] ?? null) !== null) {
            $obj->userId = (int) $v;
        }
        if (($v = $data['virtual_number'] ?? null) !== null) {
            $obj->virtualNumber = (string) $v;
        }
        return $obj;
    }
}
