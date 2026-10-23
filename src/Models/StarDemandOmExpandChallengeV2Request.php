<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmExpandChallengeV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $challengeEndTime = null;

    /**
     * 任务ID 19位数字
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * @var int
     */
    protected ?int $developerId = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmExpandChallengeV2RequestOmParticipateAuthorRange
     */
    protected ?\Oceanengine\Models\StarDemandOmExpandChallengeV2RequestOmParticipateAuthorRange $omParticipateAuthorRange = null;

    /**
     * 客户星图ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return int
     */
    public function getChallengeEndTime(): ?int
    {
        return $this->challengeEndTime;
    }

    /**
     * @param int $challengeEndTime
     * @return self
     */
    public function setChallengeEndTime(?int $challengeEndTime): self
    {
        $this->challengeEndTime = $challengeEndTime;
        return $this;
    }

    /**
     * 任务ID 19位数字
     * @return int
     */
    public function getChallengeTaskId(): ?int
    {
        return $this->challengeTaskId;
    }

    /**
     * 任务ID 19位数字
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
    public function getDeveloperId(): ?int
    {
        return $this->developerId;
    }

    /**
     * @param int $developerId
     * @return self
     */
    public function setDeveloperId(?int $developerId): self
    {
        $this->developerId = $developerId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmExpandChallengeV2RequestOmParticipateAuthorRange
     */
    public function getOmParticipateAuthorRange(): ?\Oceanengine\Models\StarDemandOmExpandChallengeV2RequestOmParticipateAuthorRange
    {
        return $this->omParticipateAuthorRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmExpandChallengeV2RequestOmParticipateAuthorRange $omParticipateAuthorRange
     * @return self
     */
    public function setOmParticipateAuthorRange(?\Oceanengine\Models\StarDemandOmExpandChallengeV2RequestOmParticipateAuthorRange $omParticipateAuthorRange): self
    {
        $this->omParticipateAuthorRange = $omParticipateAuthorRange;
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
        if ($this->challengeEndTime !== null) {
            $result['challenge_end_time'] = $this->challengeEndTime;
        }
        if ($this->challengeTaskId !== null) {
            $result['challenge_task_id'] = $this->challengeTaskId;
        }
        if ($this->developerId !== null) {
            $result['developer_id'] = $this->developerId;
        }
        if ($this->omParticipateAuthorRange !== null) {
            $result['om_participate_author_range'] = $this->omParticipateAuthorRange;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_end_time'] ?? null) !== null) {
            $obj->challengeEndTime = (int) $v;
        }
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['developer_id'] ?? null) !== null) {
            $obj->developerId = (int) $v;
        }
        if (($v = $data['om_participate_author_range'] ?? null) !== null && is_array($v)) {
            $obj->omParticipateAuthorRange = \Oceanengine\Models\StarDemandOmExpandChallengeV2RequestOmParticipateAuthorRange::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
