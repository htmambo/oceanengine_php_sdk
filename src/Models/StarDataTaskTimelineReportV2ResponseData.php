<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDataTaskTimelineReportV2ResponseData implements \JsonSerializable
{
    /**
     * 项目数据
     * @var array<string,\Oceanengine\Models\StarDataTaskTimelineReportV2ResponseDataProjectDataValue>
     */
    protected ?array $projectData = null;

    /**
     * 任务数据
     * @var array<string,\Oceanengine\Models\StarDataTaskTimelineReportV2ResponseDataTaskDataValue>
     */
    protected ?array $taskData = null;

    /**
     * 项目数据
     * @return array<string,\Oceanengine\Models\StarDataTaskTimelineReportV2ResponseDataProjectDataValue>
     */
    public function getProjectData(): ?array
    {
        return $this->projectData;
    }

    /**
     * 项目数据
     * @param array<string,\Oceanengine\Models\StarDataTaskTimelineReportV2ResponseDataProjectDataValue> $projectData
     * @return self
     */
    public function setProjectData(?array $projectData): self
    {
        $this->projectData = $projectData;
        return $this;
    }

    /**
     * 任务数据
     * @return array<string,\Oceanengine\Models\StarDataTaskTimelineReportV2ResponseDataTaskDataValue>
     */
    public function getTaskData(): ?array
    {
        return $this->taskData;
    }

    /**
     * 任务数据
     * @param array<string,\Oceanengine\Models\StarDataTaskTimelineReportV2ResponseDataTaskDataValue> $taskData
     * @return self
     */
    public function setTaskData(?array $taskData): self
    {
        $this->taskData = $taskData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectData !== null) {
            $result['project_data'] = $this->projectData;
        }
        if ($this->taskData !== null) {
            $result['task_data'] = $this->taskData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_data'] ?? null) !== null && is_array($v)) {
            $obj->projectData = array_map(fn ($vv) => \Oceanengine\Models\StarDataTaskTimelineReportV2ResponseDataProjectDataValue::fromArray($vv), $v);
        }
        if (($v = $data['task_data'] ?? null) !== null && is_array($v)) {
            $obj->taskData = array_map(fn ($vv) => \Oceanengine\Models\StarDataTaskTimelineReportV2ResponseDataTaskDataValue::fromArray($vv), $v);
        }
        return $obj;
    }
}
