<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarTaskListByProjectV2ResponseDataProjectTasksInner implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $isFromApi = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var int
     */
    protected ?int $taskCategory = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @return bool
     */
    public function getIsFromApi(): ?bool
    {
        return $this->isFromApi;
    }

    /**
     * @param bool $isFromApi
     * @return self
     */
    public function setIsFromApi(?bool $isFromApi): self
    {
        $this->isFromApi = $isFromApi;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskCategory(): ?int
    {
        return $this->taskCategory;
    }

    /**
     * @param int $taskCategory
     * @return self
     */
    public function setTaskCategory(?int $taskCategory): self
    {
        $this->taskCategory = $taskCategory;
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
        if ($this->isFromApi !== null) {
            $result['is_from_api'] = $this->isFromApi;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->taskCategory !== null) {
            $result['task_category'] = $this->taskCategory;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_from_api'] ?? null) !== null) {
            $obj->isFromApi = (bool) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['task_category'] ?? null) !== null) {
            $obj->taskCategory = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
