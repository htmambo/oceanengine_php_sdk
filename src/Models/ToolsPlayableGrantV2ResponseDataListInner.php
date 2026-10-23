<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableGrantV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 推送目标（广告主ID）
     * @var int
     */
    protected ?int $grantedId = null;

    /**
     * 推送任务id，可通过【查询推送结果】接口获取任务推送结果
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 推送目标（广告主ID）
     * @return int
     */
    public function getGrantedId(): ?int
    {
        return $this->grantedId;
    }

    /**
     * 推送目标（广告主ID）
     * @param int $grantedId
     * @return self
     */
    public function setGrantedId(?int $grantedId): self
    {
        $this->grantedId = $grantedId;
        return $this;
    }

    /**
     * 推送任务id，可通过【查询推送结果】接口获取任务推送结果
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 推送任务id，可通过【查询推送结果】接口获取任务推送结果
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->grantedId !== null) {
            $result['granted_id'] = $this->grantedId;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['granted_id'] ?? null) !== null) {
            $obj->grantedId = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
