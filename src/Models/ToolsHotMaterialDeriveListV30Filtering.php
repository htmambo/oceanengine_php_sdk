<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveListV30Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var int[]
     */
    protected ?array $originMaterialIds = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveListV30FilteringStatuses[]
     */
    protected ?array $statuses = null;

    /**
     * @var int[]
     */
    protected ?array $taskIds = null;

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getOriginMaterialIds(): ?array
    {
        return $this->originMaterialIds;
    }

    /**
     * @param int[] $originMaterialIds
     * @return self
     */
    public function setOriginMaterialIds(?array $originMaterialIds): self
    {
        $this->originMaterialIds = $originMaterialIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveListV30FilteringStatuses[]
     */
    public function getStatuses(): ?array
    {
        return $this->statuses;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveListV30FilteringStatuses[] $statuses
     * @return self
     */
    public function setStatuses(?array $statuses): self
    {
        $this->statuses = $statuses;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->originMaterialIds !== null) {
            $result['origin_material_ids'] = $this->originMaterialIds;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->statuses !== null) {
            $result['statuses'] = $this->statuses;
        }
        if ($this->taskIds !== null) {
            $result['task_ids'] = $this->taskIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['origin_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->originMaterialIds = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['statuses'] ?? null) !== null && is_array($v)) {
            $obj->statuses = $v;
        }
        if (($v = $data['task_ids'] ?? null) !== null && is_array($v)) {
            $obj->taskIds = $v;
        }
        return $obj;
    }
}
