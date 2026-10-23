<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30FilteringFirstStatus
     */
    protected ?string $firstStatus = null;

    /**
     * 定向调控任务名称,长度小于50字符
     * @var string
     */
    protected ?string $name = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 定向调控任务ID
     * @var int[]
     */
    protected ?array $scheduleId = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30FilteringSecondStatus
     */
    protected ?string $secondStatus = null;

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30FilteringFirstStatus
     */
    public function getFirstStatus(): ?string
    {
        return $this->firstStatus;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30FilteringFirstStatus $firstStatus
     * @return self
     */
    public function setFirstStatus(?string $firstStatus): self
    {
        $this->firstStatus = $firstStatus;
        return $this;
    }

    /**
     * 定向调控任务名称,长度小于50字符
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 定向调控任务名称,长度小于50字符
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

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
     * 定向调控任务ID
     * @return int[]
     */
    public function getScheduleId(): ?array
    {
        return $this->scheduleId;
    }

    /**
     * 定向调控任务ID
     * @param int[] $scheduleId
     * @return self
     */
    public function setScheduleId(?array $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30FilteringSecondStatus
     */
    public function getSecondStatus(): ?string
    {
        return $this->secondStatus;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30FilteringSecondStatus $secondStatus
     * @return self
     */
    public function setSecondStatus(?string $secondStatus): self
    {
        $this->secondStatus = $secondStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->firstStatus !== null) {
            $result['first_status'] = $this->firstStatus;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        if ($this->secondStatus !== null) {
            $result['second_status'] = $this->secondStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['first_status'] ?? null) !== null) {
            $obj->firstStatus = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['schedule_id'] ?? null) !== null && is_array($v)) {
            $obj->scheduleId = $v;
        }
        if (($v = $data['second_status'] ?? null) !== null) {
            $obj->secondStatus = (string) $v;
        }
        return $obj;
    }
}
