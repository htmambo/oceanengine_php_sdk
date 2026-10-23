<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $auditInfo = null;

    /**
     * @var int
     */
    protected ?int $challengeAuditStatus = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeBillInfo
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeBillInfo $challengeBillInfo = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfo
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfo $challengeInfo = null;

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
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfo
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfo $demandInfo = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerProgressInfo
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerProgressInfo $progressInfo = null;

    /**
     * @return string
     */
    public function getAuditInfo(): ?string
    {
        return $this->auditInfo;
    }

    /**
     * @param string $auditInfo
     * @return self
     */
    public function setAuditInfo(?string $auditInfo): self
    {
        $this->auditInfo = $auditInfo;
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
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeBillInfo
     */
    public function getChallengeBillInfo(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeBillInfo
    {
        return $this->challengeBillInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeBillInfo $challengeBillInfo
     * @return self
     */
    public function setChallengeBillInfo(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeBillInfo $challengeBillInfo): self
    {
        $this->challengeBillInfo = $challengeBillInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfo
     */
    public function getChallengeInfo(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfo
    {
        return $this->challengeInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfo $challengeInfo
     * @return self
     */
    public function setChallengeInfo(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfo $challengeInfo): self
    {
        $this->challengeInfo = $challengeInfo;
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
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfo
     */
    public function getDemandInfo(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfo
    {
        return $this->demandInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfo $demandInfo
     * @return self
     */
    public function setDemandInfo(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfo $demandInfo): self
    {
        $this->demandInfo = $demandInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerProgressInfo
     */
    public function getProgressInfo(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerProgressInfo
    {
        return $this->progressInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerProgressInfo $progressInfo
     * @return self
     */
    public function setProgressInfo(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerProgressInfo $progressInfo): self
    {
        $this->progressInfo = $progressInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditInfo !== null) {
            $result['audit_info'] = $this->auditInfo;
        }
        if ($this->challengeAuditStatus !== null) {
            $result['challenge_audit_status'] = $this->challengeAuditStatus;
        }
        if ($this->challengeBillInfo !== null) {
            $result['challenge_bill_info'] = $this->challengeBillInfo;
        }
        if ($this->challengeInfo !== null) {
            $result['challenge_info'] = $this->challengeInfo;
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
        if ($this->demandInfo !== null) {
            $result['demand_info'] = $this->demandInfo;
        }
        if ($this->progressInfo !== null) {
            $result['progress_info'] = $this->progressInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_info'] ?? null) !== null) {
            $obj->auditInfo = (string) $v;
        }
        if (($v = $data['challenge_audit_status'] ?? null) !== null) {
            $obj->challengeAuditStatus = (int) $v;
        }
        if (($v = $data['challenge_bill_info'] ?? null) !== null && is_array($v)) {
            $obj->challengeBillInfo = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeBillInfo::fromArray($v);
        }
        if (($v = $data['challenge_info'] ?? null) !== null && is_array($v)) {
            $obj->challengeInfo = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfo::fromArray($v);
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
        if (($v = $data['demand_info'] ?? null) !== null && is_array($v)) {
            $obj->demandInfo = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfo::fromArray($v);
        }
        if (($v = $data['progress_info'] ?? null) !== null && is_array($v)) {
            $obj->progressInfo = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerProgressInfo::fromArray($v);
        }
        return $obj;
    }
}
