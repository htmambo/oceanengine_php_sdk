<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityOpenMaterialAuditV30ResponseData implements \JsonSerializable
{
    /**
     * 每次送审自动生成的对象id
     * @var int
     */
    protected ?int $objectId = null;

    /**
     * 送审是否成功
     * @var bool
     */
    protected ?bool $result = null;

    /**
     * 链路task_id，每次送审生成一个唯一值，贯穿全流程
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 每次送审自动生成的对象id
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * 每次送审自动生成的对象id
     * @param int $objectId
     * @return self
     */
    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * 送审是否成功
     * @return bool
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }

    /**
     * 送审是否成功
     * @param bool $result
     * @return self
     */
    public function setResult(?bool $result): self
    {
        $this->result = $result;
        return $this;
    }

    /**
     * 链路task_id，每次送审生成一个唯一值，贯穿全流程
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 链路task_id，每次送审生成一个唯一值，贯穿全流程
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
        if ($this->objectId !== null) {
            $result['object_id'] = $this->objectId;
        }
        if ($this->result !== null) {
            $result['result'] = $this->result;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['object_id'] ?? null) !== null) {
            $obj->objectId = (int) $v;
        }
        if (($v = $data['result'] ?? null) !== null) {
            $obj->result = (bool) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
