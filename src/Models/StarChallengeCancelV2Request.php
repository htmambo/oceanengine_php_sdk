<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeCancelV2Request implements \JsonSerializable
{
    /**
     * 投稿任务ID
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * 客户星图ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 投稿任务ID
     * @return int
     */
    public function getChallengeTaskId(): ?int
    {
        return $this->challengeTaskId;
    }

    /**
     * 投稿任务ID
     * @param int $challengeTaskId
     * @return self
     */
    public function setChallengeTaskId(?int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
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
        if ($this->challengeTaskId !== null) {
            $result['challenge_task_id'] = $this->challengeTaskId;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
