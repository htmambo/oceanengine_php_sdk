<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsMaterialRaiseGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst
     */
    protected ?string $materialAdjustStatusFirst = null;

    /**
     * 素材起量任务二级状态
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusSecond[]
     */
    protected ?array $materialAdjustStatusSecond = null;

    /**
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialsType
     */
    protected ?string $materialsType = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo
     */
    protected ?\Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo $raiseInfo = null;

    /**
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst
     */
    public function getMaterialAdjustStatusFirst(): ?string
    {
        return $this->materialAdjustStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst $materialAdjustStatusFirst
     * @return self
     */
    public function setMaterialAdjustStatusFirst(?string $materialAdjustStatusFirst): self
    {
        $this->materialAdjustStatusFirst = $materialAdjustStatusFirst;
        return $this;
    }

    /**
     * 素材起量任务二级状态
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusSecond[]
     */
    public function getMaterialAdjustStatusSecond(): ?array
    {
        return $this->materialAdjustStatusSecond;
    }

    /**
     * 素材起量任务二级状态
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusSecond[] $materialAdjustStatusSecond
     * @return self
     */
    public function setMaterialAdjustStatusSecond(?array $materialAdjustStatusSecond): self
    {
        $this->materialAdjustStatusSecond = $materialAdjustStatusSecond;
        return $this;
    }

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
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialsType
     */
    public function getMaterialsType(): ?string
    {
        return $this->materialsType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30DataListMaterialsType $materialsType
     * @return self
     */
    public function setMaterialsType(?string $materialsType): self
    {
        $this->materialsType = $materialsType;
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
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo
     */
    public function getRaiseInfo(): ?\Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo
    {
        return $this->raiseInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo $raiseInfo
     * @return self
     */
    public function setRaiseInfo(?\Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo $raiseInfo): self
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialAdjustStatusFirst !== null) {
            $result['material_adjust_status_first'] = $this->materialAdjustStatusFirst;
        }
        if ($this->materialAdjustStatusSecond !== null) {
            $result['material_adjust_status_second'] = $this->materialAdjustStatusSecond;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialsType !== null) {
            $result['materials_type'] = $this->materialsType;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_adjust_status_first'] ?? null) !== null) {
            $obj->materialAdjustStatusFirst = (string) $v;
        }
        if (($v = $data['material_adjust_status_second'] ?? null) !== null && is_array($v)) {
            $obj->materialAdjustStatusSecond = $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['materials_type'] ?? null) !== null) {
            $obj->materialsType = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['raise_info'] ?? null) !== null && is_array($v)) {
            $obj->raiseInfo = \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30ResponseDataListInnerRaiseInfo::fromArray($v);
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        return $obj;
    }
}
