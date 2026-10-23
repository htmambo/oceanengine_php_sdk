<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomAsyncTaskGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportCustomAsyncTaskGetV30FilteringDataTopics[]
     */
    protected ?array $dataTopics = null;

    /**
     * @var int[]
     */
    protected ?array $taskIds = null;

    /**
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * @return \Oceanengine\Models\ReportCustomAsyncTaskGetV30FilteringDataTopics[]
     */
    public function getDataTopics(): ?array
    {
        return $this->dataTopics;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomAsyncTaskGetV30FilteringDataTopics[] $dataTopics
     * @return self
     */
    public function setDataTopics(?array $dataTopics): self
    {
        $this->dataTopics = $dataTopics;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTaskIds(): ?array
    {
        return $this->taskIds;
    }

    /**
     * @param int[] $taskIds
     * @return self
     */
    public function setTaskIds(?array $taskIds): self
    {
        $this->taskIds = $taskIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataTopics !== null) {
            $result['data_topics'] = $this->dataTopics;
        }
        if ($this->taskIds !== null) {
            $result['task_ids'] = $this->taskIds;
        }
        if ($this->taskName !== null) {
            $result['task_name'] = $this->taskName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_topics'] ?? null) !== null && is_array($v)) {
            $obj->dataTopics = $v;
        }
        if (($v = $data['task_ids'] ?? null) !== null && is_array($v)) {
            $obj->taskIds = $v;
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        return $obj;
    }
}
