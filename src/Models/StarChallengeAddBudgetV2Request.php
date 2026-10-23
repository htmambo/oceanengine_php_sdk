<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeAddBudgetV2Request implements \JsonSerializable
{
    /**
     * 追加预算金额（单位元，不低于10000）
     * @var int
     */
    protected ?int $addBudget = null;

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
     * 追加预算金额（单位元，不低于10000）
     * @return int
     */
    public function getAddBudget(): ?int
    {
        return $this->addBudget;
    }

    /**
     * 追加预算金额（单位元，不低于10000）
     * @param int $addBudget
     * @return self
     */
    public function setAddBudget(?int $addBudget): self
    {
        $this->addBudget = $addBudget;
        return $this;
    }

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
        if ($this->addBudget !== null) {
            $result['add_budget'] = $this->addBudget;
        }
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
        if (($v = $data['add_budget'] ?? null) !== null) {
            $obj->addBudget = (int) $v;
        }
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
