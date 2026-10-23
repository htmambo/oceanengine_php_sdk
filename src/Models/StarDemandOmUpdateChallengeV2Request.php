<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmUpdateChallengeV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestChallengeInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestChallengeInfo $challengeInfo = null;

    /**
     * 任务ID,19位数字
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestDemandInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestDemandInfo $demandInfo = null;

    /**
     * @var string
     */
    protected ?string $developerId = null;

    /**
     * 客户星图ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return \Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestChallengeInfo
     */
    public function getChallengeInfo(): ?\Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestChallengeInfo
    {
        return $this->challengeInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestChallengeInfo $challengeInfo
     * @return self
     */
    public function setChallengeInfo(?\Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestChallengeInfo $challengeInfo): self
    {
        $this->challengeInfo = $challengeInfo;
        return $this;
    }

    /**
     * 任务ID,19位数字
     * @return int
     */
    public function getChallengeTaskId(): ?int
    {
        return $this->challengeTaskId;
    }

    /**
     * 任务ID,19位数字
     * @param int $challengeTaskId
     * @return self
     */
    public function setChallengeTaskId(?int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestDemandInfo
     */
    public function getDemandInfo(): ?\Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestDemandInfo
    {
        return $this->demandInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestDemandInfo $demandInfo
     * @return self
     */
    public function setDemandInfo(?\Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestDemandInfo $demandInfo): self
    {
        $this->demandInfo = $demandInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeveloperId(): ?string
    {
        return $this->developerId;
    }

    /**
     * @param string $developerId
     * @return self
     */
    public function setDeveloperId(?string $developerId): self
    {
        $this->developerId = $developerId;
        return $this;
    }

    /**
     * 客户星图ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户星图ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
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
        if ($this->developerId !== null) {
            $result['developer_id'] = $this->developerId;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_info'] ?? null) !== null && is_array($v)) {
            $obj->challengeInfo = \Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestChallengeInfo::fromArray($v);
        }
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['demand_info'] ?? null) !== null && is_array($v)) {
            $obj->demandInfo = \Oceanengine\Models\StarDemandOmUpdateChallengeV2RequestDemandInfo::fromArray($v);
        }
        if (($v = $data['developer_id'] ?? null) !== null) {
            $obj->developerId = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
