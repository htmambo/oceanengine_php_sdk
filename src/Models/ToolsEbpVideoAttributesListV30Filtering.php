<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoAttributesListV30Filtering implements \JsonSerializable
{
    /**
     * 结束日期，表示过滤出一段时间内上传的素材，格式为yyyy-mm-dd HH:MM:SS，如果传入起始日期，未传此参数，则默认为当前时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 按素材ID过滤，范围为1-1000
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 素材标签过滤项，如果不传，则默认返回广告主ID下所有素材。 允许值：
     * @var \Oceanengine\Models\ToolsEbpVideoAttributesListV30FilteringMaterialProperties[]
     */
    protected ?array $materialProperties = null;

    /**
     * 起始日期，表示按照素材上传到账户下的时间过滤，格式为yyyy-mm-dd HH:MM:SS，最早允许传入时间：2022-01-01 00:00:00 （时间是账号和素材绑定的时间，删除重绑时间会更新）
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 结束日期，表示过滤出一段时间内上传的素材，格式为yyyy-mm-dd HH:MM:SS，如果传入起始日期，未传此参数，则默认为当前时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束日期，表示过滤出一段时间内上传的素材，格式为yyyy-mm-dd HH:MM:SS，如果传入起始日期，未传此参数，则默认为当前时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 按素材ID过滤，范围为1-1000
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 按素材ID过滤，范围为1-1000
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 素材标签过滤项，如果不传，则默认返回广告主ID下所有素材。 允许值：
     * @return \Oceanengine\Models\ToolsEbpVideoAttributesListV30FilteringMaterialProperties[]
     */
    public function getMaterialProperties(): ?array
    {
        return $this->materialProperties;
    }

    /**
     * 素材标签过滤项，如果不传，则默认返回广告主ID下所有素材。 允许值：
     * @param \Oceanengine\Models\ToolsEbpVideoAttributesListV30FilteringMaterialProperties[] $materialProperties
     * @return self
     */
    public function setMaterialProperties(?array $materialProperties): self
    {
        $this->materialProperties = $materialProperties;
        return $this;
    }

    /**
     * 起始日期，表示按照素材上传到账户下的时间过滤，格式为yyyy-mm-dd HH:MM:SS，最早允许传入时间：2022-01-01 00:00:00 （时间是账号和素材绑定的时间，删除重绑时间会更新）
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 起始日期，表示按照素材上传到账户下的时间过滤，格式为yyyy-mm-dd HH:MM:SS，最早允许传入时间：2022-01-01 00:00:00 （时间是账号和素材绑定的时间，删除重绑时间会更新）
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
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialProperties !== null) {
            $result['material_properties'] = $this->materialProperties;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['material_properties'] ?? null) !== null && is_array($v)) {
            $obj->materialProperties = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
