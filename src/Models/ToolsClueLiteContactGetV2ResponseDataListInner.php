<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueLiteContactGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsClueLiteContactGetV2DataListCallDirection
     */
    protected ?string $callDirection = null;

    /**
     * @var int
     */
    protected ?int $callDuration = null;

    /**
     * @var string
     */
    protected ?string $calleeNumber = null;

    /**
     * @var string
     */
    protected ?string $callerNumber = null;

    /**
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * @var string
     */
    protected ?string $contactId = null;

    /**
     * @var int
     */
    protected ?int $duration = null;

    /**
     * @var int
     */
    protected ?int $endStateShowCode = null;

    /**
     * @var string
     */
    protected ?string $endStateShowMsg = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var string
     */
    protected ?string $virtualNumber = null;

    /**
     * @return \Oceanengine\Models\ToolsClueLiteContactGetV2DataListCallDirection
     */
    public function getCallDirection(): ?string
    {
        return $this->callDirection;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLiteContactGetV2DataListCallDirection $callDirection
     * @return self
     */
    public function setCallDirection(?string $callDirection): self
    {
        $this->callDirection = $callDirection;
        return $this;
    }

    /**
     * @return int
     */
    public function getCallDuration(): ?int
    {
        return $this->callDuration;
    }

    /**
     * @param int $callDuration
     * @return self
     */
    public function setCallDuration(?int $callDuration): self
    {
        $this->callDuration = $callDuration;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalleeNumber(): ?string
    {
        return $this->calleeNumber;
    }

    /**
     * @param string $calleeNumber
     * @return self
     */
    public function setCalleeNumber(?string $calleeNumber): self
    {
        $this->calleeNumber = $calleeNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallerNumber(): ?string
    {
        return $this->callerNumber;
    }

    /**
     * @param string $callerNumber
     * @return self
     */
    public function setCallerNumber(?string $callerNumber): self
    {
        $this->callerNumber = $callerNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * @param string $contactId
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndStateShowCode(): ?int
    {
        return $this->endStateShowCode;
    }

    /**
     * @param int $endStateShowCode
     * @return self
     */
    public function setEndStateShowCode(?int $endStateShowCode): self
    {
        $this->endStateShowCode = $endStateShowCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndStateShowMsg(): ?string
    {
        return $this->endStateShowMsg;
    }

    /**
     * @param string $endStateShowMsg
     * @return self
     */
    public function setEndStateShowMsg(?string $endStateShowMsg): self
    {
        $this->endStateShowMsg = $endStateShowMsg;
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
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getVirtualNumber(): ?string
    {
        return $this->virtualNumber;
    }

    /**
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
        if ($this->virtualNumber !== null) {
            $result['virtual_number'] = $this->virtualNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['call_direction'] ?? null) !== null) {
            $obj->callDirection = (string) $v;
        }
        if (($v = $data['call_duration'] ?? null) !== null) {
            $obj->callDuration = (int) $v;
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
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (int) $v;
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
        if (($v = $data['virtual_number'] ?? null) !== null) {
            $obj->virtualNumber = (string) $v;
        }
        return $obj;
    }
}
