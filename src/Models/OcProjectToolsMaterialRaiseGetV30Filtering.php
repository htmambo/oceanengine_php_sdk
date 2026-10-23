<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsMaterialRaiseGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst
     */
    protected ?string $materialAdjustStatusFirst = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond
     */
    protected ?string $materialAdjustStatusSecond = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var string
     */
    protected ?string $scheduleId = null;

    /**
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst
     */
    public function getMaterialAdjustStatusFirst(): ?string
    {
        return $this->materialAdjustStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst $materialAdjustStatusFirst
     * @return self
     */
    public function setMaterialAdjustStatusFirst(?string $materialAdjustStatusFirst): self
    {
        $this->materialAdjustStatusFirst = $materialAdjustStatusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond
     */
    public function getMaterialAdjustStatusSecond(): ?string
    {
        return $this->materialAdjustStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond $materialAdjustStatusSecond
     * @return self
     */
    public function setMaterialAdjustStatusSecond(?string $materialAdjustStatusSecond): self
    {
        $this->materialAdjustStatusSecond = $materialAdjustStatusSecond;
        return $this;
    }

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
     * @return string
     */
    public function getScheduleId(): ?string
    {
        return $this->scheduleId;
    }

    /**
     * @param string $scheduleId
     * @return self
     */
    public function setScheduleId(?string $scheduleId): self
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
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
        if (($v = $data['material_adjust_status_second'] ?? null) !== null) {
            $obj->materialAdjustStatusSecond = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (string) $v;
        }
        return $obj;
    }
}
