<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInnerTaskListInner implements \JsonSerializable
{
    /**
     * 任务创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 任务ID
     * @var string
     */
    protected ?string $taskId = null;

    /**
     * 任务创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 任务创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 任务ID
     * @return string
     */
    public function getTaskId(): ?string
    {
        return $this->taskId;
    }

    /**
     * 任务ID
     * @param string $taskId
     * @return self
     */
    public function setTaskId(?string $taskId): self
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (string) $v;
        }
        return $obj;
    }
}
