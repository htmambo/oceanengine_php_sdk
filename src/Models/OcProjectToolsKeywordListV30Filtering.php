<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsKeywordListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectToolsKeywordListV30FilteringFirstStatus
     */
    protected ?string $firstStatus = null;

    /**
     * 定向调控任务名称,长度小于50字符
     * @var string
     */
    protected ?string $name = null;

    /**
     * 项目IDs,list <= 100（待定）
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 定向调控任务ID
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsKeywordListV30FilteringSecondStatus
     */
    protected ?string $secondStatus = null;

    /**
     * @var string
     */
    protected ?string $word = null;

    /**
     * @return \Oceanengine\Models\OcProjectToolsKeywordListV30FilteringFirstStatus
     */
    public function getFirstStatus(): ?string
    {
        return $this->firstStatus;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsKeywordListV30FilteringFirstStatus $firstStatus
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
     * 项目IDs,list <= 100（待定）
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目IDs,list <= 100（待定）
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
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * 定向调控任务ID
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsKeywordListV30FilteringSecondStatus
     */
    public function getSecondStatus(): ?string
    {
        return $this->secondStatus;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsKeywordListV30FilteringSecondStatus $secondStatus
     * @return self
     */
    public function setSecondStatus(?string $secondStatus): self
    {
        $this->secondStatus = $secondStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getWord(): ?string
    {
        return $this->word;
    }

    /**
     * @param string $word
     * @return self
     */
    public function setWord(?string $word): self
    {
        $this->word = $word;
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
        if ($this->word !== null) {
            $result['word'] = $this->word;
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
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        if (($v = $data['second_status'] ?? null) !== null) {
            $obj->secondStatus = (string) $v;
        }
        if (($v = $data['word'] ?? null) !== null) {
            $obj->word = (string) $v;
        }
        return $obj;
    }
}
