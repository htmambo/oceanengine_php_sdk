<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoMaterialClearTaskCreateV2RequestClearTaskParams implements \JsonSerializable
{
    /**
     * 清理素材类型， 允许值： INEFFICIENT_MATERIAL低效素材； SIMILAR_MATERIAL 同质化挤压严重素材； SIMILAR_QUEUE_MATERIAL 同质化排队素材;
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes[]
     */
    protected ?array $clearMaterialTypes = null;

    /**
     * 累积转化数@PM补充描述是UPPER值
     * @var int
     */
    protected ?int $convert = null;

    /**
     * 累积消耗@PM补充描述是UPPER值
     * @var float
     */
    protected ?float $cost = null;

    /**
     * 清理创建时间\"yyyy-mm-dd\"之前的素材，包括这一天
     * @var string
     */
    protected ?string $createTimeUpper = null;

    /**
     * 数据统计结束时间\"yyyy-mm-dd\"
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 待清理素材列表，单次最多支持100个
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource
     */
    protected ?string $materialSource = null;

    /**
     * 数据统计开始时间\"yyyy-mm-dd\"
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 清理素材类型， 允许值： INEFFICIENT_MATERIAL低效素材； SIMILAR_MATERIAL 同质化挤压严重素材； SIMILAR_QUEUE_MATERIAL 同质化排队素材;
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes[]
     */
    public function getClearMaterialTypes(): ?array
    {
        return $this->clearMaterialTypes;
    }

    /**
     * 清理素材类型， 允许值： INEFFICIENT_MATERIAL低效素材； SIMILAR_MATERIAL 同质化挤压严重素材； SIMILAR_QUEUE_MATERIAL 同质化排队素材;
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2ClearTaskParamsClearMaterialTypes[] $clearMaterialTypes
     * @return self
     */
    public function setClearMaterialTypes(?array $clearMaterialTypes): self
    {
        $this->clearMaterialTypes = $clearMaterialTypes;
        return $this;
    }

    /**
     * 累积转化数@PM补充描述是UPPER值
     * @return int
     */
    public function getConvert(): ?int
    {
        return $this->convert;
    }

    /**
     * 累积转化数@PM补充描述是UPPER值
     * @param int $convert
     * @return self
     */
    public function setConvert(?int $convert): self
    {
        $this->convert = $convert;
        return $this;
    }

    /**
     * 累积消耗@PM补充描述是UPPER值
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * 累积消耗@PM补充描述是UPPER值
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * 清理创建时间\"yyyy-mm-dd\"之前的素材，包括这一天
     * @return string
     */
    public function getCreateTimeUpper(): ?string
    {
        return $this->createTimeUpper;
    }

    /**
     * 清理创建时间\"yyyy-mm-dd\"之前的素材，包括这一天
     * @param string $createTimeUpper
     * @return self
     */
    public function setCreateTimeUpper(?string $createTimeUpper): self
    {
        $this->createTimeUpper = $createTimeUpper;
        return $this;
    }

    /**
     * 数据统计结束时间\"yyyy-mm-dd\"
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 数据统计结束时间\"yyyy-mm-dd\"
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 待清理素材列表，单次最多支持100个
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 待清理素材列表，单次最多支持100个
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource
     */
    public function getMaterialSource(): ?string
    {
        return $this->materialSource;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2ClearTaskParamsMaterialSource $materialSource
     * @return self
     */
    public function setMaterialSource(?string $materialSource): self
    {
        $this->materialSource = $materialSource;
        return $this;
    }

    /**
     * 数据统计开始时间\"yyyy-mm-dd\"
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 数据统计开始时间\"yyyy-mm-dd\"
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
