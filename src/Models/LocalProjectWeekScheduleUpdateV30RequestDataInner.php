<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectWeekScheduleUpdateV30RequestDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30DataScheduleScene
     */
    protected ?string $scheduleScene = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

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
     * @return \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30DataScheduleScene
     */
    public function getScheduleScene(): ?string
    {
        return $this->scheduleScene;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30DataScheduleScene $scheduleScene
     * @return self
     */
    public function setScheduleScene(?string $scheduleScene): self
    {
        $this->scheduleScene = $scheduleScene;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
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
