<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerMaterialListInner[]
     */
    protected ?array $materialList = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo
     */
    protected ?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo $raiseInfo = null;

    /**
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * @var \Oceanengine\Models\ToolsMaterialRaiseGetV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerMaterialListInner[]
     */
    public function getMaterialList(): ?array
    {
        return $this->materialList;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerMaterialListInner[] $materialList
     * @return self
     */
    public function setMaterialList(?array $materialList): self
    {
        $this->materialList = $materialList;
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
     * @return \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo
     */
    public function getRaiseInfo(): ?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo
    {
        return $this->raiseInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo $raiseInfo
     * @return self
     */
    public function setRaiseInfo(?\Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo $raiseInfo): self
    {
        $this->raiseInfo = $raiseInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMaterialRaiseGetV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsMaterialRaiseGetV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialList !== null) {
            $result['material_list'] = $this->materialList;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->raiseInfo !== null) {
            $result['raise_info'] = $this->raiseInfo;
        }
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['material_list'] ?? null) !== null && is_array($v)) {
            $obj->materialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['raise_info'] ?? null) !== null && is_array($v)) {
            $obj->raiseInfo = \Oceanengine\Models\ToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo::fromArray($v);
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
