<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeExpandRangeV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $challengeEndTime = null;

    /**
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * @var int
     */
    protected ?int $developerId = null;

    /**
     * @var \Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRange
     */
    protected ?\Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRange $participateAuthorRange = null;

    /**
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
     * @return \Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRange
     */
    public function getParticipateAuthorRange(): ?\Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRange
    {
        return $this->participateAuthorRange;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRange $participateAuthorRange
     * @return self
     */
    public function setParticipateAuthorRange(?\Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRange $participateAuthorRange): self
    {
        $this->participateAuthorRange = $participateAuthorRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
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
        if ($this->participateAuthorRange !== null) {
            $result['participate_author_range'] = $this->participateAuthorRange;
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
        if (($v = $data['participate_author_range'] ?? null) !== null && is_array($v)) {
            $obj->participateAuthorRange = \Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRange::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
