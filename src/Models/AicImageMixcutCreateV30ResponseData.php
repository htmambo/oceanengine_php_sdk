<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicImageMixcutCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 任务ID，使用该ID查询任务生成结果
     * @var string
     */
    protected ?string $taskId = null;

    /**
     * 任务ID，使用该ID查询任务生成结果
     * @return string
     */
    public function getTaskId(): ?string
    {
        return $this->taskId;
    }

    /**
     * 任务ID，使用该ID查询任务生成结果
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
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (string) $v;
        }
        return $obj;
    }
}
