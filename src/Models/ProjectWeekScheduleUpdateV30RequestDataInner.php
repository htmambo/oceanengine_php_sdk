<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectWeekScheduleUpdateV30RequestDataInner implements \JsonSerializable
{
    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\ProjectWeekScheduleUpdateV30DataScheduleScene
     */
    protected ?string $scheduleScene = null;

    /**
     * 更新后的投放时段
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectWeekScheduleUpdateV30DataScheduleScene
     */
    public function getScheduleScene(): ?string
    {
        return $this->scheduleScene;
    }

    /**
     * @param \Oceanengine\Models\ProjectWeekScheduleUpdateV30DataScheduleScene $scheduleScene
     * @return self
     */
    public function setScheduleScene(?string $scheduleScene): self
    {
        $this->scheduleScene = $scheduleScene;
        return $this;
    }

    /**
     * 更新后的投放时段
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * 更新后的投放时段
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->scheduleScene !== null) {
            $result['schedule_scene'] = $this->scheduleScene;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['schedule_scene'] ?? null) !== null) {
            $obj->scheduleScene = (string) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        return $obj;
    }
}
