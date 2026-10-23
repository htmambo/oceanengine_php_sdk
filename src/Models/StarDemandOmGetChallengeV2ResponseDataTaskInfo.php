<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeV2ResponseDataTaskInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfo $challengeInfo = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoDemandInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoDemandInfo $demandInfo = null;

    /**
     * @return \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfo
     */
    public function getChallengeInfo(): ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfo
    {
        return $this->challengeInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfo $challengeInfo
     * @return self
     */
    public function setChallengeInfo(?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfo $challengeInfo): self
    {
        $this->challengeInfo = $challengeInfo;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getChallengeTaskId(): ?int
    {
        return $this->challengeTaskId;
    }

    /**
     * 任务ID
     * @param int $challengeTaskId
     * @return self
     */
    public function setChallengeTaskId(?int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoDemandInfo
     */
    public function getDemandInfo(): ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoDemandInfo
    {
        return $this->demandInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoDemandInfo $demandInfo
     * @return self
     */
    public function setDemandInfo(?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoDemandInfo $demandInfo): self
    {
        $this->demandInfo = $demandInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->challengeInfo !== null) {
            $result['challenge_info'] = $this->challengeInfo;
        }
        if ($this->challengeTaskId !== null) {
            $result['challenge_task_id'] = $this->challengeTaskId;
        }
        if ($this->demandInfo !== null) {
            $result['demand_info'] = $this->demandInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_info'] ?? null) !== null && is_array($v)) {
            $obj->challengeInfo = \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfo::fromArray($v);
        }
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['demand_info'] ?? null) !== null && is_array($v)) {
            $obj->demandInfo = \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoDemandInfo::fromArray($v);
        }
        return $obj;
    }
}
