<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeListV2ResponseDataChallengeTasksInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $authorTaskName = null;

    /**
     * @var int
     */
    protected ?int $challengeAuditStatus = null;

    /**
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * @var int
     */
    protected ?int $challengeTaskStatus = null;

    /**
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * @return string
     */
    public function getAuthorTaskName(): ?string
    {
        return $this->authorTaskName;
    }

    /**
     * @param string $authorTaskName
     * @return self
     */
    public function setAuthorTaskName(?string $authorTaskName): self
    {
        $this->authorTaskName = $authorTaskName;
        return $this;
    }

    /**
     * @return int
     */
    public function getChallengeAuditStatus(): ?int
    {
        return $this->challengeAuditStatus;
    }

    /**
     * @param int $challengeAuditStatus
     * @return self
     */
    public function setChallengeAuditStatus(?int $challengeAuditStatus): self
    {
        $this->challengeAuditStatus = $challengeAuditStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getChallengeTaskId(): ?int
    {
        return $this->challengeTaskId;
    }

    /**
     * @param int $challengeTaskId
     * @return self
     */
    public function setChallengeTaskId(?int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
        return $this;
    }

    /**
     * @return int
     */
    public function getChallengeTaskStatus(): ?int
    {
        return $this->challengeTaskStatus;
    }

    /**
     * @param int $challengeTaskStatus
     * @return self
     */
    public function setChallengeTaskStatus(?int $challengeTaskStatus): self
    {
        $this->challengeTaskStatus = $challengeTaskStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
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
        if ($this->authorTaskName !== null) {
            $result['author_task_name'] = $this->authorTaskName;
        }
        if ($this->challengeAuditStatus !== null) {
            $result['challenge_audit_status'] = $this->challengeAuditStatus;
        }
        if ($this->challengeTaskId !== null) {
            $result['challenge_task_id'] = $this->challengeTaskId;
        }
        if ($this->challengeTaskStatus !== null) {
            $result['challenge_task_status'] = $this->challengeTaskStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_task_name'] ?? null) !== null) {
            $obj->authorTaskName = (string) $v;
        }
        if (($v = $data['challenge_audit_status'] ?? null) !== null) {
            $obj->challengeAuditStatus = (int) $v;
        }
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['challenge_task_status'] ?? null) !== null) {
            $obj->challengeTaskStatus = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (int) $v;
        }
        return $obj;
    }
}
