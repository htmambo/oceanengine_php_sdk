<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UniProjectListGetV30Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $projectCreateEndTime = null;

    /**
     * @var string
     */
    protected ?string $projectCreateStartTime = null;

    /**
     * @var int[]
     */
    protected ?array $projectId = null;

    /**
     * @var string
     */
    protected ?string $projectModifyEndTime = null;

    /**
     * @var string
     */
    protected ?string $projectModifyStartTime = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30FilteringStatusFirst
     */
    protected ?string $statusFirst = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30FilteringStatusSecond
     */
    protected ?string $statusSecond = null;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectCreateEndTime(): ?string
    {
        return $this->projectCreateEndTime;
    }

    /**
     * @param string $projectCreateEndTime
     * @return self
     */
    public function setProjectCreateEndTime(?string $projectCreateEndTime): self
    {
        $this->projectCreateEndTime = $projectCreateEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectCreateStartTime(): ?string
    {
        return $this->projectCreateStartTime;
    }

    /**
     * @param string $projectCreateStartTime
     * @return self
     */
    public function setProjectCreateStartTime(?string $projectCreateStartTime): self
    {
        $this->projectCreateStartTime = $projectCreateStartTime;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProjectId(): ?array
    {
        return $this->projectId;
    }

    /**
     * @param int[] $projectId
     * @return self
     */
    public function setProjectId(?array $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectModifyEndTime(): ?string
    {
        return $this->projectModifyEndTime;
    }

    /**
     * @param string $projectModifyEndTime
     * @return self
     */
    public function setProjectModifyEndTime(?string $projectModifyEndTime): self
    {
        $this->projectModifyEndTime = $projectModifyEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectModifyStartTime(): ?string
    {
        return $this->projectModifyStartTime;
    }

    /**
     * @param string $projectModifyStartTime
     * @return self
     */
    public function setProjectModifyStartTime(?string $projectModifyStartTime): self
    {
        $this->projectModifyStartTime = $projectModifyStartTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30FilteringStatusFirst
     */
    public function getStatusFirst(): ?string
    {
        return $this->statusFirst;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30FilteringStatusFirst $statusFirst
     * @return self
     */
    public function setStatusFirst(?string $statusFirst): self
    {
        $this->statusFirst = $statusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30FilteringStatusSecond
     */
    public function getStatusSecond(): ?string
    {
        return $this->statusSecond;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30FilteringStatusSecond $statusSecond
     * @return self
     */
    public function setStatusSecond(?string $statusSecond): self
    {
        $this->statusSecond = $statusSecond;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->projectCreateEndTime !== null) {
            $result['project_create_end_time'] = $this->projectCreateEndTime;
        }
        if ($this->projectCreateStartTime !== null) {
            $result['project_create_start_time'] = $this->projectCreateStartTime;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->projectModifyEndTime !== null) {
            $result['project_modify_end_time'] = $this->projectModifyEndTime;
        }
        if ($this->projectModifyStartTime !== null) {
            $result['project_modify_start_time'] = $this->projectModifyStartTime;
        }
        if ($this->statusFirst !== null) {
            $result['status_first'] = $this->statusFirst;
        }
        if ($this->statusSecond !== null) {
            $result['status_second'] = $this->statusSecond;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_create_end_time'] ?? null) !== null) {
            $obj->projectCreateEndTime = (string) $v;
        }
        if (($v = $data['project_create_start_time'] ?? null) !== null) {
            $obj->projectCreateStartTime = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null && is_array($v)) {
            $obj->projectId = $v;
        }
        if (($v = $data['project_modify_end_time'] ?? null) !== null) {
            $obj->projectModifyEndTime = (string) $v;
        }
        if (($v = $data['project_modify_start_time'] ?? null) !== null) {
            $obj->projectModifyStartTime = (string) $v;
        }
        if (($v = $data['status_first'] ?? null) !== null) {
            $obj->statusFirst = (string) $v;
        }
        if (($v = $data['status_second'] ?? null) !== null) {
            $obj->statusSecond = (string) $v;
        }
        return $obj;
    }
}
