<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoMaterialClearTaskGetV2ResponseDataListInnerClearTaskParams implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes[]
     */
    protected ?array $clearMaterialTypes = null;

    /**
     * @var int
     */
    protected ?int $convert = null;

    /**
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var string
     */
    protected ?string $createTimeUpper = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 待清理的素材列表
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource
     */
    protected ?string $materialSource = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes[]
     */
    public function getClearMaterialTypes(): ?array
    {
        return $this->clearMaterialTypes;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListClearTaskParamsClearMaterialTypes[] $clearMaterialTypes
     * @return self
     */
    public function setClearMaterialTypes(?array $clearMaterialTypes): self
    {
        $this->clearMaterialTypes = $clearMaterialTypes;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvert(): ?int
    {
        return $this->convert;
    }

    /**
     * @param int $convert
     * @return self
     */
    public function setConvert(?int $convert): self
    {
        $this->convert = $convert;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTimeUpper(): ?string
    {
        return $this->createTimeUpper;
    }

    /**
     * @param string $createTimeUpper
     * @return self
     */
    public function setCreateTimeUpper(?string $createTimeUpper): self
    {
        $this->createTimeUpper = $createTimeUpper;
        return $this;
    }

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
     * 待清理的素材列表
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 待清理的素材列表
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource
     */
    public function getMaterialSource(): ?string
    {
        return $this->materialSource;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListClearTaskParamsMaterialSource $materialSource
     * @return self
     */
    public function setMaterialSource(?string $materialSource): self
    {
        $this->materialSource = $materialSource;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clearMaterialTypes !== null) {
            $result['clear_material_types'] = $this->clearMaterialTypes;
        }
        if ($this->convert !== null) {
            $result['convert'] = $this->convert;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->createTimeUpper !== null) {
            $result['create_time_upper'] = $this->createTimeUpper;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialSource !== null) {
            $result['material_source'] = $this->materialSource;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clear_material_types'] ?? null) !== null && is_array($v)) {
            $obj->clearMaterialTypes = $v;
        }
        if (($v = $data['convert'] ?? null) !== null) {
            $obj->convert = (int) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['create_time_upper'] ?? null) !== null) {
            $obj->createTimeUpper = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['material_source'] ?? null) !== null) {
            $obj->materialSource = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
