<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveSubmitV30ResponseDataTasksInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var int
     */
    protected ?int $statusCode = null;

    /**
     * @var string
     */
    protected ?string $statusMessage = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return self
     */
    public function setStatusCode(?int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage(): ?string
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return self
     */
    public function setStatusMessage(?string $statusMessage): self
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
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
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->statusCode !== null) {
            $result['status_code'] = $this->statusCode;
        }
        if ($this->statusMessage !== null) {
            $result['status_message'] = $this->statusMessage;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['status_code'] ?? null) !== null) {
            $obj->statusCode = (int) $v;
        }
        if (($v = $data['status_message'] ?? null) !== null) {
            $obj->statusMessage = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
