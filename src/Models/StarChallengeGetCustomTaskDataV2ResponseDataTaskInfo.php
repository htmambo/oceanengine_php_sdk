<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeGetCustomTaskDataV2ResponseDataTaskInfo implements \JsonSerializable
{
    /**
     * 任务ID
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * 任务状态（2，3为可选稿状态）
     * @var int
     */
    protected ?int $status = null;

    /**
     * 任务类型（4:短视频，57:直播）
     * @var int
     */
    protected ?int $taskCategory = null;

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
     * 任务状态（2，3为可选稿状态）
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 任务状态（2，3为可选稿状态）
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 任务类型（4:短视频，57:直播）
     * @return int
     */
    public function getTaskCategory(): ?int
    {
        return $this->taskCategory;
    }

    /**
     * 任务类型（4:短视频，57:直播）
     * @param int $taskCategory
     * @return self
     */
    public function setTaskCategory(?int $taskCategory): self
    {
        $this->taskCategory = $taskCategory;
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->taskCategory !== null) {
            $result['task_category'] = $this->taskCategory;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['task_category'] ?? null) !== null) {
            $obj->taskCategory = (int) $v;
        }
        return $obj;
    }
}
