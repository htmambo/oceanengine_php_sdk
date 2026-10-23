<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInnerPunishmentHistoryInner implements \JsonSerializable
{
    /**
     * 惩罚截止时间
     * @var string
     */
    protected ?string $punishEndTime = null;

    /**
     * 封停日志id
     * @var int
     */
    protected ?int $punishLogId = null;

    /**
     * 惩罚原因
     * @var string
     */
    protected ?string $punishReason = null;

    /**
     * 惩罚开始时间
     * @var string
     */
    protected ?string $punishStartTime = null;

    /**
     * @var \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus
     */
    protected ?string $status = null;

    /**
     * 封停提交人ID
     * @var int
     */
    protected ?int $submitterId = null;

    /**
     * 封停提交人姓名
     * @var string
     */
    protected ?string $submitterName = null;

    /**
     * 惩罚截止时间
     * @return string
     */
    public function getPunishEndTime(): ?string
    {
        return $this->punishEndTime;
    }

    /**
     * 惩罚截止时间
     * @param string $punishEndTime
     * @return self
     */
    public function setPunishEndTime(?string $punishEndTime): self
    {
        $this->punishEndTime = $punishEndTime;
        return $this;
    }

    /**
     * 封停日志id
     * @return int
     */
    public function getPunishLogId(): ?int
    {
        return $this->punishLogId;
    }

    /**
     * 封停日志id
     * @param int $punishLogId
     * @return self
     */
    public function setPunishLogId(?int $punishLogId): self
    {
        $this->punishLogId = $punishLogId;
        return $this;
    }

    /**
     * 惩罚原因
     * @return string
     */
    public function getPunishReason(): ?string
    {
        return $this->punishReason;
    }

    /**
     * 惩罚原因
     * @param string $punishReason
     * @return self
     */
    public function setPunishReason(?string $punishReason): self
    {
        $this->punishReason = $punishReason;
        return $this;
    }

    /**
     * 惩罚开始时间
     * @return string
     */
    public function getPunishStartTime(): ?string
    {
        return $this->punishStartTime;
    }

    /**
     * 惩罚开始时间
     * @param string $punishStartTime
     * @return self
     */
    public function setPunishStartTime(?string $punishStartTime): self
    {
        $this->punishStartTime = $punishStartTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 封停提交人ID
     * @return int
     */
    public function getSubmitterId(): ?int
    {
        return $this->submitterId;
    }

    /**
     * 封停提交人ID
     * @param int $submitterId
     * @return self
     */
    public function setSubmitterId(?int $submitterId): self
    {
        $this->submitterId = $submitterId;
        return $this;
    }

    /**
     * 封停提交人姓名
     * @return string
     */
    public function getSubmitterName(): ?string
    {
        return $this->submitterName;
    }

    /**
     * 封停提交人姓名
     * @param string $submitterName
     * @return self
     */
    public function setSubmitterName(?string $submitterName): self
    {
        $this->submitterName = $submitterName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->punishEndTime !== null) {
            $result['punish_end_time'] = $this->punishEndTime;
        }
        if ($this->punishLogId !== null) {
            $result['punish_log_id'] = $this->punishLogId;
        }
        if ($this->punishReason !== null) {
            $result['punish_reason'] = $this->punishReason;
        }
        if ($this->punishStartTime !== null) {
            $result['punish_start_time'] = $this->punishStartTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->submitterId !== null) {
            $result['submitter_id'] = $this->submitterId;
        }
        if ($this->submitterName !== null) {
            $result['submitter_name'] = $this->submitterName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['punish_end_time'] ?? null) !== null) {
            $obj->punishEndTime = (string) $v;
        }
        if (($v = $data['punish_log_id'] ?? null) !== null) {
            $obj->punishLogId = (int) $v;
        }
        if (($v = $data['punish_reason'] ?? null) !== null) {
            $obj->punishReason = (string) $v;
        }
        if (($v = $data['punish_start_time'] ?? null) !== null) {
            $obj->punishStartTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['submitter_id'] ?? null) !== null) {
            $obj->submitterId = (int) $v;
        }
        if (($v = $data['submitter_name'] ?? null) !== null) {
            $obj->submitterName = (string) $v;
        }
        return $obj;
    }
}
